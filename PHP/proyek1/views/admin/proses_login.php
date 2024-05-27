<?php
// Menghidupkan fungsi session
session_start();

// Koneksi ke database
include "../../database/koneksi.php";

// Periksa jika username dan password telah disubmit
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lindungi dari serangan SQL Injection
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Ambil data pengguna dari database
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_array($result);
        
        // Periksa apakah password cocok
        if (password_verify($password, $user['password'])) {
            // Set session
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['level'] = $user['level'];

            // Redirect ke halaman setelah login
            header("Location:index.php");
            exit();
        } else {
            // Jika password tidak cocok, kirimkan pesan kesalahan
            echo "Password salah. Silakan coba lagi.";
        }
    } else {
        // Jika pengguna tidak ditemukan, kirimkan pesan kesalahan
        echo "Username atau password salah. Silakan coba lagi.";
    }

    // Bebaskan hasil query
    
}

// Tutup koneksi database

?>
