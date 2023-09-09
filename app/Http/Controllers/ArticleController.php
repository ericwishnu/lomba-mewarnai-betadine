<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }
   

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:255',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2560',
            'status' => 'required|integer',
            'published_at' => 'nullable|date_format:Y-m-d H:i:s',
        ]);

        $article['slug'] = Str::slug($data['title']);


        // dd($data);
        //Kartu Pelajar
        // Store the uploaded file
        $articleImageUploadedFile = $request->file('image');
        $articleImageFilePath = $articleImageUploadedFile->store('public/articles');

        // Generate a thumbnail
        $thumbnail = Image::make(storage_path("app/{$articleImageFilePath}"))
            ->fit(400, 300) // Adjust the thumbnail size as needed
            ->encode('jpg'); // Change the format if necessary

        // Store the thumbnail
        $kartuPelajarThumbnailPath = "thumbnails/{$articleImageUploadedFile->hashName()}.jpg";
        Storage::put($kartuPelajarThumbnailPath, $thumbnail);




        $article['title'] = $data['title'];
        $article['category'] = $data['category'];
        $article['content'] = $data['content'];
        $article['status'] = $data['status'];
        $article['image_url'] =  Storage::url($articleImageFilePath);
        $article['published_at'] = $data['published_at'];
        $article['created_by'] = auth()->user()->id;
        $article['slug'] = Str::slug($data['title']);
        Article::create($article);

        // You can save the file and thumbnail paths in your database here if needed

        // return response()->json([
        //     'message' => 'Registrasi berhasil',
        // ]);
        return redirect()->route('superadmin.parenting')->withInput(['success' => 'Article Berhasil di tambah']);
    }
    public function edit($id)
    {
        $article = Article::find($id);
        // dd($article);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        // $articles = Article::all();

        $article = Article::find($id);
        if (!$article) {
            // Handle arti$article not found (e.g., return a 404 response)
            return response()->json(['message' => 'Article not found'], 404);
        }
        if ($request->has('image')) {


            $articleImageUploadedFile = $request->file('image');
            $articleImageFilePath = $articleImageUploadedFile->store('public/articles');

            // Generate a thumbnail
            $thumbnail = Image::make(storage_path("app/{$articleImageFilePath}"))
                ->fit(400, 300) // Adjust the thumbnail size as needed
                ->encode('jpg'); // Change the format if necessary

            // Store the thumbnail
            $kartuPelajarThumbnailPath = "thumbnails/{$articleImageUploadedFile->hashName()}.jpg";
            Storage::put($kartuPelajarThumbnailPath, $thumbnail);
        }
        // dd($request->input());
        $data = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:255',
            'content' => 'required|string',
            'image' => 'file|mimes:jpg,jpeg,png|max:2560',
            'status' => 'required|integer',
            'published_at' => 'nullable|date_format:Y-m-d\TH:i',
        ]);
        // dd($data);
        $data['slug'] = Str::slug($data['title']);
        $formattedDatetime = date('Y-m-d H:i:s', strtotime($request->input('published_at')));

        // $parsedPublishedAt = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('published_at'));
        $data['published_at'] = $formattedDatetime;
        
        $article->update($data);

        return redirect()->route('superadmin.parenting', compact('article'));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('superadmin.parenting')
            ->with('success', 'Article deleted successfully.');
    }
}
