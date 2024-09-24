<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styling background wallpaper */
        body {
            background-image: url('gambar/walpaper2.jpg'); /* Ganti URL dengan wallpaper pilihan */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: #333; /* Warna teks default */
            height: 100vh;
        }

        /* Box login dengan transparansi */
        .login-box {
            background: rgba(255, 255, 255, 0.85); /* Semi transparan putih */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Shadow box */
        }

        /* Style judul */
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #555;
            font-family: 'Arial', sans-serif;
        }

        /* Style tombol */
        .btn-login {
            background-color: #007bff; /* Warna biru */
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }

        /* Hover effect untuk tombol */
        .btn-login:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
            transform: scale(1.05); /* Zoom in sedikit */
        }

        /* Style link registrasi */
        .register-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }

        .register-link:hover {
            text-decoration: underline;
            color: #0056b3;
        }

    </style>
    <title>Login</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-box col-md-5">
            <h2>Login</h2>
            <form action="proses_login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-login">Login</button>
            </form>
            <a href="register.php" class="register-link">Belum punya akun? Daftar sekarang</a>
        </div>
    </div>
</body>
</html>
