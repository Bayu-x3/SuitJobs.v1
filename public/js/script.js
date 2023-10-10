// Inisialisasi variabel slideIndex
let slideIndex = 0;

// Fungsi untuk mengatur slide
function showSlide(n) {
    const slides = document.querySelectorAll(".slide-content");
    const elips = document.querySelectorAll(".elips");

    if (n < 0) {
        slideIndex = slides.length - 1;
    } else if (n >= slides.length) {
        slideIndex = 0;
    }

    // Menghapus kelas "active" dari semua slide dan elips
    slides.forEach(el => el.classList.remove("active"));
    elips.forEach(el => el.classList.remove("active"));

    // Menambahkan kelas "active" pada slide dan elips yang sesuai
    slides[slideIndex].classList.add("active");
    elips[slideIndex].classList.add("active");
}

// Fungsi untuk menggeser slide
function slide(n) {
    slideIndex += n;
    showSlide(slideIndex);
}

// Menampilkan slide pertama saat halaman dimuat
showSlide(slideIndex);