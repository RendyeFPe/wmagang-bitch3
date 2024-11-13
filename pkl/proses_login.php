<?php
session_start();

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'data_harga_pokok');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Gunakan prepared statement untuk keamanan
$stmt = $conn->prepare("SELECT * FROM login_pkl WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Ambil hasil query dan simpan di variabel baru
    $userData = $result->fetch_assoc();

    // Cek apakah password cocok dengan hash di database
    if (password_verify($password, $userData['password'])) {
        // Set session untuk username dan peran pengguna
        $_SESSION['username'] = $userData['username'];
        $_SESSION['role'] = $userData['role'];  // Pastikan ada kolom 'role' di tabel login_pkl

        // Arahkan berdasarkan role
        if ($userData['role'] == 'admin') {
            header("Location: index.php"); // Halaman admin
        } else {
            header("Location: input_pedagang.php"); // Halaman user
        }
        exit();
    } else {
        echo "<script>alert('Password salah.'); window.location.href = 'login.php';</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan.'); window.location.href = 'login.php';</script>";
}

$stmt->close();
$conn->close();
?>
