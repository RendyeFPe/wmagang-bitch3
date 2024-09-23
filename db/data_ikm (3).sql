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
-- Database: `data_ikm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fashion`
--

CREATE TABLE `fashion` (
  `id` int(11) NOT NULL,
  `nama_IKM` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fashion`
--

INSERT INTO `fashion` (`id`, `nama_IKM`, `kelurahan`, `alamat`, `No_Hp`, `maps`) VALUES
(1, 'NR collection', 'Pakunden', 'Perumahan bence regency blok c18	', '', 'https://maps.app.goo.gl/yrvM5kDAeiXhq2GD9'),
(2, 'KAOS GAPLEK	', 'Banjaran', 'Jl. Adi Sucipto No.54	', '082232995484', 'https://maps.app.goo.gl/DXCc3sNhdqb2nZ3Y8'),
(3, 'ELH COLLECTION	', 'Kaliombo', 'Perum Puri Kaliombo Jl. Damai Blok C-9 RT.04 RW.09	', '085707355551', 'https://maps.app.goo.gl/HZBvr8rubju4BUfHA'),
(4, 'AMIRA CRAFT BY SANTI	', 'Jl. Letjen Sutoyo No.29	', 'Burengan', '085746792678', 'https://maps.app.goo.gl/VyD9EMvakNZRBvrQ7'),
(5, 'GALUH KADIRI	', 'Dermo', 'Perum Griya Intan Asri Blok A-14	', '085791548850', 'https://maps.app.goo.gl/z1dEt4ick5z9okYPA'),
(6, 'POISON WEARHOUSE	', 'Setonopande', 'Jl. Sultan Agung no.71	', '085646646992', 'https://maps.app.goo.gl/SJp7SdGYkHjkKHbw9'),
(7, 'PERCALES	', 'Ngronggo', 'Perumnas Ngronggo Jl. Dahlia 2 No.16	', '081358467778', 'https://maps.app.goo.gl/x384bMeCfQXJJ4ae6'),
(8, 'BATIK WECONO ASRI	', 'Dandangan', 'Jl. Dandangan I / 154	', '081335691158', 'https://maps.app.goo.gl/TtzufqzXc4J5JDYW9'),
(9, 'TENUN IKAT SEMPURNA 2	', 'Bandar Kidul\r\n', 'Jl. KH. Agus Salim VIII / 42-B	', '085736631052', 'https://maps.app.goo.gl/4gCptekuCQ5woxMY7'),
(10, 'KOPIAH M. THOIB	', 'Bangsal\r\n', 'Jl. Mauni No. 87	', '085246854049', ''),
(11, 'CHARGECITY', 'Ngronggo\r\n', 'Jl. Urip Sumoharjo No. 227	', ' 081287301614', 'https://maps.app.goo.gl/KNBD6yvbJQrw11Xv9'),
(12, 'TENUN IKAT SINAR BAROKAH	', 'Ngronggo\r\n', 'Jl. Super Semar	', '085655809707', ''),
(13, 'Kirani Craft	', 'Ngronggo', 'Jl. Urip Sumoharjo No. 174	', '081235348589', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerajinan`
--

CREATE TABLE `kerajinan` (
  `id` int(11) NOT NULL,
  `nama_IKM` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kerajinan`
--

INSERT INTO `kerajinan` (`id`, `nama_IKM`, `kelurahan`, `alamat`, `No_Hp`, `maps`) VALUES
(1, 'NR collection', 'Pakunden', 'Perumahan bence regency blok c18', '', 'https://maps.app.goo.gl/yrvM5kDAeiXhq2GD9'),
(2, 'ELH COLLECTION', 'Kaliombo', 'Perum Puri Kaliombo Jl. Damai Blok C-9 RT.04 RW.09	', '085707355551', 'https://maps.app.goo.gl/HZBvr8rubju4BUfHA'),
(3, 'AMIRA CRAFT BY SANTI', 'Jl. Letjen Sutoyo No.29', 'Burengan', '085746792678', 'https://maps.app.goo.gl/VyD9EMvakNZRBvrQ7'),
(4, 'PERCALES', 'Ngronggo', 'Perumnas Ngronggo Jl. Dahlia 2 No.16 Kediri', '081358467778', 'https://maps.app.goo.gl/TDUSgt3g8UebRPUQA'),
(5, 'TENUN IKAT SEMPURNA 2', 'Bandar Kidul', 'Jl. KH. Agus Salim VIII / 42-B Kediri', '085736631052', 'https://maps.app.goo.gl/oCzq26xS5QZyNqG57'),
(6, 'KOPIAH M. THOIB', 'Bandar Kidul', 'Jl. Bandar Ngalim Gg.III No.7E Bandarkidul, Kota Kediri', '085246854049', 'https://maps.app.goo.gl/jvRpTLDv54mEX5PM7'),
(7, 'CHARGECITY', 'Kaliombo', 'Jl. Kaliombo Raya No.102 Kediri', '081287301614', 'https://maps.app.goo.gl/4u8dZcTvtjH7WgV77'),
(8, 'TENUN IKAT SINAR BAROKAH', 'Bandarkidul', 'Jl. KH. Agus Salim VIII / 9c Bandarkidul, Kota Kediri', '085655809707', 'https://maps.app.goo.gl/esuc5nEvTe8Pfmrb6'),
(9, 'Kirani Craft', 'Bandarlor', 'Perum Candra Kirana F1, Kelurahan Bandarlor, Kota Kediri.', '081235348589', 'https://maps.app.goo.gl/aNgJvX1wSVMYrpEN8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama_IKM` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama_IKM`, `kelurahan`, `alamat`, `No_Hp`, `maps`) VALUES
(1, 'Shakila food', 'Tamanan', 'Jln taman sari gang putih rt 3 rw 2', '087771541033', 'https://maps.app.goo.gl/f1j2WKN6S2ZAQfdN6'),
(2, 'ARAFAH KURMA & SEKAR KUNYIT', 'Ngronggo', 'Jln melati VI no 16 perumnas Ngronggo', '08561162410', 'https://maps.app.goo.gl/x7DKx3TEjEikMCZx7'),
(3, 'Kimie Lidi', 'Ngronggo', 'Perum ngronggo indah blok c no 4', '081233359323', 'https://maps.app.goo.gl/qy8aaD3Md1kyn1Pe9'),
(4, '819 KITCHEN', 'Lirboyo', 'Griya Lirboyo Harmoni A-11', '082244911234', 'https://maps.app.goo.gl/knPNszg56rYeYPf76'),
(5, 'BUMBU MASAK TE’MAH', 'Sukorame', 'Jl. Veteran Gg. II No.8', '', ''),
(6, 'COKELAT TAHU WIJAYA KEMBAR', 'Tinalan', 'Tinalan Gg.IV Timur No.1	', '081234481010', 'https://maps.app.goo.gl/KwFyy719cyZDqY9e9'),
(7, 'CROVORY BUBUK REMPAH', 'Pakunden', 'Perumahan bence regency blok c18', '', ''),
(8, 'CROVORY BUBUK REMPAH', 'Bandar Lor\r\n', 'Jl. KH. Wahid Hasyim Va / 6', '081280408090', ''),
(9, 'BAKPIA ALMAIR', 'Kemasan', 'Jl. Panglima Polim No.72', '085649201490', 'https://maps.app.goo.gl/mCKBvcjY5nooEfKx6'),
(10, 'Stik Tahu Sis', 'Tinalan', 'Tinalan gg.4 timur no.15B rt.02 rw.02', '085735549658', 'https://maps.app.goo.gl/dEJwroYA6LBnFbqC8'),
(11, 'Pia 313', 'Setonopande', 'Jl. Pandean II/6	', '08113771277', 'https://maps.app.goo.gl/S8aq16xVzKESxKjz6'),
(12, 'KRIPIK PISANG CALLISTA', 'Bujel', 'KEL. BUJEL GG1 NO 14', '083846206660', 'https://maps.app.goo.gl/3GQxj1ZuQJ31FD4q7'),
(13, 'SAMBEL PECEL ERVINA	', 'Ngronggo', 'Perumnas Ngronggo Jl. Kenongo VIII / 07	', '082112637263', ''),
(14, 'TAHU MJS', 'Jamsaren', 'Jl. Mawar, Lingk. Kleco	', '085850605100', 'https://maps.app.goo.gl/8LEsYheTPjkUXPNT9'),
(15, 'SEMPRONG SEKARJOYO	', 'Pojok', 'Perum Wilis Indah I Jl. Wilis Mulya IV / 11	', ' 081217872799', ''),
(16, 'MARIAMA FROZEN FOOD	', 'Pesantren', 'Jl. Brigjend Pol. IBH Pranoto	', '081515986922', ''),
(17, 'SAMBEL PECEL BU I	', 'Blabak', 'Jl. Kapten Tendean No. 400	', '081331148477', ''),
(18, 'PIE SUSU MUFFI', 'Jl. Betet Bawang', 'Ngronggo', '085233664426', ''),
(19, 'SAMBEL PECEL MBAH KENDHIL	', 'Kampung Dalem\r\n', 'Jl. Kilisuci No. 72	', '081352001378', ''),
(20, 'GETUK PISANG MADU MANIS 16', 'Semampir', 'Jl. Mayjend Sungkono	', '081359622777', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id` int(11) NOT NULL,
  `nama_IKM` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id`, `nama_IKM`, `kelurahan`, `alamat`, `No_Hp`, `maps`) VALUES
(1, 'KOPI PANDAWA', 'Betet', 'Jl. Raya Betet No.64	', '089625435353', 'https://maps.app.goo.gl/CY6GpdbKiNZuHMx36'),
(2, 'EXTRA JUICE	', 'Dandangan', 'Jl. Pemuda No.26	', '085232692734', 'https://maps.app.goo.gl/HFKWceSpCv9bzuHQ6'),
(3, 'SIRUP TRADISIONAL AL-HQ	', 'Banaran', 'Jl. Masjid Timur No.405	', '085730688756', 'https://maps.app.goo.gl/LHnzk1md85D3whs59'),
(4, 'ARRAYANA HONEY	', 'Sukorame', 'Perum KBN Jl. Anggraini Raya No.7	', '087858933388', 'https://maps.app.goo.gl/WUARDxFX5JVcZHnh9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `nama_IKM` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `No_Hp` varchar(15) NOT NULL,
  `maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `others`
--

INSERT INTO `others` (`id`, `nama_IKM`, `kelurahan`, `alamat`, `No_Hp`, `maps`) VALUES
(1, 'ROKED SOAP	', 'Bence', 'Perum Cahaya Permata Blok 12 No.11	', '082141741637', 'https://maps.app.goo.gl/Z7om4ETtJmF4kbye6'),
(2, 'ARTERI HANDYCRAFT & SOUVENIR', 'Burengan', 'Jl. Letjend Sutoyo No. 48	', '081252789075', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerajinan`
--
ALTER TABLE `kerajinan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kerajinan`
--
ALTER TABLE `kerajinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
