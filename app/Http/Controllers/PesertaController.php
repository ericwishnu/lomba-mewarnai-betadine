<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peserta;
class PesertaController extends Controller
{
    public function index()
    {
        $pesertas = Peserta::all();
        return view('admin.peserta', compact('pesertas'));
    }
    
}
