<?php
include 'include/koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query hapus data
$sql = "DELETE FROM pedagang WHERE id = $id";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.href='dashboard.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data: " . mysqli_error($conn) . "'); window.history.back();</script>";
}

// Tutup koneksi
mysqli_close($conn);
?>
