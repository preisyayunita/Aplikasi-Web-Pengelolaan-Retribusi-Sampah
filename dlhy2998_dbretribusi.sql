-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2025 at 02:09 PM
-- Server version: 10.11.14-MariaDB-cll-lve
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlhy2998_dbretribusi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `sub_kategori` varchar(100) NOT NULL,
  `tarif_bulanan` int(100) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `telp` varchar(255) NOT NULL,
  `validasi` int(100) NOT NULL,
  `foto_bukti` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `user_id`, `nama_pelanggan`, `desa`, `kecamatan`, `kategori`, `sub_kategori`, `tarif_bulanan`, `tanggal`, `telp`, `validasi`, `foto_bukti`, `created_at`, `updated_at`) VALUES
(72, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2024-10-21', '089604400612', 1, 'IMG_20250603_080836.jpg', '2024-11-24 09:37:57', '2025-06-02 17:26:17'),
(82, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2024-11-25', '089604400612', 0, '', '2024-11-25 13:59:18', '2025-06-01 14:59:22'),
(88, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2024-11-26', '089604400612', 0, '', '2024-11-25 23:27:02', '2025-02-03 15:01:59'),
(90, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '0821888832471', 1, '', '2024-11-25 23:27:02', '2025-02-17 04:04:32'),
(91, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2024-11-26', '0821888832471', 1, 'IMG_20240905_103107.jpg', '2024-11-25 23:27:02', '2024-11-26 09:55:19'),
(92, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085217724686', 1, 'IMG_20240905_103108.jpg', '2024-11-25 23:27:02', '2024-11-26 02:25:22'),
(93, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2024-11-26', '085217724686', 0, '', '2024-11-25 23:27:02', '2024-11-26 09:55:36'),
(94, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '0821888832471', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(95, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '089604400612', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(96, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085300087658', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(97, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085283746500', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(98, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2024-11-26', '085253576599', 0, '', '2024-11-25 23:27:02', '2025-06-01 16:29:51'),
(99, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085283746500', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(100, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085217724686', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(101, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '0821888832471', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(102, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '087895107644', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(103, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '089604400612', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(104, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '089604400612', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(105, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085253576599', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(106, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085253576599', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(107, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '087765398823', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(108, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '0821888832471', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(109, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '089604400612', 0, '', '2024-11-25 23:27:02', '2025-06-01 16:38:29'),
(110, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085345771981', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(111, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085283746500', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(112, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-11-26', '085217724686', 0, '', '2024-11-25 23:27:02', '2024-11-25 23:27:02'),
(113, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2024-11-26', '085283746500', 0, '', '2024-11-25 23:27:02', '2024-11-26 09:55:57'),
(115, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2024-12-15', '089604400612', 0, '', '2024-12-15 13:27:39', '2025-06-01 15:06:15'),
(116, 11, 'Jessica Karisoh', 'Tounelet', 'Sonder', 'Tempat Usaha', 'Rumah Makan', 200000, '2024-12-15', '082188832471', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(117, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '0821888832471', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(118, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2024-12-15', '0821888832471', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(119, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085217724686', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(120, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2024-12-15', '085217724686', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(121, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '0821888832471', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(122, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '089604400612', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(123, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085300087658', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(124, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085283746500', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(125, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2024-12-15', '085253576599', 0, '', '2024-12-15 13:27:39', '2025-06-01 16:29:51'),
(126, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085283746500', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(127, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085217724686', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(128, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '0821888832471', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(129, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '087895107644', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(130, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '089604400612', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(131, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '089604400612', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(132, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085253576599', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(133, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085253576599', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(134, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '087765398823', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(135, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '0821888832471', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(136, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '089604400612', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(137, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085345771981', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(138, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085283746500', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(139, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2024-12-15', '085217724686', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(140, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2024-12-15', '085283746500', 0, '', '2024-12-15 13:27:39', '2024-12-15 13:27:39'),
(143, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-02-03', '089604400612', 0, '', '2025-02-03 12:28:02', '2025-06-01 15:51:47'),
(144, 11, 'Jessica Karisoh', 'Tounelet', 'Sonder', 'Tempat Usaha', 'Rumah Makan', 200000, '2025-02-03', '082188832471', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(145, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '0821888832471', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(146, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-02-03', '0821888832471', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(147, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085217724686', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(148, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-02-03', '085217724686', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(149, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '0821888832471', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(150, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '089604400612', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(151, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085300087658', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(152, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085283746500', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(153, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-02-03', '085253576599', 0, '', '2025-02-03 12:28:02', '2025-06-01 16:29:51'),
(154, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085283746500', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(155, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085217724686', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(156, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '0821888832471', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(157, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '087895107644', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(158, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '089604400612', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(159, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '089604400612', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(160, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085253576599', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(161, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085253576599', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(162, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '087765398823', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(163, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '0821888832471', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(164, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '089604400612', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(165, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085345771981', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(166, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085283746500', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(167, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-02-03', '085217724686', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(168, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2025-02-03', '085283746500', 0, '', '2025-02-03 12:28:02', '2025-02-03 12:28:02'),
(172, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-03-01', '089604400612', 0, '', '2025-02-28 17:00:02', '2025-06-01 15:51:16'),
(173, 11, 'Jessica Karisoh', 'Tounelet', 'Sonder', 'Tempat Usaha', 'Rumah Makan', 200000, '2025-03-01', '082188832471', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(174, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '089604400612', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(175, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '0821888832471', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(176, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-03-01', '0821888832471', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(177, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085217724686', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(178, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-03-01', '085217724686', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(179, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '0821888832471', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(180, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '089604400612', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(181, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085300087658', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(182, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085283746500', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(183, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-03-01', '085253576599', 0, '', '2025-02-28 17:00:02', '2025-06-01 16:31:20'),
(184, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085283746500', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(185, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085217724686', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(186, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '0821888832471', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(187, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '087895107644', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(188, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '089604400612', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(189, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '089604400612', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(190, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085253576599', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(191, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085253576599', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(192, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '087765398823', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(193, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '0821888832471', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(194, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '089604400612', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(195, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085345771981', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(196, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085283746500', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(197, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-03-01', '085217724686', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(198, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2025-03-01', '085283746500', 0, '', '2025-02-28 17:00:02', '2025-02-28 17:00:02'),
(201, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-04-01', '089604400612', 0, '', '2025-03-31 17:00:02', '2025-06-01 15:51:16'),
(202, 11, 'Jessica Karisoh', 'Tounelet', 'Sonder', 'Tempat Usaha', 'Rumah Makan', 200000, '2025-04-01', '082188832471', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(203, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '089604400612', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(204, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '0821888832471', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(205, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-04-01', '0821888832471', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(206, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085217724686', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(207, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-04-01', '085217724686', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(208, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '0821888832471', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(209, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '089604400612', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(210, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085300087658', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(211, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085283746500', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(212, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-04-01', '085253576599', 0, '', '2025-03-31 17:00:02', '2025-06-01 16:31:20'),
(213, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085283746500', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(214, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085217724686', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(215, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '0821888832471', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(216, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '087895107644', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(217, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '089604400612', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(218, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '089604400612', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(219, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085253576599', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(220, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085253576599', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(221, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '087765398823', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(222, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '0821888832471', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(223, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '089604400612', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(224, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085345771981', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(225, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085283746500', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(226, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-04-01', '085217724686', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(227, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2025-04-01', '085283746500', 0, '', '2025-03-31 17:00:02', '2025-03-31 17:00:02'),
(230, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-05-01', '089604400612', 0, '', '2025-04-30 17:00:02', '2025-06-01 15:51:16'),
(231, 11, 'Jessica Karisoh', 'Tounelet', 'Sonder', 'Tempat Usaha', 'Rumah Makan', 200000, '2025-05-01', '082188832471', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(232, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '089604400612', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(233, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '0821888832471', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(234, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-05-01', '0821888832471', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(235, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085217724686', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(236, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-05-01', '085217724686', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(237, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '0821888832471', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(238, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '089604400612', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(239, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085300087658', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(240, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085283746500', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(241, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-05-01', '085253576599', 0, '', '2025-04-30 17:00:02', '2025-06-01 16:31:20'),
(242, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085283746500', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(243, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085217724686', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(244, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '0821888832471', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(245, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '087895107644', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(246, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '089604400612', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(247, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '089604400612', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(248, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085253576599', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(249, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085253576599', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(250, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '087765398823', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(251, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '0821888832471', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(252, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '089604400612', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(253, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085345771981', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(254, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085283746500', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(255, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-05-01', '085217724686', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(256, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2025-05-01', '085283746500', 0, '', '2025-04-30 17:00:02', '2025-04-30 17:00:02'),
(259, 12, 'Manorek Lempas', 'Kamanga Dua', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-06-01', '089604400612', 0, '', '2025-05-31 17:00:02', '2025-06-01 15:51:16'),
(260, 11, 'Jessica Karisoh', 'Tounelet', 'Sonder', 'Tempat Usaha', 'Rumah Makan', 200000, '2025-06-01', '082188832471', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(261, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '089604400612', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(262, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '0821888832471', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(263, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-06-01', '0821888832471', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(264, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085217724686', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(265, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-06-01', '085217724686', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(266, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '0821888832471', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(267, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '089604400612', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(268, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085300087658', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(269, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085283746500', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(270, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-06-01', '085253576599', 0, '', '2025-05-31 17:00:02', '2025-06-01 16:31:20'),
(271, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085283746500', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(272, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085217724686', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(273, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '0821888832471', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(274, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '087895107644', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(275, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '089604400612', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(276, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '089604400612', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(277, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085253576599', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(278, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085253576599', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(279, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '087765398823', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(280, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '0821888832471', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(281, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '089604400612', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(282, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085345771981', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(283, 46, 'Johni Wowor', 'Talikuran', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085283746500', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(284, 47, 'Ari Tan Kembau', 'Kiawa Satu', 'Kawangkoan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-06-01', '085217724686', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(285, 48, 'Toko Kiawa', 'Uner', 'Kawangkoan Utara', 'Tempat Usaha', 'Toko', 75000, '2025-06-01', '085283746500', 0, '', '2025-05-31 17:00:02', '2025-05-31 17:00:02'),
(287, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '089604400612', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(288, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '0821888832471', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(289, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-07-01', '0821888832471', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(290, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085217724686', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(291, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-07-01', '085217724686', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(292, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '0821888832471', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(293, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '089604400612', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(294, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085300087658', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(295, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085283746500', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(296, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-07-01', '085253576599', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(297, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085283746500', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(298, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085217724686', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(299, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '0821888832471', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(300, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '087895107644', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(301, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '089604400612', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(302, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '089604400612', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(303, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085253576599', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(304, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085253576599', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(305, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '087765398823', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(306, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '0821888832471', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(307, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '089604400612', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(308, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-07-01', '085345771981', 0, '', '2025-06-30 17:00:02', '2025-06-30 17:00:02'),
(309, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '089604400612', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(310, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '0821888832471', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(311, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-08-01', '0821888832471', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(312, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085217724686', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(313, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-08-01', '085217724686', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(314, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '0821888832471', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(315, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '089604400612', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(316, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085300087658', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(317, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085283746500', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(318, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-08-01', '085253576599', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(319, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085283746500', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(320, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085217724686', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(321, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '0821888832471', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(322, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '087895107644', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(323, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '089604400612', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(324, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '089604400612', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(325, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085253576599', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(326, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085253576599', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(327, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '087765398823', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(328, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '0821888832471', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(329, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '089604400612', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(330, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-08-01', '085345771981', 0, '', '2025-07-31 17:00:02', '2025-07-31 17:00:02'),
(331, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '089604400612', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(332, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '0821888832471', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(333, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-09-01', '0821888832471', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(334, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085217724686', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(335, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-09-01', '085217724686', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(336, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '0821888832471', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(337, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '089604400612', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(338, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085300087658', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(339, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085283746500', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(340, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-09-01', '085253576599', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(341, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085283746500', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(342, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085217724686', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(343, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '0821888832471', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(344, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '087895107644', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(345, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '089604400612', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(346, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '089604400612', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(347, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085253576599', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(348, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085253576599', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(349, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '087765398823', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(350, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '0821888832471', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(351, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '089604400612', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(352, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-09-01', '085345771981', 0, '', '2025-08-31 17:00:02', '2025-08-31 17:00:02'),
(353, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '089604400612', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(354, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '0821888832471', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(355, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-10-01', '0821888832471', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(356, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085217724686', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(357, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-10-01', '085217724686', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(358, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '0821888832471', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(359, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '089604400612', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(360, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085300087658', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(361, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085283746500', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(362, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-10-01', '085253576599', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(363, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085283746500', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(364, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085217724686', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(365, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '0821888832471', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(366, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '087895107644', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(367, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '089604400612', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(368, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '089604400612', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(369, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085253576599', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(370, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085253576599', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(371, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '087765398823', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(372, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '0821888832471', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(373, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '089604400612', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(374, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-10-01', '085345771981', 0, '', '2025-09-30 17:00:02', '2025-09-30 17:00:02'),
(375, 22, 'Tamir Senduk', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '089604400612', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(376, 23, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '0821888832471', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(377, 25, 'RM. VICTORI', 'Roong', 'Tondano Barat', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000, '2025-11-01', '0821888832471', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(378, 26, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085217724686', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(379, 28, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000, '2025-11-01', '085217724686', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02');
INSERT INTO `data_pelanggan` (`id`, `user_id`, `nama_pelanggan`, `desa`, `kecamatan`, `kategori`, `sub_kategori`, `tarif_bulanan`, `tanggal`, `telp`, `validasi`, `foto_bukti`, `created_at`, `updated_at`) VALUES
(380, 29, 'Lontaan Jefran', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '0821888832471', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(381, 30, 'Truli Koto', 'Tataaran I', 'Tondano Selatan', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '089604400612', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(382, 31, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085300087658', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(383, 32, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085283746500', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(384, 33, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Tempat Usaha', 'Toko', 75000, '2025-11-01', '085253576599', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(385, 34, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085283746500', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(386, 35, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085217724686', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(387, 36, 'Engky Toar', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '0821888832471', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(388, 37, 'Kezia', 'Koyawas', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '087895107644', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(389, 38, 'Mike Oroh', 'Lowian', 'Langowan Barat', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '089604400612', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(390, 39, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '089604400612', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(391, 40, 'Kel. Singal - Kumontoy', 'Paslaten', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085253576599', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(392, 41, 'Endey Wowor', 'Talikuran', 'Remboken', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085253576599', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(393, 42, 'Lumi Rusdiana', 'Pineleng Satu', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '087765398823', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(394, 43, 'Jein', 'Pineleng Dua', 'Pineleng', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '0821888832471', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(395, 44, 'Roni Tampi', 'Liba', 'Tompaso', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '089604400612', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02'),
(396, 45, 'Enggo Mandang', 'Leilem', 'Sonder', 'Rumah Tangga', 'Rumah Tinggal', 30000, '2025-11-01', '085345771981', 0, '', '2025-10-31 17:00:02', '2025-10-31 17:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori_retribusi` varchar(255) NOT NULL,
  `nominal` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_retribusi`, `nominal`, `keterangan`) VALUES
(1, 'Rumah Tinggal', 30000, 'Rumah Tangga'),
(2, 'Tempat Usaha', 150000, 'Rumah Kost / Asrama'),
(3, 'Tempat Usaha', 750000, 'Penginapan/Wisma, Losmen, Cottage, Resort, dll'),
(4, 'Tempat Usaha', 1000000, 'Hotel Melati'),
(5, 'Tempat Usaha', 1500000, 'Hotel Bintang I'),
(6, 'Tempat Usaha', 2000000, 'Hotel Bintang II'),
(7, 'Tempat Usaha', 3000000, 'Hotel Bintang III'),
(8, 'Tempat Usaha', 5000000, 'Hotel Bintang IV'),
(9, 'Tempat Usaha', 6000000, 'Hotel Bintang V'),
(10, 'Tempat Usaha', 2000000, 'Restoran'),
(11, 'Tempat Usaha', 200000, 'Rumah Makan'),
(12, 'Tempat Usaha', 150000, 'Pedagang Kaki Lima'),
(13, 'Tempat Usaha', 100000, 'Apotek'),
(14, 'Tempat Usaha', 75000, 'Tempat Praktik Dokter'),
(15, 'Tempat Usaha', 200000, 'Klinik / Laboratorium'),
(16, 'Tempat Usaha', 350000, 'Gudang Kurang dari 500m2'),
(17, 'Tempat Usaha', 500000, 'Gudang Lebih dari 500m2'),
(18, 'Tempat Hiburan', 150000, 'Gelanggang Olahraga'),
(19, 'Tempat Usaha', 75000, 'Kantor Perusahaan Bangunan Luas Kurang dari 75 m2'),
(20, 'Tempat Usaha', 150000, 'Kantor Perusahaan Bangunan Luas Lebih dari 75 m2'),
(21, 'Tempat Usaha', 75000, 'Toko'),
(22, 'Tempat Usaha', 50000, 'Warung'),
(23, 'Tempat Usaha', 300000, 'Swalayan / Minimarket'),
(24, 'Tempat Usaha', 40000, 'Salon, Pangkas Rambut, dan Tukang Jahit'),
(25, 'Tempat Usaha', 200000, 'Pub, Karaoke, Diskotik'),
(26, 'Tempat Usaha', 60000, 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2'),
(27, 'Tempat Usaha', 150000, 'Tempat Cuci / Service / Salon Mobil'),
(28, 'Tempat Usaha', 200000, 'Pabrik Kecil'),
(29, 'Tempat Usaha', 500000, 'Pabrik Besar'),
(30, 'Tempat Layanan', 300000, 'Sekolah/Perguruan Tinggi Jumlah Siswa kurang dari 200 Siswa'),
(31, 'Tempat Layanan', 600000, 'Sekolah/Perguruan Tinggi Jumlah Siswa lebih dari 200 Siswa'),
(68, 'Rumah Tangga', 30000, 'Rumah Semi Permanen Bertingkat');

-- --------------------------------------------------------

--
-- Table structure for table `member_pelanggan`
--

CREATE TABLE `member_pelanggan` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `validasi` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `pbb` varchar(255) NOT NULL,
  `objek_retribusi` varchar(255) NOT NULL,
  `kat_retribusi` varchar(255) NOT NULL,
  `biaya_retribusi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_pelanggan`
--

INSERT INTO `member_pelanggan` (`id`, `user_id`, `validasi`, `nama`, `alamat`, `kecamatan`, `desa`, `telp`, `ktp`, `pbb`, `objek_retribusi`, `kat_retribusi`, `biaya_retribusi`) VALUES
(31, 22, 1, 'Tamir Senduk', 'Jaga I', 'Tondano Timur', 'Ranowangko', '089604400612', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(32, 23, 1, 'Weni Paat', 'Ranowangko', 'Tondano Timur', 'Ranowangko', '0821888832471', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(33, 24, 0, 'RM. AL BAROKA', 'Jalan Raya Boulevard', 'Tondano Barat', 'Roong', '089604400612', '', '', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000),
(34, 25, 1, 'RM. VICTORI', 'Jalan Raya Boulevard', 'Tondano Barat', 'Roong', '0821888832471', '', '', 'Tempat Usaha', 'Pedagang Kaki Lima', 150000),
(35, 26, 1, 'Nita Mantu', 'Tounkuramber', 'Tondano Barat', 'Tounkuramber', '085217724686', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(36, 27, 0, 'Jefri Kambe', 'Wawalintoan', 'Tondano Barat', 'Wawalintouan', '085217724686', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(37, 28, 1, 'DAMAI MOTOR', 'Ranowangko', 'Tondano Timur', 'Ranowangko', '085217724686', '', '', 'Tempat Usaha', 'Bengkel / Tempat Reparasi Kendaraan Roda 4 dan Roda 2', 60000),
(38, 29, 1, 'Lontaan Jefran', 'Tataaran', 'Tondano Selatan', 'Tataaran I', '0821888832471', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(39, 30, 1, 'Truli Koto', 'Tataaran', 'Tondano Selatan', 'Tataaran I', '089604400612', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(40, 31, 1, 'Indri Maki', 'Waleure', 'Langowan Timur', 'Waleure', '085300087658', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(41, 32, 1, 'Salon Moudy', 'Waleure', 'Langowan Timur', 'Waleure', '085283746500', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(42, 33, 1, 'Meylan Tamunu', 'Sendangan', 'Tompaso', 'Sendangan', '085253576599', '', '', 'Tempat Usaha', 'Toko', 75000),
(43, 34, 1, 'Kumolontang Sumilat', 'Walantakan', 'Langowan Utara', 'Walantakan', '085283746500', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(44, 35, 1, 'Soni Makawimbang', 'Walantakan', 'Langowan Utara', 'Walantakan', '085217724686', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(45, 36, 1, 'Engky Toar', 'Langowan, koyowas', 'Langowan Barat', 'Koyawas', '0821888832471', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(46, 37, 1, 'Kezia', 'Koyowas', 'Langowan Barat', 'Koyawas', '087895107644', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(47, 38, 1, 'Mike Oroh', 'lowian', 'Langowan Barat', 'Lowian', '089604400612', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(48, 39, 1, 'Deni Mailangkay', 'Wolaang', 'Langowan Timur', 'Wolaang', '089604400612', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(49, 40, 1, 'Kel. Singal - Kumontoy', 'remboken', 'Remboken', 'Paslaten', '085253576599', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(50, 41, 1, 'Endey Wowor', 'remboken', 'Remboken', 'Talikuran', '085253576599', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(51, 42, 1, 'Lumi Rusdiana', 'Jalan Raya Pineleng', 'Pineleng', 'Pineleng Satu', '087765398823', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(52, 43, 1, 'Jein', 'Pineleng', 'Pineleng', 'Pineleng Dua', '0821888832471', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(53, 44, 1, 'Roni Tampi', 'Tompaso', 'Tompaso', 'Liba', '089604400612', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000),
(54, 45, 1, 'Enggo Mandang', 'Sonder', 'Sonder', 'Leilem', '085345771981', '', '', 'Rumah Tangga', 'Rumah Tinggal', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `objek_retribusi`
--

CREATE TABLE `objek_retribusi` (
  `id` int(11) NOT NULL,
  `nama_objek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objek_retribusi`
--

INSERT INTO `objek_retribusi` (`id`, `nama_objek`) VALUES
(1, 'Rumah Tangga'),
(2, 'Tempat Usaha'),
(3, 'Tempat Layanan'),
(4, 'Tempat Hiburan');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`id`, `email`, `token`, `created_at`) VALUES
(2, 'xcoud.yy@gmail.com', '482963b67f033c91468a6a6e203e5745fd647ede6788c3e43a787a8fda670a1d0076ff077584f34bb711a03a9e28f87010fb', '2024-11-11 05:46:43'),
(3, 'xcoud.yy@gmail.com', '405027d37a779c27c228d3b86b29697411f7f27f26fc1f7640cc71bf5c32d71cdca49f5a055a7011fd6cb7c2086e81364292', '2024-11-11 06:01:34'),
(4, 'xcoud.yy@gmail.com', 'e726d7559b917ee4e39b5f0c21e2d0e2778ff534ea3e9ec14b546e50c6b7323f45dc4c4ad293d06ac6482f47fa55aaa8e2d9', '2024-11-11 06:14:55'),
(5, 'xcoud.yy@gmail.com', '9d330d3d9a960ada1abd2bebc7a72dcd8b73ba4d50477ea9ad7cf8d8c5f12d5c8851f09d4b179b23807908a840a7960bf19f', '2024-11-11 06:15:49'),
(7, 'xcoud.yy@gmail.com', 'd573799b7386edc286b2ab3820e412c18a2506ed57be9ee278a2e0094a966784ff0fd8175beeb6563c520227ec367dc2b20c', '2024-11-11 06:21:55'),
(9, 'xcoud.yy@gmail.com', '25c93c53444ffb7eb09db4840b545027d839f90f63a413ee1d1e46558b22c060f2bea9dec72353dce7337bbc03bb71877d5b', '2024-11-11 06:58:47'),
(10, 'victorpaat88@yahoo.com', '309497fbc79ebdeb170f57dc0c4688aa17310ab5663ca598ce0cb5c7e66e8fc30f962fb6d38a600126f738fffb24e1bd4c10', '2024-11-19 16:51:35'),
(11, 'victorpaat88@yahoo.com', '257bf4212aa37d73702a90432312d662349d994285dd3d91320fd238d24445cc601a02879a2b8313c4127e05c5f74cbc7341', '2024-11-19 17:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `tujuan` varchar(13) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `delated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `tujuan`, `pesan`, `status`, `created_at`, `updated_at`, `delated_at`) VALUES
(12, '0821888832471', '[ Ini adalah pesan dari Dinas Lingkungan Hidup Kabupaten Minahasa]\r\n\r\nTerima kasih karena anda sudah membayar iuran retribusi sampah!', '1', '2024-11-26 10:29:37', '2024-11-26 10:29:37', '0000-00-00 00:00:00'),
(18, '089643221363', '[ Ini adalah pesan dari Dinas Lingkungan Hidup Kabupaten Minahasa ]\r\n\r\nTerima kasih karena anda sudah membayar iuran retribusi sampah!', '1', '2024-12-15 15:30:42', '2024-12-15 15:30:42', '0000-00-00 00:00:00'),
(24, '089643221363', '*Pesan dari DLH Minahasa*\r\nSelamat malam, di informasikan bahwa besok adalah tanggal pembayaran anda', '1', '2025-02-24 12:53:45', '2025-02-24 12:53:45', '0000-00-00 00:00:00'),
(30, '089643221363', 'test', '1', '2025-06-01 07:08:50', '2025-06-01 07:08:50', '0000-00-00 00:00:00'),
(31, '089643221363', '[ Ini pesan dari Dinas Lingkungan Hidup Kab. Minahasa ]\r\n\r\nTerkait dengan iuran sampah, hari ini anda sudah memasuki masa pembayaran. Jangan lupa untuk membayar tagihan retribusi sampah anda! Terima kasih', '1', '2025-06-01 07:12:43', '2025-06-01 07:12:43', '0000-00-00 00:00:00'),
(32, '089643221363', 'Pesan pemberitahuan!\r\n\r\nAnda memasuki tanggal untuk membayar iuran retribusi sampah. Terima kasih', '1', '2025-06-01 07:15:27', '2025-06-01 07:15:27', '0000-00-00 00:00:00'),
(33, '082188832471', 'Pesan pemberitahuan! Anda memasuki tanggal untuk membayar iuran retribusi sampah. Terima kasih', '1', '2025-06-01 07:20:59', '2025-06-01 07:20:59', '0000-00-00 00:00:00'),
(34, 'Pesan pemberi', 'Pesan pemberitahuan! Anda memasuki tanggal untuk membayar iuran retribusi sampah. Terima kasih', '0', '2025-06-01 13:15:50', '2025-06-01 13:15:50', '0000-00-00 00:00:00'),
(35, '089643221363', 'Pesan pemberitahuan! Anda memasuki tanggal untuk membayar iuran retribusi sampah. Terima kasih', '1', '2025-06-01 13:16:01', '2025-06-01 13:16:01', '0000-00-00 00:00:00'),
(36, '089643221363', 'Pesan pemberitahuan!\r\nAnda memasuki tanggal untuk membayar iuran retribusi sampah. Terima kasih', '1', '2025-06-01 13:18:44', '2025-06-01 13:18:44', '0000-00-00 00:00:00'),
(40, '082188832471', 'hmmm', '1', '2025-06-01 14:01:03', '2025-06-01 14:01:03', '0000-00-00 00:00:00'),
(42, '082188832471', 'oii', '0', '2025-08-08 16:32:37', '2025-08-08 16:32:37', '0000-00-00 00:00:00'),
(43, '089643221363', 'hallo', '0', '2025-08-08 16:33:02', '2025-08-08 16:33:02', '0000-00-00 00:00:00'),
(44, '082188832471', 'hmmmm', '0', '2025-08-10 12:43:12', '2025-08-10 12:43:12', '0000-00-00 00:00:00'),
(45, '089643221363', 'Selamat Pagi\r\nSaya dari x ingin memberitahukan bahwa ...\r\nTerima Kasih', 'success', '2025-09-09 23:50:22', '2025-09-09 23:50:22', '0000-00-00 00:00:00'),
(46, '089643221363', 'Halo', 'success', '2025-09-09 23:50:54', '2025-09-09 23:50:54', '0000-00-00 00:00:00'),
(47, '089643221363', 'halo', 'success', '2025-09-09 23:51:11', '2025-09-09 23:51:11', '0000-00-00 00:00:00'),
(48, '089643221363', 'selamat pagi', 'success', '2025-09-10 00:05:33', '2025-09-10 00:05:33', '0000-00-00 00:00:00'),
(49, '6289643221363', 'selamat pagii', 'success', '2025-09-10 00:08:32', '2025-09-10 00:08:32', '0000-00-00 00:00:00'),
(50, '6289643221363', 'selamat pagi sekali lagi', 'success', '2025-09-10 00:13:20', '2025-09-10 00:13:20', '0000-00-00 00:00:00'),
(51, '089643221363', 'pagi', 'success', '2025-09-10 00:13:39', '2025-09-10 00:13:39', '0000-00-00 00:00:00'),
(52, '082188832471', 'toy, ini test sms gateway', 'success', '2025-09-10 00:17:28', '2025-09-10 00:17:28', '0000-00-00 00:00:00'),
(53, '082188832471', 'Test', 'success', '2025-09-10 02:11:19', '2025-09-10 02:11:19', '0000-00-00 00:00:00'),
(54, '089643221363', 'Pesan test', 'success', '2025-09-10 02:15:47', '2025-09-10 02:15:47', '0000-00-00 00:00:00'),
(55, '082188832471', 'tes', 'success', '2025-09-10 02:17:28', '2025-09-10 02:17:28', '0000-00-00 00:00:00'),
(56, '082188832471', 'why', 'success', '2025-09-27 12:07:20', '2025-09-27 12:07:20', '0000-00-00 00:00:00'),
(57, '089643221363', 'selamat malam', 'success', '2025-11-01 11:35:07', '2025-11-01 11:35:07', '0000-00-00 00:00:00'),
(58, '082188832471', 'tes', 'success', '2025-11-01 11:44:37', '2025-11-01 11:44:37', '0000-00-00 00:00:00'),
(59, '6282188832471', 'teesss', 'success', '2025-11-01 11:52:46', '2025-11-01 11:52:46', '0000-00-00 00:00:00'),
(60, '+628218883247', 'hmmm', 'success', '2025-11-01 11:53:05', '2025-11-01 11:53:05', '0000-00-00 00:00:00'),
(61, '082188832471', 'tesawdawwdas', 'success', '2025-11-01 12:02:31', '2025-11-01 12:02:31', '0000-00-00 00:00:00'),
(62, '082188832471', 'teawdasdawd', 'success', '2025-11-01 12:09:25', '2025-11-01 12:09:25', '0000-00-00 00:00:00'),
(63, '082188832471', 'awdasdawd', 'success', '2025-11-01 12:11:52', '2025-11-01 12:11:52', '0000-00-00 00:00:00'),
(64, '082188832471', 'faesggfnvhbj', 'success', '2025-11-01 12:12:47', '2025-11-01 12:12:47', '0000-00-00 00:00:00'),
(65, '082188832471', 'wadwdawdadw2', 'success', '2025-11-01 12:16:27', '2025-11-01 12:16:27', '0000-00-00 00:00:00'),
(66, '082188832471', 'waddwdawdawwwww', 'success', '2025-11-01 12:16:34', '2025-11-01 12:16:34', '0000-00-00 00:00:00'),
(67, '082188832471', 'tasdfdse', 'success', '2025-11-01 12:22:47', '2025-11-01 12:22:47', '0000-00-00 00:00:00'),
(68, '089643221363', 'wadhakjwdasjkdnawjkdaw', 'success', '2025-11-01 12:23:14', '2025-11-01 12:23:14', '0000-00-00 00:00:00'),
(69, '082188832471', 'awdwdasdtesss', 'error', '2025-11-01 12:37:18', '2025-11-01 12:37:18', '0000-00-00 00:00:00'),
(70, '082188832471', 'dwadawdawdwa', 'success', '2025-11-01 12:38:28', '2025-11-01 12:38:28', '0000-00-00 00:00:00'),
(71, '082188832471', 'halo', 'error', '2025-11-01 12:44:01', '2025-11-01 12:44:01', '0000-00-00 00:00:00'),
(72, '082188832471', 'waesrtfyghj', 'error', '2025-11-01 12:45:01', '2025-11-01 12:45:01', '0000-00-00 00:00:00'),
(73, '082188832471', 'awdwadawdawd', 'error', '2025-11-01 12:46:42', '2025-11-01 12:46:42', '0000-00-00 00:00:00'),
(74, '082188832471', 'oiii', 'error', '2025-11-01 12:48:07', '2025-11-01 12:48:07', '0000-00-00 00:00:00'),
(75, '082188832471', 'awdawdawd', 'success', '2025-11-01 12:49:35', '2025-11-01 12:49:35', '0000-00-00 00:00:00'),
(76, '089643221363', 'helo', 'success', '2025-11-01 12:50:43', '2025-11-01 12:50:43', '0000-00-00 00:00:00'),
(77, '082188832471', 'wadhio', 'success', '2025-11-01 12:53:23', '2025-11-01 12:53:23', '0000-00-00 00:00:00'),
(78, '089643221363', 'tess', 'success', '2025-11-01 12:53:36', '2025-11-01 12:53:36', '0000-00-00 00:00:00'),
(79, '082188832471', 'woii', 'success', '2025-11-01 12:58:01', '2025-11-01 12:58:01', '0000-00-00 00:00:00'),
(80, '089643221363', 'haii', 'success', '2025-11-01 12:58:16', '2025-11-01 12:58:16', '0000-00-00 00:00:00'),
(81, '082188832471', 'haiii', 'success', '2025-11-01 12:59:06', '2025-11-01 12:59:06', '0000-00-00 00:00:00'),
(82, '082188832471', 'adawdasdw', 'success', '2025-11-01 13:00:04', '2025-11-01 13:00:04', '0000-00-00 00:00:00'),
(83, '089643221363', 'sadawdsdwadasdwa', 'success', '2025-11-01 13:00:13', '2025-11-01 13:00:13', '0000-00-00 00:00:00'),
(84, '082188832471', 'heawdaw', 'success', '2025-11-01 13:03:12', '2025-11-01 13:03:12', '0000-00-00 00:00:00'),
(85, '082188832471', 'how', 'success', '2025-11-01 13:23:39', '2025-11-01 13:23:39', '0000-00-00 00:00:00'),
(86, '089643221363', 'hmmm awdasdwdwadasdwad', 'success', '2025-11-01 13:25:29', '2025-11-01 13:25:29', '0000-00-00 00:00:00'),
(87, '082188832471', 'ini pesan tes', 'success', '2025-11-01 13:25:51', '2025-11-01 13:25:51', '0000-00-00 00:00:00'),
(88, '089643221363', 'idk how i can sent this :v', 'success', '2025-11-01 13:27:14', '2025-11-01 13:27:14', '0000-00-00 00:00:00'),
(89, '082188832471', 'haloo hmmm AdaS', 'success', '2025-11-01 13:30:26', '2025-11-01 13:30:26', '0000-00-00 00:00:00'),
(90, '082188832471', 'hai nama saya +_{}:\"#$!!@', 'success', '2025-11-01 13:32:50', '2025-11-01 13:32:50', '0000-00-00 00:00:00'),
(91, '082188832471', '[ Ini pesan dari Dinas Lingkungan Hidup Kab. Minahasa ] Terkait dengan iuran sampah, hari ini anda sudah memasuki masa pembayaran. Jangan lupa untuk membayar tagihan retribusi sampah anda! Terima kasih', 'success', '2025-11-25 12:25:51', '2025-11-25 12:25:51', '0000-00-00 00:00:00'),
(92, '082188832471', '[ Ini pesan dari Dinas Lingkungan Hidup Kab. Minahasa ] Terkait dengan iuran sampah, hari ini anda sudah memasuki masa pembayaran. Jangan lupa untuk membayar tagihan retribusi sampah anda! Terima kasih', 'success', '2025-11-25 12:41:04', '2025-11-25 12:41:04', '0000-00-00 00:00:00'),
(93, '089643221363', 'Pesan pemberitahuan! Anda memasuki tanggal untuk membayar iuran retribusi sampah. Terima kasih', 'success', '2025-11-25 13:23:13', '2025-11-25 13:23:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_desa`
--

INSERT INTO `tbl_desa` (`id`, `nama_desa`, `nama_kecamatan`) VALUES
(1, 'Koya', 'Tondano Selatan'),
(2, 'Maesa Unima', 'Tondano Selatan'),
(3, 'Peleloan', 'Tondano Selatan'),
(4, 'Tataaran I', 'Tondano Selatan'),
(5, 'Tataaran II', 'Tondano Selatan'),
(6, 'Tataaran Patar', 'Tondano Selatan'),
(7, 'Tounsaru', 'Tondano Selatan'),
(8, 'Urongo', 'Tondano Selatan'),
(9, 'Masarang', 'Tondano Barat'),
(10, 'Rerewokan', 'Tondano Barat'),
(11, 'Rinegetan', 'Tondano Barat'),
(12, 'Roong', 'Tondano Barat'),
(13, 'Tounkuramber', 'Tondano Barat'),
(14, 'Tuutu', 'Tondano Barat'),
(15, 'Watulambot', 'Tondano Barat'),
(16, 'Wawalintouan', 'Tondano Barat'),
(17, 'Wewelen', 'Tondano Barat'),
(18, 'Katinggolan', 'Tondano Timur'),
(19, 'Kendis', 'Tondano Timur'),
(20, 'Kiniar', 'Tondano Timur'),
(21, 'Liningaan', 'Tondano Timur'),
(22, 'Luaan', 'Tondano Timur'),
(23, 'Makalonsouw', 'Tondano Timur'),
(24, 'Papakelan', 'Tondano Timur'),
(25, 'Ranowangko', 'Tondano Timur'),
(26, 'Taler', 'Tondano Timur'),
(27, 'Toulour', 'Tondano Timur'),
(28, 'Wengkol', 'Tondano Timur'),
(29, 'Tonsea Lama', 'Tondano Utara'),
(30, 'Kembuan', 'Tondano Utara'),
(31, 'Kembuan Satu', 'Tondano Utara'),
(32, 'Marawas', 'Tondano Utara'),
(33, 'Sasaran', 'Tondano Utara'),
(34, 'Sumalangka', 'Tondano Utara'),
(35, 'Walauwan', 'Tondano Utara'),
(36, 'Kampung Jawa', 'Tondano Utara'),
(37, 'Kaima', 'Remboken'),
(38, 'Kasuratan', 'Remboken'),
(39, 'Leleko', 'Remboken'),
(40, 'Parepei', 'Remboken'),
(41, 'Paslaten', 'Remboken'),
(42, 'Pulutan', 'Remboken'),
(43, 'Sendangan', 'Remboken'),
(44, 'Sinuian', 'Remboken'),
(45, 'Talikuran', 'Remboken'),
(46, 'Tampusu', 'Remboken'),
(47, 'Timu', 'Remboken'),
(48, 'Kinali', 'Kawangkoan'),
(49, 'Kinali Satu', 'Kawangkoan'),
(50, 'Sendangan', 'Kawangkoan'),
(51, 'Sendangan Selatan', 'Kawangkoan'),
(52, 'Sendangan Utara', 'Kawangkoan'),
(53, 'Uner Satu', 'Kawangkoan'),
(54, 'Kanonang Tiga', 'Kawangkoan'),
(55, 'Tondegesan', 'Kawangkoan'),
(56, 'Tondegesan Satu', 'Kawangkoan'),
(57, 'Tondegesan Dua', 'Kawangkoan'),
(58, 'Kanonang Satu', 'Kawangkoan Barat'),
(59, 'Kanonang Dua', 'Kawangkoan Barat'),
(60, 'Kanonang Empat', 'Kawangkoan Barat'),
(61, 'Kanonang Lima', 'Kawangkoan Barat'),
(62, 'Kayuuwi', 'Kawangkoan Barat'),
(63, 'Kayuuwi Satu', 'Kawangkoan Barat'),
(64, 'Ranolambot', 'Kawangkoan Barat'),
(65, 'Tombasian Atas', 'Kawangkoan Barat'),
(66, 'Tombasian Atas Satu', 'Kawangkoan Barat'),
(67, 'Tombasian Bawah', 'Kawangkoan Barat'),
(68, 'Talikuran', 'Kawangkoan Utara'),
(69, 'Talikuran Barat', 'Kawangkoan Utara'),
(70, 'Talikuran Utara', 'Kawangkoan Utara'),
(71, 'Uner', 'Kawangkoan Utara'),
(72, 'Kiawa Dua', 'Kawangkoan Utara'),
(73, 'Kiawa Dua Barat', 'Kawangkoan Utara'),
(74, 'Kiawa Dua Timur', 'Kawangkoan Utara'),
(75, 'Kiawa Satu', 'Kawangkoan Utara'),
(76, 'Kiawa Satu Barat', 'Kawangkoan Utara'),
(77, 'Kiawa Satu Utara', 'Kawangkoan Utara'),
(78, 'Kauneran', 'Sonder'),
(79, 'Kauneran I', 'Sonder'),
(80, 'Kolongan Atas', 'Sonder'),
(81, 'Kolongan Atas I', 'Sonder'),
(82, 'Kolongan Atas II', 'Sonder'),
(83, 'Leilem', 'Sonder'),
(84, 'Leilem II', 'Sonder'),
(85, 'Leilem II', 'Sonder'),
(86, 'Rambunan', 'Sonder'),
(87, 'Rambunan Amian', 'Sonder'),
(88, 'Sawangan', 'Sonder'),
(89, 'Sendangan', 'Sonder'),
(90, 'Sendangan I', 'Sonder'),
(91, 'Talikuran', 'Sonder'),
(92, 'Talikuran I', 'Sonder'),
(93, 'Timbukar', 'Sonder'),
(94, 'Tincep', 'Sonder'),
(95, 'Tounelet', 'Sonder'),
(96, 'Tounelet I', 'Sonder'),
(97, 'Kamanga', 'Tompaso'),
(98, 'Kamanga Dua', 'Tompaso'),
(99, 'Liba', 'Tompaso'),
(100, 'Sendangan', 'Tompaso'),
(101, 'Talikuran', 'Tompaso'),
(102, 'Talikuran', 'Tompaso'),
(103, 'Tember', 'Tompaso'),
(104, 'Tempok', 'Tompaso'),
(105, 'Tempok Selatan', 'Tompaso'),
(106, 'Tolok', 'Tompaso'),
(107, 'Tolok Satu', 'Tompaso'),
(108, 'Pinabetengan', 'Tompaso Barat'),
(109, 'Pinebetengan Selatan', 'Tompaso Barat'),
(110, 'Pinebetengan Utara', 'Tompaso Barat'),
(111, 'Pinaesaan', 'Tompaso Barat'),
(112, 'Tompaso Dua', 'Tompaso Barat'),
(113, 'Tompaso Dua Utara', 'Tompaso Barat'),
(114, 'Tonsewer', 'Tompaso Barat'),
(115, 'Tonsewer Selatan', 'Tompaso Barat'),
(116, 'Touure', 'Tompaso Barat'),
(117, 'Touure Dua', 'Tompaso Barat'),
(118, 'Amongena I', 'Langowan Timur'),
(119, 'Amongena II', 'Langowan Timur'),
(120, 'Amongena II', 'Langowan Timur'),
(121, 'Karondoran', 'Langowan Timur'),
(122, 'Sumarayar', 'Langowan Timur'),
(123, 'Teep', 'Langowan Timur'),
(124, 'Waleure', 'Langowan Timur'),
(125, 'Wolaang', 'Langowan Timur'),
(126, 'Ampreng', 'Langowan Barat'),
(127, 'Kopiwangker', 'Langowan Barat'),
(128, 'Koyawas', 'Langowan Barat'),
(129, 'Lowian', 'Langowan Barat'),
(130, 'Noongan', 'Langowan Barat'),
(131, 'Noongan Dua', 'Langowan Barat'),
(132, 'Noongan Tiga', 'Langowan Barat'),
(133, 'Paslaten', 'Langowan Barat'),
(134, 'Raringis', 'Langowan Barat'),
(135, 'Raranon', 'Langowan Barat'),
(136, 'Raranon Selatan', 'Langowan Barat'),
(137, 'Raranon Utara', 'Langowan Barat'),
(138, 'Tounelet', 'Langowan Barat'),
(139, 'Tumaratas', 'Langowan Barat'),
(140, 'Tumaratas Dua', 'Langowan Barat'),
(141, 'Walewangko', 'Langowan Barat'),
(142, 'Atep', 'Langowan Selatan'),
(143, 'Atep Satu', 'Langowan Selatan'),
(144, 'Kaayuran Atas', 'Langowan Selatan'),
(145, 'Kaayuran Bawah', 'Langowan Selatan'),
(146, 'Kawatak', 'Langowan Selatan'),
(147, 'Manembo', 'Langowan Selatan'),
(148, 'Palamba', 'Langowan Selatan'),
(149, 'Rumbia', 'Langowan Selatan'),
(150, 'Temboan', 'Langowan Selatan'),
(151, 'Winebetan', 'Langowan Selatan'),
(152, 'Karumenga', 'Langowan Utara'),
(153, 'Taraitak', 'Langowan Utara'),
(154, 'Taraitak Satu', 'Langowan Utara'),
(155, 'Tempang I', 'Langowan Utara'),
(156, 'Tempang II', 'Langowan Utara'),
(157, 'Tempang III', 'Langowan Utara'),
(158, 'Toraget', 'Langowan Utara'),
(159, 'Walantakan', 'Langowan Utara'),
(160, 'Kali', 'Pineleng'),
(161, 'Kali Selatan', 'Pineleng'),
(162, 'Lotta', 'Pineleng'),
(163, 'Pineleng Dua', 'Pineleng'),
(164, 'Pineleng Dua Indah', 'Pineleng'),
(165, 'Pineleng Satu', 'Pineleng'),
(166, 'Pineleng Satu Timur', 'Pineleng'),
(167, 'Sea', 'Pineleng'),
(168, 'Sea I', 'Pineleng'),
(169, 'Sea II', 'Pineleng'),
(170, 'Sea Mitra', 'Pineleng'),
(171, 'Sea Tumpengan', 'Pineleng'),
(172, 'Warembungan', 'Pineleng'),
(173, 'Winangun Atas', 'Pineleng');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id`, `nama_kecamatan`) VALUES
(6, 'Kawangkoan'),
(7, 'Kawangkoan Barat'),
(8, 'Kawangkoan Utara'),
(13, 'Langowan Barat'),
(14, 'Langowan Selatan'),
(12, 'Langowan Timur'),
(15, 'Langowan Utara'),
(16, 'Pineleng'),
(5, 'Remboken'),
(9, 'Sonder'),
(10, 'Tompaso'),
(11, 'Tompaso Barat'),
(2, 'Tondano Barat'),
(1, 'Tondano Selatan'),
(3, 'Tondano Timur'),
(4, 'Tondano Utara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `lokasi_bertugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `password`, `role`, `lokasi_bertugas`) VALUES
(1, 'Admin', 'dlhkabupatenminahasa@gmail.com', '$2y$10$voU4umvO2gnNfOz7Txd7y.N/7V1jJfY.mhI0njX2JNiKS7YBGELt.', 'admin', ''),
(2, 'Yunita Mamahit', 'ymamahit2@gmail.com', '$2y$10$/2Et08zZtCFaG0SRi.Wd8Ok15CjNF3qxXPzXVks02jiwvOi5vE3lG', 'petugas', 'Tompaso'),
(3, 'Maria Angelina', 'maria.123@gmail.com', '$2y$10$P90UfhiN.Z6b5YWSu8M8VubxKPGTbpO1N3D8JdWekffukIx6DtQxa', 'pelanggan', ''),
(4, 'Masye Momongan', 'masye@gmail.com', '$2y$10$KZPgZlc2Qtz7sjrcgsE2oOdmTDk2DGa/cOJu8GW1jvz0sCR9PRsRi', 'petugas', 'Langowan Barat'),
(10, 'Syane', 'syane@gmail.com', '$2y$10$kviQ798UwiWRS8PcoyGgHe2Y8587TSJR0QBvUVEjPe6tVsZv8XDRq', 'pelanggan', ''),
(12, 'Manorek Lempas', 'masyelempas@gmail.com', '$2y$10$EB4G0QkUQ5ZTNrT85gPHsuJF2NKo7ZumH.7h7dihuu7L9n8HpV6qa', 'pelanggan', ''),
(13, 'Adam Tumarar', 'adam.tumarar@gmail.com', '$2y$10$nBJj0RBMzawLlwS56dOi6O3L18yUy8n2YTpNPWVRnkcwHRYNuLPii', 'pelanggan', ''),
(14, 'Mike Tulungen', 'mike@gmail.com', '$2y$10$rguBVD40n/dVOtjW2xZsSOYEZR0CtWh9SMHdwvIx0Jed66ZX8Ib4K', 'petugas', 'Kawangkoan Utara'),
(21, 'Didi', 'didi1234@gmail.com', '$2y$10$8lGf4BSTnLToUkmRz83bSeeI4JeS.HM52EUhIv.xBZBMEjmY14bT6', 'petugas', 'Pineleng'),
(22, 'Tamir Senduk', 'tamirsenduk@gmail.com', '$2y$10$ag.yoB5HOo8H7cGnEZ2/b.jxc3TkV.lOO.7fRiJzZAmm/98RcbZyG', 'pelanggan', ''),
(23, 'Weni Paat', 'wenipaat@gmail.com', '$2y$10$nE5ypG/hsPlK863jPCtfBer6P6xHUxvOMWYGSqNlseA.57sfGh0RK', 'pelanggan', ''),
(24, 'RM. AL BAROKA', 'albaroka@gmail.com', '$2y$10$gOd26oxVkkWa75P84/U.OOnwtYdXD6xsWihaKJGJZtlG.U4UL8vDq', 'pelanggan', ''),
(25, 'Victori', 'victori@gmail.com', '$2y$10$DDHRzyA9sYfNOebOsh1gZ.joZzESsxVWr5AR8FP6CSB.J410dgBp2', 'pelanggan', ''),
(26, 'Nita Mantu', 'nita@gmail.com', '$2y$10$AMtKZ.t34B6dPnfIJt6Z/.Ge0JFqIkvRz1Wa1.TAfWkiOGBr2jLl2', 'pelanggan', ''),
(27, 'Jefri Kambe', 'jefrikambe@gmail.com', '$2y$10$agboYqT8CCzeBaIXCXPGeODlqlep8Dv8GTxC.5KU8CsfUmNclvp62', 'pelanggan', ''),
(28, 'Damai', 'damai@gmail.com', '$2y$10$eydohS6H4uWlx0njVxIp9eQKyorkYZktEWs4yL22dbAYVd/w4M0qS', 'pelanggan', ''),
(29, 'Lontaan Jefran', 'jefranlontaan@gmail.com', '$2y$10$/1AI3WK0jTYuI1zbRYX3/eL79tyNPRCagtUawd76ShDyx3KtjSR3y', 'pelanggan', ''),
(30, 'Truli Koyo', 'trulikoyo@gmail.com', '$2y$10$6s69vI0Z4doc85tGNL9qHekJ5lYbvyNjQSlOehEqI/i0Ek2fSDGe6', 'pelanggan', ''),
(31, 'Indri Maki', 'indri@gmail.com', '$2y$10$83Kfns2lJPIHv50uI.eCyeaYvOVOBPScP5kUoRQl905Rf3vSSf/Iq', 'pelanggan', ''),
(32, 'Moudy', 'moudy@gmail.com', '$2y$10$zEmo7p.Heqq53EMKkBE5BOrsyLS4r0qbD8kBC11t2j1lKn207Qsuq', 'pelanggan', ''),
(33, 'Meylan Tamunu', 'm.eylantamunu@gmail.com', '$2y$10$iTVFgroPRLBX5Y8mmqayXuyvpNy5ZYmsQ5torsOPlxmyN1dPzdBau', 'pelanggan', ''),
(34, 'Kumolontang Sumilat', 'sumilat@gmail.com', '$2y$10$n4aTqJYq8Oy4x.q4Uf9yjOwDp33Wxoy4ExkUt9iO9ZiNRmvkkuZ.m', 'pelanggan', ''),
(35, 'SONI MAKAWIMBANG', 'soni@gmail.com', '$2y$10$UT9s1i8tbb4Y.KFN9zuGgeWDGlhYt3irXeOnks3I5Qg87LP8enTVm', 'pelanggan', ''),
(36, 'Engky Toar', 'engkytoar@gmail.com', '$2y$10$6bnS1ZASJAFpS8BYovARyuVSLQC5mfeW0DgQhi6f35xSZkWfm8lW.', 'pelanggan', ''),
(37, 'Kezia', 'kezia@gmail.com', '$2y$10$FKSbA5g/0kKB3z/IPplxhuf7avbXodSbomKMTXCM1qiVBUEpuxCDi', 'pelanggan', ''),
(38, 'Mike Oroh', 'mikeoroh@gmail.com', '$2y$10$QrtUL0amPig.R34e3kIDfOBBlIHDrSfJ5NmnfCbM9vY/AlV8G6l0e', 'pelanggan', ''),
(39, 'Deni Mailangkay', 'denimailangkay@gmail.com', '$2y$10$6s7Yf5YqUDklFhV7JEDc0uZvxF2l8mznSeuFxL8IaykA7Yhzj4KWG', 'pelanggan', ''),
(40, 'Singal', 'singalkumontoy@gmail.com', '$2y$10$u2yMGfoPu7SJUuvT4ILN/OnD6KB2.xBE0FdwYwU/Q8jH64gTd93AW', 'pelanggan', ''),
(41, 'Endey Wowor', 'endeywowor@gmail.com', '$2y$10$eYqzSg2W6uTRMg2tVMtnZeUBEINHS6uVxycbewV1uIRgnOnpkS7Lu', 'pelanggan', ''),
(42, 'Lumi Rusdiana', 'lumirusdiana@gmail.com', '$2y$10$CrDntm0GwcAHdyYoQjrDAO5AB8zrH924vXdn5vb/2ZZpxjAx5YYBi', 'pelanggan', ''),
(43, 'Jein', 'jein@gmail.com', '$2y$10$mktrhCuoZVC7P0Xh1O4Y0ORH4sQ5yt860ya.gsnBTW86BpgLe7VH6', 'pelanggan', ''),
(44, 'Roni Tampi', 'ronitampi@gmail.com', '$2y$10$7SxxqJ93ajm6G6TqFShtaevt2owWeKm0/IrNz01jzRgM0hirT7ks2', 'pelanggan', ''),
(45, 'Enggo Mandang', 'enggomandang@gmail.com', '$2y$10$48sVtL57cxbUMZ7U.aUmaOgoQUBmN6SKR1RQohauGv2QFVi8dEChq', 'pelanggan', ''),
(49, 'Maria Tulangow', 'maria@gmail.com', '$2y$10$jj7RUz6rhCIvtONXVfGjl.qjVFJkISBY6UjpM7eUHbLBJElRz9Tuq', 'petugas', 'Sonder'),
(50, 'Selfi Sendouw', 'selfi@gmail.com', '$2y$10$4axBCj.lBfheaONoaJE.9ewTl7HCfOpXV2MqiAliqGQ0IeRvAhATC', 'petugas', 'Kawangkoan Barat'),
(51, 'Meini Langi', 'meinilangi@gmail.com', '$2y$10$lhW3NX.r3lVlwfhA9zd83.RFEhsTXDu33ZKBi0uUau6wc/uyWGbqW', 'petugas', 'Kawangkoan'),
(52, 'Leidi Ondang', 'leidiondang@gmail.com', '$2y$10$dQjnk9UFGVhmjWS8qv6JQuuxR67tWnxG8ykyWKNuMJH4uvP6za6G2', 'petugas', 'Kawangkoan Utara'),
(53, 'Nofi Rumbay', 'nofirumbay@gmail.com', '$2y$10$37/IlXXbxAVESnNxWgFm0.QIYw7ya/o3EWspX148V7lPSgn1UvqaK', 'petugas', 'Langowan Barat'),
(54, 'Agnes Tombeng', 'agnes@gmail.com', '$2y$10$SRHLBup/29tKl/wv5DTFS.YTkfSHYEeW0xNSTZvAT2z10iUCjTrzO', 'petugas', 'Langowan Selatan'),
(55, 'Meyti Sumual', 'meytisumual@gmail.com', '$2y$10$qbwQmcAafgqg8aHLqpqf7edISMitUI4FkxcAPJLjL/BuOTuMJ6rZa', 'petugas', 'Langowan Timur'),
(56, 'Youke Kalalo', 'youkekalalo@gmail.com', '$2y$10$5TO0VJcqXsVQKGMrueUIWO30S73WgRkaMUUJrmXcXNbipB49xxCG.', 'petugas', 'Langowan Utara'),
(57, 'Marthen Sepang', 'marthensepang@gmail.com', '$2y$10$A939be7LrVIZUp/P6qdpRucA6bs9CpyHfn1IxDVAJ.NtkYR52AMK2', 'petugas', 'Remboken'),
(58, 'Anis Lengkong', 'anislengkong@gmail.com', '$2y$10$J2FN6jOY9Bs8Hu6cdQRcEOq9Vaf2HKFpnwdWxiYwF808S47.ckawq', 'petugas', 'Remboken'),
(59, 'Berty Tumiwa', 'bertytumiwa@gmail.com', '$2y$10$bPI/nF0AMcFsMogAeQnLZO8u6rpLFaF1kEEXiNi4XqZqSwjkm2ZGy', 'petugas', 'Sonder'),
(60, 'Yola Tulungen', 'yolatulungen@gmail.com', '$2y$10$uREDvAlxa/.KjYSyQTa6j.TjmXyQroKbtKcTn6SnsUPwrdPKiBNCS', 'petugas', 'Tompaso Barat'),
(61, 'Lusye Rawung', 'lusye@gmail.com', '$2y$10$fVVvooGLI6DhzAv.9Ce7B.BuJf60tYCQqVxOpf7lQddcVHRwci6L6', 'petugas', 'Tondano Barat'),
(62, 'Nini Kaunang', 'ninikaunang@gmail.com', '$2y$10$Sw1YVPHLG7Z9/evPN8dAZufS8QiLlgATPq2t8Zb3tINeIJww7Jt/C', 'petugas', 'Tondano Selatan'),
(63, 'Joice mamuaya', 'joice@gmail.com', '$2y$10$gDHeLNcGF76tyiMYOycYRu6oVXIazMxhL5CAKXTFJrKqeyoUUWpPi', 'petugas', 'Tondano Timur'),
(64, 'Maya Korompis', 'mayakorompis@gmail.com', '$2y$10$nTDYsSChk1AM96qmQ9d2Me1ZqITcN7uxv8bHg.tcHrGsuTi.l.TSe', 'petugas', 'Tondano Utara'),
(67, 'Manurip Kusen', 'manuripkusen@gmail.com', '$2y$10$3QPyDlcrMaGSodMsmnLGhut80GV0dTv5nVTR3LZN887z6mYrEigC.', 'pelanggan', ''),
(85, 'preisya toar', 'yunita@gmail.com', '$2y$10$hJQuhJ8ITaIPNm7WIlr2MORjc2hONNkkvPvH.oDZeF/eXUSWCk/ge', 'pelanggan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_pelanggan`
--
ALTER TABLE `member_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objek_retribusi`
--
ALTER TABLE `objek_retribusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_kecamatan` (`nama_kecamatan`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_kecamatan` (`nama_kecamatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `member_pelanggan`
--
ALTER TABLE `member_pelanggan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD CONSTRAINT `tbl_desa_ibfk_1` FOREIGN KEY (`nama_kecamatan`) REFERENCES `tbl_kecamatan` (`nama_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
