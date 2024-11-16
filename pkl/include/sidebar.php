<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Disperdagin</title>
    <style>
        /* CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Main container */
        body {
            display: flex;
            height: 100vh;
            background-color: #f4f4f4;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 30px;
        }

        /* Logo styling */
        .logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100%;
            margin-bottom: 0px;
        }

        .ikon {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .ikon img {
            width: 30%;
            margin-bottom: 5px;
        }

        .text h1 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .text p {
            font-size: 15px;
            align-items: center;
            text-align: center;
        }

        /* Ikon PKL styling */
        .ikon-pkl img {
            width: 2%; /* Ubah ukuran di sini */
            /* height: auto; Menjaga aspek rasio gambar */
            margin-bottom: 10px;
        }

        /* Logout button styling */
        .logout-btn {
            background-color: #ffbb33;
            border: none;
            padding: 8px 20px;
            color: #333;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px 0;
        }

        /* Menu items styling */
        .menu {
            width: 100%;
            padding: 10px 0;
        }

        .menu-item {
            font-style: sans-serif;
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #000000;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s;
        }

        .menu-item:hover {
            background-color: #83c5be;
            border-radius: 0 20px 20px 0;
        }

        .menu-item img {
            width: 24px;
            height: 24px;
            margin-right: 15px;
        }

        /* Content area styling */
        .content {
            flex: 1;
            padding: 40px;
            background-color: #f4f4f4;
        }

        .content h2 {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Logo Section -->
        <div class="logo">
            <img src="gambar/logo2.png" alt="Logo Disperdagin"> </div>
            <div class="ikon">
            <img src="gambar/pkl.png" alt="Ikon PKL" class="ikon-pkl"> </div>
            <div class="text">
            <h1>Pendataan PKL</h1>
            <p>Kota Kediri<br>Admin Panel</p>
        </div>
        
        <!-- Logout Button -->
        <button class="logout-btn">Logout</button>
        
        <!-- Menu Items -->
        <div class="menu">
            <a href="index.php" class="menu-item">
                <img src="gambar/dashboard.png" alt="Dashboard Icon">
                <span>Dashboard</span>
            </a>
            <a href="validasi_data.php" class="menu-item">
                <img src="gambar/validasi.png" alt="Validasi Data Icon">
                <span>Validasi Data</span>
            </a>
            <a href="ambil_koordinat.php" class="menu-item">
                <img src="gambar/pin.png" alt="Maps Icon">
                <span>Maps</span>
            </a>
            <a href="register.php" class="menu-item">
                <img src="gambar/user.png" alt="Users Icon">
                <span>Users</span>
            </a>
        </div>
    </div>

    <!-- Main Content Area -->
   
<?php
// Tutup koneksi
// mysqli_close($koneksi);
?>


</body>
</html>
