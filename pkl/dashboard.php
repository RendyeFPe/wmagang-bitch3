<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Background wallpaper dengan opacity lebih kecil untuk kejelasan */
        body {
            background-image: url('gambar/walpaper3.png'); /* Ganti URL dengan wallpaper pilihan */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            color: #333;
            height: 100vh;
        }

        /* Overlay yang lebih transparan */
        .overlay {
            background-color: rgba(255, 255, 255, 0.3); /* Mengurangi opacity untuk menampilkan wallpaper lebih jelas */
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        /* Styling dashboard container */
        .dashboard-container {
            position: relative;
            z-index: 2;
            padding: 50px;
        }

        /* Card styling */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            background-color: rgba(255, 255, 255, 0.9); /* Lebih transparan agar wallpaper tetap terlihat */
        }

        /* Hover effect pada card */
        .card:hover {
            transform: scale(1.05); /* Zoom in sedikit saat hover */
        }

        /* Style judul halaman */
        h1 {
            color: #333;
            font-family: 'Arial', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Card title styling */
        .card-title {
            color: #007bff; /* Warna biru untuk judul card */
        }

        /* Button style */
        .btn-primary {
            background-color: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

    </style>
    <title>Dashboard</title>
</head>
<body>

    <!-- Overlay lebih transparan agar wallpaper lebih jelas -->
    <div class="overlay"></div>

    <!-- Dashboard content -->
    <div class="container dashboard-container">
        <h1>Welcome to Your Dashboard</h1>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pedagang</h5>
                        <p class="card-text">Lihat dan kelola data pedagang kaki lima di Kota Kediri.</p>
                        <a href="#" class="btn btn-primary">Lihat Data</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Pedagang</h5>
                        <p class="card-text">Tambahkan data pedagang baru beserta informasi lengkapnya.</p>
                        <a href="#" class="btn btn-primary">Tambah Pedagang</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peta Lokasi</h5>
                        <p class="card-text">Lihat peta lokasi pedagang kaki lima yang terdaftar.</p>
                        <a href="#" class="btn btn-primary">Lihat Peta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
