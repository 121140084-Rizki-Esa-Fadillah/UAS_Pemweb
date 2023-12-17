<?php
include("konfigurasi.php");
session_start();
 
if (isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
}
 
if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        if ($password == $cpassword) {
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($konfigurasi, $sql);
                if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($konfigurasi, $sql);
                if ($result) {
                        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";
                } else {
                        echo "<script>alert('Maaf! Terjadi kesalahan.')</script>";
                }
                } else {
                echo "<script>alert('Maaf! Email Sudah Terdaftar.')</script>";
                }
        } else {
                echo "<script>alert('Password Tidak Sesuai')</script>";
        }
}
?>

<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Register</title>
</head>

<body>
        <div class="container">
                <form action="register.php" method="POST" class="login-email">
                        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
                        <label for="username">Username : </label><br>
                        <input type="text" placeholder="Username" name="username" required><br><br>
                        <label for="email">E-mail : </label><br>
                        <input type="email" placeholder="Email" name="email" required><br><br>
                        <label for="password">Password : </label><br>
                        <input type="password" placeholder="Password" name="password" required><br><br>
                        <label for="cpassword">Ulangi Password : </label><br>
                        <input type="password" placeholder="Confirm Password" name="cpassword" required><br><br>
                        <button name="submit" class="btn">Login</button><br><br>
                        <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login</a></p>
                </form>
        </div>
</body>

</html>