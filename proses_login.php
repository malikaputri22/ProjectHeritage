<?php
session_start();

include "database.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Pastikan menggunakan prepared statements untuk mencegah SQL injection
    $sql = "SELECT * FROM login WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek apakah ada hasil
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if ($password == $data['password']) {
            // Login sukses, simpan nama pengguna dalam sesi
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error'] = "Password salah";
            // Redirect kembali ke halaman login dengan pesan error
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Akun tidak ada";
        // Redirect kembali ke halaman login dengan pesan error
        header("Location: login.php");
        exit();
    }

    $stmt->close();
}
?>
