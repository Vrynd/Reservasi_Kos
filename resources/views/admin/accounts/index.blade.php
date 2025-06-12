<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Akun</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            color: #1a73e8;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-dark {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .table td,
        .table th {
            text-align: center;
            vertical-align: middle;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination .page-item .page-link {
            color: #1a73e8;
        }

        .pagination .page-item.active .page-link {
            background-color: #1a73e8;
            border-color: #1a73e8;
        }
    </style>
    <div class="container my-5">
        <h1 class="text-center mb-4">Data Akun</h1>

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Tanggal Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($accounts as $account)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->email }}</td>
                        <td class="text-capitalize">{{ $account->role }}</td>
                        <td>{{ $account->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data akun.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $accounts->links('pagination::bootstrap-5') }}
        </div>
    </div>
</body>
</html>
