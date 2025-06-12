<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konfirmasi Pemesanan Kamar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #0d83fd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
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

        .btn {
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #0d83fd;
        }

        .btn-primary:hover {
            background-color: #0a69ca;
        }

        .btn-secondary {
            background-color: #0d83fd;
        }

        .btn-secondary:hover {
            background-color: #0a69ca;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Pemesanan</h1>
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
                <td><strong>Tanggal Sewa</strong></td>
                <td>{{ $reservation->rental_date }}</td>
            </tr>
            <tr>
                <td><strong>Durasi Sewa</strong></td>
                <td>{{ $reservation->rental_duration }} tahun</td>
            </tr>
        </table>

        <div class="buttons">
            <a href="{{ route('reservations.download-pdf', $reservation->id) }}" class="btn btn-primary">Cetak PDF</a>
            <a href="/home" class="btn btn-secondary">Kembali Lihat Kamar</a>
        </div>
    </div>
</body>
</html>
