<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaraPembayaranController extends Controller
{
    public function index()
    {
        return view('pages.pendaftaran.cara-pembayaran');
    }
}
