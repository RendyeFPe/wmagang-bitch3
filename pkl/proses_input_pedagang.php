<?php
// Include file koneksi database
include 'include/koneksi.php';

// Periksa apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $no_registrasi = isset($_POST['no_registrasi']) ? $_POST['no_registrasi'] : '';
    $nik = isset($_POST['nik']) ? $_POST['nik'] : '';
    $nama_pemilik = $_POST["nama_pemilik"];
    $nama_usaha = $_POST["nama_usaha"];
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

    // Validasi NIK (boleh kosong atau 0, tapi jika diisi harus 16 digit angka)
    if (!empty($nik) && (!is_numeric($nik) || strlen($nik) != 16)) {
        echo "<script>alert('NIK harus terdiri dari 16 digit angka, atau kosongkan/isi dengan 0.'); window.history.back();</script>";
        exit;
    }

    // Validasi panjang input
    if (strlen($nama_pemilik) > 50 || strlen($nama_usaha) > 50 || strlen($alamat_ktp) > 255 || strlen($alamat_usaha) > 255) {
        echo "<script>alert('Beberapa input melebihi panjang maksimum yang diperbolehkan. Periksa kembali form.'); window.history.back();</script>";
        exit;
    }

    // Upload file (foto KTP, NIB, dan foto lapak)
    $target_dir = "uploads/";
    $foto_ktp = $_FILES['foto_ktp']['name'];
    $foto_nib = $_FILES['foto_nib']['name'];
    $foto_lapak = $_FILES['foto_lapak']['name'];

    // Upload foto KTP
    if (!move_uploaded_file($_FILES['foto_ktp']['tmp_name'], $target_dir . $foto_ktp)) {
        echo "<script>alert('Gagal mengupload foto KTP.'); window.history.back();</script>";
        exit;
    }

    // Upload foto NIB
    if (!move_uploaded_file($_FILES['foto_nib']['tmp_name'], $target_dir . $foto_nib)) {
        echo "<script>alert('Gagal mengupload foto NIB.'); window.history.back();</script>";
        exit;
    }

    // Upload foto Lapak
    if (!move_uploaded_file($_FILES['foto_lapak']['tmp_name'], $target_dir . $foto_lapak)) {
        echo "<script>alert('Gagal mengupload foto Lapak.'); window.history.back();</script>";
        exit;
    }

    // Pastikan jika NIK kosong/null, simpan sebagai null di database
    $nik_sql = !empty($nik) ? "'$nik'" : "NULL";

    // Query untuk menyimpan data
    $sql = "INSERT INTO pedagang (no_registrasi, nik, nama_pemilik, nama_usaha, kecamatan, nama_kelurahan, alamat_ktp, alamat_usaha, deskripsi_alamat, jenis_jualan, jam_operasional, no_hp, latitude, longitude, foto_ktp, foto_nib, foto_lapak)
            VALUES ('$no_registrasi', $nik_sql, '$nama_pemilik', '$nama_usaha', '$kecamatan', '$nama_kelurahan', '$alamat_ktp', '$alamat_usaha', '$deskripsi_alamat', '$jenis_jualan', '$jam_operasional', '$no_hp', '$latitude', '$longitude', '$foto_ktp', '$foto_nib', '$foto_lapak')";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='input_pedagang.php';</script>";
        exit;
    } else {
        // Jika terjadi error
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.history.back();</script>";
        exit;
    }
}
?>
