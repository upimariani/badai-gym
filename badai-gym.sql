-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2025 at 02:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badai-gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `recency` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `monetary` bigint(20) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisis`
--

INSERT INTO `analisis` (`id_analisis`, `id_pelanggan`, `recency`, `frequency`, `monetary`, `hasil`) VALUES
(1, 1, 0, 16, 1282538000, 1),
(2, 2, 30, 21, 1149723000, 2),
(3, 3, 41, 14, 1308852000, 3),
(4, 4, 23, 14, 1286444000, 1),
(5, 5, 10, 11, 57378000, 2),
(6, 6, 24, 11, 3768455000, 3),
(7, 7, 43, 14, 737385000, 2),
(8, 8, 0, 16, 1062467000, 2),
(9, 9, 1, 15, 491466000, 2),
(10, 10, 71, 10, 1271746000, 1),
(11, 11, 4, 17, 3030102000, 3),
(12, 12, 4, 12, 63526000, 2),
(13, 13, 5, 17, 219857000, 2),
(14, 14, 20, 14, 68781000, 2),
(15, 15, 3, 12, 177292000, 2),
(16, 16, 0, 16, 1315740000, 3),
(17, 17, 5, 14, 58462000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pelanggan_send` text NOT NULL,
  `admin_send` text NOT NULL,
  `tgl_chat` varchar(20) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_pelanggan`, `id_user`, `pelanggan_send`, `admin_send`, `tgl_chat`, `stat`) VALUES
(1, 2, 1, 'hallo', '0', '2025-12-01', 0),
(2, 2, 1, 'apakah produk A ready?', '0', '2025-12-01', 0),
(3, 2, 1, 'Ditunggu jawabannya', '0', '2025-12-01', 0),
(4, 2, 1, 'Ditunggu jawabannya', '0', '2025-12-01', 0),
(5, 2, 1, 'haloo', '0', '2025-12-01', 0),
(6, 2, 1, '0', 'ready kak', '2025-12-02', 0),
(7, 19, 1, 'Hallo', '0', '2025-12-05', 0),
(8, 19, 1, '0', 'Ada yang bisa dibantu?', '2025-12-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket`
--

