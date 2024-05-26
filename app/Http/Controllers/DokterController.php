<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return response()->json($dokter);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'id_jadwal' => 'required|exists:jadwal,id',
            'id_layanan' => 'required|exists:services,id',
        ]);

        $dokter = Dokter::create($validatedData);
        return response()->json($dokter, 201);
    }

    public function show(Dokter $dokter)
    {
        return response()->json($dokter);
    }

    public function update(Request $request, Dokter $dokter)
    {
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'id_jadwal' => 'sometimes|required|exists:jadwal,id',
            'id_layanan' => 'sometimes|required|exists:services,id',
        ]);

        $dokter->update($validatedData);
        return response()->json($dokter);
    }

    public function destroy(Dokter $dokter)
    {
        $dokter->delete();
        return response()->json(null, 204);
    }
}
