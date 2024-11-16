<? include 'include/sidebar.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta PKL</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map { height: 600px; }
    </style>
</head>
<body>
    <h3>Peta Lokasi PKL</h3>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta dan atur tampilan awalnya
        var map = L.map('map').setView([-7.8166, 112.0117], 13); // Set lokasi default ke Kediri

        // Tambahkan tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Fungsi untuk mengambil data koordinat dan menambahkannya ke peta
        fetch('ambil_koordinat.php')
            .then(response => response.json())
            .then(data => {
                data.forEach(location => {
                    var marker = L.marker([location.latitude, location.longitude]).addTo(map);
                    marker.bindPopup(`<b>${location.nama_usaha}</b>`);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>


<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_harga_pokok";

$conn = new mysqli($servername, $username,  $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT latitude, longitude, nama_usaha FROM pedagang where status_validasi = 'true'";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>
