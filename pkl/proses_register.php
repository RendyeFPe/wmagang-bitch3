<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'data_harga_pokok');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form registrasi
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Cek apakah username sudah ada
$stmt = $conn->prepare("SELECT * FROM login_pkl WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Username sudah terdaftar.'); window.location.href = 'register.php';</script>";
    exit();
}

// Hash password sebelum disimpan ke database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Simpan data ke database
$stmt = $conn->prepare("INSERT INTO login_pkl (username, password, role) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $hashed_password, $role);

if ($stmt->execute()) {
    echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location.href = 'login.php';</script>";
} else {
    echo "<script>alert('Registrasi gagal. Silakan coba lagi.'); window.location.href = 'register.php';</script>";
}

$stmt->close();
$conn->close();
?>
