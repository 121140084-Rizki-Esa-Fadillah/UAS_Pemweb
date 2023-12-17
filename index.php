<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login</title>
</head>

<body>
        <div class="container">
                <form action="index.php" method="POST" class="login-email" id="loginForm">
                        <h2>Login</h2>
                        <label for="email">E-mail : </label><br>
                        <input type="email" placeholder="Email" name="email" id="emailInput" required><br><br>
                        <label for="password">Password : </label><br>
                        <input type="password" placeholder="Password" name="password" id="passwordInput"
                                required><br><br>
                        <button type="button" onclick="login()" class="btn">Login</button><br><br>
                        <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
                </form>
        </div>

        <script>
        // Fungsi untuk menetapkan cookie
        function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        // Fungsi untuk mendapatkan nilai cookie
        function getCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
        }

        // Fungsi untuk menghapus cookie
        function eraseCookie(name) {
                document.cookie = name + '=; Max-Age=-99999999; path=/';
        }

        // Fungsi untuk menyimpan data ke localStorage
        function setLocalStorage(key, value) {
                localStorage.setItem(key, value);
        }

        // Fungsi untuk mendapatkan nilai dari localStorage
        function getLocalStorage(key) {
                return localStorage.getItem(key);
        }

        // Fungsi untuk menghapus data dari localStorage
        function eraseLocalStorage(key) {
                localStorage.removeItem(key);
        }

        function login() {
                var email = document.getElementById('emailInput').value;
                var password = document.getElementById('passwordInput').value;

                // Simulasi proses login
                if (email && password) {
                        // Simpan informasi login ke cookie dan localStorage
                        setCookie('loggedIn', 'true', 1); // Expires in 1 day
                        setLocalStorage('userEmail', email);

                        // Redirect ke halaman beranda.html atau lakukan aksi lain sesuai kebutuhan
                        window.location.href = "beranda.php";
                } else {
                        alert('Email dan password harus diisi');
                }
        }
        </script>
</body>

</html>