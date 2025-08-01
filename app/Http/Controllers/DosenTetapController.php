<?php

namespace App\Http\Controllers;

use App\Models\DosenTetap;
use Illuminate\Http\Request;

class DosenTetapController extends Controller
{
    public function index()
    {
        $dosen = DosenTetap::orderBy('urutan', 'asc')->get();
        return view('pages.dosen-tetap.index', ['dosen' => $dosen]);
    }

    public function show(DosenTetap $dosenTetap)
    {
        return view('pages.dosen-tetap.show', ['detailDosen' => $dosenTetap]);
    }
}
