<div class="table-responsive-sm overflow-x-auto">
    <?php
    // load_data.php
    
    // Koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'data_harga_pokok');

    // Periksa koneksi
    if (mysqli_connect_error()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    // Ambil tanggal dari parameter GET
    $tanggal = $_GET['tanggal'];

    // Lakukan kueri data berdasarkan tanggal, hanya menghitung nilai yang tidak NULL
    $qry = "SELECT 
    d.nama_barang, 
    FLOOR(AVG(d.harga_sekarang)) AS rata_rata_harga, 
    MAX(d.tanggal) AS tanggal,
    FLOOR(AVG(d.harga_kemarin)) AS rata_rata_harga_kemarin, 
    FLOOR(AVG(d.harga_sekarang) - AVG(d.harga_kemarin)) AS selisih_rata_rata, 
    MAX(d.gambar) AS gambar
FROM (
    SELECT nama_barang, 
           CASE WHEN harga_sekarang > 0 THEN harga_sekarang ELSE NULL END AS harga_sekarang,
           CASE WHEN harga_kemarin > 0 THEN harga_kemarin ELSE NULL END AS harga_kemarin,
           tanggal, 
           gambar
    FROM data_barang_bandar
    UNION ALL
    SELECT nama_barang, 
           CASE WHEN harga_sekarang > 0 THEN harga_sekarang ELSE NULL END AS harga_sekarang,
           CASE WHEN harga_kemarin > 0 THEN harga_kemarin ELSE NULL END AS harga_kemarin,
           tanggal, 
           gambar
    FROM data_barang_pahing
    UNION ALL
    SELECT nama_barang, 
           CASE WHEN harga_sekarang > 0 THEN harga_sekarang ELSE NULL END AS harga_sekarang,
           CASE WHEN harga_kemarin > 0 THEN harga_kemarin ELSE NULL END AS harga_kemarin,
           tanggal, 
           gambar
    FROM data_barang_setonobetek
) AS d
JOIN (
    SELECT nama_barang, MAX(tanggal) AS max_tanggal
    FROM (
        SELECT nama_barang, tanggal FROM data_barang_bandar
        UNION ALL
        SELECT nama_barang, tanggal FROM data_barang_pahing
        UNION ALL
        SELECT nama_barang, tanggal FROM data_barang_setonobetek
    ) AS sub
    GROUP BY nama_barang
) AS latest ON d.nama_barang = latest.nama_barang AND d.tanggal = latest.max_tanggal
GROUP BY d.nama_barang
";

    $result = mysqli_query($koneksi, $qry);
    $no = 1;

    // Tampilkan hasil dalam bentuk HTML
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='container overflow-x-scroll'>
        <table border='1' class='table table-striped'>
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tanggal</th>
                <th>Harga Baru (Rp)</th>
                <th>Harga Lama (Rp)</th>
                <th>Selisih Rata-rata</th>
            </tr>
            </thead>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['nama_barang'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td>" . ($row['rata_rata_harga'] !== null ? $row['rata_rata_harga'] : 'Data tidak tersedia') . "</td>";
            echo "<td>" . ($row['rata_rata_harga_kemarin'] !== null ? $row['rata_rata_harga_kemarin'] : 'Data tidak tersedia') . "</td>";
            echo "<td>" . ($row['selisih_rata_rata'] !== null ? $row['selisih_rata_rata'] : 'Data tidak tersedia') . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>Tidak ada data yang ditemukan untuk tanggal $tanggal</p>";
    }

    // Tutup koneksi
    mysqli_close($koneksi);
    ?>
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
</div>
=======
</div>
>>>>>>> 7c1844e (kontol)
