<?php
session_start();

// Koneksi ke database
$koneksi = new mysqli('localhost', 'root', '', 'db_pedagang');

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username ada di database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Set session
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");  // Arahkan ke halaman dashboard setelah login
    } else {
        echo "Password salah.";
    }
} else {
    echo "Username tidak ditemukan.";
}

$conn->close();
?>
