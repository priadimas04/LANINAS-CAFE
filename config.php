<?php
$host = "localhost"; // Pastikan ini "localhost" jika dijalankan di XAMPP
$user = "root"; // Default user XAMPP adalah "root"
$pass = ""; // Default password XAMPP kosong
$db = "laninas"; // Pastikan nama database benar

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>

