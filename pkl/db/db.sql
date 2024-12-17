-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.39 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table data_harga_pokok.pedagang
CREATE TABLE IF NOT EXISTS `pedagang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(20) COLLATE armscii8_bin DEFAULT NULL,
  `nik` varchar(16) COLLATE armscii8_bin DEFAULT NULL,
  `nama_pemilik` varchar(100) COLLATE armscii8_bin DEFAULT NULL,
  `alamat_ktp` text COLLATE armscii8_bin,
  `kecamatan` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `nama_kelurahan` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `alamat_usaha` text COLLATE armscii8_bin,
  `deskripsi_alamat` text COLLATE armscii8_bin,
  `jenis_jualan` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `jam_operasional` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  `no_hp` varchar(15) COLLATE armscii8_bin DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `foto_ktp` varchar(255) COLLATE armscii8_bin DEFAULT NULL,
  `foto_nib` varchar(255) COLLATE armscii8_bin DEFAULT NULL,
  `foto_lapak` varchar(255) COLLATE armscii8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_validasi` enum('pending','true','false') COLLATE armscii8_bin DEFAULT 'true',
  `nama_usaha` varchar(50) COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Dumping data for table data_harga_pokok.pedagang: ~5 rows (approximately)
REPLACE INTO `pedagang` (`id`, `no_registrasi`, `nik`, `nama_pemilik`, `alamat_ktp`, `kecamatan`, `nama_kelurahan`, `alamat_usaha`, `deskripsi_alamat`, `jenis_jualan`, `jam_operasional`, `no_hp`, `latitude`, `longitude`, `foto_ktp`, `foto_nib`, `foto_lapak`, `created_at`, `status_validasi`, `nama_usaha`) VALUES
	(1, 'hdgcds', '4455332155112552', 'adi', 'jjjjj', 'mojoroto', 'mojoroto', 'jjjj', 'jl. veteran ', 'pentol', '19.00-20.00', '082255994448', -7.89995222, 10.88559889, '20230927_081530.png', 'telur.jpg', 'tata-laksana.webp', '2024-11-10 09:04:21', 'true', 'pentol bakar'),
	(2, '0588589564825978', '8945588958148599', 'jaya', 'ssssssshuhiuhjn', 'mojoroto', 'mojoroto', 'ndbchdsbgy', 'jdbjhddhhjdbc', 'makanan', '18.00-20.00 wib', '05584984', -7.80256846, 112.00080830, 'beras.png', 'daging.jpg', 'flow_minhol.png', '2024-11-15 02:19:24', 'true', 'seblak goreng'),
	(4, '55566699a9s99', '', 'cahyadi', 'kono adoh', 'mojoroto', 'jomokerto', 'sepanjang jalan', 'fafafafa', 'cilok', 'sak wayah wayah', '088666777999', -7.81123354, 111.99243164, 'ft1.png', 'hero.png', 'gula.jpg', '2024-11-29 03:27:33', 'true', 'cilok racing'),
	(5, '55555adgdfafd', '', 'cahyadi', 'kono adoh', 'mojoroto', 'jomokerto', 'sepanjang jalan', 'disiniii', 'minuman', 'sak wayah wayah', '088666777999', -7.82477927, 112.01742553, 'ig-icons.png', 'hand-emoji.png', 'minyak.jpg', '2024-11-29 03:28:31', 'true', 'cilok racing');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
