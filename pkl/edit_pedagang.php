<?php 
include "include/koneksi.php";
include "include/header.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data pedagang berdasarkan ID
    $sql = "SELECT * FROM pedagang WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("Data tidak ditemukan!");
    }
} else {
    die("ID tidak diberikan!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_registrasi = $_POST['no_registrasi'];
    $nik = $_POST['nik'];
    $nama_pemilik = $_POST["nama_pemilik"];
    $nama_usaha = $_POST["nama_usaha"];
    $kecamatan = $_POST['kecamatan'];
    $nama_kelurahan = $_POST['nama_kelurahan'];
    $alamat_ktp = $_POST["alamat_ktp"];
    $alamat_usaha = $_POST['alamat_usaha'];
    $deskripsi_alamat = $_POST['deskripsi_alamat'];
    $jenis_jualan = $_POST['jenis_jualan'];
    $jam_operasional = $_POST['jam_operasional'];
    $no_hp = $_POST['no_hp'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $update_sql = "UPDATE pedagang 
                   SET no_registrasi = '$no_registrasi', nik = '$nik', nama_pemilik = '$nama_pemilik', nama_usaha = '$nama_usaha', kecamatan = '$kecamatan',
                   nama_kelurahan = '$nama_kelurahan', alamat_ktp = '$alamat_ktp', alamat_usaha = '$alamat_usaha', deskripsi_alamat = '$deskripsi_alamat',
                   jenis_jualan = '$jenis_jualan', jam_operasional = '$jam_operasional', no_hp = '$no_hp', latitude = '$latitude', longitude = '$longitude'
                   WHERE id = $id";

    if (mysqli_query($conn, $update_sql)) {
        echo "<div class='alert alert-success'>Data berhasil diperbarui! <a href='index.php'>Kembali</a></div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pedagang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-secondary {
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary:hover {
            background-color: #6c757d;
        }

        h2 {
            color: #333;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: bold;
            color: #555;
        }

        textarea.form-control {
            resize: none;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Pedagang</h2>
        <form action="" method="POST">
            <!-- Form input fields -->
            <div class="mb-3">
                <label for="no_registrasi">Nomor Registrasi</label>
                <input type="text" class="form-control" id="no_registrasi" name="no_registrasi" value="<?php echo $data['no_registrasi']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nik">NIK KTP</label>
                <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $data['nik']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" value="<?php echo $data['nama_pemilik']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_usaha">Nama Usaha</label>
                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?php echo $data['nama_usaha']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $data['kecamatan']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_kelurahan">Nama Kelurahan</label>
                <input type="text" class="form-control" id="nama_kelurahan" name="nama_kelurahan" value="<?php echo $data['nama_kelurahan']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat_ktp">Alamat KTP</label>
                <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" value="<?php echo $data['alamat_ktp']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat_usaha">Alamat Usaha</label>
                <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" value="<?php echo $data['alamat_usaha']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_alamat">Deskripsi Alamat</label>
                <textarea class="form-control" id="deskripsi_alamat" name="deskripsi_alamat" rows="3" required><?php echo $data['deskripsi_alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="jenis_jualan">Jenis Jualan</label>
                <input type="text" class="form-control" id="jenis_jualan" name="jenis_jualan" value="<?php echo $data['jenis_jualan']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_operasional">Jam Operasional</label>
                <input type="text" class="form-control" id="jam_operasional" name="jam_operasional" value="<?php echo $data['jam_operasional']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="<?php echo $data['latitude']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="<?php echo $data['longitude']; ?>" required>
            </div>
            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>
