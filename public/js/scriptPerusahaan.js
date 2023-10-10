    // Ambil elemen-elemen yang dibutuhkan
    const openPopupButton = document.getElementById("open-popup");
    const popupOverlay = document.getElementById("popup-overlay");
    const popupCloseButton = document.getElementById("popup-close");

    // Fungsi untuk menampilkan popup
    function openPopup() {
        popupOverlay.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan popup
    function closePopup() {
        popupOverlay.style.display = "none";
    }

    // Tambahkan event listener untuk tombol "Detail"
    openPopupButton.addEventListener("click", openPopup);
    // Tambahkan event listener untuk tombol "Tutup"
    popupCloseButton.addEventListener("click", closePopup);