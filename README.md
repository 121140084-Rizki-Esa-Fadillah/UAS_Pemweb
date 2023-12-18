# Ujian Akhir Semester Pemrograman Web RA

Nama   : Rizki Esa Fadillah<br>
NIM    : 121140084<br>
Kelas  : RA<br>
link   : http://uas-pemweb-rizki.lovestoblog.com/<br>

## Web Pendaftaran Kelompok Tani
Web Pendaftaran Kelompok Tani adalah web dinamis untuk pendaftaran anggota baru, web ini juga dapat 
menampilkan daftar anggota yang telah mendaftar serta menghapus data anggota pada daftar.
Sebelum masuk ke dalam web, user diharuskan melakukan registrasi dan login terlebih dahulu.
Fitur yang tersedia antara lain :
1. Registrasi user
2. Login
3. Pendaftaran anggota kelompok tani
4. Melihat daftar anggota
5. Menghapus data kelompok tani

## Cara menggunakan Web
1. Registrasi akun, user membuat akun terlebih dahulu untuk melakukan login. Sehingga akun user akan terdaftar kedalam database dan dapat melakukan login.
2. Login, user diharuskan login sebelum mengakses web untuk mendaftar sebagai anggota kelompok tani. User cukup menginputkan email dan password untuk login. Untuk mempermudah pengecekan web bisa menggunakan email dan password yang telah disediakan jika tidak ingin registrasi (email : example@gmail.com dan Password : 123asd)
3. Pendaftran anggota kelompok tani, Setelah login user akan masuk ke halaman dashboard dan dapat mengakses fitur - fitur web, salah satunya melakukan pendaftaran. Untuk mendaftar user hanya perlu menambhkan data diri di kolom yang disediakan dan menekan tombol daftar.
4. Melihat daftar anggota, setelah tombol daftar di klik dan data diri yang telah diisi, tabel daftar anggota akan langsung ter-update dan dapat dilihat user.
5. Menghapus data, user dapat menghapus data di dalam tabel jika ada kesalahan saat menginputkan data. User cukup menginputkan data no anggota untuk menghapus data.

## Bagian 1: Client-side Programming

1.1 Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM. <br>
- Untuk file yang mengimplementasikan manipulasi DOM terdapat pada file : script.js.
- Pada halaman web tersebut, difungsikan untuk melakukan fungsi event dalam menangani kesalahan input saat mendaftar sebagai anggota kelompok tani.
- Jika ada input yang tidak sesuai ketentuan, akan muncul keterangan kesalahan input dibawah kolom input.<br><br>

1.2 Buatlah beberapa event untuk menghandle interaksi pada halaman web. <br>
- Untuk event yang menghandle interaksi ada pada file : script.js
- File tersebut berisi beberapa event antara lain :
- luasLahanErorr.textContent = "Luas lahan tidak memenuhi ketentuan"; akan muncul jika luas tanah dibawah 100m<sup>2</sup>.
- umurError.textContent = "Umur harus di atas 17 tahun"; akan muncul jika umur user dibawah 17 tahun (belum memiliki ktp)
- nomorIndukError.textContent = "Jumlah Nomor Induk Tidak Sesuai !"; akan muncul jika jumlah nik tidak sesua (NIK : 16 digit)<br><br>

## Bagian 2: Server-side Programming

2.1 Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar. <br>
- Untuk file yang mengimplementasikan script PHP untuk metode POST yaitu : proses.php, register.php
- File tersebut dapat mem parsing data dari input form.<br><br>

2.2  Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda. <br>
- Untuk file yang menerapkan OOP pada PHP yaitu : proses.php.
- File proses mengadopsi oop untuk fungsi tambah data dan hapus data.<br><br>

## Bagian 3: Database Management

3.1 Buatlah sebuah tabel pada database MySQL. <br>
- Pertama buka cmd dan masuk ke direktori mysql, kemudian buat database baru dengan nama kelompok_tani. (CREATE DATABASE kelompok_tani).
- Kedua buat tabel anggota_kelompok dan users (CREATE TABLE anggota_kelompok dan users) kemudian berikan atribut kolom pada masing - masing tabel.
- Ketiga periksa tabel yang telah dibuat untuk memeriksa apakah tabel yang dibuat sesuai dan benar (DESC nama_tabel dan SELECT * FROM nama_tabel)
- terakhir export file database yang telah dibuat melalui website phpMyAdmin.<br><br>

