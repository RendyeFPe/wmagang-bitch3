<?php
include 'include/header.php';
include 'include/sidebar.php';
// include 'include/koneksi.php'; // Pastikan ini adalah koneksi ke database Anda

// Query untuk mengambil data pedagang yang belum divalidasi
$sql = "SELECT * FROM pedagang WHERE status_validasi = 'pending'";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Data Pedagang</title>
    <style>
        /* Styling untuk halaman validasi */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .table-container {
    overflow-x: auto;
    margin: 20px auto;
    width: 100%;
    max-width: 1000px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

table, th, td {
    border: 1px solid #ddd;
}

th {
    background-color: #006d77;
    color: white;
    font-weight: bold;
    text-align: center;
}

th, td {
    padding: 12px;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Gaya khusus untuk gambar agar lebih kecil */
.table img {
    width: 50px;  /* Atur ukuran lebar gambar */
    height: auto;
    border-radius: 4px;
    object-fit: cover;  /* Menjaga proporsi gambar */
}

/* Responsive layout */
@media (max-width: 768px) {
    th, td {
        font-size: 12px;
        padding: 8px;
    }
    h2 {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 16px;
    }
    .table-container {
        padding: 10px;
    }
    th, td {
        font-size: 10px;
        padding: 5px;
    }
}

        .action-btn {
            padding: 6px 12px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .validate-btn {
            background-color: #4CAF50;
            color: white;
        }
        .reject-btn {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
<div class="table-container">
    <h2>Validasi Data Pedagang</h2>
    <table>
        <thead>
            <tr>
                <th>No Registrasi</th>
                <th>NIK</th>
                <th>Nama Pemilik</th>
                <th>Alamat Usaha</th>
                <th>Jenis Jualan</th>
                <th>No HP</th>
                <th>Foto KTP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['no_registrasi'] . "</td>";
                    echo "<td>" . $row['nik'] . "</td>";
                    echo "<td>" . $row['nama_pemilik'] . "</td>";
                    echo "<td>" . $row['alamat_usaha'] . "</td>";
                    echo "<td>" . $row['jenis_jualan'] . "</td>";
                    echo "<td>" . $row['no_hp'] . "</td>";
                    echo "<td><img src='uploads/" . $row['foto_ktp'] . "' alt='Foto KTP'></td>";
                    echo "<td>
                            <form action='proses_validasi.php' method='POST'>
                                <input type='hidden' name='id_pedagang' value='" . $row['id'] . "'>
                                <button type='submit' name='action' value='validate' class='action-btn validate-btn'>Validasi</button>
                                <button type='submit' name='action' value='reject' class='action-btn reject-btn'>Tolak</button>
                            </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data yang perlu divalidasi</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php mysqli_close($conn); ?>
