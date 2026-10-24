<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    public function run(): void
    {
        $mobil = [
            [
                'nama'     => 'Avanza G',
                'merek'    => 'Toyota',
                'tahun'    => 2022,
                'warna'    => 'Putih',
                'harga'    => 238500000,
                'tersedia' => true,
            ],
            [
                'nama'     => 'Civic RS',
                'merek'    => 'Honda',
                'tahun'    => 2023,
                'warna'    => 'Merah',
                'harga'    => 535800000,
                'tersedia' => true,
            ],
            [
                'nama'     => 'Xpander Cross',
                'merek'    => 'Mitsubishi',
                'tahun'    => 2022,
                'warna'    => 'Hitam',
                'harga'    => 298900000,
                'tersedia' => false,
            ],
            [
                'nama'     => 'Ertiga GX',
                'merek'    => 'Suzuki',
                'tahun'    => 2023,
                'warna'    => 'Silver',
                'harga'    => 265400000,
                'tersedia' => true,
            ],
            [
                'nama'     => 'Terios R',
                'merek'    => 'Daihatsu',
                'tahun'    => 2021,
                'warna'    => 'Biru',
                'harga'    => 248900000,
                'tersedia' => true,
            ],
        ];

        foreach ($mobil as $item) {
            Mobil::create($item);
        }
    }
}
