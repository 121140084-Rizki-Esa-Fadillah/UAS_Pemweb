<?php
include("konfigurasi.php");

class AnggotaKelompok {
        private $konfigurasi;
    
        public function __construct($konfigurasi) {
                $this->konfigurasi = $konfigurasi;
        }
    
        public function tambahAnggota($data) {
                $nomor = $data['Nomor'];
                $nama = $data['Nama_Lengkap'];
                $nik = $data['Nomor_Induk'];
                $jenis_kelamin = $data['Jenis_Kelamin'];
                $umur = $data['Umur'];
                $luas_lahan = $data['Luas_Lahan'];
                $tanggal_masuk = $data['Tanggal_Masuk'];
                $jenis_tanaman = $data['Jenis_Tanaman'];
                $browser_info = $_SERVER['HTTP_USER_AGENT'];
                $ip_address = $_SERVER['REMOTE_ADDR'];
        
                $query = "INSERT INTO anggota_kelompok (no, nama, nik, jenis_kelamin, umur, luas_lahan, tanggal_masuk, jenis_tanaman, browser_info, ip_address) VALUES ('$nomor', '$nama', '$nik', '$jenis_kelamin', '$umur', '$luas_lahan', '$tanggal_masuk', '$jenis_tanaman', '$browser_info', '$ip_address')";
        
                if (mysqli_query($this->konfigurasi, $query)) {
                        echo "";
                } else {
                        echo "Pendaftaran terjadi error ! : " . $query . "<br>" . mysqli_error($this->konfigurasi);
                }
        
                // Redirect ke halaman Beranda setelah proses pendaftaran
                header("Location: beranda.php");
        }
    
        public function hapusAnggota($nomor) {
            $delete_query = "DELETE FROM anggota_kelompok WHERE no = '$nomor'";
    
            if (mysqli_query($this->konfigurasi, $delete_query)) {
                echo "";
            } else {
                echo "Pendaftaran terjadi error ! : " . $delete_query . "<br>" . mysqli_error($this->konfigurasi);
            }
    
            // Redirect ke halaman Daftar Anggota setelah proses hapus data
            header("Location: beranda.php");
        }
    }

// Buat objek AnggotaKelompok dengan parameter koneksi database
$anggotaKelompok = new AnggotaKelompok($konfigurasi);

// Cek jika formulir disubmit (POST request)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tangani tambah anggota
        $anggotaKelompok->tambahAnggota($_POST);
}

// Cek jika parameter Nomor_Anggota ada dalam URL (GET request)
if (isset($_GET['Nomor_Anggota'])) {
        // Tangani hapus anggota
        $anggotaKelompok->hapusAnggota($_GET['Nomor_Anggota']);
}
?>