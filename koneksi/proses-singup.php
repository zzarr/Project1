<?php
require_once 'koneksi.php';


// Mendapatkan data dari form sign up
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];



$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "Username sudah digunakan. Silakan coba dengan username lain.";
    exit();
}

// Memeriksa kecocokan password dan password konfirmasi
if ($password != $password2) {
    echo "Password dan Password Konfirmasi tidak cocok.";
    exit();
}

if (empty($username && $password && $password2 && $email)) {
    echo "<script>alert('Pastikan anda sudah mengisi semua formulir.');</script>";
    return false;
}



// Menyimpan data pengguna ke database
$query = "INSERT INTO users (username,email, password) VALUES ('$username','$email', '$password')";
if (mysqli_query($conn, $query)) {
    header("location:../notifBerhasil.php");
} else {
    echo "Pendaftaran gagal. Silakan coba lagi.";
}
