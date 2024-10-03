-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2024 pada 03.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pedagang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedagang_kaki_lima`
--

CREATE TABLE `pedagang_kaki_lima` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(100) DEFAULT NULL,
  `alamat_ktp` text DEFAULT NULL,
  `alamat_usaha` text DEFAULT NULL,
  `alamat_deskripsi` text DEFAULT NULL,
  `jenis_jualan` varchar(100) DEFAULT NULL,
  `nama_usaha` varchar(100) DEFAULT NULL,
  `jam_operasional` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_nib` varchar(255) DEFAULT NULL,
  `foto_jualan` varchar(255) DEFAULT NULL,
  `koordinat_lokasi` varchar(50) DEFAULT NULL,
  `no_registrasi` varchar(50) DEFAULT NULL,
  `tanggal_terdaftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'Rendy', '$2y$10$Vy0ILCsULs5G0oogHWJ8y.GFLY6cTci3v0DsMIybea9T6.Zm615sq', 'putrarendy27@gmail.com', '2024-09-24 07:01:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pedagang_kaki_lima`
--
ALTER TABLE `pedagang_kaki_lima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pedagang_kaki_lima`
--
ALTER TABLE `pedagang_kaki_lima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
