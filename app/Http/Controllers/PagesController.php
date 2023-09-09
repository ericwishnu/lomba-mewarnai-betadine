<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::published()->limit(4)->get();
        // dd($articles);
        return view('pages.index',compact('articles'));
    }
    
    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('pages.parenting.show', compact('article'));
    }

    public function showArticleList()
    {
        $articles = Article::published()->get();
        return view('pages.parenting.index',compact('articles'));
    }
}
