-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 05:07 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mid_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unverified',
  `identity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `mid_name`, `last_name`, `email`, `organization`, `phone`, `gender`, `password`, `role_id`, `status`, `identity`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Clement', 'Sebastian', 'Mdoe', 'graduate@gmail.com', NULL, '713214583', 'Male', '$2y$10$F48iMd/qqLzfahcDrcmP9e1t/CNfLFWvQ/E5qj5LSn9bfTMoRcNCK', 1, 'Unverified', '', 'YDWAbrPNF9UvotXckllBZhnLPKVE25b4PZyqXaWuF5poQBMy31uIxjOmhsKc', '2018-05-14 13:43:04', '2018-06-02 13:48:20'),
(2, 'John', 's', 'kluger', 'admin@gmail.com', 'NECTA', '654323456', 'Male', '$2y$10$5oSsfpMtRLBD6sy7IuLHa.8GhPv1Uo.odum/0HSSEklfNx6ZoTkAe', 2, 'Unverified', '', 'VF0M1CM3oHytqV65GB5ivUmTNwPdkCeijdioiZeY88sJvXwXuZs4VKNrNcwB', '2018-05-15 16:13:36', '2018-06-02 19:41:01'),
(3, 'Alice', 'Juma', 'Kimambi', 'official@gmail.com', NULL, '654323457', 'Female', '$2y$10$jlUEBY8VZbyvf/oxY9TZtOSbOVdd9wuy5rkzI6uJXRI2tl8blzDn.', 3, 'Unverified', '', 'DDVCibjQP8si7AaW2QZpVnjEhFFL9jSHLbKmq6HNAn0UUUZ8ebrSZnv7GX5Z', '2018-05-15 16:18:32', '2018-06-02 19:25:40'),
(4, 'Innocent', 'Juma', 'Machupi', 'organization@gmail.com', 'CRDB Bank', '789678909', 'Male', '$2y$10$9sV2s53.I69zDjlkivn4mu5HmgNb5/6SFJnPHCmlRjgz1xACzpnCa', 4, 'Unverified', '', 'gUdBXkHMexVl7PpTaGPp9W2uqHvqOkvNfxF0GWC1TbqmO1vHY4rtDBiPY6V2', '2018-05-16 09:52:01', '2018-06-02 19:59:54'),
(5, 'Innocent', 'Hans', 'Manuel', 'clemerzzzz@gmail.com', 'NMB Bank', '654323457', 'Male', 'clemmy', 4, 'Unverified', '', NULL, '2018-05-16 11:27:45', '2018-05-16 11:27:45'),
(6, 'Mike', 'Imma', 'Lord', 'official2@gmail.com', 'NECTA', '754678678', 'Male', 'clemmy', 3, 'Unverified', '', NULL, '2018-05-16 11:31:01', '2018-05-16 11:31:01'),
(7, 'ali', 'juma', 'mohd', 'ali@gg.nom', '', '765890777', 'Male', '$2y$10$aig4S3luWiiBwy7uK4ZRDetNPsl0LQDaHuRrdKgT2c39q5UA7eZZm', 1, 'Unverified', '', '0IKdG0UhWyBMvm0VdYIFtoikWxFCtJPrGwQP8DuU3S5AE5BNTcMJyfPCWYEr', '2018-05-24 22:04:20', '2018-05-24 22:09:29'),
(8, 'hhhhhhhhhhhh', 'ewe', 'wwwwwwwwww', 'dff@wew.klo', '', '654678876', 'Male', '$2y$10$jElHzyRsC8NXyC6K425KguOIgcTTkN4Okpqioht35eBWNlP4wEoiW', 1, 'Unverified', '', 'FLKpBjue65vDdPNH9JBj1fNgJ1tlYjGQFEJMyCftYU6aKpCoinVvbgBcnFBr', '2018-05-24 22:11:16', '2018-05-24 22:11:49'),
(9, 'mmmmmmmmq', 'ffffffff', 'ddddddddddddddd', 'alin@gg.nom', '', '654323457', 'Male', '$2y$10$waw676PIADjZ2fan0XRnsuCP8whMCSzyp3jVlmkmqGSqaQgzpXna.', 1, 'Unverified', '', 'xnWL9Rea3vh7MFt0g3kBQy3rneHYFPTq2HmXkArM7Sk5GAcELkP4XLJEyhRu', '2018-05-24 22:24:22', '2018-05-24 22:25:29'),
(10, 'Raymond', 'Mike', 'Mballa', 'raymond@gmail.com', '', '789000001', 'Male', '$2y$10$eA8CHmydthu4vPwrcbfQk.JodQabgQvlL1nYawWYrGP6syiN0YPna', NULL, 'Unverified', 'Raymond_raymond@gmail.com', 'gIi0episzblrlMDHmXXobEaWprthW4NrrvuSCBCgucZNu1DR8rFmDV8r2Yhr', '2018-06-02 16:22:52', '2018-06-02 16:30:46'),
(11, 'ali', 'juma', 'Manuel', 'jjjjjjjjial@gmail.com', '', '456789789', 'Male', '$2y$10$UVg.QLwm3UqcVLnaL5KJj.DMNMQxLkLh6WBXhzvYdqAimSRCLxzTa', NULL, 'Unverified', 'ali_jjjjjjjjial@gmail.com', 'p2WxJscmRZlFIJAS91rS5Qs56aSm1TUQGxqwR9Sx9dYH6hxazSKGFTDcttjV', '2018-06-02 16:31:38', '2018-06-02 16:41:37'),
(12, 'ali', 'juma', 'Mballa', 'faannaf@jj.nm', 'NMB Bank', '654323457', 'Male', '654323457', 1, 'Unverified', 'ali_juma_Mballa', NULL, '2018-06-02 17:29:05', '2018-06-02 17:29:05'),
(13, 'Joel', 'Musa', 'Pascal', 'joel@gmail.com', 'Mzumbe', '543222222', 'Male', 'fileuploaded', 3, 'Unverified', 'Loading', NULL, '2018-06-02 17:46:37', '2018-06-02 17:46:37'),
(14, 'Halima', 'Suddy', 'Brown', 'hlima@gml.com', '', '789099999', 'Female', '$2y$10$4pozopSKxLkwKXch6L8bVOeOtws/B2rHGFVq39KXWKy8QcKI8AiEu', NULL, 'Unverified', 'Loading', 'QVWu3LNgLOWl86DMGCkQpAA1SIhmrBZCyp0QgjhjsceTd21b2q2FsqA5DEmn', '2018-06-02 17:49:08', '2018-06-02 18:14:52'),
(16, 'Innocent', 'Hans', 'Mballa', 'ino@gmail.com', '', '654323458', 'Male', '$2y$10$.YKcjYOlZtqn.U/Pk//0E.Wig20yr78udqjNSgeYZfym4wiTMGug2', NULL, 'Unverified', 'Loading', NULL, '2018-06-03 12:00:17', '2018-06-03 12:00:17');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
