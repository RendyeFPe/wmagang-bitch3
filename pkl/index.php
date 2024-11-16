<?php include "include/header.php"; ?>
<?php include "include/sidebar.php"; ?>

<div class="content">
    <h2>Dashboard</h2>

    <?php
    // Koneksi ke database
    // include 'koneksi.php';

    // Query untuk mengambil data pedagang yang telah divalidasi (status_validasi == true)
    $sql = "SELECT * FROM pedagang WHERE status_validasi = true";
    $result = mysqli_query($conn, $sql);

    // Periksa apakah query berhasil
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
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
            .table img {
                max-width: 50px;
                border-radius: 4px;
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
        </style>
    </head>
    <body>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No Registrasi</th>
                    <th>NIK</th>
                    <th>Nama Pemilik</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Alamat KTP</th>
                    <th>Alamat Usaha</th>
                    <th>Deskripsi Alamat</th>
                    <th>Jenis Jualan</th>
                    <th>Jam Operasional</th>
                    <th>No HP</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Foto KTP</th>
                    <th>Foto NIB</th>
                    <th>Foto Lapak</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['no_registrasi']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nik']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama_pemilik']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['kecamatan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nama_kelurahan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['alamat_ktp']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['alamat_usaha']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['deskripsi_alamat']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jenis_jualan']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['jam_operasional']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['no_hp']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['latitude']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['longitude']) . "</td>";
                        echo "<td><img src='uploads/" . htmlspecialchars($row['foto_ktp']) . "' alt='Foto KTP'></td>";
                        echo "<td><img src='uploads/" . htmlspecialchars($row['foto_nib']) . "' alt='Foto NIB'></td>";
                        echo "<td><img src='uploads/" . htmlspecialchars($row['foto_lapak']) . "' alt='Foto Lapak'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='16'>Tidak ada data yang divalidasi</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    </body>
    </html>

    <?php
    // Tutup koneksi
    mysqli_close($conn);
    ?>
