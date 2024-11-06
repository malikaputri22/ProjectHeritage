<?php
// Mulai sesi
session_start();

// Fungsi logout
function logout() {
    // Hapus semua variabel sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();

    // Set pesan logout pada sesi setelah sesi dihancurkan
    $_SESSION['logout_message'] = "Anda telah berhasil logout.";

    // Redirect ke halaman login atau halaman lain yang sesuai
    header("Location: index.php");
    exit();
}

// Panggil fungsi logout jika logout dipicu (misalnya, ketika tombol logout ditekan)
if (isset($_GET['logout'])) {
    logout();
}
?>
