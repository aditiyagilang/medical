<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-between align-items-center py-3 my-4 border-bottom admin-header">
            <img src="{{ asset('assets/img/logo/logofix.png') }}" alt="Company Logo" class="company-logo">
            <h1 class="mx-auto">Data Pasien</h1>
        </header>
        <main>
            <div class="d-flex justify-content-between mb-3">
                <form action="{{ route('dashboard_admin') }}" method="GET" class="form-inline">
                    <input type="date" name="filterDate" id="filterDate" class="form-control w-25" value="{{ $filterDate }}">

                </form>
                <button class="btn btn-success" onclick="location.href='{{ route('export.pdf') }}'">Download Laporan</button>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>No.RM</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Layanan</th>
                            <th>Dokter</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $pasien)
                            <tr data-date="{{ \Carbon\Carbon::parse($pasien->created_at)->format('Y-m-d') }}">
                                <td>{{ $pasien->No_RM }}</td>
                                <td>{{ $pasien->NIK }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ $pasien->umur }} tahun</td>
                                <td>{{ $pasien->nama_layanan }}</td>
                                <td>{{ $pasien->nama_dokter }}</td>
                                <td>{{ \Carbon\Carbon::parse($pasien->created_at)->format('H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($pasien->created_at)->format('d/m/Y') }}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm" onclick="deleteRow({{ $pasien->id_booking }})">Delete</button>

                                    <button class="btn btn-info btn-sm"
                                        onclick="viewRiwayat({{ $pasien->pasien_id }})">View</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="riwayatModal" tabindex="-1" role="dialog" aria-labelledby="riwayatModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="riwayatModalLabel">Riwayat Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul id="riwayatList" class="list-group">
                            <!-- Riwayat will be appended here -->
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function viewRiwayat(pasienId) {
            fetch(`/riwayat/${pasienId}`)
                .then(response => response.json())
                .then(data => {
                    const riwayatList = document.getElementById('riwayatList');
                    riwayatList.innerHTML = '';
                    data.forEach(riwayat => {
                        const li = document.createElement('li');
                        li.classList.add('list-group-item');
                        li.textContent = riwayat.riwayat_penyakit;
                        riwayatList.appendChild(li);
                    });
                    $('#riwayatModal').modal('show');
                })
                .catch(error => console.error('Error fetching riwayat:', error));
        }


        document.getElementById('filterDate').addEventListener('change', function() {
            const selectedDate = this.value;
            const rows = document.querySelectorAll('#dataTable tbody tr');
            rows.forEach(row => {
                if (row.dataset.date === selectedDate || selectedDate === '') {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        function downloadReport() {
            const rows = document.querySelectorAll('#dataTable tbody tr:visible');
            let csvContent = "data:text/csv;charset=utf-8,ID,Name,Email\n";
            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowArray = Array.from(cells).map(cell => cell.innerText);
                csvContent += rowArray.join(",") + "\n";
            });
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "laporan_pasien.csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function deleteRow(pasienId) {
            if (confirm('Are you sure you want to delete this record?')) {
                fetch(`/delete/${pasienId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Refresh halaman setelah berhasil menghapus
                        location.reload();
                    })
                    .catch(error => console.error('Error deleting record:', error));


            }
        }
    </script>
</body>

</html>
