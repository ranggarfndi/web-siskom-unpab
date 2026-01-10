<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Menampilkan daftar artikel dengan fitur pencarian dan filter.
     */
    public function index(Request $request)
    {
        // Mulai query dasar: hanya artikel yang sudah terbit
        $query = Artikel::where('published_at', '<=', now());

        // Logika Pencarian Kata (Judul atau Konten)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                  ->orWhere('konten', 'like', "%{$search}%");
            });
        }

        // Logika Filter Tanggal
        if ($request->filled('date')) {
            $query->whereDate('published_at', $request->date);
        }

        // Eksekusi query dengan pagination (9 per halaman) dan pertahankan parameter URL
        $artikels = $query->orderBy('published_at', 'desc')
                          ->paginate(9)
                          ->withQueryString();

        return view('pages.artikel.index', compact('artikels'));
    }

    /**
     * Menampilkan detail artikel beserta berita terkait.
     */
    public function show(Artikel $artikel)
    {
        // Pastikan hanya artikel yang sudah terbit yang bisa diakses
        // Jika artikel dijadwalkan untuk masa depan, tampilkan 404
        if ($artikel->published_at > now()) {
            abort(404);
        }

        // Ambil 3 artikel terbaru lainnya untuk bagian "Berita Terbaru Lainnya"
        // Syarat: Sudah terbit DAN bukan artikel yang sedang dibuka saat ini
        $relatedArticles = Artikel::where('published_at', '<=', now())
            ->where('id', '!=', $artikel->id) // Kecualikan artikel ini sendiri
            ->latest('published_at')
            ->take(5)
            ->get();
        
        return view('pages.artikel.show', compact('artikel', 'relatedArticles'));
    }
}