<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_registrasi = $_POST['no_registrasi'];
    $nik = $_POST['nik'];
    $nama_pemilik = $_POST['nama_pemilik'];
    $kecamatan = $_POST['kecamatan'];
    $nama_kelurahan = $_POST['nama_kelurahan'];
    $alamat_ktp = $_POST['alamat_ktp'];
    $alamat_usaha = $_POST['alamat_usaha'];
    $deskripsi_alamat = $_POST['deskripsi_alamat'];
    $jenis_jualan = $_POST['jenis_jualan'];
    $jam_operasional = $_POST['jam_operasional'];
    $no_hp = $_POST['no_hp'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $foto_ktp = $_FILES['foto_ktp']['name'];
    $foto_nib = $_FILES['foto_nib']['name'];
    $foto_lapak = $_FILES['foto_lapak']['name'];

    $target_dir = "uploads/";
    move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $target_dir . $foto_ktp);
    move_uploaded_file($_FILES['foto_nib']['tmp_name'], $target_dir . $foto_nib);
    move_uploaded_file($_FILES['foto_lapak']['tmp_name'], $target_dir . $foto_lapak);

    $sql = "INSERT INTO pedagang (no_registrasi, nik, nama_pemilik, kecamatan, nama_kelurahan, alamat_ktp, alamat_usaha, deskripsi_alamat, jenis_jualan, jam_operasional, no_hp, latitude, longitude, foto_ktp, foto_nib, foto_lapak)
            VALUES ('$no_registrasi','$nik','$nama_pemilik', '$kecamatan','$nama_kelurahan', '$alamat_ktp', '$alamat_usaha', '$deskripsi_alamat', '$jenis_jualan', '$jam_operasional', '$no_hp', '$latitude', '$longitude', '$foto_ktp', '$foto_nib', '$foto_lapak')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan!";
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
