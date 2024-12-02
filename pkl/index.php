<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E8F5F9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            max-width: 900px;
            width: 100%;
            margin: 20px;
        }
        .login-image {
            background-color: #4DB6AC;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            padding: 30px;
        }
        .login-image img {
            max-width: 100%;
            height: auto;
        }
        .login-form {
            flex: 1;
            padding: 40px;
        }
        .login-form h3 {
            color: #4DB6AC;
            margin-bottom: 20px;
            text-align: center;
        }
        .btn-login {
            background-color: #4DB6AC;
            color: white;
            width: 100%;
            border-radius: 8px;
        }
        .btn-login:hover {
            background-color: #3AA09A;
        }
        .form-floating label {
            color: #4DB6AC;
        }
        .form-control:focus {
            border-color: #4DB6AC;
            box-shadow: 0 0 0 0.2rem rgba(77, 182, 172, 0.25);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="gambar/putih.png" alt="Decorative Image">
        </div>
        <div class="login-form">
            <h3>Selamat Datang</h3>
            <form action="proses_login.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus autocomplete="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