3.2 Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses. <br>
- Buat file konfigurasi.php kemudian isi host, username, password, dan nama database sesuai dengan ketentuan
($konfigurasi = new mysqli('localhost', 'root', '', 'kelompok_tani');) <br><br>

3.3 Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data. <br>
- Untuk manipulasi data pada tabel anggota_kelompok terdapat pada file : beranda.php file ini dapat menambah, menghapus, dan melihat data anggota kelompok tani.
- Untuk manipulasi data pada tabel user terdapat pada file : registrasi.php file ini dapat menambah akun users kedalam database.<br><br>

## Bagian 4: State Management 

4.1  Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session. <br>
- Session digunakan pada file : registrasi.php untuk masuk ke session diharuskan untuk registrasi akun terlebih dahulu sehingga data yang disimpan oleh server dapat digunakan saat login.<br><br>

4.2  Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript. <br>
- Cookie digunakan pada file : login.php untuk mwnyimpan data login kedalam local server sehingga user dapat langsung masuk ke halaman web dashborad.
- Data yang tersimpan dalam local server disetting agar hanya bertahan selama seminggu, sehingga harus login ulang jika melewati batas waktu.<br><br>

## Bagian Bonus: Hosting Aplikasi Web
1. Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
   - Membuat akun pada web hosting.
   - Di dalam halaman web hosting pilih domain (domain gratis atau domain berbayar).
   - Pada tufas ini saya menggunakan domain gratis, sehingga nama domain tidak bisa bebas memilih (domain gratis :lovesblog.com dan domain berbayar : .com, .id, .org, dll)
   - Menunggu domain yang dibuat dikonfigurasi oleh web hosting, jika selesai maka akan masuk kehalaman untuk hosting website.
   - Setelah masuk ke beranda hosting, selanjutnya masuk ke control panel (cpanel) untuk setting web.
   - pada halaman cpanel buat database dengan masuk ke menu database MYSQL kemudian buat nama databse dan masuk ke halaman phpMyAdmin untuk import database yang sebelumnya telah dieksport (kelompok_tani.sql).
   - Kemudian upload semua code php, css, dan sql pada menu file manager di cpanel, halaman homepage akan otomatis ke file yaitu index.php.
   - Kemudiaan cari file konfigurasi.php untuk mengatur ulang konfigurasu dengan mengisi isi host, username, password, dan nama database sesuai dengan ketentuan hosting $konfigurasi = new mysqli('sql312.infinityfree.com', 'if0_35634581', 'Ry2qvZCuFl', 'if0_35634581_uas');
   - Kemudian di halaman web hosting buat SSL certificate agar link website dapat diakses mengunakan HTTPS agar lebih aman.
   - Web berhasil dibuat.<br><br>

2. Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
   - Web hosting yang saya pilih adalah web infinityfree. Alasannya karena web hosting ini bisa digunakan untuk build website dinamis secara gratis dan tersedia SSL gratis yang bertahan selama 3 bulan.

3. Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
   - Web yang saya hosting telah dipastikan keamanannya karena telah memperoleh sertifikat SSL, meskipun hanya bertahan selama 3 bulan.
     
4. Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
   - 5 GB Disk Space, dapat alokasi sebesar 5 gigabyte (GB) untuk menyimpan berbagai file dan data di server hosting. Disk space ini mencakup berkas-berkas website, database, dan konten lainnya.
   - Unlimited Bandwidth, jumlah data yang dapat ditransfer antara server dan pengguna dalam satu periode waktu tertentu tidak memiliki batasan (unlimited).
   - 3 Hosted Domains, bisa memiliki 3 situs web di bawah satu akun hosting tanpa biaya tambahan.
   - 1 email, 1 email dapat digunakan untuk mengontrol 3 web hosting pada web infinity.
   - 1 FTP account, mentransfer file antara komputer lokal dan server hosting. Dengan satu akun FTP, kita dapat mengelola proses pengunggahan dan pengunduhan file ke dan dari server.
   - Lebih dari 1 Database, web ini dapat mengaitkan lebih dari 1 database pada 1 web.
