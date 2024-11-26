<?php
include 'include/header.php';
include 'include/sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #eaeaea;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 20px;
        }

        /* Konten utama */
        .container {
            margin-left: 280px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Judul */
        h2 {
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Label */
        .form-label {
            font-weight: 600;
            color: #555;
        }

        /* Input Fields */
        .form-control {
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
        }
        #role {
            max-width: 200px; /* Lebar dropdown diperbaiki */
            padding: 8px;
            font-size: 14px;
            border-radius: 8px;
        }
        /* Tombol */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 8px;
            font-size: 16px;
            padding: 10px 10px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .sidebar {
                position: static; /* Sidebar tidak fixed */
                width: 100%; /* Sidebar memenuhi layar */
                height: auto;
            }

            .container {
                margin-left: 0; /* Konten memenuhi layar */
                padding: 15px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Registrasi</h2>
        <form action="proses_register.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="user">Survey</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
