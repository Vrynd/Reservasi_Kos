<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kos Ibu Hadi</title>
    <link rel="stylesheet" href="/css/styleViewsKosIbuHadi.css">
</head>
<body>
    <nav id="navbar">
        <h1><span class="black-text">Rumah</span><span class="blue-text">Kita</span></h1>
        <div class="menu">
            <a href="/home">HOME</a>
            <a href="/kontak">KONTAK</a>
            <a href="#menu">BANTUAN</a>
            <a href="#menu">TENTANG</a>
            <div class="dropdown">
                <img src="/images/user.png" alt="User" class="dropdown-toggle" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/profile"><i class="ri-user-line"></i> Profile</a>
                    <a class="dropdown-item" href="/"><i class="ri-logout-box-line"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="kamar-container">
        <h2>Jenis Kamar</h2>
        <div class="kamar-list">
            <!-- Kamar 1 -->
            <div class="kamar-card">
                <h3>Kamar A</h3>
                <div class="slider">
                    <button class="slide-btn prev-btn" onclick="changeSlide('kamarA', -1)">&#8249;</button>
                    <img id="kamarA" src="/images/kosIbuHadi/kamarA1/1.jpg" alt="Kamar A - Gambar 1">
                    <button class="slide-btn next-btn" onclick="changeSlide('kamarA', 1)">&#8250;</button>
                </div>
                <p>Deskripsi: Kamar luas dengan fasilitas lengkap, cocok untuk mahasiswa.</p>
                <p>Harga: Rp500.000/bulan</p>
                <a href="/kamar-a" class="lihat-kamar-btn">Lihat Kamar</a>
            </div>

            <!-- Kamar 2 -->
            <div class="kamar-card">
                <h3>Kamar B</h3>
                <div class="slider">
                    <button class="slide-btn prev-btn" onclick="changeSlide('kamarB', -1)">&#8249;</button>
                    <img id="kamarB" src="/images/kosIbuHadi/kamarA1/1.jpg" alt="Kamar B - Gambar 1">
                    <button class="slide-btn next-btn" onclick="changeSlide('kamarB', 1)">&#8250;</button>
                </div>
                <p>Deskripsi: Kamar nyaman dengan desain minimalis, memiliki pemandangan yang indah.</p>
                <p>Harga: Rp600.000/bulan</p>
                <a href="/kamar-b" class="lihat-kamar-btn">Lihat Kamar</a>
            </div>
        </div>
    </main>

    <script>
        // Data gambar untuk setiap kamar
        const kamarImages = {
            kamarA: ["/images/kosIbuHadi/kamarA1/1.jpg", "/images/kosIbuHadi/kamarA1/2.jpg", "/images/kosIbuHadi/kamarA1/3.jpg"],
            kamarB: ["/images/kosIbuHadi/kamarA1/1.jpg", "/images/kosIbuHadi/kamarA1/2.jpg", "/images/kosIbuHadi/kamarA1/3.jpg"],
        };

        // Fungsi untuk mengganti slide
        function changeSlide(kamarId, direction) {
            const images = kamarImages[kamarId];
            const imgElement = document.getElementById(kamarId);
            const currentIndex = images.indexOf(imgElement.src.split(location.origin)[1]);
            let nextIndex = currentIndex + direction;

            // Loop kembali ke awal atau akhir jika melampaui batas
            if (nextIndex < 0) nextIndex = images.length - 1;
            if (nextIndex >= images.length) nextIndex = 0;

            imgElement.src = images[nextIndex];
        }

        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('show');
        });

        window.addEventListener('click', (e) => {
            if (!e.target.matches('.dropdown-toggle')) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>
</body>
</html>
