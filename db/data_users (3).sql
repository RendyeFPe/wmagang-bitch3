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
-- Database: `data_users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`, `randSalt`, `token`) VALUES
(23, 'admin1', '$2y$12$2sqKRGEvzn9FBSRi9d85Juovv/YnMaOLBR6nVgGMx80MZHNuX3sHi', 'Admin', 'Survey', 'admin1@gmail.com', 'admin', '$2y$10$iusesomecrazystrings22', ''),
(26, 'surveyorPahing1', '$2y$12$OxlAxu1mIhaOESJtqr9.EuasuBDNeVm5d9vg.RDWFOzy/mH39E6nW', 'Surveyor', 'Pahing 1', 'surveyorpahing1@gmail.com', 'surveyorPahing', '$2y$10$iusesomecrazystrings22', ''),
(27, 'surveyorBandar1', '$2y$12$sVpn9zeiLfhJ.XrFg6baD.a4t.Xu97OTILOrZ5LmWCaIWFdUaGJhC', 'Surveyor', 'Bandar 1', 'surveyorbandar1@gmail.com', 'surveyorBandar', '$2y$10$iusesomecrazystrings22', ''),
(28, 'surveyorSetonobetek1', '$2y$12$omeCQaqgkbj8puJvYT90JulMi/rKDhYsemwLyKoTW4SX.BCAfgnHW', 'Surveyor', 'Setono Betek 1', 'surveyorsetonobetek1@gmail.com', 'surveyorSetonobetek', '$2y$10$iusesomecrazystrings22', ''),
(29, 'adminSurvey1', '$2y$12$5dvig.hleSka0VNMCgy76O0QJm0DmyK7pf1vwPk4VeO2xFM2qUVp2', 'Admin', '1', 'adminsurvey1@gmail.com', 'admin', '$2y$10$iusesomecrazystrings22', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
