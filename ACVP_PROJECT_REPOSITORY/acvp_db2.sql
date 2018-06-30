-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 10:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acvp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `title`, `contents`, `created_at`, `updated_at`) VALUES
(1, 17, 'How to Upload Certificate', 'You have to register then you can upload your certififcate in pdf format only', '2018-06-06 21:00:00', NULL),
(3, 20, 'How to Register', 'Visit login page then click register', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `uploader_id` int(10) UNSIGNED NOT NULL,
  `f_name` text COLLATE utf8_unicode_ci NOT NULL,
  `m_name` text COLLATE utf8_unicode_ci NOT NULL,
  `l_name` text COLLATE utf8_unicode_ci NOT NULL,
  `certificate_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `index_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_from` int(11) NOT NULL,
  `year_to` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Not Collected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `uploader_id`, `f_name`, `m_name`, `l_name`, `certificate_id`, `index_no`, `school`, `type`, `grade`, `year_from`, `year_to`, `filename`, `status`, `created_at`, `updated_at`) VALUES
(1, 20, 'Maria', 'John', 'Lugendo', '345666', '13307899/T.13', 'Mzumbe University - MU', 'Bachelor Degree', 'Distinction', 2013, 2016, 'Bachelor Degree__345666', 'Collected', '2018-06-06 07:33:03', '2018-06-08 16:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `org_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `i_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`org_name`, `contact`, `email`, `adress`, `i_status`, `created_at`, `updated_at`) VALUES
('Mzumbe University - MU', '0786777111', 'info@mzumbe.ac.tz', 'P.O.Box 1, Morogoro, Tanzania', 'Active', '2018-06-03 21:00:00', '2018-06-03 22:46:22'),
('University of Dar es salaam - UDSM', '0789777666', 'info@udsm.com', 'P.O.Box 879, Dsm, Tanzania', 'Active', '2018-06-03 23:44:23', '2018-06-05 17:17:41'),
('Sokoine Univeristy of Agriculture - SUA', '789000100', 'info@sua.com', 'P.O.Box 875, Morogoro, Tanzania', 'Active', '2018-06-03 23:47:31', '2018-06-05 17:20:48'),
('University of Dodoma - UDOM', '0766555666', 'info@udom.com', 'P.O.Box 179, Dodoma, Tanzania', 'Active', '2018-06-07 23:19:53', '2018-06-07 23:19:53'),
('Kampala International Univerity - KIU', '0765444333', 'info@kiu.com', 'P.O.Box 567 Dar es Salaam', 'Active', '2018-06-08 15:33:42', '2018-06-08 15:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No subject',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `sender`, `subject`, `content`, `status`, `created_at`, `updated_at`) VALUES
(3, 19, 'Julius Kreg Shweiz', 'Hello I need support', 'Support please', 'Read', '2018-06-08 07:54:15', '2018-06-08 08:34:25'),
(5, 21, 'Innocent Hans Mballa', 'Reply on - Hello I need support', 'How can i help you', 'New', '2018-06-08 09:34:10', '2018-06-08 09:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_06_105005_create_contact_us_table', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(9, '2018_05_14_075548_create_messages_table', 3),
(10, '2018_05_14_075728_create_payments_table', 3),
(12, '2018_03_25_170105_create_certificate_table', 4),
(13, '2018_05_16_144226_create_announcements_table', 5),
(14, '2018_06_03_220930_create_search_table', 6),
(15, '2018_06_04_004206_create_institutions_table', 7),
(16, '2018_06_06_002239_create_post_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('caymanclem@gmail.com', '8e1ef4a956e7930aa51bc3088049000f1578f861a1f8f5ac26d13cddf58bd9d5', '2018-05-24 21:02:28'),
('clemerzzzz@gmail.com', '36e0fbd84438897b2eef5a9d2e1dfa4987c0762252b3b9fa15c18ee6c6bf0b3a', '2018-05-24 21:07:20');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `p_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `organization_name` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `p_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unverified',
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`p_id`, `user_id`, `organization_name`, `amount`, `p_status`, `filename`, `created_at`, `updated_at`) VALUES
(5, 19, 'CRDB', 3500, 'Verified', '3500_19_1528240583', '2018-06-05 20:16:23', '2018-06-05 20:36:48'),
(6, 17, 'CRDB', 87000, 'Verified', '87000_17_1528252765', '2018-06-05 23:39:25', '2018-06-05 23:39:25'),
(7, 17, 'CRDB', 600000, 'Verified', '600000_CRDB_1528481661', '2018-06-08 15:14:21', '2018-06-08 15:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Graduate', '2018-04-30 21:00:00', '2018-04-30 21:00:00'),
(2, 'Admin', '2018-05-14 21:00:00', '2018-05-14 21:00:00'),
(3, 'Official', '2018-05-14 21:00:00', '2018-05-14 21:00:00'),
(4, 'Organization', '2018-05-14 21:00:00', '2018-05-14 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `search_records`
--

CREATE TABLE `search_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cert_id` int(255) DEFAULT NULL,
  `reg_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cert_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `search_records`
--

INSERT INTO `search_records` (`id`, `user_id`, `cert_id`, `reg_no`, `institution`, `cert_type`, `year`, `comment`, `created_at`, `updated_at`) VALUES
(456, 21, 1, '16782899/T.16', 'UDSM', 'Bachelor Degree', '2018', 'Found', '2018-05-31 21:00:00', '2018-06-07 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mid_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT '1',
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `mid_name`, `last_name`, `email`, `organization`, `phone`, `gender`, `password`, `role_id`, `status`, `identity`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'Clement', 'Sebastian', 'Mdoe', 'admin@gmail.com', 'MOE', '714214345', 'Male', '$2y$10$SPZ8uwcOR01YzuS4/4hfyegJXXV1HvQTlpJtOmTnJVzCDHPLTsQqu', 2, 'Verified', 'Loading', 'U1oRzNfjrMd3xO2jFYkn1fujGfgzPmgoWmTaTUp63D72w22dpY1U0lh2Uj0X', '2018-06-03 12:31:49', '2018-06-08 16:42:11'),
(19, 'Innocent', 'Hans', 'Mballa', 'organization@gmail.com', 'CRDB', '654323457', 'Male', '$2y$10$7S8dYInmCqCId0ahGrQmg.vJ4pUjnjg9madL4Tcgd0noT0O05xfkK', 4, 'Blocked', 'Loading', 'hpkiEjVCexNGXk178XU7x8kYcryuyIJ5qaGWBwHPTLSzOsOZaahNIh0tb3rH', '2018-06-03 12:46:10', '2018-06-08 15:46:22'),
(20, 'Halima', 'Juma', 'Machupi', 'official@gmail.com', 'Mzumbe University - MU', '654323458', 'Female', '$2y$10$eaScapFwOyc/mV/9pCjsKOGCpVpNOH5E/m9yxxR5u802mJxQoYZFC', 3, 'Blocked', 'Loading', 'F0tixwpGlWvPBo4VjvEzXdJ7rJL901JtctQ0VDywFjXd8wD1XKQiQpCZXsld', '2018-06-03 12:50:08', '2018-06-08 17:09:51'),
(21, 'Julius', 'Kreg', 'Shweiz', 'graduate@gmail.com', 'None', '756789789', 'Male', '$2y$10$nxnPrmq1tkijceppKZ4O3.cdz6gda2qmTjtwnx/ZISDFD.DL9BhCS', 1, 'Verified', 'Loading', 'a9vEre7naS3HpJq3YP55kWM6dYmXRDHa0MJma7z6c6LU6rz08HUuCx5TWHOi', '2018-06-03 19:07:02', '2018-06-08 17:45:38'),
(22, 'Daimond', 'Zack', 'Lutern', 'graduate2@gmail.com', 'None', '789666555', 'Male', '$2y$10$SIaPdIELnyyTruFB4SHV9eSx2yyYueTNjVm05k3diRxVMdYWtlmcu', 1, 'Verified', 'Loading', NULL, '2018-06-05 23:09:53', '2018-06-05 23:09:53'),
(23, 'Simon', 'Luke', 'Hill', 'simon@xyz.com', 'None', '765666777', 'Male', '$2y$10$DSzxLOhFNEBzBlFt6V36T.ukIxIzqwnXkRjvoq9RYsAkojlMlTXgW', 1, 'Verified', 'Loading', NULL, '2018-06-05 23:34:01', '2018-06-05 23:34:01'),
(24, 'Rodgers', 'Simon', 'Scott', 'admin2@gmail.com', 'MOE', '786777888', 'Male', '$2y$10$H/Sl0cTSqbuA.cYsWAxpVuCdi80O6/idcuTRW/4PTYBbYKWnenJ0.', 2, 'Verified', 'Loading', NULL, '2018-06-08 15:40:41', '2018-06-08 15:40:41'),
(25, 'Barrack', '', 'Obama', 'obama@gmail.com', '', '713212333', 'Male', '$2y$10$gBC86ib/y/mn6c5h3lTXbu3iUvNZ1iWItUakDiE/ucYBHVWxtRjEu', 1, 'Verified', 'Loading', NULL, '2018-06-09 16:53:19', '2018-06-09 16:53:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcements_user_id_foreign` (`user_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `certificate_certificate_id_unique` (`certificate_id`),
  ADD KEY `certificate_owner_id_foreign` (`uploader_id`),
  ADD KEY `school` (`school`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD KEY `institutions_org_name_index` (`org_name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `search_records`
--
ALTER TABLE `search_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `search_records_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `search_records`
--
ALTER TABLE `search_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_ibfk_1` FOREIGN KEY (`school`) REFERENCES `institutions` (`org_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `certificate_owner_id_foreign` FOREIGN KEY (`uploader_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `search_records`
--
ALTER TABLE `search_records`
  ADD CONSTRAINT `search_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
