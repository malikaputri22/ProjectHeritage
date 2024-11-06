<?php
session_start();

include "database.php";

if (isset($_POST["regis"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO login (username, password) VALUES
        ('$username', '$password')";

    if ($db->query($sql)) {
        header("location: login.php");
    } else {
        $_SESSION['error'] = "Registrasi gagal";
    }
}

?>

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
        <h2>Buat Akun Baru Anda</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<div class='error-message'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);  // Hapus pesan error setelah ditampilkan
        }
        ?>
        <form action="" method="POST">
            <label for="username">Nama Pengguna</label>
            <input type="text" id="username" name="username">

            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password">

            <button type="submit" name="regis">Daftar</button>
            <div class="signup">
            <p><a href="login.php" class="signup-link">Kembali</a></p>
            </div>
        </form>

    </div>

</body>

</html>