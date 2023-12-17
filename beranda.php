<!-- pendaftaran.html -->
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="beranda.css">
        <script src="script.js" defer></script>
        <title>Pendaftaran Kelompok Tani</title>
</head>

<body>
        <nav>
                <h2>Kelompok Tani Tunas Muda</h2>
                <div class="navbar">
                        <a href="#">Dashboard</a>
                        <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout ?')">Logout</a>
                </div>
        </nav>
        <div class="container">
                <div class="form">
                        <form id="Registrasi" onsubmit="handleFormSubmit(event)" method="post" action="proses.php">
                                <h2>Pendaftaran Anggota</h2><br>

                                <!-- Kolom Input No -->
                                <label for="nomor">No :</label>
                                <input type="number" id="nomor" name="Nomor" required><br><br>

                                <!-- Kolom Input Nama -->
                                <label for="nama">Nama Lengkap :</label>
                                <input type="text" id="nama" name="Nama_Lengkap" required><br><br>

                                <!-- Kolom Input NIK -->
                                <label for="nomor-induk">NIK :</label>
                                <input type="number" id="nomor-induk" name="Nomor_Induk" required><br>
                                <span id="error-nomor-induk" class="error-message"></span><br>

                                <!-- Kolom Input Jenis Kelamin -->
                                <label for="jenis-kelamin">Jenis Kelamin :</label>
                                <select id="jenis-kelamin" name="Jenis_Kelamin" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                </select><br><br>

                                <!-- Kolom Input Umur -->
                                <label for="umur">Umur :</label>
                                <input type="number" id="umur" name="Umur" required><br>
                                <span id="error-umur" class="error-message"></span><br>

                                <!-- Kolom Input Luas Lahan -->
                                <label for="luas-lahan">Luas Lahan (m<sup>2</sup>) : </label>
                                <input type="number" id="luas-lahan" name="Luas_Lahan" required><br>
                                <span id="error-luas-lahan"></span><br>

                                <!-- Kolom Input Tanggal Input -->
                                <label for="tanggal">Tanggal Masuk :</label>
                                <input type="date" id="tanggal" name="Tanggal_Masuk" required><br><br>

                                <!-- Kolom Input Jenis Tanaman -->
                                <label for="jenis-tanaman">Jenis Tanaman:</label>
                                <select id="jenis-tanaman" name="Jenis_Tanaman" required>
                                        <option value="Padi">Padi</option>
                                        <option value="Jagung">Jagung</option>
                                        <option value="Singkong">Singkong</option>
                                </select><br>

                                <!-- Tombol Submit -->
                                <input type="submit" id="daftar-button" value="Daftar">
                        </form>
                </div>
                <div class="daftar">
                        <h2>Daftar Anggota</h2><br>
                        <?php
                              include("konfigurasi.php");
                              $sql = "SELECT * FROM anggota_kelompok";
                              $result = $konfigurasi->query($sql);
                                          
                              if ($result->num_rows > 0) {
                                          // Menampilkan data baris per baris dari formulir
                                          echo
                                          "<table border='1'>
                                          <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Umur</th>
                                                <th>Luas Lahan (m<sup>2</sup>)</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jenis Tanaman</th>
                                          </tr>";
                                          // Tampilkan setiap baris data
                                          while ($row = $result->fetch_assoc()) {
                                                echo 
                                                "<tr>
                                                      <td>" . $row["no"] . "</td>
                                                      <td>" . $row["nama"] . "</td>
                                                      <td>" . $row["nik"] . "</td>
                                                      <td>" . $row["jenis_kelamin"] . "</td>
                                                      <td>" . $row["umur"] . "</td>
                                                      <td>" . $row["luas_lahan"] . "</td>
                                                      <td>" . $row["tanggal_masuk"] . "</td>
                                                      <td>" . $row["jenis_tanaman"]."</td>
                                                </tr>"; 
                                          }
                                          echo "</table>";
                              } else {
                                    echo "Tidak ada data dalam tabel.";
                              }
                        ?>
                        <div class="button-edit">
                                <div class="hapus">
                                        <br><br><br>
                                        <h2>Hapus Data</h3><br>
                                                <form class="form-delete" action="proses.php" method="get">
                                                        <label for="no">Pilih No yang ingin dihapus :</label>
                                                        <input type="number" name="Nomor_Anggota" required>
                                                        <input type="submit" value="Hapus"
                                                                onclick="return confirm('Apakah Anda yakin?')">
                                                </form>
                                </div>
                        </div>
                </div>
        </div>
        <footer>
                <p><strong>Copyright &copy; Rizki Esa Fadillah 2023</strong></p>
        </footer>
</body>

</html>