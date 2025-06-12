<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omahku</title>
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">

    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .font-sora {
            font-family: 'Sora', sans-serif;
        }
    </style>
    {{-- Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- Flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    {{-- Remixicon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <nav class="bg-white sticky w-full z-20 top-0 start-0 border-b border-gray-200 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-500 font-sora">Omahku</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/login"
                    class="text-white gap-3 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br cursor-pointer font-medium rounded-lg md:gap-3 text-sm px-5 py-2 text-center inline-flex items-center font-sora transition-all duration-300 ease-in-out active:scale-90">
                    Masuk
                    <i class="ri-arrow-right-line text-base font-sora"></i>
                </a>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="font-sora mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Selamat Datang di Sistem Reservasi Kos</h1>
                <p
                    class=" mb-6 mt-4 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-500 font-poppins">
                    Platform
                    terbaik untuk mencari kos dengan fasilitas lengkap, lokasi strategis yang dekat dengan pusat
                    aktivitas, serta harga terjangkau sesuai dengan kebutuhan mahasiswa atau pekerja.</p>
                <a href="/login"
                    class=" font-sora inline-flex border-1  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br gap-3 items-center justify-center px-5 py-2.5 mr-2 text-md font-medium text-center rounded-lg text-white transition-all duration-300 ease-in-out active:scale-90">
                    Coba Sekarang

                </a>
                <a href="#features"
                    class="font-sora inline-flex border-1 border-yellow-500 hover:bg-yellow-500 gap-3 items-center justify-center px-5 py-2.5 mr-2 text-md font-medium text-center rounded-lg text-yellow-500 hover:text-white transition-all duration-300 ease-in-out active:scale-90">Kenapa
                    Pilih kami?
                </a>
            </div>
            <div class=" lg:mt-0 lg:col-span-5 lg:flex">
                <img src="images/home_image.png" alt="mockup">
            </div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="bg-gray-100" id="features">
        <div class="py-10 px-5 mx-auto max-w-screen-xl md:py-30">
            <div class="w-full mb-8 lg:mb-16">
                <h2
                    class="font-sora mb-4 text-4xl md:text-center tracking-tight font-extrabold  text-gray-800">
                    Apa
                    yang Kami Tawarkan?</h2>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-16 md:space-y-0">
                <div>
                    <div
                        class="flex justify-center items-center mb-4 w-11 h-11 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <i class="ri-building-4-line text-blue-600 text-xl lg:text-2xl"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold font-sora text-gray-600">Beragam Pilihan</h3>
                    <p class="text-gray-500 mt-3 font-poppins text-medium">Temukan kos dengan berbagai fasilitas sesuai
                        kebutuhan Anda.</p>
                </div>
                <div>
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <i class="ri-filter-line text-blue-600 text-xl lg:text-2xl"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold font-sora text-gray-600">Fitur Pencarian yang Mudah</h3>
                    <p class="text-gray-500 font-poppins text-medium mt-3 ">Gunakan filter pintar untuk menemukan kos
                        sesuai
                        lokasi, harga, dan fasilitas</p>
                </div>
                <div>
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <i class="ri-information-line text-blue-600 text-xl lg:text-2xl"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold font-sora text-gray-600">Informasi yang Detail</h3>
                    <p class="text-gray-500 font-poppins text-medium mt-3">Setiap kos dilengkapi dengan foto dan
                        Deskripsi
                        fasilitas
                        (kamar mandi dalam, AC, Wi-Fi, dapur).</p>
                </div>
                <div>
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <i class="ri-shield-keyhole-line text-blue-600 text-xl lg:text-2xl"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold font-sora text-gray-600">Keamanan dan Privasi</h3>
                    <p class="text-gray-500 font-poppins text-medium mt-3">Kami menggunakan teknologi terkini untuk
                        menjaga
                        keamanan dan privasi Anda.</p>
                </div>
                <div>
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <i class="ri-customer-service-2-line text-blue-600 text-xl lg:text-2xl"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold font-sora text-gray-600">Layanan Pelanggan 24/7</h3>
                    <p class="text-gray-500 font-poppins text-medium mt-3">Dukungan melalui fitur kontak dapat diakses
                        dengan
                        mudah dan gampang</p>
                </div>
                <div>
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <i class="ri-flashlight-line text-blue-600 text-xl lg:text-2xl"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold font-sora text-gray-600">Reservasi Instan</h3>
                    <p class="text-gray-500 font-poppins text-medium mt-3">Langsung pesan kamar kos tanpa perlu
                        konfirmasi
                        manual berulang.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        AOS.init();
    </script>
</body>

</html>
