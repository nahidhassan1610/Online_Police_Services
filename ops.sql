-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 08:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ops`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `application_type` varchar(100) NOT NULL,
  `gd_date` timestamp NULL DEFAULT NULL,
  `name_of_police_station` varchar(100) DEFAULT NULL,
  `address_of_police_station` varchar(100) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `name_of_applicant` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `post_office` varchar(100) DEFAULT NULL,
  `thana` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `incident_time` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `application_submit_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `subject`, `application_type`, `gd_date`, `name_of_police_station`, `address_of_police_station`, `designation`, `profession`, `name_of_applicant`, `father_name`, `village`, `post_office`, `thana`, `district`, `description`, `incident_time`, `address`, `email_address`, `phone_no`, `application_submit_by`, `created_at`, `updated_at`) VALUES
(1, 'rdf', 'gd_application', '2019-07-10 18:00:00', 'gdfg', 'gdfg', 'Md', NULL, 'gfdg', 'gfdg', 'ff', 'ff', NULL, NULL, 'dfgfdgdfgdfgdg', NULL, 'shukrabadh, Dhaka Bangladesh', 'ex@gmail.com', '0000000000', NULL, '2019-07-11 11:25:11', '2019-07-11 11:25:11'),
(2, 'rdf', 'clearance', '2019-07-11 18:00:00', 'mirpur', NULL, NULL, 'eng', 'mirpur', 'fa', 'vi', 'ff', NULL, NULL, 'dsfsdfdsfds', NULL, 'shukrabadh, Dhaka Bangladesh', 'ex@gmail.com', '0000000000', NULL, '2019-07-11 19:33:42', '2019-07-11 19:33:42'),
(3, 'rdf', 'gd_application', '2019-07-14 18:00:00', 'mirpur', 'gdfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdfdsfffsd dsf sd sdf fs', '3PM', 'shukrabadh, Dhaka Bangladesh', NULL, NULL, 3, '2019-07-15 00:02:09', '2019-07-15 00:02:09'),
(4, 'rdf', 'gd_application', '2019-07-14 18:00:00', 'mirpur', 'gdfg', 'Md', 'eng', 'ex', 'ff', 'ff', 'ff', 'Dhanmondi', 'ff', 'fgggfdgdf', '3PM', 'shukrabadh, Dhaka Bangladesh', 'ex4useonly@gmail.com', '0000000000', 3, '2019-07-15 00:04:54', '2019-07-15 00:04:54'),
(5, 'rdf', 'clearance', '2019-07-14 18:00:00', 'Kolabagan', 'gdfg', 'Md', 'eng', 'ex', 'ff', 'ff', 'ff', 'Dhanmondi', 'ff', 'dfgdfdsf', '3PM', 'shukrabadh, Dhaka Bangladesh', 'ex4useonly@gmail.com', '0000000000', 3, '2019-07-15 00:10:18', '2019-07-15 00:10:18');

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
(3, '2019_02_25_075217_entrust_setup_tables', 1),
(4, '2019_05_09_072311_create_shoppingcart_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `short_description` text,
  `long_description` text,
  `publication_status` tinyint(100) DEFAULT '1',
  `image` text,
  `news_added_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `short_description`, `long_description`, `publication_status`, `image`, `news_added_by`, `created_at`, `updated_at`) VALUES
(1, 'hji', 'ddddd ddddd dddddddddddddddddd ddddddddddddddddddd', 'sdasdadkj jkhjk hjk\r\n               fdg gfdgd ffg', 1, 'images/20190711115923news6.jpg', NULL, '2019-07-11 05:59:23', '2019-07-12 02:01:40'),
(3, 'hji', 'ddddd ddddd dddddddddddddddddd ddddddddddddddddddd', 'sdasdad', 1, 'images/20190712080225news7.jpg', NULL, '2019-07-12 01:58:40', '2019-07-12 02:02:25');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', NULL, NULL, NULL),
(2, 'User', 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(3, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `village` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `designation`, `father_name`, `village`, `post_office`, `thana`, `district`, `phone_no`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ex', 'ex4useonly@gmail.com', 'Md', 'ff', 'ff', 'ff', 'Dhanmondi', 'ff', '0000000000', '2019-07-11 18:00:00', '$2y$10$c/MsEwUaJiQKPtnq/QaPa.Qekde5NaBWrSjYgEdTLi2gyvwRIenJi', 'images/20190713135228profile10.jpg', 'j3y3Oya0ycMwaXX6eIDSuJIVY4Fw6Wr3kE4S0mIw2ccN4fTHIC6RsJAnm8Xy', '2019-07-11 04:08:09', '2019-07-13 07:54:07'),
(6, 'nahid', 'zahidhassanshaikot@gmail.com', 'Md', 'gfdg', 'ff', 'ff', 'ff', 'ff', '01985986986', '2019-07-13 18:00:00', '$2y$10$deTRWc2HAv9Kig6Fm/rNR.J6iAE41YVBg24Bg9YRb.0OIZrZbKwae', NULL, 'njUJNncy9bS4slQJqpjbw99QJjoXq8NH5RdmG2wx7oAvwgwST0mSn1qdwAsf', '2019-07-13 23:57:28', '2019-07-13 23:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `vehicle_no` varchar(191) NOT NULL,
  `vehicle_type` varchar(100) DEFAULT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_address` varchar(100) DEFAULT NULL,
  `owner_contact` varchar(200) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL,
  `seller_address` varchar(100) DEFAULT NULL,
  `insurance` varchar(100) DEFAULT NULL,
  `insurance_exp_date` timestamp NULL DEFAULT NULL,
  `driving_licence` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `vehicles_added_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `vehicle_no`, `vehicle_type`, `owner_name`, `owner_address`, `owner_contact`, `reg_date`, `seller_address`, `insurance`, `insurance_exp_date`, `driving_licence`, `nid`, `vehicles_added_by`, `created_at`, `updated_at`) VALUES
(1, '2322', 'fdsd', 'reereew', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '233232', NULL, '2019-07-11 21:17:02', '2019-07-11 21:17:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
