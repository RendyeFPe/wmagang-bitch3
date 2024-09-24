-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2024 pada 07.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuesioner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `U1` int(11) NOT NULL,
  `U2` int(11) NOT NULL,
  `U3` int(11) NOT NULL,
  `U4` int(11) NOT NULL,
  `U5` int(11) NOT NULL,
  `U6` int(11) NOT NULL,
  `U7` int(11) NOT NULL,
  `U8` int(11) NOT NULL,
  `U9` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `nama`, `domisili`, `U1`, `U2`, `U3`, `U4`, `U5`, `U6`, `U7`, `U8`, `U9`, `timestamp`) VALUES
(94, '', '', 3, 3, 3, 1, 1, 1, 4, 4, 4, '2024-05-24 13:53:29'),
(95, '', '', 1, 1, 3, 3, 2, 2, 4, 4, 4, '2024-05-24 13:57:40'),
(96, '', '', 3, 3, 3, 3, 3, 4, 4, 4, 4, '2024-05-27 01:54:45'),
(97, '', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2024-05-27 11:48:45'),
(98, '', '', 4, 4, 4, 4, 4, 4, 4, 4, 4, '2024-05-27 11:49:21'),
(99, '', '', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-05-27 13:09:04'),
(100, '', '', 4, 4, 4, 4, 4, 4, 4, 4, 4, '2024-05-27 13:09:29'),
(101, '', '', 4, 4, 4, 4, 4, 4, 4, 4, 4, '2024-05-27 13:10:11'),
(102, '', '', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-05-30 12:27:41'),
(103, '', '', 3, 3, 3, 3, 3, 4, 4, 4, 4, '2024-05-30 12:49:53'),
(104, '', '', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-05-30 14:37:48'),
(105, '', '', 2, 2, 2, 2, 2, 2, 2, 2, 2, '2024-05-30 14:39:12'),
(106, '', '', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-05-30 14:46:07'),
(107, '', '', 4, 4, 4, 4, 4, 4, 4, 4, 4, '2024-05-30 14:48:49'),
(108, '', '', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-05-30 14:56:33'),
(109, '', '', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-05-31 02:33:51'),
(110, '', '', 4, 4, 4, 3, 3, 2, 2, 4, 4, '2024-05-31 02:35:34'),
(111, '0', '0', 3, 3, 3, 3, 3, 3, 3, 3, 3, '2024-06-03 06:54:35'),
(112, 'Erika', 'kota kediri', 3, 3, 3, 3, 3, 3, 3, 3, 4, '2024-06-03 07:02:51'),
(113, 'Norma', 'Kediri', 4, 4, 4, 3, 3, 3, 3, 3, 3, '2024-06-03 07:09:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner_hasil`
--

CREATE TABLE `kuesioner_hasil` (
  `id` int(11) NOT NULL,
  `total_U1` int(11) DEFAULT NULL,
  `total_U2` int(11) DEFAULT NULL,
  `total_U3` int(11) DEFAULT NULL,
  `total_U4` int(11) DEFAULT NULL,
  `total_U5` int(11) DEFAULT NULL,
  `total_U6` int(11) DEFAULT NULL,
  `total_U7` int(11) DEFAULT NULL,
  `total_U8` int(11) DEFAULT NULL,
  `total_U9` int(11) DEFAULT NULL,
  `rata_U1` float DEFAULT NULL,
  `rata_U2` float DEFAULT NULL,
  `rata_U3` float DEFAULT NULL,
  `rata_U4` float DEFAULT NULL,
  `rata_U5` float DEFAULT NULL,
  `rata_U6` float DEFAULT NULL,
  `rata_U7` float DEFAULT NULL,
  `rata_U8` float DEFAULT NULL,
  `rata_U9` float DEFAULT NULL,
  `total_semua` int(11) DEFAULT NULL,
  `nilai_interval` float DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuesioner_hasil`
--

INSERT INTO `kuesioner_hasil` (`id`, `total_U1`, `total_U2`, `total_U3`, `total_U4`, `total_U5`, `total_U6`, `total_U7`, `total_U8`, `total_U9`, `rata_U1`, `rata_U2`, `rata_U3`, `rata_U4`, `rata_U5`, `rata_U6`, `rata_U7`, `rata_U8`, `rata_U9`, `total_semua`, `nilai_interval`, `tanggal`) VALUES
(2, 3, 3, 3, 1, 1, 1, 4, 4, 4, 3, 3, 3, 1, 1, 1, 4, 4, 4, 24, 66.6667, '2024-05-24 13:53:29'),
(3, 4, 4, 6, 4, 3, 3, 8, 8, 8, 2, 2, 3, 2, 1, 1, 4, 4, 4, 48, 66.6667, '2024-05-24 13:57:40'),
(4, 7, 7, 9, 7, 6, 7, 12, 12, 12, 2, 2, 3, 2, 2, 2, 4, 4, 4, 79, 73.1481, '2024-05-27 01:54:45'),
(5, 8, 8, 10, 8, 7, 8, 13, 13, 13, 2, 2, 2, 2, 1, 2, 3, 3, 3, 88, 61.1111, '2024-05-27 11:48:45'),
(6, 12, 12, 14, 12, 11, 12, 17, 17, 17, 2, 2, 2, 2, 2, 2, 3, 3, 3, 124, 68.8889, '2024-05-27 11:49:21'),
(7, 15, 15, 17, 15, 14, 15, 20, 20, 20, 2, 2, 2, 2, 2, 2, 3, 3, 3, 151, 69.9074, '2024-05-27 13:09:04'),
(8, 19, 19, 21, 19, 18, 19, 24, 24, 24, 2, 2, 3, 2, 2, 2, 3, 3, 3, 187, 74.2064, '2024-05-27 13:09:29'),
(9, 23, 23, 25, 23, 22, 23, 28, 28, 28, 2, 2, 3, 2, 2, 2, 3, 3, 3, 223, 77.4306, '2024-05-27 13:10:12'),
(10, 26, 26, 28, 26, 25, 26, 31, 31, 31, 2, 2, 3, 2, 2, 2, 3, 3, 3, 250, 77.1605, '2024-05-30 12:27:41'),
(13, 29, 29, 31, 29, 28, 30, 35, 35, 35, 2, 2, 3, 2, 2, 3, 3, 3, 3, 281, 78.0556, '2024-05-30 12:49:54'),
(14, 32, 32, 34, 32, 31, 33, 38, 38, 38, 2, 2, 3, 2, 2, 3, 3, 3, 3, 308, 77.7778, '2024-05-30 14:37:49'),
(15, 34, 34, 36, 34, 33, 35, 40, 40, 40, 2, 2, 3, 2, 2, 2, 3, 3, 3, 326, 75.463, '2024-05-30 14:39:12'),
(16, 37, 37, 39, 37, 36, 38, 43, 43, 43, 2, 2, 3, 2, 2, 2, 3, 3, 3, 353, 75.4274, '2024-05-30 14:46:07'),
(17, 41, 41, 43, 41, 40, 42, 47, 47, 47, 2, 2, 3, 2, 2, 3, 3, 3, 3, 389, 77.1825, '2024-05-30 14:48:49'),
(18, 44, 44, 46, 44, 43, 45, 50, 50, 50, 2, 2, 3, 2, 2, 3, 3, 3, 3, 416, 77.037, '2024-05-30 14:56:33'),
(19, 47, 47, 49, 47, 46, 48, 53, 53, 53, 2, 2, 3, 2, 2, 3, 3, 3, 3, 443, 76.9097, '2024-05-31 02:33:52'),
(20, 51, 51, 53, 50, 49, 50, 55, 57, 57, 3, 3, 3, 2, 2, 2, 3, 3, 3, 473, 77.2876, '2024-05-31 02:35:35'),
(21, 54, 54, 56, 53, 52, 53, 58, 60, 60, 3, 3, 3, 2, 2, 2, 3, 3, 3, 500, 77.1605, '2024-06-03 06:54:35'),
(22, 57, 57, 59, 56, 55, 56, 61, 63, 64, 3, 3, 3, 2, 2, 2, 3, 3, 3, 528, 77.193, '2024-06-03 07:02:51'),
(23, 61, 61, 63, 59, 58, 59, 64, 66, 67, 3, 3, 3, 2, 2, 2, 3, 3, 3, 558, 77.5, '2024-06-03 07:09:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indeks untuk tabel `kuesioner_hasil`
--
ALTER TABLE `kuesioner_hasil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `kuesioner_hasil`
--
ALTER TABLE `kuesioner_hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
