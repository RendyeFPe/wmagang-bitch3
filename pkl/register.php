<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Tambahkan background gambar ke halaman */
        body {
            background-image: url('gambar/walpaper.jpg'); /* Ganti URL dengan gambar yang kamu inginkan */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white; /* Text akan berwarna putih */
        }
        
        /* Box registrasi */
        .register-box {
            background: rgba(0, 0, 0, 0.7); /* Buat background semi-transparan untuk form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        /* Styling tombol */
        .btn-primary {
            background-color: #28a745; /* Hijau cerah */
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #218838; /* Warna saat hover */
        }
        
        h2 {
            color: #fff;
            text-align: center;
        }
    </style>
    <title>Registrasi Akun</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="register-box col-md-6">
            <h2>Buat Akun</h2>
            <form action="proses_register.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Konfirmasi Password:</label>
                    <input type="password" class="form-control" name="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Buat Akun</button>
            </form>
        </div>
    </div>
</body>
</html>
