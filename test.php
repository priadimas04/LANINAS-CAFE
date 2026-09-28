<?php
$host = "sqlXXX.epizy.com"; // Ganti dengan MySQL Host dari InfinityFree
$user = "if0_38458010"; // Sesuai dengan di Control Panel
$pass = "TFTwR8jm6cdKgf"; // Sesuai dengan di Control Panel
$db = "if0_38458010_laninas"; // Pastikan pakai nama database lengkap

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal: " . mysqli_connect_error();
}
?>
