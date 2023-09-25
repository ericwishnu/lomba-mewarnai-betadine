<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peserta;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::orderBy('id', 'desc')->get();
        return view('admin.peserta', compact('pesertas'));
    }

    public function success()
    {
        return view('pages.download');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_ibu' => 'required|max:255',
            'nama_anak' => 'required|max:255',
            'usia_anak' => 'required|max:255',
            'kartu_pelajar' => 'required|file|mimes:jpg,jpeg,png|max:2560',
            'email' => 'required|email',
            'phone' => 'required|max:255',
            'instagram' => 'required|max:255',
            'bukti_belanja' => 'required|file|mimes:jpg,jpeg,png|max:2560',
        ]);

        // dd($data);
        //Kartu Pelajar
        // Store the uploaded file
        $kartuPelajarUploadedFile = $request->file('kartu_pelajar');
        $kartuPelajarFilePath = $kartuPelajarUploadedFile->store('public/uploads');

        // Generate a thumbnail
        $thumbnail = Image::make(storage_path("app/{$kartuPelajarFilePath}"))
            ->fit(300, 300) // Adjust the thumbnail size as needed
            ->encode('jpg'); // Change the format if necessary

        // Store the thumbnail
        $kartuPelajarThumbnailPath = "thumbnails/{$kartuPelajarUploadedFile->hashName()}.jpg";
        Storage::put($kartuPelajarThumbnailPath, $thumbnail);

        //Bukti Belanja
        // Store the uploaded file
        $buktiBelanjaUploadedFile = $request->file('bukti_belanja');
        $buktiBelanjaFilePath = $buktiBelanjaUploadedFile->store('public/uploads');

        // Generate a thumbnail
        $thumbnail = Image::make(storage_path("app/{$buktiBelanjaFilePath}"))
            ->fit(300, 300) // Adjust the thumbnail size as needed
            ->encode('jpg'); // Change the format if necessary

        // Store the thumbnail
        $buktiBelanjaThumbnailPath = "thumbnails/{$buktiBelanjaUploadedFile->hashName()}.jpg";
        Storage::put($buktiBelanjaThumbnailPath, $thumbnail);


        $peserta['mother_name'] = $data['nama_ibu'];
        $peserta['kids_name'] = $data['nama_anak'];
        $peserta['kids_age'] = $data['usia_anak'];
        $peserta['email'] = $data['email'];
        $peserta['phone'] = $data['phone'];
        $peserta['instagram'] = $data['instagram'];
        $peserta['student_id_url'] =  Storage::url($kartuPelajarFilePath);
        $peserta['purchase_receipt_url'] =  Storage::url($buktiBelanjaFilePath);

        Peserta::create($peserta);

        // You can save the file and thumbnail paths in your database here if needed

        // return response()->json([
        //     'message' => 'Registrasi berhasil',
        // ]);
        return redirect()->route('peserta.sucess')->withInput(['success' => 'Registrasi Berhasil']);
    }
    
}
