<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    protected $fillable = [
        'nama',
        'merek',
        'ukuran',
        'warna',
        'harga',
        'stok',
    ];
}
