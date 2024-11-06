<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>

<body>

    <div class="login-container">
        <h2>Masuk ke Akun Anda</h2>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo "<div class='error-message'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);  // Hapus pesan error setelah ditampilkan
        }
        ?>
        <form method="POST" action="proses_login.php">
            <label for="username">Nama Pengguna</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Masuk</button>
            <p>Belum punya akun? <a href="signup.php" class="signup-link">Daftar di sini</a></p>
        </form>

    </div>
</body>

</html>
