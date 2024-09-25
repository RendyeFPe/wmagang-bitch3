<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('gambar/walpaper.jpg');
            background-size: cover;
            background-position: center;
        }
        .register-box {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 40px;
            margin-top: 100px;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 register-box">
                <h2 class="text-center">Register</h2>
                <form action="proses_register.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
