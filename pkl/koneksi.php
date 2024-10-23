<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username MySQL Anda
$pass = "";     // Sesuaikan dengan password MySQL Anda
$db   = "db_pedagang"; // Nama database iiiiiig

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
