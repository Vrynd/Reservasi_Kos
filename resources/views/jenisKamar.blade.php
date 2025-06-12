<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kamar</title>
    <link rel="stylesheet" href="/css/styleKamar.css">
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
    <div class="product-grid">
        <div class="product-card">
            <div class="sale-tag">Disewakan!</div>
            <img src="/images/bg-home.jpg" alt="Kamar A-01">
            <h3>Kamar A-01</h3>
            <div class="rating">Rp 5.000.000</div>
            <button onclick="window.location.href='detailKamarA01'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Sold Out!</div>
            <img src="/images/bg-home.jpg" alt="Kamar A-02">
            <h3>Kamar A-02</h3>
            <div class="rating">Rp 6.000.000</div>
            <button onclick="window.location.href='detailKamarA02'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Disewakan!</div>
            <img src="/images/bg-home.jpg" alt="Kamar A-03">
            <h3>Kamar A-03</h3>
            <div class="rating">Rp 5.000.000</div>
            <button onclick="window.location.href='detailKamarA03'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Disewakan!</div>
            <img src="/images/bg-home.jpg" alt="Kamar A-04">
            <h3>Kamar A-04</h3>
            <div class="rating">Rp 5.000.000</div>
            <button onclick="window.location.href='detailKamarA04'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Sold Out!</div>
            <img src="/images/bg-home.jpg" alt="Kamar B-01">
            <h3>Kamar B-01</h3>
            <div class="rating">Rp 5.000.000</div>
            <button onclick="window.location.href='detailKamarB01'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Disewakan!</div>
            <img src="/images/bg-home.jpg" alt="Kamar B-02">
            <h3>Kamar B-02</h3>
            <div class="rating">Rp 6.000.000</div>
            <button onclick="window.location.href='detailKamarB02'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Disewakan!</div>
            <img src="/images/bg-home.jpg" alt="Kamar B-03">
            <h3>Kamar B-03</h3>
            <div class="rating">Rp 5.000.000</div>
            <button onclick="window.location.href='detailKamarB03'">Lihat Detail Kamar</button>
        </div>
        <div class="product-card">
            <div class="sale-tag">Disewakan!</div>
            <img src="/images/bg-home.jpg" alt="Kamar B-04">
            <h3>Kamar B-04</h3>
            <div class="rating">Rp 5.000.000</div>
            <button onclick="window.location.href='detailKamarB04'">Lihat Detail Kamar</button>
        </div>
    </div>
</body>
</html>
