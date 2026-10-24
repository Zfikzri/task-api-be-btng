<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = [
        'nama',
        'merek',
        'tahun',
        'warna',
        'harga',
        'tersedia',
    ];
}
