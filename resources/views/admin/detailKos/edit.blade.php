<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-light">
                <h2 class="mb-0">Edit Kos</h2>
            </div>
            <div class="card-body">
                <form id="editKosForm" action="{{ route('admin.detailKos.update', $detailKos->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Kos</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $detailKos->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="facilities" class="form-label">Fasilitas</label>
                        <textarea class="form-control" id="facilities" name="facilities" rows="3" required>{{ $detailKos->facilities }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $detailKos->price }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="disewakan" {{ $detailKos->status == 'disewakan' ? 'selected' : '' }}>Disewakan</option>
                            <option value="sold out" {{ $detailKos->status == 'sold out' ? 'selected' : '' }}>Sold Out</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="photos" class="form-label">Foto Kos</label>
                        <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Simpan Kos</button>
                        <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.getElementById('editKosForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah pengiriman formulir langsung

            // Tampilkan SweetAlert
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data Kos berhasil diperbarui.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Setelah konfirmasi, kirim formulir
                    event.target.submit();
                }
            });
        });
    </script>
</body>
</html>
