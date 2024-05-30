<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('doctor', compact('dokters', 'layanan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jam' => 'required|string|max:255',
        ]);

        $jadwal = Jadwal::create($validatedData);
        return response()->json($jadwal, 201);
    }

    public function show(Jadwal $jadwal)
    {
        return response()->json($jadwal);
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $validatedData = $request->validate([
            'jam' => 'sometimes|required|string|max:255',
        ]);

        $jadwal->update($validatedData);
        return response()->json($jadwal);
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return response()->json(null, 204);
    }
}
