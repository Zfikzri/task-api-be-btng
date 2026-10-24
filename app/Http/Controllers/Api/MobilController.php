<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MobilResource;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return response()->json([
            'message' => 'Mobil berhasil ditampilkan',
            'data'    => MobilResource::collection($mobil),
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'     => 'required|string|max:255',
            'merek'    => 'required|string|max:255',
            'tahun'    => 'required|integer|min:1900|max:2100',
            'warna'    => 'required|string|max:100',
            'harga'    => 'required|numeric|min:0',
            'tersedia' => 'nullable|boolean',
        ]);

        $mobil = Mobil::create($validated);

        return response()->json([
            'message' => 'Mobil berhasil dibuat',
            'data'    => new MobilResource($mobil),
        ], 201);
    }

    public function show($id)
    {
        $mobil = Mobil::find($id);

        if (!$mobil) {
            return response()->json([
                'message' => 'Mobil tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'message' => 'Mobil berhasil ditemukan',
            'data'    => new MobilResource($mobil),
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);

        if (!$mobil) {
            return response()->json([
                'message' => 'Mobil tidak ditemukan',
            ], 404);
        }

        $validated = $request->validate([
            'nama'     => 'sometimes|required|string|max:255',
            'merek'    => 'sometimes|required|string|max:255',
            'tahun'    => 'sometimes|required|integer|min:1900|max:2100',
            'warna'    => 'sometimes|required|string|max:100',
            'harga'    => 'sometimes|required|numeric|min:0',
            'tersedia' => 'nullable|boolean',
        ]);

        $mobil->update($validated);

        return response()->json([
            'message' => 'Mobil berhasil diupdate',
            'data'    => new MobilResource($mobil),
        ], 200);
    }

    public function destroy($id)
    {
        $mobil = Mobil::find($id);

        if (!$mobil) {
            return response()->json([
                'message' => 'Mobil tidak ditemukan',
            ], 404);
        }

        $mobil->delete();

        return response()->json([
            'message' => 'Mobil berhasil dihapus',
        ]);
    }
}
