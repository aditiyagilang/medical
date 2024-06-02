<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Pasien</h1>
    <table>
        <thead>
            <tr>
                <th>No RM</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Umur</th>
                <th>No. Hp</th>
                <th>Alamat</th>
                {{-- <th>Riwayat Penyakit</th> --}}
                <th>Layanan</th>
                <th>Dokter</th>
                <th>Jam</th>
                <th>Tanggal</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pasien)
                <tr>
                    <td>{{ $pasien->No_RM }}</td>
                    <td>{{ $pasien->NIK }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{$pasien->umur }} tahun</td>
                    <td>{{ $pasien->no_hp }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    {{-- <td>{{ $pasien->riwayatPenyakit }}</td> --}}
                    <td>{{ $pasien->nama_layanan }}</td>
                    <td>{{ $pasien->nama_dokter }}</td>
                    <td>{{ \Carbon\Carbon::parse($pasien->created_at)->format('H:i:s') }}</td>
                    <td>{{ \Carbon\Carbon::parse($pasien->created_at)->format('d/m/Y') }}</td>
                    <!-- Add more table data as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
