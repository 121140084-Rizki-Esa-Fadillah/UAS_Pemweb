<?php
// logout.php

// Mulai sesi (jika belum dimulai)
session_start();

//mengosongkan variabel-variabel sesi tanpa mengakhiri sesi secara keseluruhan.
session_unset();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login
header("Location: index.php");
exit();
?>
