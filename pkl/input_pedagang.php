<?php
include "include/header.php"; 
include "include/sidebar2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pedagang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .sidebar {
                width: 260px;
                height: 100vh;
                background-color: #ffffff;
                border-right: 1px solid #eaeaea;
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
                position: fixed;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
            
        .container {
            margin: 50px auto;
            max-width: 900px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #006d77;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
        }

        textarea.form-control {
            resize: none;
            height: 100px;
        }

        .btn-primary {
            background-color: #006d77;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #004e58;
        }

        #mapid {
            height: 400px;
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .file-input {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .file-input input {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulir Input Data Pedagang</h2>
        <form action="proses_input_pedagang.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="no_registrasi">Nomor Registrasi</label>
                        <input type="text" class="form-control" name="no_registrasi" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nik">NIK KTP</label>
                        <input type="number" class="form-control" name="nik" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_pemilik">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_usaha">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_kelurahan">Nama Kelurahan</label>
                        <input type="text" class="form-control" name="nama_kelurahan" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="alamat_ktp">Alamat KTP</label>
                        <input type="text" class="form-control" name="alamat_ktp" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat_usaha">Alamat Usaha</label>
                        <input type="text" class="form-control" name="alamat_usaha" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi_alamat">Deskripsi Alamat</label>
                        <textarea class="form-control" name="deskripsi_alamat" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_jualan">Jenis Jualan</label>
                        <input type="text" class="form-control" name="jenis_jualan" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_operasional">Jam Operasional</label>
                        <input type="text" class="form-control" name="jam_operasional" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" name="no_hp" required>
                    </div>
                </div>
            </div>
            
            <div id="mapid"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="latitude" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="longitude" required>
                    </div>
                </div>
            </div>

            <div class="form-group file-input">
                <label>Upload Dokumen:</label>
                <input type="file" class="form-control" name="foto_ktp" required>
                <input type="file" class="form-control" name="foto_nib" required>
                <input type="file" class="form-control" name="foto_lapak" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Simpan Data</button>
        </form>
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
