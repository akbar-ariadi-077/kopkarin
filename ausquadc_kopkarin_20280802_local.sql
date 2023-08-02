-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2023 at 02:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ausquadc_kopkarin`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` bigint(20) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `nomor_anggota` varchar(100) NOT NULL,
  `payroll_anggota` bigint(20) NOT NULL,
  `dept_anggota` bigint(20) NOT NULL,
  `simpok_anggota` bigint(20) NOT NULL,
  `simwa_anggota` decimal(10,0) NOT NULL,
  `bank_anggota` bigint(20) NOT NULL,
  `rekening_anggota` varchar(30) NOT NULL,
  `cabang_bank` varchar(100) DEFAULT NULL,
  `status_anggota` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `nomor_anggota`, `payroll_anggota`, `dept_anggota`, `simpok_anggota`, `simwa_anggota`, `bank_anggota`, `rekening_anggota`, `cabang_bank`, `status_anggota`, `cdt`) VALUES
(1, 'Muhammad Rafianto', '0477010', 823465, 26, 0, '0', 1, '769 004 50 14', '', 1, '2023-05-30 09:34:59'),
(2, 'Jusanto Franky', '1174220', 838408, 11, 0, '0', 1, '018 338 34 74', '', 1, '2023-05-30 08:42:49'),
(3, 'M. Mukri', '9069043', 20008135, 26, 0, '0', 1, '411 010 49 31', '', 1, '2023-05-30 08:42:49'),
(4, 'Mari Imyus Roni', '9170005', 20008137, 26, 0, '0', 1, '615 018 10 01', '', 1, '2023-05-30 08:42:49'),
(5, 'Misnadi Matal', '9069047', 20008136, 26, 0, '0', 1, '199 092 54 41', '', 1, '2023-05-30 08:42:49'),
(6, 'Sutaman', '9168008', 20008117, 26, 0, '0', 1, '411 010 71 32', '', 1, '2023-05-30 08:42:49'),
(7, 'Nurawan', '9067025', 20008114, 26, 0, '0', 1, '368 137 54 63', '', 1, '2023-05-30 08:42:49'),
(8, 'Kasan Anwar', '9171018', 20008072, 26, 0, '0', 1, '411 010 50 32', '', 1, '2023-05-30 08:42:49'),
(9, 'Wasisyanto', '9069008', 20008063, 26, 0, '0', 1, '199 032 62 54', '', 1, '2023-05-30 08:42:49'),
(10, 'M. Rifai Samsul Hudi', '8868002', 20008085, 26, 0, '0', 1, '199 028 79 68', '', 1, '2023-05-30 08:42:49'),
(11, 'Purnomo A', '8667015', 841530, 8, 0, '0', 1, '615 016 69 08', '', 1, '2023-05-30 08:42:49'),
(12, 'M.Samsul Hudi', '9170023', 20008071, 26, 0, '0', 1, '411 015 35 50', '', 1, '2023-05-30 08:42:49'),
(13, 'Mulyanto', '9069017', 20008115, 26, 0, '0', 1, '411 027 55 66', '', 1, '2023-05-30 08:42:49'),
(14, 'M. Sholeh', '9070055', 20008065, 26, 0, '0', 1, '199 088 86 43', '', 1, '2023-05-30 08:42:49'),
(15, 'Danum', '8768012', 979819, 13, 0, '0', 1, '411 010 53 34', '', 1, '2023-05-30 08:42:49'),
(16, 'Mohammad Saifuddin', '823474', 823474, 3, 0, '0', 1, '411 018 46 76', '', 1, '2023-05-30 08:42:49'),
(17, 'Isa Ansori', '0973104', 823517, 14, 0, '0', 1, '366 100 62 67', '', 1, '2023-05-30 08:42:49'),
(18, 'Oky Welli Surya Mansula', '0984073', 823513, 14, 0, '0', 1, '088 508 18 49', '', 1, '2023-05-30 08:42:49'),
(19, 'M. Daim Setyo', '9375010', 20008122, 26, 0, '0', 1, '411 015 32 66', '', 1, '2023-05-30 08:42:49'),
(20, 'Nurulhuda', '9069040', 20008064, 26, 0, '0', 1, '411 015 28 47', '', 1, '2023-05-30 08:42:49'),
(21, 'Sawaun', '9372007', 20008074, 26, 0, '0', 1, '411 015 39 59', '', 1, '2023-05-30 08:42:49'),
(22, 'Slamet Wahyudi', '9072033', 20008066, 26, 0, '0', 1, '411 025 15 19', '', 1, '2023-05-30 08:42:50'),
(23, 'Supardi', '9577105', 20008080, 26, 0, '0', 1, '411 015 42 46', '', 1, '2023-05-30 08:42:50'),
(24, 'Suwasis', '9569104', 20008076, 26, 0, '0', 1, '411 015 08 44', '', 1, '2023-05-30 08:42:50'),
(25, 'M. Yusuf', '9577101', 20008079, 26, 0, '0', 1, '411 015 29 52', '', 1, '2023-05-30 08:42:50'),
(26, 'M. Saifulloh', '9577088', 20008078, 26, 0, '0', 1, '411 015 37 46', '', 1, '2023-05-30 08:42:50'),
(27, 'Abd. Ghofur', '9573103', 20008146, 26, 0, '0', 1, '411 015 07 55', '', 1, '2023-05-30 08:42:50'),
(28, 'Abd. Haris', '9569093', 20008144, 26, 0, '0', 1, '411 015 29 44', '', 1, '2023-05-30 08:42:50'),
(29, 'Ipung Perkasa Yuda', '1083081', 20008058, 26, 0, '0', 1, '199 075 21 13', '', 1, '2023-05-30 08:42:50'),
(30, 'Toni Santoso', '1083061', 20008057, 26, 0, '0', 1, '199 073 86 84', '', 1, '2023-05-30 08:42:50'),
(31, 'Saikhuddin', '9172031', 20008120, 26, 0, '0', 1, '411 015 16 54', '', 1, '2023-05-30 08:42:50'),
(32, 'Sugianto', '9272002', 20008073, 26, 0, '0', 1, '411 015 06 66', '', 1, '2023-05-30 08:42:50'),
(33, 'Fatkum Muakhidin', '9571071', 20008126, 26, 0, '0', 1, '411 015 27 66', '', 1, '2023-05-30 08:42:50'),
(34, 'Supriyanto', '9271003', 20008140, 26, 0, '0', 1, '411 015 39 41', '', 1, '2023-05-30 08:42:50'),
(35, 'Heri Santoso', '9167020', 20008116, 26, 0, '0', 1, '411 015 35 41', '', 1, '2023-05-30 08:42:50'),
(36, 'Mustofa', '9270001', 20008139, 26, 0, '0', 1, '411 015 19 64', '', 1, '2023-05-30 08:42:50'),
(37, 'Nuryanto', '9474019', 20008125, 26, 0, '0', 1, '411 015 17 43', '', 1, '2023-05-30 08:42:50'),
(38, 'Irwanto', '9373009', 20008143, 26, 0, '0', 1, '411 015 05 69', '', 1, '2023-05-30 08:42:50'),
(39, 'Jumaari', '9573080', 20008101, 26, 0, '0', 1, '411 015 20 31', '', 1, '2023-05-30 08:42:50'),
(40, 'Nurrosadi', '9368006', 20008141, 26, 0, '0', 1, '411 015 40 41', '', 1, '2023-05-30 08:42:50'),
(41, 'Abdul Sakri', '8967008', 20008111, 26, 0, '0', 1, '411 015 03 64', '', 1, '2023-05-30 08:42:50'),
(42, 'Hidayat', '9573094', 20008102, 26, 0, '0', 2, '0755698379', '', 1, '2023-05-30 08:42:50'),
(43, 'Nur Asan', '0785041', 20008129, 26, 0, '0', 1, '411 020 28 44', '', 1, '2023-05-30 08:42:50'),
(44, 'Agus Winarto', '9576106', 20008105, 26, 0, '0', 1, '411 015 10 42', '', 1, '2023-05-30 08:42:50'),
(45, 'Muslimin', '9473025', 20008097, 26, 0, '0', 1, '411 015 08 61', '', 1, '2023-05-30 08:42:50'),
(46, 'Suwarno A.', '9069006', 20008089, 26, 0, '0', 1, '411 015 09 41', '', 1, '2023-05-30 08:42:50'),
(47, 'Mahfud', '9577089', 20008107, 26, 0, '0', 1, '411 015 41 57', '', 1, '2023-05-30 08:42:50'),
(48, 'A. Baidowi', '0583020', 20008083, 26, 0, '0', 2, '0414764398', '', 1, '2023-05-30 08:42:50'),
(49, 'Bambang Susilo', '0579007', 20008082, 26, 0, '0', 1, '411 015 70 08', '', 1, '2023-05-30 08:42:50'),
(50, 'Moh. Faqihudin', '9574108', 20008104, 26, 0, '0', 1, '411 015 31 69', '', 1, '2023-05-30 08:42:50'),
(51, 'Mashudi', '0171038', 20008081, 26, 0, '0', 1, '411 015 07 47', '', 1, '2023-05-30 08:42:50'),
(52, 'M. Saifudin', '9574107', 20008103, 26, 0, '0', 1, '411 015 20 49', '', 1, '2023-05-30 08:42:50'),
(53, 'Budianto', '9575035', 20008077, 26, 0, '0', 1, '411 003 21 67', '', 1, '2023-05-30 08:42:50'),
(54, 'Hadi Siswoyo', '9474017', 20008100, 26, 0, '0', 1, '410 233 405', '', 1, '2023-05-30 08:42:50'),
(55, 'Bakri', '9474009', 20008098, 26, 0, '0', 1, '411 015 43 27', '', 1, '2023-05-30 08:42:50'),
(56, 'Suhari', '9173033', 20008094, 26, 0, '0', 1, '411 015 27 31', '', 1, '2023-05-30 08:42:50'),
(57, 'M. Nasik', '8968010', 20008086, 26, 0, '0', 1, '411 015 34 61', '', 1, '2023-05-30 08:42:50'),
(58, 'Siswanto', '9070046', 20008091, 26, 0, '0', 1, '411 015 08 36', '', 1, '2023-05-30 08:42:51'),
(59, 'Andik Budianto', '9166001', 20008092, 26, 0, '0', 1, '411 015 79 62', '', 1, '2023-05-30 08:42:51'),
(60, 'Suwardi', '9067015', 20008134, 26, 0, '0', 1, '411 015 13 44', '', 1, '2023-05-30 08:42:51'),
(61, 'Yohanes Beny K.', '9474015', 20008099, 26, 0, '0', 1, '411 006 01 95', '', 1, '2023-05-30 08:42:51'),
(62, 'Toat Arifin', '9577037', 20008106, 26, 0, '0', 1, '411 015 05 42', '', 1, '2023-05-30 08:42:51'),
(63, 'Arief Santoso', '9375011', 20008096, 26, 0, '0', 1, '411 015 41 49', '', 1, '2023-05-30 08:42:51'),
(64, 'Eko Supriono', '9276009', 20008095, 26, 0, '0', 1, '411 015 01 51', '', 1, '2023-05-30 08:42:51'),
(65, 'Nurhadiono', '9577102', 20008108, 26, 0, '0', 1, '411 015 33 63', '', 1, '2023-05-30 08:42:51'),
(66, 'Rudik Ardianto', '1185221', 20008084, 26, 0, '0', 1, '411 033 85 33', '', 1, '2023-05-30 08:42:51'),
(67, 'Samiun Basir', '9172038', 20008138, 26, 0, '0', 1, '199 042 82 78', '', 1, '2023-05-30 08:42:51'),
(68, 'Gunawan', '9372001', 20008142, 26, 0, '0', 1, '411 015 07 39', '', 1, '2023-05-30 08:42:51'),
(69, 'Sumantri', '9574109', 20008147, 26, 0, '0', 1, '411 015 15 49', '', 1, '2023-05-30 08:42:51'),
(70, 'Hadi', '9066029', 20008062, 26, 0, '0', 1, '411 015 04 45', '', 1, '2023-05-30 08:42:51'),
(71, 'Andriyanto', '9167039', 20008068, 26, 0, '0', 1, '411 015 34 44', '', 1, '2023-05-30 08:42:51'),
(72, 'Eko Suhandoyo', '9573091', 20008145, 26, 0, '0', 1, '411 015 25 53', '', 1, '2023-05-30 08:42:51'),
(73, 'Akhmad Mujahidin', '9576092', 20008148, 26, 0, '0', 1, '411 015 06 58', '', 1, '2023-05-30 08:42:51'),
(74, 'M. Arifin', '0580006', 20008056, 26, 0, '0', 1, '411 015 83 06', '', 1, '2023-05-30 08:42:51'),
(75, 'Jumadi', '9169009', 20008070, 26, 0, '0', 1, '411 015 26 51', '', 1, '2023-05-30 08:42:51'),
(76, 'Ach. Choiron', '9574034', 20008127, 26, 0, '0', 1, '411 015 22 43', '', 1, '2023-05-30 08:42:51'),
(77, 'Riduwan', '9171002', 20008118, 26, 0, '0', 1, '411 015 28 55', '', 1, '2023-05-30 08:42:51'),
(78, 'Mansur', '9172010', 20008119, 26, 0, '0', 1, '411 015 10 69', '', 1, '2023-05-30 08:42:51'),
(79, 'Matsyaroni', '9272008', 20008121, 26, 0, '0', 2, '0418482515', '', 1, '2023-05-30 08:42:51'),
(80, 'Abdul Manaf', '0680009', 20008128, 26, 0, '0', 1, '411 018 31 90', '', 1, '2023-05-30 08:42:51'),
(81, 'Kariono', '9467018', 20008123, 26, 0, '0', 1, '411 015 31 51', '', 1, '2023-05-30 08:42:51'),
(82, 'Suwardi Abidin', '9572074', 823718, 16, 0, '0', 1, '411 015 43 78', '', 1, '2023-05-30 08:42:51'),
(83, 'Agus Susanto', '9777014', 982020, 16, 0, '0', 1, '411 015 29 79', '', 1, '2023-05-30 08:42:51'),
(84, 'Tri Cahyo Wahono', '0478001', 982019, 16, 0, '0', 1, '411 015 12 80', '', 1, '2023-05-30 08:42:51'),
(85, 'Khoiri', '9575072', 20008165, 16, 0, '0', 1, '411 015 20 65', '', 1, '2023-05-30 08:42:51'),
(86, 'M. Budianto', '9576079', 850033, 16, 0, '0', 1, '4110151484', '', 1, '2023-05-30 08:42:51'),
(87, 'Moh. Imron', '9576073', 20008166, 26, 0, '0', 1, '411 015 32 74', '', 1, '2023-05-30 08:42:51'),
(88, 'Salim Nasar', '0883042', 838387, 16, 0, '0', 1, '488 019 05 19', '', 1, '2023-05-30 08:42:51'),
(89, 'Mukh. Yusuf', '0872027', 982013, 16, 0, '0', 1, '411 021 48 85', '', 1, '2023-05-30 08:42:52'),
(90, 'Salimin', '1184123', 20008153, 16, 0, '0', 1, '199 078 45 46', '', 1, '2023-05-30 08:42:52'),
(91, 'Moh.Ihsan', '1186124', 20008154, 16, 0, '0', 1, '199 081 97 22', '', 1, '2023-05-30 08:42:52'),
(92, 'Budi Wiyono', '9978011', 845824, 14, 0, '0', 1, '411 015 30 29', '', 1, '2023-05-30 08:42:52'),
(93, 'Choirul Anam', '9472023', 20008182, 14, 0, '0', 1, '411 015 10 34', '', 1, '2023-05-30 08:42:52'),
(94, 'Agus Indra Cahyono', '9470026', 20008181, 14, 0, '0', 1, '411 015 31 26', '', 1, '2023-05-30 08:42:52'),
(95, 'Amir Mahmud', '9573097', 20008185, 14, 0, '0', 1, '411 015 33 21', '', 1, '2023-05-30 08:42:52'),
(96, 'Eko Yulian I', '9572098', 20008184, 14, 0, '0', 1, '411 015 27 23 ', '', 1, '2023-05-30 08:42:52'),
(97, 'Supangat', '9975041', 20008188, 14, 0, '0', 1, '411 015 29 28', '', 1, '2023-05-30 08:42:52'),
(98, 'Nur Ali', '9068014', 20008177, 14, 0, '0', 1, '411 015 18 16', '', 1, '2023-05-30 08:42:52'),
(99, 'Sugeng Prayitno', '1175222', 20008171, 14, 0, '0', 1, '411 033 88 43', '', 1, '2023-05-30 08:42:52'),
(100, 'Abdurokhman', '9069018', 979818, 13, 0, '0', 1, '411 015 06 23', '', 1, '2023-05-30 08:42:52'),
(101, 'Jumain', '9470004', 20008192, 13, 0, '0', 1, '411 015 14 76', '', 1, '2023-05-30 08:42:52'),
(102, 'Samsul Huda', '9574045', 20008193, 13, 0, '0', 1, '411 026 63 71', '', 1, '2023-05-30 08:42:52'),
(103, 'Abd. aziz', '9975024', 20008194, 13, 0, '0', 1, '411 015 20 14', '', 1, '2023-05-30 08:42:52'),
(104, 'Setiawan Dwi Cahyo', '9777016', 980041, 13, 0, '0', 1, '411 015 34 36', '', 1, '2023-05-30 08:42:52'),
(105, 'Heri Kuswoyo', '9979030', 979821, 13, 0, '0', 1, '411 015 23 16', '', 1, '2023-05-30 08:42:52'),
(106, 'Wisnu Hidayat', '1387032', 20010447, 26, 0, '0', 1, '769 007 3913', '', 1, '2023-05-30 08:42:52'),
(107, 'Endik Setiyawan', '1184223', 20008130, 26, 0, '0', 1, '411 034 02 95', '', 1, '2023-05-30 08:42:52'),
(108, 'Milu Rakhmanu', '1082056', 838130, 7, 0, '0', 1, '788 034 78 74', '', 1, '2023-05-30 08:42:52'),
(109, 'Anggarati Setyo Prabowo', '1384025', 927715, 26, 0, '0', 1, '089 074 10 96', '', 1, '2023-05-30 08:42:52'),
(110, 'Kristian Joko Sulistyo', '0075041', 823681, 7, 0, '0', 1, '411 010 8694', '', 1, '2023-05-30 08:42:52'),
(111, 'Didik Kurniawan', '1078042', 838250, 7, 0, '0', 1, '464 140 1387', '', 1, '2023-05-30 08:42:52'),
(112, 'Dicki Imansyah', '1184144', 850032, 16, 0, '0', 1, '326 158 78 05', '', 1, '2023-05-30 08:42:52'),
(113, 'Muhammad Syaiful Ansorry', '1387043', 962402, 13, 0, '0', 1, '4110604641', '', 1, '2023-05-30 08:42:52'),
(114, 'Tjoa Djui Hoen', '0869073', 823431, 1, 0, '0', 1, '8630005141', '', 1, '2023-05-30 08:42:52'),
(115, 'Indra Kurniawan', '1389023', 20010279, 26, 0, '0', 1, '4110436225', 'Kejapanan', 1, '2023-05-30 08:42:52'),
(116, 'Mocksin', '1480009', 20012421, 26, 0, '0', 4, '1400014051073', '', 1, '2023-05-30 08:42:52'),
(117, 'Mei Niko Saputro', '1588070', 20014019, 16, 0, '0', 1, '6150527510', 'Porong', 1, '2023-05-30 08:42:52'),
(118, 'Firli Arfiansyah', '1587069', 20014017, 26, 0, '0', 1, '4110339785', 'Kejapanan', 1, '2023-05-30 08:42:52'),
(119, 'Tia Ayu Christanti', '1590047', 965210, 14, 0, '0', 1, '0183461157', 'Sidoarjo', 1, '2023-05-30 08:42:52'),
(120, 'Septa Idah Lestari', '1591119', 985497, 10, 0, '0', 4, '141-00-1087501-1', '', 1, '2023-05-30 08:42:52'),
(121, 'Gian Gigih Prakosa', '1594068', 20014018, 26, 0, '0', 1, '4110546322', '', 1, '2023-05-30 08:42:52'),
(122, 'Sutrisno', '1587065', 20013983, 16, 0, '0', 1, '4110541355', 'Kejapanan', 1, '2023-05-30 08:42:52'),
(123, 'Suyono', '1591051', 20013605, 14, 0, '0', 4, '1440014015603', 'KC Brawijaya, Malang', 1, '2023-05-30 08:42:53'),
(124, 'Robi\'a', '1591046', 20013389, 14, 0, '0', 4, '9000017591687', 'KC Brawijaya, Malang', 1, '2023-05-30 08:42:53'),
(125, 'Marendra Kurniawan', '1590171', 20014631, 16, 0, '0', 3, '008601100476503', 'Sidoarjo', 1, '2023-05-30 08:42:53'),
(126, 'Anton Amzal Solaiman', '1486040', 20013391, 16, 0, '0', 4, '144-00-1172-6798', 'KCP Pasuruan', 1, '2023-05-30 08:42:53'),
(127, 'Sugiarto', '1585161', 20014628, 26, 0, '0', 1, '1302297023', 'KCP Manyar', 1, '2023-05-30 08:42:53'),
(128, 'Aric Fitriyanto Darmawan', '1181163', 842704, 16, 0, '0', 1, '2890662881', 'KCP Ponorogo', 1, '2023-05-30 08:42:53'),
(129, 'Nurul Isnaini', '1678042', 1019028, 3, 0, '0', 4, '1420006461700', 'Basuki Rahmat, Surabaya', 1, '2023-05-30 08:42:53'),
(130, 'Iwan Hindarto', '1678030', 1015615, 25, 0, '0', 1, '8220384889', 'Rungkut-Surabaya', 1, '2023-05-30 08:42:53'),
(131, 'Arief Siswoko', '1588094', 979318, 14, 0, '0', 1, '3170516311', 'Gondang Legi', 1, '2023-05-30 08:42:53'),
(132, 'Rendra Yudantara Meiliyanto', '1691045', 1024682, 14, 0, '0', 1, '8290725662', 'KCU HR Muhammad', 1, '2023-05-30 08:42:53'),
(133, 'Feri Setiawan', '1694059', 1046959, 14, 0, '0', 4, '144-00-1397001-4', 'Malang - Sutan Syahrir', 1, '2023-05-30 08:42:53'),
(134, 'Ferdian Setio Bagus', '1583077', 20013996, 26, 0, '0', 1, '4110546543', '', 1, '2023-05-30 08:42:53'),
(135, 'Dawud Wijaya', '1893051', 20015306, 26, 0, '0', 2, '0458643532', '', 1, '2023-05-30 08:42:53'),
(136, 'Abdur Rosyid Bahaduri', '1692052', 1030056, 26, 0, '0', 3, '115601002440507', '', 1, '2023-05-30 08:42:53'),
(137, 'Teguh Satrya Witaryanto', '1796045', 20017778, 26, 0, '0', 4, '900-00-42108317', '', 1, '2023-05-30 08:42:53'),
(138, 'Yoni Arif', '20017781', 20017781, 26, 0, '0', 4, '9000025702581', '', 1, '2023-05-30 08:42:53'),
(139, 'Nurul Huda', '30040582', 30040582, 13, 0, '0', 1, '411 015 28 47', '', 1, '2023-05-30 08:42:53'),
(140, 'Ahmadi Luxe Santoso', '30067541', 30067541, 16, 0, '0', 4, '1440016729524', '', 1, '2023-05-30 08:42:53'),
(141, 'Edy Setiawan', '30068137', 30068137, 16, 0, '0', 4, '1440616732007', '', 1, '2023-05-30 08:42:53'),
(142, 'Teguh Dewantoro', '30071528', 30071528, 16, 0, '0', 1, '2250262879', '', 1, '2023-05-30 08:42:53'),
(143, 'Rifky Putra Herminanto', '30041966', 30041966, 19, 0, '0', 1, '1250646751', '', 1, '2023-05-30 08:42:53'),
(144, 'JASTINOVA IKADIASTRI', '30077590', 30077590, 9, 0, '0', 1, '1991208246', '', 1, '2023-05-30 08:42:53'),
(145, 'Teddy Adythia', '1593159', 20014627, 26, 0, '0', 2, '035 682 5873', '', 1, '2023-05-30 08:42:53'),
(146, 'Sarifah Najlah Rido Hasyim', '30074753', 30074753, 2, 0, '0', 4, '1420014746696', '', 1, '2023-05-30 08:42:53'),
(147, 'Indah Maylarini', '30089160', 30089160, 4, 0, '0', 2, '0373024878', '', 1, '2023-05-30 08:42:53'),
(148, 'Darman Pongmasakkhe', '30018992', 30018992, 24, 0, '0', 4, '1270005136641', '', 1, '2023-05-30 08:42:53'),
(149, 'Mohammad Arifin', '30087262', 30087262, 22, 0, '0', 4, '1440016729268', '', 1, '2023-05-30 08:42:53'),
(150, 'Angga Fazryn Lazuardy', '30101736', 30101736, 23, 0, '0', 2, '0852441649', '', 1, '2023-05-30 08:42:53'),
(151, 'Fauzan Mahdi', '30112530', 30112530, 26, 0, '0', 1, '0183863841', '', 1, '2023-05-30 08:42:53'),
(152, 'Diananda Gusta Fahnudi', '30111846', 30111846, 5, 0, '0', 1, '7640869342', '', 1, '2023-05-30 08:42:53'),
(153, 'Faizal Akhmadan', '30122484', 30122484, 16, 0, '0', 4, '1440019134458', '', 1, '2023-05-30 08:42:54'),
(154, 'Ahmad Afifudin Al Ghozali', '30122213', 30122213, 16, 0, '0', 4, '1440019486395', '', 1, '2023-05-30 08:42:54'),
(155, 'Ruri Setyo Widyasari', '30121555', 30121555, 20, 0, '0', 2, '454175190', '', 1, '2023-05-30 08:42:54'),
(156, 'Ibadil Yusfan Suprayogi', '30131156', 30131156, 26, 0, '0', 2, '0792567668', '', 1, '2023-05-30 08:42:54'),
(157, 'Putri Yusril B', '30130950', 30130950, 16, 0, '0', 1, '7325257636', '', 1, '2023-05-30 08:42:54'),
(158, 'Nur Aini Munawaroh', '1693057', 1693057, 1, 0, '0', 5, '00111-01-61-000501-9', '', 1, '2023-05-30 08:42:54'),
(159, 'Ayik Rahmadi', '1907249', 1907249, 13, 0, '0', 4, '1440016729433', '', 1, '2023-05-30 08:42:54'),
(160, 'Wahyu Bagus Surya', '30134350', 30134350, 14, 0, '0', 4, '1440019987384', '', 1, '2023-05-30 08:42:54'),
(161, 'Luri Suanto', '30084681', 30084681, 14, 0, '0', 1, '1661914527', '', 1, '2023-05-30 08:42:54'),
(162, 'Laksyudha Prasetyo', '30116948', 30116948, 6, 0, '0', 4, '1420013675805', '', 1, '2023-05-30 08:42:54'),
(163, 'I Made Iwan Darmawan', '30082883', 30082883, 15, 0, '0', 2, '0390228565', '', 1, '2023-05-30 08:42:54'),
(164, 'Dery Sidartah', '30058645', 30058645, 26, 0, '0', 2, '0279643965', '', 1, '2023-05-30 08:42:54'),
(165, 'Dwi Acub Widayatno', '30130949', 30130949, 26, 0, '0', 1, '1991117275', '', 1, '2023-05-30 08:42:54'),
(166, 'Garit Dwi Prismanto', '30115346', 30115346, 26, 0, '0', 1, '7900981150', '', 1, '2023-05-30 08:42:54'),
(167, 'Esra Marthen', '30130954', 30130954, 16, 0, '0', 2, '0320949635', '', 1, '2023-05-30 08:42:54'),
(168, 'Tri Saputra Wasis Waskita', '30151261', 30151261, 26, 0, '0', 4, '1440020266380', '', 1, '2023-05-30 08:42:55'),
(169, 'Chikita Hesa Nova Pratama', '30154882', 30154882, 21, 0, '0', 1, '3151103748', '', 1, '2023-05-30 08:42:55'),
(170, 'Fendi Rendi K.', '30112538', 30112538, 26, 0, '0', 4, '1440016731462', '', 1, '2023-05-30 08:42:55'),
(171, 'Dwi Martono', '30120881', 30120881, 26, 0, '0', 4, '1440016738103', '', 1, '2023-05-30 08:42:55'),
(172, 'Ratna Herly Safitri', '30166419', 30166419, 14, 0, '0', 4, '1410014855944', '', 1, '2023-05-30 08:42:55'),
(173, 'Esti Kukuh Perbawati', '30166421', 30166421, 8, 0, '0', 3, '186101000423508', '', 1, '2023-05-30 08:42:55'),
(174, 'Sumariyono', '30162162', 30162162, 26, 0, '0', 4, '1440017369213', '', 1, '2023-05-30 08:42:55'),
(175, 'Riki Samsul Hudi', '30159106', 30159106, 26, 0, '0', 4, '1440016732239', '', 1, '2023-05-30 08:42:55'),
(176, 'Nurul Istiqomah', '30171515', 30171515, 26, 0, '0', 4, '14400216734444', '', 1, '2023-05-30 08:42:55'),
(177, 'Indra Shelbaswara', '30118096', 30118096, 12, 0, '0', 4, '1420015377632', 'Surabaya', 1, '2023-05-30 08:42:55'),
(178, 'Wahyu Anita Sri Lestari', '30179170', 30179170, 19, 0, '0', 3, '6380 01 021889530', 'Malang-Madyapuro', 1, '2023-05-30 08:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` bigint(20) NOT NULL,
  `tahun_angsuran` int(3) NOT NULL,
  `bulan_angsuran` int(3) NOT NULL,
  `tanggal_angsuran` date NOT NULL,
  `metode_bayar` int(5) NOT NULL,
  `payroll_anggota` bigint(20) NOT NULL,
  `angsuran_pokok` bigint(20) NOT NULL,
  `angsuran_bunga` bigint(20) NOT NULL,
  `angsuran_ke` int(3) NOT NULL,
  `jangka_waktu` int(3) NOT NULL,
  `input_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `tahun_angsuran`, `bulan_angsuran`, `tanggal_angsuran`, `metode_bayar`, `payroll_anggota`, `angsuran_pokok`, `angsuran_bunga`, `angsuran_ke`, `jangka_waktu`, `input_date_time`, `update_date_time`) VALUES
(1, 3, 1, '2023-01-10', 2, 1, 2000000, 150000, 1, 10, '2023-07-17 11:27:12', '2023-07-17 11:27:12'),
(2, 3, 2, '2023-02-10', 2, 1, 2000000, 150000, 2, 10, '2023-07-17 11:28:52', '2023-07-17 11:28:52'),
(3, 3, 3, '2023-03-10', 2, 1, 2000000, 150000, 3, 10, '2023-07-17 11:28:52', '2023-07-17 11:28:52'),
(4, 3, 4, '2023-04-10', 2, 1, 2000000, 150000, 4, 10, '2023-07-17 11:28:52', '2023-07-17 11:28:52'),
(5, 3, 5, '2023-05-10', 2, 1, 2000000, 150000, 5, 10, '2023-07-17 11:28:52', '2023-07-17 11:28:52'),
(6, 3, 6, '2023-06-10', 2, 1, 2000000, 150000, 6, 10, '2023-07-17 11:28:52', '2023-07-17 11:28:52'),
(7, 3, 7, '2023-07-10', 2, 1, 2000000, 150000, 7, 10, '2023-07-17 11:28:52', '2023-07-17 11:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` bigint(20) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `status_bank` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `status_bank`, `cdt`) VALUES
(1, 'BCA', 1, '2023-05-30 06:22:38'),
(2, 'BNI', 1, '2023-05-30 06:22:38'),
(3, 'BRI', 1, '2023-05-30 06:22:38'),
(4, 'MANDIRI', 1, '2023-05-30 06:22:38'),
(5, 'BTN', 1, '2023-05-30 08:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(2) NOT NULL,
  `int1_bulan` int(2) NOT NULL,
  `int2_bulan` varchar(2) NOT NULL,
  `txt_up_id_bulan` varchar(20) NOT NULL,
  `txt_up_id_bulan3` varchar(3) NOT NULL,
  `txt_pr_id_bulan` varchar(20) NOT NULL,
  `txt_pr_id_bulan3` varchar(3) NOT NULL,
  `txt_up_en_bulan` varchar(20) NOT NULL,
  `txt_up_en_bulan3` varchar(3) NOT NULL,
  `txt_pr_en_bulan` varchar(20) NOT NULL,
  `txt_pr_en_bulan3` varchar(3) NOT NULL,
  `status_bulan` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `int1_bulan`, `int2_bulan`, `txt_up_id_bulan`, `txt_up_id_bulan3`, `txt_pr_id_bulan`, `txt_pr_id_bulan3`, `txt_up_en_bulan`, `txt_up_en_bulan3`, `txt_pr_en_bulan`, `txt_pr_en_bulan3`, `status_bulan`, `cdt`) VALUES
