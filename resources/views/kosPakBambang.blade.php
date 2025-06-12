<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kos Ibu Hadi</title>
    <link rel="stylesheet" href="/css/styleKosIbuHadi.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <nav id="navbar">
        <h1><span class="black-text">Rumah</span><span class="blue-text">Kita</span></h1>
        <div class="menu">
            <a href="/home">HOME</a>
            <a href="/kontak">KONTAK</a>
            <a href="/bantuan">BANTUAN</a>
            <a href="/tentang">TENTANG</a>
            <div class="dropdown">
                <img src="/images/user.png" alt="User" class="dropdown-toggle" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/"><i class="ri-logout-box-line"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="detail-container">
        <div class="image-gallery">
            <img src="/images/kosPakBambang/4.jpg" alt="Foto Utama Kamar" class="main-photo" style="width: 670px; height: 400px;">
            <div class="thumbnail-gallery">
                <img src="/images/kosPakBambang/1.jpg" alt="Foto Kamar 1">
                <img src="/images/kosPakBambang/2.jpg" alt="Foto Kamar 2">
                <img src="/images/kosPakBambang/3.jpg" alt="Foto Kamar 3">
                <img src="/images/kosPakBambang/4.jpg" alt="Foto Kamar 3">
            </div>
        </div>

        <div class="detail-info">
            <h2>Kos Pak Bambang</h2>
            <p class="price">Rp 6.500.000 / Tahun</p>
            <p class="availability">Status: Disewakan</p>
            <p class="availability">Tersedia Kamar No.1-8</p>
            <h3>Fasilitas</h3>
            <ul>
                <li>Ukuran kamar 3x3 Meter</li>
                <li>kipas Angin</li>
                <li>Kasur Busa</li>
                <li>Meja dan Kursi Belajar</li>
                <li>Lemari Pakaian</li>
                <li>Bantal</li>
            </ul>
            <a href="{{ route('reservations.create') }}" class="reserve-btn" style="text-decoration: none;"> Pesan Kamar </a>
        </div>
    </div>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662.1912814974844!2d110.35341602870444!3d-7.74952220980139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a594fb719712d%3A0x7d46aa6c0c7c7da4!2sKos%20Pak%20Bambang%20D!5e0!3m2!1sid!2sid!4v1735725527876!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <a href="/home" class="back-btn" style="text-decoration: none;">Kembali</a>
    <script>

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
    </script>
</body>
</html>
