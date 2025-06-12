<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar</title>
    <link rel="stylesheet" href="/css/styleDetailKamar.css">
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
    <div class="detail-container">
        <div class="image-gallery">
            <img src="/images/bg-home.jpg" alt="Foto Utama Kamar" class="main-photo">
            <div class="thumbnail-gallery">
                <img src="/images/kamara01/1.jpg" alt="Foto Kamar 1">
                <img src="/images/kamara01/2.jpg" alt="Foto Kamar 2">
                <img src="/images/kamara01/3.jpg" alt="Foto Kamar 3">
                <img src="/images/kamara01/4.jpg" alt="Foto Kamar 3">
                <img src="/images/bg-home.jpg" alt="Foto Kamar 3">
            </div>
        </div>

        <div class="detail-info">
            <h2>Kamar A-01</h2>
            <p class="price">Rp 5.000.000 / Tahun</p>
            <p class="price">Rp 600.000 / 6 Bulan</p>
            <p class="availability">Status: Disewakan</p>
            <h3>Fasilitas</h3>
            <ul>
                <li>Ukuran kamar 3x3 Meter</li>
                <li>kipas Angin</li>
                <li>Kasur Busa</li>
                <li>Meja dan Kursi Belajar</li>
                <li>Lemari Pakaian</li>
                <li>Wi-Fi Gratis</li>
                <li>Listrik Gratis</li>
            </ul>
            <a href="bokingKamar" class="reserve-btn" style="text-decoration: none;"> Pesan Kamar </a>
        </div>
    </div>
    <div class="reviews-section">
        <h3>Ulasan Penghuni Sebelumnya</h3>
        <div class="reviews-container">
            <div class="review">
                <p class="review-text">"Tempat yang sangat nyaman dan bersih! Fasilitas lengkap dan ibu kos sangat ramah."</p>
                <p class="reviewer-name">- Rafli</p>
            </div>
            <div class="review">
                <p class="review-text">"Lokasinya strategis dekat dengan kampus, dan ada dapur bersama yang sangat membantu."</p>
                <p class="reviewer-name">- Fahrul</p>
            </div>
            <div class="review">
                <p class="review-text">"Harga sewa terjangkau dan kamar sangat terawat. Parkiran luas, cocok untuk penghuni yang punya kendaraan."</p>
                <p class="reviewer-name">- Dani</p>
            </div>
            <div class="review">
                <p class="review-text">"Tempatnya nyaman dan bersih serta penghuninya ramah."</p>
                <p class="reviewer-name">- Rizky</p>
            </div>
        </div>
    </div>
    {{-- <div class="review-nav">
        <button class="nav-btn" onclick="prevReview()">Sebelumnya</button>
        <button class="nav-btn" onclick="nextReview()">Selanjutnya</button>
    </div> --}}
    <a href="jenisKamar" class="back-btn" style="text-decoration: none;">Kembali</a>
    <script>
        // Select main image and all thumbnails
        const mainPhoto = document.querySelector('.main-photo');
        const thumbnails = document.querySelectorAll('.thumbnail-gallery img');

        // Add event listeners to each thumbnail
        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                // Set the main photo's src to the clicked thumbnail's src
                mainPhoto.src = thumbnail.src;

                // Update the active style for thumbnails
                thumbnails.forEach(img => img.style.opacity = '0.7');
                thumbnail.style.opacity = '1';
            });
        });
        // // JavaScript untuk navigasi ulasan
        // let currentReview = 0;
        // const reviews = document.querySelectorAll('.review');

        // function showReview(index) {
        //     reviews.forEach((review, i) => {
        //         review.style.display = i === index ? 'block' : 'none';
        //     });
        // }
        // function prevReview() {
        //     currentReview = (currentReview > 0) ? currentReview - 1 : reviews.length - 1;
        //     showReview(currentReview);
        // }
        // function nextReview() {
        //     currentReview = (currentReview < reviews.length - 1) ? currentReview + 1 : 0;
        //     showReview(currentReview);
        // }
        // // Tampilkan ulasan pertama saat halaman dimuat
        // document.addEventListener('DOMContentLoaded', () => {
        //     showReview(currentReview);
        // });

    </script>
</body>
</html>
