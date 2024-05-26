<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .company-logo {
            width: 150px;
            vertical-align: middle;
        }
        .admin-header {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between align-items-center py-3 my-4 border-bottom admin-header">
            <img src="{{ asset('assets/img/logo/logofix.png') }}" alt="Company Logo" class="company-logo">
            <h1 class="mx-auto">Data Pasien</h1>
        </header>
        <main>
            <div class="d-flex justify-content-between mb-3">
                <input type="date" id="filterDate" class="form-control w-25">
                <button class="btn btn-success" onclick="downloadReport()">Download Laporan</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-date="2024-05-26">
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="editRow(this)">Edit</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                            </td>
                        </tr>
                        <tr data-date="2024-05-27">
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="editRow(this)">Edit</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script>
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

        function editRow(button) {
            const row = button.parentElement.parentElement;
            const cells = row.getElementsByTagName('td');
            const id = cells[0].innerText;
            const name = cells[1].innerText;
            const email = cells[2].innerText;
            alert(`Edit row with ID: ${id}, Name: ${name}, Email: ${email}`);
            // Add your edit functionality here
        }

        function deleteRow(button) {
            const row = button.parentElement.parentElement;
            row.parentElement.removeChild(row);
            alert('Row deleted');
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
