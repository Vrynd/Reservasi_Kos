<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Daftar Kos</title>
</head>
<style>
    body {
        padding-right: 3%;
        padding-left: 3%;
        margin: 0;
        box-sizing: border-box;
        font-family: "Montserrat", serif;
    }

    .button-kembali {
        margin-left: auto;
        display: flex;
        align-items: center;
    }

    .button-kembali a {
        text-decoration: none;
        color: #0d83fd;
        font-size: 20px;
        display: flex;
        align-items: center;
    }

    .button-kembali a i {
        margin-right: 5px;
    }

    .judul-halaman {
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: start;
        gap: 10px;
    }

    .judul-halaman h1 {
        font-size: 30px;
        font-weight: 600;
        color: #000000;
    }

    .judul-halaman i {
        font-size: 30px;
        color: #0d83fd;
    }

    .container-table {
        display: block;
        position: relative;
        width: 100%;
    }

    .container-table .show-data {
        width: 100%;
        height: auto;
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: start;
        justify-content: flex-start;
    }

    .container-table .show-data table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        border-radius: 10px;
        cursor: pointer;
        overflow: hidden;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .container-table .show-data th {
        text-transform: capitalize;
        color: #000000;
        padding: 1.1rem;
        font-size: 1.1rem;
        text-align: left;
        border-bottom: 1px solid #0d83fd;

    }

    .container-table .show-data td {
        padding: .6rem 1.1rem;
        font-size: 1.1rem;
        font-weight: 300;
        text-align: left;
        border-bottom: 1px solid #0d83fd;
    }

    .container-table .show-data td>a {
        font-size: 25px;
        color: #0d83fd;
        text-decoration: none;
        margin: 0 5px 0 5px
    }

    .container-table .show-data td form>button {
        display: inline;
        background: none;
        border: none;
        font-size: 25px;
        color: #0d83fd;
        padding: 0;
        outline: none;
        cursor: pointer;
        margin: 0 5px 0 5px;
    }
</style>

<body class="bg-light">
    <div class="judul-halaman">
        <i class='bx bx-home-smile'></i>
        <h1>Data Semua Kos</h1>
        <div class="button-kembali">
            <a href="/dashboard"><i class='bx bx-arrow-back'></i>Kembali</a>
        </div>
    </div>
    <div class="container-table">
        <section class="show-data">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Kos</th>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="button-kembali">
                        <a href="{{ route('admin.dataSemuaKos.create') }}" class="btn btn-primary">
                            <i class='bx bx-plus-circle'></i> Tambah Kos
                        </a>
                    </div>
                    @foreach ($kosList as $kos)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($kos->foto)
                                    <img src="{{ asset('storage/' . $kos->foto) }}" alt="Foto Kos" class="img-thumbnail"
                                        style="max-width: 100px;">
                                @else
                                    <span class="text-muted">Tidak ada foto</span>
                                @endif
                            </td>
                            <td>{{ $kos->nama }}</td>
                            <td>{{ $kos->lokasi }}</td>
                            <td>Rp {{ number_format($kos->harga, 2, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('admin.dataSemuaKos.edit', $kos->id) }}" method="POST"
                                    style="display: inline;" class="edit-form">
                                    @csrf
                                    @method('GET')
                                    <button type="button" class="btn btn-danger btn-sm edit-button"
                                        data-id="{{ $kos->nama}}">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                </form>

                                <form action="{{ route('admin.dataSemuaKos.destroy', $kos->id) }}" method="POST"
                                    style="display: inline;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm delete-button"
                                        data-id="{{ $kos->nama}}">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah redirect langsung
            const form = this.closest('.edit-form');
            const kosId = this.getAttribute('data-id');

            Swal.fire({
                title: 'Konfirmasi Edit',
                text: `Apakah Anda yakin ingin mengedit kos dengan nama ${kosId}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Edit!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke halaman edit
                   form.submit();
                }
            });
        });
    });

    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah penghapusan langsung
            const form = this.closest('.delete-form'); // Cari form terdekat
            const kosId = this.getAttribute('data-id');

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: `Apakah Anda yakin ingin menghapus kos dengan nama ${kosId}?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e74c3c',
                cancelButtonColor: '#95a5a6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form untuk menghapus data
                    form.submit();
                }
            });
        });
    });

    @if(session('success'))
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    @endif
</script>

</html>
