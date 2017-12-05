-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2017 at 03:32 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ingeteamphil_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_equipments`
--

DROP TABLE IF EXISTS `archive_equipments`;
CREATE TABLE IF NOT EXISTS `archive_equipments` (
  `id` int(255) NOT NULL,
  `sap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hs_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_equipments`
--

INSERT INTO `archive_equipments` (`id`, `sap`, `parts`, `units`, `hs_code`, `conditions`, `created_at`, `updated_at`) VALUES
(4, '5678', 'solar3', '5', '34567', 'Good', '2017-11-18 16:33:06', '2017-11-18 16:33:06'),
(3, '1234', 'solar2', '3', '12345', 'Good', '2017-11-28 06:12:10', '2017-11-28 06:12:10'),
(2, '123', 'solar1', '2', '1234', 'Good', '2017-11-28 06:12:13', '2017-11-28 06:12:13'),
(4, '1234', 'solar1', '1', '12345', 'Good', '2017-11-28 06:15:00', '2017-11-28 06:15:00'),
(18042, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Defective', '2017-12-02 09:30:57', '2017-12-02 09:30:57'),
(6, '123', 'solar2', '1', '12345', 'To be Replaced', '2017-12-03 12:00:14', '2017-12-03 12:00:14'),
(1, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Defective', '2017-12-03 12:03:01', '2017-12-03 12:03:01'),
(18039, '1234', 'solar4', '1', '1234', 'Good', '2017-12-03 12:15:29', '2017-12-03 12:15:29'),
(7, '123', 'solar3', '1', '12345', 'Defective', '2017-12-03 12:31:00', '2017-12-03 12:31:00'),
(18045, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 13:48:15', '2017-12-03 13:48:15'),
(18044, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 14:02:56', '2017-12-03 14:02:56'),
(18043, '1234567', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8000', 'To be Replaced', '2017-12-03 14:05:09', '2017-12-03 14:05:09'),
(18041, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Defective', '2017-12-03 14:05:46', '2017-12-03 14:05:46'),
(18050, '123456`', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 14:07:55', '2017-12-03 14:07:55'),
(18048, '123456`', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 14:22:54', '2017-12-03 14:22:54'),
(18049, '123456`', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 14:23:42', '2017-12-03 14:23:42'),
(18052, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 14:32:08', '2017-12-03 14:32:08'),
(18053, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 14:43:06', '2017-12-03 14:43:06'),
(18054, '1234', 'solar1', '1', '1234', 'Good', '2017-12-03 15:18:20', '2017-12-03 15:18:20'),
(18047, '1234', 'solar2', '1', '12345', 'Good', '2017-12-03 15:19:27', '2017-12-03 15:19:27'),
(18051, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '2017-12-03 15:32:35', '2017-12-03 15:32:35'),
(18055, '1234', 'solar1', '1', '1234', 'Good', '2017-12-03 16:19:34', '2017-12-03 16:19:34'),
(18040, '1234', 'solar4', '1', '1234', 'To be Replaced', '2017-12-04 02:44:31', '2017-12-04 02:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `archive_users`
--

DROP TABLE IF EXISTS `archive_users`;
CREATE TABLE IF NOT EXISTS `archive_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `archive_users_id_unique` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `archive_users`
--

INSERT INTO `archive_users` (`id`, `name`, `username`, `email`, `role`, `created_at`, `updated_at`) VALUES
(6, 'hero casas', 'Hero123', 'rcasas@gmail.com', 'Employee', '2017-11-21 04:53:03', '2017-11-21 04:53:03'),
(8, 'Reymart', 'Casas123', 'rcasas@gmail.com', 'Employee', '2017-11-22 23:36:15', '2017-11-22 23:36:15'),
(1, 'mikke baldonado', 'mikke123', 'baldonadomikmik@gmail.com', 'admin', '2017-12-03 04:55:55', '2017-12-03 04:55:55'),
(2, 'Eva Aparece', 'bambam123', 'evadaparece@gmail.com', 'employee', '2017-12-03 06:01:50', '2017-12-03 06:01:50'),
(10, 'mikke baldonado', 'mikke123', 'baldonadomikmik@gmail.com', 'Admin', '2017-12-03 06:02:19', '2017-12-03 06:02:19'),
(9, 'hero casas', 'Hero123', 'rcasas@gmail.com', 'Employee', '2017-12-03 08:50:37', '2017-12-03 08:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

DROP TABLE IF EXISTS `borrowed`;
CREATE TABLE IF NOT EXISTS `borrowed` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipments_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parts` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE IF NOT EXISTS `equipments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parts` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hs_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `equipments_id_unique` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `sap`, `parts`, `units`, `hs_code`, `condition`, `users_id`, `updated_at`, `created_at`) VALUES
(1, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'Good', '', '2017-12-04 16:05:02', '2017-12-04 16:05:02'),
(2, '123456', 'SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '1', '8536490000', 'To be Replaced', '', '2017-12-04 08:08:13', '2017-12-04 16:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2017_11_09_005403_create_equipments_table', 5),
(19, '2017_11_15_040333_create_borrowed_table', 5),
(8, '2017_11_17_030557_create_archive_user_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'mikke baldonado', 'mikke123', 'baldonadomikmik@gmail.com', 'Admin', '$2y$10$xysiIdC6uPv0oyZ446aPfeFY4U2LrvtYWJREMs5py9XTqjf/GfMhO', '2V1YkKrGdQhYdjYPwejAzgXoQhhmFnxTX2k50y3uvylg5hwcTsbtiXhnJu2N', '2017-12-03 06:46:48', '2017-12-03 06:46:48'),
(14, 'Eva Aparece', 'bambam123', 'evadaparece@gmail.com', 'Employee', '$2y$10$4bJDTvqPwChOjIrmHhHoLeV/EndT/2dD/y1OlBNuSPNR9o8WZhmW.', 'W9eCDDFtG7PriAZqmkrE7DpeZF5O7nib9tvxhbANSiWq5ME1xJJrt0rWc5A9', '2017-12-03 09:07:33', '2017-12-03 09:07:33'),
(7, 'Dianne Regacion', 'dianne12', 'dregacion@gmail.com', 'Admin', '$2y$10$v.i7Hiey0Jq.HCnOSI6sgOv4tvMYd3L4i33Mw57VGHc8C8S4yNSve', 'WqFUaW2zOpn6ppQ7hoYGBMJIfrkN7gLcgcYJPkPtidkSqGSIycsQ8lRODhD1', '2017-11-21 04:56:59', '2017-12-03 05:22:43'),
(13, 'admin12', 'admin12', 'admin1@gmail.com', 'Admin', '$2y$10$9A/YEBrEpNOArsbibztY.ezd5vSGWWW2J/FVuaTEfr.CjNtsSv4rW', NULL, '2017-12-03 09:06:31', '2017-12-03 09:06:58'),
(11, 'jhay-ar', 'jhay12', 'admin@gmail.com', 'Employee', '$2y$10$LPOkX/LbQH43mmQUtJc41e0x/C4TzsQrnR.lOzx/nFSM8lSjgn.Ya', 'HuFST0aE7hA2jguxF2oBvGXRR21SOJgS2Fp0kDjqQPEtQm2Av3QZTxMRZLBI', '2017-12-03 05:46:48', '2017-12-03 08:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

DROP TABLE IF EXISTS `users_log`;
CREATE TABLE IF NOT EXISTS `users_log` (
  `id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`id`, `name`, `email`, `action`, `created_at`, `updated_at`) VALUES
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment ', '2017-11-19 11:11:21', '2017-11-19 11:11:21'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment ', '2017-11-19 11:13:16', '2017-11-19 11:13:16'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-11-19 15:16:19', '2017-11-19 15:16:19'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-11-19 15:22:53', '2017-11-19 15:22:53'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-11-19 15:23:55', '2017-11-19 15:23:55'),
(0, 'eva aparece', 'evadaparece@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-11-19 15:26:47', '2017-11-19 15:26:47'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment solar2', '2017-11-21 12:56:17', '2017-11-21 12:56:17'),
(0, 'Dianne Regacion', 'dregacion@gmail.com', 'Updated equipment solar1', '2017-11-23 00:32:06', '2017-11-23 00:32:06'),
(0, 'eva aparece', 'evadaparece@gmail.com', 'Updated equipment solar2', '2017-11-23 07:33:18', '2017-11-23 07:33:18'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment solar4', '2017-11-28 06:44:07', '2017-11-28 06:44:07'),
(0, 'eva aparece', 'evadaparece@gmail.com', 'Updated equipment solar4', '2017-11-28 07:09:39', '2017-11-28 07:09:39'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-11-28 07:21:38', '2017-11-28 07:21:38'),
(0, 'eva aparece', 'evadaparece@gmail.com', 'Updated equipment solar4', '2017-11-28 07:38:15', '2017-11-28 07:38:15'),
(0, 'eva aparece', 'evadaparece@gmail.com', 'Updated equipment solar2', '2017-11-28 07:38:27', '2017-11-28 07:38:27'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-11-28 08:02:14', '2017-11-28 08:02:14'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment solar3', '2017-12-02 03:59:13', '2017-12-02 03:59:13'),
(0, 'eva aparece', 'evadaparece@gmail.com', 'Updated equipment solar4', '2017-12-03 06:04:58', '2017-12-03 06:04:58'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-03 07:56:26', '2017-12-03 07:56:26'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-03 13:48:32', '2017-12-03 13:48:32'),
(0, 'jhay-ar', 'jhay@gmail.com', 'Updated equipment solar4', '2017-12-03 13:49:57', '2017-12-03 13:49:57'),
(0, 'Dianne Regacion', 'dregacion@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-03 17:01:26', '2017-12-03 17:01:26'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment solar3', '2017-12-04 13:32:36', '2017-12-04 13:32:36'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 14:06:49', '2017-12-04 14:06:49'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 14:57:21', '2017-12-04 14:57:21'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment solar1', '2017-12-04 15:07:23', '2017-12-04 15:07:23'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 15:22:21', '2017-12-04 15:22:21'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 15:25:59', '2017-12-04 15:25:59'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 15:27:30', '2017-12-04 15:27:30'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 15:47:23', '2017-12-04 15:47:23'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 16:05:32', '2017-12-04 16:05:32'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 16:06:11', '2017-12-04 16:06:11'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 16:08:13', '2017-12-04 16:08:13'),
(0, 'mikke baldonado', 'baldonadomikmik@gmail.com', 'Updated equipment SET Motorized switch-breaker 4P 1800A 1000VDC Telergon', '2017-12-04 16:09:02', '2017-12-04 16:09:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
