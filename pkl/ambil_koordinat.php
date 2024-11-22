<?php
header('Content-Type: application/json');

// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_harga_pokok";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi gagal: " . $conn->connect_error]));
}

$sql = "SELECT latitude, longitude, nama_usaha FROM pedagang";
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
