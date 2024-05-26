<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return response()->json($layanan);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $layanan = Layanan::create($validatedData);
        return response()->json($layanan, 201);
    }

    public function show(Layanan $layanan)
    {
        return response()->json($layanan);
    }

    public function update(Request $request, Layanan $layanan)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
        ]);

        $layanan->update($validatedData);
        return response()->json($layanan);
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return response()->json(null, 204);
    }
}
