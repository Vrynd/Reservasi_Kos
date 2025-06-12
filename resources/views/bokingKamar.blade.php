<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boking Kamar</title>
    <link rel="stylesheet" href="/css/styleBokingKamar.css">
</head>
<body>
    @include('sweetalert::alert')
    <nav id="navbar">
        <h1><span class="black-text">Kos</span><span class="green-text">Ibu Hadi</span></h1>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="jenisKamar">kamar</a></li>
            <li><a href="lokasi">Lokasi</a></li>
            <li><a href="pengaduan">Pengaduan</a></li>
            <li><a href="kontak">Kontak</a></li>
            <li><a href="login">Logout</a></li>
        </ul>
    </nav>
    <div class="booking-section">
        <h3>Pesan Kamar</h3>
        <form class="booking-form" id="bookingForm" method="POST" action="">
            @csrf
            <!-- Form fields seperti sebelumnya -->
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="form-group">
                <label for="startDate">Tanggal Mulai Sewa</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <div class="form-group">
                <label for="duration">Durasi Sewa (bulan)</label>
                <input type="number" id="duration" name="duration" placeholder="Masukkan durasi sewa" min="1" required>
            </div>
            <button type="submit" class="reserve-btn">Pesan Sekarang</button>
        </form>
    </div>
    <a href="detailKamarA01" class="back-btn" style="text-decoration: none;">Kembali</a>
</body>
</html>
