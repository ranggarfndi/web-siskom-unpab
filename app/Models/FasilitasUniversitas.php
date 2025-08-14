<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUniversitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_universitas';

    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
    ];
}