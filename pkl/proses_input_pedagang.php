<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemilik = $_POST['nama_pemilik'];
    $alamat_ktp = $_POST['alamat_ktp'];
    $alamat_usaha = $_POST['alamat_usaha'];
    $deskripsi_alamat = $_POST['deskripsi_alamat'];
    $jenis_jualan = $_POST['jenis_jualan'];
    $jam_operasional = $_POST['jam_operasional'];
    $no_hp = $_POST['no_hp'];

    $foto_ktp = $_FILES['foto_ktp']['name'];
    $foto_nib = $_FILES['foto_nib']['name'];
    $foto_lapak = $_FILES['foto_lapak']['name'];

    $target_dir = "uploads/";
    move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $target_dir . $foto_ktp);
    move_uploaded_file($_FILES['foto_nib']['tmp_name'], $target_dir . $foto_nib);
    move_uploaded_file($_FILES['foto_lapak']['tmp_name'], $target_dir . $foto_lapak);

    $sql = "INSERT INTO pedagang (nama_pemilik, alamat_ktp, alamat_usaha, deskripsi_alamat, jenis_jualan, jam_operasional, no_hp, foto_ktp, foto_nib, foto_lapak)
            VALUES ('$nama_pemilik', '$alamat_ktp', '$alamat_usaha', '$deskripsi_alamat', '$jenis_jualan', '$jam_operasional', '$no_hp', '$foto_ktp', '$foto_nib', '$foto_lapak')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan!";
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
