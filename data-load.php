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
    db.nama_barang, 
    db.tanggal, 
    db.gambar, 
    FLOOR(AVG(CASE WHEN db.harga_sekarang > 0 THEN db.harga_sekarang ELSE NULL END)) AS rata_rata_harga, 
    FLOOR(AVG(CASE WHEN db.harga_kemarin > 0 THEN db.harga_kemarin ELSE NULL END)) AS rata_rata_harga_kemarin, 
    FLOOR(AVG(CASE 
        WHEN db.harga_sekarang > 0 AND db.harga_kemarin > 0 THEN db.harga_sekarang - db.harga_kemarin 
        ELSE NULL 
    END)) AS selisih_rata
FROM (
    SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal, gambar
    FROM data_barang_bandar
    WHERE nama_barang IN ('Beras premium', 'Beras Medium', 'Telur Ayam ras', 'Cabe Merah Keriting', 'Cabe Merah Besar',
                          'Daging Sapi Paha Belakang', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Cabe Rawit Merah', 
                          'Bawang Merah', 'Bawang Putih Sinco/Honan')
    
    UNION ALL
    
    SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal, gambar
    FROM data_barang_pahing
    WHERE nama_barang IN ('Beras premium', 'Beras Medium', 'Telur Ayam ras', 'Cabe Merah Keriting', 'Cabe Merah Besar',
                          'Daging Sapi Paha Belakang', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Cabe Rawit Merah', 
                          'Bawang Merah', 'Bawang Putih Sinco/Honan')
    
    UNION ALL
    
    SELECT nama_barang, harga_sekarang, harga_kemarin, selisih, tanggal, gambar
    FROM data_barang_setonobetek
    WHERE nama_barang IN ('Beras premium', 'Beras Medium', 'Telur Ayam ras', 'Cabe Merah Keriting', 'Cabe Merah Besar',
                          'Daging Sapi Paha Belakang', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Cabe Rawit Merah', 
                          'Bawang Merah', 'Bawang Putih Sinco/Honan')
) AS db
INNER JOIN (
    SELECT nama_barang, MAX(tanggal) AS max_tanggal
    FROM (
        SELECT nama_barang, tanggal
        FROM data_barang_bandar
        WHERE nama_barang IN ('Beras premium', 'Beras Medium', 'Telur Ayam ras', 'Cabe Merah Keriting', 'Cabe Merah Besar',
                              'Daging Sapi Paha Belakang', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Cabe Rawit Merah', 
                              'Bawang Merah', 'Bawang Putih Sinco/Honan')
        
        UNION ALL
        
        SELECT nama_barang, tanggal
        FROM data_barang_pahing
        WHERE nama_barang IN ('Beras premium', 'Beras Medium', 'Telur Ayam ras', 'Cabe Merah Keriting', 'Cabe Merah Besar',
                              'Daging Sapi Paha Belakang', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Cabe Rawit Merah', 
                              'Bawang Merah', 'Bawang Putih Sinco/Honan')
        
        UNION ALL
        
        SELECT nama_barang, tanggal
        FROM data_barang_setonobetek
        WHERE nama_barang IN ('Beras premium', 'Beras Medium', 'Telur Ayam ras', 'Cabe Merah Keriting', 'Cabe Merah Besar',
                              'Daging Sapi Paha Belakang', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Cabe Rawit Merah', 
                              'Bawang Merah', 'Bawang Putih Sinco/Honan')
    ) AS all_data
    GROUP BY nama_barang
) AS latest_data
ON db.nama_barang = latest_data.nama_barang AND db.tanggal = latest_data.max_tanggal
GROUP BY db.nama_barang, db.tanggal, db.gambar
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
</div>
