<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        return view('pages.akademik.fasilitas', ['fasilitas' => $fasilitas]);
    }
}
