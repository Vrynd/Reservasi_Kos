<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemesanan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #0056b3;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 95%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #0d83fd;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-success {
            background-color: #0d83fd;
        }

        .btn-success:hover {
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
        }

        .mb-3 {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Form Pemesanan Kamar</h1>
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nama Kos</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan nama kos" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="room_number" class="form-label">Nomor Kamar</label>
                <input type="text" class="form-control" id="room_number" name="room_number" placeholder="Masukkan nomor kamar" required>
            </div>
            <div class="mb-3">
                <label for="rental_date" class="form-label">Tanggal Sewa</label>
                <input type="date" class="form-control" id="rental_date" name="rental_date" required>
            </div>
            <div class="mb-3">
                <label for="rental_duration" class="form-label">Durasi Sewa (Tahun)</label>
                <input type="number" class="form-control" id="rental_duration" name="rental_duration" min="1" placeholder="Masukkan durasi sewa" required>
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-success">Pesan Sekarang</button>
                <a href="/home" class="btn btn-secondary">Kembali Lihat kamar</a>
            </div>
        </form>
    </div>
</body>
</html>
