<?php include "include/header.php"; ?>
<?php include "include/sidebar.php"; ?>
<?php include "include/koneksi.php"; ?>

<div class="content">
    <h2>Dashboard</h2>

    <?php
    // Koneksi ke database
    // include 'koneksi.php';

    // Query untuk mengambil data pedagang yang telah divalidasi (status_validasi == true)
    $sql = "SELECT * FROM pedagang";
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
                padding: 0px;
                background-color: #f4f4f9;
            }
            h2 {
                text-align: center;
                color: #333;
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
            .search-container {
            margin-bottom: 15px;
            text-align: left;
            margin-left: 260px;
            /* position: fixed; */
        }
        #searchInput {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        #searchButton {
            padding: 10px 20px;
            background-color: #006d77;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        #searchButton:hover {
            background-color: #005a63;
        }
        .export-btn {
            padding: 10px 20px;
            background-color: #198754;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            margin-left: 10px;
        }
        .export-btn:hover {
            background-color: #157347;
        }
        .table-container {
            overflow-x: auto;
            margin: 20px;
            margin-left: 260px;
            width:auto;
            max-width: 95%; /* Maksimal lebar */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
        table {
            width: 100%;
            min-width: 1000px; /* Minimum lebar tabel */
        }
        .edit-btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #006d77;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .edit-btn:hover {
            background-color: #005a63;
        }
            .table img:hover {
    transform: scale(1.2); /* Perbesar gambar saat di-hover */
    transition: all 0.3s ease; /* Animasi perbesaran */
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
            .foto {
            max-width: 100px; /* Ukuran maksimal lebar foto */
            height: auto; /* Pertahankan proporsi asli foto */
            border-radius: 8px; /* Membuat sudut melengkung */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk estetika */
            margin: 5px; /* Jarak antar elemen */
            object-fit: cover; /* Memastikan foto terpotong secara proporsional jika dimensinya berbeda */
            display: block; /* Mengatur foto dalam blok untuk memastikan posisi rapi */
        }
            .content {
            margin-left: 20px;
            /* margin-right: 10px; */
            padding: 20px;
        }
        .content h3 {
            color: #343a40;
            font-size: 24px;
            margin-bottom: 20px;
        }
            /* Responsive layout */
            @media (max-width: 50px) {
                th, td {
                    font-size: 12px;
                    padding: 8px;
                }
                h2 {
                    font-size: 18px;
                }
            }

            @media (max-width: 50px) {
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
    <div class="search-container">
    <input type="text" id="searchInput" placeholder="Cari data pedagang...">
    <button id="searchButton">Enter</button>
    <a href="export_excel.php" class="export-btn">Download</a>
</div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No Registrasi</th>
                    <th>NIK</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Usaha</th>
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
                    <th>Action</th>
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
                        echo "<td>" . htmlspecialchars($row['nama_usaha']) . "</td>";
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
                        echo "<td><img src='uploads/" . htmlspecialchars($row['foto_ktp']) . "' alt='Foto KTP' class='foto'></td>";
                        echo "<td><img src='uploads/" . htmlspecialchars($row['foto_nib']) . "' alt='Foto NIB' class='foto'></td>";
                        echo "<td><img src='uploads/" . htmlspecialchars($row['foto_lapak']) . "' alt='Foto Lapak' class='foto'></td>";
                        echo "<td>
                        <a href='edit_pedagang.php?id=" . $row['id'] . "' class='edit-btn'>Edit</a>
                      </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='16'>Tidak ada data yang divalidasi</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        // Fungsi pencarian
        function searchTable() {
            const input = document.getElementById('searchInput').value.toLowerCase(); // Ambil nilai input
            const rows = document.querySelectorAll('table tbody tr'); // Semua baris tabel
            
            // Filter baris berdasarkan input
            rows.forEach(row => {
                const isVisible = Array.from(row.children).some(td =>
                    td.textContent.toLowerCase().includes(input)
                );
                row.style.display = isVisible ? '' : 'none'; // Sembunyikan baris jika tidak cocok
            });
        }

        // Event listener untuk tombol Enter
        const searchButton = document.getElementById('searchButton');
        searchButton.addEventListener('click', searchTable); // Panggil fungsi searchTable saat tombol diklik

        // Optional: Tambahkan event "Enter" langsung di kolom input
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                searchTable(); // Panggil fungsi searchTable saat Enter ditekan
                event.preventDefault(); // Hindari aksi default tombol Enter
            }
        });
    </script>

</body>
</html>

    </body>
    </html>

    <?php
    // Tutup koneksi
    mysqli_close($conn);
    ?>
