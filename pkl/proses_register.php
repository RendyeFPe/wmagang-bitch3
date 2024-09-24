<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_pedagang");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form registrasi
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi password
if ($password != $confirm_password) {
    die("Password tidak cocok. Silakan coba lagi.");
}

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Cek apakah username atau email sudah digunakan
$sql_check = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    die("Username atau email sudah digunakan. Silakan pilih yang lain.");
}

// Insert akun baru ke database
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Akun berhasil dibuat! Silakan login.";
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
