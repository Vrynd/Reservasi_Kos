function changeSlide(direction, sliderId) {
    const slider = document.getElementById(sliderId);
    const slides = slider.getElementsByClassName('slide');
    let currentIndex = 0;

    // Cari slide aktif
    for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains('active')) {
            currentIndex = i;
            break;
        }
    }

    slides[currentIndex].classList.remove('active');
    let newIndex = (currentIndex + direction + slides.length) % slides.length;
    slides[newIndex].classList.add('active');
}
