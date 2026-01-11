<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsedurPendaftaranController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran.prosedur');
    }
}
