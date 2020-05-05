-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2020 pada 17.26
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optimasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bmt`
--

CREATE TABLE `bmt` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk` float NOT NULL,
  `em` float NOT NULL,
  `met` float NOT NULL,
  `lis` float NOT NULL,
  `ca` float NOT NULL,
  `p` float NOT NULL,
  `harga` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bmt`
--

INSERT INTO `bmt` (`id`, `nama`, `pk`, `em`, `met`, `lis`, `ca`, `p`, `harga`, `id_jenis`) VALUES
(1, 'Ampas kelapa', 21.6, 2350, 0, 0, 0.21, 0.65, 1200, 1),
(2, 'Bekatul', 10.2, 2860, 0.27, 0.71, 0.04, 0.16, 1500, 1),
(3, 'Beras pecah kulit', 8, 2660, 0.17, 0.3, 0.09, 0.04, 3000, 1),
(4, 'DPW', 16, 1850, 0.27, 0.71, 0.08, 1.7, 900, 1),
(5, 'Dedak Jagung halus', 7.54, 2950, 0.17, 0.5, 0.04, 0.15, 1200, 1),
(6, 'Dedak Jagung kasar', 11.86, 2950, 0.17, 0.5, 0.04, 0.15, 1250, 1),
(7, 'Dedak halus', 8, 1630, 0.29, 0.77, 0.12, 0.21, 1000, 1),
(8, 'Dedak padi', 8.77, 1800, 0.29, 0.77, 0.12, 0.21, 1500, 1),
(9, 'Fat', 0, 7600, 0, 0, 0, 0, 3000, 1),
(10, 'Gandum', 10.7, 2980, 0.31, 0.03, 0.05, 0, 3500, 1),
(11, 'Gaplek', 3, 3200, 0.09, 0.03, 0.04, 0.36, 1200, 1),
(12, 'Gula', 0, 3350, 0, 0, 0, 0, 3000, 1),
(13, 'Jagung kuning', 8.6, 3370, 0.18, 0.2, 0.02, 0.1, 2500, 1),
(14, 'Menir', 8.9, 3390, 0.27, 0.2, 0.03, 0.4, 1800, 1),
(15, 'Minyak ikan', 0, 8450, 0, 0, 0, 0, 3500, 1),
(16, 'Minyak kelapa', 0, 8600, 0, 0, 0, 0, 4000, 1),
(17, 'Minyak tumbuhan', 0, 8950, 0, 0, 0, 0, 4000, 1),
(18, 'Onggok kotoran ayam Fermentasi', 14, 2700, 0.27, 0.71, 2.25, 1, 400, 1),
(19, 'Pollard', 15, 1300, 0.17, 0.3, 0.14, 0.32, 1000, 1),
(20, 'Sorgum', 10, 3250, 0.13, 0.2, 0.03, 0.1, 2000, 1),
(21, 'Tepung gaplek', 1.5, 2970, 0.09, 0.03, 0.18, 0.09, 1200, 1),
(22, 'Tetes (Bit)', 6.5, 1980, 0, 0, 0.16, 0.2, 1000, 1),
(23, 'Tetes (Tebu)', 3, 1960, 0, 0, 0.9, 0.1, 1000, 1),
(24, 'Tumpi', 8.66, 2500, 0, 0, 0, 0, 1000, 1),
(25, 'Tumpi jagung', 8.66, 2900, 0, 0, 0, 0, 1000, 1),
(26, 'Ampas tahu', 25.65, 2450, 0.65, 2.9, 0.29, 0.65, 2500, 2),
(27, 'Bungkil biji kapuk', 41, 2100, 0.6, 1.6, 0.18, 0.33, 3000, 2),
(28, 'Bungkil biji karet', 24.2, 2159, 0, 0, 0.11, 0, 2500, 2),
(29, 'Bungkil kacang tanah', 42, 2200, 0.5, 1.8, 0.2, 0.2, 3500, 2),
(30, 'Bungkil kedele', 42, 2240, 0.65, 2.9, 0.29, 0.65, 3000, 2),
(31, 'Bungkil kelapa', 18.5, 2200, 0.29, 0.64, 0.2, 0.57, 2200, 2),
(32, 'Bungkil klenteng', 25, 2200, 0, 0, 0.16, 0.75, 2500, 2),
(33, 'Bungkil wijen', 45, 1910, 1.4, 1.3, 2, 0.3, 2000, 2),
(34, 'Hidrolisis isi rumen', 16.2, 2000, 0, 0, 0.38, 0.55, 900, 2),
(35, 'Ikan Kering', 44.38, 2200, 2, 6.4, 2, 1.5, 3000, 2),
(36, 'Isi rumen', 16.35, 2000, 0, 0, 0, 0, 1800, 2),
(37, 'Kacang buncis', 23.5, 2330, 0.31, 1.6, 0.13, 0.2, 3000, 2),
(38, 'Kacang hijau', 21.3, 2220, 1.75, 1.6, 0.1, 0, 3500, 2),
(39, 'Kacang kapri', 22, 2200, 0.31, 1.6, 0.15, 0.1, 3000, 2),
(40, 'Konsentrat broiler', 41, 2800, 3, 0, 2.5, 1.5, 3500, 2),
(41, 'Konsentrat layer', 32, 2500, 2.1, 0, 3.4, 0, 2500, 2),
(42, 'Meat Bone Meal (MBM)', 52, 2190, 0.69, 2.61, 10, 5.1, 5000, 2),
(43, 'PEANUT HULLS', 7.8, 2000, 0.5, 1.8, 0.26, 0.07, 2000, 2),
(44, 'Ragi bir', 35, 1850, 2.4, 2.6, 0.13, 0.5, 400, 2),
(45, 'Ragi torula', 48, 1850, 0.8, 3.8, 0.57, 0.5, 100, 2),
(46, 'Tepung bekicot', 61, 4906, 4.35, 0, 2, 0, 2000, 2),
(47, 'Tepung bulu', 85, 2310, 0.5, 1.5, 0.32, 0.32, 4000, 2),
(48, 'Tepung daging', 57, 2957, 3.31, 0, 5.96, 0, 5000, 2),
(49, 'Tepung darah', 80.5, 2750, 6.9, 6.9, 0.15, 0.32, 5000, 2),
(50, 'Tepung daun alfafa', 20, 1630, 0.9, 1.25, 1.5, 0.27, 1500, 2),
(51, 'Tepung daun lamtoro', 18.9, 828, 0.55, 0, 1.4, 0.21, 1500, 2),
(52, 'Tepung ikan impor', 65, 2830, 1.8, 5.2, 4, 2.6, 4000, 2),
(53, 'Tepung ikan lokal', 50, 2640, 2, 6.4, 2, 1.5, 4500, 2),
(54, 'Ulat hongkong', 23.9, 1100, 0, 0, 0.16, 0.75, 3000, 2),
(55, 'Ca3(PO4)2', 0, 0, 0, 0, 38, 20, 200, 3),
(56, 'CaCO3', 0, 0, 0, 0, 40, 0, 200, 3),
(57, 'Cobalt carbonat', 0, 0, 0, 0, 0, 0, 500, 3),
(58, 'Cobalt sulfat', 0, 0, 0, 0, 0, 0, 500, 3),
(59, 'Copper sulfat', 0, 0, 0, 0, 0, 0, 500, 3),
(60, 'DL Metionin', 0, 0, 90, 0, 0, 0, 40000, 3),
(61, 'Dicalsium phospat', 0, 0, 0, 0, 18.65, 0.1, 200, 3),
(62, 'Garam', 0, 0, 0, 0, 0, 0, 200, 3),
(63, 'Kalsium iodat', 0, 0, 0, 0, 0, 0, 750, 3),
(64, 'Kapur', 0, 0, 0, 0, 38, 0, 250, 3),
(65, 'Kulit kerang', 0, 0, 0, 0, 37, 0, 250, 3),
(66, 'Kulit rajungan', 0, 0, 0, 0, 0, 0, 1000, 3),
(67, 'L-lysin HCl', 0, 0, 0, 80, 0, 0, 40000, 3),
(68, 'LIMESTONE 38%', 0, 0, 0, 0, 39.4, 0.09, 1000, 3),
(69, 'Magnesium oxide', 0, 0, 0, 0, 0, 0, 1200, 3),
(70, 'MnSO4H2O', 0, 0, 0, 0, 0, 0, 5000, 3),
(71, 'Potasium iodin', 0, 0, 0, 0, 0, 0, 1500, 3),
(72, 'Potasium oxidase', 0, 0, 0, 0, 0.05, 0, 4000, 3),
(73, 'Premix', 0, 0, 0, 0, 25, 0, 5000, 3),
(74, 'Promix', 23, 0, 0, 0, 1.56, 0.3, 5000, 3),
(75, 'Selenium 600', 0, 0, 0, 0, 0, 0, 4300, 3),
(76, 'Tepung tulang', 12, 818, 1.27, 0, 26, 13.5, 2500, 3),
(77, 'Tylan 40', 0, 0, 0, 0, 0, 0, 5000, 3),
(78, 'Urea', 288, 0, 0, 0, 0, 0, 1500, 3),
(79, 'Vitamin A-30', 90, 5000, 0, 0, 0, 0, 0, 3),
(80, 'Vitamin E-50%', 0, 0, 0, 0, 0, 0, 5000, 3),
(81, 'Zinc oxide', 0, 0, 0, 0, 0, 0, 6000, 3),
(82, 'Zinc sulfate', 0, 0, 0, 0, 0, 0, 6000, 3),
(83, 'Komak', 21.04, 2200, 0.31, 1.6, 0.15, 0.1, 5000, 2),
(84, 'TKD', 85, 5050, 0, 0, 2, 4, 0, 1),
(85, 'LP', 80, 5000, 0, 0, 1, 3, 0, 1),
(86, 'LK', 46, 6400, 0, 0, 3, 6, 0, 1),
(87, 'OT', 44.5, 6350, 0, 0, 2, 3, 0, 1),
(88, 'TA', 51.35, 6250, 0, 0, 2, 4, 0, 1),
(89, 'JK', 57.5, 5450, 0, 0, 3, 6, 0, 1),
(90, 'UK', 62, 5500, 0, 0, 2, 3.5, 0, 1),
(91, 'MR', 59.5, 5750, 0, 0, 1, 2, 0, 1),
(92, 'MY', 0, 8800, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bmt`
--

CREATE TABLE `jenis_bmt` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_bmt`
--

INSERT INTO `jenis_bmt` (`id`, `nama`) VALUES
(1, 'Sumber Energi'),
(2, 'Sumber Protein'),
(3, 'Lain-lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk` float NOT NULL,
  `em` float NOT NULL,
  `met` float NOT NULL,
  `lis` float NOT NULL,
  `ca` float NOT NULL,
  `p` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kebutuhan`
--

INSERT INTO `kebutuhan` (`id`, `nama`, `umur`, `pk`, `em`, `met`, `lis`, `ca`, `p`) VALUES
(1, 'starter', '0-8', 18, 3100, 0.37, 1.05, 0.8, 0.6),
(2, 'grower', '9-20', 16, 2700, 0.29, 0.74, 0.8, 0.6),
(3, 'layer', '>20', 18, 2700, 0.37, 1.05, 3, 0.6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uname`, `pwd`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmt`
--
ALTER TABLE `bmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_bmt`
--
ALTER TABLE `jenis_bmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
