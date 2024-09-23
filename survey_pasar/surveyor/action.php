<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_harga_pokok";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $tanggal = $conn->real_escape_string($_POST['tanggal'][0]);
    $lokasi = $conn->real_escape_string($_POST['lokasi'][0]);
    $barang = $_POST['barang'];
    $harga_sekarang = $_POST['harga_sekarang'];
    $satuan = $_POST['satuan'];
    $gambar = $_POST['gambar'];

    // tentukan tabel berdasarkan lokasi
    $tabel = ""; //variabel untuk menampung tabel

    // tentukan nama tabel berdasarkan lokasi
    switch ($lokasi) {
        case 'Pasar Bandar':
            $tabel = "data_barang_bandar";
            break;
        case 'Pasar Pahing':
            $tabel = "data_barang_pahing";
            break;
        case 'Pasar Setono Betek':
            $tabel = "data_barang_setonobetek";
            break;
        default:
            break;
    }

    if ($tabel !== "") {
        // statement untuk harga terakhir
        $stmt_last_price = $conn->prepare("SELECT harga_sekarang FROM $tabel WHERE nama_barang=? ORDER BY tanggal DESC LIMIT 1");

        // statement untuk menyimpan data
        $stmt_insert =  $conn->prepare("INSERT INTO $tabel (tanggal, lokasi, nama_barang, harga_sekarang, harga_kemarin, satuan, selisih, gambar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        // Loop untuk menyimpan data ke database
        for ($i = 0; $i < count($barang); $i++) {
            // ambil data dan lakukan sanitasi
            $nama_barang = $conn->real_escape_string($barang[$i]);
            $harga_sekarang_item = $conn->real_escape_string($harga_sekarang[$i]);
            $satuan_item = $conn->real_escape_string($satuan[$i]);
            $gambar_item = $conn->real_escape_string($gambar[$i]);

            // bind parameteer dan execute statement untuk harga terakhir
            $stmt_last_price->bind_param("s", $nama_barang);
            $stmt_last_price->execute();
            $result_last_price = $stmt_last_price->get_result();

            if ($result_last_price->num_rows > 0) {
                $row = $result_last_price->fetch_assoc();
                $harga_kemarin = $row["harga_sekarang"];
            } else {
                // Jika tidak ada harga terakhir, set harga lama ke 0
                $harga_kemarin = 0;
            }

            // hitung selisih
            $selisih = $harga_sekarang_item - $harga_kemarin;

            // bind parameter dan execute statement untuk menyimpan data
            $stmt_insert->bind_param("sssiisis", $tanggal, $lokasi, $nama_barang, $harga_sekarang_item, $harga_kemarin, $satuan_item, $selisih, $gambar_item);

            if ($stmt_insert->execute()) {
                echo "Data berhasil disimpan ke database.";
            } else {
                echo "Error: " . $stmt_insert->error;
            }
        }

        // Tutup statement
        $stmt_last_price->close();
        $stmt_insert->close();
    }

    // Tutup koneksi ke database
    $conn->close();

    // Redirect ke halaman form input setelah data berhasil disimpan
    header("Location: index.php");
    exit();
}
