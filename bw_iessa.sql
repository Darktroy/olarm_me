-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2018 at 11:39 AM
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
(1, 'a111', 7, '2018-08-07 15:46:56', '2018-08-07 15:46:56', NULL);

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
(8, '2018_08_09_042358_create_profiles_table', 2);

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
('4f711b06fea85c8817f25d2db18898a45ea4a8eb294971b6647a2388d298132fe873469257d86610', 3, 5, 'LaraPassport', '[]', 0, '2018-08-06 08:14:09', '2018-08-06 08:14:09', '2019-08-06 10:14:09'),
('6149db1706ce32d42fe0ef49cf64c86d0485780eeef295cdc8f11197137c978f65ef5f62243484b7', 5, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:18:16', '2018-08-07 13:18:16', '2019-08-07 15:18:16'),
('6a1b320d7dcb69c223b484eeb27393e86055fb530ab29b9e2ad8069d5658bb4d8bf0afd4615caad4', 8, 5, 'LaraPassport', '[]', 0, '2018-08-11 07:32:14', '2018-08-11 07:32:14', '2019-08-11 09:32:14'),
('80f71c21f234676ea8648a4652102f6ce7f30c2871f040a483a8e07ef0493a8d3d7857f602ae5055', 2, 5, 'LaraPassport', '[]', 0, '2018-08-06 07:51:26', '2018-08-06 07:51:26', '2019-08-06 09:51:26'),
('8179015c90939a317c68047e0a24ef647f76f5c2cf9611556e6878547f48086ec583282394d7e702', 7, 5, 'LaraPassport', '[]', 0, '2018-08-07 13:46:56', '2018-08-07 13:46:56', '2019-08-07 15:46:56'),
('9f53f25e641166e3b1c8a13f433d2f2f9691f5d330bf99022b0b2814e2e9eb5337aa539fa061d9ca', 1, 5, 'LaraPassport', '[]', 0, '2018-08-06 06:26:25', '2018-08-06 06:26:25', '2019-08-06 08:26:25'),
('e67265e22af1f11155b33cd0d648739c6dd72ca604adacc7b6ec6c3f4545ea58bc9cb5e04d16f8ab', 8, 5, 'LaraPassport', '[]', 0, '2018-08-09 01:35:19', '2018-08-09 01:35:19', '2019-08-09 03:35:19');

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
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_layout_id` int(10) UNSIGNED DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `created_at`, `updated_at`, `user_id`, `picture`, `gender`, `country`, `city`, `district`, `field`, `industry`, `specialty`, `privacy`, `template_layout_id`, `logo`, `about`, `alias`, `facebook_url`, `twitter_url`, `instagram_url`, `youtube_url`, `personal`) VALUES
(1, '2018-08-11 02:52:11', '2018-08-11 02:52:11', 80, 'businessway-appiumtech.com/BWmobapi/public/card_image/profile_pic_c9f0f895fb98ab9159f51fd0297e236djpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', '1', 11, 'businessway-appiumtech.com/BWmobapi/public/logo_image/logo_c9f0f895fb98ab9159f51fd0297e236djpg', 'donot think it is okay', 'hyu', NULL, NULL, NULL, NULL, 1),
(5, '2018-08-11 02:54:09', '2018-08-11 02:54:09', 87, 'businessway-appiumtech.com/BWmobapi/public/card_image/profile_pic_c9f0f895fb98ab9159f51fd0297e236djpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', '1', 11, 'businessway-appiumtech.com/BWmobapi/public/logo_image/logo_c9f0f895fb98ab9159f51fd0297e236djpg', 'donot think it is okay', 'hyu', NULL, NULL, NULL, NULL, 1),
(6, '2018-08-11 02:56:23', '2018-08-11 02:56:23', 8, 'businessway-appiumtech.com/BWmobapi/public/card_image/profile_pic_c9f0f895fb98ab9159f51fd0297e236djpg', 'male', 'egypt', 'cairo', 'shobtra', 'engineering', 'it', 'software', '1', 11, 'businessway-appiumtech.com/BWmobapi/public/logo_image/logo_c9f0f895fb98ab9159f51fd0297e236djpg', 'donot think it is okay', 'hyu', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`) VALUES
(1, 'wintop-admin', 'eng.iessa.mostafa300720182320@gmail.com', '$2y$10$j1e9CS6tsg7gY26fQLT8/uWDCR3w.JdnGK.t6luDppzsVjsAJ4Hsa', NULL, '2018-08-06 06:26:25', '2018-08-06 06:26:25', 0),
(2, 'wintop-admin', 'eng.iessa.mostafa3400720182320@gmail.com', '$2y$10$p7GVK3IYoM0UCQ8i2oN.SeWX.Ajrdw1JGVqj1K.48d6ewa6cuZTeq', NULL, '2018-08-06 07:51:24', '2018-08-06 07:51:24', 0),
(3, 'wintop-admin', 'eng.iessa.mostafa34007201d82320@gmail.com', '$2y$10$NkxZUCfcG5MmKKl0Ere/Gu01ifA6LkJczSdIv2AgkEoZCmWsBpvoq', NULL, '2018-08-06 08:14:08', '2018-08-06 08:14:08', 0),
(5, 'wintop-admin', 'eng.iessa.mostafa07Aug2018@gmail.com', '$2y$10$dET2WthIBaEbUdIHkft1bu6ioQbrPXQd9/BqjkJ2NTzADoHi2PrLi', NULL, '2018-08-07 13:18:16', '2018-08-07 13:18:16', 0),
(7, 'wintop-admin', 'eng.iessa.mostafa07Aug20182@gmail.com', '$2y$10$3Ccj7SWF60omtkETSVku6uABSyyUh1jKdHVWU.RV.TCRyLn4Q0/R.', NULL, '2018-08-07 13:46:56', '2018-08-07 13:46:56', 0),
(8, 'wintop-admin', 'eng.iessa.mostafa090820182320@gmail.com', '$2y$10$Z6xFLsBf3VXcNFrgxrn/rezw9YBfK1jBiLJHFJRQ7LDemFD8aoF5K', NULL, '2018-08-09 01:35:19', '2018-08-09 02:03:54', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_processes`
--
ALTER TABLE `activation_processes`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `profiles_template_layout_id_index` (`template_layout_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation_processes`
--
ALTER TABLE `activation_processes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `profile_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
