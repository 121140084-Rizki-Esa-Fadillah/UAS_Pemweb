// Event listener untuk formulir pendaftaran
document.getElementById("Registrasi").addEventListener("submit", function (event) {
        // Reset pesan kesalahan
        clearErrorMessages();

        // Validasi Luas Tanah
        var luasLahan = document.getElementById("luas-lahan").value.trim();;
        var luasLahanErorr = document.getElementById("error-luas-lahan");

        if (luasLahan < 100) {
                luasLahanErorr.textContent = "Luas lahan tidak memenuhi ketentuan";
        }

         // Validasi Nomor Induk (gunakan event input)
        var nomorIndukInput = document.getElementById("nomor-induk").value.trim();
        var nomorIndukError = document.getElementById("error-nomor-induk");

        if (nomorIndukInput.length !== 16) {
                nomorIndukError.textContent = "Jumlah Nomor Induk Tidak Sesuai !";
        }

        // Validasi Umur (gunakan event change)
        var umurInput = document.getElementById("umur").value.trim();
        var umurError = document.getElementById("error-umur");

        if (umurInput < 17) {
                umurError.textContent = "Umur harus di atas 17 tahun";
        }
        // Validasi keseluruhan formulir
        if (luasLahan > 100 &&
                nomorIndukInput.length === 16 &&
                umurInput >= 17) {
                // Jika formulir valid, formulir akan dikirimkan ke PHP
        } else {
                // Mencegah pengiriman formulir jika ada kesalahan
                event.preventDefault();
                return
        }
});

// Fungsi untuk membersihkan pesan kesalahan
function clearErrorMessages() {
        var luasLahanErorr = document.getElementById("error-luas-lahan");
        var nomorIndukError = document.getElementById("error-nomor-induk");
        var umurError = document.getElementById("error-umur");

        luasLahanErorr.textContent = "";
        nomorIndukError.textContent = "";
        umurError.textContent = "";
}

