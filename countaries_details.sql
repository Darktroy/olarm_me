-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2019 at 07:45 AM
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
-- Table structure for table `countaries_details`
--

CREATE TABLE `countaries_details` (
  `countariesDetails_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `countaryName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cityName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countaries_details`
--

INSERT INTO `countaries_details` (`countariesDetails_id`, `created_at`, `updated_at`, `countaryName`, `cityName`, `district`) VALUES
(1, NULL, NULL, 'countaryTest 1', 'city 1', 'district 1'),
(2, NULL, NULL, 'countaryTest 1', 'city 2', 'district 1 city 2'),
(3, NULL, NULL, 'countaryTest 1', 'city 1', 'district2 test city 1'),
(4, NULL, NULL, 'countaryTest 2', 'city countyr 2 test', 'district test 1 c 2 c2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countaries_details`
--
ALTER TABLE `countaries_details`
  ADD PRIMARY KEY (`countariesDetails_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countaries_details`
--
ALTER TABLE `countaries_details`
  MODIFY `countariesDetails_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
