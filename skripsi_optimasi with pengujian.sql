-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 11:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_optimasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmt`
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
-- Dumping data for table `bmt`
--

INSERT INTO `bmt` (`id`, `nama`, `pk`, `em`, `met`, `lis`, `ca`, `p`, `harga`, `id_jenis`) VALUES
(1, 'Ampas kelapa', 21.6, 2350, 0.001, 0.001, 0.21, 0.65, 1200, 1),
(2, 'Bekatul', 10.2, 2860, 0.27, 0.71, 0.04, 0.16, 1500, 1),
(3, 'Beras pecah kulit', 8, 2660, 0.17, 0.3, 0.09, 0.04, 3000, 1),
(4, 'DPW', 16, 1850, 0.27, 0.71, 0.08, 1.7, 900, 1),
(5, 'Dedak Jagung halus', 7.54, 2950, 0.17, 0.5, 0.04, 0.15, 1200, 1),
(6, 'Dedak Jagung kasar', 11.86, 2950, 0.17, 0.5, 0.04, 0.15, 1250, 1),
(7, 'Dedak halus', 8, 1630, 0.29, 0.77, 0.12, 0.21, 1000, 1),
(8, 'Dedak padi', 8.77, 1800, 0.29, 0.77, 0.12, 0.21, 1500, 1),
(9, 'Fat', 0.001, 7600, 0.001, 0.001, 0.001, 0.001, 3000, 1),
(10, 'Gandum', 10.7, 2980, 0.31, 0.03, 0.05, 0.001, 3500, 1),
(11, 'Gaplek', 3, 3200, 0.09, 0.03, 0.04, 0.36, 1200, 1),
(12, 'Gula', 0.001, 3350, 0.001, 0.001, 0.001, 0.001, 3000, 1),
(13, 'Jagung kuning', 8.6, 3370, 0.18, 0.2, 0.02, 0.1, 2500, 1),
(14, 'Menir', 8.9, 3390, 0.27, 0.2, 0.03, 0.4, 1800, 1),
(15, 'Minyak ikan', 0.001, 8450, 0.001, 0.001, 0.001, 0.001, 3500, 1),
(16, 'Minyak kelapa', 0.001, 8600, 0.001, 0.001, 0.001, 0.001, 4000, 1),
(17, 'Minyak tumbuhan', 0.001, 8950, 0.001, 0.001, 0.001, 0.001, 4000, 1),
(18, 'Onggok kotoran ayam Fermentasi', 14, 2700, 0.27, 0.71, 2.25, 1, 400, 1),
(19, 'Pollard', 15, 1300, 0.17, 0.3, 0.14, 0.32, 1000, 1),
(20, 'Sorgum', 10, 3250, 0.13, 0.2, 0.03, 0.1, 2000, 1),
(21, 'Tepung gaplek', 1.5, 2970, 0.09, 0.03, 0.18, 0.09, 1200, 1),
(22, 'Tetes (Bit)', 6.5, 1980, 0.001, 0.001, 0.16, 0.2, 1000, 1),
(23, 'Tetes (Tebu)', 3, 1960, 0.001, 0.001, 0.9, 0.1, 1000, 1),
(24, 'Tumpi', 8.66, 2500, 0.001, 0.001, 0.001, 0.001, 1000, 1),
(25, 'Tumpi jagung', 8.66, 2900, 0.001, 0.001, 0.001, 0.001, 1000, 1),
(26, 'Ampas tahu', 25.65, 2450, 0.65, 2.9, 0.29, 0.65, 2500, 2),
(27, 'Bungkil biji kapuk', 41, 2100, 0.6, 1.6, 0.18, 0.33, 3000, 2),
(28, 'Bungkil biji karet', 24.2, 2159, 0.001, 0.001, 0.11, 0.001, 2500, 2),
(29, 'Bungkil kacang tanah', 42, 2200, 0.5, 1.8, 0.2, 0.2, 3500, 2),
(30, 'Bungkil kedele', 42, 2240, 0.65, 2.9, 0.29, 0.65, 3000, 2),
(31, 'Bungkil kelapa', 18.5, 2200, 0.29, 0.64, 0.2, 0.57, 2200, 2),
(32, 'Bungkil klenteng', 25, 2200, 0.001, 0.001, 0.16, 0.75, 2500, 2),
(33, 'Bungkil wijen', 45, 1910, 1.4, 1.3, 2, 0.3, 2000, 2),
(34, 'Hidrolisis isi rumen', 16.2, 2000, 0.001, 0.001, 0.38, 0.55, 900, 2),
(35, 'Ikan Kering', 44.38, 2200, 2, 6.4, 2, 1.5, 3000, 2),
(36, 'Isi rumen', 16.35, 2000, 0.001, 0.001, 0.001, 0.001, 1800, 2),
(37, 'Kacang buncis', 23.5, 2330, 0.31, 1.6, 0.13, 0.2, 3000, 2),
(38, 'Kacang hijau', 21.3, 2220, 1.75, 1.6, 0.1, 0.001, 3500, 2),
(39, 'Kacang kapri', 22, 2200, 0.31, 1.6, 0.15, 0.1, 3000, 2),
(40, 'Konsentrat broiler', 41, 2800, 3, 0.001, 2.5, 1.5, 3500, 2),
(41, 'Konsentrat layer', 32, 2500, 2.1, 0.001, 3.4, 0.001, 2500, 2),
(42, 'Meat Bone Meal (MBM)', 52, 2190, 0.69, 2.61, 10, 5.1, 5000, 2),
(43, 'PEANUT HULLS', 7.8, 2000, 0.5, 1.8, 0.26, 0.07, 2000, 2),
(44, 'Ragi bir', 35, 1850, 2.4, 2.6, 0.13, 0.5, 400, 2),
(45, 'Ragi torula', 48, 1850, 0.8, 3.8, 0.57, 0.5, 100, 2),
(46, 'Tepung bekicot', 61, 4906, 4.35, 0.001, 2, 0.001, 2000, 2),
(47, 'Tepung bulu', 85, 2310, 0.5, 1.5, 0.32, 0.32, 4000, 2),
(48, 'Tepung daging', 57, 2957, 3.31, 0.001, 5.96, 0.001, 5000, 2),
(49, 'Tepung darah', 80.5, 2750, 6.9, 6.9, 0.15, 0.32, 5000, 2),
(50, 'Tepung daun alfafa', 20, 1630, 0.9, 1.25, 1.5, 0.27, 1500, 2),
(51, 'Tepung daun lamtoro', 18.9, 828, 0.55, 0.001, 1.4, 0.21, 1500, 2),
(52, 'Tepung ikan impor', 65, 2830, 1.8, 5.2, 4, 2.6, 4000, 2),
(53, 'Tepung ikan lokal', 50, 2640, 2, 6.4, 2, 1.5, 4500, 2),
(54, 'Ulat hongkong', 23.9, 1100, 0.001, 0.001, 0.16, 0.75, 3000, 2),
(55, 'Ca3(PO4)2', 0.001, 0.001, 0.001, 0.001, 38, 20, 200, 3),
(56, 'CaCO3', 0.001, 0.001, 0.001, 0.001, 40, 0.001, 200, 3),
(57, 'Cobalt carbonat', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 500, 3),
(58, 'Cobalt sulfat', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 500, 3),
(59, 'Copper sulfat', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 500, 3),
(60, 'DL Metionin', 0.001, 0.001, 90, 0.001, 0.001, 0.001, 40000, 3),
(61, 'Dicalsium phospat', 0.001, 0.001, 0.001, 0.001, 18.65, 0.1, 200, 3),
(62, 'Garam', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 200, 3),
(63, 'Kalsium iodat', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 750, 3),
(64, 'Kapur', 0.001, 0.001, 0.001, 0.001, 38, 0.001, 250, 3),
(65, 'Kulit kerang', 0.001, 0.001, 0.001, 0.001, 37, 0.001, 250, 3),
(66, 'Kulit rajungan', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 1000, 3),
(67, 'L-lysin HCl', 0.001, 0.001, 0.001, 80, 0.001, 0.001, 40000, 3),
(68, 'LIMESTONE 38%', 0.001, 0.001, 0.001, 0.001, 39.4, 0.09, 1000, 3),
(69, 'Magnesium oxide', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 1200, 3),
(70, 'MnSO4H2O', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 5000, 3),
(71, 'Potasium iodin', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 1500, 3),
(72, 'Potasium oxidase', 0.001, 0.001, 0.001, 0.001, 0.05, 0.001, 4000, 3),
(73, 'Premix', 0.001, 0.001, 0.001, 0.001, 25, 0.001, 5000, 3),
(74, 'Promix', 23, 0.001, 0.001, 0.001, 1.56, 0.3, 5000, 3),
(75, 'Selenium 600', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 4300, 3),
(76, 'Tepung tulang', 12, 818, 1.27, 0.001, 26, 13.5, 2500, 3),
(77, 'Tylan 40', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 5000, 3),
(78, 'Urea', 288, 0.001, 0.001, 0.001, 0.001, 0.001, 1500, 3),
(79, 'Vitamin A-30', 90, 5000, 0.001, 0.001, 0.001, 0.001, 0, 3),
(80, 'Vitamin E-50%', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 5000, 3),
(81, 'Zinc oxide', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 6000, 3),
(82, 'Zinc sulfate', 0.001, 0.001, 0.001, 0.001, 0.001, 0.001, 6000, 3),
(83, 'Komak', 21.04, 2200, 0.31, 1.6, 0.15, 0.1, 5000, 2),
(84, 'TKD', 85, 5050, 0.001, 0.001, 2, 4, 0, 1),
(85, 'LP', 80, 5000, 0.001, 0.001, 1, 3, 0, 1),
(86, 'LK', 46, 6400, 0.001, 0.001, 3, 6, 0, 1),
(87, 'OT', 44.5, 6350, 0.001, 0.001, 2, 3, 0, 1),
(88, 'TA', 51.35, 6250, 0.001, 0.001, 2, 4, 0, 1),
(89, 'JK', 57.5, 5450, 0.001, 0.001, 3, 6, 0, 1),
(90, 'UK', 62, 5500, 0.001, 0.001, 2, 3.5, 0, 1),
(91, 'MR', 59.5, 5750, 0.001, 0.001, 1, 2, 0, 1),
(92, 'MY', 0.001, 8800, 0.001, 0.001, 0.001, 0.001, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id` int(11) NOT NULL,
  `popsize` int(11) NOT NULL,
  `generasi` int(11) NOT NULL,
  `cr` float NOT NULL,
  `mr` float NOT NULL,
  `fitness` double NOT NULL,
  `id_usia` int(11) NOT NULL,
  `jml_komp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histori`
