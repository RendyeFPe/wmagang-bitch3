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
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('gambar/walpaper2.jpg');
            background-size: cover;
            background-position: center;
        }
        .dashboard-box {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 40px;
            margin-top: 50px;
        }
        h1 {
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 dashboard-box">
                <h1 class="text-center">Selamat Datang, <?= $_SESSION['username']; ?></h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lihat Data Pedagang</h5>
                                <p class="card-text">Kelola data pedagang kaki lima yang sudah terdaftar.</p>
                                <a href="data_pedagang.php" class="btn btn-primary">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tambah Pedagang</h5>
                                <p class="card-text">Tambahkan pedagang kaki lima baru ke dalam database.</p>
                                <a href="input_pedagang.php" class="btn btn-success">Tambah Pedagang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Peta Lokasi</h5>
                                <p class="card-text">Lihat peta lokasi pedagang kaki lima yang sudah terdaftar.</p>
                                <a href="peta_pedagang.php" class="btn btn-info">Lihat Peta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
