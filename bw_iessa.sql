-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 12:30 PM
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
(16, 'a111', 49, '2019-03-05 11:12:40', '2019-03-05 11:12:40', NULL);

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
(1, '2019-04-10 04:10:57', '2019-04-10 04:10:57', 1, 'testLN', 'testFN', 1, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://localhost/BWmob/public/logo_image/logo_3449ddb6cc2b61dda4daa2e5a816eb99c4ca4238a0b923820dcc509a6f75849b.jpg', 'http://localhost/BWmob/public/card_image/profile_pic_c4ca4238a0b923820dcc509a6f75849b.jpg', 1, 0, 0, 'male', 1),
(2, '2019-04-10 07:32:36', '2019-04-10 07:32:36', NULL, 'my card ln', 'my card fn', 1, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://localhost/BWmob/public/logo_image/logo_7219b50c29c5d667a7ff09c724ecf78dc4ca4238a0b923820dcc509a6f75849b.jpg', ' ', 0, 16, 0, 'male', 1),
(3, '2019-04-10 07:32:41', '2019-04-10 07:32:41', NULL, 'my card ln', 'my card fn', 1, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, NULL, 11, 'http://localhost/BWmob/public/logo_image/logo_d8d80a0e93ac4a35081ff3087231db7bc4ca4238a0b923820dcc509a6f75849b.jpg', ' ', 0, 16, 0, 'male', 1);

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
(3, NULL, NULL, 'countaryTest 1', 'city 1', 'district2 test city 1'),
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
(5, '2019-04-10 08:23:37', '2019-04-10 08:23:37', 'emailtest1@test.com', NULL, 'sad', 1);

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
('03d96c9adc65cc0efc969c9a1c0e38df6d8e1e0e9430efe02539c197ed1183eb558a160a40fd8fbf', 14, 5, 'LaraPassport', '[]', 0, '2018-08-25 08:36:50', '2018-08-25 08:36:50', '2019-08-25 10:36:50'),
('0b9a33db1a18ffe238f5b91bfd645c781cbc07969dd20e1fd87d4e3da2918ac421edcc6b9c2cea60', 16, 5, 'LaraPassport', '[]', 0, '2018-11-24 12:02:16', '2018-11-24 12:02:16', '2019-11-24 14:02:16'),
('10752421eebaa8b88cd0c328cfa1ba447adfd68c2d4292b936512c3381b923e3d32df8a089dd618d', 1, 5, 'LaraPassport', '[]', 0, '2018-11-24 07:16:03', '2018-11-24 07:16:03', '2019-11-24 09:16:03'),
('1acd9211229a0fe0e548175cde77e18830aafb7a5e45f2944f1854c55b185cb3b1580cde634270d9', 9, 5, 'LaraPassport', '[]', 0, '2018-08-16 06:38:08', '2018-08-16 06:38:08', '2019-08-16 08:38:08'),
('26656eb586f122789ef2630ee4263ce7165b59d77c2f00399311845e848b9c1e7ab8960478dca72e', 34, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:34:44', '2019-01-12 04:34:44', '2020-01-12 06:34:44'),
('309809b20aacd3441e5ebe5a3f13b4189fa33e9c4492e78434a6768eb8086dae1eb1891c51fb96ab', 35, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:34:51', '2019-01-12 04:34:51', '2020-01-12 06:34:51'),
('33e936a92a3a925a408b0f206e7908845e392c0f2d08d674351df5e566919617d918dda64376a89c', 1, 5, 'LaraPassport', '[]', 0, '2018-11-24 07:21:14', '2018-11-24 07:21:14', '2019-11-24 09:21:14'),
('4defcf43c54d1ae2b0bd84ce6c0ae3f5b82cc74078378c9bef172733edcc56f2009830cea689df36', 15, 5, 'LaraPassport', '[]', 0, '2018-09-10 04:26:04', '2018-09-10 04:26:04', '2019-09-10 06:26:04'),
('4f711b06fea85c8817f25d2db18898a45ea4a8eb294971b6647a2388d298132fe873469257d86610', 3, 5, 'LaraPassport', '[]', 0, '2018-08-06 08:14:09', '2018-08-06 08:14:09', '2019-08-06 10:14:09'),
('518b6b541c529e3f95fb167107972a2eae9dd92926721a95a33d0de5074612a3194066394e240800', 33, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:34:35', '2019-01-12 04:34:35', '2020-01-12 06:34:35'),
('54c7b4f4b069942713c5a331302ae00e17f3c9e3d31eba8531c33971dbe14b34b6abe727b00a1286', 18, 5, 'LaraPassport', '[]', 0, '2018-12-02 00:15:47', '2018-12-02 00:15:47', '2019-12-02 02:15:47'),
('6075158e9a7d4e81159903fbdeabee40a6fbf5175fc3320ce615b46b19d7cd88da88a6e320802d54', 35, 5, 'LaraPassport', '[]', 0, '2019-02-26 06:08:49', '2019-02-26 06:08:49', '2020-02-26 08:08:49'),
('6149db1706ce32d42fe0ef49cf64c86d0485780eeef295cdc8f11197137c978f65ef5f62243484b7', 5, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:18:16', '2018-08-07 13:18:16', '2019-08-07 15:18:16'),
('6316ae29747de24ade08186ded86f812c7d65bc8a33aea9fd2f1b3f5ea2da8711915118765274b93', 34, 5, 'LaraPassport', '[]', 0, '2019-01-12 03:46:12', '2019-01-12 03:46:12', '2020-01-12 05:46:12'),
('658707b68df5974dfec40d1f28056fbecc51b08f702c9fd0b82583d9b9ce7aa4b38537c5ec5ae7ff', 13, 5, 'LaraPassport', '[]', 0, '2018-08-22 05:43:46', '2018-08-22 05:43:46', '2019-08-22 07:43:46'),
('6a1b320d7dcb69c223b484eeb27393e86055fb530ab29b9e2ad8069d5658bb4d8bf0afd4615caad4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-11 07:32:14', '2018-08-11 07:32:14', '2019-08-11 09:32:14'),
('7c7ecb85ab8785186c97f088fa70aa78141017291da5bbef0968f6647a987c61b18ceb0b25f9e861', 8, 5, 'LaraPassport', '[]', 0, '2018-08-19 13:39:29', '2018-08-19 13:39:29', '2019-08-19 15:39:29'),
('80f71c21f234676ea8648a4652102f6ce7f30c2871f040a483a8e07ef0493a8d3d7857f602ae5055', 2, 5, 'LaraPassport', '[]', 0, '2018-08-06 07:51:26', '2018-08-06 07:51:26', '2019-08-06 09:51:26'),
('8179015c90939a317c68047e0a24ef647f76f5c2cf9611556e6878547f48086ec583282394d7e702', 7, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:46:56', '2018-08-07 13:46:56', '2019-08-07 15:46:56'),
('86412c48db44979403e72badb5f77936589e6ffa5316d7e0128338bda82da2a329c65c65b592a945', 35, 5, 'LaraPassport', '[]', 0, '2019-01-12 03:46:19', '2019-01-12 03:46:19', '2020-01-12 05:46:19'),
('866836b8e835999beef556ad22c1bc5a2c1076dcf4798c60783d02dc5a3dbc2ff3e002d34052868c', 10, 5, 'LaraPassport', '[]', 0, '2018-08-19 13:21:31', '2018-08-19 13:21:31', '2019-08-19 15:21:31'),
('8ff708a575fba9e3e218749e5e937c694367017799bd0cd996f0371ac89668d8c35c92a43084b2b4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-29 08:46:35', '2018-08-29 08:46:35', '2019-08-29 10:46:35'),
('9f53f25e641166e3b1c8a13f433d2f2f9691f5d330bf99022b0b2814e2e9eb5337aa539fa061d9ca', 1, 5, 'LaraPassport', '[]', 0, '2018-08-06 06:26:25', '2018-08-06 06:26:25', '2019-08-06 08:26:25'),
('a6b86b7a2ca0f49fb236a35c09933476395bfdfd0733f8693ee1ac75a81bf961bcb9135c0e94a2cf', 35, 5, 'LaraPassport', '[]', 0, '2019-01-17 02:55:43', '2019-01-17 02:55:43', '2020-01-17 04:55:43'),
('afcdf81f9075c17a638667a0ff27d5f2be121c6753f0e27d60acc2024d685690b3c2eba2353a23c9', 1, 6, 'LaraPassport', '[]', 0, '2019-04-10 04:09:09', '2019-04-10 04:09:09', '2020-04-10 06:09:09'),
('bf1de42a200236e5edf1173ebb728919b5e47c2e2bcaef63cf7b685ac3ed5631b72c05092ca8228b', 12, 5, 'LaraPassport', '[]', 0, '2018-08-19 22:27:16', '2018-08-19 22:27:16', '2019-08-20 00:27:16'),
('c8b6a82acea6d484df04ebdf02eeb2a0dd0865582f2c34cb4ee6a561c68809cba3488b6fe1f54030', 47, 5, 'LaraPassport', '[]', 0, '2019-03-05 08:13:17', '2019-03-05 08:13:17', '2020-03-05 10:13:17'),
('d43823a08fd6433bb6251fc51d1cea1c99f2b9caf9a3eea10dedc4a31b36a02b729436767eda7ddf', 49, 5, 'LaraPassport', '[]', 0, '2019-03-05 09:12:39', '2019-03-05 09:12:39', '2020-03-05 11:12:39'),
('d93cb1efd68d1aa09a4320eeb4de5cc489b835d683d560e2062fcf858a6f4cb9f0a8a2a89b86d45c', 33, 5, 'LaraPassport', '[]', 0, '2019-01-12 03:46:05', '2019-01-12 03:46:05', '2020-01-12 05:46:05'),
('e67265e22af1f11155b33cd0d648739c6dd72ca604adacc7b6ec6c3f4545ea58bc9cb5e04d16f8ab', 8, 5, 'LaraPassport', '[]', 0, '2018-08-09 01:35:19', '2018-08-09 01:35:19', '2019-08-09 03:35:19'),
('e74a45af501023481014efb5812948bb4e1d223b6438d6f7ac128af685962d2606eef4ca38ea66be', 36, 5, 'LaraPassport', '[]', 0, '2019-01-12 04:29:55', '2019-01-12 04:29:55', '2020-01-12 06:29:55'),
('e86bd387136e3f7a83b0972b9ee71616e179d89f7ff699dd77cdc07fd04bf49cdb47d476d6921eb9', 48, 5, 'LaraPassport', '[]', 0, '2019-03-05 08:21:15', '2019-03-05 08:21:15', '2020-03-05 10:21:15'),
('f148a30eaee33972371e7379ef7001cfd102a83a5a32f6d2f2e18dd9e91bb00bc169864b11787e34', 11, 5, 'LaraPassport', '[]', 0, '2018-08-19 22:27:01', '2018-08-19 22:27:01', '2019-08-20 00:27:01');

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
(7, NULL, 'Laravel Password Grant Client', 'weFOdLLWcdbBjnQ4S76ZUUHIxMJi14OYnZBsZNHB', 'http://localhost', 0, 1, 0, '2019-04-10 04:04:34', '2019-04-10 04:04:34');

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
(3, 6, '2019-04-10 04:04:33', '2019-04-10 04:04:33');

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
(13, '2018-08-22 05:44:29', '2018-08-22 05:44:29', 13, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_c51ce410c124a10e0db5e4b97fc2af39.png', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'test industry', 'software', 1, NULL, NULL, NULL, NULL, ''),
(14, '2018-08-25 08:38:19', '2018-08-26 10:27:36', 14, 'Test me if you can', 'tasht', 'http://localhost/BWmobapi/public/card_image/profile_pic_e7327d748d95a66452ee96657fd46f49aab3238922bcc25a6f606eb525ffdc56.jpeg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, ''),
(15, '2019-03-05 08:18:54', '2019-03-05 08:18:54', 47, 'dd', 'wintop-admin', 'http://localhost/BWmobapi/public/card_image/profile_pic_67c6a1e7ce56d3d6fa748ab6d9af3fd7.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, 'test'),
(16, '2019-03-05 09:11:40', '2019-03-05 09:11:40', 48, 'dd', 'wintop-admin', 'http://localhost/BWmobapi/public/card_image/profile_pic_642e92efb79421734881b53e1e1b18b6.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, 'test'),
(17, '2019-03-05 09:13:01', '2019-03-05 09:13:01', 49, 'dd', 'wintop-admin', 'http://localhost/BWmobapi/public/card_image/profile_pic_f457c545a9ded88f18ecee47145a72c0.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, 'test'),
(18, '2019-04-10 04:10:20', '2019-04-10 04:10:20', 1, 'testLN', 'testFN', 'http://localhost/BWmob/public/card_image/profile_pic_c4ca4238a0b923820dcc509a6f75849b.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1, NULL, NULL, NULL, NULL, 'test');

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
(9, '2019-04-10 08:10:48', '2019-04-10 08:10:48', 1, 1, '5954bda9150062b2915d6d7bc3ba845cc4ca4238a0b923820dcc509a6f75849bc4ca4238a0b923820dcc509a6f75849b', '2019-04-10 12:10:48', NULL);

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
  `profile_image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_activities`
--

INSERT INTO `recent_activities` (`recent_activity_id`, `created_at`, `updated_at`, `user_id`, `action_by_user_id`, `description`, `profile_image_url`) VALUES
(1, '2019-04-10 04:09:09', '2019-04-10 04:09:09', 1, 0, 'registered', NULL),
(2, '2019-04-10 07:26:46', '2019-04-10 07:26:46', 1, 0, 'createCardHolder', NULL),
(3, '2019-04-10 07:26:59', '2019-04-10 07:26:59', 1, 0, 'createCardHolder', NULL),
(4, '2019-04-10 07:34:22', '2019-04-10 07:34:22', 1, 1, 'Delete Card', NULL),
(5, '2019-04-10 07:35:34', '2019-04-10 07:35:34', 1, 1, 'Delete Card', NULL),
(6, '2019-04-10 08:23:37', '2019-04-10 08:23:37', 1, NULL, NULL, NULL);

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
(8, '2019-04-10 04:09:09', '2019-04-10 04:10:57', 1, 1, 0, 1, 1);

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
(1, 'testFN', 'testFN', 'testLN', 'test@gmail.com', '$2y$10$E4JNtPfbRNZfqhSaH..hOOqDEXLYaeo98jv7LLxZgaDAX2.78WbQa', NULL, '2019-04-10 04:09:09', '2019-04-10 04:09:09', 0, 3);

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
(2, '2019-04-10 07:32:36', '2019-04-10 07:32:36', 1, 16, 2, 0, 0),
(4, '2019-04-10 07:32:43', '2019-04-10 07:32:43', 1, 16, 4, 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `card_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `messag_record_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `qr_code_users`
--
ALTER TABLE `qr_code_users`
  MODIFY `qr_code_user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recent_activities`
--
ALTER TABLE `recent_activities`
  MODIFY `recent_activity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `staging_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `terms_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `user_card_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `userLocation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_to_companies`
--
ALTER TABLE `user_to_companies`
  MODIFY `userToCompany_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
