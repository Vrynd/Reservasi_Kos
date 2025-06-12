<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>

<body>
    <nav class="bg-white sticky w-full z-20 top-0 start-0 border-b border-gray-200 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-500 font-sora">Omahku</span>
            </a>

            <div class="flex md:order-2 items-center md:gap-5 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/home" class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Home</a>
                <a href="/kontak" class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Kontak</a>
                <a href="/bantuan" class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Bantuan</a>
                <a href="/tentang" class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Tentang</a>
                @auth
                    <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-600 text-white font-bold hover:bg-blue-700 transition">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </button>
                    <div id="dropdownInformation"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                        <div class="px-4 py-3 text-sm text-gray-900 ">
                            <div class="font-semibold font-sora text-xl">{{ Auth::user()->name }}</div>
                            <div class="font-medium truncate font-poppins mt-1">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformationButton">
                            <li>
                                <a href="#"
                                    class="block px-4 font-poppins py-2 text-sm text-gray-700 hover:bg-gray-100 ">Reservasi</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="/"
                                class="block px-4 py-2 font-poppins text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                        </div>
                    </div>
                </div>
            @else
                <!-- Tombol Masuk -->
                <a href="/login"
                    class="text-white gap-3 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br cursor-pointer font-medium rounded-lg md:gap-3 text-sm px-5 py-2 text-center inline-flex items-center font-sora transition-all duration-300 ease-in-out active:scale-90">
                    Masuk
                    <i class="ri-arrow-right-line text-base font-sora"></i>
                </a>
            @endauth
        </div>
    </nav>

    <section class="bg-gradient-to-br from-blue-50 to-white py-20 px-6 lg:px-24">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-4 text-center font-sora">Tentang Kami</h1>
            <p class="text-gray-600 mb-4 text-justify font-poppins">
                Selamat datang di <strong>Omahku</strong>, solusi modern untuk mencari dan memesan tempat tinggal
                dengan nyaman, cepat, dan terpercaya. Kami hadir sebagai platform yang membantu Anda menemukan kos atau
                tempat tinggal yang sesuai dengan kebutuhan Anda, baik dari segi lokasi, fasilitas, maupun anggaran.
            </p>

            <div class="text-left mt-8 space-y-4">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 fons-sora">Visi Kami</h2>
                    <p class="text-gray-600 mb-4 text-justify font-poppins">Menjadi platform reservasi kos terbaik yang
                        menghubungkan pemilik kos dan
                        penyewa dengan mudah, transparan, dan aman.</p>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-gray-800 font-sora">Misi Kami</h2>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 font-poppins">
                        <li>Memberikan informasi lengkap dan akurat mengenai pilihan kos</li>
                        <li>Memudahkan proses reservasi kos secara online, kapan saja dan di mana saja</li>
                        <li>Membangun kepercayaan antara pemilik kos dan penyewa dengan sistem yang transparan</li>
                        <li>Mendukung komunitas dengan menciptakan pengalaman tinggal yang lebih baik</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
