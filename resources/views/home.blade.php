<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omahku - Reservasi Kos Jadi Mudah</title>
    {{-- <link rel="stylesheet" href="/css/styleHome.css"> --}}
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
                <a href="/home"
                    class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Home</a>
                <a href="/kontak"
                    class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Kontak</a>
                <a href="/bantuan"
                    class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Bantuan</a>
                <a href="/tentang"
                    class="font-sora text-lg font-medium text-gray-500 hover:text-blue-600">Tentang</a>
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
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold font-sora text-gray-800 mb-4 leading-tight">
                Temukan Kos Impianmu di Yogyakarta
            </h1>
            <p class="text-lg md:text-xl font-poppins text-gray-600 mb-8">
                Jelajahi berbagai pilihan kos dengan mudah dan cepat sesuai kebutuhanmu.
            </p>

            <!-- Search Bar -->
            <form action="/pencarian" method="GET"
                class="flex flex-col sm:flex-row items-stretch gap-3 justify-center">
                <input type="text" name="q" placeholder="Cari lokasi, nama kos, atau fasilitas..."
                    class="w-full sm:w-96 px-5 py-3 text-gray-700 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition font-poppins" />
                <button type="submit"
                    class="px-6 py-3 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-all font-sora">
                    Cari
                </button>
            </form>
        </div>
    </section>

    <div class="flex flex-row justify-between items-center md:gap-4 min-h-screen flex-wrap">
        <div class="max-w-[430px] mx-auto ">
            @forelse ($kosList as $kos)
                <div
                    class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                    <div
                        class="relative mx-4 mt-4 overflow-hidden text-white shadow-lg rounded-xl bg-blue-gray-500 bg-clip-border shadow-blue-gray-500/40">
                        <img src="{{ asset('storage/' . $kos->foto) }}" alt="{{ $kos->nama }}" />
                        <span class="absolute top-4 left-4 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-5 py-2 rounded-full font-sora ">Rp {{ number_format($kos->harga) }}</span>
                        <div
                            class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-tr from-transparent via-transparent to-black/60">
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h2 class="block font-sora text-xl antialiased font-medium leading-snug tracking-normal text-gray-700">
                                {{ $kos->nama  }}
                            </h2>
                            <div class="flex md:gap-2 items-center justify-between font-poppins text-lg ">
                                <i class="ri-map-pin-line text-red-500"></i>
                                <span class="text-gray-500">{{ $kos->lokasi }}</span>
                            </div>
                        </div>
                        <p class="block font-poppins text-lg antialiased font-light leading-relaxed text-gray-500">
                            Enter a freshly updated and thoughtfully furnished peaceful home surrounded by ancient
                            trees,
                            stone
                            walls, and open meadows.
                        </p>
                    </div>
                    <div class="p-6">
                        <a href="#"
                            class="block w-full select-none rounded-lg bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br cursor-pointer py-3 px-7 text-center align-middle font-sans text-xl font-semibold text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg"
                            type="button"> Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <p style="text-align: center;">Belum ada kos yang tersedia.</p>
            @endforelse
        </div>
    </div>

    <script>
        // Dropdown functionality
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

        // Pencarian
        const searchInput = document.getElementById('searchInput');
        const recommendationGrid = document.getElementById('recommendationGrid');
        const cards = recommendationGrid.getElementsByClassName('card');

        // Elemen untuk menampilkan pesan "Kos tidak ditemukan"
        const noResultMessage = document.createElement('p');
        noResultMessage.textContent = 'Kos tidak ditemukan';
        noResultMessage.style.textAlign = 'center';
        noResultMessage.style.fontSize = '1.2rem';
        noResultMessage.style.color = '#555';
        noResultMessage.style.display = 'none';
        recommendationGrid.parentElement.appendChild(noResultMessage);

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();
            let hasResult = false;

            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                const nama = card.getAttribute('data-nama').toLowerCase();
                const lokasi = card.getAttribute('data-lokasi').toLowerCase();

                // Tampilkan atau sembunyikan card berdasarkan pencarian
                if (nama.includes(query) || lokasi.includes(query)) {
                    card.style.display = 'block'; // Tampilkan card
                    hasResult = true;
                } else {
                    card.style.display = 'none'; // Sembunyikan card
                }
            }

            // Tampilkan atau sembunyikan pesan "Kos tidak ditemukan"
            if (hasResult) {
                noResultMessage.style.display = 'none';
            } else {
                noResultMessage.style.display = 'block';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
