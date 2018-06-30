-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 08:48 PM
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
  `contents` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `title`, `contents`, `created_at`, `updated_at`) VALUES
(1, 17, 'How to Upload Certificate', 'You have to register then you can upload your certififcate in pdf format only', '2018-06-06 21:00:00', '2018-06-05 21:00:00'),
(3, 20, 'How to Register', 'Visit login page then click register', '2018-06-05 21:00:00', '2018-06-04 21:00:00'),
(4, 20, 'How ACRVP Verify credentials', 'As an accredited and leading provider of background checking services in Ministry ofEducation, ACRVP has developed a sophisticated system of database connections and processes to derive both qualitative and quantitative verification conclusions based on the information with which we are provided from respective Institution. For example, in many instances we have direct data links to universities and employers to enable real time education and experience verification. For reference verification, we obtain information from our database by comparison method. Through these and other means, ACRVP is able to authenticate credential information', '2018-06-10 17:46:04', '2018-06-10 17:46:04');

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
(1, 21, 'Maria', 'John', 'Lugendo', '345666', '13307899/T.13', 'Mzumbe University - MU', 'Bachelor Degree', 'Distinction', 2013, 2016, 'Bachelor Degree__345666', 'Collected', '2018-06-06 07:33:03', '2018-06-11 12:23:08'),
(2, 20, 'John', '', 'Doe', '4566677', '122334/T.15', 'Mzumbe University - MU', 'Advanced Diploma', 'Distinction', 2013, 2015, 'Advanced Diploma__4566677', 'Not Collected', '2018-06-11 12:21:11', '2018-06-11 12:21:11'),
(3, 20, 'Kelvin', 'John', 'Hart', '456373', '13455562/T.17', 'Mzumbe University - MU', 'Bachelor Degree', 'Merit', 2001, 2004, 'Bachelor Degree__456373', 'Not Collected', '2018-06-11 13:32:31', '2018-06-11 13:32:31'),
(4, 20, 'John', 'Finn', 'Kennedy', '3432323', '12443536/T.12', 'Mzumbe University - MU', 'Masters', 'Credit', 2012, 2015, 'Masters__3432323', 'Not Collected', '2018-06-11 13:34:31', '2018-06-11 13:34:31'),
(5, 20, 'Lilian', 'Ryan', 'Peter', '1755555', '1234567/T.14', 'Mzumbe University - MU', 'Diploma', 'Upper Second', 2014, 2017, 'Diploma__1755555', 'Collected', '2018-06-12 12:22:54', '2018-06-13 07:48:19'),
(8, 20, 'Happy', 'John', 'Luke', '16277722', '1330152/T.15', 'Mzumbe University - MU', 'Diploma', 'Upper Second', 2007, 2010, 'Diploma__16277722', 'Not Collected', '2018-06-13 08:03:55', '2018-06-13 08:03:55'),
(9, 31, 'Loveness', 'Masanja', 'Mfinanga', '373828', 'S0758/522/2004', 'Msolwa Secondary School', 'CSEE', 'Division II', 2001, 2004, 'CSEE__373828', 'Collected', '2018-06-13 08:16:17', '2018-06-13 08:30:50'),
(10, 31, 'Vanessa', 'Juma', 'Mdee', '67272829', 's0758/555/2004', 'Msolwa Secondary School', 'ACSE', 'Division IV', 2001, 2004, 'ACSE__67272829', 'Not Collected', '2018-06-13 08:27:49', '2018-06-13 08:27:49'),
(11, 31, 'Emmanuel', 'Ans', 'Tesha', '83838338', 'S0729/900/2012', 'Msolwa Secondary School', 'ACSE', 'Distinction', 2012, 2015, 'ACSE__83838338', 'Not Collected', '2018-06-13 08:30:41', '2018-06-13 08:30:41'),
(12, 20, 'Amina', 'Maliki', 'Ibra', '121211', '1323229/T.15', 'Mzumbe University - MU', 'Masters', 'First Class', 2015, 2018, 'Masters__121211', 'Not Collected', '2018-06-13 12:46:11', '2018-06-13 12:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Trump', 'trump@us.gov', 'Nice one come see me in the white house', '2018-06-13 04:40:45', '2018-06-13 04:40:45'),
(2, 'Rose', 'rose@gmail.com', 'Hellow any requirements to register?', '2018-06-13 12:37:39', '2018-06-13 12:37:39');

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
('Sokoine Univeristy of Agriculture - SUA', '789000100', 'info@sua.com', 'P.O.Box 875, Morogoro, Tanzania', 'Blocked', '2018-06-03 23:47:31', '2018-06-13 08:11:12'),
('University of Dodoma - UDOM', '0766555666', 'info@udom.com', 'P.O.Box 179, Dodoma, Tanzania', 'Active', '2018-06-07 23:19:53', '2018-06-07 23:19:53'),
('Kampala International Univerity - KIU', '0765444333', 'info@kiu.com', 'P.O.Box 567 Dar es Salaam', 'Active', '2018-06-08 15:33:42', '2018-06-13 08:11:06'),
('Msolwa Secondary School', '0745898989', 'info@msolwa.com', 'P.O.Box 63 Morogoro', 'Active', '2018-06-11 15:07:43', '2018-06-11 15:07:43'),
('Kibaha High School', '0765888999', 'info@kibaha.com', 'P.O.Box 632 Pwani', 'Active', '2018-06-13 08:07:31', '2018-06-13 08:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(255) NOT NULL,
  `sender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No subject',
  `content` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `sender_id`, `sender`, `subject`, `content`, `status`, `created_at`, `updated_at`) VALUES
(5, 21, 19, 'Innocent Hans Mballa', 'Reply on - Hello I need support', 'How can i help you', 'New', '2018-06-08 09:34:10', '2018-06-08 09:34:10'),
(6, 17, 25, 'Barrack  Obama', 'Password reset', 'Hello, How can I change my password', 'New', '2018-06-08 21:00:00', '2018-06-08 21:00:00'),
(7, 24, 25, 'Barrack  Obama', 'Hello', 'I can\'t make asearch', 'New', '2018-06-09 18:24:31', '2018-06-09 18:24:31'),
(8, 17, 28, 'Lucielle Kyn Gregor', 'I\'m new here', 'Hello how do i get started', 'Read', '2018-06-11 17:39:44', '2018-06-12 05:45:42'),
(9, 17, 21, 'Maria John Lugendo', 'Hi', 'My message', 'Read', '2018-06-12 05:18:16', '2018-06-12 05:28:45'),
(10, 17, 19, 'Innocent  Hans Mballa', 'Issue to be resolved', 'Please we need to talk', 'Read', '2018-06-12 05:35:46', '2018-06-12 05:44:41'),
(11, 21, 19, 'Innocent  Hans Mballa', 'No Subject', 'Hi', 'New', '2018-06-12 05:42:03', '2018-06-12 05:42:03'),
(12, 19, 17, 'Clement Sebastian Mdoe', 'Reply on - Issue to be resolved', 'About what?', 'Read', '2018-06-12 05:44:59', '2018-06-12 15:18:44'),
(13, 28, 17, 'Clement Sebastian Mdoe', 'Reply on - I\'m new here', 'Do you have any certificate', 'New', '2018-06-12 05:46:05', '2018-06-12 05:46:05'),
(14, 21, 19, 'Innocent  Hans Mballa', 'Testing', 'test', 'New', '2018-06-12 05:51:20', '2018-06-12 05:51:20'),
(15, 17, 29, 'Luke  Iker Casillas', 'Howdy', 'Thanks for evrything', 'New', '2018-06-12 06:06:02', '2018-06-12 06:06:02'),
(16, 25, 19, 'Innocent  Hans Mballa', 'Certificate', 'See me', 'New', '2018-06-12 08:41:10', '2018-06-12 08:41:10'),
(17, 17, 30, 'Lilian Ryan Peter', 'Hi', 'Hello Admin\r\n', 'New', '2018-06-12 11:47:01', '2018-06-12 11:47:01'),
(18, 24, 30, 'Lilian Ryan Peter', 'Testing again', 'Testing hollaaaaaaaaaaaaaaaaaaaaaaaa!!!!', 'New', '2018-06-12 11:49:19', '2018-06-12 11:49:19'),
(19, 17, 29, 'Luke  Iker Casillas', 'Mr. Admin', 'Please check my payment details', 'New', '2018-06-12 12:05:16', '2018-06-12 12:05:16'),
(20, 17, 20, 'Halima  Juma Ahmed', 'Hello admin', 'I am from Mzumbe', 'New', '2018-06-12 12:36:27', '2018-06-12 12:36:27'),
(21, 22, 20, 'Halima  Juma Ahmed', 'About your certificate', 'Your certificate is ready to be collected', 'New', '2018-06-12 12:53:00', '2018-06-12 12:53:00');

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
('clemerzzzz@gmail.com', '36e0fbd84438897b2eef5a9d2e1dfa4987c0762252b3b9fa15c18ee6c6bf0b3a', '2018-05-24 21:07:20'),
('caymanclem@gmail.com', '4fefc9d2559a0db22d25cdc49aa20af7276e7bf23762e88cb6758561ab4aafb8', '2018-06-12 14:29:36');

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
(7, 17, 'CRDB', 600000, 'Verified', '600000_CRDB_1528481661', '2018-06-08 15:14:21', '2018-06-08 15:14:21'),
(9, 17, 'Immigration MHA', 700000, 'Verified', '700000_Immigration MHA_1528795663', '2018-06-12 06:27:43', '2018-06-12 06:27:43'),
(10, 17, 'Immigration MHA', 45000, 'Verified', '45000_Immigration MHA_1528795704', '2018-06-12 06:28:24', '2018-06-12 06:28:24'),
(11, 17, 'CRDB', 34500, 'Verified', '34500_CRDB_1528891278', '2018-06-13 09:01:18', '2018-06-13 09:01:18');

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
  `cert_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
(466, 21, '1', '13303399/T.13', 'Mzumbe University - MU', 'Bachelor Degree', '2016', 'Found', '2018-06-10 18:12:16', '2018-06-10 18:12:16'),
(467, 21, '', '13323MSGBSS', 'Msolwa Secondary School', 'CSEE', '2007', 'Not Found', '2018-06-11 18:32:31', '2018-06-11 18:32:31'),
(468, 21, '2', '13307899/T.13', 'Mzumbe University - MU', 'Bachelor Degree', '2016', 'Found', '2018-06-11 19:39:31', '2018-06-11 19:39:31'),
(469, 21, '', '6353535yy', 'University of Dar es salaam - UDSM', 'Diploma', '2003', 'Not Found', '2018-06-12 05:12:48', '2018-06-12 05:12:48');

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
(17, 'Clement', 'Sebastian', 'Mdoe', 'admin@gmail.com', 'MOE', '714214345', 'Male', '$2y$10$SPZ8uwcOR01YzuS4/4hfyegJXXV1HvQTlpJtOmTnJVzCDHPLTsQqu', 2, 'Verified', 'Loading', 'iKxR6k1xR3CGSEz6H7nf16fJ9fNN7ZsRyoDE6pw18ob6yYu7LtRd1811EMom', '2018-06-03 12:31:49', '2018-06-13 12:20:26'),
(19, 'Innocent', 'Hans', 'Mballa', 'organization@gmail.com', 'CRDB', '654323457', 'Male', '$2y$10$7S8dYInmCqCId0ahGrQmg.vJ4pUjnjg9madL4Tcgd0noT0O05xfkK', 4, 'Verified', 'Loading', 'SQDW4itu0FUsjXGncX5r6QIASMkF31hmJuSt5gJN01bdyPeiWXs0HtJNj2UE', '2018-06-03 12:46:10', '2018-06-13 12:41:28'),
(20, 'Halima', 'Juma', 'Ahmed', 'official@gmail.com', 'Mzumbe University - MU', '654323458', 'Female', '$2y$10$eaScapFwOyc/mV/9pCjsKOGCpVpNOH5E/m9yxxR5u802mJxQoYZFC', 3, 'Verified', 'Loading', '7rMYDhQqTuPhbDhtBAXNZtqZCCD7ehSJvh3Y0BboZhGEGspxnBz6wwyH2ZFs', '2018-06-03 12:50:08', '2018-06-13 12:46:18'),
(21, 'Maria', 'John', 'Lugendo', 'graduate@gmail.com', 'None', '756789789', 'Male', '$2y$10$nxnPrmq1tkijceppKZ4O3.cdz6gda2qmTjtwnx/ZISDFD.DL9BhCS', 1, 'Verified', 'Loading', 'OhSj9SVb5USOPAGQpjrn65ippSuJJcDoqioZPWJ03PtG0ZSlK37gjHN7lvh4', '2018-06-03 19:07:02', '2018-06-13 14:10:47'),
(22, 'Daimond', 'Zack', 'Lutern', 'graduate2@gmail.com', 'None', '789666555', 'Male', '$2y$10$SIaPdIELnyyTruFB4SHV9eSx2yyYueTNjVm05k3diRxVMdYWtlmcu', 1, 'Verified', 'Loading', 'FS5izL3H5ZUtOrWp1i2dnVJpS9R2VEKxQGLhVrPS2wrcFcsXhh3WcqLSKpx8', '2018-06-05 23:09:53', '2018-06-05 23:09:53'),
(23, 'Simon', 'Luke', 'Hill', 'caymanclem@gmail.com', 'None', '765666777', 'Male', '$2y$10$DSzxLOhFNEBzBlFt6V36T.ukIxIzqwnXkRjvoq9RYsAkojlMlTXgW', 1, 'Verified', 'Loading', 'cxyy', '2018-06-05 23:34:01', '2018-06-05 23:34:01'),
(24, 'Rodgers', 'Simon', 'Scott', 'admin2@gmail.com', 'MOE', '786777888', 'Male', '$2y$10$H/Sl0cTSqbuA.cYsWAxpVuCdi80O6/idcuTRW/4PTYBbYKWnenJ0.', 2, 'Blocked', 'Loading', 'ayeebyjOkQTnPi0ORnYDEvBTQVzayJN5Uex63E277C2hVEBUaiu5fwlTy2wy', '2018-06-08 15:40:41', '2018-06-13 08:06:03'),
(25, 'Barrack', '', 'Obama', 'obama@gmail.com', 'None', '713212333', 'Male', '$2y$10$gBC86ib/y/mn6c5h3lTXbu3iUvNZ1iWItUakDiE/ucYBHVWxtRjEu', 1, 'Verified', 'Loading', 'FS5izL3H5ZUtOrWp1i2dnVJpS9R2VEKxQGLhVrPS2wrcFcsXhh3WcqLSKpx8', '2018-06-09 16:53:19', '2018-06-09 16:53:19'),
(26, 'Paul', 'Molly', 'Skidel', 'info@msolwa.com', 'Msolwa Secondary School', '789222333', 'Male', '$2y$10$IDLzFjzgJDB4eqBDODPOqetAd9VujvYuqys0JOjLSC1F55PA4SiAC', 3, 'Verified', 'Loading', 'FS5izL3H5ZUtOrWp1i2dnVJpS9R2VEKxQGLhVrPS2wrcFcsXhh3WcqLSKpx8', '2018-06-11 15:10:37', '2018-06-11 15:10:37'),
(27, 'Posh', 'Lian', 'Andy', 'info@mzumbe.com', 'Mzumbe University - MU', '654777888', 'Male', '$2y$10$.Z3Svma5HwXZjRhdawr1R.Q1OHyeUPVWqBc/YK79gjERvZrPKdjyq', 3, 'Verified', 'Loading', 'FS5izL3H5ZUtOrWp1i2dnVJpS9R2VEKxQGLhVrPS2wrcFcsXhh3WcqLSKpx8', '2018-06-11 15:13:40', '2018-06-11 15:13:40'),
(28, 'Lucielle', 'Kyn', 'Gregor', 'graduate3@gmail.com', 'None', '789999999', 'Female', '$2y$10$4cs4aZ8cmKm9Dzi4M97LTu.1Nnn2LDb3YnLzfyeKKyaJYVkDhWYoC', 1, 'Verified', 'Loading', 'FS5izL3H5ZUtOrWp1i2dnVJpS9R2VEKxQGLhVrPS2wrcFcsXhh3WcqLSKpx8', '2018-06-11 17:39:06', '2018-06-11 17:39:06'),
(29, 'Luke', 'Iker', 'Casillas', 'organization2@gmail.com', 'Immigration MHA', '765444333', 'Male', '$2y$10$mHR5LxQ.Q6F1/ltjCMWD9ekbWeimMCJGUN0kNSQ4xWMA3/V8G3qta', 4, 'Verified', 'Loading', 'CPQ66jnbk675kcJYQGttajjmgjbaZOM6DLASIIQYbCzKBTGYwzzeJf5T0ulY', '2018-06-12 06:04:51', '2018-06-12 12:07:28'),
(30, 'Lilian', 'Ryan', 'Peter', 'graduate4@gmail.com', 'None', '767889977', 'Female', '$2y$10$XRDKkxJ7C9VyqaNCeogCLuv7grW67Z2VQTV6ZLrNHyfIBgzo52FS.', 1, 'Blocked', 'Loading', 'N2tYJ5wjYSlozuwCAcPKFvMvpQl1y3kcTix5YvwRoffJv3bxCtxTFUKJvlno', '2018-06-12 11:23:15', '2018-06-13 09:01:40'),
(31, 'Charles', 'John', 'Babbage', 'official2@gmail.com', 'Msolwa Secondary School', '789000778', 'Male', '$2y$10$8Cv.v4jR1JslyYEoE4lbieDrCkL3D8c6O0GZzJVdxIjH8f8.I9jZO', 3, 'Verified', 'Loading', 'Q6ccWvQnWnke9RYACpU4c9jgH9vwq7KWnffZWZ5CxxZyoBpOJhPSh7KuDESH', '2018-06-13 08:13:51', '2018-06-13 08:32:26'),
(32, 'Amina', 'Ibra', 'Maliki', 'amina@gmail.com', 'None', '789888999', 'Female', '$2y$10$nGLPpFL4kGvKdYpPRWYVJOdcJVNdCxrytHaCjWZ/QfkbRmz8c.Wh.', 1, 'Verified', 'Loading', NULL, '2018-06-13 12:30:10', '2018-06-13 12:30:10');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `search_records`
--
ALTER TABLE `search_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=470;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
