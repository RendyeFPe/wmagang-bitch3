<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pedagang = $_POST['id_pedagang'];
    $action = $_POST['action'];

    if ($action == 'validate') {
        // Validasi data pedagang
        $sql = "UPDATE pedagang SET status_validasi = true WHERE id = '$id_pedagang'";
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil divalidasi.";
        } else {
            echo "Gagal melakukan validasi: " . mysqli_error($conn);
        }
    } elseif ($action == 'reject') {
        // Hapus data pedagang jika ditolak
        $sql = "DELETE FROM pedagang WHERE id = '$id_pedagang'";
        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil ditolak.";
        } else {
            echo "Gagal melakukan penolakan: " . mysqli_error($conn);
        }
    }
    
    // Redirect kembali ke halaman validasi
    header("Location: validasi_data.php");
    exit;
}
mysqli_close($conn);
?>
