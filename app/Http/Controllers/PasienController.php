<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return response()->json($pasien);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|unique:pasien',
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'gender' => 'required|in:laki laki,perempuan',
        ]);

        $pasien = Pasien::create($validatedData);
        return response()->json($pasien, 201);
    }

    public function show(Pasien $pasien)
    {
        return response()->json($pasien);
    }

    public function update(Request $request, Pasien $pasien)
    {
        $validatedData = $request->validate([
            'NIK' => 'sometimes|required|unique:pasien,NIK,' . $pasien->id,
            'email' => 'sometimes|required|email',
            'nama' => 'sometimes|required|string|max:255',
            'tanggal_lahir' => 'sometimes|required|date',
            'alamat' => 'sometimes|required|string',
            'gender' => 'sometimes|required|in:laki laki,perempuan',
        ]);

        $pasien->update($validatedData);
        return response()->json($pasien);
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return response()->json(null, 204);
    }
}
