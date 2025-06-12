// Ambil elemen input, tombol, dan area hasil pencarian
const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const resultsSection = document.getElementById('search-results');
const resultsGrid = resultsSection.querySelector('.results-grid');

// Fungsi pencarian
searchButton.addEventListener('click', () => {
    const query = searchInput.value.toLowerCase().trim(); // Ambil nilai input dan ubah ke huruf kecil
    const cards = document.querySelectorAll('.recommendation-grid .card'); // Ambil semua kartu kos
    let resultsFound = false;

    // Hapus hasil sebelumnya
    resultsGrid.innerHTML = '';

    // Periksa setiap kartu
    cards.forEach(card => {
        const nama = card.getAttribute('data-nama').toLowerCase();
        const lokasi = card.getAttribute('data-lokasi').toLowerCase();

        // Jika nama atau lokasi cocok dengan query, tambahkan ke hasil pencarian
        if (nama.includes(query) || lokasi.includes(query)) {
            const clonedCard = card.cloneNode(true); // Salin elemen kartu
            resultsGrid.appendChild(clonedCard); // Tambahkan ke hasil pencarian
            resultsFound = true;
        }
    });

    // Tampilkan atau sembunyikan hasil pencarian
    if (resultsFound) {
        resultsSection.style.display = 'block'; // Tampilkan hasil pencarian
    } else {
        resultsSection.style.display = 'none'; // Sembunyikan jika tidak ada hasil
        alert('Tidak ditemukan kos yang sesuai dengan kata kunci Anda.'); // Notifikasi jika tidak ada hasil
    }
});
