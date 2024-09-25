<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pedagang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Data Pedagang Kaki Lima</h2>
        <form action="proses_input_pedagang.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" required>
            </div>
            <div class="form-group">
                <label for="alamat_ktp">Alamat KTP</label>
                <input type="text" class="form-control" name="alamat_ktp" required>
            </div>
            <div class="form-group">
                <label for="alamat_usaha">Alamat Usaha</label>
                <input type="text" class="form-control" name="alamat_usaha" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_alamat">Deskripsi Alamat</label>
                <textarea class="form-control" name="deskripsi_alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="jenis_jualan">Jenis Jualan</label>
                <input type="text" class="form-control" name="jenis_jualan" required>
            </div>
            <div class="form-group">
                <label for="jam_operasional">Jam Operasional</label>
                <input type="text" class="form-control" name="jam_operasional" required>
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="foto_ktp">Upload Foto KTP</label>
                <input type="file" class="form-control-file" name="foto_ktp" required>
            </div>
            <div class="form-group">
                <label for="foto_nib">Upload Foto NIB</label>
                <input type="file" class="form-control-file" name="foto_nib" required>
            </div>
            <div class="form-group">
                <label for="foto_lapak">Upload Foto Lapak</label>
                <input type="file" class="form-control-file" name="foto_lapak" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
</body>
</html>
