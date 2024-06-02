<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Dokter;
use App\Models\Jadwal;
use App\Models\Pasien;
// use Barryvdh\DomPDF\PDF;
use PDF;
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
        'waktu' => 'required|date_format:H:i',
        'id_dokter' => 'required|exists:dokter,id',
        'status' => 'required|string',
    ]);

    // Ambil ID pasien dari session
    $validatedData['id_pasien'] = session()->get('pasien_id');

    if (!$validatedData['id_pasien']) {
        return view('/daftar_pasien')->with('error', 'ID pasien tidak ditemukan dalam sesi. Silakan daftar terlebih dahulu.');
    }

    // Tentukan sesi berdasarkan waktu yang dipilih
    $waktu = $validatedData['waktu'];

    // Tentukan sesi berdasarkan waktu mulai
    if ($waktu == '08:00') {
        $sesi = 'Sesi1';
    } elseif ($waktu == '13:00') {
        $sesi = 'Sesi2';
    } else {
        return redirect()->back()->with('error', 'Waktu yang dipilih tidak valid.');
    }

    // Simpan data booking dengan sesi yang ditentukan
    $validatedData['sesi'] = $sesi;
    $booking = Booking::create($validatedData);

    // Ambil dokter berdasarkan id
    $dokter = Dokter::find($booking->id_dokter);

    // Ambil pasien berdasarkan id
    $pasien = Pasien::find($validatedData['id_pasien']);

    // Hitung nomor antrian
    $total_booking_hari_ini = Booking::where('id_dokter', $booking->id_dokter)
        ->whereDate('created_at', now())
        ->count();

    // Data untuk PDF
    $data = [
        'dokter' => $dokter,
        'pasien' => $pasien,
        'booking' => $booking,
        'nomor_antrian' => str_pad($total_booking_hari_ini, 3, '0', STR_PAD_LEFT), // Format nomor antrian menjadi 001, 002, dst.
    ];

    // Load view dengan data
    $pdf = PDF::loadView('noantrian', $data);

    // Set ukuran kertas menjadi A6
    $pdf->setPaper([0, 0, 297.638, 419.528], 'portrait'); // Ukuran A6 dalam satuan points

    // Unduh PDF
    return $pdf->download('noantrian.pdf');
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
