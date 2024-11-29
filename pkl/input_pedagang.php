<?php
include 'include/header.php';
include 'include/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #eaeaea;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 20px;
        }

        /* Konten utama */
        .container {
            margin-left: 280px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Judul */
        h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Label */
        .form-label {
            font-weight: 600;
            color: #555;
        }

        /* Input Fields */
        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
        }
        #role {
            max-width: 200px; /* Lebar dropdown diperbaiki */
            padding: 8px;
            font-size: 14px;
            border-radius: 8px;
        }
        /* Tombol */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            font-size: 16px;
            padding: 10px 10px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .sidebar {
                position: static; /* Sidebar tidak fixed */
                width: 100%; /* Sidebar memenuhi layar */
                height: auto;
            }

            .container {
                margin-left: 0; /* Konten memenuhi layar */
                padding: 15px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-start" style="height: 100vh;">
        <div class="form-container col-md-9">
            <h2>Formulir Input Data Pedagang</h2>
            <form action="proses_input_pedagang.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="no_registrasi">Nomor Registrasi</label>
                    <input type="text" class="form-control" name="no_registrasi" required>
                </div>
                <div class="form-group">
                    <label for="nik">NIK KTP</label>
                    <input type="number" class="form-control" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama_pemilik">Nama Pemilik</label>
                    <input type="text" class="form-control" name="nama_pemilik" required>
                </div>
                <div class="form-group">
                    <label for="nama_usaha">Nama Usaha</label>
                    <input type="text" class="form-control" name="nama_usaha" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" required>
                </div>
                <div class="form-group">
                    <label for="nama_kelurahan">Nama Kelurahan</label>
                    <input type="text" class="form-control" name="nama_kelurahan" required>
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
                <div id="mapid"></div>
                <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" name="latitude" id="latitude" required>
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="text" class="form-control" name="longitude" id="longitude" required>
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

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        var map = L.map('mapid').setView([-7.813248850548071, 112.0037612883607], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        var marker;
        function onMapClick(e) {
            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker(e.latlng).addTo(map);
            document.getElementById('latitude').value = e.latlng.lat;
            document.getElementById('longitude').value = e.latlng.lng;
        }
        map.on('click', onMapClick);
    </script>
</body>
</html>