--

INSERT INTO `histori` (`id`, `popsize`, `generasi`, `cr`, `mr`, `fitness`, `id_usia`, `jml_komp`) VALUES
(1, 6, 6, 0.9, 0, -1.4548203416188, 3, 5),
(2, 6, 6, 0.9, 0, 2.5181421204305, 3, 5),
(3, 6, 7, 0.9, 0, 3.2218782759293, 3, 5),
(4, 6, 7, 0.9, 0, 3.4811595788135, 3, 5),
(5, 6, 7, 0.9, 0, 3.3376223722791, 3, 5),
(6, 6, 7, 0.8, 0.1, 2.1890479783613, 3, 5),
(7, 6, 8, 0.8, 0.1, 3.1149990655524, 3, 5),
(8, 6, 8, 0.8, 0.1, 2.6701631945585, 3, 5),
(9, 6, 6, 0.8, 0.1, 2.7548619428096, 3, 5),
(10, 6, 7, 0.8, 0.1, 3.2366552534985, 3, 5),
(11, 6, 7, 0.7, 0.2, 2.7068550042649, 3, 5),
(12, 6, 7, 0.7, 0.2, 2.892481531639, 3, 5),
(13, 6, 8, 0.7, 0.2, 1.9989171909013, 3, 5),
(14, 6, 6, 0.7, 0.2, -0.26623199407681, 3, 5),
(15, 6, 8, 0.7, 0.2, 0.85325801998978, 3, 5),
(16, 6, 7, 0.6, 0.3, 2.4832597247878, 3, 5),
(17, 6, 7, 0.6, 0.3, 3.4957818619128, 3, 5),
(18, 6, 8, 0.6, 0.3, 2.5575041688164, 3, 5),
(19, 6, 7, 0.6, 0.3, 2.4594363225322, 3, 5),
(20, 6, 7, 0.6, 0.3, 2.0480958490904, 3, 5),
(21, 6, 8, 0.5, 0.4, 2.7044213346227, 3, 5),
(22, 6, 8, 0.5, 0.4, 1.8818745772637, 3, 5),
(23, 6, 8, 0.5, 0.4, 0.15105764589887, 3, 5),
(24, 6, 8, 0.5, 0.4, -0.19626237445533, 3, 5),
(25, 6, 8, 0.5, 0.4, 2.9719491733286, 3, 5),
(26, 6, 8, 0.4, 0.5, 3.4784878501396, 3, 5),
(27, 6, 9, 0.4, 0.5, 2.9860789080941, 3, 5),
(28, 6, 7, 0.4, 0.5, -0.039626904528821, 3, 5),
(29, 6, 8, 0.4, 0.5, 2.8805978163377, 3, 5),
(30, 6, 8, 0.4, 0.5, 2.7867688735524, 3, 5),
(31, 6, 8, 0.3, 0.6, 2.6449525607806, 3, 5),
(32, 6, 9, 0.3, 0.6, 1.4435373182787, 3, 5),
(33, 6, 8, 0.3, 0.6, 2.1052898480994, 3, 5),
(34, 6, 9, 0.3, 0.6, 3.0974903111132, 3, 5),
(35, 6, 9, 0.3, 0.6, 1.3430003972572, 3, 5),
(36, 6, 10, 0.2, 0.7, 2.7166189683958, 3, 5),
(37, 6, 9, 0.2, 0.7, 0.61663803837003, 3, 5),
(38, 6, 8, 0.2, 0.7, 1.6982552041927, 3, 5),
(39, 6, 9, 0.2, 0.7, -0.70328662448069, 3, 5),
(40, 6, 8, 0.2, 0.7, -0.67303728694203, 3, 5),
(41, 6, 10, 0.1, 0.8, 1.3449111387631, 3, 5),
(42, 6, 11, 0.1, 0.8, 1.1842268129484, 3, 5),
(43, 6, 10, 0.1, 0.8, -0.11138534098729, 3, 5),
(44, 6, 10, 0.1, 0.8, 0.18236314376739, 3, 5),
(45, 6, 13, 0.1, 0.8, 2.1444231152067, 3, 5),
(46, 6, 16, 0, 0.9, 2.321800830119, 3, 5),
(47, 6, 14, 0, 0.9, 2.2963451438874, 3, 5),
(48, 6, 15, 0, 0.9, 1.9324226475208, 3, 5),
(49, 6, 18, 0, 0.9, 0.79626599612431, 3, 5),
(50, 6, 25, 0, 0.9, 1.7734305290069, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `histori_detailbmt`
--

CREATE TABLE `histori_detailbmt` (
  `id` int(11) NOT NULL,
  `id_bmt` int(11) NOT NULL,
  `id_histori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histori_detailbmt`
--

INSERT INTO `histori_detailbmt` (`id`, `id_bmt`, `id_histori`) VALUES
(1, 1, 1),
(2, 18, 1),
(3, 56, 1),
(4, 60, 1),
(5, 67, 1),
(6, 78, 1),
(7, 26, 2),
(8, 46, 2),
(9, 49, 2),
(10, 53, 2),
(11, 56, 2),
(12, 79, 2),
(13, 40, 3),
(14, 47, 3),
(15, 49, 3),
(16, 56, 3),
(17, 84, 3),
(18, 85, 3),
(19, 35, 4),
(20, 46, 4),
(21, 49, 4),
(22, 52, 4),
(23, 65, 4),
(24, 84, 4),
(25, 2, 5),
(26, 48, 5),
(27, 49, 5),
(28, 52, 5),
(29, 65, 5),
(30, 90, 5),
(31, 25, 6),
(32, 40, 6),
(33, 45, 6),
(34, 65, 6),
(35, 85, 6),
(36, 87, 6),
(37, 5, 7),
(38, 30, 7),
(39, 42, 7),
(40, 52, 7),
(41, 53, 7),
(42, 88, 7),
(43, 6, 8),
(44, 26, 8),
(45, 41, 8),
(46, 42, 8),
(47, 76, 8),
(48, 90, 8),
(49, 29, 9),
(50, 42, 9),
(51, 44, 9),
(52, 46, 9),
(53, 48, 9),
(54, 86, 9),
(55, 21, 10),
(56, 35, 10),
(57, 44, 10),
(58, 55, 10),
(59, 86, 10),
(60, 91, 10),
(66, 11, 11),
(67, 38, 11),
(68, 42, 11),
(69, 48, 11),
(70, 86, 11),
(71, 89, 11),
(72, 10, 12),
(73, 42, 12),
(74, 43, 12),
(75, 52, 12),
(76, 86, 12),
(77, 89, 12),
(78, 20, 13),
(79, 30, 13),
(80, 33, 13),
(81, 42, 13),
(82, 68, 13),
(83, 83, 13),
(84, 12, 14),
(85, 32, 14),
(86, 38, 14),
(87, 68, 14),
(88, 76, 14),
(89, 88, 14),
(90, 13, 15),
(91, 39, 15),
(92, 50, 15),
(93, 53, 15),
(94, 54, 15),
(95, 68, 15),
(96, 14, 16),
(97, 30, 16),
(98, 37, 16),
(99, 40, 16),
(100, 45, 16),
(101, 76, 16),
(102, 27, 17),
(103, 35, 17),
(104, 42, 17),
(105, 46, 17),
(106, 76, 17),
(107, 86, 17),
(108, 18, 18),
(109, 33, 18),
(110, 45, 18),
(111, 47, 18),
(112, 76, 18),
(113, 79, 18),
(114, 26, 19),
(115, 33, 19),
(116, 48, 19),
(117, 53, 19),
(118, 85, 19),
(119, 87, 19),
(120, 4, 20),
(121, 27, 20),
(122, 35, 20),
(123, 48, 20),
(124, 50, 20),
(125, 84, 20),
(126, 30, 21),
(127, 48, 21),
(128, 49, 21),
(129, 51, 21),
(130, 89, 21),
(131, 91, 21),
(132, 29, 22),
(133, 47, 22),
(134, 52, 22),
(135, 78, 22),
(136, 89, 22),
(137, 90, 22),
(138, 40, 23),
(139, 43, 23),
(140, 79, 23),
(141, 85, 23),
(142, 89, 23),
(143, 91, 23),
(144, 27, 24),
(145, 29, 24),
(146, 47, 24),
(147, 84, 24),
(148, 88, 24),
(149, 89, 24),
(150, 29, 25),
(151, 44, 25),
(152, 47, 25),
(153, 55, 25),
(154, 67, 25),
(155, 87, 25),
(156, 41, 26),
(157, 43, 26),
(158, 46, 26),
(159, 49, 26),
(160, 55, 26),
(161, 86, 26),
(162, 9, 27),
(163, 26, 27),
(164, 47, 27),
(165, 53, 27),
(166, 55, 27),
(167, 85, 27),
(168, 4, 28),
(169, 15, 28),
(170, 32, 28),
(171, 46, 28),
(172, 47, 28),
(173, 73, 28),
(174, 16, 29),
(175, 28, 29),
(176, 49, 29),
(177, 73, 29),
(178, 90, 29),
(179, 91, 29),
(180, 18, 30),
(181, 49, 30),
(182, 52, 30),
(183, 54, 30),
(184, 73, 30),
(185, 92, 30),
(186, 17, 31),
(187, 35, 31),
(188, 37, 31),
(189, 48, 31),
(190, 52, 31),
(191, 91, 31),
(192, 29, 32),
(193, 40, 32),
(194, 49, 32),
(195, 52, 32),
(196, 67, 32),
(197, 74, 32),
(198, 30, 33),
(199, 39, 33),
(200, 40, 33),
(201, 41, 33),
(202, 49, 33),
(203, 52, 33),
(204, 1, 34),
(205, 40, 34),
(206, 46, 34),
(207, 52, 34),
(208, 53, 34),
(209, 64, 34),
(210, 2, 35),
(211, 27, 35),
(212, 35, 35),
(213, 38, 35),
(214, 48, 35),
(215, 64, 35),
(216, 25, 36),
(217, 44, 36),
(218, 52, 36),
(219, 53, 36),
(220, 64, 36),
(221, 83, 36),
(222, 32, 37),
(223, 44, 37),
(224, 45, 37),
(225, 48, 37),
(226, 50, 37),
(227, 61, 37),
(228, 6, 38),
(229, 26, 38),
(230, 30, 38),
(231, 51, 38),
(232, 52, 38),
(233, 61, 38),
(234, 5, 39),
(235, 26, 39),
(236, 31, 39),
(237, 38, 39),
(238, 41, 39),
(239, 61, 39),
(240, 8, 40),
(241, 13, 40),
(242, 14, 40),
(243, 31, 40),
(244, 35, 40),
(245, 41, 40),
(246, 11, 41),
(247, 17, 41),
(248, 28, 41),
(249, 33, 41),
(250, 41, 41),
(251, 42, 41),
(252, 10, 42),
(253, 41, 42),
(254, 44, 42),
(255, 54, 42),
(256, 76, 42),
(257, 92, 42),
(258, 11, 43),
(259, 16, 43),
(260, 37, 43),
(261, 43, 43),
(262, 50, 43),
(263, 52, 43),
(264, 13, 44),
(265, 15, 44),
(266, 29, 44),
(267, 30, 44),
(268, 52, 44),
(269, 74, 44),
(270, 9, 45),
(271, 12, 45),
(272, 39, 45),
(273, 42, 45),
(274, 52, 45),
(275, 83, 45),
(276, 20, 46),
(277, 37, 46),
(278, 45, 46),
(279, 76, 46),
(280, 83, 46),
(281, 86, 46),
(282, 14, 47),
(283, 26, 47),
(284, 38, 47),
(285, 39, 47),
(286, 76, 47),
(287, 87, 47),
(288, 1, 48),
(289, 27, 48),
(290, 38, 48),
(291, 76, 48),
(292, 85, 48),
(293, 88, 48),
(294, 27, 49),
(295, 48, 49),
(296, 50, 49),
(297, 51, 49),
(298, 84, 49),
(299, 91, 49),
(300, 26, 50),
(301, 47, 50),
(302, 48, 50),
(303, 51, 50),
(304, 89, 50),
(305, 90, 50);

-- --------------------------------------------------------

--
-- Table structure for table `histori_detailrekom`
--

CREATE TABLE `histori_detailrekom` (
  `id` int(11) NOT NULL,
  `id_rekom` int(11) NOT NULL,
  `id_histori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histori_detailrekom`
--

INSERT INTO `histori_detailrekom` (`id`, `id_rekom`, `id_histori`) VALUES
(1, 1, 1),
(2, 18, 1),
(3, 56, 1),
(4, 60, 1),
(5, 67, 1),
(6, 26, 2),
(7, 46, 2),
(8, 49, 2),
(9, 53, 2),
(10, 56, 2),
(11, 47, 3),
(12, 49, 3),
(13, 56, 3),
(14, 84, 3),
(15, 85, 3),
(16, 46, 4),
(17, 49, 4),
(18, 52, 4),
(19, 65, 4),
(20, 84, 4),
(21, 48, 5),
(22, 49, 5),
(23, 52, 5),
(24, 65, 5),
(25, 90, 5),
(26, 40, 6),
(27, 45, 6),
(28, 65, 6),
(29, 85, 6),
(30, 30, 7),
(31, 42, 7),
(32, 52, 7),
(33, 53, 7),
(34, 88, 7),
(35, 26, 8),
(36, 41, 8),
(37, 42, 8),
(38, 76, 8),
(39, 90, 8),
(40, 42, 9),
(41, 44, 9),
(42, 46, 9),
(43, 48, 9),
(44, 86, 9),
(45, 35, 10),
(46, 44, 10),
(47, 55, 10),
(48, 86, 10),
(49, 91, 10),
(55, 38, 11),
(56, 42, 11),
(57, 48, 11),
(58, 86, 11),
(59, 10, 12),
(60, 42, 12),
(61, 52, 12),
(62, 86, 12),
(63, 30, 13),
(64, 33, 13),
(65, 42, 13),
(66, 68, 13),
(67, 32, 14),
(68, 38, 14),
(69, 68, 14),
(70, 76, 14),
(71, 88, 14),
(72, 13, 15),
(73, 50, 15),
(74, 53, 15),
(75, 54, 15),
(76, 68, 15),
(77, 30, 16),
(78, 37, 16),
(79, 40, 16),
(80, 45, 16),
(81, 76, 16),
(82, 35, 17),
(83, 42, 17),
(84, 46, 17),
(85, 76, 17),
(86, 86, 17),
(87, 33, 18),
(88, 45, 18),
(89, 47, 18),
(90, 76, 18),
(91, 79, 18),
(92, 33, 19),
(93, 48, 19),
(94, 53, 19),
(95, 85, 19),
(96, 87, 19),
(97, 27, 20),
(98, 35, 20),
(99, 48, 20),
(100, 50, 20),
(101, 84, 20),
(102, 30, 21),
(103, 48, 21),
(104, 49, 21),
(105, 89, 21),
(106, 29, 22),
(107, 47, 22),
(108, 52, 22),
(109, 89, 22),
(110, 90, 22),
(111, 40, 23),
(112, 43, 23),
(113, 85, 23),
(114, 89, 23),
(115, 27, 24),
(116, 29, 24),
(117, 47, 24),
(118, 88, 24),
(119, 89, 24),
(120, 44, 25),
(121, 47, 25),
(122, 55, 25),
(123, 67, 25),
(124, 87, 25),
(125, 43, 26),
(126, 46, 26),
(127, 49, 26),
(128, 55, 26),
(129, 86, 26),
(130, 26, 27),
(131, 47, 27),
(132, 53, 27),
(133, 55, 27),
(134, 85, 27),
(135, 4, 28),
(136, 32, 28),
(137, 46, 28),
(138, 47, 28),
(139, 73, 28),
(140, 16, 29),
(141, 49, 29),
(142, 73, 29),
(143, 90, 29),
(144, 91, 29),
(145, 18, 30),
(146, 49, 30),
(147, 52, 30),
(148, 73, 30),
(149, 92, 30),
(150, 17, 31),
(151, 35, 31),
(152, 48, 31),
(153, 52, 31),
(154, 91, 31),
(155, 29, 32),
(156, 40, 32),
(157, 49, 32),
(158, 52, 32),
(159, 74, 32),
(160, 30, 33),
(161, 40, 33),
(162, 41, 33),
(163, 49, 33),
(164, 52, 33),
(165, 40, 34),
(166, 46, 34),
(167, 52, 34),
(168, 53, 34),
(169, 64, 34),
(170, 2, 35),
(171, 27, 35),
(172, 35, 35),
(173, 48, 35),
(174, 64, 35),
(175, 44, 36),
(176, 52, 36),
(177, 53, 36),
(178, 64, 36),
(179, 32, 37),
(180, 44, 37),
(181, 45, 37),
(182, 48, 37),
(183, 61, 37),
(184, 6, 38),
(185, 26, 38),
(186, 30, 38),
(187, 52, 38),
(188, 61, 38),
(189, 26, 39),
(190, 31, 39),
(191, 38, 39),
(192, 41, 39),
(193, 61, 39),
(194, 8, 40),
(195, 14, 40),
(196, 31, 40),
(197, 35, 40),
(198, 41, 40),
(199, 17, 41),
(200, 28, 41),
(201, 33, 41),
(202, 41, 41),
(203, 42, 41),
(204, 41, 42),
(205, 44, 42),
(206, 54, 42),
(207, 76, 42),
(208, 92, 42),
(209, 16, 43),
(210, 37, 43),
(211, 43, 43),
(212, 50, 43),
(213, 52, 43),
(214, 15, 44),
(215, 29, 44),
(216, 30, 44),
(217, 52, 44),
(218, 74, 44),
(219, 9, 45),
(220, 39, 45),
(221, 42, 45),
(222, 52, 45),
(223, 83, 45),
(224, 37, 46),
(225, 45, 46),
(226, 76, 46),
(227, 83, 46),
(228, 86, 46),
(229, 26, 47),
(230, 38, 47),
(231, 39, 47),
(232, 76, 47),
(233, 87, 47),
(234, 27, 48),
(235, 38, 48),
(236, 76, 48),
(237, 85, 48),
(238, 88, 48),
(239, 27, 49),
(240, 48, 49),
(241, 50, 49),
(242, 84, 49),
(243, 91, 49),
(244, 26, 50),
(245, 47, 50),
(246, 48, 50),
(247, 89, 50),
(248, 90, 50);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bmt`
--

CREATE TABLE `jenis_bmt` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_bmt`
--

INSERT INTO `jenis_bmt` (`id`, `nama`) VALUES
(1, 'Sumber Energi'),
(2, 'Sumber Protein'),
(3, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
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
-- Dumping data for table `kebutuhan`
--

INSERT INTO `kebutuhan` (`id`, `nama`, `umur`, `pk`, `em`, `met`, `lis`, `ca`, `p`) VALUES
(1, 'starter', '0-8', 18, 3100, 0.37, 1.05, 0.8, 0.6),
(2, 'grower', '9-20', 16, 2700, 0.29, 0.74, 0.8, 0.6),
(3, 'layer', '>20', 18, 2700, 0.37, 1.05, 3, 0.6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usia` (`id_usia`);

--
-- Indexes for table `histori_detailbmt`
--
ALTER TABLE `histori_detailbmt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_histori` (`id_histori`),
  ADD KEY `id_bmt` (`id_bmt`);

--
-- Indexes for table `histori_detailrekom`
--
ALTER TABLE `histori_detailrekom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_histori` (`id_histori`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `histori_detailbmt`
--
ALTER TABLE `histori_detailbmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;
--
-- AUTO_INCREMENT for table `histori_detailrekom`
--
ALTER TABLE `histori_detailrekom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bmt`
--
ALTER TABLE `bmt`
  ADD CONSTRAINT `bmt_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_bmt` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `histori`
--
ALTER TABLE `histori`
  ADD CONSTRAINT `histori_ibfk_1` FOREIGN KEY (`id_usia`) REFERENCES `kebutuhan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `histori_detailbmt`
--
ALTER TABLE `histori_detailbmt`
  ADD CONSTRAINT `histori_detailbmt_ibfk_4` FOREIGN KEY (`id_bmt`) REFERENCES `bmt` (`id`),
  ADD CONSTRAINT `histori_detailbmt_ibfk_5` FOREIGN KEY (`id_histori`) REFERENCES `histori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `histori_detailrekom`
--
ALTER TABLE `histori_detailrekom`
  ADD CONSTRAINT `histori_detailrekom_ibfk_1` FOREIGN KEY (`id_histori`) REFERENCES `histori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
