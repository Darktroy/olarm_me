-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2019 at 09:47 AM
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
-- Table structure for table `recommended_cards`
--

CREATE TABLE `recommended_cards` (
  `recommendedCards_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `card_id` int(10) UNSIGNED DEFAULT NULL,
  `recommended_by_user_id` int(10) UNSIGNED DEFAULT NULL,
  `recommended_for_user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recommended_cards`
--

INSERT INTO `recommended_cards` (`recommendedCards_id`, `created_at`, `updated_at`, `card_id`, `recommended_by_user_id`, `recommended_for_user_id`) VALUES
(1, NULL, NULL, 20, 19, 35),
(2, NULL, NULL, 18, 19, 35),
(3, NULL, NULL, 19, 19, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recommended_cards`
--
ALTER TABLE `recommended_cards`
  ADD PRIMARY KEY (`recommendedCards_id`),
  ADD KEY `recommended_cards_card_id_index` (`card_id`),
  ADD KEY `recommended_cards_recommended_by_user_id_index` (`recommended_by_user_id`),
  ADD KEY `recommended_cards_recommended_for_user_id_index` (`recommended_for_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recommended_cards`
--
ALTER TABLE `recommended_cards`
  MODIFY `recommendedCards_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
