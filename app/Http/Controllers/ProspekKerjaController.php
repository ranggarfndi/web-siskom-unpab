<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspekKerjaController extends Controller
{
    public function index()
    {
        return view('pages.akademik.prospek-kerja');
    }
}