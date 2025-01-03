<?php include "include/header.php"; ?>
<?php include "include/sidebar.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<div class="content">
    <?php
    // Koneksi ke database
    // include 'koneksi.php';

    // Query untuk mengambil data pedagang yang telah divalidasi (status_validasi == true)
    $sql = "SELECT * FROM pedagang ORDER BY no_registrasi ASC";
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
                padding: 0;
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
                position: fixed;
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
                margin-left: 10px;
            }
            .export-btn:hover {
                color: white;
                background-color: #146c43;
            }
            .table-container {
                overflow-x: auto;
                margin: 20px;
                margin-left: 260px;
                margin-top: 75px;
                width: 90%;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 10px;
            }
            table {
                width: 100%;
                min-width: 1000px;
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
                color: white;
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
                max-width: 100px;
                height: auto;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin: 5px;
                object-fit: cover;
                display: block;
            }
            .content {
                margin-left: 20px;
                padding: 20px;
            }
            @media (max-width: 768px) {
                .search-container, .table-container {
                    margin-left: 0;
                    width: 100%;
                }
                th, td {
                    font-size: 12px;
                    padding: 6px;
                }
                #searchInput, #searchButton {
                    width: 100%;
                    margin-bottom: 10px;
                }
            }
        </style>
    </head>
    <body>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Cari data pedagang...">
        <button id="searchButton">Enter</button>
        <a href="export_excel.php" class="export-btn">Download</a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Import Data
        </button>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
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
                        echo "<td>" . (!empty($row['no_registrasi']) ? htmlspecialchars($row['no_registrasi']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['nik']) && $row['nik'] != '0' ? htmlspecialchars($row['nik']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['nama_pemilik']) ? htmlspecialchars($row['nama_pemilik']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['nama_usaha']) ? htmlspecialchars($row['nama_usaha']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['kecamatan']) ? htmlspecialchars($row['kecamatan']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['nama_kelurahan']) ? htmlspecialchars($row['nama_kelurahan']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['alamat_ktp']) ? htmlspecialchars($row['alamat_ktp']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['alamat_usaha']) ? htmlspecialchars($row['alamat_usaha']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['deskripsi_alamat']) ? htmlspecialchars($row['deskripsi_alamat']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['jenis_jualan']) ? htmlspecialchars($row['jenis_jualan']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['jam_operasional']) ? htmlspecialchars($row['jam_operasional']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['no_hp']) ? htmlspecialchars($row['no_hp']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['latitude']) ? htmlspecialchars($row['latitude']) : "Tidak Ada Data") . "</td>";
                        echo "<td>" . (!empty($row['longitude']) ? htmlspecialchars($row['longitude']) : "Tidak Ada Data") . "</td>";
                        echo "<td><img src='uploads/" . (!empty($row['foto_ktp']) ? htmlspecialchars($row['foto_ktp']) : "placeholder.png") . "' alt='Foto KTP' class='foto'></td>";
                        echo "<td><img src='uploads/" . (!empty($row['foto_nib']) ? htmlspecialchars($row['foto_nib']) : "placeholder.png") . "' alt='Foto NIB' class='foto'></td>";
                        echo "<td><img src='uploads/" . (!empty($row['foto_lapak']) ? htmlspecialchars($row['foto_lapak']) : "placeholder.png") . "' alt='Foto Lapak' class='foto'></td>";
                        echo "<td>
                                <a href='edit_pedagang.php?id=" . $row['id'] . "' class='edit-btn'>Edit</a>
                                <a href='hapus_pedagang.php?id=" . $row['id'] . "' class='edit-btn' style='background-color: red;' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='18'>Tidak ada data yang tersedia</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        // Fungsi pencarian
        function searchTable() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('table tbody tr');
            rows.forEach(row => {
                const isVisible = Array.from(row.children).some(td =>
                    td.textContent.toLowerCase().includes(input)
                );
                row.style.display = isVisible ? '' : 'none';
            });
        }

        const searchButton = document.getElementById('searchButton');
        searchButton.addEventListener('click', searchTable);

        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                searchTable();
                event.preventDefault();
            }
        });
    </script>
    </body>
    </html>
    <?php
    // Tutup koneksi
    mysqli_close($conn);
    ?>
