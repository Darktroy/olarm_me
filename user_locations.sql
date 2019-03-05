-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2019 at 12:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bw_iessa`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_locations`
--

CREATE TABLE `user_locations` (
  `userLocation_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(64) NOT NULL,
  `card_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formatted_address` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_locations`
--

INSERT INTO `user_locations` (`userLocation_id`, `user_id`, `card_id`, `created_at`, `updated_at`, `lat`, `long`, `country`, `state`, `city`, `formatted_address`) VALUES
(1, 35, 24, '2019-03-05 07:18:11', '2019-03-05 07:18:11', '30.0791746', '31.2485775', NULL, NULL, NULL, '128 Kholosi, Gesr Shubra, Shobra, Cairo Governorate, Egypt'),
(2, 47, 25, '2019-03-05 08:21:02', '2019-03-05 08:21:02', '30.0791746', '31.2485775', NULL, NULL, NULL, '128 Kholosi, Gesr Shubra, Shobra, Cairo Governorate, Egypt'),
(3, 48, 26, '2019-03-05 09:12:20', '2019-03-05 09:12:20', '30.0791746', '31.2485775', NULL, NULL, NULL, '128 Kholosi, Gesr Shubra, Shobra, Cairo Governorate, Egypt'),
(4, 49, 27, '2019-03-05 09:13:29', '2019-03-05 09:13:29', '30.0791746', '31.2485775', NULL, NULL, NULL, '128 Kholosi, Gesr Shubra, Shobra, Cairo Governorate, Egypt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_locations`
--
ALTER TABLE `user_locations`
  ADD PRIMARY KEY (`userLocation_id`),
  ADD UNIQUE KEY `card_id` (`card_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_locations`
--
ALTER TABLE `user_locations`
  MODIFY `userLocation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
