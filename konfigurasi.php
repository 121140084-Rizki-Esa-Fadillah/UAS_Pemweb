<?php
// konfigurasi.php
$konfigurasi = new mysqli('localhost', 'root', '', 'kelompok_tani');

// Periksa konfigurasi
if ($konfigurasi->connect_error) {
        die("konfigurasi ke database gagal: " . $konfigurasi->connect_error);
}
?>