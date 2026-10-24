<?php

namespace Database\Seeders;

use App\Models\Sepatu;
use Illuminate\Database\Seeder;

class SepatuSeeder extends Seeder
{
    public function run(): void
    {
        $sepatu = [
            [
                'nama'   => 'Air Max 270',
                'merek'  => 'Nike',
                'ukuran' => 42,
                'warna'  => 'Hitam',
                'harga'  => 1850000,
                'stok'   => 20,
            ],
            [
                'nama'   => 'Ultraboost 22',
                'merek'  => 'Adidas',
                'ukuran' => 41,
                'warna'  => 'Putih',
                'harga'  => 2300000,
                'stok'   => 15,
            ],
            [
                'nama'   => 'Old Skool',
                'merek'  => 'Vans',
                'ukuran' => 40,
                'warna'  => 'Hitam Putih',
                'harga'  => 750000,
                'stok'   => 30,
            ],
            [
                'nama'   => 'Chuck Taylor All Star',
                'merek'  => 'Converse',
                'ukuran' => 43,
                'warna'  => 'Merah',
                'harga'  => 680000,
                'stok'   => 25,
            ],
            [
                'nama'   => '574 Core',
                'merek'  => 'New Balance',
                'ukuran' => 42,
                'warna'  => 'Abu-abu',
                'harga'  => 1200000,
                'stok'   => 18,
            ],
        ];

        foreach ($sepatu as $item) {
            Sepatu::create($item);
        }
    }
}
