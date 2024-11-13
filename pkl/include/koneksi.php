<?php
$server = "localhost";
$user = "root"; // Sesuaikan dengan username MySQL Anda
$pass = "";     // Sesuaikan dengan password MySQL Anda
$db   = "data_harga_pokok"; // Nama database iiiiiig

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
