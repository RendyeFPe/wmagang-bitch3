<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pedagang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> <!-- Ikon Font Awesome -->
    <style>
        body {
            background-image: url('gambar/walpaper2.jpg'); /* Wallpaper */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .table-container {
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi background tabel */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-title {
            text-align: center;
            color: #343a40;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .fa-edit, .fa-trash {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h2 class="table-title">Data Pedagang Kaki Lima</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemilik</th>
                    <th>Alamat KTP</th>
                    <th>Alamat Usaha</th>
                    <th>Jenis Jualan</th>
                    <th>Jam Operasional</th>
                    <th>No HP</th>
                    <th>Foto KTP</th>
                    <th>Foto NIB</th>
                    <th>Foto Lapak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Contoh data yang diambil dari database (misalkan menggunakan MySQL)
                // Koneksi ke database
                // $koneksi = new mysqli("localhost", "root", "", "database_pedagang");

                // Query untuk mengambil data pedagang dari database
                // $query = "SELECT * FROM pedagang";
                // $result = $koneksi->query($query);

                // Contoh data dummy (silahkan ganti dengan data dari database Anda)
                $data_pedagang = [
                    [
                        'nama_pemilik' => 'Budi Santoso',
                        'alamat_ktp' => 'Jl. Mawar No. 23',
                        'alamat_usaha' => 'Jl. Melati No. 10',
                        'jenis_jualan' => 'Makanan Ringan',
                        'jam_operasional' => '08:00 - 17:00',
                        'no_hp' => '08123456789',
                        'foto_ktp' => 'ktp_budi.jpg',
                        'foto_nib' => 'nib_budi.jpg',
                        'foto_lapak' => 'lapak_budi.jpg'
                    ],
                    // Tambahkan data pedagang lainnya di sini
                ];

                $no = 1;
                foreach ($data_pedagang as $pedagang) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$pedagang['no_registrasi']}</td>
                            <td>{$pedagang['nik']}</td>
                            <td>{$pedagang['nama_pemilik']}</td>
                            <td>{$pedagang['kecamatan']}</td>
                            <td>{$pedagang['nama_kelurahan']}</td>
                            <td>{$pedagang['alamat_ktp']}</td>
                            <td>{$pedagang['alamat_usaha']}</td>
                            <td>{$pedagang['jenis_jualan']}</td>
                            <td>{$pedagang['jam_operasional']}</td>
                            <td>{$pedagang['no_hp']}</td>
                            <td><img src='uploads/{$pedagang['foto_ktp']}' alt='Foto KTP' width='50'></td>
                            <td><img src='uploads/{$pedagang['foto_nib']}' alt='Foto NIB' width='50'></td>
                            <td><img src='uploads/{$pedagang['foto_lapak']}' alt='Foto Lapak' width='50'></td>
                            <td>
                                <a href='#' class='text-primary'><i class='fas fa-edit'></i></a>
                                <a href='#' class='text-danger ml-2'><i class='fas fa-trash'></i></a>
                            </td>
                        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a href="input_pedagang.php" class="btn btn-primary">Tambah Data Pedagang</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
