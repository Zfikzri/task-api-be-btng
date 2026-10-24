<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SepatuResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'nama'      => $this->nama,
            'merek'     => $this->merek,
            'ukuran'    => $this->ukuran,
            'warna'     => $this->warna,
            'harga'     => $this->harga,
            'stok'      => $this->stok,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
