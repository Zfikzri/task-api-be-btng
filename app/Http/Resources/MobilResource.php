<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MobilResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'nama'      => $this->nama,
            'merek'     => $this->merek,
            'tahun'     => $this->tahun,
            'warna'     => $this->warna,
            'harga'     => $this->harga,
            'tersedia'  => (bool) $this->tersedia,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
