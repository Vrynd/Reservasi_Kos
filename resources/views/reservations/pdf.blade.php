<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pemesanan PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td {
            background-color: #fafafa;
        }

        strong {
            color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Nota Pemesanan</h1>
    <table>
        <tr>
            <th>Ketentuan</th>
            <th>Data Pemesanan</th>
        </tr>
        <tr>
            <td><strong>Nama</strong></td>
            <td>{{ $reservation->name }}</td>
        </tr>
        <tr>
            <td><strong>Nama Kos</strong></td>
            <td>{{ $reservation->phone }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $reservation->email }}</td>
        </tr>
        <tr>
            <td><strong>Nomor Kamar</strong></td>
            <td>{{ $reservation->room_number }}</td>
        </tr>
        <tr>
            <td><strong>Tanggal Pemesanan</strong></td>
            <td>{{ $reservation->rental_date }}</td>
        </tr>
        <tr>
            <td><strong>Durasi Pemesanan</strong></td>
            <td>{{ $reservation->rental_duration }} Tahun</td>
        </tr>
    </table>
    <div class="footer">
        &copy; {{ date('Y') }} RumahKita All rights reserved.
    </div>
</body>
</html>
