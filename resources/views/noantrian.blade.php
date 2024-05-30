<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>No Antrian</title>
        <style>
            body {
                font-family: 'Times New Roman', Times, serif;
                text-align: center;
                margin: 0;

                padding: -10%;
            }
            .container {
                margin-left: -15%;
                width: 105mm; /* A6 width in mm */
                height: 148mm; /* A6 height in mm */
            }
            .logo {
                width: 40mm; /* reduced logo size for A6 */
                height: auto;

            }
            .header, .footer {
                font-size: 8pt; /* reduced font size for A6 */
            }
            .content {
                font-size: 12pt; /* reduced font size for A6 */

            }
            .number {
                font-size: 18pt; /* reduced font size for A6 */

            }
        </style>
    </head>
<body>
    <div class="container">

        <div class="header">
            <p style="font-size: 32px; color: blue;">KLINIK MASTRIP</p>
            <p>Jl. Mastrip No.164, Krajan Timur, Sumbersari,</p>
            <p>Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121</p>
        </div>
        <img src="assets/img/logo/logofix.png" alt="Logo" class="logo">
        <div class="content">
            <p>Nandita</p>
            <p>16/06/2024</p>
            <p> {{ $dokter->nama }}</p>
        </div>
        <div class="number">
            <p>{{ $nomor_antrian }}</p>
        </div>
        <div class="footer">
            <p>Terima Kasih</p>
        </div>
    </div>
</body>
</html>
