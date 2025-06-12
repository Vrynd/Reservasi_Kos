<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
            background: #ffffff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .img-fluid {
            border-radius: 6px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            max-width: 70%;
            height: auto;
        }
        .btn {
            margin-right: 4px;
        }
        h1, h3 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $detailKos->name }}</h1>

        <p><strong>Fasilitas:</strong> {{ $detailKos->facilities }}</p>
        <p><strong>Harga:</strong> Rp{{ number_format($detailKos->price, 0, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ ucfirst($detailKos->status) }}</p>

        <h3>Foto Kos</h3>
        <div class="row">
            @foreach($photos as $photo)
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('storage/' . $photo->photo_path) }}" class="img-fluid" alt="Foto Kos">
                </div>
            @endforeach
        </div>

        <a href="#" id="editButton" class="btn btn-warning">Edit</a>
        <button type="button" id="deleteButton" class="btn btn-danger btn-sm delete-button" data-id="{{ $detailKos->id }}">
            <i class='bx bx-trash'>Hapus</i>
        </button>
        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
    </div>

    <script>
        // SweetAlert for delete button
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent direct deletion
                const detailId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Konfirmasi Hapus',
                    text: `Apakah Anda yakin ingin menghapus kos dengan ID ${detailId}?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e74c3c',
                    cancelButtonColor: '#95a5a6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                    // Submit form untuk menghapus data
                    const form = document.createElement('form');
                    form.action = `{{ route('admin.detailKos.destroy', $detailKos->id) }}`;
                    form.method = 'POST';
                    form.innerHTML = `
                        @csrf
                        @method('DELETE')
                    `;
                    document.body.appendChild(form);
                    form.submit();
                    }
                });
            });
        });
        // SweetAlert for edit button
        document.getElementById('editButton').addEventListener('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Edit Kos',
                text: "Anda akan diarahkan ke halaman edit kos. Lanjutkan ?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Lanjutkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('admin.detailKos.edit', $detailKos->id) }}";
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
