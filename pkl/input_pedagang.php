<?php
//session_start();
//if (!isset($_SESSION['username'])) {
//    header("Location: login.php");
//    exit();
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pedagang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('gambar/walpaper2.jpg'); /* Wallpaper baru */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.85); /* Transparansi latar belakang */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px; /* Menambahkan margin ke bawah */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
            font-size: 2.5rem; /* Membesarkan ukuran teks */
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <!-- Menghapus judul utama di bagian atas halaman -->

    <div class="container d-flex justify-content-center align-items-start" style="height: 100vh;">
        <div class="form-container col-md-6">
            <h2>Formulir Input Data</h2> <!-- Judul bagian formulir -->
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
    </div>
</body>
</html>
