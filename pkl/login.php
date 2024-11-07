<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #E8F5F9;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            width: 900px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
        }
        .login-image {
            background-color: #4DB6AC;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            width: 50%;
        }
        .login-image img {
            width: 200%;
            max-width: 350px;
            height: 350px;
        }
        .login-form {
            width: 50%;
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
        }
        .btn-login:hover {
            background-color: #3AA09A;
        }
        .form-floating label {
            color: #4DB6AC;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Bagian Kiri dengan gambar aksesoris -->
        <div class="login-image">
            <img src="putih.png" alt="Decorative Image">
        </div>
        
        <!-- Form Login di bagian Kanan -->
        <div class="login-form">
            <h3>Welcome</h3>
            <form action="proses_login.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
            <!-- <div class="mt-3 text-center">
                <a href="#">Forgot Password?</a> | <a href="#">Help</a>
            </div> -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
