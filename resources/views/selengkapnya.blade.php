<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Selengkapnya</title>
    <link rel="stylesheet" href="/css/selengkapnya.css">
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
    <header class="header">
        <h1>Fasilitas Umum</h1>
        <p>Temukan kenyamanan dengan berbagai fasilitas yang kami sediakan untuk Anda.</p>
    </header>

    <main class="content">
        <!-- Fasilitas Section -->
        <section class="facilities">
            <div class="facility-item">
                <img src="https://via.placeholder.com/300x200" alt="Parkiran">
                <h2>Parkiran Luas</h2>
                <p>Parkiran luas dan aman, cocok untuk kendaraan roda dua maupun roda empat.</p>
            </div>
            <div class="facility-item">
                <img src="https://via.placeholder.com/300x200" alt="Dapur Bersama">
                <h2>Dapur Bersama</h2>
                <p>Dapur lengkap dengan peralatan masak yang dapat digunakan kapan saja.</p>
            </div>
            <div class="facility-item">
                <img src="https://via.placeholder.com/300x200" alt="Kamar Mandi Luar">
                <h2>Kamar Mandi Luar</h2>
                <p>Kamar mandi bersih dengan fasilitas shower dan air panas.</p>
            </div>
        </section>

        <!-- CTA Section -->
        <div class="cta">
            <button id="lihatKamarButton" class="button">Lihat Kamar</button>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Fasilitas Umum. Semua Hak Dilindungi.</p>
    </footer>
<script>
    // JavaScript for button interaction
    document.getElementById("lihatKamarButton").addEventListener("click", function () {
        alert("Anda akan diarahkan ke halaman detail kamar.");
        // Simulasi redirect ke halaman lain
        window.location.href = "lihat-kamar.html"; // Ganti dengan URL sebenarnya
    });
</script>

</body>
</html>
