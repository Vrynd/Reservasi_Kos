<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusat Bantuan</title>
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
                            <a href="#"
                                class="block px-4 py-2 font-poppins text-sm text-gray-700 hover:bg-gray-100">Keluar</a>
                        </div>
                    </div>

                    <div id="dropdownUser"
                        class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute right-0 mt-2">
                        <div class="px-4 py-3 text-sm text-gray-900">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <form method="POST" action="/">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                    Keluar
                                </button>
                            </form>
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
        </div>
    </nav>

    <section class="bg-gradient-to-br from-blue-50 to-white py-20 px-6 lg:px-24">
        <div class="max-w-screen-xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-4 text-center font-sora">Butuh Bantuan?</h1>
            <p class="text-gray-600 text-center font-poppins">
                Kami siap membantu Anda dalam menggunakan <strong>Omahku</strong>. Temukan panduan dan informasi lengkap seputar reservasi kos
            </p>
            <div class="grid grid-cols-1 mt-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Item 1 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-question-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Cara Reservasi</h3>
                    <p class="text-gray-600 text-base font-poppins">Anda dapat memilih menu home kemudian cari kos yang
                        sesuai dengan
                        keinginan Anda.</p>
                </div>
                <!-- Item 2 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-secure-payment-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Pemesanan Mudah</h3>
                    <p class="text-gray-600 text-base font-poppins">Informasi tentang metode pembayaran yang tersedia
                        dan keamanannya.
                    </p>
                </div>
                <!-- Item 3 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-information-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Tampilan Dinamis</h3>
                    <p class="text-gray-600 text-base font-poppins">Pelajari cara menyesuaikan preferensi tampilan.</p>
                </div>
                <!-- Item 4 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-bug-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Terjadi Bug</h3>
                    <p class="text-gray-600 text-base font-poppins">Hubungi kami melalui menu kontak jika Anda menemukan
                        bug.</p>
                </div>
                <!-- Item 5 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-settings-3-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Fitur Mudah</h3>
                    <p class="text-gray-600 text-base font-poppins">Kelola profil, ubah sandi, dan fitur lainnya dengan
                        mudah.</p>
                </div>
                <!-- Item 6 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-lock-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Keamanan Akun</h3>
                    <p class="text-gray-600 text-base font-poppins">Pelajari cara menjaga akun Anda tetap aman.</p>
                </div>
                <!-- Item 7 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-question-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Pertanyaan Umum</h3>
                    <p class="text-gray-600 text-base font-poppins">Lihat jawaban dari pertanyaan yang sering diajukan.
                    </p>
                </div>
                <!-- Item 8 -->
                <div
                    class="bg-gray-50 rounded-xl p-6 shadow-sm hover:shadow-md hover:border-1 border-blue-400 transition-all duration-300 ease-in-out cursor-pointer">
                    <i class="ri-customer-service-2-line text-blue-600 text-3xl mb-4 block"></i>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2 font-sora">Hubungi Kami</h3>
                    <p class="text-gray-600 text-base font-poppins">Tim kami siap membantu Anda 24/7.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
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

        document.querySelectorAll('.accordion-header').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;

                button.classList.toggle('active');

                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>
