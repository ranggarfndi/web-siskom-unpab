<?php

namespace App\Http\Controllers;

use App\Models\FasilitasUniversitas;
use Illuminate\Http\Request;

class FasilitasUniversitasController extends Controller
{
    public function index()
    {
        $fasilitas = FasilitasUniversitas::orderBy('created_at', 'desc')->get();
        return view('pages.akademik.fasilitas-universitas', ['fasilitas' => $fasilitas]);
    }
}