-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 02:12 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `referlogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `branchs`
--

CREATE TABLE `branchs` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_code` int(11) NOT NULL,
  `status` int(10) UNSIGNED NOT NULL COMMENT 'enable=1|disable=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branchs`
--

INSERT INTO `branchs` (`id`, `branch_name`, `branch_code`, `status`, `created_at`, `updated_at`) VALUES
(2, 'fdsgf', 43, 1, '2019-02-26 05:10:16', '2019-02-26 05:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `firm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL COMMENT 'enable=1|disable=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `code`, `firm`, `status`, `created_at`, `updated_at`) VALUES
(3, 'dgb', 91, 'hjhgjghj', 1, '2019-02-21 00:05:42', '2019-02-21 00:11:52'),
(4, 'Master S', 123, 'test', 1, '2019-02-21 00:23:28', '2019-02-21 00:25:37'),
(5, 'vineet', 5453, 'dtgfd', 1, '2019-02-21 00:37:16', '2019-02-21 00:37:16');

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
(4, '2019_02_20_072714_create_customers_table', 2),
(5, '2019_02_21_061111_create_vendors_table', 3),
(6, '2019_02_21_120059_create_dockets_table', 4),
(7, '2019_02_26_091753_create_branchs_table', 5),
(8, '2019_02_21_120059_create_tracks_table', 6);

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
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int(10) UNSIGNED NOT NULL,
  `pdo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `docket_no` int(11) NOT NULL,
  `enter_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_docket_no` int(11) NOT NULL,
  `origin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_factors` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignor_address_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignor_address_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignor_address_pin` int(11) NOT NULL,
  `consignor_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignor_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignor_tin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_address_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_address_two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_address_pin` int(11) NOT NULL,
  `consignee_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consignee_tin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `risk_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pvt_marks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_noncod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL COMMENT 'enable=1|disable=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `pdo`, `docket_no`, `enter_date`, `pickup_date`, `pickup_time`, `delivery_date`, `client_name`, `client_docket_no`, `origin`, `pickup_location`, `destination`, `payment_mode`, `transport_mode`, `rate_factors`, `consignor_name`, `consignor_address_one`, `consignor_address_two`, `consignor_address_pin`, `consignor_phone`, `consignor_email`, `consignor_tin`, `consignee_name`, `consignee_address_one`, `consignee_address_two`, `consignee_address_pin`, `consignee_phone`, `consignee_email`, `consignee_tin`, `risk_details`, `insurance`, `rate`, `pvt_marks`, `cod_noncod`, `cod_amount`, `status`, `created_at`, `updated_at`) VALUES
(2, 'EPOD', 543, '02/26/2019', '02/26/2019', '06 : 24 : PM', '02/26/2019', 'fiat', 576, 'india', 'audi', 'Select Destination', 'volvo', 'volvo', 'Per Kg', 'volvo', 'Unit 549-550 5th Floor, Tower B2, Spaze I-Tech Park, Sohna Road, Sector 49, Gurgaon, Haryana, 122018, India', 'Unit 549-550 5th Floor, Tower B2, Spaze I-Tech Park, Sohna Road, Sector 49, Gurgaon, Haryana, 122018, India', 123045, '07503856814', 'test@gmail.com', '324', 'volvo', 'Unit 549-550 5th Floor, Tower B2, Spaze I-Tech Park, Sohna Road, Sector 49, Gurgaon, Haryana, 122018, India', 'Unit 549-550 5th Floor, Tower B2, Spaze I-Tech Park, Sohna Road, Sector 49, Gurgaon, Haryana, 122018, India', 123045, '07503856814', 'test@gmail.com', '5343', 'Owner Risk', 'fg', '45', 'test', 'COD', '43', 1, '2019-02-26 06:25:17', '2019-02-26 06:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vineet', 'vineetkumar.technians@gmail.com', NULL, '$2y$10$KQ6qZsGCaxfEUGFV.7UNBOSJKK9n0Gb4fHxOfvjbrvEd.wqyvQ9eW', 'niJf1hMGVCZBtfdIWT6CC8JeUx5oqGu1UaPaUYhpY6MmxsOsnFhr1bHWsZwU', '2019-02-19 23:28:09', '2019-02-19 23:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `firm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL COMMENT 'enable=1|disable=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `code`, `firm`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dgbtt', 12333, 'hjhgjghjtt', 1, '2019-02-21 01:08:56', '2019-02-21 01:18:02'),
(2, 'dgb', 123, 'hjhgjghj', 1, '2019-02-21 01:09:11', '2019-02-21 01:09:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branchs`
--
ALTER TABLE `branchs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branchs`
--
ALTER TABLE `branchs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
