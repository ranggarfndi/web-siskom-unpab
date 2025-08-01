<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    /**
     * Menampilkan halaman daftar anggota organisasi.
     */
    public function index()
    {
        // Ambil semua data, urutkan berdasarkan kolom 'urutan' dari kecil ke besar
        $anggota = StrukturOrganisasi::orderBy('urutan', 'asc')->get();

        // Kirim data ke view
        return view('pages.struktur-organisasi.index', [
            'anggota' => $anggota,
        ]);
    }

    /**
     * Menampilkan halaman detail satu anggota.
     */
    public function show(StrukturOrganisasi $strukturOrganisasi)
    {
        // Kirim data anggota yang dipilih ke view
        return view('pages.struktur-organisasi.show', [
            'detailAnggota' => $strukturOrganisasi,
        ]);
    }
}
