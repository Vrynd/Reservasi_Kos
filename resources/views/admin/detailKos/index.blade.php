<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .button-kembali {
            position: absolute;
            right: 8%;
        }

        .button-kembali a {
            text-decoration: none;
            color: #0d83fd;
            font-size: 20px;
            display: flex;
            align-items: center;
            flex-direction: row;
        }

        .button-kembali a i {
            font-size: 30px;
            color: #0d83fd;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Daftar Kos</h1>
        <div class="button-kembali">
            <a href="/dashboard"><i class='bx bx-arrow-back' ></i>Kembali</a>
        </div>

        <!-- Tombol Tambah Kos -->
        <button id="addKosButton" class="btn btn-primary mb-3">Tambah Kos</button>

        <div class="row">
            @foreach($detailKos as $kos)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $kos->photos->first()->photo_path) }}" class="card-img-top" alt="Foto Kos" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kos->name }}</h5>
                            <p class="card-text">Fasilitas: {{ $kos->facilities }}</p>
                            <p class="card-text">Harga: Rp{{ number_format($kos->price, 0, ',', '.') }}</p>
                            <p class="card-text">Status: {{ ucfirst($kos->status) }}</p>
                            <a href="{{ route('admin.detailKos.show', $kos->id) }}" class="btn btn-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.getElementById('addKosButton').addEventListener('click', function() {
            Swal.fire({
                title: 'Tambah Kos Baru',
                text: "Apakah Anda yakin ingin menambah kos baru?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Tambahkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.detailKos.create') }}";
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
