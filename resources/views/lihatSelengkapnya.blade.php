<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kamar</title>
    <link rel="stylesheet" href="/css/styleLihatSelengkapnya.css">
</head>
<body>
    <nav id="navbar">
        <h1><span class="black-text">Rumah</span><span class="blue-text">Kita</span></h1>
        <ul>
            <li>
                <a href="/home">HOME</a>
            </li>
            <li>
                <a href="#about">FEEDBACK</a>
            </li>
            <li>
                <a href="#menu">BANTUAN</a>
            </li>
        </ul>
    </nav>
     <!-- Container Kamar -->
    <section class="rooms-container">
        <!-- Kamar Standar -->
        <div class="room">
            <div class="slider-container">
                <div class="sale-tag">SALE</div>
                <button class="slider-btn prev" onclick="changeSlide(-1, 'slider-1')">&lt;</button>
                <div class="slider" id="slider-1">
                    <img src="image1.jpg" class="slide active" alt="Kamar Standar 1">
                    <img src="image2.jpg" class="slide" alt="Kamar Standar 2">
                    <img src="image3.jpg" class="slide" alt="Kamar Standar 3">
                </div>
                <button class="slider-btn next" onclick="changeSlide(1, 'slider-1')">&gt;</button>
            </div>
            <div class="room-info">
                <h2>Kamar Standar</h2>
                <p>Fasilitas: Tempat tidur, AC, Lemari, Kamar mandi dalam.</p>
                <div class="price">Rp 1.500.000 / bulan</div>
                <button class="btn-pesan">Pesan Sekarang</button>
            </div>
        </div>
        <div class="room">
            <div class="slider-container">
                <div class="sale-tag">SALE</div>
                <button class="slider-btn prev" onclick="changeSlide(-1, 'slider-1')">&lt;</button>
                <div class="slider" id="slider-1">
                    <img src="image1.jpg" class="slide active" alt="Kamar Standar 1">
                    <img src="image2.jpg" class="slide" alt="Kamar Standar 2">
                    <img src="image3.jpg" class="slide" alt="Kamar Standar 3">
                </div>
                <button class="slider-btn next" onclick="changeSlide(1, 'slider-1')">&gt;</button>
            </div>
            <div class="room-info">
                <h2>Kamar Standar</h2>
                <p>Fasilitas: Tempat tidur, AC, Lemari, Kamar mandi dalam.</p>
                <div class="price">Rp 1.500.000 / bulan</div>
                <button class="btn-pesan">Pesan Sekarang</button>
            </div>
        </div>
    </section>

    <script src="/js/scriptLihatSelengkapnya.js"></script>
</body>
</html>
