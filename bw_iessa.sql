-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2018 at 02:51 PM
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
(5, 'a111', 15, '2018-09-10 06:26:04', '2018-09-10 06:26:04', NULL);

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
  `alias` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(1028) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_layout_id` int(3) NOT NULL,
  `logo` varchar(2056) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(2056) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal` int(2) NOT NULL DEFAULT '0',
  `card_holder_id` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`card_id`, `created_at`, `updated_at`, `user_id`, `last_name`, `first_name`, `create_by`, `privacy`, `company_name`, `position`, `cell_phone_number`, `landline`, `fax`, `website_url`, `about_me`, `youtube_url`, `instagram_url`, `twitter_url`, `facebook_url`, `alias`, `email`, `template_layout_id`, `logo`, `picture`, `personal`, `card_holder_id`) VALUES
(1, '2018-08-16 08:39:33', '2018-08-16 08:39:33', 8, '', '', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', '獶', NULL, NULL, NULL, NULL, '', '', 0, NULL, '', 0, 0),
(2, '2018-08-16 08:41:36', '2018-08-16 08:41:36', 8, '', '', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', '獶', NULL, NULL, NULL, NULL, '', '', 0, NULL, '', 0, 0),
(3, '2018-08-16 08:48:54', '2018-08-16 08:48:54', 8, '', '', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', '獶', NULL, NULL, NULL, NULL, '', '', 0, NULL, '', 0, 0),
(4, '2018-08-16 15:04:38', '2018-08-16 15:04:38', 8, '', '', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', '獶', NULL, NULL, NULL, NULL, '', '', 0, NULL, '', 0, 0),
(5, '2018-08-22 06:44:36', '2018-08-22 06:44:36', 13, '', '', 13, 0, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_20180822084436c51ce410c124a10e0db5e4b97fc2af39.jpeg', 'http://localhost/BWmobapi/public/card_image/profile_pic_c51ce410c124a10e0db5e4b97fc2af39.png', 1, 0),
(6, '2018-08-25 08:40:03', '2018-08-26 10:27:36', 14, 'Test me if you can', 'tasht', 14, 1, 'com name test', 'Aza', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', 'test', NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_0db6b2599e275ff69482f9cf0a527a03aab3238922bcc25a6f606eb525ffdc56.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_e7327d748d95a66452ee96657fd46f49aab3238922bcc25a6f606eb525ffdc56.jpeg', 0, 0),
(7, '2018-08-25 11:26:23', '2018-08-25 11:26:23', NULL, 'test 2', 'test 1', 14, 0, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_d1dd3dac52dfbfc8fb9fcd5a732d843faab3238922bcc25a6f606eb525ffdc56.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_d1dd3dac52dfbfc8fb9fcd5a732d843faab3238922bcc25a6f606eb525ffdc56.jpg', 0, 0),
(8, '2018-08-25 11:35:42', '2018-08-25 11:35:42', NULL, 'test 2', 'test 1', 14, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_ed01f7e0883658bab65f1d49beadde30aab3238922bcc25a6f606eb525ffdc56.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_ed01f7e0883658bab65f1d49beadde30aab3238922bcc25a6f606eb525ffdc56.jpg', 0, 0),
(9, '2018-08-25 11:39:13', '2018-08-25 11:39:13', NULL, 'test 2', 'test 1', 14, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_a0ebd294b93978cd750a7b192541c2b3aab3238922bcc25a6f606eb525ffdc56.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_a0ebd294b93978cd750a7b192541c2b3aab3238922bcc25a6f606eb525ffdc56.jpg', 0, 0),
(10, '2018-08-29 08:48:24', '2018-08-29 08:48:24', NULL, 'test 2', 'test 1', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_82fe3afa747ef6aff4d183101b067681c9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_82fe3afa747ef6aff4d183101b067681c9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0),
(11, '2018-08-29 08:48:42', '2018-08-29 08:48:42', NULL, 'test 2', 'test 1', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_804638effd67cfa2d019015d2f9a98aac9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_804638effd67cfa2d019015d2f9a98aac9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0),
(14, '2018-08-29 09:50:07', '2018-08-29 09:50:07', NULL, 'test 2', 'test 1', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_db5e293bcde1ee520ec2615d1a74d416c9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_db5e293bcde1ee520ec2615d1a74d416c9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0),
(15, '2018-08-29 09:50:49', '2018-08-29 09:50:49', NULL, 'test 2', 'test 1', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_4a24e5379089e36362bde81d072c9553c9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_4a24e5379089e36362bde81d072c9553c9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0),
(16, '2018-08-29 10:03:58', '2018-08-29 10:07:39', NULL, 'test 2', 'test 1', 8, 1, 'com name test', 'Aza', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', 'test', NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_64124e82ab14748a04c3c3764b074864c9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_64124e82ab14748a04c3c3764b074864c9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0),
(17, '2018-09-03 03:36:46', '2018-09-03 03:36:46', NULL, 'test 2', 'test 1', 81, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_c1e7f50672c87a4dea78bc0c243ecd6ac9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_c1e7f50672c87a4dea78bc0c243ecd6ac9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0),
(19, '2018-09-19 06:18:37', '2018-09-19 06:18:37', 8, 'Test me if you can', 'tasht', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_88b28fd08487136ad0b90e4fc4cd5902aab3238922bcc25a6f606eb525ffdc56.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_e7327d748d95a66452ee96657fd46f49aab3238922bcc25a6f606eb525ffdc56.jpeg', 1, 0),
(20, '2018-09-19 06:21:40', '2018-09-19 06:21:40', NULL, 'test 2', 'test 1', 8, 1, 'com name test', 'position test', '01012345678', '02234567989', '02234567990', 'we.url.tres', 'sv', NULL, NULL, NULL, NULL, 'hyu', '', 11, 'http://localhost/BWmobapi/public/logo_image/logo_bf08c7a7f2976f76bcc5b891b7cd3e82c9f0f895fb98ab9159f51fd0297e236d.jpg', 'http://localhost/BWmobapi/public/card_image/profile_pic_notpersonal_bf08c7a7f2976f76bcc5b891b7cd3e82c9f0f895fb98ab9159f51fd0297e236d.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cards_holders`
--

CREATE TABLE `cards_holders` (
  `card_holder_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards_holders`
--

INSERT INTO `cards_holders` (`card_holder_id`, `created_at`, `updated_at`, `user_id`, `name`) VALUES
(0, NULL, NULL, NULL, 'default'),
(1, '2018-08-16 14:19:06', '2018-08-16 14:19:06', 8, 'test me if you can'),
(2, '2018-08-16 14:28:34', '2018-08-16 14:28:34', 8, 'test me if you can 2'),
(3, '2018-08-16 14:28:46', '2018-08-16 14:28:46', 8, 'test3'),
(4, '2018-08-16 14:28:54', '2018-08-16 14:42:37', 8, 'test 5555'),
(5, '2018-08-29 08:51:51', '2018-08-29 08:51:51', 8, 'test34');

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
(1, '2018-09-03 08:45:57', '2018-09-03 08:45:57', 1, 'interest trest 1', 14, 0, '0'),
(2, '2018-09-03 08:47:32', '2018-09-03 08:47:32', 2, 'kora', 14, 0, '1'),
(3, '2018-09-03 08:48:04', '2018-09-03 08:48:04', 0, 'kora', 14, 0, '1'),
(4, '2018-09-03 08:48:21', '2018-09-03 08:48:21', 0, 'kora', 14, 0, '1'),
(5, '2018-09-03 09:31:56', '2018-09-03 09:31:56', 1, 'interest trest 1', 14, 15, '0'),
(6, '2018-09-03 09:31:56', '2018-09-03 09:31:56', 0, 'kora', 14, 15, '1'),
(7, '2018-09-03 09:33:33', '2018-09-03 09:33:33', 1, 'interest trest 1', 14, 6, '0'),
(8, '2018-09-03 09:33:33', '2018-09-03 09:33:33', 0, 'kora', 14, 6, '1'),
(9, '2018-09-03 09:33:37', '2018-09-03 09:33:37', 0, 'kora', 14, 6, '1');

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
(13, '2018_08_29_145316_create_card_to_interests_table', 6);

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
('1acd9211229a0fe0e548175cde77e18830aafb7a5e45f2944f1854c55b185cb3b1580cde634270d9', 9, 5, 'LaraPassport', '[]', 0, '2018-08-16 06:38:08', '2018-08-16 06:38:08', '2019-08-16 08:38:08'),
('4defcf43c54d1ae2b0bd84ce6c0ae3f5b82cc74078378c9bef172733edcc56f2009830cea689df36', 15, 5, 'LaraPassport', '[]', 0, '2018-09-10 04:26:04', '2018-09-10 04:26:04', '2019-09-10 06:26:04'),
('4f711b06fea85c8817f25d2db18898a45ea4a8eb294971b6647a2388d298132fe873469257d86610', 3, 5, 'LaraPassport', '[]', 0, '2018-08-06 08:14:09', '2018-08-06 08:14:09', '2019-08-06 10:14:09'),
('6149db1706ce32d42fe0ef49cf64c86d0485780eeef295cdc8f11197137c978f65ef5f62243484b7', 5, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:18:16', '2018-08-07 13:18:16', '2019-08-07 15:18:16'),
('658707b68df5974dfec40d1f28056fbecc51b08f702c9fd0b82583d9b9ce7aa4b38537c5ec5ae7ff', 13, 5, 'LaraPassport', '[]', 0, '2018-08-22 05:43:46', '2018-08-22 05:43:46', '2019-08-22 07:43:46'),
('6a1b320d7dcb69c223b484eeb27393e86055fb530ab29b9e2ad8069d5658bb4d8bf0afd4615caad4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-11 07:32:14', '2018-08-11 07:32:14', '2019-08-11 09:32:14'),
('7c7ecb85ab8785186c97f088fa70aa78141017291da5bbef0968f6647a987c61b18ceb0b25f9e861', 8, 5, 'LaraPassport', '[]', 0, '2018-08-19 13:39:29', '2018-08-19 13:39:29', '2019-08-19 15:39:29'),
('80f71c21f234676ea8648a4652102f6ce7f30c2871f040a483a8e07ef0493a8d3d7857f602ae5055', 2, 5, 'LaraPassport', '[]', 0, '2018-08-06 07:51:26', '2018-08-06 07:51:26', '2019-08-06 09:51:26'),
('8179015c90939a317c68047e0a24ef647f76f5c2cf9611556e6878547f48086ec583282394d7e702', 7, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:46:56', '2018-08-07 13:46:56', '2019-08-07 15:46:56'),
('866836b8e835999beef556ad22c1bc5a2c1076dcf4798c60783d02dc5a3dbc2ff3e002d34052868c', 10, 5, 'LaraPassport', '[]', 0, '2018-08-19 13:21:31', '2018-08-19 13:21:31', '2019-08-19 15:21:31'),
('8ff708a575fba9e3e218749e5e937c694367017799bd0cd996f0371ac89668d8c35c92a43084b2b4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-29 08:46:35', '2018-08-29 08:46:35', '2019-08-29 10:46:35'),
('9f53f25e641166e3b1c8a13f433d2f2f9691f5d330bf99022b0b2814e2e9eb5337aa539fa061d9ca', 1, 5, 'LaraPassport', '[]', 0, '2018-08-06 06:26:25', '2018-08-06 06:26:25', '2019-08-06 08:26:25'),
('bf1de42a200236e5edf1173ebb728919b5e47c2e2bcaef63cf7b685ac3ed5631b72c05092ca8228b', 12, 5, 'LaraPassport', '[]', 0, '2018-08-19 22:27:16', '2018-08-19 22:27:16', '2019-08-20 00:27:16'),
('e67265e22af1f11155b33cd0d648739c6dd72ca604adacc7b6ec6c3f4545ea58bc9cb5e04d16f8ab', 8, 5, 'LaraPassport', '[]', 0, '2018-08-09 01:35:19', '2018-08-09 01:35:19', '2019-08-09 03:35:19'),
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
(5, NULL, 'admin', 'gm8aaE4O6a0j854tndRZwyxCKRUmlg7pmumhho1q', 'http://localhost', 1, 0, 0, '2018-08-06 06:06:13', '2018-08-06 06:06:13');

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
(2, 5, '2018-08-06 06:06:14', '2018-08-06 06:06:14');

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
  `personal` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `created_at`, `updated_at`, `user_id`, `last_name`, `first_name`, `picture`, `gender`, `country`, `city`, `district`, `field`, `industry`, `specialty`, `personal`) VALUES
(10, '2018-08-16 07:12:51', '2018-08-16 07:12:51', 9, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_45c48cce2e2d7fbdea1afc51c7c6ad26.jpg', 'male', 'egypt', 'cairo', 'shobtra', 'en12345', 'it', 'software', 1),
(11, '2018-08-19 13:40:46', '2018-08-19 13:40:46', 10, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_d3d9446802a44259755d38e6d163e820.png', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1),
(12, '2018-08-19 22:27:54', '2018-08-19 22:27:54', 11, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_6512bd43d9caa6e02c990b0a82652dca.png', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1),
(13, '2018-08-22 05:44:29', '2018-08-22 05:44:29', 13, '', '', 'http://localhost/BWmobapi/public/card_image/profile_pic_c51ce410c124a10e0db5e4b97fc2af39.png', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1),
(14, '2018-08-25 08:38:19', '2018-08-26 10:27:36', 14, 'Test me if you can', 'tasht', 'http://localhost/BWmobapi/public/card_image/profile_pic_e7327d748d95a66452ee96657fd46f49aab3238922bcc25a6f606eb525ffdc56.jpeg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(5) NOT NULL,
  `from_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `from_id`, `to_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(4, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(5, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(6, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(7, 5, 19, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(8, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(9, 5, 19, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(10, 5, 19, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(11, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(12, 19, 5, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL),
(13, 5, 19, '2018-09-19 11:22:43', '2018-09-19 11:22:43', NULL);

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
  `active` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`) VALUES
(1, 'wintop-admin', '', '', 'eng.iessa.mostafa300720182320@gmail.com', '$2y$10$j1e9CS6tsg7gY26fQLT8/uWDCR3w.JdnGK.t6luDppzsVjsAJ4Hsa', NULL, '2018-08-06 06:26:25', '2018-08-06 06:26:25', 0),
(2, 'wintop-admin', '', '', 'eng.iessa.mostafa3400720182320@gmail.com', '$2y$10$p7GVK3IYoM0UCQ8i2oN.SeWX.Ajrdw1JGVqj1K.48d6ewa6cuZTeq', NULL, '2018-08-06 07:51:24', '2018-08-06 07:51:24', 0),
(3, 'wintop-admin', '', '', 'eng.iessa.mostafa34007201d82320@gmail.com', '$2y$10$NkxZUCfcG5MmKKl0Ere/Gu01ifA6LkJczSdIv2AgkEoZCmWsBpvoq', NULL, '2018-08-06 08:14:08', '2018-08-06 08:14:08', 0),
(5, 'wintop-admin', '', '', 'eng.iessa.mostafa07Aug2018@gmail.com', '$2y$10$dET2WthIBaEbUdIHkft1bu6ioQbrPXQd9/BqjkJ2NTzADoHi2PrLi', NULL, '2018-08-07 13:18:16', '2018-08-07 13:18:16', 0),
(7, 'wintop-admin', '', '', 'eng.iessa.mostafa07Aug20182@gmail.com', '$2y$10$3Ccj7SWF60omtkETSVku6uABSyyUh1jKdHVWU.RV.TCRyLn4Q0/R.', NULL, '2018-08-07 13:46:56', '2018-08-07 13:46:56', 0),
(8, 'wintop-admin', '', '', 'eng.iessa.mostafa090820182320@gmail.com', '$2y$10$Z6xFLsBf3VXcNFrgxrn/rezw9YBfK1jBiLJHFJRQ7LDemFD8aoF5K', NULL, '2018-08-09 01:35:19', '2018-08-09 02:03:54', 1),
(9, 'wintop-admin', 'wintop-admin', 'dd', 'eng.iessa.mostafa160820182320@gmail.com', '$2y$10$C9RftD3IzZAbBUvQGPc1R.zWuQ6BZrYm9S1rmZyA05OcSWsR0JAZe', NULL, '2018-08-16 06:38:07', '2018-08-16 06:38:33', 1),
(10, 'wintop-admin', 'wintop-admin', 'dd', 'eng.iessa.mostafa190820181@gmail.com', '$2y$10$xkYHDd3M0wusQU7p1IVjNedXGan644Fw3ex6qkKqb00uA1FPKG9Gq', NULL, '2018-08-19 13:21:30', '2018-08-19 13:39:00', 1),
(11, 'wintop-admin', 'wintop-admin', 'dd', 'eng.iessa.mostafa190820182@gmail.com', '$2y$10$N157CsUEM1IJLEY/V3Xo8exdYdBUmkZY4PZDJPnDhao3.JfRCp/nO', NULL, '2018-08-19 22:27:00', '2018-08-19 22:27:34', 1),
(12, 'wintop-admin', 'wintop-admin', 'dd', 'eng.iessa.mostafa19082013@gmail.com', '$2y$10$Wlq7sP6XraUW1U8y/7DRKe0DaJp3Ydz2806VoWW5eFpS8SQvXzA2K', NULL, '2018-08-19 22:27:16', '2018-08-19 22:27:16', 0),
(13, 'wintop-admin', 'wintop-admin', 'dd', 'eng.iessa.mostafa22082013@gmail.com', '$2y$10$fu/u5VdoMNDF6LsgeECIfeVFlwzRyJ22RcNByoYfGwNYOiN.sjz/C', NULL, '2018-08-22 05:43:46', '2018-08-22 05:44:09', 1),
(14, 'wintop-admin', 'tasht', 'Test me if you can', 'eng.iessa.mostafa25082013@gmail.com', '$2y$10$yUbnQRQjBcGOwD6sYfmv9eyJzhB4FvDIfb9tniVJXrSataEBV1B9y', NULL, '2018-08-25 08:36:49', '2018-08-26 10:27:36', 1),
(15, 'wintop-admin', 'wintop-admin', 'dd', 'eng.iessa.mostafa29082013@gmail.com', '$2y$10$jF7F9..DlOGRFCrxq2MUq.60BLSMfvRWVZ6g93D2EEstNXaUudE02', NULL, '2018-09-10 04:26:03', '2018-09-10 04:26:03', 0);

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
  `card_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_cards`
--

INSERT INTO `user_cards` (`user_card_id`, `created_at`, `updated_at`, `user_id`, `card_holder_id`, `card_id`) VALUES
(5, '2018-09-03 03:36:46', '2018-09-03 03:36:46', 8, 0, 17),
(6, '2018-09-03 03:36:46', '2018-09-03 03:36:46', 8, 0, 1),
(7, '2018-09-03 03:36:46', '2018-09-03 03:36:46', 8, 0, 2),
(8, '2018-09-03 03:36:46', '2018-09-03 03:36:46', 8, 0, 3),
(9, '2018-09-19 06:18:37', '2018-09-19 06:18:37', 14, 0, 19),
(10, '2018-09-19 06:21:40', '2018-09-19 06:21:40', 8, 0, 20),
(11, '2018-09-19 09:01:45', '2018-09-19 09:01:45', 13, 0, 19),
(12, '2018-09-19 09:01:45', '2018-09-19 09:01:45', 8, 0, 5),
(13, '2018-09-19 10:54:02', '2018-09-19 10:54:02', 8, 0, 5),
(14, '2018-09-19 10:54:02', '2018-09-19 10:54:02', 13, 0, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_processes`
--
ALTER TABLE `activation_processes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `interestes`
--
ALTER TABLE `interestes`
  ADD PRIMARY KEY (`interest_id`);

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
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation_processes`
--
ALTER TABLE `activation_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cards_holders`
--
ALTER TABLE `cards_holders`
  MODIFY `card_holder_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `card_to_interests`
--
ALTER TABLE `card_to_interests`
  MODIFY `card_to_interest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `interestes`
--
ALTER TABLE `interestes`
  MODIFY `interest_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `user_card_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
