<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pasien;
use App\Models\Booking;
use App\Models\Dokter;
use App\Models\RiwayatPenyakit;
use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        // Ambil filter tanggal dari request
        $filterDate = $request->input('filterDate');

        // Query untuk join tabel booking, pasien, dan dokter
        $query = DB::table('booking')
            ->join('pasien', 'booking.id_pasien', '=', 'pasien.id')
            ->join('dokter', 'booking.id_dokter', '=', 'dokter.id')
            ->select(
                'booking.id as id_booking',
                'booking.status',
                'booking.created_at',
                'pasien.id as id_pasien',
                'pasien.NIK',
                'pasien.No_RM',
                'pasien.nama as nama',
                'pasien.tanggal_lahir',
                'pasien.id as pasien_id',
                'dokter.nama as nama_dokter',
                'dokter.layanan as nama_layanan'
            )
            ->orderBy('booking.id', 'desc');

        // Terapkan filter tanggal jika ada
        if ($filterDate) {
            $query->whereDate('booking.created_at', $filterDate);
        }

        $data = $query->get();

        // Hitung umur dan tambahkan ke setiap record
        $data = $data->map(function ($item) {
            $item->umur = \Carbon\Carbon::parse($item->tanggal_lahir)->age;
            return $item;
        });

        return view('dashboard_admin', compact('data', 'filterDate'));
    }

    public function antri(Request $request)
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
        $pdf = PDF::loadView('noantrian', $data)->setPaper([0, 0, 297.638, 419.528], 'portrait'); // Ukuran A6 dalam satuan points

        // Unduh PDF
        return $pdf->download('antri.pdf');
    }



    public function layanan()
    {
        // Cek apakah ID pasien ada di sesi
        if (session()->has('pasien_id')) {
            // Jika ada, arahkan ke view layanan
            return view('layanan');
        } else {
            // Jika tidak ada, arahkan kembali ke halaman daftar_pasien
            return redirect('/daftar_pasien')->with('error', 'Anda harus mendaftar terlebih dahulu.');
        }
    }



    public function delete($id)
    {
        // dd($id);
        $pasien = Booking::find($id);
        if ($pasien) {
            $pasien->delete();
            return response()->json(['message' => 'Record deleted successfully.']);
        } else {
            return response()->json(['error' => 'Record not found.'], 404);
        }
    }
    public function riwayat($id)
    {
        // Mengambil semua riwayat penyakit berdasarkan pasien ID
        $riwayat = RiwayatPenyakit::where('pasien_id', $id)->get();

        // Mengembalikan data dalam format JSON
        return response()->json($riwayat);
    }




    public function exportToPdf(Request $request)
{
    $startDate = $request->query('startDate');
    $endDate = $request->query('endDate');

    $data = DB::table('booking')
        ->join('pasien', 'booking.id_pasien', '=', 'pasien.id')
        ->join('dokter', 'booking.id_dokter', '=', 'dokter.id')
        ->select(
            'booking.id as id_booking',
            'booking.status',
            'booking.created_at',
            'pasien.id as id_pasien',
            'pasien.NIK',
            'pasien.No_RM',
            'pasien.gender',
            'pasien.no_hp',
            'pasien.alamat',
            'pasien.nama as nama',
            'pasien.tanggal_lahir',
            'pasien.id as pasien_id',
            'dokter.nama as nama_dokter',
            'dokter.layanan as nama_layanan'
        )
        ->whereBetween('booking.created_at', [$startDate, $endDate])
        ->orderBy('booking.id', 'desc')
        ->get();

    // Calculate age and add it to each record
    $data = $data->map(function ($item) {
        $item->umur = \Carbon\Carbon::parse($item->tanggal_lahir)->age;
        return $item;
    });

    $pdf = PDF::loadView('riwayat', compact('data'))->setPaper('a4', 'landscape');

    return $pdf->download('pasien.pdf');
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
            // $pass =bcrpyt($validatedData['alamat']);
            // Save pasien ID to session
            session()->put('pasien_id', $pasien->id);
            // dd($pass);

            return redirect('/layanan')->with('success', 'Data pasien berhasil disimpan.');
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

        // Save pasien ID to session
        session()->put('pasien_id', $pasien->id);


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
            return redirect('/layanan')->with(['pasien' => $pasien, 'riwayat' => $riwayat])->with('success', 'Riwayat penyakit berhasil ditambahkan.');
        }
    }
}
