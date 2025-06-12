<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/css/styleDashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @include('sweetalert::alert')
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="#home" class="nav-item active" onclick="showSection('home')"><i class="fas fa-home"></i> Home</a>
        <a href="#data-masuk" class="nav-item" onclick="showSection('data-masuk')"><i class="fas fa-database"></i> Pesanan Masuk</a>
        <a href="#kelola-kos" class="nav-item" onclick="showSection('kelola-kos')"><i class="fas fa-exclamation-circle"></i> Kelola Kos</a>
        <a href="#data-akun" class="nav-item" onclick="showSection('data-akun')"><i class="fas fa-user"></i> Data Akun User</a>
        <a href="#kontak-masuk" class="nav-item" onclick="showSection('kontak-masuk')"><i class="fas fa-envelope"></i> Kontak Masuk</a>
        <a href="{{ route('login') }}" class="nav-item"><i class="fas fa-sign-in-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Dashboard</h1>

        <div class="grid-container">
            <div class="card" id="home">
                <h2>Selamat Datang Kembali Di Dashboard Admin</h2>
                <img src="/images/vektor/Dashboard-cuate.png" alt="Welcome Image" style="width:100%; height:auto;">
            </div>

            <div class="card" id="data-masuk">
                <h2>Pesanan Masuk</h2>
                <p>Kami telah menerima data pemesanan Anda, yang mencakup semua informasi yang diperlukan untuk menyelesaikan proses sewa kamar.</p>
                <a href="{{ route('reservations.index') }}" class="btn">Lihat Pesanan</a>
            </div>

            <div class="card" id="kelola-kos">
                <h2>Kelola Kos</h2>
                <p>mengoptimalkan fasilitas, mengatur keuangan, dan membangun komunikasi yang baik dengan penghuni untuk menciptakan lingkungan yang nyaman dan harmonis. Manajemen kos yang baik melibatkan perawatan properti, penetapan aturan yang jelas, serta pelayanan yang responsif terhadap kebutuhan penghuni.</p>
                <a href="{{ route('admin.dataSemuaKos.index') }}" class="btn">Lihat Semua Data Kos</a>
                <a href="{{ route('admin.detailKos.index') }}" class="btn">Lihat Semua Detail Kos</a>
            </div>

            <div class="card" id="data-akun">
                <h2>Data Akun User</h2>
                <p>Daftar akun pengguna yang terdaftar dalam sistem informasi kos ibu hadi berbasis web</p>
                <a href="{{ route('accounts.index') }}" class="btn">Lihat Data Akun</a>
            </div>
            <div class="card" id="kontak-masuk">
                <h2>Kontak Masuk</h2>
                <p> segala bentuk permintaan, informasi, atau komunikasi yang diterima dari pengguna melalui berbagai saluran, seperti telepon, email, media sosial, atau platform lainnya, yang bertujuan untuk menyampaikan kebutuhan atau mendapatkan solusi.</p>
                <a href="{{ route('admin.messages.index') }}" class="btn">Lihat Kontak Masuk </a>
            </div>
        </div>
    </div>
    <script src="/js/scriptDashboard.js"></script>
</body>
</html>
