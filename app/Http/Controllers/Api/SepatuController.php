<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SepatuResource;
use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    public function index()
    {
        $sepatu = Sepatu::all();
        return response()->json([
            'message' => 'Sepatu berhasil ditampilkan',
            'data'    => SepatuResource::collection($sepatu),
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'merek'  => 'required|string|max:255',
            'ukuran' => 'required|integer|min:1|max:60',
            'warna'  => 'required|string|max:100',
            'harga'  => 'required|numeric|min:0',
            'stok'   => 'nullable|integer|min:0',
        ]);

        $sepatu = Sepatu::create($validated);

        return response()->json([
            'message' => 'Sepatu berhasil dibuat',
            'data'    => new SepatuResource($sepatu),
        ], 201);
    }

    public function show($id)
    {
        $sepatu = Sepatu::find($id);

        if (!$sepatu) {
            return response()->json([
                'message' => 'Sepatu tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'message' => 'Sepatu berhasil ditemukan',
            'data'    => new SepatuResource($sepatu),
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $sepatu = Sepatu::find($id);

        if (!$sepatu) {
            return response()->json([
                'message' => 'Sepatu tidak ditemukan',
            ], 404);
        }

        $validated = $request->validate([
            'nama'   => 'sometimes|required|string|max:255',
            'merek'  => 'sometimes|required|string|max:255',
            'ukuran' => 'sometimes|required|integer|min:1|max:60',
            'warna'  => 'sometimes|required|string|max:100',
            'harga'  => 'sometimes|required|numeric|min:0',
            'stok'   => 'nullable|integer|min:0',
        ]);

        $sepatu->update($validated);

        return response()->json([
            'message' => 'Sepatu berhasil diupdate',
            'data'    => new SepatuResource($sepatu),
        ], 200);
    }

    public function destroy($id)
    {
        $sepatu = Sepatu::find($id);

        if (!$sepatu) {
            return response()->json([
                'message' => 'Sepatu tidak ditemukan',
            ], 404);
        }

        $sepatu->delete();

        return response()->json([
            'message' => 'Sepatu berhasil dihapus',
        ]);
    }
}
