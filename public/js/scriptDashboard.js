// Menampilkan hanya bagian yang sesuai dengan menu yang diklik
function showSection(sectionId) {
    const sections = document.querySelectorAll('.card');
    sections.forEach(section => {
        section.classList.add('hidden');
    });

    document.getElementById(sectionId).classList.remove('hidden');

    // Mengatur kelas aktif untuk item navigasi yang dipilih
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.classList.remove('active');
    });
    document.querySelector(`[href="#${sectionId}"]`).classList.add('active');
}

// Menampilkan bagian Home secara default
document.addEventListener('DOMContentLoaded', () => {
    showSection('home');
});

// Fungsi untuk memperbarui waktu setiap detik
function updateTime() {
    const timeElement = document.getElementById('time');
    const now = new Date();

    // Ambil hari dalam minggu
    const daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    const dayName = daysOfWeek[now.getDay()];

    // Ambil tanggal, bulan, dan tahun
    const day = now.getDate().toString().padStart(2, '0');
    const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    const monthName = months[now.getMonth()];
    const year = now.getFullYear();

    // Ambil jam, menit, dan detik
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');

    // Gabungkan menjadi format yang lengkap
    const formattedTime = `${dayName}, ${day} ${monthName} ${year} - ${hours}:${minutes}:${seconds}`;
    timeElement.textContent = formattedTime;
}

// Memperbarui waktu setiap detik
setInterval(updateTime, 1000);

// Memanggil fungsi untuk menampilkan waktu saat halaman dimuat pertama kali
document.addEventListener('DOMContentLoaded', () => {
    updateTime(); // Menampilkan waktu saat halaman pertama kali dimuat
    showSection('home'); // Menampilkan bagian Home secara default
});


