<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display the Visi & Misi page.
     */
    public function index()
    {
        return view('pages.profil.visi-misi');
    }
}