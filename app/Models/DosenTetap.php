<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DosenTetap extends Model
{
    protected $fillable = [
        'nama',
        'nidn',
        'no_hp',
        'email',
        'foto',
        'bidang_keahlian',
        'urutan',
    ];
}
