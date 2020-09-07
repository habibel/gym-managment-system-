-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 11:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salleapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `atletes`
--

CREATE TABLE `atletes` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateinscription` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atletes`
--

INSERT INTO `atletes` (`id`, `name`, `prenom`, `tel`, `gender`, `dateinscription`, `created_at`, `updated_at`) VALUES
(9, 'sumsung', 'simo', '9048', 'male', '2020-08-06', '2020-08-06 10:05:32', '2020-08-12 09:10:38'),
(10, 'blackberi', 'boundouq', '90485', 'female', '2020-08-06', '2020-08-06 10:07:09', '2020-08-06 10:07:09'),
(11, 'sumsung', 'boundouq', '904855', 'male', '2020-08-06', '2020-08-06 10:11:51', '2020-08-06 10:11:51'),
(12, 'tv', 'boundouq', '90485', 'male', '2020-08-06', '2020-08-06 10:17:00', '2020-08-06 10:17:00'),
(13, 'hicham', 'boundouq', '0u808', 'male', '2020-08-07', '2020-08-07 10:55:55', '2020-08-07 10:55:55'),
(14, 'hicham', 'qwerty', '213252', 'male', '2020-08-08', '2020-08-08 07:05:12', '2020-08-08 07:05:12'),
(15, 'trwrtqrw', 'llklkkkkk', '0000000000', 'male', '2020-08-12', '2020-08-12 09:11:07', '2020-08-12 09:11:07'),
(16, 'ali', 'gati', '123', 'female', '2020-08-13', '2020-08-13 12:47:39', '2020-08-13 12:47:39'),
(17, 'tttt', 'ttttt', '123456', 'female', '2020-08-13', '2020-08-13 20:58:53', '2020-08-13 20:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateinscription` date NOT NULL,
  `saliare` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `prenom`, `tel`, `gender`, `dateinscription`, `saliare`, `created_at`, `updated_at`) VALUES
(1, 'motorola', 'boundouq', '90485', 'male', '2020-08-02', '2000', '2020-08-02 16:24:54', '2020-08-02 16:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2020_07_22_154044_create_atletes_table', 1),
(38, '2020_07_22_154120_create_payments_table', 1),
(39, '2020_07_27_135032_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `atlete_id` bigint(20) NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nopaid',
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '300',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `atlete_id`, `month`, `statu`, `amount`, `created_at`, `updated_at`) VALUES
(11, 9, '7', 'pay', '500', '2020-08-06 10:05:32', '2020-08-06 10:05:32'),
(12, 10, '8', 'nopaid', '500', '2020-08-06 10:07:09', '2020-08-08 09:22:40'),
(13, 11, '8', 'pay', '500', '2020-08-06 10:11:51', '2020-08-08 09:18:13'),
(14, 12, '8', 'nopaid', '500', '2020-08-06 10:17:00', '2020-08-06 10:17:00'),
(15, 13, '8', 'nopaid', '500', '2020-08-07 10:55:55', '2020-08-08 09:19:04'),
(16, 13, '6', 'pay', '500', '2020-08-07 12:01:58', NULL),
(25, 14, '8', 'pay', '500', '2020-08-08 07:05:13', '2020-08-08 09:18:59'),
(84, 9, '8', 'nopaid', '500', '2020-08-10 16:35:55', NULL),
(104, 15, '8', 'pay', '500', '2020-08-12 09:11:08', '2020-08-12 09:11:19'),
(105, 15, '7', 'nopaid', '500', '2020-08-12 10:16:53', NULL),
(106, 14, '3', 'nopaid', '500', '2020-08-12 10:20:29', NULL),
(149, 16, '8', 'nopaid', '300', '2020-08-13 12:47:39', '2020-08-13 12:47:39'),
(150, 17, '8', 'nopaid', '300', '2020-08-13 20:58:54', '2020-08-13 20:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', 'admin', NULL, NULL, '2020-08-13 10:36:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atletes`
--
ALTER TABLE `atletes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `xc` (`name`,`prenom`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `xx` (`atlete_id`,`month`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atletes`
--
ALTER TABLE `atletes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `x` FOREIGN KEY (`atlete_id`) REFERENCES `atletes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
