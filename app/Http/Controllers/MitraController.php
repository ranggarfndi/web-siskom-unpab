<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::latest()->get();
        return view('pages.profil.kemitraan', compact('mitra'));
    }
}
