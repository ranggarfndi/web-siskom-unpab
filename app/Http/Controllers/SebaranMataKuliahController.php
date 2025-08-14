<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SebaranMataKuliahController extends Controller
{
    public function index()
    {
        return view('pages.akademik.sebaran-mata-kuliah');
    }
}