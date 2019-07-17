-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2019 at 01:50 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

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
-- Table structure for table `activation_processes`
--

CREATE TABLE `activation_processes` (
  `id` int(11) NOT NULL,
  `activationcode` varchar(4) NOT NULL,
  `user_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `activation_processes`
--

INSERT INTO `activation_processes` (`id`, `activationcode`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a111', 7, '2018-08-07 15:46:56', '2018-08-07 15:46:56', NULL),
(4, 'a111', 12, '2018-08-20 00:27:16', '2018-08-20 00:27:16', NULL),
(5, 'a111', 15, '2018-09-10 06:26:04', '2018-09-10 06:26:04', NULL),
(6, 'a111', 1, '2018-11-24 09:16:03', '2018-11-24 09:16:03', NULL),
(7, 'a111', 16, '2018-11-24 14:02:17', '2018-11-24 14:02:17', NULL),
(9, 'a111', 18, '2018-12-02 02:15:47', '2018-12-02 02:15:47', NULL),
(10, 'a111', 33, '2019-01-12 05:46:06', '2019-01-12 05:46:06', NULL),
(11, 'a111', 34, '2019-01-12 05:46:12', '2019-01-12 05:46:12', NULL),
(12, 'a111', 35, '2019-01-12 05:46:20', '2019-01-12 05:46:20', NULL),
(13, 'a111', 36, '2019-01-12 06:29:56', '2019-01-12 06:29:56', NULL),
(14, 'a111', 47, '2019-03-05 10:13:17', '2019-03-05 10:13:17', NULL),
(15, 'a111', 48, '2019-03-05 10:21:15', '2019-03-05 10:21:15', NULL),
(16, 'a111', 49, '2019-03-05 11:12:40', '2019-03-05 11:12:40', NULL),
(17, 'a111', 2, '2019-04-16 11:30:50', '2019-04-16 11:30:50', NULL),
(18, 'a111', 3, '2019-04-16 15:38:18', '2019-04-16 15:38:18', NULL),
(19, 'a111', 4, '2019-04-16 16:13:06', '2019-04-16 16:13:06', NULL),
(20, 'a111', 5, '2019-04-16 17:40:20', '2019-04-16 17:40:20', NULL),
(21, 'a111', 6, '2019-04-16 18:21:42', '2019-04-16 18:21:42', NULL),
(22, 'a111', 8, '2019-04-21 05:00:47', '2019-04-21 05:00:47', NULL),
(23, 'a111', 9, '2019-04-21 05:07:07', '2019-04-21 05:07:07', NULL),
(24, 'a111', 10, '2019-04-25 08:34:43', '2019-04-25 08:34:43', NULL),
(25, 'a111', 37, '2019-04-25 08:55:45', '2019-04-25 08:55:45', NULL),
(26, 'a111', 38, '2019-04-25 08:58:31', '2019-04-25 08:58:31', NULL),
(27, 'a111', 39, '2019-04-25 08:59:04', '2019-04-25 08:59:04', NULL),
(28, 'a111', 40, '2019-04-25 09:01:17', '2019-04-25 09:01:17', NULL),
(29, 'a111', 41, '2019-04-25 09:02:32', '2019-04-25 09:02:32', NULL),
(30, 'a111', 42, '2019-04-25 09:05:17', '2019-04-25 09:05:17', NULL),
(31, 'a111', 43, '2019-04-25 09:07:53', '2019-04-25 09:07:53', NULL),
(32, 'a111', 44, '2019-04-25 09:09:36', '2019-04-25 09:09:36', NULL),
(33, 'a111', 45, '2019-04-25 09:13:41', '2019-04-25 09:13:41', NULL),
(34, 'a111', 46, '2019-04-25 09:15:16', '2019-04-25 09:15:16', NULL),
(35, 'a111', 50, '2019-04-25 14:31:23', '2019-04-25 14:31:23', NULL),
(36, 'a111', 51, '2019-04-25 14:32:34', '2019-04-25 14:32:34', NULL),
(37, 'a111', 52, '2019-04-25 14:37:25', '2019-04-25 14:37:25', NULL),
(38, 'a111', 53, '2019-04-26 12:19:20', '2019-04-26 12:19:20', NULL),
(39, 'a111', 54, '2019-04-26 12:32:19', '2019-04-26 12:32:19', NULL),
(40, 'a111', 55, '2019-04-26 12:44:04', '2019-04-26 12:44:04', NULL),
(41, 'a111', 56, '2019-04-28 07:41:50', '2019-04-28 07:41:50', NULL),
(42, 'a111', 59, '2019-04-28 07:49:03', '2019-04-28 07:49:03', NULL),
(43, 'a111', 60, '2019-04-28 09:18:55', '2019-04-28 09:18:55', NULL),
(44, 'a111', 61, '2019-04-30 07:05:04', '2019-04-30 07:05:04', NULL),
(45, 'a111', 62, '2019-05-02 12:57:16', '2019-05-02 12:57:16', NULL),
(46, 'a111', 64, '2019-05-05 10:05:53', '2019-05-05 10:05:53', NULL),
(47, 'a111', 65, '2019-05-05 14:55:09', '2019-05-05 14:55:09', NULL),
(48, 'a111', 66, '2019-05-06 08:18:12', '2019-05-06 08:18:12', NULL),
(49, 'a111', 68, '2019-05-06 08:23:13', '2019-05-06 08:23:13', NULL),
(58, 'a111', 77, '2019-05-11 13:18:08', '2019-05-11 13:18:08', NULL),
(59, 'a111', 78, '2019-05-11 13:19:34', '2019-05-11 13:19:34', NULL),
(60, 'a111', 79, '2019-07-01 09:36:16', '2019-07-01 09:36:16', NULL),
(61, 'a111', 80, '2019-07-07 04:49:50', '2019-07-07 04:49:50', NULL),
(62, 'a111', 81, '2019-07-08 06:40:46', '2019-07-08 06:40:46', NULL),
(63, 'a111', 82, '2019-07-09 02:09:36', '2019-07-09 02:09:36', NULL),
(64, 'a111', 83, '2019-07-09 10:45:39', '2019-07-09 10:45:39', NULL),
(65, 'a111', 84, '2019-07-12 13:26:03', '2019-07-12 13:26:03', NULL),
(66, 'a111', 85, '2019-07-17 02:38:37', '2019-07-17 02:38:37', NULL),
(67, 'a111', 86, '2019-07-17 02:40:11', '2019-07-17 02:40:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activity_description`
--

CREATE TABLE `activity_description` (
  `id` int(4) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `activity_description`
--

INSERT INTO `activity_description` (`id`, `description`) VALUES
(1, 'newPassword'),
(2, 'createCardHolder');

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `branch_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`branch_id`, `created_at`, `updated_at`, `company_id`, `name`, `address`) VALUES
(1, '2018-12-25 04:48:27', '2018-12-25 04:48:27', 8, 'wvfennmjnnf', 'fcwe'),
(2, '2018-12-25 05:03:13', '2018-12-25 05:03:13', 7, 'defb', 'address dfbswv'),
(3, '2018-12-26 02:29:19', '2018-12-26 02:29:19', 7, 'ac', 'wqec');

-- --------------------------------------------------------

--
-- Table structure for table `cardpools`
--

CREATE TABLE `cardpools` (
  `cardpool_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `card_holder_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardpools`
--

INSERT INTO `cardpools` (`cardpool_id`, `created_at`, `updated_at`, `company_id`, `card_holder_id`) VALUES
(1, NULL, NULL, 8, 3),
(2, NULL, NULL, 8, 4),
(3, NULL, NULL, 8, 5),
(4, '2019-01-31 05:53:54', '2019-01-31 05:53:54', 8, 12);

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `card_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `last_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` int(11) NOT NULL,
  `privacy` int(11) NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` varchar(2056) CHARACTER SET utf32 DEFAULT NULL,
  `youtube_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_layout_id` int(3) NOT NULL,
  `logo` varchar(2056) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(2056) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal` int(2) NOT NULL DEFAULT '0',
  `card_holder_id` int(5) NOT NULL DEFAULT '0',
  `company_id` int(3) NOT NULL DEFAULT '0',
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `public` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`card_id`, `created_at`, `updated_at`, `user_id`, `last_name`, `first_name`, `create_by`, `privacy`, `company_name`, `position`, `cell_phone_number`, `landline`, `fax`, `website_url`, `about_me`, `youtube_url`, `instagram_url`, `twitter_url`, `facebook_url`, `alias`, `template_layout_id`, `logo`, `picture`, `personal`, `card_holder_id`, `company_id`, `gender`, `public`) VALUES
(1, '2019-04-10 04:10:57', '2019-04-10 04:10:57', 80, 'testLN', 'testFN', 80, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://localhost/BWmob/public/logo_image/logo_3449ddb6cc2b61dda4daa2e5a816eb99c4ca4238a0b923820dcc509a6f75849b.jpg', 'http://localhost/BWmob/public/card_image/profile_pic_c4ca4238a0b923820dcc509a6f75849b.jpg', 1, 0, 0, 'male', 1),
(13, '2019-05-05 17:34:41', '2019-05-05 17:34:41', 81, 'owned card', 'owned card', 60, 1, 'f', 'r', '22222555', '25885258', '555', 'r to', 'df', 'ddf', 'ddfff', 'f', 'd', NULL, 11, 'http://businessway-appiumtech.com/Testbw/public/logo_image/logo_75ef00e1c933952eaeff3bd32a2c6afd072b030ba126b2f4b2374f342be9ed44.jpg', ' ', 1, 0, 0, 'male', 1),
(15, '2019-07-09 09:14:36', '2019-07-09 09:14:36', 82, 'testLN', 'testFN', 82, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://businessway-appiumtech.com/Testbw/public/logo_image/logo_653f5185f8671720fa94fa237504257d9778d5d219c5080b9a6a17bef029331c.jpg', 'http://businessway-appiumtech.com/Testbw/public/card_image/profile_pic_9778d5d219c5080b9a6a17bef029331c.png', 1, 0, 0, 'male', 1),
(16, '2019-07-09 09:25:56', '2019-07-09 09:25:56', 80, 'jul', 'testî7', 80, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://businessway-appiumtech.com/Testbw/public/logo_image/logo_c491b93d8613fa0fd760e4481fe99541f033ab37c30201f73f142449d037028d.jpg', 'http://businessway-appiumtech.com/Testbw/public/card_image/profile_pic_f033ab37c30201f73f142449d037028d.png', 1, 0, 0, 'male', 1),
(17, '2019-07-09 17:46:18', '2019-07-09 17:46:18', 83, 'owned card', 'owned card', 83, 1, 'f', 'f', '8', '5', '5', 'cgb', 'fcg', 'xgy', 'fghc', 'ft', 'ff', NULL, 11, 'http://businessway-appiumtech.com/Testbw/public/logo_image/logo_894f628d67a99ce2ce6d03a3c6e2782bfe9fc289c3ff0af142b6d3bead98a923.jpg', ' ', 1, 0, 0, 'male', 1),
(18, '2019-07-13 00:04:11', '2019-07-13 00:04:11', 84, 'testLN', 'testFN', 84, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://businessway-appiumtech.com/Testbw/public/logo_image/logo_dcc92dea805d2fac06224ab2c62cdd5068d30a9594728bc39aa24be94b319d21.jpg', 'http://businessway-appiumtech.com/Testbw/public/card_image/profile_pic_68d30a9594728bc39aa24be94b319d21.jpg', 1, 0, 0, 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cards_holders`
--

CREATE TABLE `cards_holders` (
  `card_holder_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canDelete` int(1) NOT NULL DEFAULT '1',
  `company_id` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards_holders`
--

INSERT INTO `cards_holders` (`card_holder_id`, `created_at`, `updated_at`, `user_id`, `name`, `canDelete`, `company_id`) VALUES
(0, NULL, NULL, NULL, 'default', 0, NULL),
(1, NULL, NULL, NULL, 'deleted', 0, NULL),
(3, '2018-08-16 14:28:46', '2018-08-16 14:28:46', 8, 'test3', 1, NULL),
(5, '2018-08-29 08:51:51', '2018-08-29 08:51:51', 35, 'test34', 1, 8),
(6, NULL, NULL, NULL, 'pending', 0, NULL),
(7, NULL, NULL, NULL, 'colleagues', 0, NULL),
(8, NULL, NULL, NULL, 'cardpool', 0, NULL),
(9, '2019-01-31 05:35:39', '2019-01-31 05:35:39', NULL, 'wef', 1, NULL),
(10, '2019-01-31 05:39:05', '2019-01-31 05:39:05', NULL, 'wevfeq', 1, 8),
(12, '2019-01-31 05:53:54', '2019-01-31 05:53:54', NULL, 'we', 1, 8),
(13, '2019-01-31 08:14:57', '2019-01-31 08:14:57', 37, 'wevfeq', 1, NULL),
(15, '2019-04-10 07:26:46', '2019-04-10 07:26:46', 1, 'test34', 1, NULL),
(16, '2019-04-10 07:26:59', '2019-04-10 07:26:59', 1, 'test16', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `card_to_interests`
--

CREATE TABLE `card_to_interests` (
  `card_to_interest_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `interest_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `card_id` int(5) NOT NULL,
  `private` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card_to_interests`
--

INSERT INTO `card_to_interests` (`card_to_interest_id`, `created_at`, `updated_at`, `interest_id`, `name`, `user_id`, `card_id`, `private`) VALUES
(1, '2019-04-10 04:11:57', '2019-04-10 04:11:57', 1, 'interest trest 1', 1, 1, '0'),
(2, '2019-04-10 04:11:57', '2019-04-10 04:11:57', 0, 'kora', 1, 1, '1');

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
  `user_id` int(64) NOT NULL,
  `approve` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `created_at`, `updated_at`, `company_name`, `company_logo`, `company_landline`, `company_fax`, `company_address`, `company_website`, `company_about`, `company_facebook`, `company_twitter`, `company_instagram`, `company_youtube`, `company_field`, `company_industry`, `company_speciality`, `company_countary`, `company_city`, `company_district`, `company_tax_card`, `company_registery`, `user_id`, `approve`) VALUES
(7, '2018-12-24 14:16:18', '2018-12-24 14:16:18', 'dd', NULL, '5555555', '875421574', '128 khlouse', 'http://www.twest.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TC1545668178.jpg', 'RP1545668178.jpg', 27, 0),
(8, '2018-12-30 11:47:43', '2019-01-26 06:03:15', 'qweqw', NULL, '1455', '1546', 'qweqw', 'qweqw.com', 'fghjkjhgfcvgbhnjkjhgfghjkjhgfvcghjkjhgfghjkhgfghjkjhgfswvf', 'http://www.twest.com', 'http://www.twest.com', 'http://www.twest.com', 'http://www.twest.com', NULL, NULL, NULL, NULL, NULL, NULL, 'TC1546177663.png', 'RP1546177663.png', 28, 0),
(9, '2019-01-31 13:40:46', '2019-01-31 13:40:46', 'q', NULL, '23123', '432443', '128 khlouse', 'http://www.twest.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TC1548949246.png', 'RP1548949246.png', 46, 0);

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
(3, NULL, NULL, 'countaryTest 1', 'city 3', 'district2 test city 1'),
(4, NULL, NULL, 'countaryTest 2', 'city countyr 2 test', 'district test 1 c 2 c2');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `departement_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`departement_id`, `created_at`, `updated_at`, `branch_id`, `company_id`, `name`) VALUES
(1, NULL, NULL, 1, 8, 'test 1'),
(2, NULL, NULL, 1, 8, 'test 2'),
(3, '2019-01-15 05:20:02', '2019-01-15 05:20:02', 1, 8, 't3');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `title` varchar(190) NOT NULL,
  `email` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `title`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'title test', 'emailtest1@test.com', '2019-04-10 12:19:10', NULL, NULL),
(2, 'title test 1', 'email2@test.com', '2019-04-10 12:19:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_signatures`
--

CREATE TABLE `email_signatures` (
  `emailSignature_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `imageName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interestes`
--

CREATE TABLE `interestes` (
  `interest_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interestes`
--

INSERT INTO `interestes` (`interest_id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'interest trest 1'),
(2, NULL, NULL, 'interest trest  2'),
(3, NULL, NULL, 'interest trest 3'),
(4, NULL, NULL, 'interest trest 4'),
(5, NULL, NULL, 'interest trest 5');

-- --------------------------------------------------------

--
-- Table structure for table `invitation_contacts`
--

CREATE TABLE `invitation_contacts` (
  `invitation_contacts_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invited_user_id` int(10) UNSIGNED DEFAULT NULL,
  `invitation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messag_records`
--

CREATE TABLE `messag_records` (
  `messag_record_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_of_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messag_records`
--

INSERT INTO `messag_records` (`messag_record_id`, `created_at`, `updated_at`, `email`, `title_of_message`, `message`, `user_id`) VALUES
(3, '2018-11-29 03:44:29', '2018-11-29 03:44:29', 'el7ob_koloh@ba7bkWahshtine.a7a', NULL, 'sad', 14),
(5, '2019-04-10 08:23:37', '2019-04-10 08:23:37', 'emailtest1@test.com', NULL, 'sad', 1),
(6, '2019-04-14 01:11:19', '2019-04-14 01:11:19', 'emailtest1@test.com', '\"\"', 'sad', 1),
(7, '2019-04-14 01:11:41', '2019-04-14 01:11:41', 'emailtest1@test.com', '\"\"', 'sad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_08_09_042358_create_profiles_table', 2),
(9, '2018_08_16_082647_create_cards_table', 3),
(10, '2018_08_16_151038_create_cards_holders_table', 4),
(11, '2018_08_29_103002_create_user_cards_table', 5),
(12, '2018_08_29_142511_create_interestes_table', 6),
(13, '2018_08_29_145316_create_card_to_interests_table', 6),
(14, '2018_09_03_132430_create_faqs_table', 7),
(15, '2018_09_03_132537_create_terms_table', 7),
(16, '2018_09_19_064205_create_requests_table', 7),
(17, '2018_11_19_110500_create_companies_table', 7),
(18, '2018_11_24_051415_create_resetsteps_table', 8),
(19, '2018_11_25_204848_create_departments_table', 9),
(20, '2018_11_29_034537_create_messag_records_table', 10),
(21, '2018_11_30_050432_create_recent_activities_table', 11),
(22, '2018_11_30_162408_create_invitation_contacts_table', 12),
(23, '2018_12_02_044138_create_stagings_table', 13),
(24, '2018_12_24_164603_create_branchs_table', 14),
(25, '2018_12_25_080902_create_departements_table', 15),
(26, '2018_12_30_115731_create_user_to_companies_table', 16),
(27, '2019_01_12_070123_create_email_signatures_table', 17),
(28, '2019_01_17_055058_create_countaries_details_table', 18),
(29, '2019_01_31_001146_create_cardpools_table', 19),
(30, '2019_02_26_075811_create_recommended_cards_table', 20),
(31, '2019_03_05_021828_create_user_locations_table', 21),
(32, '2019_04_09_100403_create_user_card_notes_table', 22),
(33, '2019_04_09_113115_create_user_card_reminders_table', 23),
(34, '2019_04_10_044626_create_qr_code_users_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('01a0b71db0df5efdf5002f8377d5a6f40640e83574494cdf2c4a723cbe907c30799f8f14cef6f25c', 42, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:05:17', '2019-04-25 16:05:17', '2020-04-25 09:05:17'),
('0369bf6c088170953cf12a5a387ccdd56301e76e663ee1cad8a80afcc7740cc6923b2206f9898100', 6, 8, 'LaraPassport', '[]', 0, '2019-05-03 22:37:45', '2019-05-03 22:37:45', '2020-05-03 15:37:45'),
('03d96c9adc65cc0efc969c9a1c0e38df6d8e1e0e9430efe02539c197ed1183eb558a160a40fd8fbf', 14, 5, 'LaraPassport', '[]', 0, '2018-08-25 08:36:50', '2018-08-25 08:36:50', '2019-08-25 10:36:50'),
('04a99438402c1b3148cb8e3d93b8dd53fdc612b12e097d386f9311467e3e1de78614a898b5ddda0d', 78, 8, 'LaraPassport', '[]', 0, '2019-05-11 20:19:34', '2019-05-11 20:19:34', '2020-05-11 13:19:34'),
('05fbca033c2a8e94f6fa2e214ad5de5cc7e6f42841e7d697395b4b1dfd14ae5d8c7b022c8383e7c6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 18:02:32', '2019-04-29 18:02:32', '2020-04-29 11:02:32'),
('060b1f332ad5f7f2e9b7357ed4ea4f5fd2ba90cab555a5437c5a89e3c350f8715566a5abfb3fdfc5', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:35:17', '2019-04-29 00:35:17', '2020-04-28 17:35:17'),
('084f34bb20839bf7190f6df27664d6ed7e34c9cc22d2ea1a2f3960eaddac32ea8b93da04ecfd0d3a', 55, 6, 'LaraPassport', '[]', 0, '2019-04-26 19:44:04', '2019-04-26 19:44:04', '2020-04-26 12:44:04'),
('08dcd1751b4e98c20bc5c896969bd3499020d7ddfb09aa39231d4fea450ed14b5a6131241ce14499', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 03:02:54', '2019-04-29 03:02:54', '2020-04-28 20:02:54'),
('094a73aa07a4ffab384a821b307afdae54ca1880cbe12539e14557fd7eb3464fd13264c5abd991a7', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 11:49:42', '2019-04-30 11:49:42', '2020-04-30 04:49:42'),
('0b30e8196cc01080ca5174585d544b10e254bcbc46b9d23bc40ad3440c722c07801c383d6b092e50', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 00:47:24', '2019-04-30 00:47:24', '2020-04-29 17:47:24'),
('0b9a33db1a18ffe238f5b91bfd645c781cbc07969dd20e1fd87d4e3da2918ac421edcc6b9c2cea60', 16, 5, 'LaraPassport', '[]', 0, '2018-11-24 12:02:16', '2018-11-24 12:02:16', '2019-11-24 14:02:16'),
('0c0e42fb1d17ac4a79b0a1d47766cffbec911eeef703c5b4de4c683c014ebcc04c5f59ef5533688b', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 03:03:45', '2019-04-29 03:03:45', '2020-04-28 20:03:45'),
('0cd0257c7f93c96d56750ba663a2c1028bac84e3a122f5138abf2ace875b834d5d20686d6ea70dd9', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:26:27', '2019-04-28 23:26:27', '2020-04-28 16:26:27'),
('0e47e25edf8756d6f5d977ecfd66a55e3ad8d18b1c112c039ab951a1c2bedb25e3318328bd34aa59', 6, 6, 'LaraPassport', '[]', 0, '2019-04-17 01:21:42', '2019-04-17 01:21:42', '2020-04-16 18:21:42'),
('0e82a3d63d2fb7bdbb1cc75befb22a9497688d1c21595bf2c6f392317decc7296c5c1012c0abebdc', 85, 8, 'LaraPassport', '[]', 0, '2019-07-17 09:38:36', '2019-07-17 09:38:36', '2020-07-17 02:38:36'),
('0f4ad771a53e3723820b25385f66232e063d15f4a08b46a16e6be33ff1002732b00ed92da5dd9843', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:50:49', '2019-04-28 16:50:49', '2020-04-28 09:50:49'),
('0f593f333073daff7eb7d1cf10e3c198c26988a8ba68881c55d4a2406578127a2465ba7f38f04590', 64, 8, 'LaraPassport', '[]', 0, '2019-05-05 17:05:52', '2019-05-05 17:05:52', '2020-05-05 10:05:52'),
('10752421eebaa8b88cd0c328cfa1ba447adfd68c2d4292b936512c3381b923e3d32df8a089dd618d', 1, 5, 'LaraPassport', '[]', 0, '2018-11-24 07:16:03', '2018-11-24 07:16:03', '2019-11-24 09:16:03'),
('1256417efb38eef1172c209e64b0eb4811bbc7f15fe25dd7e48dfee0b44a0fba1547291b34866a14', 1, 8, 'LaraPassport', '[]', 0, '2019-05-04 18:17:13', '2019-05-04 18:17:13', '2020-05-04 11:17:13'),
('1468199785dd1dd44e7964ca580ac0b246c7497ed3addea2dc10d8599b99f595d186f6739e696060', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:46:40', '2019-04-28 17:46:40', '2020-04-28 10:46:40'),
('16a731f7cbee1158783de32dd68ac639b216dbb895acd17121b0767bb548ba76ecf5c00bee3295b8', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:49:51', '2019-04-28 16:49:51', '2020-04-28 09:49:51'),
('16abed3c02208b1c6363d6f1d4c625f965b2e8790372ecdc1d5b299a58486eaf7b2f63db05d6c428', 5, 6, 'LaraPassport', '[]', 0, '2019-04-17 00:40:20', '2019-04-17 00:40:20', '2020-04-16 17:40:20'),
('16e172986a9e09915caba1be969c9d2b926f82ee00e33d8bf06f08bfe64002397d8e93b023e2b9cc', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:01:48', '2019-04-28 22:01:48', '2020-04-28 15:01:48'),
('1971c6c3223362d5ff285bfa64087d9d11c8155814bf35a82ccc48a8f3f58013964208d570ecdd43', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 21:30:14', '2019-04-28 21:30:14', '2020-04-28 14:30:14'),
('1a5f449e4f66a05a3c830d955e0dfc51679de4f8d1e80df2831100eec0d5fb07dd28332d08360f88', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:32:21', '2019-04-29 16:32:21', '2020-04-29 09:32:21'),
('1acd9211229a0fe0e548175cde77e18830aafb7a5e45f2944f1854c55b185cb3b1580cde634270d9', 9, 5, 'LaraPassport', '[]', 0, '2018-08-16 06:38:08', '2018-08-16 06:38:08', '2019-08-16 08:38:08'),
('1b3ecb3a43bed6b3eff496b32e6c7f13fa718ab8972c44a676d642ffefeaa986d72837b6499b1e68', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 14:08:59', '2019-04-30 14:08:59', '2020-04-30 07:08:59'),
('1b655c146927eef09d3c487c12f053f7d92f520933ec54177a0320bbea515dacaaaca6b0e4cdb6a2', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:21:48', '2019-04-28 22:21:48', '2020-04-28 15:21:48'),
('1c6cd667d735a334397d28bd534ba912d27aebb8bc599c25d4abbdb1746508f36c437b6d0aa1d800', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:08:38', '2019-04-28 23:08:38', '2020-04-28 16:08:38'),
('1eb5b667d2aebe5192c19c93523158dbe49ebd6f82ad3a0a382a2cde6764c99e9cb4a6fe61e43e02', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:11:53', '2019-04-28 15:11:53', '2020-04-28 08:11:53'),
('1eda8dd0981fd55d2dfeeaa7bf5699a0f001ba394407a5d2575e8c2a44e06f212cef7eb655f5411f', 86, 8, 'LaraPassport', '[]', 0, '2019-07-17 09:40:11', '2019-07-17 09:40:11', '2020-07-17 02:40:11'),
('20ef333de647efc69e186ee38d5b6e41ff3054181cb8df89c2585f962db2632f28d7cd4dde7e9fbf', 1, 6, 'LaraPassport', '[]', 0, '2019-04-21 20:54:24', '2019-04-21 20:54:24', '2020-04-21 13:54:24'),
('2193db035aac22668a7b9acfba0d8dceb97ab24de4a9a0cc8aaa4db4c3088cdda0c9cba91895744c', 1, 8, 'LaraPassport', '[]', 0, '2019-06-17 15:14:59', '2019-06-17 15:14:59', '2020-06-17 08:14:59'),
('2581193b115f03d5f586d8caf0382fdbebc8b26453fc803f2b8154fc45eb4a0be1b1afacfd1b9937', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 20:59:36', '2019-04-30 20:59:36', '2020-04-30 13:59:36'),
('26656eb586f122789ef2630ee4263ce7165b59d77c2f00399311845e848b9c1e7ab8960478dca72e', 34, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:34:44', '2019-01-12 04:34:44', '2020-01-12 06:34:44'),
('28fd087e910207a3ae3e9921e59b639eaf4029ce2352ef235bf1249f7798338af33651895fd2a863', 37, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:55:44', '2019-04-25 15:55:44', '2020-04-25 08:55:44'),
('296cf77b01066060d57fd207801d4d5d1d8691b36e9929be5b545e8ebb3a7e2502d04e747ec40d1f', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:59:10', '2019-04-28 17:59:10', '2020-04-28 10:59:10'),
('298853da0dce8a3004c7920147e2dc0289783ad47bd9ab643ff36ed05eda63ff90007f4bd24e1c27', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:15:48', '2019-04-28 23:15:48', '2020-04-28 16:15:48'),
('29ba9d8de020659223e4fd30d7affc5228c664b2d6ba48cfa6f32e38830a8f16a372caeca1af55bc', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 13:05:02', '2019-04-29 13:05:02', '2020-04-29 06:05:02'),
('2a3f524786b3c105bcfae2f8e7072bb149be07ba013be14aa28f2f2fc02abb5f10e10c9e047f5717', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 17:58:11', '2019-04-29 17:58:11', '2020-04-29 10:58:11'),
('2b9a813bee6a2dd63d67ca6e3430814ed28b500cc9f3be2d2520ae66bd366405d7b18cbc801446c1', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:41:11', '2019-04-29 16:41:11', '2020-04-29 09:41:11'),
('2d6de5819f9ef4d60369c3c185133fca10891cda173aba893c6fdbb53bbd8efab97419df47f012b0', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:14:52', '2019-04-28 17:14:52', '2020-04-28 10:14:52'),
('2de70d4c29e9ccb5831c0a243a6ef4445549d963218b8721e2e5dff9f055d9d9ac9d084cc2fc15ca', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:48:43', '2019-04-28 17:48:43', '2020-04-28 10:48:43'),
('2e41c875a57f7b7cc2884f22be7d0cb02a9dad20bda969601210234d5da53cf399a294cae5ff2c99', 1, 6, 'LaraPassport', '[]', 0, '2019-04-14 00:57:23', '2019-04-14 00:57:23', '2020-04-13 17:57:23'),
('309809b20aacd3441e5ebe5a3f13b4189fa33e9c4492e78434a6768eb8086dae1eb1891c51fb96ab', 35, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:34:51', '2019-01-12 04:34:51', '2020-01-12 06:34:51'),
('330cdc20825d8bbfa7a3dbd5c311d095853c2326b580a7e3eef768189f9b872d2e0f3e4eb77373d8', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 22:20:54', '2019-04-29 22:20:54', '2020-04-29 15:20:54'),
('33bbad0eeadb59f410b2250c27cdc5f4e0eb5df14fe48d707a2c3077dd6649ac48ca0735f2b00485', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:22:58', '2019-04-29 16:22:58', '2020-04-29 09:22:58'),
('33e936a92a3a925a408b0f206e7908845e392c0f2d08d674351df5e566919617d918dda64376a89c', 1, 5, 'LaraPassport', '[]', 0, '2018-11-24 07:21:14', '2018-11-24 07:21:14', '2019-11-24 09:21:14'),
('35d03c40dd80885d335346e2a0135262ce5d9c78b29738948206854f9270695d7e36cc6923fdbb99', 59, 8, 'LaraPassport', '[]', 0, '2019-04-28 14:49:03', '2019-04-28 14:49:03', '2020-04-28 07:49:03'),
('35ee77c6d175b02f81a9044010d81e7907fc08f5ab5b8f96ac145397734301faa16b14806ca9994f', 7, 6, 'LaraPassport', '[]', 0, '2019-04-21 11:05:53', '2019-04-21 11:05:53', '2020-04-21 04:05:53'),
('37a76aa001c0df3e3f528c9e0fbb1f8f65e36bf32cbc442b6c075b379c925953df8b31f4e6797dab', 66, 8, 'LaraPassport', '[]', 0, '2019-05-06 15:18:12', '2019-05-06 15:18:12', '2020-05-06 08:18:12'),
('37e9c40c2741e7eeae66e3895c0c23719bcf380e9bc2cae980eb850f59ee92fa5e7dd790f2b5f22f', 6, 8, 'LaraPassport', '[]', 0, '2019-05-09 07:10:46', '2019-05-09 07:10:46', '2020-05-09 00:10:46'),
('3bbb0925bff42729e8d3dd92a8b825a3686ba15ff1895d7ea4043567636b4bbb69c83fbf39cf73df', 79, 8, 'LaraPassport', '[]', 0, '2019-07-01 16:36:16', '2019-07-01 16:36:16', '2020-07-01 09:36:16'),
('3ee5e0695daed556addb5e9646ce6d6fe5e5c469ff3b067db56279ce5da56277d9a51eb3f34d47f8', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:20:21', '2019-04-29 00:20:21', '2020-04-28 17:20:21'),
('40d6ff436289f387397069956e96753dbce00ab67bdcd702b794cef384f863d2390487935f807637', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 12:49:34', '2019-04-29 12:49:34', '2020-04-29 05:49:34'),
('410a5b4b258251938161026066f131a60cbf4173493f5574615f111574799bdc83ed20a7f6625717', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:53:13', '2019-04-28 17:53:13', '2020-04-28 10:53:13'),
('45b2431a380a8bc1c27d65b6222428350ee0aa90afe55e4054206e05a9aed0d961e663c0dca49e5a', 36, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:51:52', '2019-04-25 15:51:52', '2020-04-25 08:51:52'),
('46f1b2a2e452115e162773ef540fea11885543c53885513f680a9152b3d1e32f10739bfbe7891acb', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:42:12', '2019-04-29 16:42:12', '2020-04-29 09:42:12'),
('47222b47b2efbf6de4ad641abbac6671e26723b97fe7ac215ffbeb4c903b32ff2dc1fa8fe62a2acb', 45, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:13:41', '2019-04-25 16:13:41', '2020-04-25 09:13:41'),
('478050042ac724b35a1512b05278d55b1c0094bca84a2199b1123c78274fa4b48a3ac853693401e5', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:01:45', '2019-04-28 23:01:45', '2020-04-28 16:01:45'),
('4787ec7097eb88a4136ccaae5cd8a00aa02c8a45515a5da790562a740910adfc083a89afac4f4bde', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 21:42:07', '2019-04-28 21:42:07', '2020-04-28 14:42:07'),
('48286c137be28662add09e98b3bae949dcb101ee635fd36973ecba1fc541378f2c52cc3b63af49f1', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 18:00:46', '2019-04-29 18:00:46', '2020-04-29 11:00:46'),
('487324299c4d68c64a1842a46a4ce21ab57c086cbb9dcceb1d44b0d858287675ae25231ff7a36022', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:49:41', '2019-04-28 16:49:41', '2020-04-28 09:49:41'),
('48bd563b62977d2f5834c8f2836b03f0a0b91684b33978c86b1425c5a1dfbc2598478790879e2737', 81, 8, 'LaraPassport', '[]', 0, '2019-07-08 13:40:46', '2019-07-08 13:40:46', '2020-07-08 06:40:46'),
('48d6bc052d6663d3cad89fb1fca4f44c7792a7ca597644d004f6c0ce4043f347ccc534a01101d367', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 21:41:16', '2019-04-28 21:41:16', '2020-04-28 14:41:16'),
('48fb50c11e3d296da57bebdaa282ce614cc83210f0cb04670755d3fd9575b0bb21e26a059676bc71', 83, 8, 'LaraPassport', '[]', 0, '2019-07-09 17:45:39', '2019-07-09 17:45:39', '2020-07-09 10:45:39'),
('4945668a642de89e424b53e9a0938b43b6e665300f1dff4127d1aa784122a340bd9e6cccf47ceac5', 56, 6, 'LaraPassport', '[]', 0, '2019-04-28 14:41:50', '2019-04-28 14:41:50', '2020-04-28 07:41:50'),
('4a26919fc09f1ba7e05512e8658cc15e090e24ed64615952e833e619a74e188adc517138046bac26', 1, 8, 'LaraPassport', '[]', 0, '2019-05-02 12:39:01', '2019-05-02 12:39:01', '2020-05-02 05:39:01'),
('4b61ca9739f3f65e12e815b66f4c706ecebbfe2d4e61b3123583848328b0a147f9f46c218e23b826', 61, 8, 'LaraPassport', '[]', 0, '2019-04-30 14:05:04', '2019-04-30 14:05:04', '2020-04-30 07:05:04'),
('4be519f1455134b4ee4a40c5ac3f0805e12abac0351c64d956d90cea6af936f5aa61c8792574ecea', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 03:04:11', '2019-04-29 03:04:11', '2020-04-28 20:04:11'),
('4d8c37d20939c1e4d100391986086f580ccd55c70a38efedf3894db9e36fe610094784b67edbeaa1', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 14:56:07', '2019-04-28 14:56:07', '2020-04-28 07:56:07'),
('4defcf43c54d1ae2b0bd84ce6c0ae3f5b82cc74078378c9bef172733edcc56f2009830cea689df36', 15, 5, 'LaraPassport', '[]', 0, '2018-09-10 04:26:04', '2018-09-10 04:26:04', '2019-09-10 06:26:04'),
('4eb756af5eb0a89310bee01ee0b11d2f4e053831c3e450dde131b7c2e0a7a20c0f1f52908a73ada0', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:01:03', '2019-04-29 00:01:03', '2020-04-28 17:01:03'),
('4f49f7c8978c7579a28b527afe5bde1692d553e30e7ded656ea55fb9548ff5aa69870d0760999b80', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:23:37', '2019-04-28 22:23:37', '2020-04-28 15:23:37'),
('4f711b06fea85c8817f25d2db18898a45ea4a8eb294971b6647a2388d298132fe873469257d86610', 3, 5, 'LaraPassport', '[]', 0, '2018-08-06 08:14:09', '2018-08-06 08:14:09', '2019-08-06 10:14:09'),
('518b6b541c529e3f95fb167107972a2eae9dd92926721a95a33d0de5074612a3194066394e240800', 33, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:34:35', '2019-01-12 04:34:35', '2020-01-12 06:34:35'),
('52577fe53b81d19fcc465833a62414515e598df35fab0d20205e13381041b50bf20321fc3de122f8', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:42:50', '2019-04-28 16:42:50', '2020-04-28 09:42:50'),
('534951dd20d6caaf5e5d8f73d48b35eb93e483adc4da139da09182a85ef5ad54795212e30230f59c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:30:26', '2019-04-28 22:30:26', '2020-04-28 15:30:26'),
('53f053fca2274c41a1e79e5ee2f59bb5c6456f0f802da811a5b218b40ecf972289661c5b20b6f5f6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:34:57', '2019-04-29 16:34:57', '2020-04-29 09:34:57'),
('54c7b4f4b069942713c5a331302ae00e17f3c9e3d31eba8531c33971dbe14b34b6abe727b00a1286', 18, 5, 'LaraPassport', '[]', 0, '2018-12-02 00:15:47', '2018-12-02 00:15:47', '2019-12-02 02:15:47'),
('574b47f81762b057991e42a1cd1082160121e263014e104f584309b87b2423ca9edc0a410743e71c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:28:58', '2019-04-29 16:28:58', '2020-04-29 09:28:58'),
('5dcf77668ff057368f0c692f0e2892ab494e121c8fb415f5458ccffcc3f9ed672e48911708c90e76', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:15:28', '2019-04-29 00:15:28', '2020-04-28 17:15:28'),
('5e3a5284948b7d812ac3a7a810cfc645fde8bc207666ad65f95470c409bd1340d18e9c2d4ee757bf', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:38:32', '2019-04-28 22:38:32', '2020-04-28 15:38:32'),
('5f33ea17c0b22c47fc8198e954a61e5169cc02109e9988d3459bbd912f22adad1dda3cf2d1d2b77e', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:18:40', '2019-04-28 22:18:40', '2020-04-28 15:18:40'),
('600349c36acf5f0663358a5e71d4a230e8fe4af991afb4dc3bb93c65caacef67ae49afa8269f7271', 2, 6, 'LaraPassport', '[]', 0, '2019-04-16 18:31:12', '2019-04-16 18:31:12', '2020-04-16 11:31:12'),
('6075158e9a7d4e81159903fbdeabee40a6fbf5175fc3320ce615b46b19d7cd88da88a6e320802d54', 35, 5, 'LaraPassport', '[]', 0, '2019-02-26 06:08:49', '2019-02-26 06:08:49', '2020-02-26 08:08:49'),
('6149db1706ce32d42fe0ef49cf64c86d0485780eeef295cdc8f11197137c978f65ef5f62243484b7', 5, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:18:16', '2018-08-07 13:18:16', '2019-08-07 15:18:16'),
('61844db4e27919215e6c8994e911323a1002bb87561f0e42bfd7bf7a1a7ce6ccc6a90ed2bad8f257', 34, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:38:18', '2019-04-25 15:38:18', '2020-04-25 08:38:18'),
('6316ae29747de24ade08186ded86f812c7d65bc8a33aea9fd2f1b3f5ea2da8711915118765274b93', 34, 5, 'LaraPassport', '[]', 0, '2019-01-12 03:46:12', '2019-01-12 03:46:12', '2020-01-12 05:46:12'),
('658707b68df5974dfec40d1f28056fbecc51b08f702c9fd0b82583d9b9ce7aa4b38537c5ec5ae7ff', 13, 5, 'LaraPassport', '[]', 0, '2018-08-22 05:43:46', '2018-08-22 05:43:46', '2019-08-22 07:43:46'),
('65d5d5d547ff11babf93aec847402a6398da9bf7ebab1ca39b785b0fe24b7cc3ec700df1d6713faf', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:16:20', '2019-04-28 23:16:20', '2020-04-28 16:16:20'),
('65d8369720d161a61416e48dbebdad69b540890b33e492bf1a2ab2bf848a823a61bef239cc50e245', 1, 8, 'LaraPassport', '[]', 0, '2019-06-30 00:29:29', '2019-06-30 00:29:29', '2020-06-29 17:29:29'),
('66e22c2f2362fa36281f7d122e67996cb4e4a9b28d187891914cc5838a9607999e1ebd849a23ff6b', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:40:35', '2019-04-28 17:40:35', '2020-04-28 10:40:35'),
('6a1b320d7dcb69c223b484eeb27393e86055fb530ab29b9e2ad8069d5658bb4d8bf0afd4615caad4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-11 07:32:14', '2018-08-11 07:32:14', '2019-08-11 09:32:14'),
('6b3e3d6636772d02e939e63664ac145bb84dd0c2d775c52a07cfeb0411469c5a4ca8f040e9c3a5ba', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 13:08:04', '2019-04-29 13:08:04', '2020-04-29 06:08:04'),
('6e73001eb8ee93d48d01d996817afb89dcf5283b70201855d7154e379555159a1aeeed71121ec8bb', 9, 6, 'LaraPassport', '[]', 0, '2019-04-21 12:07:07', '2019-04-21 12:07:07', '2020-04-21 05:07:07'),
('707833003e5d7ecba1feff1ae927bec31891006e18e014f3627e8687863b9f3ee2939da7856f182c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:44:17', '2019-04-28 15:44:17', '2020-04-28 08:44:17'),
('70bc7d76949220672989fde8c2c2188d1ca46ad64b52d16a1832224468b7acf2201e596da37d1353', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:32:23', '2019-04-28 17:32:23', '2020-04-28 10:32:23'),
('729ded78d2575cca3cf759673676910011bf66fcc9dd81d650b7226f43961dc2a20fb1bb38df9fc3', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 12:58:08', '2019-04-29 12:58:08', '2020-04-29 05:58:08'),
('7351964b389ec39ba529bff96da74a40c3e79f686bd91451b8b38dab85d2a2178a3fd5ca2464daab', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:32:09', '2019-04-29 16:32:09', '2020-04-29 09:32:09'),
('73a166e4cc319a44036d8bec94683807fc41255009d6d0a1a3210d30d0e4ebf615ec1fe61574787f', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 21:04:06', '2019-04-30 21:04:06', '2020-04-30 14:04:06'),
('73f1b2dd4fdaeb2cc44079de2b3a3912254f1eb32431fd38387ac349f85d6fa160bbe2dd746a113d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:45:29', '2019-04-28 15:45:29', '2020-04-28 08:45:29'),
('767ac5019e6da8b4962bde2fdc9dd28d9af2739b4b6eaa97d32da589f90ae9d8869a497209ffbcdc', 6, 8, 'LaraPassport', '[]', 0, '2019-05-05 18:24:59', '2019-05-05 18:24:59', '2020-05-05 11:24:59'),
('78a13819852317da93ffcdd001e4ae9d06947a48cff1d5813786852f2fc110ae27b71fb4135b816d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:44:34', '2019-04-28 16:44:34', '2020-04-28 09:44:34'),
('78f04a407adb328bf46b48454679e5c4d1b79e96873c0c5de2d2377260bf4af6a5a26d8f0de44454', 1, 8, 'LaraPassport', '[]', 0, '2019-05-03 11:19:20', '2019-05-03 11:19:20', '2020-05-03 04:19:20'),
('7b5ab89edf8b12ed9a881b60f2f23acb1bd5e82ffe3b433a51928672c817d390a001b2e2e2bc4a38', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 13:07:21', '2019-04-29 13:07:21', '2020-04-29 06:07:21'),
('7c7ecb85ab8785186c97f088fa70aa78141017291da5bbef0968f6647a987c61b18ceb0b25f9e861', 8, 5, 'LaraPassport', '[]', 0, '2018-08-19 13:39:29', '2018-08-19 13:39:29', '2019-08-19 15:39:29'),
('7ca19a8301799884163b55f1346e66c7755a2591a3c9c276a59ad7f0b1baa2e2400f55d5bd11f5d6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:00:45', '2019-04-28 15:00:45', '2020-04-28 08:00:45'),
('7ea5fb9c0a629c7d5c57aea6b5311053b53ef05c0e74af94a5d720279285624dfbbca5d7e37c0552', 62, 8, 'LaraPassport', '[]', 0, '2019-05-02 19:57:16', '2019-05-02 19:57:16', '2020-05-02 12:57:16'),
('7f8bea46586496927e244ecb953787f425d94af3b2c995f1a36fea4f22494f4a24ff2285e6d76745', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:39:41', '2019-04-28 15:39:41', '2020-04-28 08:39:41'),
('80f71c21f234676ea8648a4652102f6ce7f30c2871f040a483a8e07ef0493a8d3d7857f602ae5055', 2, 5, 'LaraPassport', '[]', 0, '2018-08-06 07:51:26', '2018-08-06 07:51:26', '2019-08-06 09:51:26'),
('8179015c90939a317c68047e0a24ef647f76f5c2cf9611556e6878547f48086ec583282394d7e702', 7, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:46:56', '2018-08-07 13:46:56', '2019-08-07 15:46:56'),
('833f37df6525d6251968300b25d68489779e40145dfb91f4e533ebe91896ce34420c69f319bf69ec', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:51:27', '2019-04-28 16:51:27', '2020-04-28 09:51:27'),
('835c2fe53cfddb7c28ef398717bdd6b900245a88a3f05aa6fb1c969af7005bd3b8c3dd4b3fab03ad', 35, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:51:03', '2019-04-25 15:51:03', '2020-04-25 08:51:03'),
('838185760f4ddff9f31ba9a6eb65b3fd513280ba2bec53bb7fbf4c8b1224fde1722e0aabe791d93f', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 15:14:51', '2019-04-30 15:14:51', '2020-04-30 08:14:51'),
('83dc0e247413016b24237e52bbf465a490917eff9a8fd127d4a977a64c3db4c378d49d439244d503', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:48:40', '2019-04-28 22:48:40', '2020-04-28 15:48:40'),
('86412c48db44979403e72badb5f77936589e6ffa5316d7e0128338bda82da2a329c65c65b592a945', 35, 5, 'LaraPassport', '[]', 0, '2019-01-12 03:46:19', '2019-01-12 03:46:19', '2020-01-12 05:46:19'),
('866836b8e835999beef556ad22c1bc5a2c1076dcf4798c60783d02dc5a3dbc2ff3e002d34052868c', 10, 5, 'LaraPassport', '[]', 0, '2018-08-19 13:21:31', '2018-08-19 13:21:31', '2019-08-19 15:21:31'),
('874aedb33697199d136867aee116d2643f80e4c9760081619f43db585cbcb7abb738479dd6840480', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:05:14', '2019-04-29 00:05:14', '2020-04-28 17:05:14'),
('87e50bfafbf3a24aab51a70761569e7e247cb62066157c7032627411b5bea306e292e6d72c06b0a7', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:20:17', '2019-04-28 22:20:17', '2020-04-28 15:20:17'),
('87f63d4daf03d15c6523e8bf8761859eebc3cc2f08fc5aeb1ea5face75e073456e8c5f21b562f355', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 21:33:13', '2019-04-28 21:33:13', '2020-04-28 14:33:13'),
('88042f9227f93c95908f7b8f50727e06fb8ad886977a54b0521ebd0e4a9aa56fccc3ce0804f2814f', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:05:53', '2019-04-29 16:05:53', '2020-04-29 09:05:53'),
('8825dcadce3d28b4d2cb59ec36392673fc6250a9db3b32d6718efece1760d67ab04ac00bab7832de', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:32:39', '2019-04-29 16:32:39', '2020-04-29 09:32:39'),
('89429db6f83500ca77cea15c082f6455f7e52804b16a05d2765ebb06b9c9c332bd62d17720423297', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 02:50:49', '2019-04-29 02:50:49', '2020-04-28 19:50:49'),
('89a81dfc4a866076b7db46f89bf5ef13064fa1aeb22465841a4efb92a0b848524c691d848771eb4c', 6, 8, 'LaraPassport', '[]', 0, '2019-05-05 18:24:21', '2019-05-05 18:24:21', '2020-05-05 11:24:21'),
('8af1934a13ee4d8a38af52fa75de371b1a5ea3883f83149f06df215c63c0c11302e5c1008f392f29', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:43:40', '2019-04-28 16:43:40', '2020-04-28 09:43:40'),
('8e3d2c811d539eb0ee13bd534a18d429b19166337d6cf40ad86970e25c9d77c3c4a3cbc9ea018aa4', 50, 6, 'LaraPassport', '[]', 0, '2019-04-25 21:31:23', '2019-04-25 21:31:23', '2020-04-25 14:31:23'),
('8e4ff507db7f456987fbea41ebb27fefb0fc8f3a8bc1313f01902d5e9f5ab90ca1e98e1c4a1bd92a', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:25:18', '2019-04-28 22:25:18', '2020-04-28 15:25:18'),
('8e85a7a85a5f3a6ec0377e07d5b49d26456f97ea1694e31c4e213d52ed11456725841ab9aeabd13d', 49, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:31:51', '2019-04-25 16:31:51', '2020-04-25 09:31:51'),
('8fe9852b728fed4dc33c972b6679c24e168af2a2e808eae0f0b0ccbd8a2418c351162a034865ccf1', 65, 8, 'LaraPassport', '[]', 0, '2019-05-05 21:55:09', '2019-05-05 21:55:09', '2020-05-05 14:55:09'),
('8ff708a575fba9e3e218749e5e937c694367017799bd0cd996f0371ac89668d8c35c92a43084b2b4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-29 08:46:35', '2018-08-29 08:46:35', '2019-08-29 10:46:35'),
('90282e5d84a6ba7455d30b7843a5e04ebc08d9d427f0694c05596963029e499276f437221751258f', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:41:16', '2019-04-28 15:41:16', '2020-04-28 08:41:16'),
('91f056c648f7315357de0ecf95ac70bbe70105b28f2a5c2fa63a532fa32b5ecb0c987b6a904a0970', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:18:42', '2019-04-29 00:18:42', '2020-04-28 17:18:42'),
('92bf1dc45348591be9679e9466ac5417ddc4aa7a79aed2a8773dee53b9c32c0461b7b9c182548b6c', 6, 8, 'LaraPassport', '[]', 0, '2019-05-10 09:34:55', '2019-05-10 09:34:55', '2020-05-10 02:34:55'),
('961739415915760c71b9836e913b60a2baa396315f691f1af7ffb68f56b93c09e5851ae6e5d3c848', 3, 6, 'LaraPassport', '[]', 0, '2019-04-16 22:38:18', '2019-04-16 22:38:18', '2020-04-16 15:38:18'),
('969d77ec7e1fb780539f066ead0c5175d9d57352a1fde5b26e6e35004c417a0817b28558e3f4ef2b', 1, 8, 'LaraPassport', '[]', 0, '2019-05-05 01:00:17', '2019-05-05 01:00:17', '2020-05-04 18:00:17'),
('98b4f19e522ccae4140f10907acf7d807828e343acca12188b699adaeedabd66557a88012f16d06c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 22:20:33', '2019-04-29 22:20:33', '2020-04-29 15:20:33'),
('9ab167898338d2ae14ddf8e2310937204e7930b6cc51e25d6ea5092218d848ddc48be2561e14138b', 40, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:01:17', '2019-04-25 16:01:17', '2020-04-25 09:01:17'),
('9e55b6a12a782db085272defb6a053d0db8dee96dc5968515ddfda61e26b2b3f4d8917e0065b5df4', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:51:10', '2019-04-29 16:51:10', '2020-04-29 09:51:10'),
('9f53f25e641166e3b1c8a13f433d2f2f9691f5d330bf99022b0b2814e2e9eb5337aa539fa061d9ca', 1, 5, 'LaraPassport', '[]', 0, '2018-08-06 06:26:25', '2018-08-06 06:26:25', '2019-08-06 08:26:25'),
('a02ef0dd514cd260850c0d49bc8a74730d1c5656b5e872fa279efc94ab6b39833976aa785bcc1072', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:40:18', '2019-04-28 22:40:18', '2020-04-28 15:40:18'),
('a245e5f666d8a39bf86563b68089643a96bd5ede08f148931cf02cd5bd5ecebfcfb313edfab120c8', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 00:11:45', '2019-04-29 00:11:45', '2020-04-28 17:11:45'),
('a270d898a2bf0b20ff323ae36da275d9f4bd6b4d0596c2bf6fc55d7bc50a52a6da3da951b4da0c1d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:25:46', '2019-04-29 16:25:46', '2020-04-29 09:25:46'),
('a3508c6b9568d8110564d7616de05eebb4b350ab1040aa4519485b820869614c7f73f6cf00ed21fb', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:41:32', '2019-04-29 16:41:32', '2020-04-29 09:41:32'),
('a67471bf7d4720df8626062c5e955fe644d262e7f77e49a9b1a3790d42a241c2344b205c85677994', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 13:01:12', '2019-04-29 13:01:12', '2020-04-29 06:01:12'),
('a6b86b7a2ca0f49fb236a35c09933476395bfdfd0733f8693ee1ac75a81bf961bcb9135c0e94a2cf', 35, 5, 'LaraPassport', '[]', 0, '2019-01-17 02:55:43', '2019-01-17 02:55:43', '2020-01-17 04:55:43'),
('a78c0a238bd02d48a443edf6bdd9f470fb5cfa4cbb31159eae6f3c729d3a7c35c5dc7ea77ba8ec1d', 84, 8, 'LaraPassport', '[]', 0, '2019-07-12 20:26:03', '2019-07-12 20:26:03', '2020-07-12 13:26:03'),
('ad4c9a6412529acb71c455d9ce58d7b20bc183e6e604fb1e5632a571651d4206bc1251332326d6f5', 77, 8, 'LaraPassport', '[]', 0, '2019-05-11 20:18:08', '2019-05-11 20:18:08', '2020-05-11 13:18:08'),
('addef5b85ad8cdbe7f2c102c16315fc5fc1f06378cb7a960fd8e21e93b45deddfda2069abc3d1c5a', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:26:15', '2019-04-29 16:26:15', '2020-04-29 09:26:15'),
('af2beca0d6d3e48fca2351175706f41bcf737075c9c5b0ce46046ec8e3c33543e1c3e45b759c597a', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 01:42:48', '2019-04-29 01:42:48', '2020-04-28 18:42:48'),
('afb15902efe950e6c4f63d91cd55029ae08ed7573fd6e32d4756b3736e7a40121c05abc5eab70ac6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:28:39', '2019-04-28 22:28:39', '2020-04-28 15:28:39'),
('afcdf81f9075c17a638667a0ff27d5f2be121c6753f0e27d60acc2024d685690b3c2eba2353a23c9', 1, 6, 'LaraPassport', '[]', 0, '2019-04-10 04:09:09', '2019-04-10 04:09:09', '2020-04-10 06:09:09'),
('b01e431b7385f1c402460689ad3bd2058ce66670d3cbfe3b299b8f5c31b811fc33b1271b34478681', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:50:44', '2019-04-28 16:50:44', '2020-04-28 09:50:44'),
('b18eb92c2222ee44b9ec8638ef15bce0c722ee640327e0a221d77e16f50f42d3aa35d8be96dbe7b6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 18:39:45', '2019-04-30 18:39:45', '2020-04-30 11:39:45'),
('b1da71b8b0eff2026c016a314e66c0409b5b66b2b6add4a56b22ba767b8ea51141824023a3bc5923', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:24:38', '2019-04-28 23:24:38', '2020-04-28 16:24:38'),
('b1e546ee9230f6b23f0b81f4a048009e408c4310ff98a08684419f833b7043ba383c5cbf5cca13e3', 39, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:59:04', '2019-04-25 15:59:04', '2020-04-25 08:59:04'),
('b24f3206855d7dca640f85b1dce2c43a861accc3314fa8c5915a06e31ecc3e6659562af54efb23cf', 41, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:02:32', '2019-04-25 16:02:32', '2020-04-25 09:02:32'),
('b3d6b85a70553a5e36b134e5540c4d4bf829c0e41cb2418263f7b08d89e8940af3624b1402a4636d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:26:10', '2019-04-28 23:26:10', '2020-04-28 16:26:10'),
('b469627d198e064a0bdd22f012d65bdf715d8f70f44bff8972867f77b8d199ea60e84443cb68c771', 38, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:58:31', '2019-04-25 15:58:31', '2020-04-25 08:58:31'),
('b4cfd161c756fa5ec3554176b0362e67571f078c5bcf6ef2f28de2a8775075d5314d30b4e29ee447', 4, 6, 'LaraPassport', '[]', 0, '2019-04-16 23:13:06', '2019-04-16 23:13:06', '2020-04-16 16:13:06'),
('b6dcb8e1b5c0f6f4597789e1c266434d118ed8a7e02161dc23155a7e14abd88a470cad8b837fed31', 47, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:18:53', '2019-04-25 16:18:53', '2020-04-25 09:18:53'),
('b87d5b2854b44dc9c9161e4c852fcc3df0778e1fbce1027b704d1282116235e741d6c2cb1354b9c9', 82, 8, 'LaraPassport', '[]', 0, '2019-07-09 09:09:36', '2019-07-09 09:09:36', '2020-07-09 02:09:36'),
('b92b87dd6fcad01e78d1bc116885e0da96a10619e07f62aabb2b206c8798f44ff731e4310e9e463c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:32:41', '2019-04-28 22:32:41', '2020-04-28 15:32:41'),
('bb2fdc9f75d6c228763221993e1c58214a93688d1b3140e229e89172ae8b2f85ddbc0a8b20cb7105', 1, 8, 'LaraPassport', '[]', 0, '2019-05-04 22:11:47', '2019-05-04 22:11:47', '2020-05-04 15:11:47'),
('bc0945b989af79091eb59ead28362871a17f059e9506852e0e7791ed7930d576ca8dba8579909039', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:50:47', '2019-04-28 16:50:47', '2020-04-28 09:50:47'),
('bc5007623279c4bbcfb7e31cff5859e2c13c78b30239ffbc219d2c000169b9dcc2c8b2f4cf5186f8', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:43:36', '2019-04-28 17:43:36', '2020-04-28 10:43:36'),
('bd39bf22c74ea1b46d6cdb8fb800d054360bf1283fab049f1af67e734c3f7da7ee51efe084c2320d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:48:34', '2019-04-28 15:48:34', '2020-04-28 08:48:34'),
('befb9bc00f00e84c616b3ec675179d3a224fd69b7fd32a0ce2961d35d896469423d272d869af72f4', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 01:57:22', '2019-04-29 01:57:22', '2020-04-28 18:57:22'),
('bf1de42a200236e5edf1173ebb728919b5e47c2e2bcaef63cf7b685ac3ed5631b72c05092ca8228b', 12, 5, 'LaraPassport', '[]', 0, '2018-08-19 22:27:16', '2018-08-19 22:27:16', '2019-08-20 00:27:16'),
('c178a53f144887263cba619b50c4fbd13f4184960b9c563ec9cfc85c80bb1f51f4daaca56e83d611', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 12:56:11', '2019-04-29 12:56:11', '2020-04-29 05:56:11'),
('c1ba681c924955c18ef826d345c290ca8de68febcfa82fa862dcedef0160dbd8c39b395471a500af', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:52:55', '2019-04-28 16:52:55', '2020-04-28 09:52:55'),
('c1d89da76f47847445cfd217a692cc13bf686c1553c61c575d20d8aa5abe0cea1c8ffc745ef98bdf', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 15:14:29', '2019-04-30 15:14:29', '2020-04-30 08:14:29'),
('c20730eb5b49168027c429c737a4a3ad8bd9221d76223af90225f8819c8bcf6efd34d8601b4695e7', 1, 8, 'LaraPassport', '[]', 0, '2019-05-05 01:05:51', '2019-05-05 01:05:51', '2020-05-04 18:05:51'),
('c258fcf34fd1f450a02bcbf59556ea58c3e7a75e125a9728bec0be16b32430227520cad4145e55e8', 68, 8, 'LaraPassport', '[]', 0, '2019-05-06 15:23:13', '2019-05-06 15:23:13', '2020-05-06 08:23:13'),
('c2bf8150763de18f4ffb137a35289bb2e5634c3966a5240529e62959c6cd1ecc68b957b334b7c8c6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:14:07', '2019-04-28 23:14:07', '2020-04-28 16:14:07'),
('c2fbdc407016a2145dece0fc86463421abce078cb8223726d912e58a2c8d93b6d96171326c7f68e6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:59:17', '2019-04-28 22:59:17', '2020-04-28 15:59:17'),
('c59dc6570ef12a50f54d382d1e122c514d133d79bdf1933c6dd256024810177c4a09dba2d611573e', 1, 6, 'LaraPassport', '[]', 0, '2019-04-21 20:59:47', '2019-04-21 20:59:47', '2020-04-21 13:59:47'),
('c6d4510456764bb77a708ac1f839c807a09ad2926f9e31e9289d9b3564d73dd221036188dcaaa3d3', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:45:20', '2019-04-29 16:45:20', '2020-04-29 09:45:20'),
('c7ea7992acff887783226a21e731878b98536d9f25579696374e1c02b06f59831a85d03e2752983c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:08:22', '2019-04-28 15:08:22', '2020-04-28 08:08:22'),
('c8b6a82acea6d484df04ebdf02eeb2a0dd0865582f2c34cb4ee6a561c68809cba3488b6fe1f54030', 47, 5, 'LaraPassport', '[]', 0, '2019-03-05 08:13:17', '2019-03-05 08:13:17', '2020-03-05 10:13:17'),
('c8dc38bf85abf4fd1a186c0d52ba05394f456b6b3503e0a1d96797b8c5e934e495b5b76a3a77d895', 1, 6, 'LaraPassport', '[]', 0, '2019-04-27 17:36:30', '2019-04-27 17:36:30', '2020-04-27 10:36:30'),
('c93698fbb32212c0d749bb9c14fdfb20380cc4cb748d2c56b3cfa606cfda510834a5e3e3de8acfda', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:32:23', '2019-04-29 16:32:23', '2020-04-29 09:32:23'),
('caa1d8302629d273a4ac4237bb8ffc46a57443b410b7fc34296cd14d42bfbe4ee0f35d378d9de494', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:52:19', '2019-04-28 22:52:19', '2020-04-28 15:52:19'),
('cc9e2394c511e418be923e325a4518da1385abf6baee68fdfe228c4843f76f931436b4d1e6e3e72f', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:13:33', '2019-04-28 22:13:33', '2020-04-28 15:13:33'),
('cce3560162bec405ee1708440a996c0197d67b15ae5e9c1b70bb78e3107227dccfd1164e969903d6', 10, 6, 'LaraPassport', '[]', 0, '2019-04-25 15:34:43', '2019-04-25 15:34:43', '2020-04-25 08:34:43'),
('cdc8b3b54cd696a6db7ed501b9737ac6d30fe097c8e6400b0b1a26cb20918e6b565363c939c1912c', 1, 6, 'LaraPassport', '[]', 0, '2019-04-27 17:37:12', '2019-04-27 17:37:12', '2020-04-27 10:37:12'),
('ce548a01eaea6002242c3299fd4cc1791cb414618aa27dd1b18d956419a08b762af7afeb485f856f', 52, 6, 'LaraPassport', '[]', 0, '2019-04-25 21:37:25', '2019-04-25 21:37:25', '2020-04-25 14:37:25'),
('cf074db189ddb7d5db44872ead61d0a75ca1c8a80c162535fbe231a423bb52ce240792e1b76046c9', 2, 6, 'LaraPassport', '[]', 0, '2019-04-16 18:30:50', '2019-04-16 18:30:50', '2020-04-16 11:30:50'),
('cf3108739ce7d5674aba22dc382dca22994e878e0892376087b9f962aa9ab4fb87dc62353598f94f', 3, 6, 'LaraPassport', '[]', 0, '2019-04-16 22:39:07', '2019-04-16 22:39:07', '2020-04-16 15:39:07'),
('d0472e210fc6099447f06f2bed9e9d3dfc5bd0fcc2f828caea9ce2f81367be864b41ee8035b81beb', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:23:39', '2019-04-28 16:23:39', '2020-04-28 09:23:39'),
('d1cc217bd7434be5e0cb5fc25ada66542f896c4a3b2ef016f8de35b19f8dd048176fe31236350f78', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 03:27:02', '2019-04-30 03:27:02', '2020-04-29 20:27:02'),
('d2c1428f65ea77ee1513b508d0a4451ae8beb3ed3c7960721e7b27583cbb963960e68e22d81961e6', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:41:42', '2019-04-28 16:41:42', '2020-04-28 09:41:42'),
('d43823a08fd6433bb6251fc51d1cea1c99f2b9caf9a3eea10dedc4a31b36a02b729436767eda7ddf', 49, 5, 'LaraPassport', '[]', 0, '2019-03-05 09:12:39', '2019-03-05 09:12:39', '2020-03-05 11:12:39'),
('d56b668decc6d8692f3287b1da44438a5e5896935be1a2e355631ca9829b8aa5f31e0d348b425d33', 8, 6, 'LaraPassport', '[]', 0, '2019-04-21 12:00:47', '2019-04-21 12:00:47', '2020-04-21 05:00:47'),
('d61822c88250ace88e37f66ccc7d25edee83405ad8da3dd8db5d4d9a617e5eb0bef1b23e70017c73', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 15:44:52', '2019-04-28 15:44:52', '2020-04-28 08:44:52'),
('d6dd587b04ed1ef5424f18544e7e81cedef2dfa8d57c930a5f42bcf8a0d594fd375d8eb831849d04', 80, 8, 'LaraPassport', '[]', 0, '2019-07-07 11:49:50', '2019-07-07 11:49:50', '2020-07-07 04:49:50'),
('d7439ceac67208e2ebeeff3ea18d29b5cc20fd8135026dc2c47ac19ff5d6665e324dd122f0b46ba2', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 22:21:16', '2019-04-29 22:21:16', '2020-04-29 15:21:16'),
('d93cb1efd68d1aa09a4320eeb4de5cc489b835d683d560e2062fcf858a6f4cb9f0a8a2a89b86d45c', 33, 5, 'LaraPassport', '[]', 0, '2019-01-12 03:46:05', '2019-01-12 03:46:05', '2020-01-12 05:46:05'),
('dae7f900837879100f75c809e3b56dfa007c00dafc2db30045b12cb1e69663150d2b8296fc560171', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 16:23:18', '2019-04-30 16:23:18', '2020-04-30 09:23:18'),
('db1add6271b4181ccc99271922aaf4ead8d8c898612ad2fa277c3d245f586912d2fc08c0b37b629d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:36:49', '2019-04-28 22:36:49', '2020-04-28 15:36:49'),
('db530de13fd26fa5dbb38540cb0328cdffaf005fae9e60ae3ae23e4fdc199fb33e9ab75632341d58', 60, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:18:55', '2019-04-28 16:18:55', '2020-04-28 09:18:55'),
('dc73754a8ef6ccc6bda9564f1a3a4da118c4a6537f8ebd8226fa261f406a1386b70704b003540014', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:00:40', '2019-04-28 23:00:40', '2020-04-28 16:00:40'),
('dca59b4e8373a44f0dd151b0611e68578faf82294fe8c0d312e2e74b856df109c8b58cfb2c4db39c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 13:06:08', '2019-04-29 13:06:08', '2020-04-29 06:06:08'),
('dda30ae6e566218b1414b64c3a936fc95f6224988d5c8c178395b0ea1e0f46ea727c878a51345388', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:50:49', '2019-04-28 16:50:49', '2020-04-28 09:50:49'),
('de40d5a76f1b304b6d3d3dee577445f87ae09f63b8193038da0acb2311a7c4588cff4d833ff64f79', 1, 6, 'LaraPassport', '[]', 0, '2019-04-27 17:37:33', '2019-04-27 17:37:33', '2020-04-27 10:37:33'),
('debe597a0921d82fc0168224bc607fc0fcc9104a02d2981896de70d4ca16f706cfff02165ed73b09', 53, 6, 'LaraPassport', '[]', 0, '2019-04-26 19:19:20', '2019-04-26 19:19:20', '2020-04-26 12:19:20'),
('df50946f09140985c91e4fcdb986f8e43fed14ba5bd87edcd4740e482639b033a36530621bb6e240', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:29:12', '2019-04-29 16:29:12', '2020-04-29 09:29:12'),
('e09e98234e7550dd95a438964474817d46b58e17eb70865d1cbd0a257a0cdd47fdb79598ee3b9ad3', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:58:02', '2019-04-28 22:58:02', '2020-04-28 15:58:02'),
('e15f8ad16fe2af1ecef49ae01b7359a759f9ca91aa573fbef3f787d48c2b11a94aeab659bc9aca1d', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 13:07:42', '2019-04-29 13:07:42', '2020-04-29 06:07:42'),
('e53688d01118d989fddfe5d8a87c9caf2e37118799468651bbe627da2be3483ced0230508f64b4f3', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:27:32', '2019-04-28 22:27:32', '2020-04-28 15:27:32'),
('e64421e58e0593626400adfb21afd68075d8d76f445a313dc5637ac80009f2a9a6809a7e44e15d91', 48, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:22:31', '2019-04-25 16:22:31', '2020-04-25 09:22:31'),
('e67265e22af1f11155b33cd0d648739c6dd72ca604adacc7b6ec6c3f4545ea58bc9cb5e04d16f8ab', 8, 5, 'LaraPassport', '[]', 0, '2018-08-09 01:35:19', '2018-08-09 01:35:19', '2019-08-09 03:35:19'),
('e6fe8c45164c899177a3ab2c16662491d480e7b845a93406b3f0ffb0f6916a847cf2e60c7530ff15', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:43:53', '2019-04-28 16:43:53', '2020-04-28 09:43:53'),
('e74a45af501023481014efb5812948bb4e1d223b6438d6f7ac128af685962d2606eef4ca38ea66be', 36, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:29:55', '2019-01-12 04:29:55', '2020-01-12 06:29:55'),
('e7c02addc10de8e93a71f7b8b1d46cd2a9d412ad99bf3957b23f5fff75ee956032b1ecd07635f278', 54, 6, 'LaraPassport', '[]', 0, '2019-04-26 19:32:19', '2019-04-26 19:32:19', '2020-04-26 12:32:19'),
('e86bd387136e3f7a83b0972b9ee71616e179d89f7ff699dd77cdc07fd04bf49cdb47d476d6921eb9', 48, 5, 'LaraPassport', '[]', 0, '2019-03-05 08:21:15', '2019-03-05 08:21:15', '2020-03-05 10:21:15'),
('e9ef81930ce669a3b7290309cffcf0ed75d79313de7628d808ca68b0e94d129acfda52742ed01337', 46, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:15:16', '2019-04-25 16:15:16', '2020-04-25 09:15:16'),
('ec9a33b2a493f51d83fbfd7eb5b0fc1f97e4f94b53fd516545a9dc0f1b635f810ec2e4041a22745e', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:05:30', '2019-04-28 16:05:30', '2020-04-28 09:05:30'),
('f02a937fadb3ca87b6e2016f099c5c9fb86a7e83b6518517fbd4dfe69f3a178ba9b35ec8114b8049', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 16:47:03', '2019-04-29 16:47:03', '2020-04-29 09:47:03'),
('f148a30eaee33972371e7379ef7001cfd102a83a5a32f6d2f2e18dd9e91bb00bc169864b11787e34', 11, 5, 'LaraPassport', '[]', 0, '2018-08-19 22:27:01', '2018-08-19 22:27:01', '2019-08-20 00:27:01'),
('f150fbea1443c01192805720539a4c491125ce82f2b0c14cf7918266c1564acb6067f7baf1027841', 51, 6, 'LaraPassport', '[]', 0, '2019-04-25 21:32:34', '2019-04-25 21:32:34', '2020-04-25 14:32:34'),
('f20147b46ab8345d889de7117b82e345b49ff93701ba25bf21d452961ae7e266d7d80044d2a1e4f4', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 17:01:01', '2019-04-28 17:01:01', '2020-04-28 10:01:01'),
('f28a249444185c31c5d2d7c578cecc70228b80d516e790798d769394172f2499ee3c4b13f1edb66c', 1, 8, 'LaraPassport', '[]', 0, '2019-04-30 00:26:50', '2019-04-30 00:26:50', '2020-04-29 17:26:50'),
('f428a31eacef3f2923b939dd02b8d2d52c489834c848dcc4e07e4303a4b5980a98df3978d2566606', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 12:51:13', '2019-04-29 12:51:13', '2020-04-29 05:51:13'),
('f6a2655a576908271b0c2c93b49671538fc993fb65ad8e2a74a3b90dbe1c4ddcf71d96bb7de0fa16', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 16:41:25', '2019-04-28 16:41:25', '2020-04-28 09:41:25'),
('f71d13352c4134120cd408be5e4b2d4dd47d71024a388b30cfdf7ce761cdfab598f01f0d4a6a40b3', 43, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:07:52', '2019-04-25 16:07:52', '2020-04-25 09:07:52'),
('f72b3cb18c65ba626b80839af0c13d617819e220ba26bdfc1be58ad82863a5d29cf3fa4ce879acdf', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 22:34:36', '2019-04-28 22:34:36', '2020-04-28 15:34:36'),
('f8cad5395cfbadea8cd77027645ef93bcf0588003ec213beaf73afdb497f1d305d62c2600a3ce27a', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 03:00:05', '2019-04-29 03:00:05', '2020-04-28 20:00:05'),
('f9996073423d59b613f084dfdfbe835c5313a666b2def2c48244ae5985b73a1b2f93d0a09659f59e', 44, 6, 'LaraPassport', '[]', 0, '2019-04-25 16:09:36', '2019-04-25 16:09:36', '2020-04-25 09:09:36'),
('f9c6269132b79b46d39e3774e03bcb5cf2a917c97ad4667f903d70bfcb3b9fd272a2b3373a398710', 1, 8, 'LaraPassport', '[]', 0, '2019-04-28 23:55:01', '2019-04-28 23:55:01', '2020-04-28 16:55:01'),
('fa37f35884096fc717bd1b993fbf60992eb7a9db355f75a0dabbc0549f7615c21d056413f0494064', 1, 8, 'LaraPassport', '[]', 0, '2019-06-29 14:59:23', '2019-06-29 14:59:23', '2020-06-29 07:59:23'),
('fbf9776870876c5ee7ffbad75d81df1e315b0505fc038e787adf0e6c7f722395a7f0fc905ebb2dba', 1, 8, 'LaraPassport', '[]', 0, '2019-04-29 12:59:44', '2019-04-29 12:59:44', '2020-04-29 05:59:44'),
('fc61e1f7fd3ae278440a4458b69a90a0a2e596ffae587deb0a8539476d441346d6979be79db5f75c', 1, 6, 'LaraPassport', '[]', 0, '2019-04-27 19:10:19', '2019-04-27 19:10:19', '2020-04-27 12:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'xl14vQBWcu8GmFmYR7g52R8xXxw4kmXpCyjOWtEa', 'http://localhost', 1, 0, 0, '2018-08-06 05:53:25', '2018-08-06 05:53:25'),
(2, NULL, 'Laravel Password Grant Client', 'rDrh5HTNmg2Ki7syVVo7Q6nKiZe3kpeKgcmdOufp', 'http://localhost', 0, 1, 0, '2018-08-06 05:53:25', '2018-08-06 05:53:25'),
(3, 1, 'admin', 'Rvyx3DOO0fE0MNckVG0T8SgqbgDi0eHxUBjpTG0N', 'no', 0, 0, 0, '2018-08-06 06:04:15', '2018-08-06 06:04:15'),
(4, NULL, 'admin', 'XAMADuCg5pnreKMVlZBzUa1jwznO03d6DYPM6sER', 'http://localhost', 0, 1, 0, '2018-08-06 06:04:56', '2018-08-06 06:04:56'),
(5, NULL, 'admin', 'gm8aaE4O6a0j854tndRZwyxCKRUmlg7pmumhho1q', 'http://localhost', 1, 0, 0, '2018-08-06 06:06:13', '2018-08-06 06:06:13'),
(6, NULL, 'Laravel Personal Access Client', '4p5yfzSAVSRBaPt7hbwceMxgDyHuzAot6Ca1e2kI', 'http://localhost', 1, 0, 0, '2019-04-10 04:04:33', '2019-04-10 04:04:33'),
(7, NULL, 'Laravel Password Grant Client', 'weFOdLLWcdbBjnQ4S76ZUUHIxMJi14OYnZBsZNHB', 'http://localhost', 0, 1, 0, '2019-04-10 04:04:34', '2019-04-10 04:04:34'),
(8, NULL, 'Laravel Personal Access Client', 'EUmtaxqZHThPC2OY3EqChxDkiQz6v5PXNDpfRcox', 'http://localhost', 1, 0, 0, '2019-04-28 14:48:00', '2019-04-28 14:48:00'),
(9, NULL, 'Laravel Password Grant Client', 'WtfJUlcQvqeWvYaG6QzfiNt3rblKgW6xFkfpf061', 'http://localhost', 0, 1, 0, '2019-04-28 14:48:00', '2019-04-28 14:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-08-06 05:53:25', '2018-08-06 05:53:25'),
(2, 5, '2018-08-06 06:06:14', '2018-08-06 06:06:14'),
(3, 6, '2019-04-10 04:04:33', '2019-04-10 04:04:33'),
(4, 8, '2019-04-28 14:48:00', '2019-04-28 14:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `last_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal` tinyint(1) NOT NULL DEFAULT '0',
  `facebook_url` text COLLATE utf8mb4_unicode_ci,
  `twitter_url` text COLLATE utf8mb4_unicode_ci,
  `youtube_url` text COLLATE utf8mb4_unicode_ci,
  `instagram_url` text COLLATE utf8mb4_unicode_ci,
  `alias` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `created_at`, `updated_at`, `user_id`, `last_name`, `first_name`, `picture`, `gender`, `country`, `city`, `district`, `field`, `industry`, `specialty`, `personal`, `facebook_url`, `twitter_url`, `youtube_url`, `instagram_url`, `alias`) VALUES
(10, '2018-08-16 07:12:51', '2018-08-16 07:12:51', 9, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_45c48cce2e2d7fbdea1afc51c7c6ad26.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, ''),
(11, '2018-08-19 13:40:46', '2018-08-19 13:40:46', 10, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_d3d9446802a44259755d38e6d163e820.png', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it 2', 'software', 1, NULL, NULL, NULL, NULL, ''),
(12, '2018-08-19 22:27:54', '2018-08-19 22:27:54', 11, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_6512bd43d9caa6e02c990b0a82652dca.png', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software testing', 1, NULL, NULL, NULL, NULL, ''),
(13, '2018-08-22 05:44:29', '2018-08-22 05:44:29', 13, '', '', 'https://www.more.com/sites/more.com/files/styles/hero_large/public/boyfriend_watches_porn_hero.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'test industry', 'software', 1, NULL, NULL, NULL, NULL, ''),
(14, '2018-08-25 08:38:19', '2018-08-26 10:27:36', 14, 'Test me if you can', 'tasht', 'http://localhost/BWmobapi/public/card_image/profile_pic_e7327d748d95a66452ee96657fd46f49aab3238922bcc25a6f606eb525ffdc56.jpeg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, ''),
(15, '2019-03-05 08:18:54', '2019-03-05 08:18:54', 47, 'dd', 'wintop-admin', 'http://localhost/BWmobapi/public/card_image/profile_pic_67c6a1e7ce56d3d6fa748ab6d9af3fd7.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, 'test'),
(25, '2019-07-17 15:07:19', '2019-07-17 15:07:19', 80, 'jul', 'testî7', 'http://businessway-appiumtech.com/Testbw/public/logo_image/profile_pic_735bf95ac7b0f409f99cdf28f54b86a9f033ab37c30201f73f142449d037028d.jpg', 'male', 'countaryTest 1', 'city 1', 'district 1', 'engineering', 'it', 'software', 0, NULL, NULL, NULL, NULL, 'noalias');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code_users`
--

CREATE TABLE `qr_code_users` (
  `qr_code_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `card_id` int(10) UNSIGNED DEFAULT NULL,
  `code` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `begain_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ended_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qr_code_users`
--

INSERT INTO `qr_code_users` (`qr_code_user_id`, `created_at`, `updated_at`, `user_id`, `card_id`, `code`, `begain_at`, `ended_at`) VALUES
(1, '2019-04-10 07:56:14', '2019-04-10 07:56:14', 1, 1, 'c86ea45cd21ada199662bb2c5bd89404c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 11:56:14', NULL),
(2, '2019-04-10 08:00:26', '2019-04-10 08:00:26', 1, 1, 'd480c30146fded80df717755835cbd46c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:00:26', NULL),
(3, '2019-04-10 08:08:18', '2019-04-10 08:08:18', 1, 1, 'f5e76009f380907b557552c801445933c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:08:18', NULL),
(4, '2019-04-10 08:08:57', '2019-04-10 08:08:57', 1, 1, '371e42c7d4e763a2da63d09e8708919dc4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:08:57', NULL),
(5, '2019-04-10 08:09:43', '2019-04-10 08:09:43', 1, 1, 'd4ee0f47d6f6b6ac48f0a2ab716310b6c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:09:43', NULL),
(6, '2019-04-10 08:09:45', '2019-04-10 08:09:45', 1, 1, 'ab7052d16e8f188ac10912481d5e4ed1c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:09:45', NULL),
(7, '2019-04-10 08:10:05', '2019-04-10 08:10:05', 1, 1, '33abe906be0996ba875198aa97c9b878c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:10:05', NULL),
(8, '2019-04-10 08:10:31', '2019-04-10 08:10:31', 1, 1, '04ab1f7b0b127d43c6a840e9683378e9c4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:10:31', NULL),
(9, '2019-04-10 08:10:48', '2019-04-10 08:10:48', 1, 1, '5954bda9150062b2915d6d7bc3ba845cc4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:10:48', NULL),
(10, '2019-07-07 11:56:48', '2019-07-07 11:56:48', 80, 1, '5b68814799dfe4d4331851df22da4ca1c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 21:56:48', NULL),
(11, '2019-07-07 11:59:43', '2019-07-07 11:59:43', 80, 1, '39a23e596e0e35ca4878ac836faded93c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 21:59:43', NULL),
(12, '2019-07-07 12:01:30', '2019-07-07 12:01:30', 80, 1, 'f71c6a292de78b918d029d840d295590c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:01:30', NULL),
(13, '2019-07-07 12:04:24', '2019-07-07 12:04:24', 80, 1, 'e3008e62a40514892416ccf6ddb7cd91c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:04:24', NULL),
(14, '2019-07-07 12:06:27', '2019-07-07 12:06:27', 80, 1, 'c2fabebba79f814098bd3c4e9833cdbac4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:06:27', NULL),
(15, '2019-07-07 12:40:24', '2019-07-07 12:40:24', 80, 1, 'f3ad18ab51a88171259c0d319e7494b7c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:40:24', NULL),
(16, '2019-07-07 12:41:13', '2019-07-07 12:41:13', 80, 1, '257354bf16270c23fffdf6f2c23103d3c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:41:13', NULL),
(17, '2019-07-07 12:44:13', '2019-07-07 12:44:13', 80, 1, 'dccc6948f5cc1d5898e406ad06f456b7c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:44:13', NULL),
(18, '2019-07-07 12:44:44', '2019-07-07 12:44:44', 80, 1, '124a0a13dd8bf8195c027d7cf0a9e209c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:44:44', NULL),
(19, '2019-07-07 12:46:40', '2019-07-07 12:46:40', 80, 1, '77933f85b4f5a2ea2c601cbd1bc064bfc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:46:40', NULL),
(20, '2019-07-07 12:50:36', '2019-07-07 12:50:36', 80, 1, 'c367a805c24109c8833022dfc3b14c4dc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:50:36', NULL),
(21, '2019-07-07 12:51:55', '2019-07-07 12:51:55', 80, 1, '1c611373cda29cd5ae275df3b0b3ef39c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:51:55', NULL),
(22, '2019-07-07 12:56:22', '2019-07-07 12:56:22', 80, 1, 'a10d57ca26955d10e132fe7521567e6ec4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:56:22', NULL),
(23, '2019-07-07 12:56:44', '2019-07-07 12:56:44', 80, 1, 'eaf564b63432066e5b2b9e5fa8597654c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:56:44', NULL),
(24, '2019-07-07 12:57:00', '2019-07-07 12:57:00', 80, 1, 'b2c637a7455e0c6d5c89098f2786d9a1c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:57:00', NULL),
(25, '2019-07-07 12:58:44', '2019-07-07 12:58:44', 80, 1, '72e13a4068c482e94536fdd5231b2aa0c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 22:58:44', NULL),
(26, '2019-07-07 13:00:24', '2019-07-07 13:00:24', 80, 1, '2b7899d97cd4e1d5e2532bb6986269e4c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:00:24', NULL),
(27, '2019-07-07 13:01:09', '2019-07-07 13:01:09', 80, 1, 'a406b79c85c352658dd8175f043a3eeac4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:01:09', NULL),
(28, '2019-07-07 13:01:35', '2019-07-07 13:01:35', 80, 1, '482eb840cd3c7ef0e00253338ef0af54c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:01:35', NULL),
(29, '2019-07-07 13:02:35', '2019-07-07 13:02:35', 80, 1, '82f5241ab41a512efa399181d3d940ddc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:02:35', NULL),
(30, '2019-07-07 13:02:48', '2019-07-07 13:02:48', 80, 1, '687d9df1ae2e672330275b79eb16cbe2c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:02:48', NULL),
(31, '2019-07-07 13:09:16', '2019-07-07 13:09:16', 80, 1, 'b64ddcceeeaab8960e1fb777fcd105d7c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:09:16', NULL),
(32, '2019-07-07 13:09:31', '2019-07-07 13:09:31', 80, 1, 'd01f8ea0a382be1f722197b518b02463c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:09:31', NULL),
(33, '2019-07-07 13:09:51', '2019-07-07 13:09:51', 80, 1, 'fac11a9a664ebe7feba0bb587ecc7224c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:09:51', NULL),
(34, '2019-07-07 13:20:02', '2019-07-07 13:20:02', 80, 1, '6568e0bee649cf42bfa84025d2f03f31c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:20:02', NULL),
(35, '2019-07-07 13:20:10', '2019-07-07 13:20:10', 80, 1, '65178ed8fbfa2128a5cada49a936e0dfc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:20:10', NULL),
(36, '2019-07-07 13:20:14', '2019-07-07 13:20:14', 80, 1, 'ea30ddcd6232dbabffde4c5fdceae055c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:20:14', NULL),
(37, '2019-07-07 13:20:19', '2019-07-07 13:20:19', 80, 1, '0220ec4286f706ed752a9744988bb8c8c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:20:19', NULL),
(39, '2019-07-07 13:21:12', '2019-07-07 13:21:12', 80, 1, '9f5abe3dd404627de101374567dfdb11c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:21:12', NULL),
(40, '2019-07-07 13:21:21', '2019-07-07 13:21:21', 80, 1, 'a44d133c47b39df49ba76a3fdd6ce1bec4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:21:21', NULL),
(41, '2019-07-07 13:21:26', '2019-07-07 13:21:26', 80, 1, '784f5e7669a4d07936a05b78a6fb62d4c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:21:26', NULL),
(42, '2019-07-07 13:21:30', '2019-07-07 13:21:30', 80, 1, '1c6ef1407a80ba9dee27a7e7ca1733e8c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:21:30', NULL),
(43, '2019-07-07 13:21:35', '2019-07-07 13:21:35', 80, 1, '0104062f203c261b706e414f7c2b5ea7c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:21:35', NULL),
(44, '2019-07-07 13:21:36', '2019-07-07 13:21:36', 80, 1, '39cfbddfd380ae2a60789c2bf1c0aa3bc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:21:36', NULL),
(46, '2019-07-07 13:30:55', '2019-07-07 13:30:55', 80, 1, '7674dfee53daf2f9f555307631211142c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:30:55', NULL),
(47, '2019-07-07 13:32:03', '2019-07-07 13:32:03', 80, 1, '185d40072b66d28edd28a3e440003cf7c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:32:03', NULL),
(48, '2019-07-07 13:33:43', '2019-07-07 13:33:43', 80, 1, '4225197d05da26b51583b2e9db652e20c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:33:43', NULL),
(49, '2019-07-07 13:33:52', '2019-07-07 13:33:52', 80, 1, '9159ccf2860ead59b8f0225c1369ab7bc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:33:52', NULL),
(50, '2019-07-07 13:34:47', '2019-07-07 13:34:47', 80, 1, '22cc62ae8936842997dd61b85bdabab5c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:34:47', NULL),
(51, '2019-07-07 13:34:54', '2019-07-07 13:34:54', 80, 1, 'a707723d1d977fe391b3c28dd31218e0c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-06 23:34:54', NULL),
(52, '2019-07-08 12:58:40', '2019-07-08 12:58:40', 80, 1, 'de62678bf25325992533c70e146e7fbdc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-07 22:58:40', NULL),
(53, '2019-07-11 19:53:53', '2019-07-11 19:53:53', 83, 17, 'e4459808443e75cbc6b45453ef7b950870efdf2ec9b086079795c442636b55fbfe9fc289c3ff0af142b6d3bead98a923', '2019-07-11 05:53:53', NULL),
(54, '2019-07-12 19:18:33', '2019-07-12 19:18:33', 83, 17, '66ef37d1e21a5a3e15180318e6052c1870efdf2ec9b086079795c442636b55fbfe9fc289c3ff0af142b6d3bead98a923', '2019-07-12 05:18:33', NULL),
(55, '2019-07-12 19:38:55', '2019-07-12 19:38:55', 80, 1, '50cbb9beee98329579f8701778a945c4c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-12 05:38:55', NULL),
(56, '2019-07-12 20:07:03', '2019-07-12 20:07:03', 80, 1, '2b1c678439b22a991fddc574af75c5cdc4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-12 06:07:03', NULL),
(57, '2019-07-12 20:18:29', '2019-07-12 20:18:29', 83, 17, '1265a2fe8443c4abaf18a23f1164599970efdf2ec9b086079795c442636b55fbfe9fc289c3ff0af142b6d3bead98a923', '2019-07-12 06:18:29', NULL),
(58, '2019-07-12 20:22:40', '2019-07-12 20:22:40', 83, 17, '1dd49e00ede7dea8cad2f951ea5ad5b870efdf2ec9b086079795c442636b55fbfe9fc289c3ff0af142b6d3bead98a923', '2019-07-12 06:22:40', NULL),
(59, '2019-07-13 00:04:33', '2019-07-13 00:04:33', 84, 18, '54e335763c6e46babdf2b3ff8eb753946f4922f45568161a8cdf4ad2299f6d2368d30a9594728bc39aa24be94b319d21', '2019-07-12 10:04:33', NULL),
(60, '2019-07-13 00:11:43', '2019-07-13 00:11:43', 83, 17, '5c4c94c89301917cd0d5c799fc52bfc570efdf2ec9b086079795c442636b55fbfe9fc289c3ff0af142b6d3bead98a923', '2019-07-12 10:11:43', NULL),
(61, '2019-07-13 00:12:51', '2019-07-13 00:12:51', 83, 17, '825160e8d1b78130fbd568eb5cc15f8670efdf2ec9b086079795c442636b55fbfe9fc289c3ff0af142b6d3bead98a923', '2019-07-12 10:12:51', NULL),
(62, '2019-07-13 00:19:33', '2019-07-13 00:19:33', 80, 1, 'f31124b3622b574d1a3e028f69984058c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-12 10:19:33', NULL),
(63, '2019-07-13 01:06:04', '2019-07-13 01:06:04', 80, 1, 'e8bb62b52f5c405edf588e0b03c6fa67c4ca4238a0b923820dcc509a6f75849bf033ab37c30201f73f142449d037028d', '2019-07-12 11:06:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recent_activities`
--

CREATE TABLE `recent_activities` (
  `recent_activity_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `action_by_user_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image_url` varchar(1910) COLLATE utf8mb4_unicode_ci DEFAULT 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_activities`
--

INSERT INTO `recent_activities` (`recent_activity_id`, `created_at`, `updated_at`, `user_id`, `action_by_user_id`, `description`, `profile_image_url`) VALUES
(1, '2019-04-10 04:09:09', '2019-04-10 04:09:09', 1, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(2, '2019-04-10 07:26:46', '2019-04-10 07:26:46', 1, 0, 'createCardHolder', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(3, '2019-04-10 07:26:59', '2019-04-10 07:26:59', 1, 0, 'createCardHolder', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(4, '2019-04-10 07:34:22', '2019-04-10 07:34:22', 1, 1, 'Delete Card', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(5, '2019-04-10 07:35:34', '2019-04-10 07:35:34', 1, 1, 'Delete Card', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(6, '2019-04-10 08:23:37', '2019-04-10 08:23:37', 1, NULL, NULL, 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(7, '2019-04-14 01:11:19', '2019-04-14 01:11:19', 1, NULL, NULL, 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(8, '2019-04-14 01:11:41', '2019-04-14 01:11:41', 1, NULL, NULL, 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(9, '2019-04-16 18:30:50', '2019-04-16 18:30:50', 2, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(10, '2019-04-16 22:38:18', '2019-04-16 22:38:18', 3, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(11, '2019-04-16 23:13:06', '2019-04-16 23:13:06', 4, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(12, '2019-04-17 00:40:20', '2019-04-17 00:40:20', 5, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(13, '2019-04-17 01:21:42', '2019-04-17 01:21:42', 6, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(14, '2019-04-21 11:05:53', '2019-04-21 11:05:53', 7, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(15, '2019-04-21 12:00:47', '2019-04-21 12:00:47', 8, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(16, '2019-04-21 12:07:07', '2019-04-21 12:07:07', 9, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(17, '2019-04-25 15:34:43', '2019-04-25 15:34:43', 10, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(18, '2019-04-25 15:38:18', '2019-04-25 15:38:18', 34, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(19, '2019-04-25 15:51:03', '2019-04-25 15:51:03', 35, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(20, '2019-04-25 15:51:52', '2019-04-25 15:51:52', 36, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(21, '2019-04-25 15:55:45', '2019-04-25 15:55:45', 37, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(22, '2019-04-25 15:58:31', '2019-04-25 15:58:31', 38, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(23, '2019-04-25 15:59:04', '2019-04-25 15:59:04', 39, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(24, '2019-04-25 16:01:17', '2019-04-25 16:01:17', 40, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(25, '2019-04-25 16:02:32', '2019-04-25 16:02:32', 41, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(26, '2019-04-25 16:05:17', '2019-04-25 16:05:17', 42, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(27, '2019-04-25 16:07:53', '2019-04-25 16:07:53', 43, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(28, '2019-04-25 16:09:36', '2019-04-25 16:09:36', 44, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(29, '2019-04-25 16:13:41', '2019-04-25 16:13:41', 45, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(30, '2019-04-25 16:15:16', '2019-04-25 16:15:16', 46, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(31, '2019-04-25 16:18:53', '2019-04-25 16:18:53', 47, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(32, '2019-04-25 16:22:31', '2019-04-25 16:22:31', 48, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(33, '2019-04-25 16:31:51', '2019-04-25 16:31:51', 49, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(34, '2019-04-25 21:31:23', '2019-04-25 21:31:23', 50, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(35, '2019-04-25 21:32:34', '2019-04-25 21:32:34', 51, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(36, '2019-04-25 21:37:25', '2019-04-25 21:37:25', 52, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(37, '2019-04-26 19:19:20', '2019-04-26 19:19:20', 53, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(38, '2019-04-26 19:32:19', '2019-04-26 19:32:19', 54, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(39, '2019-04-26 19:44:04', '2019-04-26 19:44:04', 55, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(40, '2019-04-28 14:41:50', '2019-04-28 14:41:50', 56, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(41, '2019-04-28 14:49:03', '2019-04-28 14:49:03', 59, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(42, '2019-04-28 16:18:55', '2019-04-28 16:18:55', 60, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(43, '2019-04-30 14:05:04', '2019-04-30 14:05:04', 61, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(44, '2019-05-02 19:57:16', '2019-05-02 19:57:16', 62, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(45, '2019-05-05 17:05:53', '2019-05-05 17:05:53', 64, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(46, '2019-05-05 21:55:09', '2019-05-05 21:55:09', 65, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(47, '2019-05-06 15:18:12', '2019-05-06 15:18:12', 66, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(48, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(49, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered test 2', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(50, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered test 3', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(51, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered test 4', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(52, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered test 5', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(53, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered test 6', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(54, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 0, 'registered test 7', 'https://res.cloudinary.com/oclemy/image/upload/v1460355582/breaking_wbxtzb.jpg'),
(55, '2019-05-11 20:18:08', '2019-05-11 20:18:08', 77, 0, 'registered', NULL),
(56, '2019-05-11 20:19:34', '2019-05-11 20:19:34', 78, 0, 'registered', NULL),
(57, '2019-07-01 16:36:16', '2019-07-01 16:36:16', 79, 0, 'registered', NULL),
(58, '2019-07-07 11:49:50', '2019-07-07 11:49:50', 80, 0, 'registered', NULL),
(59, '2019-07-08 13:40:46', '2019-07-08 13:40:46', 81, 0, 'registered', NULL),
(60, '2019-07-09 09:09:36', '2019-07-09 09:09:36', 82, 0, 'registered', NULL),
(61, '2019-07-09 17:45:39', '2019-07-09 17:45:39', 83, 0, 'registered', NULL),
(62, '2019-07-12 20:26:03', '2019-07-12 20:26:03', 84, 0, 'registered', NULL),
(63, '2019-07-17 09:38:37', '2019-07-17 09:38:37', 85, 0, 'registered', NULL),
(64, '2019-07-17 09:40:11', '2019-07-17 09:40:11', 86, 0, 'registered', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `from_id` int(10) UNSIGNED DEFAULT NULL,
  `to_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resetsteps`
--

CREATE TABLE `resetsteps` (
  `resetsteps_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmation_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_pass` varchar(4091) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stagings`
--

CREATE TABLE `stagings` (
  `staging_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `registration` int(1) DEFAULT '0',
  `active_account` int(1) DEFAULT '0',
  `creation_own_profile` int(1) DEFAULT '0',
  `creation_own_card` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stagings`
--

INSERT INTO `stagings` (`staging_id`, `created_at`, `updated_at`, `user_id`, `registration`, `active_account`, `creation_own_profile`, `creation_own_card`) VALUES
(1, '2019-01-12 03:46:06', '2019-01-12 03:46:06', 33, 1, 0, 0, 0),
(2, '2019-01-12 03:46:12', '2019-01-12 03:46:12', 34, 1, 0, 0, 0),
(3, '2019-01-12 03:46:20', '2019-01-12 03:46:20', 35, 1, 0, 0, 0),
(4, '2019-01-12 04:29:56', '2019-01-12 04:29:56', 36, 1, 0, 0, 0),
(5, '2019-03-05 08:13:18', '2019-03-05 08:20:29', 47, 1, 0, 1, 1),
(6, '2019-03-05 08:21:15', '2019-03-05 09:12:01', 48, 1, 0, 1, 1),
(7, '2019-03-05 09:12:40', '2019-03-05 09:13:18', 49, 1, 0, 1, 1),
(8, '2019-04-10 04:09:09', '2019-04-10 04:10:57', 1, 1, 0, 1, 1),
(9, '2019-04-16 18:30:50', '2019-04-16 18:30:50', 2, 1, 0, 0, 0),
(10, '2019-04-16 22:38:18', '2019-04-16 22:38:18', 3, 1, 0, 0, 0),
(11, '2019-04-16 23:13:06', '2019-04-16 23:13:54', 4, 1, 0, 0, 1),
(12, '2019-04-17 00:40:20', '2019-04-17 00:40:20', 5, 1, 0, 0, 0),
(13, '2019-04-17 01:21:42', '2019-04-17 01:21:42', 6, 1, 0, 0, 0),
(14, '2019-04-21 11:05:53', '2019-04-21 11:05:53', 7, 1, 0, 0, 0),
(15, '2019-04-21 12:00:47', '2019-04-21 12:00:47', 8, 1, 0, 0, 0),
(16, '2019-04-21 12:07:07', '2019-04-21 12:07:07', 9, 1, 0, 0, 0),
(17, '2019-04-25 15:34:43', '2019-04-25 15:34:43', 10, 1, 0, 0, 0),
(18, '2019-04-25 15:55:45', '2019-04-25 15:55:45', 37, 1, 0, 0, 0),
(19, '2019-04-25 15:58:31', '2019-04-25 15:58:31', 38, 1, 0, 0, 0),
(20, '2019-04-25 15:59:04', '2019-04-25 15:59:04', 39, 1, 0, 0, 0),
(21, '2019-04-25 16:01:17', '2019-04-25 16:01:17', 40, 1, 0, 0, 0),
(22, '2019-04-25 16:02:32', '2019-04-25 16:02:32', 41, 1, 0, 0, 0),
(23, '2019-04-25 16:05:17', '2019-04-25 16:05:17', 42, 1, 0, 0, 0),
(24, '2019-04-25 16:07:53', '2019-04-25 16:07:53', 43, 1, 0, 0, 0),
(25, '2019-04-25 16:09:36', '2019-04-25 16:09:36', 44, 1, 0, 0, 0),
(26, '2019-04-25 16:13:41', '2019-04-25 16:13:41', 45, 1, 0, 0, 0),
(27, '2019-04-25 16:15:16', '2019-04-25 16:15:16', 46, 1, 0, 0, 0),
(28, '2019-04-25 21:31:23', '2019-04-25 21:31:23', 50, 1, 0, 0, 0),
(29, '2019-04-25 21:32:34', '2019-04-25 21:32:34', 51, 1, 0, 0, 0),
(30, '2019-04-25 21:37:25', '2019-04-25 21:37:25', 52, 1, 0, 0, 0),
(31, '2019-04-26 19:19:20', '2019-04-26 19:19:20', 53, 1, 0, 0, 0),
(32, '2019-04-26 19:32:19', '2019-04-26 19:32:19', 54, 1, 0, 0, 0),
(33, '2019-04-26 19:44:04', '2019-04-26 19:44:04', 55, 1, 0, 0, 0),
(34, '2019-04-28 14:41:50', '2019-04-28 14:41:50', 56, 1, 0, 0, 0),
(35, '2019-04-28 14:49:03', '2019-04-28 14:49:03', 59, 1, 0, 0, 0),
(36, '2019-04-28 16:18:55', '2019-05-02 11:50:01', 60, 1, 0, 0, 1),
(37, '2019-04-30 14:05:04', '2019-04-30 14:05:04', 61, 1, 0, 0, 0),
(38, '2019-05-02 19:57:16', '2019-05-02 19:57:16', 62, 1, 0, 0, 0),
(39, '2019-05-05 17:05:53', '2019-05-05 17:05:53', 64, 1, 0, 0, 0),
(40, '2019-05-05 21:55:09', '2019-05-05 21:55:09', 65, 1, 0, 0, 0),
(41, '2019-05-06 15:18:12', '2019-05-06 15:18:12', 66, 1, 0, 0, 0),
(42, '2019-05-06 15:23:13', '2019-05-06 15:23:13', 68, 1, 0, 0, 0),
(43, '2019-05-11 20:18:08', '2019-05-11 20:18:08', 77, 1, 0, 0, 0),
(44, '2019-05-11 20:19:34', '2019-05-11 20:19:34', 78, 1, 0, 0, 0),
(45, '2019-07-01 16:36:16', '2019-07-01 16:36:16', 79, 1, 0, 0, 0),
(46, '2019-07-07 11:49:50', '2019-07-09 09:25:56', 80, 1, 0, 1, 1),
(47, '2019-07-08 13:40:46', '2019-07-08 13:40:46', 81, 1, 0, 0, 0),
(48, '2019-07-09 09:09:36', '2019-07-09 09:14:26', 82, 1, 0, 1, 1),
(49, '2019-07-09 17:45:39', '2019-07-09 17:46:18', 83, 1, 0, 0, 1),
(50, '2019-07-12 20:26:03', '2019-07-13 00:04:11', 84, 1, 0, 1, 1),
(51, '2019-07-17 09:38:37', '2019-07-17 09:38:37', 85, 1, 0, 0, 0),
(52, '2019-07-17 09:40:11', '2019-07-17 09:40:11', 86, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `terms_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(2) NOT NULL DEFAULT '0',
  `type` int(2) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `type`) VALUES
(80, 'testî7', 'testî7', 'jul', 'jul@test.test', '$2y$10$T50.3ypj77A2pFTHS/MieuEjbZVUWxz8vsjf3TwlHuxvd093AXaxG', NULL, '2019-07-07 11:49:50', '2019-07-07 11:49:50', 0, 3),
(81, 'Iessa', 'Iessa', 'M', 'eng.iessa.mostafa2@gmail.com', '$2y$10$GdhGNKYoGhUiXOLGqjlbguhSIYhjCePHAu.JOAbBp4tmwfaZzNlom', NULL, '2019-07-08 13:40:46', '2019-07-08 13:40:46', 0, 3),
(82, 'testFN', 'testFN', 'testLN', 'test@test.test', '$2y$10$FZj8za/.v8fKtYxyENS7IOamb/WvLVsmM4omtLAYzwb/UMVthPET2', NULL, '2019-07-09 09:09:36', '2019-07-09 09:09:36', 0, 3),
(83, 'testjul9', 'testjul9', 'M', 'eng.testjul9@gmqil.com', '$2y$10$Mjeu5SS7iIEvrTnNyw/EeOPTrbTw0ftI/WlhD0xKrCckmPnz2pZiq', NULL, '2019-07-09 17:45:39', '2019-07-09 17:45:39', 0, 3),
(84, 'testFN', 'testFN', 'testLN', 'test12072019@test.test', '$2y$10$/NPd1GV.4T3rjrd.ri/eru7r.0gmoeAqL1Bn92xkdlvRR5XDgf9v2', NULL, '2019-07-12 20:26:03', '2019-07-12 20:26:03', 0, 3),
(85, 'sam', 'sam', 'sam6', 'sam@sam6t.com', '$2y$10$At6Fc0wOlwmWttXkJ5dYqOXPlIqjy9T38.ky2gqYJzgpfPFCehzjK', NULL, '2019-07-17 09:38:36', '2019-07-17 09:38:36', 0, 3),
(86, 'sam', 'sam', 'sam6', 'sam@sam6.com', '$2y$10$txJyUt5SqdifSl1d1zB5iuezQogTI4VuefGvpDrJ56XmgkMj/7OZK', NULL, '2019-07-17 09:40:11', '2019-07-17 09:40:11', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_cards`
--

CREATE TABLE `user_cards` (
  `user_card_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `card_holder_id` int(10) UNSIGNED DEFAULT NULL,
  `card_id` int(10) UNSIGNED DEFAULT NULL,
  `transfered` int(1) NOT NULL DEFAULT '0',
  `redirected` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_cards`
--

INSERT INTO `user_cards` (`user_card_id`, `created_at`, `updated_at`, `user_id`, `card_holder_id`, `card_id`, `transfered`, `redirected`) VALUES
(1, '2019-04-10 04:10:57', '2019-04-10 04:10:57', 1, 0, 1, 0, 0),
(2, '2019-04-10 07:32:36', '2019-04-10 07:32:36', 78, 0, 2, 1, 0),
(4, '2019-04-10 07:32:43', '2019-04-10 07:32:43', 1, 16, 4, 0, 0),
(5, '2019-04-16 23:13:54', '2019-04-16 23:13:54', 4, 16, 4, 0, 0),
(6, '2019-05-02 11:50:01', '2019-05-02 11:50:01', 68, 0, 8, 0, 0),
(7, '2019-05-05 16:49:04', '2019-05-05 16:49:04', 68, 0, 9, 0, 0),
(8, '2019-05-05 16:49:27', '2019-05-05 16:49:27', 68, 0, 10, 0, 0),
(9, '2019-05-05 16:54:11', '2019-05-05 16:54:11', 68, 0, 11, 1, 0),
(10, '2019-05-05 16:54:52', '2019-05-05 16:54:52', 68, 0, 12, 1, 0),
(11, '2019-05-05 17:34:41', '2019-05-05 17:34:41', 78, 0, 13, 1, 0),
(12, '2019-07-09 09:10:54', '2019-07-09 09:10:54', 82, 0, 14, 0, 0),
(13, '2019-07-09 09:14:36', '2019-07-09 09:14:36', 82, 0, 15, 0, 0),
(14, '2019-07-09 09:25:56', '2019-07-09 09:25:56', 80, 0, 16, 0, 0),
(15, '2019-07-09 17:46:18', '2019-07-09 17:46:18', 83, 0, 17, 0, 0),
(16, '2019-07-13 00:04:11', '2019-07-13 00:04:11', 84, 0, 18, 0, 0),
(17, '2019-07-13 00:04:58', '2019-07-13 00:04:58', 84, 0, 18, 0, 0),
(18, '2019-07-13 00:04:58', '2019-07-13 00:04:58', 84, 0, 18, 0, 0),
(19, '2019-07-13 00:22:18', '2019-07-13 00:22:18', 80, 0, 17, 0, 0),
(20, '2019-07-13 00:22:18', '2019-07-13 00:22:18', 83, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_card_notes`
--

CREATE TABLE `user_card_notes` (
  `user_card_note_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `card_id` int(10) UNSIGNED DEFAULT NULL,
  `note` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_card_notes`
--

INSERT INTO `user_card_notes` (`user_card_note_id`, `created_at`, `updated_at`, `user_id`, `card_id`, `note`) VALUES
(1, '2019-04-10 07:38:52', '2019-04-10 07:38:52', 1, 2, 'text data');

-- --------------------------------------------------------

--
-- Table structure for table `user_card_reminders`
--

CREATE TABLE `user_card_reminders` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_card_reminder_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `card_id` int(10) UNSIGNED DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reminder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_card_reminders`
--

INSERT INTO `user_card_reminders` (`created_at`, `updated_at`, `user_card_reminder_id`, `user_id`, `card_id`, `date`, `time`, `reminder`) VALUES
('2019-04-10 07:40:09', '2019-04-10 07:40:09', 1, NULL, 2, '21-05-2018', '05:40', 'test');

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
(1, 82, 15, '2019-07-09 09:14:48', '2019-07-09 09:14:48', '51.0791746', '31.2485775', NULL, NULL, NULL, 'Е101, Chernihivs\'ka oblast, Ukraine'),
(2, 80, 1, '2019-07-09 09:32:09', '2019-07-09 09:32:09', '30.09009009009009', '31.236518005899356', NULL, NULL, NULL, '176 Ebeid, As Sahel, Shubra, Cairo Governorate, Egypt'),
(3, 83, 17, '2019-07-09 17:53:32', '2019-07-09 17:53:32', '30.07207207207207', '31.2516491777027', NULL, NULL, NULL, '22 Moerkous Beshara, El-Attar, Shubra, Cairo Governorate, Egypt');

-- --------------------------------------------------------

--
-- Table structure for table `user_to_companies`
--

CREATE TABLE `user_to_companies` (
  `userToCompany_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '1',
  `departement_id` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_to_companies`
--

INSERT INTO `user_to_companies` (`userToCompany_id`, `created_at`, `updated_at`, `company_id`, `user_id`, `role_id`, `departement_id`) VALUES
(1, '2018-12-30 11:47:43', '2018-12-30 11:47:43', 8, 28, 1, 2),
(2, '2019-01-02 05:14:47', '2019-01-02 05:14:47', 8, 30, 2, 1),
(3, '2019-01-02 05:16:37', '2019-01-02 05:16:37', 8, 31, 2, 2),
(4, '2019-01-02 05:18:02', '2019-01-02 05:18:02', 8, 32, 2, 1),
(5, '2019-01-13 02:35:55', '2019-01-13 02:35:55', 8, 37, 2, 2),
(6, '2019-01-13 02:37:06', '2019-01-13 02:37:06', 8, 38, 2, 1),
(7, '2019-01-13 02:40:19', '2019-01-13 02:40:19', 8, 39, 2, 1),
(8, '2019-01-13 02:47:01', '2019-01-13 02:47:01', 8, 40, 2, 2),
(9, '2019-01-13 02:49:49', '2019-01-13 02:49:49', 8, 41, 2, 1),
(10, '2019-01-13 02:51:11', '2019-01-13 02:51:11', 8, 42, 2, 1),
(11, '2019-01-13 02:52:42', '2019-01-13 02:52:42', 8, 43, 2, 2),
(12, '2019-01-15 05:17:36', '2019-01-15 05:17:36', 8, 44, 2, 1),
(13, '2019-01-15 05:21:05', '2019-01-15 05:21:05', 8, 45, 2, 3),
(14, '2019-01-31 13:40:46', '2019-01-31 13:40:46', 9, 46, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_processes`
--
ALTER TABLE `activation_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_description`
--
ALTER TABLE `activity_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `branchs_company_id_index` (`company_id`);

--
-- Indexes for table `cardpools`
--
ALTER TABLE `cardpools`
  ADD PRIMARY KEY (`cardpool_id`),
  ADD KEY `cardpools_company_id_index` (`company_id`),
  ADD KEY `cardpools_card_holder_id_index` (`card_holder_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `cards_holders`
--
ALTER TABLE `cards_holders`
  ADD PRIMARY KEY (`card_holder_id`),
  ADD KEY `cards_holders_user_id_index` (`user_id`);

--
-- Indexes for table `card_to_interests`
--
ALTER TABLE `card_to_interests`
  ADD PRIMARY KEY (`card_to_interest_id`),
  ADD KEY `card_to_interests_interest_id_index` (`interest_id`),
  ADD KEY `card_to_interests_user_id_index` (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `countaries_details`
--
ALTER TABLE `countaries_details`
  ADD PRIMARY KEY (`countariesDetails_id`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`departement_id`),
  ADD KEY `departements_branch_id_index` (`branch_id`),
  ADD KEY `departements_company_id_index` (`company_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `email_signatures`
--
ALTER TABLE `email_signatures`
  ADD PRIMARY KEY (`emailSignature_id`),
  ADD KEY `email_signatures_user_id_index` (`user_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `interestes`
--
ALTER TABLE `interestes`
  ADD PRIMARY KEY (`interest_id`);

--
-- Indexes for table `invitation_contacts`
--
ALTER TABLE `invitation_contacts`
  ADD PRIMARY KEY (`invitation_contacts_id`),
  ADD KEY `invitation_contacts_invited_user_id_index` (`invited_user_id`);

--
-- Indexes for table `messag_records`
--
ALTER TABLE `messag_records`
  ADD PRIMARY KEY (`messag_record_id`),
  ADD KEY `messag_records_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `qr_code_users`
--
ALTER TABLE `qr_code_users`
  ADD PRIMARY KEY (`qr_code_user_id`),
  ADD UNIQUE KEY `qr_code_users_code_unique` (`code`),
  ADD KEY `qr_code_users_user_id_index` (`user_id`),
  ADD KEY `qr_code_users_card_id_index` (`card_id`);

--
-- Indexes for table `recent_activities`
--
ALTER TABLE `recent_activities`
  ADD PRIMARY KEY (`recent_activity_id`),
  ADD KEY `recent_activities_user_id_index` (`user_id`),
  ADD KEY `recent_activities_action_by_user_id_index` (`action_by_user_id`);

--
-- Indexes for table `recommended_cards`
--
ALTER TABLE `recommended_cards`
  ADD PRIMARY KEY (`recommendedCards_id`),
  ADD KEY `recommended_cards_card_id_index` (`card_id`),
  ADD KEY `recommended_cards_recommended_by_user_id_index` (`recommended_by_user_id`),
  ADD KEY `recommended_cards_recommended_for_user_id_index` (`recommended_for_user_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `requests_from_id_index` (`from_id`),
  ADD KEY `requests_to_id_index` (`to_id`);

--
-- Indexes for table `resetsteps`
--
ALTER TABLE `resetsteps`
  ADD PRIMARY KEY (`resetsteps_id`);

--
-- Indexes for table `stagings`
--
ALTER TABLE `stagings`
  ADD PRIMARY KEY (`staging_id`),
  ADD KEY `stagings_user_id_index` (`user_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cards`
--
ALTER TABLE `user_cards`
  ADD PRIMARY KEY (`user_card_id`),
  ADD KEY `user_cards_user_id_index` (`user_id`),
  ADD KEY `user_cards_card_holder_id_index` (`card_holder_id`),
  ADD KEY `user_cards_card_id_index` (`card_id`);

--
-- Indexes for table `user_card_notes`
--
ALTER TABLE `user_card_notes`
  ADD PRIMARY KEY (`user_card_note_id`),
  ADD KEY `user_card_notes_user_id_index` (`user_id`),
  ADD KEY `user_card_notes_card_id_index` (`card_id`);

--
-- Indexes for table `user_card_reminders`
--
ALTER TABLE `user_card_reminders`
  ADD PRIMARY KEY (`user_card_reminder_id`),
  ADD KEY `user_card_reminders_user_card_reminder_id_index` (`user_card_reminder_id`),
  ADD KEY `user_card_reminders_user_id_index` (`user_id`),
  ADD KEY `user_card_reminders_card_id_index` (`card_id`);

--
-- Indexes for table `user_locations`
--
ALTER TABLE `user_locations`
  ADD PRIMARY KEY (`userLocation_id`),
  ADD UNIQUE KEY `card_id` (`card_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `user_to_companies`
--
ALTER TABLE `user_to_companies`
  ADD PRIMARY KEY (`userToCompany_id`),
  ADD KEY `user_to_companies_company_id_index` (`company_id`),
  ADD KEY `user_to_companies_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation_processes`
--
ALTER TABLE `activation_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `activity_description`
--
ALTER TABLE `activity_description`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `branch_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cardpools`
--
ALTER TABLE `cardpools`
  MODIFY `cardpool_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cards_holders`
--
ALTER TABLE `cards_holders`
  MODIFY `card_holder_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `card_to_interests`
--
ALTER TABLE `card_to_interests`
  MODIFY `card_to_interest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countaries_details`
--
ALTER TABLE `countaries_details`
  MODIFY `countariesDetails_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departements`
--
ALTER TABLE `departements`
  MODIFY `departement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_signatures`
--
ALTER TABLE `email_signatures`
  MODIFY `emailSignature_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interestes`
--
ALTER TABLE `interestes`
  MODIFY `interest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invitation_contacts`
--
ALTER TABLE `invitation_contacts`
  MODIFY `invitation_contacts_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messag_records`
--
ALTER TABLE `messag_records`
  MODIFY `messag_record_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `qr_code_users`
--
ALTER TABLE `qr_code_users`
  MODIFY `qr_code_user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `recent_activities`
--
ALTER TABLE `recent_activities`
  MODIFY `recent_activity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `recommended_cards`
--
ALTER TABLE `recommended_cards`
  MODIFY `recommendedCards_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resetsteps`
--
ALTER TABLE `resetsteps`
  MODIFY `resetsteps_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stagings`
--
ALTER TABLE `stagings`
  MODIFY `staging_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `terms_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `user_card_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_card_notes`
--
ALTER TABLE `user_card_notes`
  MODIFY `user_card_note_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_card_reminders`
--
ALTER TABLE `user_card_reminders`
  MODIFY `user_card_reminder_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_locations`
--
ALTER TABLE `user_locations`
  MODIFY `userLocation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_to_companies`
--
ALTER TABLE `user_to_companies`
  MODIFY `userToCompany_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
