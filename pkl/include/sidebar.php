<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: index.php');
    exit;
}
?>

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
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            
        }

        /* Sidebar styling */
        .sidebar {
            width: 260px;
            height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #eaeaea;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            z-index: 1000;
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
            transition: 0.2s;
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
        <a href="logout.php" button class="logout-btn"> Logout</a>
        
        <!-- Menu Items -->
        <div class="menu">
            <a href="dashboard.php" class="menu-item">
                <img src="gambar/dashboard.png" alt="Dashboard Icon">
                <span>Dashboard</span>
            </a>
            <a href="statistik.php" class="menu-item">
                <img src="gambar/validasi.png" alt="Validasi Data Icon">
                <span>Statistik</span>
            </a>
            <a href="peta.php" class="menu-item">
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