(1, 1, '01', 'JANUARI', 'JAN', 'Januari', 'Jan', 'JANUARY', 'JAN', 'January', 'Jan', 1, '2023-06-29 14:46:18'),
(2, 2, '02', 'FEBRUARI', 'FEB', 'Februari', 'Feb', 'FEBRUARY', 'FEB', 'February', 'Feb', 1, '2023-06-29 14:46:18'),
(3, 3, '03', 'MARET', 'MAR', 'Maret', 'Mar', 'MARCH', 'MAR', 'March', 'Mar', 1, '2023-06-29 14:46:18'),
(4, 4, '04', 'APRIL', 'APR', 'April', 'Apr', 'APRIL', 'APR', 'April', 'Apr', 1, '2023-06-29 14:46:18'),
(5, 5, '05', 'MEI', 'MEI', 'Mei', 'Mei', 'MAY', 'MAY', 'May', 'May', 1, '2023-06-29 14:46:18'),
(6, 6, '06', 'JUNI', 'JUN', 'Juni', 'Jun', 'JUNE', 'JUN', 'June', 'Jun', 1, '2023-06-29 14:46:18'),
(7, 7, '07', 'JULI', 'JUL', 'Juli', 'Jul', 'JULY', 'JUL', 'July', 'Jul', 1, '2023-06-29 14:46:18'),
(8, 8, '08', 'AGUSTUS', 'AGU', 'Agustus', 'Agu', 'AUGUST', 'AUG', 'August', 'Aug', 1, '2023-06-29 14:46:18'),
(9, 9, '09', 'SEPTEMBER', 'SEP', 'September', 'Sep', 'SEPTEMBER', 'SEP', 'September', 'Sep', 1, '2023-06-29 14:46:18'),
(10, 10, '10', 'OKTOBER', 'OKT', 'Oktober', 'Okt', 'OCTOBER', 'OCT', 'October', 'Oct', 1, '2023-06-29 14:46:18'),
(11, 11, '11', 'NOVEMBER', 'NOV', 'November', 'Nov', 'NOVEMBER', 'NOV', 'November', 'Nov', 1, '2023-06-29 14:46:18'),
(12, 12, '12', 'DESEMBER', 'DES', 'Desember', 'Des', 'DECEMBER', 'DEC', 'December', 'Dec', 1, '2023-06-29 14:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id_config` bigint(20) NOT NULL,
  `bunga_pinjaman` decimal(10,5) NOT NULL,
  `jasa_tabungan` decimal(10,5) NOT NULL,
  `simpanan_pokok` bigint(20) NOT NULL,
  `simpanan_wajib` bigint(20) NOT NULL,
  `status_config` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_dept` bigint(20) NOT NULL,
  `nama_dept` varchar(100) NOT NULL,
  `status_dept` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_dept`, `nama_dept`, `status_dept`, `cdt`) VALUES
