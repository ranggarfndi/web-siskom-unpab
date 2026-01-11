<?php

namespace App\Http\Controllers;

    use App\Models\RisetPengabdian;
    use Illuminate\Http\Request;

    class RisetPengabdianController extends Controller
    {
        public function index(Request $request)
        {
            $search = $request->input('search');

            // Query dasar
            $query = RisetPengabdian::query();

            // Jika ada pencarian, filter berdasarkan nama atau judul
            if ($search) {
                $query->where(function($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                        ->orWhere('judul', 'like', "%{$search}%");
                });
            }

            // Ambil data dan pisahkan berdasarkan jenis
            // Kita gunakan get() karena kita akan memfilter koleksinya, 
            // atau clone query builder untuk efisiensi database
            
            $riset = (clone $query)->where('jenis', 'riset')->latest()->get();
            $pengabdian = (clone $query)->where('jenis', 'pengabdian')->latest()->get();

            return view('pages.profil.riset-pengabdian', compact('riset', 'pengabdian'));
        }
    }
