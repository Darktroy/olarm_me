-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 06:28 AM
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
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_landline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_speciality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_countary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_tax_card` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_registery` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