(1, 'Commercial', 1, '2023-05-30 07:10:48'),
(2, 'Export Documentation Executive', 1, '2023-05-30 07:10:48'),
(3, 'PDA - Accounting', 1, '2023-05-30 07:10:48'),
(4, 'PDA - Admin Produksi', 1, '2023-05-30 07:10:48'),
(5, 'PDA - CI', 1, '2023-05-30 07:10:48'),
(6, 'PDA - CO PRODUCT CWM', 1, '2023-05-30 07:10:48'),
(7, 'PDA - CSD', 1, '2023-05-30 07:10:49'),
(8, 'PDA - CSR & Legal', 1, '2023-05-30 07:10:49'),
(9, 'PDA - Customer Service', 1, '2023-05-30 07:10:49'),
(10, 'PDA - Document Control', 1, '2023-05-30 07:10:49'),
(11, 'PDA - EHS', 1, '2023-05-30 07:10:49'),
(12, 'PDA - Engineering', 1, '2023-05-30 07:10:49'),
(13, 'PDA - Filling', 1, '2023-05-30 07:10:49'),
(14, 'PDA - FSQR', 1, '2023-05-30 07:10:49'),
(15, 'PDA - M&R', 1, '2023-05-30 07:10:49'),
(16, 'PDA - Maintenance', 1, '2023-05-30 07:10:49'),
(17, 'PDA - Mfg Technology', 1, '2023-05-30 07:10:49'),
(18, 'PDA - MT', 1, '2023-05-30 07:10:49'),
(19, 'PDA - MTG', 1, '2023-05-30 07:10:49'),
(20, 'PDA - ODP', 1, '2023-05-30 07:10:49'),
(21, 'PDA - Plant Admin Assistant', 1, '2023-05-30 07:10:49'),
(22, 'PDA - Plant Filling', 1, '2023-05-30 07:10:49'),
(23, 'PDA - Plant FSQR', 1, '2023-05-30 07:10:49'),
(24, 'PDA - Plant Manager', 1, '2023-05-30 07:10:49'),
(25, 'PDA - PPIC', 1, '2023-05-30 07:10:49'),
(26, 'PDA - Production', 1, '2023-05-30 07:10:49'),
(27, 'PDA - Production Admin', 1, '2023-05-30 07:10:49'),
(28, 'PDA - Production CWM', 1, '2023-05-30 07:10:49'),
(29, 'PDA - PRODUKSI', 1, '2023-05-30 07:10:49'),
(30, 'PDA - Realibility', 1, '2023-05-30 07:10:49'),
(31, 'PDA - Risk Management', 1, '2023-05-30 07:10:49'),
(32, 'PDA - Technical Appication', 1, '2023-05-30 07:10:49'),
(33, 'PDA - Utility', 1, '2023-05-30 07:10:49'),
(34, 'PDA - Utility Boiler', 1, '2023-05-30 07:10:49'),
(35, 'PDA - Warehouse', 1, '2023-05-30 07:10:49'),
(36, 'PDA - Warehouse CWM', 1, '2023-05-30 07:11:01'),
(37, 'Testing', 0, '2023-05-30 07:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `id_paytod` int(5) NOT NULL,
  `nama_paytod` varchar(100) NOT NULL,
  `status_paytod` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode_bayar`
--

INSERT INTO `metode_bayar` (`id_paytod`, `nama_paytod`, `status_paytod`, `cdt`) VALUES
(1, 'Cash', 1, '2023-05-30 07:37:39'),
(2, 'Transfer', 1, '2023-05-30 07:38:50'),
(3, 'Go Pay', 1, '2023-05-30 07:37:50');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` bigint(20) NOT NULL,
  `payroll_anggota` bigint(20) NOT NULL,
  `tahun_pengajuan` int(3) NOT NULL,
  `bulan_pengajuan` int(2) NOT NULL,
  `jumlah_pinjaman` bigint(20) NOT NULL,
  `angsuran_pokok` float NOT NULL,
  `bunga_pinjaman_persen` float NOT NULL,
  `bunga_pinjaman` bigint(20) NOT NULL,
  `jangka_waktu` int(2) NOT NULL,
  `angsuran_ke` int(2) NOT NULL,
  `status_pinjaman` enum('Diajukan','Disetujui','Ditolak','Belum Lunas','Lunas') DEFAULT NULL,
  `alasan_pinjaman` enum('Sekolah','Hajatan','Renovasi Rumah','Usaha','Elektronik/Transportasi','Konsumtif Lainnya') DEFAULT NULL,
  `input_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `payroll_anggota`, `tahun_pengajuan`, `bulan_pengajuan`, `jumlah_pinjaman`, `angsuran_pokok`, `bunga_pinjaman_persen`, `bunga_pinjaman`, `jangka_waktu`, `angsuran_ke`, `status_pinjaman`, `alasan_pinjaman`, `input_date_time`, `update_date_time`) VALUES
(1, 1, 3, 1, 20000000, 2000000, 7.5, 1500000, 10, 7, 'Belum Lunas', 'Usaha', '2023-07-17 11:31:18', '2023-07-19 05:31:37'),
(14, 2, 3, 7, 5000000, 1000000, 9, 450000, 5, 0, 'Diajukan', '', '2023-07-19 07:00:47', '2023-07-19 07:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_barang`
--

CREATE TABLE `pengajuan_barang` (
  `id` bigint(20) NOT NULL,
  `payroll_anggota` bigint(20) NOT NULL,
  `tahun_pengajuan` int(3) NOT NULL,
  `bulan_pengajuan` int(2) NOT NULL,
  `jumlah_pinjaman` bigint(20) NOT NULL,
  `angsuran_pokok` float NOT NULL,
  `bunga_pinjaman_persen` float NOT NULL,
  `bunga_pinjaman` bigint(20) NOT NULL,
  `jangka_waktu` int(2) NOT NULL,
  `angsuran_ke` int(2) NOT NULL,
  `nama_barang` text NOT NULL,
  `status_pinjaman` enum('Diajukan','Disetujui','Ditolak','Belum Lunas','Lunas') DEFAULT NULL,
  `alasan_pinjaman` enum('Sekolah','Hajatan','Renovasi Rumah','Usaha','Elektronik/Transportasi','Konsumtif Lainnya') DEFAULT NULL,
  `input_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_barang`
--

INSERT INTO `pengajuan_barang` (`id`, `payroll_anggota`, `tahun_pengajuan`, `bulan_pengajuan`, `jumlah_pinjaman`, `angsuran_pokok`, `bunga_pinjaman_persen`, `bunga_pinjaman`, `jangka_waktu`, `angsuran_ke`, `nama_barang`, `status_pinjaman`, `alasan_pinjaman`, `input_date_time`, `update_date_time`) VALUES
(1, 1, 3, 8, 6000000, 500000, 9, 540000, 12, 7, 'Laptop', 'Belum Lunas', '', '2023-08-01 15:18:37', '2023-08-01 15:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman_barang`
--

CREATE TABLE `pinjaman_barang` (
  `id_pinjaman` bigint(20) NOT NULL,
  `tahun_pinjaman` int(3) NOT NULL,
  `bulan_pinjaman` int(3) NOT NULL,
  `tanggal_pinjaman` date NOT NULL,
  `metode_bayar` int(5) NOT NULL,
  `payroll_anggota` bigint(20) NOT NULL,
  `angsuran_pokok` bigint(20) NOT NULL,
  `angsuran_bunga` bigint(20) NOT NULL,
  `angsuran_ke` int(3) NOT NULL,
  `jangka_waktu` int(3) NOT NULL,
  `nama_barang` text NOT NULL,
  `input_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman_barang`
--

INSERT INTO `pinjaman_barang` (`id_pinjaman`, `tahun_pinjaman`, `bulan_pinjaman`, `tanggal_pinjaman`, `metode_bayar`, `payroll_anggota`, `angsuran_pokok`, `angsuran_bunga`, `angsuran_ke`, `jangka_waktu`, `nama_barang`, `input_date_time`, `update_date_time`) VALUES
(1, 3, 1, '2023-01-11', 2, 1, 120139, 32325, 1, 10, 'Laptop', '2023-08-01 23:01:20', '2023-08-01 23:01:20'),
(2, 3, 2, '2023-02-11', 2, 1, 120139, 32325, 2, 10, 'Laptop', '2023-08-01 23:02:42', '2023-08-01 23:02:42'),
(3, 3, 3, '2023-03-11', 2, 1, 120139, 32325, 3, 10, 'Laptop', '2023-08-01 23:02:42', '2023-08-01 23:02:42'),
(4, 3, 4, '2023-04-11', 2, 1, 120139, 32325, 4, 10, 'Laptop', '2023-08-01 23:02:42', '2023-08-01 23:02:42'),
(5, 3, 5, '2023-05-11', 2, 1, 120139, 32325, 5, 10, 'Laptop', '2023-08-01 23:02:42', '2023-08-01 23:02:42'),
(6, 3, 6, '2023-06-11', 2, 1, 120139, 32325, 6, 10, 'Laptop', '2023-08-01 23:02:42', '2023-08-01 23:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `simpok_simwa`
--

CREATE TABLE `simpok_simwa` (
  `id_simpanan` bigint(20) NOT NULL,
  `tahun_simpanan` int(3) NOT NULL,
  `bulan_simpanan` int(2) NOT NULL,
  `payroll_simpanan` bigint(20) NOT NULL,
  `jenis_simpanan` enum('Simpanan Pokok','Simpanan Wajib') NOT NULL,
  `jenis_transaksi` enum('Add','Withdraw') NOT NULL,
  `jumlah_simpanan` float NOT NULL,
  `status_data` tinyint(4) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `simpok_simwa`
--

INSERT INTO `simpok_simwa` (`id_simpanan`, `tahun_simpanan`, `bulan_simpanan`, `payroll_simpanan`, `jenis_simpanan`, `jenis_transaksi`, `jumlah_simpanan`, `status_data`, `cdt`) VALUES
(1, 2, 1, 1, 'Simpanan Wajib', 'Add', 150000, 1, '2023-07-17 13:06:13'),
(2, 2, 2, 1, 'Simpanan Wajib', 'Add', 150000, 1, '2023-07-17 13:06:13'),
(3, 2, 3, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(4, 2, 4, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(5, 2, 5, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(6, 2, 6, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(7, 2, 7, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(8, 2, 8, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(9, 2, 9, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(10, 2, 10, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(11, 2, 11, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(12, 2, 12, 1, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(13, 2, 1, 3, 'Simpanan Wajib', 'Add', 150000, 1, '2023-07-17 13:06:13'),
(14, 2, 2, 3, 'Simpanan Wajib', 'Add', 150000, 1, '2023-07-17 13:06:13'),
(15, 2, 3, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(16, 2, 4, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(17, 2, 5, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(18, 2, 6, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(19, 2, 7, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(20, 2, 8, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(21, 2, 9, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(22, 2, 10, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(23, 2, 11, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(24, 2, 12, 3, 'Simpanan Wajib', 'Add', 200000, 1, '2023-07-17 13:06:13'),
(25, 2, 1, 2, 'Simpanan Wajib', 'Add', 150000, 1, '2023-07-17 13:06:13'),
(26, 2, 2, 2, 'Simpanan Wajib', 'Withdraw', 110000, 1, '2023-07-19 05:39:35'),
(27, 2, 1, 1, 'Simpanan Pokok', 'Add', 1000000, 1, '2023-07-17 13:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` bigint(20) NOT NULL,
  `tahun_tabungan` int(3) NOT NULL,
  `bulan_tabungan` int(2) NOT NULL,
  `tanggal_tabungan` date NOT NULL,
  `metode_bayar` int(5) NOT NULL,
  `payroll_anggota` bigint(20) NOT NULL,
  `jumlah_tabungan` bigint(20) NOT NULL,
  `jenis_tabungan` enum('Add','Withdraw') NOT NULL,
  `input_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `tahun_tabungan`, `bulan_tabungan`, `tanggal_tabungan`, `metode_bayar`, `payroll_anggota`, `jumlah_tabungan`, `jenis_tabungan`, `input_date_time`, `update_date_time`) VALUES
(1, 3, 1, '2023-01-11', 2, 1, 100000, 'Add', '2023-07-17 11:29:51', '2023-07-17 11:29:51'),
(2, 3, 2, '2023-02-11', 2, 1, 100000, 'Add', '2023-07-17 11:30:43', '2023-07-17 11:30:43'),
(3, 3, 3, '2023-03-11', 2, 1, 100000, 'Add', '2023-07-17 11:30:43', '2023-07-17 11:30:43'),
(4, 3, 4, '2023-04-11', 2, 1, 100000, 'Add', '2023-07-17 11:30:43', '2023-07-17 11:30:43'),
(5, 3, 5, '2023-05-11', 2, 1, 100000, 'Add', '2023-07-17 11:30:43', '2023-07-17 11:30:43'),
(6, 3, 6, '2023-06-11', 2, 1, 100000, 'Add', '2023-07-17 11:30:43', '2023-07-17 11:30:43'),
(7, 3, 7, '2023-07-11', 2, 1, 100000, 'Add', '2023-07-17 11:30:43', '2023-07-17 11:30:43'),
(8, 3, 4, '2023-04-15', 2, 1, 50000, 'Withdraw', '2023-07-19 01:19:27', '2023-07-19 00:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(3) NOT NULL,
  `int_tahun` int(4) NOT NULL,
  `text_tahun` varchar(4) NOT NULL,
  `status_tahun` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `int_tahun`, `text_tahun`, `status_tahun`, `cdt`) VALUES
(1, 2021, '2021', 1, '2023-05-30 06:42:50'),
(2, 2022, '2022', 1, '2023-05-30 06:42:50'),
(3, 2023, '2023', 1, '2023-05-30 06:42:50'),
(4, 2024, '2024', 1, '2023-05-30 06:42:50'),
(5, 2025, '2025', 1, '2023-05-30 06:42:50'),
(6, 2026, '2026', 1, '2023-05-30 06:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `tahun_transaksi` int(3) NOT NULL,
  `bulan_transaksi` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `kode_operator` int(3) NOT NULL,
  `nama_operator` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angsuran` bigint(20) NOT NULL,
  `jasa` bigint(20) NOT NULL,
  `simpanan_wajib` bigint(20) NOT NULL,
  `angsuran_ke` int(3) NOT NULL,
  `jangka_waktu` int(3) NOT NULL,
  `status` enum('Wajib','Lunas','Belum Lunas') NOT NULL,
  `tabungan` bigint(20) NOT NULL,
  `denda` bigint(20) NOT NULL,
  `sub_total` bigint(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `input_date_time` datetime NOT NULL,
  `update_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `usern` varchar(30) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `role` enum('Administrator','Pengurus','Anggota') NOT NULL,
  `id_anggota` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usern`, `passw`, `role`, `id_anggota`, `status`, `cdt`) VALUES
(1, 'akbar', 'akbar123', 'Administrator', NULL, 1, '2023-07-17 03:32:04'),
(2, 'rafi', 'rafi123', 'Anggota', 1, 1, '2023-07-17 03:32:04'),
(3, 'franky', 'franky123', 'Anggota', 2, 1, '2023-07-19 05:31:49'),
(4, 'mukri', 'mukri123', 'Anggota', 3, 1, '2023-07-19 07:07:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `fk_anggota_dept` (`dept_anggota`),
  ADD KEY `fk_anggota_bank` (`bank_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`),
  ADD KEY `fk_angsuran_bulan` (`bulan_angsuran`),
  ADD KEY `fk_angsuran_tahun` (`tahun_angsuran`),
  ADD KEY `fk_angsuran_paytod` (`metode_bayar`),
  ADD KEY `fk_angsuran_anggota` (`payroll_anggota`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id_config`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_paytod`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengajuan_anggota` (`payroll_anggota`),
  ADD KEY `fk_pengajuan_bulan` (`bulan_pengajuan`),
  ADD KEY `fk_pengajuan_tahun` (`tahun_pengajuan`);

--
-- Indexes for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_barang_anggota` (`payroll_anggota`),
  ADD KEY `fk_barang_bulan` (`bulan_pengajuan`),
  ADD KEY `fk_barang_tahun` (`tahun_pengajuan`);

--
-- Indexes for table `pinjaman_barang`
--
ALTER TABLE `pinjaman_barang`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `fk_pinjaman_bulan` (`bulan_pinjaman`),
  ADD KEY `fk_pinjaman_tahun` (`tahun_pinjaman`),
  ADD KEY `fk_pinjaman_paytod` (`metode_bayar`),
  ADD KEY `fk_pinjaman_anggota` (`payroll_anggota`);

--
-- Indexes for table `simpok_simwa`
--
ALTER TABLE `simpok_simwa`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `simpanan_tahun` (`tahun_simpanan`),
  ADD KEY `simpanan_bulan` (`bulan_simpanan`),
  ADD KEY `simpanan_anggota` (`payroll_simpanan`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungan`),
  ADD KEY `fk_tabungan_anggota` (`payroll_anggota`),
  ADD KEY `fk_tabungan_paytod` (`metode_bayar`),
  ADD KEY `fk_tabungan_tahun` (`tahun_tabungan`),
  ADD KEY `fk_tabungan_bulan` (`bulan_tabungan`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `data_operator_transaksi` (`kode_operator`),
  ADD KEY `data_nik_transaksi` (`nik`),
  ADD KEY `fk_transaksi_tahun` (`tahun_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id_config` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_dept` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_paytod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pinjaman_barang`
--
ALTER TABLE `pinjaman_barang`
  MODIFY `id_pinjaman` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `simpok_simwa`
--
ALTER TABLE `simpok_simwa`
  MODIFY `id_simpanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102543;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `fk_anggota_bank` FOREIGN KEY (`bank_anggota`) REFERENCES `bank` (`id_bank`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_anggota_dept` FOREIGN KEY (`dept_anggota`) REFERENCES `department` (`id_dept`) ON UPDATE CASCADE;

--
-- Constraints for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `fk_angsuran_anggota` FOREIGN KEY (`payroll_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_angsuran_bulan` FOREIGN KEY (`bulan_angsuran`) REFERENCES `bulan` (`id_bulan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_angsuran_paytod` FOREIGN KEY (`metode_bayar`) REFERENCES `metode_bayar` (`id_paytod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_angsuran_tahun` FOREIGN KEY (`tahun_angsuran`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `fk_pengajuan_anggota` FOREIGN KEY (`payroll_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengajuan_bulan` FOREIGN KEY (`bulan_pengajuan`) REFERENCES `bulan` (`id_bulan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengajuan_tahun` FOREIGN KEY (`tahun_pengajuan`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  ADD CONSTRAINT `fk_barang_anggota` FOREIGN KEY (`payroll_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_barang_bulan` FOREIGN KEY (`bulan_pengajuan`) REFERENCES `bulan` (`id_bulan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_barang_tahun` FOREIGN KEY (`tahun_pengajuan`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `pinjaman_barang`
--
ALTER TABLE `pinjaman_barang`
  ADD CONSTRAINT `fk_pinjaman_anggota` FOREIGN KEY (`payroll_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pinjaman_bulan` FOREIGN KEY (`bulan_pinjaman`) REFERENCES `bulan` (`id_bulan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pinjaman_paytod` FOREIGN KEY (`metode_bayar`) REFERENCES `metode_bayar` (`id_paytod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pinjaman_tahun` FOREIGN KEY (`tahun_pinjaman`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `simpok_simwa`
--
ALTER TABLE `simpok_simwa`
  ADD CONSTRAINT `simpanan_anggota` FOREIGN KEY (`payroll_simpanan`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `simpanan_bulan` FOREIGN KEY (`bulan_simpanan`) REFERENCES `bulan` (`id_bulan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `simpanan_tahun` FOREIGN KEY (`tahun_simpanan`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD CONSTRAINT `fk_tabungan_anggota` FOREIGN KEY (`payroll_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tabungan_bulan` FOREIGN KEY (`bulan_tabungan`) REFERENCES `bulan` (`id_bulan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tabungan_paytod` FOREIGN KEY (`metode_bayar`) REFERENCES `metode_bayar` (`id_paytod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tabungan_tahun` FOREIGN KEY (`tahun_tabungan`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_bayar` FOREIGN KEY (`kode_operator`) REFERENCES `metode_bayar` (`id_paytod`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_tahun` FOREIGN KEY (`tahun_transaksi`) REFERENCES `tahun` (`id_tahun`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
