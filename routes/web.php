<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DosenTetapController;
use App\Http\Controllers\ProspekKerjaController;
use App\Http\Controllers\SebaranMataKuliahController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\FasilitasUniversitasController;

// Route::get('/', function () {
//     return view('welcome');
// });

// BERANDA BIASA
// Route::get('/', function () {
//     return view('pages.beranda');
// })->name('beranda');

// BERANDA PAKAI ARTIKEL
Route::get('/', function () {
    // Ambil 5 artikel terbaru yang sudah dipublikasikan
    $latestArtikels = Artikel::where('published_at', '<=', now())
        ->latest('published_at')
        ->take(5)
        ->get();

    return view('pages.beranda', [
        'latestArtikels' => $latestArtikels
    ]);
})->name('beranda');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk Halaman Struktur Organisasi
Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi.index');
Route::get('/struktur-organisasi/{strukturOrganisasi}', [StrukturOrganisasiController::class, 'show'])->name('struktur-organisasi.show');

// Route untuk Halaman Dosen Tetap
Route::get('/dosen-tetap', [DosenTetapController::class, 'index'])->name('dosen-tetap.index');
Route::get('/dosen-tetap/{dosenTetap}', [DosenTetapController::class, 'show'])->name('dosen-tetap.show');

// Route untuk Halaman Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show'])->name('artikel.show');

// Route Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

// Route untuk Halaman Visi & Misi
Route::get('/profil/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi.index');

// Route untuk Halaman Fasilitas
Route::get('/akademik/fasilitas-program-studi', [FasilitasController::class, 'index'])->name('fasilitas.index');

// Route untuk Halaman Fasilitas Universitas
Route::get('/akademik/fasilitas-universitas', [FasilitasUniversitasController::class, 'index'])->name('fasilitas-universitas.index');

// Route untuk Halaman Sebaran Mata Kuliah
Route::get('/akademik/sebaran-mata-kuliah', [SebaranMataKuliahController::class, 'index'])->name('sebaran-matkul.index');

// Route untuk Halaman Prospek Kerja Lulusan
Route::get('/akademik/prospek-kerja-lulusan', [ProspekKerjaController::class, 'index'])->name('prospek-kerja.index');

require __DIR__.'/auth.php';
