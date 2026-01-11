<?php

namespace App\Http\Controllers;

    use App\Models\Alumni;
    use Illuminate\Http\Request;

    class AlumniController extends Controller
    {
        public function index()
        {
            // Mengambil data alumni terbaru
            $alumni = Alumni::latest()->get();
            return view('pages.profil.alumni', compact('alumni'));
        }
    }