CREATE TABLE `detail_paket` (
  `id_detail_paket` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_mulai` varchar(20) NOT NULL,
  `tgl_akhir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_paket`
--

INSERT INTO `detail_paket` (`id_detail_paket`, `id_transaksi`, `id_paket`, `tgl_mulai`, `tgl_akhir`) VALUES
(1, 12, 1, '2025-12-05', '2025-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_produk`, `qty`) VALUES
(1, 1, 2, 24),
(2, 2, 1, 13),
(3, 3, 1, 29),
(4, 4, 8, 9),
(5, 5, 2, 18),
(6, 6, 6, 1),
(7, 7, 3, 1),
(8, 8, 3, 12),
(9, 9, 2, 18),
(10, 10, 6, 9),
(11, 11, 1, 8),
(12, 12, 2, 6),
(13, 13, 3, 27),
(14, 14, 1, 16),
(15, 15, 8, 20),
(16, 16, 2, 8),
(17, 17, 5, 10),
(18, 18, 1, 14),
(19, 19, 4, 24),
(20, 20, 4, 3),
(21, 21, 4, 26),
(22, 22, 8, 16),
(23, 23, 3, 15),
(24, 24, 8, 9),
(25, 25, 3, 27),
(26, 26, 5, 12),
(27, 27, 7, 15),
(28, 28, 1, 6),
(29, 29, 3, 21),
(30, 30, 1, 1),
(31, 31, 8, 17),
(32, 32, 3, 25),
(33, 33, 1, 8),
(34, 34, 8, 30),
(35, 35, 3, 28),
(36, 36, 5, 19),
(37, 37, 5, 18),
(38, 38, 3, 27),
(39, 39, 8, 14),
(40, 40, 2, 6),
(41, 41, 5, 8),
(42, 42, 8, 21),
(43, 43, 3, 23),
(44, 44, 3, 30),
(45, 45, 7, 13),
(46, 46, 8, 4),
(47, 47, 6, 2),
(48, 48, 2, 13),
(49, 49, 8, 6),
(50, 50, 6, 3),
(51, 51, 1, 27),
(52, 52, 3, 22),
(53, 53, 1, 20),
(54, 54, 8, 17),
(55, 55, 8, 16),
(56, 56, 1, 30),
(57, 57, 1, 24),
(58, 58, 6, 29),
(59, 59, 7, 10),
(60, 60, 8, 25),
(61, 61, 8, 10),
(62, 62, 1, 11),
(63, 63, 8, 23),
(64, 64, 7, 18),
(65, 65, 8, 16),
(66, 66, 1, 29),
(67, 67, 3, 18),
(68, 68, 6, 3),
(69, 69, 2, 1),
(70, 70, 3, 8),
(71, 71, 8, 24),
(72, 72, 6, 10),
(73, 73, 6, 16),
(74, 74, 4, 2),
(75, 75, 7, 5),
(76, 76, 6, 15),
(77, 77, 1, 4),
(78, 78, 3, 9),
(79, 79, 2, 2),
(80, 80, 2, 16),
(81, 81, 1, 19),
(82, 82, 1, 2),
(83, 83, 5, 17),
(84, 84, 1, 20),
(85, 85, 8, 26),
(86, 86, 3, 14),
(87, 87, 6, 4),
(88, 88, 1, 9),
(89, 89, 5, 8),
(90, 90, 5, 15),
(91, 91, 7, 28),
(92, 92, 1, 4),
(93, 93, 8, 21),
(94, 94, 4, 26),
(95, 95, 8, 8),
(96, 96, 1, 28),
(97, 97, 8, 20),
(98, 98, 6, 17),
(99, 99, 6, 5),
(100, 100, 5, 8),
(101, 101, 7, 7),
(102, 102, 1, 25),
(103, 103, 8, 3),
(104, 104, 6, 20),
(105, 105, 6, 12),
(106, 106, 7, 3),
(107, 107, 1, 8),
(108, 108, 1, 1),
(109, 109, 2, 19),
(110, 110, 1, 11),
(111, 111, 8, 15),
(112, 112, 3, 26),
(113, 113, 6, 12),
(114, 114, 8, 19),
(115, 115, 7, 8),
(116, 116, 5, 18),
(117, 117, 5, 22),
(118, 118, 3, 29),
(119, 119, 3, 19),
(120, 120, 7, 28),
(121, 121, 1, 1),
(122, 122, 7, 16),
(123, 123, 5, 1),
(124, 124, 6, 1),
(125, 125, 3, 14),
(126, 126, 2, 5),
(127, 127, 3, 9),
(128, 128, 1, 12),
(129, 129, 2, 13),
(130, 130, 1, 8),
(131, 131, 8, 19),
(132, 132, 7, 15),
(133, 133, 4, 1),
(134, 134, 5, 21),
(135, 135, 3, 29),
(136, 136, 4, 27),
(137, 137, 2, 7),
(138, 138, 3, 20),
(139, 139, 8, 17),
(140, 140, 5, 15),
(141, 141, 8, 13),
(142, 142, 8, 6),
(143, 143, 4, 8),
(144, 144, 7, 19),
(145, 145, 5, 25),
(146, 146, 6, 16),
(147, 147, 8, 1),
(148, 148, 7, 19),
(149, 149, 5, 16),
(150, 150, 3, 22),
(151, 151, 2, 16),
(152, 152, 7, 12),
(153, 153, 4, 15),
(154, 154, 8, 2),
(155, 155, 1, 20),
(156, 156, 8, 29),
(157, 157, 6, 7),
(158, 158, 1, 16),
(159, 159, 7, 5),
(160, 160, 3, 12),
(161, 161, 7, 2),
(162, 162, 8, 24),
(163, 163, 1, 26),
(164, 164, 8, 19),
(165, 165, 4, 16),
(166, 166, 8, 29),
(167, 167, 8, 24),
(168, 168, 1, 21),
(169, 169, 8, 1),
(170, 170, 4, 25),
(171, 171, 8, 23),
(172, 172, 1, 19),
(173, 173, 7, 11),
(174, 174, 6, 10),
(175, 175, 8, 16),
(176, 176, 1, 29),
(177, 177, 1, 20),
(178, 178, 2, 24),
(179, 179, 8, 18),
(180, 180, 4, 7),
(181, 181, 8, 6),
(182, 182, 2, 20),
(183, 183, 3, 25),
(184, 184, 6, 26),
(185, 185, 2, 28),
(186, 186, 8, 24),
(187, 187, 1, 10),
(188, 188, 3, 30),
(189, 189, 5, 28),
(190, 190, 4, 3),
(191, 191, 8, 3),
(192, 192, 8, 27),
(193, 193, 8, 29),
(194, 194, 8, 26),
(195, 195, 8, 14),
(196, 196, 3, 22),
(197, 197, 7, 14),
(198, 198, 3, 10),
(199, 199, 3, 21),
(200, 200, 8, 11),
(201, 201, 2, 27),
(202, 202, 6, 5),
(203, 203, 5, 24),
(204, 204, 1, 12),
(205, 205, 5, 26),
(206, 206, 2, 24),
(207, 207, 2, 28),
(208, 208, 6, 13),
(209, 209, 6, 2),
(210, 210, 2, 15),
(211, 211, 8, 8),
(212, 212, 3, 27),
(213, 213, 8, 23),
(214, 214, 8, 14),
(215, 215, 8, 8),
(216, 216, 7, 11),
(217, 217, 4, 23),
(218, 218, 6, 18),
(219, 219, 1, 23),
(220, 220, 7, 24),
(221, 221, 5, 5),
(222, 222, 2, 10),
(223, 223, 1, 16),
(224, 224, 6, 22),
(225, 225, 8, 17),
(226, 226, 8, 21),
(227, 227, 7, 9),
(228, 228, 2, 15),
(229, 229, 4, 25),
(230, 230, 8, 16),
(231, 231, 1, 28),
(232, 232, 6, 13),
(233, 233, 6, 8),
(234, 234, 8, 16),
(235, 235, 7, 7),
(236, 236, 1, 4),
(237, 237, 4, 11),
(238, 238, 7, 16),
(239, 239, 3, 16),
(240, 240, 4, 10),
(241, 241, 8, 6),
(242, 242, 6, 9),
(243, 243, 7, 23),
(244, 244, 8, 12),
(245, 245, 8, 16),
(246, 246, 7, 5),
(247, 247, 6, 3),
(248, 248, 5, 11),
(249, 249, 8, 4),
(250, 250, 1, 6),
(251, 251, 7, 6),
(252, 252, 6, 29),
(253, 253, 3, 3),
(254, 254, 2, 30),
(255, 255, 4, 9),
(256, 256, 6, 17),
(257, 257, 4, 8),
(258, 258, 5, 22),
(259, 259, 8, 11),
(260, 260, 7, 29),
(261, 261, 8, 29),
(262, 262, 3, 26),
(263, 263, 6, 30),
(264, 264, 7, 27),
(265, 265, 2, 11),
(266, 266, 2, 11),
(267, 267, 3, 27),
(268, 268, 1, 13),
(269, 269, 8, 22),
(270, 270, 4, 20),
(271, 271, 3, 19),
(272, 272, 8, 22),
(273, 273, 1, 23),
(274, 274, 8, 9),
(275, 275, 4, 19),
(276, 276, 3, 7),
(277, 277, 8, 28),
(278, 278, 8, 6),
(279, 279, 1, 26),
(280, 280, 8, 17),
(281, 281, 1, 2),
(282, 282, 6, 18),
(283, 283, 4, 5),
(284, 284, 5, 19),
(285, 285, 8, 3),
(286, 286, 5, 26),
(287, 287, 1, 14),
(288, 288, 3, 11),
(289, 289, 8, 5),
(290, 290, 6, 7),
(291, 291, 4, 21),
(292, 292, 8, 7),
(293, 293, 1, 4),
(294, 294, 8, 22),
(295, 295, 6, 5),
(296, 296, 3, 6),
(297, 297, 1, 21),
(298, 298, 3, 3),
(299, 299, 5, 7),
(300, 300, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama_diskon` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `disc` int(11) NOT NULL,
  `lev_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_paket`, `nama_diskon`, `deskripsi`, `disc`, `lev_member`) VALUES
(1, 2, 'Sale!', 'deskripsi sale...', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `masa_berlaku` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `deskripsi`, `harga`, `masa_berlaku`, `gambar`) VALUES
(1, 'Harian', 'deskripsi harian...', 50000, 1, 'images.jpg'),
(2, 'Bulanan', 'deskripsi bulanan...', 300000, 30, 'images1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_hp`, `username`, `password`, `level_member`) VALUES
(1, 'Khoirun Nisa', 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', '081226411177', 'pelanggan_a', 'pelanggan_a', 1),
(2, 'Firda Nurahmatika', 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '081317246901', 'pelanggan_b', 'pelanggan_b', 2),
(3, 'Akmal Maulana', 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '089527493588', 'pelanggan_c', 'pelanggan_c', 3),
(4, 'Sugianto', 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '085703071436', 'pelanggan_d', 'pelanggan_d', 1),
(5, 'Asep Rinjani', 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '083823187145', 'pelanggan_e', 'pelanggan_e', 2),
(6, 'Yusup Bahtiar', 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '083182508858', 'pelanggan_f', 'pelanggan_f', 3),
(7, 'Andrian', 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '087874942478', 'pelanggan_g', 'pelanggan_g', 2),
(8, 'Slamet Riyadi', 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', '089510061710', 'pelanggan_h', 'pelanggan_h', 2),
(9, 'Mila Amelia', 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '085222025446', 'pelanggan_i', 'pelanggan_i', 2),
(10, 'Andre Akbar Maulana', 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '082219180891', 'pelanggan_j', 'pelanggan_j', 1),
(11, 'Sifa Fatonah', 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', '087843221433', 'pelanggan_k', 'pelanggan_k', 3),
(12, 'Amar', 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '083824140973', 'pelanggan_l', 'pelanggan_l', 2),
(13, 'Dinda Lola Nurkhodijah', 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '08979025780', 'pelanggan_m', 'pelanggan_m', 2),
(14, 'Sunenthy', 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '087864462546', 'pelanggan_n', 'pelanggan_n', 2),
(15, 'Maya Darmawan', 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', '083187309277', 'pelanggan_o', 'pelanggan_o', 2),
(16, 'Nunu', 'Kuningan', '082118227240', 'Nunu', 'Kuningan123', 3),
(17, 'Selviya', 'Kuningan', '082118227240', 'Selviya', 'Kuningan123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `stok`, `gambar`, `harga`) VALUES
(1, 'Protein Shake (Vanilla)', 'Protein shake F1 dari herbalife isi 550grm ', 99, 'WhatsApp_Image_2025-12-11_at_07_14_04.jpeg', 480000),
(2, 'Protein Shake ( Coklat)', 'Protein shake F1 dari herbalife isi 550grm', 48, 'WhatsApp_Image_2025-12-11_at_07_14_041.jpeg', 480000),
(3, 'Protein Shake (Choco Mint)', 'Protein shake F1 dari herbalife isi 550grm', 90, 'WhatsApp_Image_2025-12-11_at_07_14_042.jpeg', 480000),
(4, 'Protein Shake (Strawberry)', 'Protein shake F1 dari herbalife isi 550grm', 30, 'WhatsApp_Image_2025-12-11_at_07_14_043.jpeg', 480000),
(5, 'Protein Shake (Cookies and Cream)', 'Protein shake F1 dari herbalife isi 550grm', 50, 'WhatsApp_Image_2025-12-11_at_07_14_044.jpeg', 480000),
(6, 'Baju Jersey Pria (Hitam)', 'Bahan terasa sejuk dan nyaman di kulit, menyerap keringat dan dapat mengeringkan keringat dengan cepat. ', 20, 'WhatsApp_Image_2025-12-11_at_07_08_56.jpeg', 103000),
(7, 'Baju Jersey Pria ( Abu )', 'Bahan terasa sejuk dan nyaman di kulit, menyerap keringat dan dapat mengeringkan keringat dengan cepat.', 20, 'WhatsApp_Image_2025-12-11_at_07_08_561.jpeg', 103000),
(8, 'Baju Jersey Pria ( Hijau Tosca )', 'Bahan terasa sejuk dan nyaman di kulit, menyerap keringat dan dapat mengeringkan keringat dengan cepat.', 20, 'WhatsApp_Image_2025-12-11_at_07_08_562.jpeg', 103000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` varchar(20) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `stat_order` int(11) NOT NULL,
  `pembayaran` text NOT NULL,
  `jenis_trans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `total_bayar`, `ongkir`, `alamat_pengiriman`, `stat_order`, `pembayaran`, `jenis_trans`) VALUES
(1, 13, '2025-10-05', 11527000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(2, 16, '2025-06-12', 6247000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(3, 12, '2025-07-30', 13927000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(4, 9, '2025-08-04', 934000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(5, 9, '2025-10-07', 8647000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(6, 1, '2025-02-11', 110000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(7, 8, '2025-12-05', 487000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(8, 21, '2025-10-14', 5767000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(9, 8, '2025-12-07', 8647000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(10, 17, '2025-08-26', 934000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(11, 2, '2025-09-05', 3847000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(12, 19, '2025-09-02', 2887000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(13, 7, '2025-07-07', 12967000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(14, 11, '2025-10-09', 7687000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(15, 4, '2025-04-30', 2067000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(16, 15, '2025-12-11', 3847000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(17, 4, '2025-11-21', 4807000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(18, 11, '2025-01-04', 6727000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(19, 21, '2025-10-10', 11527000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(20, 20, '2025-03-19', 1447000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(21, 1, '2025-12-10', 12487000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(22, 17, '2025-12-09', 1655000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(23, 2, '2025-06-14', 7207000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(24, 10, '2025-04-11', 934000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(25, 15, '2025-03-05', 12967000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(26, 12, '2025-10-06', 5767000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(27, 1, '2025-02-28', 1552000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(28, 20, '2025-09-29', 2887000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(29, 19, '2025-03-15', 10087000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(30, 5, '2025-12-04', 487000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(31, 15, '2025-08-26', 1758000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(32, 16, '2025-02-08', 12007000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(33, 1, '2025-04-17', 3847000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(34, 16, '2025-02-17', 3097000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(35, 13, '2025-01-11', 13447000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(36, 2, '2025-08-07', 9127000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(37, 2, '2025-04-09', 8647000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(38, 2, '2025-09-04', 12967000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(39, 18, '2025-02-11', 1449000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(40, 8, '2025-04-18', 2887000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(41, 20, '2025-11-24', 3847000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(42, 9, '2025-08-21', 2170000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(43, 21, '2025-04-21', 11047000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(44, 9, '2025-10-30', 14407000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(45, 19, '2025-09-23', 1346000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(46, 4, '2025-11-10', 419000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(47, 19, '2025-09-04', 213000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(48, 11, '2025-03-28', 6247000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(49, 17, '2025-07-03', 625000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(50, 17, '2025-01-19', 316000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(51, 20, '2025-04-10', 12967000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(52, 19, '2025-07-21', 10567000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(53, 14, '2025-05-10', 9607000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(54, 17, '2025-09-09', 1758000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(55, 16, '2025-12-01', 1655000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(56, 9, '2025-11-26', 14407000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(57, 20, '2025-09-23', 11527000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(58, 7, '2025-06-28', 2994000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(59, 4, '2025-09-01', 1037000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(60, 20, '2025-03-17', 2582000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(61, 5, '2025-01-02', 1037000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(62, 3, '2025-09-17', 5287000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(63, 11, '2025-08-08', 2376000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(64, 15, '2025-06-18', 1861000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(65, 13, '2025-09-14', 1655000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(66, 1, '2025-03-04', 13927000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(67, 9, '2025-10-21', 8647000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(68, 7, '2025-09-06', 316000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(69, 10, '2025-07-23', 487000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(70, 21, '2025-08-07', 3847000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(71, 12, '2025-04-26', 2479000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(72, 8, '2025-04-17', 1037000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(73, 7, '2025-10-31', 1655000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(74, 18, '2025-06-02', 967000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(75, 12, '2025-03-16', 522000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(76, 17, '2025-03-07', 1552000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(77, 5, '2025-12-02', 1927000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(78, 20, '2025-11-27', 4327000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(79, 17, '2025-01-13', 967000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(80, 8, '2025-03-02', 7687000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(81, 3, '2025-08-18', 9127000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(82, 20, '2025-06-29', 967000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(83, 15, '2025-02-08', 8167000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(84, 9, '2025-08-22', 9607000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(85, 3, '2025-11-03', 2685000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(86, 8, '2025-09-02', 6727000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(87, 4, '2025-09-11', 419000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(88, 7, '2025-03-22', 4327000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(89, 16, '2025-12-14', 3847000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(90, 3, '2025-05-06', 7207000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(91, 13, '2025-06-04', 2891000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(92, 2, '2025-03-12', 1927000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(93, 1, '2025-02-16', 2170000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(94, 19, '2025-06-11', 12487000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(95, 9, '2025-01-07', 831000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(96, 2, '2025-01-07', 13447000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(97, 15, '2025-01-07', 2067000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(98, 15, '2025-01-24', 1758000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(99, 9, '2025-08-27', 522000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(100, 16, '2025-11-28', 3847000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(101, 16, '2025-03-15', 728000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(102, 8, '2025-12-14', 12007000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(103, 2, '2025-10-25', 316000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(104, 16, '2025-11-30', 2067000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(105, 18, '2025-08-20', 1243000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(106, 2, '2025-11-13', 316000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(107, 3, '2025-02-23', 3847000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(108, 17, '2025-01-04', 487000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(109, 8, '2025-12-02', 9127000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(110, 13, '2025-04-03', 5287000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(111, 9, '2025-09-20', 1552000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(112, 21, '2025-04-09', 12487000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(113, 7, '2025-11-01', 1243000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(114, 21, '2025-02-23', 1964000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(115, 1, '2025-01-01', 831000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(116, 13, '2025-01-11', 8647000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(117, 14, '2025-07-09', 10567000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(118, 1, '2025-02-21', 13927000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(119, 3, '2025-09-06', 9127000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(120, 11, '2025-11-14', 2891000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(121, 11, '2025-06-20', 487000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(122, 2, '2025-09-30', 1655000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(123, 14, '2025-01-22', 487000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(124, 13, '2025-04-18', 110000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(125, 20, '2025-02-15', 6727000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(126, 1, '2025-11-28', 2407000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(127, 18, '2025-12-12', 4327000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(128, 6, '2025-11-20', 5767000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(129, 15, '2025-10-12', 6247000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(130, 3, '2025-10-18', 3847000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(131, 7, '2025-08-29', 1964000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(132, 2, '2025-09-14', 1552000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(133, 5, '2025-12-03', 487000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(134, 20, '2025-06-28', 10087000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(135, 21, '2025-04-11', 13927000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(136, 8, '2025-12-04', 12967000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(137, 4, '2025-06-07', 3367000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(138, 6, '2025-01-03', 9607000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(139, 2, '2025-01-04', 1758000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(140, 3, '2025-03-11', 7207000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(141, 14, '2025-03-16', 1346000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(142, 3, '2025-08-14', 625000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(143, 19, '2025-12-08', 3847000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(144, 12, '2025-05-18', 1964000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(145, 14, '2025-05-15', 12007000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(146, 9, '2025-07-02', 1655000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(147, 10, '2025-07-06', 110000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(148, 12, '2025-10-25', 1964000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(149, 20, '2025-03-20', 7687000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(150, 8, '2025-07-27', 10567000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(151, 2, '2025-09-12', 7687000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(152, 13, '2025-07-08', 1243000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(153, 9, '2025-12-13', 7207000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(154, 1, '2025-03-06', 213000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(155, 13, '2025-09-06', 9607000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(156, 17, '2025-08-01', 2994000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(157, 12, '2025-03-16', 728000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(158, 3, '2025-04-19', 7687000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(159, 11, '2025-08-30', 522000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(160, 7, '2025-05-04', 5767000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(161, 18, '2025-04-12', 213000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(162, 6, '2025-07-23', 2479000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(163, 5, '2025-03-01', 12487000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(164, 9, '2025-04-18', 1964000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(165, 21, '2025-09-18', 7687000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(166, 5, '2025-02-24', 2994000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(167, 19, '2025-12-08', 2479000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(168, 11, '2025-01-15', 10087000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(169, 18, '2025-09-11', 110000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(170, 5, '2025-09-02', 12007000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(171, 13, '2025-04-29', 2376000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(172, 14, '2025-11-24', 9127000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(173, 16, '2025-07-17', 1140000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(174, 17, '2025-06-21', 1037000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(175, 19, '2025-06-22', 1655000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(176, 8, '2025-07-28', 13927000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(177, 18, '2025-09-13', 9607000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(178, 1, '2025-12-14', 11527000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(179, 7, '2025-06-15', 1861000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(180, 21, '2025-09-12', 3367000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(181, 20, '2025-04-28', 625000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(182, 12, '2025-09-08', 9607000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(183, 1, '2025-05-16', 12007000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(184, 2, '2025-05-19', 2685000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(185, 18, '2025-05-27', 13447000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(186, 20, '2025-04-07', 2479000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(187, 19, '2025-04-09', 4807000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(188, 3, '2025-07-09', 14407000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(189, 2, '2025-05-23', 13447000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(190, 20, '2025-04-26', 1447000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(191, 4, '2025-07-31', 316000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(192, 12, '2025-12-05', 2788000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(193, 1, '2025-04-05', 2994000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(194, 13, '2025-08-18', 2685000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(195, 11, '2025-07-10', 1449000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(196, 11, '2025-11-29', 10567000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(197, 8, '2025-10-08', 1449000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(198, 6, '2025-10-19', 4807000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(199, 2, '2025-11-14', 10087000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(200, 14, '2025-01-24', 1140000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(201, 18, '2025-04-09', 12967000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(202, 15, '2025-03-04', 522000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(203, 16, '2025-10-28', 11527000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(204, 11, '2025-08-04', 5767000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(205, 13, '2025-08-29', 12487000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(206, 15, '2025-06-07', 11527000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(207, 4, '2025-04-11', 13447000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(208, 20, '2025-09-11', 1346000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(209, 2, '2025-09-10', 213000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(210, 17, '2025-09-11', 7207000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(211, 6, '2025-01-22', 831000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(212, 20, '2025-03-11', 12967000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(213, 20, '2025-06-26', 2376000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(214, 21, '2025-07-01', 1449000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(215, 10, '2025-04-24', 831000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(216, 6, '2025-03-16', 1140000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(217, 4, '2025-05-12', 11047000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(218, 14, '2025-05-29', 1861000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(219, 6, '2025-05-04', 11047000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(220, 10, '2025-05-22', 2479000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(221, 10, '2025-04-07', 2407000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(222, 20, '2025-08-03', 4807000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(223, 13, '2025-08-28', 7687000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(224, 5, '2025-07-08', 2273000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(225, 7, '2025-07-06', 1758000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(226, 1, '2025-06-29', 2170000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(227, 8, '2025-07-19', 934000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(228, 11, '2025-06-23', 7207000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(229, 8, '2025-05-06', 12007000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(230, 4, '2025-09-09', 1655000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(231, 13, '2025-09-18', 13447000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(232, 17, '2025-07-31', 1346000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(233, 5, '2025-08-13', 831000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(234, 3, '2025-08-30', 1655000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(235, 10, '2025-05-16', 728000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(236, 1, '2025-02-18', 1927000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(237, 11, '2025-08-15', 5287000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(238, 14, '2025-01-10', 1655000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(239, 18, '2025-01-29', 7687000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(240, 14, '2025-05-02', 4807000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(241, 10, '2025-10-04', 625000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(242, 14, '2025-05-12', 934000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(243, 2, '2025-04-22', 2376000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(244, 2, '2025-03-31', 1243000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(245, 14, '2025-05-02', 1655000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(246, 6, '2025-02-21', 522000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(247, 19, '2025-07-02', 316000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(248, 16, '2025-01-13', 5287000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(249, 2, '2025-09-11', 419000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(250, 14, '2025-09-23', 2887000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(251, 9, '2025-07-29', 625000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(252, 15, '2025-03-31', 2994000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(253, 11, '2025-02-12', 1447000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(254, 11, '2025-12-10', 14407000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(255, 1, '2025-05-15', 4327000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan,Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(256, 17, '2025-06-12', 1758000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(257, 16, '2025-07-29', 3847000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(258, 17, '2025-07-27', 10567000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(259, 2, '2025-07-20', 1140000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(260, 9, '2025-05-14', 2994000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(261, 11, '2025-06-06', 2994000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(262, 11, '2025-07-07', 12487000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(263, 4, '2025-10-31', 3097000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(264, 15, '2025-11-21', 2788000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(265, 7, '2025-04-20', 5287000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(266, 16, '2025-12-06', 5287000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(267, 16, '2025-02-12', 12967000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(268, 19, '2025-08-30', 6247000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(269, 16, '2025-01-28', 2273000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(270, 7, '2025-01-26', 9607000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(271, 6, '2025-03-20', 9127000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(272, 13, '2025-07-14', 2273000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(273, 12, '2025-12-10', 11047000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(274, 7, '2025-05-08', 934000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(275, 8, '2025-07-20', 9127000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(276, 19, '2025-03-25', 3367000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(277, 5, '2025-07-20', 2891000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(278, 4, '2025-02-10', 625000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(279, 20, '2025-02-07', 12487000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(280, 18, '2025-12-14', 1758000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(281, 7, '2025-03-18', 967000, 7000, 'Desa Cigugur, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(282, 5, '2025-08-09', 1861000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(283, 3, '2025-03-26', 2407000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(284, 19, '2025-01-11', 9127000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(285, 13, '2025-08-07', 316000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(286, 10, '2025-01-02', 12487000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(287, 12, '2025-04-28', 6727000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(288, 4, '2025-04-12', 5287000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(289, 14, '2025-09-24', 522000, 7000, 'Desa Cisantana,Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(290, 13, '2025-12-09', 728000, 7000, 'Desa Cipari, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(291, 19, '2025-10-15', 10087000, 7000, '', 4, 'thread-137261969-78627520142079263361.png', 1),
(292, 21, '2025-01-19', 728000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(293, 4, '2025-11-05', 1927000, 7000, 'Desa Gunungkeling, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(294, 6, '2025-04-05', 2273000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(295, 3, '2025-03-30', 522000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(296, 10, '2025-04-20', 2887000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(297, 8, '2025-06-23', 10087000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1),
(298, 6, '2025-01-17', 1447000, 7000, 'Desa Gunungkeling, Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(299, 12, '2025-03-06', 3367000, 7000, 'Desa Cisantana, Kecamatan Cigugur, Kabupaten Kuningan, Provinsi Jawa Barat', 4, 'thread-137261969-78627520142079263361.png', 1),
(300, 16, '2025-02-03', 831000, 7000, 'Kuningan', 4, 'thread-137261969-78627520142079263361.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `no_hp` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `no_hp`, `alamat`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', '089987654323', 'Kuningan', 'admin', 'admin', 1),
(2, 'Pemilik', '08991232123', 'Kuningan', 'pemilik', 'pemilik', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `detail_paket`
--
ALTER TABLE `detail_paket`
  ADD PRIMARY KEY (`id_detail_paket`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_paket`
--
ALTER TABLE `detail_paket`
  MODIFY `id_detail_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
