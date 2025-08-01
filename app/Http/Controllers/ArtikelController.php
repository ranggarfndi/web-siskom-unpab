<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(9); // 9 artikel per halaman

        return view('pages.artikel.index', compact('artikels'));
    }

    public function show(Artikel $artikel)
    {
        // Pastikan hanya artikel yang sudah terbit yang bisa diakses
        if ($artikel->published_at > now()) {
            abort(404);
        }

        return view('pages.artikel.show', compact('artikel'));
    }
}