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

<?php
// Definisikan data kecamatan dan kelurahan
$data = [
    "Mojoroto" => ["Mojoroto", "Campurejo", "Banjarmlati", "Tamanan", "Mrican", "Bandar Kidul"],
    "Kota" => ["Kampundalem", "Ngampel", "Dandangan", "Banjaran", "Pakunden", "Balowerti", "Setono Gedong", "Dermo"],
    "Pesantren" => ["Bangsal", "Ngletih", "Ketami", "Lirboyo", "Betet", "Ngadirejo", "Ngronggo", "Tinalan"]
];
?>
    <div class="container">
        <h2>Formulir Input Data Pedagang</h2>
        <form action="proses_input_pedagang.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="no_registrasi">Nomor Registrasi</label>
                        <input type="text" class="form-control" name="no_registrasi" >
                    </div>
                    <div class="form-group mb-3">
                        <label for="nik">NIK KTP</label>
                        <input type="number" class="form-control" name="nik">
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
                        <select class="form-control" name="kecamatan" id="kecamatan" required>
                        <option value="">Pilih Kecamatan</option>
                            <?php foreach ($data as $kecamatan => $kelurahan): ?>
                                <option value="<?= $kecamatan ?>"><?= $kecamatan ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_kelurahan">Nama Kelurahan</label>
                        <select class="form-control" name="nama_kelurahan" id="kelurahan" required>
                        <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="alamat_ktp">Alamat KTP</label>
                        <input type="text" class="form-control" name="alamat_ktp">
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
            <div class="mb-4">
    <h5 class="mb-3">Upload Dokumen</h5>
    <!-- Foto KTP -->
    <div class="form-group mb-3">
        <label for="foto_ktp">Foto KTP</label>
        <input type="file" class="form-control" id="foto_ktp" name="foto_ktp">
    </div>
    <!-- Foto NIB -->
    <div class="form-group mb-3">
        <label for="foto_nib">Foto NIB</label>
        <input type="file" class="form-control" id="foto_nib" name="foto_nib">
    </div>
    <!-- Foto Lapak -->
    <div class="form-group mb-3">
        <label for="foto_lapak">Foto Lapak</label>
        <input type="file" class="form-control" id="foto_lapak" name="foto_lapak">
    </div>
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
    <script>
    // Definisikan array kecamatan dan kelurahan di JavaScript
    const kecamatanData = <?= json_encode($data); ?>;
    console.log(kecamatanData);
    const kecamatanDropdown = document.getElementById('kecamatan');
    const kelurahanDropdown = document.getElementById('kelurahan');

    kecamatanDropdown.addEventListener('change', function () {
        const selectedKecamatan = this.value;

        // Hapus semua opsi di kelurahan
        kelurahanDropdown.innerHTML = '<option value="">Pilih Kelurahan</option>';

        // Jika ada kecamatan yang dipilih
        if (selectedKecamatan && kecamatanData[selectedKecamatan]) {
            kecamatanData[selectedKecamatan].forEach(function (kelurahan) {
                const option = document.createElement('option');
                option.value = kelurahan;
                option.textContent = kelurahan;
                kelurahanDropdown.appendChild(option);
            });
        }
    });
</script>

</body>
</html>
