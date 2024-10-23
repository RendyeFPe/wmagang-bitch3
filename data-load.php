<div class="table-responsive-sm overflow-x-auto">

<?php
$tanggal_pilih = isset($_GET['tanggal']) ? $_GET['tanggal'] : null;

try {
    // Koneksi ke database menggunakan PDO
    $dsn = 'mysql:host=localhost;dbname=data_harga_pokok';
    $username = 'root';
    $password = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    );
    $pdo = new PDO($dsn, $username, $password, $options);

    // Query untuk mendapatkan data berdasarkan tanggal yang dipilih
    $qry = "
    SELECT 
        nama_barang, 
        FLOOR(AVG(CASE WHEN harga_sekarang > 0 THEN harga_sekarang ELSE NULL END)) AS rata_rata_harga, 
        tanggal, 
        FLOOR(AVG(CASE WHEN harga_kemarin > 0 THEN harga_kemarin ELSE NULL END)) AS rata_rata_harga_kemarin, 
        FLOOR(AVG(CASE WHEN harga_sekarang > 0 AND harga_kemarin > 0 THEN harga_sekarang - harga_kemarin ELSE NULL END)) AS selisih_rata_rata, 
        gambar
    FROM (
        SELECT dbb.nama_barang, dbb.harga_sekarang, dbb.harga_kemarin, dbb.selisih, dbb.tanggal, dbb.gambar, dbb.status_validasi
        FROM data_barang_bandar dbb
        WHERE dbb.status_validasi = 'true' AND (:tanggal_pilih IS NULL OR dbb.tanggal = :tanggal_pilih)

        UNION ALL

        SELECT dbp.nama_barang, dbp.harga_sekarang, dbp.harga_kemarin, dbp.selisih, dbp.tanggal, dbp.gambar, dbp.status_validasi
        FROM data_barang_pahing dbp
        WHERE dbp.status_validasi = 'true' AND (:tanggal_pilih IS NULL OR dbp.tanggal = :tanggal_pilih)

        UNION ALL

        SELECT dbs.nama_barang, dbs.harga_sekarang, dbs.harga_kemarin, dbs.selisih, dbs.tanggal, dbs.gambar, dbs.status_validasi
        FROM data_barang_setonobetek dbs
        WHERE dbs.status_validasi = 'true' AND (:tanggal_pilih IS NULL OR dbs.tanggal = :tanggal_pilih)
    ) AS ranked
    GROUP BY nama_barang, tanggal, gambar";

    // Siapkan statement
    $stmt = $pdo->prepare($qry);

    // Bind parameter tanggal yang dipilih
    $stmt->bindParam(':tanggal_pilih', $tanggal_pilih);

    // Eksekusi query
    $stmt->execute();

    // Ambil semua hasil
    $rows = $stmt->fetchAll();
    // Tampilkan hasil dalam bentuk HTML

    if (count($rows) > 0) {
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
        
            $no = 1;
            foreach ($rows as $row) {
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
        echo "<p>Tidak ada data yang ditemukan untuk tanggal yang dipilih</p>";
    };
} catch (PDOException $e) {
    // Menampilkan pesan kesalahan jika ada masalah koneksi atau query
    echo "Koneksi database gagal: " . $e->getMessage();
}
    // Tutup koneksi
    ?>

