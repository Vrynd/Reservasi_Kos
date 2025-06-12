<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemesanan Kamar Kos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .button-kembali {
            margin-left: auto;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .button-kembali a {
            text-decoration: none;
            color: #0d83fd;
            font-size: 20px;
            display: flex;
            align-items: center;
            background-color: transparent;
        }

        .button-kembali a i {
            margin-right: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #0056b3;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        th {
            background-color: #0056b3;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            text-align: center;
            color: #fff;
            text-decoration: none;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        form {
            display: inline-block;
            margin: 0;
        }

        form button {
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            color: #fff;
            border: none;
            background-color: #dc3545;
        }

        form button:hover {
            background-color: #c82333;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <h1 style="text-align: left;"><i class='bx bx-list-check' style="font-size: 40px; vertical-align: middle;"></i> Daftar Pemesanan</h1>
    <div class="button-kembali" style="justify-content: flex-start;">
        <a href="/dashboard"><i class='bx bx-arrow-back'></i>Kembali</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nama Kos</th>
                <th>Email</th>
                <th>Nomor Kamar</th>
                <th>Tanggal Pemesanan</th>
                <th>Durasi pemesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>{{ $reservation->room_number }}</td>
                    <td>{{ $reservation->rental_date }}</td>
                    <td>{{ $reservation->rental_duration }} Tahun</td>
                    <td>
                        <a href="{{ route('reservations.download-pdf', $reservation->id) }}" class="btn btn-info">Download PDF</a>
                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="delete-btn">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const form = this.closest('form');
                Swal.fire({
                    title: 'Apa kamu yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
</body>
</html>
