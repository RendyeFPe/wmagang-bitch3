<?php 
include 'include/header.php'; 
include 'include/sidebar.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Lokasi PKL</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            
        }

        /* Styling sidebar */
         /* .sidebar {
            background-color: #ffffff;
            color: white;
            height: 100vh;
            padding: 20px;
            width: 250px;
            position: fixed;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        } */
        /*.sidebar h1 {
            font-size: 18px;
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: #0056b3;
            padding: 10px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .logout {
            margin-top: 20px;
            background-color: #dc3545;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
        .logout:hover {
            background-color: #c82333;
            transition: all 0.3s;
        } */

        /* Styling konten */
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .content h3 {
            color: #343a40;
            font-size: 24px;
            margin-bottom: 20px;
        }
        #map {
            height: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Footer styling */
        footer {
            margin-top: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <!-- <div class="sidebar">
        <h1>DISPERDAGIN</h1>
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-check-circle"></i> Validasi Data</a>
        <a href="#"><i class="fas fa-map-marker-alt"></i> Maps</a>
        <a href="#"><i class="fas fa-users"></i> Users</a>
        <a href="#" class="logout">Logout</a>
    </div> -->

    <!-- Konten -->
    <div class="content">
        <h3>Peta Lokasi PKL yang Valid</h3>
        <div id="map"></div>
        <footer>&copy; 2024 DISPERDAGIN - Kota Kediri</footer>
    </div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-7.8166, 112.0117], 13);

        // Tambahkan tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Custom marker icon
        var customIcon = L.icon({
            iconUrl: 'gambar/pun.png',
            iconSize: [50, 50],
            iconAnchor: [16, 32],
            popupAnchor: [0, -32]
        });

        // Fetch koordinat dari database
        fetch('ambil_koordinat.php')
            .then(response => response.json())
            .then(data => {
                data.forEach(location => {
                    var marker = L.marker([location.latitude, location.longitude], { icon: customIcon }).addTo(map);
                    marker.bindPopup(`<b>${location.nama_usaha}</b>`);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
