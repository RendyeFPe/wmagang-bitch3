<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_registrasi = isset($_POST['no_registrasi']) ? $_POST['no_registrasi'] : '';
    $nik = isset($_POST['nik']) ? $_POST['nik'] : '';
    $nama_pemilik = $_POST["nama_pemilik"];
    $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
    $nama_kelurahan = isset($_POST['nama_kelurahan']) ? $_POST['nama_kelurahan'] : '';
    $alamat_ktp = $_POST["alamat_ktp"];
    $alamat_usaha = $_POST['alamat_usaha'];
    $deskripsi_alamat = $_POST['deskripsi_alamat'];
    $jenis_jualan = $_POST['jenis_jualan'];
    $jam_operasional = $_POST['jam_operasional'];
    $no_hp = $_POST['no_hp'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    if (empty($nik) || !is_numeric($nik) || strlen($nik) != 16) {
        die("NIK harus terdiri dari 16 digit angka.");
    }

    $foto_ktp = $_FILES['foto_ktp']['name'];
    $foto_nib = $_FILES['foto_nib']['name'];
    $foto_lapak = $_FILES['foto_lapak']['name'];

    $target_dir = "uploads/";
    if (!move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $target_dir . $foto_ktp)) {
        echo "Gagal mengupload foto KTP";
    }
    if (!move_uploaded_file($_FILES['foto_nib']['tmp_name'], $target_dir . $foto_nib)) {
        echo "Gagal mengupload foto NIB";
    }
    if (!move_uploaded_file($_FILES['foto_lapak']['tmp_name'], $target_dir . $foto_lapak)) {
        echo "Gagal mengupload foto lapak";
    }
    
    $sql = "INSERT INTO pedagang (no_registrasi, nik, nama_pemilik, kecamatan, nama_kelurahan, alamat_ktp, alamat_usaha, deskripsi_alamat, jenis_jualan, jam_operasional, no_hp, latitude, longitude, foto_ktp, foto_nib, foto_lapak)
            VALUES ('$no_registrasi','$nik','$nama_pemilik', '$kecamatan','$nama_kelurahan', '$alamat_ktp', '$alamat_usaha', '$deskripsi_alamat', '$jenis_jualan', '$jam_operasional', '$no_hp', '$latitude', '$longitude', '$foto_ktp', '$foto_nib', '$foto_lapak')";

if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>
