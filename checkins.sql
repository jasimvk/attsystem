-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 01:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqueId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkins`
--

INSERT INTO `checkins` (`id`, `uniqueId`, `created_at`, `updated_at`) VALUES
(22, 123456, '2022-06-15 07:41:57', '2022-06-15 07:41:57'),
(23, 123456, '2022-06-15 07:43:38', '2022-06-14 07:43:38'),
(29, 123456, '2022-06-16 04:12:02', '2022-06-16 04:12:02'),
(30, 123456, '2022-06-16 04:16:26', '2022-06-16 04:16:26'),
(31, 786, '2022-06-16 04:17:20', '2022-06-16 04:17:20'),
(32, 123456, '2022-05-18 02:25:39', '2022-05-11 02:25:39'),
(33, 123456, '2022-06-20 02:44:46', '2022-06-20 02:44:46'),
(34, 123456, '2022-06-21 04:06:52', '2022-06-21 04:06:52'),
(35, 786, '2022-06-21 04:52:21', '2022-06-21 04:52:21'),
(36, 987456, '2022-06-21 05:24:48', '2022-06-21 05:24:48'),
(37, 123456, '2022-06-21 05:28:03', '2022-06-21 05:28:03'),
(38, 654123, '2022-06-21 05:41:10', '2022-06-21 05:41:10'),
(39, 123456, '2022-06-21 05:41:13', '2022-06-21 05:41:13'),
(40, 123456, '2022-06-21 05:41:18', '2022-06-21 05:41:18'),
(41, 654123, '2022-06-21 05:42:08', '2022-06-21 05:42:08'),
(42, 123456, '2022-06-21 06:30:25', '2022-06-21 06:30:25'),
(43, 123456, '2022-06-21 07:04:19', '2022-06-21 07:04:19'),
(44, 123456, '2022-06-21 07:26:21', '2022-06-21 07:26:21'),
(45, 123456, '2022-06-21 07:35:50', '2022-06-21 07:35:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
