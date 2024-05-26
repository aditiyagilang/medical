<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RiwayatPenyakit;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;
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
        try {
            $validatedData = $request->validate([
                'nik' => 'required|unique:pasien,NIK',
                'email' => 'required|email',
                'name' => 'required|string|max:255',
                'gender' => 'required|in:laki laki,perempuan',
                'dob' => 'required|date',
                'phone' => 'required|string|max:15',
                'alamat' => 'required|string',
                'riwayat' => 'required|string',
            ]);

            // Insert data into Pasien table
            $pasien = Pasien::create([
                'NIK' => $validatedData['nik'],
                'email' => $validatedData['email'],
                'nama' => $validatedData['name'],
                'gender' => $validatedData['gender'],
                'tanggal_lahir' => $validatedData['dob'],
                'no_hp' => $validatedData['phone'],
                'alamat' => $validatedData['alamat'],
            ]);

            // Insert data into RiwayatPenyakit table
            RiwayatPenyakit::create([
                'pasien_id' => $pasien->id,
                'riwayat_penyakit' => $validatedData['riwayat'],
            ]);

            return redirect()->back()->with('success', 'Data pasien berhasil disimpan.');
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->with('error', 'NIK sudah terdaftar.');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data.');
        }
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



    public function showLoginForm()
    {
        return view('pasien_lama');
    }

    public function pasien(Request $request)
    {
        // DD("AAAA");
        $validatedData = $request->validate([
            'nik' => 'required|exists:pasien,NIK',
            'dob' => 'required|date|exists:pasien,tanggal_lahir',
        ]);

        $pasien = Pasien::where('NIK', $validatedData['nik'])
            ->where('tanggal_lahir', $validatedData['dob'])
            ->first();

        if ($pasien) {
            // Fetch riwayat only if pasien exists
            $riwayat = RiwayatPenyakit::where('pasien_id', $pasien->id)
                ->get();
        }

        if ($pasien) {
            // Storing user information in session
            return view('data_pasienlama', compact('pasien', 'riwayat'))->with('success', 'Login successful.');
        }

        return redirect()->back()->with('error', 'NIK atau Tanggal Lahir tidak sesuai.');
    }

    public function storeRiwayat(Request $request)
    {
        $validatedData = $request->validate([
            'pasien_id' => 'required|exists:pasien,id',
            'riwayat' => 'required|string',
        ]);

        // Simpan riwayat penyakit ke database
        RiwayatPenyakit::create([
            'pasien_id' => $validatedData['pasien_id'],
            'riwayat_penyakit' => $validatedData['riwayat'],
        ]);

        
        $validatedData = $request->validate([
            'nik' => 'required|exists:pasien,NIK',
            'dob' => 'required|date|exists:pasien,tanggal_lahir',
        ]);

        $pasien = Pasien::where('NIK', $validatedData['nik'])
            ->where('tanggal_lahir', $validatedData['dob'])
            ->first();

        if ($pasien) {
            // Fetch riwayat only if pasien exists
            $riwayat = RiwayatPenyakit::where('pasien_id', $pasien->id)
                ->get();
        }

        if ($pasien) {
            // Storing user information in session
            return view('data_pasienlama', compact('pasien', 'riwayat'))->with('success', 'Riwayat penyakit berhasil ditambahkan.');
        }

    }
}
