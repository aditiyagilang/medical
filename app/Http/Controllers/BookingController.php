<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return response()->json($bookings);
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
