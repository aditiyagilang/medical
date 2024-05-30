<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Dokter;
use App\Models\Jadwal;
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
            'id_pasien' => 'required|exists:pasien,id',
            'id_dokter' => 'required|exists:dokter,id',
            'status' => 'required|string',
        ]);

        // Simpan data booking
        $booking = Booking::create($validatedData);

        // Ambil dokter berdasarkan id
        $dokter = Dokter::find($booking->id_dokter);

        // Tentukan sesi waktu yang telah ditetapkan
        $sesi_waktu = [
            ['mulai' => '08:00', 'selesai' => '11:00'],
            ['mulai' => '13:00', 'selesai' => '16:00'],
        ];

        // Hitung nomor antrian
        $total_booking_hari_ini = Booking::where('id_dokter', $booking->id_dokter)
            ->whereDate('created_at', now())
            ->count();

        // Data untuk PDF
        $data = [
            'dokter' => $dokter,
            'nomor_antrian' => str_pad($total_booking_hari_ini, 3, '0', STR_PAD_LEFT), // Format nomor antrian menjadi 001, 002, dst.
        ];

        // Load view dengan data
        $pdf = PDF::loadView('noantrian', $data);

        // Set ukuran kertas menjadi A8
        $pdf->setPaper([0, 0, 297.638, 519.528], 'portrait'); // Ukuran A6 dalam satuan points
        // Ukuran A8 dalam satuan points (1 inch = 72 points)

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
