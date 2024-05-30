<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Dokter;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // public function index()
    // {
    //     $bookings = Booking::all();
    //     return response()->json($bookings);
    // }


    public function detail($id_doctor)
{
    // Ambil data dokter berdasarkan id
    $dokter = Dokter::find($id_doctor);

    // Tentukan sesi waktu yang telah ditetapkan
    $sesi_waktu = [
        ['mulai' => '08:00', 'selesai' => '11:00'],
        ['mulai' => '13:00', 'selesai' => '16:00'],
        // Tambahkan sesi waktu lainnya jika ada
    ];

    // Periksa apakah ada sesi yang masih tersedia
    $sesi_tersedia = [];
    foreach ($sesi_waktu as $sesi) {
        $booking_count = Booking::where('id_dokter', $id_doctor)
                                ->whereDate('created_at', now()) // Filter berdasarkan tanggal hari ini
                                ->whereTime('created_at', '>=', $sesi['mulai']) // Filter berdasarkan waktu mulai sesi
                                ->whereTime('created_at', '<', $sesi['selesai']) // Filter berdasarkan waktu selesai sesi
                                ->count();

        // Cek apakah sesi masih tersedia (maksimal 5 pasien per sesi)
        if ($booking_count < 5) {
            $sesi_tersedia[] = [
                'mulai' => $sesi['mulai'],
                'selesai' => $sesi['selesai'],
            ];
        }
    }

    return view('doctor_detail', compact('dokter', 'sesi_tersedia'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_jadwal' => 'required|exists:jadwal,id',
            'id_pasien' => 'required|exists:pasien,id',
            'id_dokter' => 'required|exists:dokter,id',
            'status' => 'required|string|max:255',
        ]);

        $booking = Booking::create($validatedData);
        return response()->json($booking, 201);
    }

    public function show(Booking $booking)
    {
        return response()->json($booking);
    }

    public function update(Request $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'id_jadwal' => 'sometimes|required|exists:jadwal,id',
            'id_pasien' => 'sometimes|required|exists:pasien,id',
            'id_dokter' => 'sometimes|required|exists:dokter,id',
            'status' => 'sometimes|required|string|max:255',
        ]);

        $booking->update($validatedData);
        return response()->json($booking);
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json(null, 204);
    }
}
