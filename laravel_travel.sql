-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 07:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `book_location` varchar(50) DEFAULT NULL,
  `book_bundle` varchar(50) DEFAULT NULL,
  `person` varchar(50) DEFAULT NULL,
  `promo` varchar(50) DEFAULT 'N/A',
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birth` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `nid` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `payment` int(50) DEFAULT 3,
  `book_status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `book_location`, `book_bundle`, `person`, `promo`, `name`, `email`, `phone`, `gender`, `birth`, `occupation`, `nationality`, `nid`, `address`, `city`, `zip`, `payment`, `book_status`, `created_at`, `updated_at`) VALUES
(1, '2', '3', '3', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', NULL, '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 04:01:42', '2023-11-03 08:48:14'),
(2, '2', '3', '3', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 04:03:47', '2023-11-03 04:03:47'),
(3, '2', '2', '2', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 04:05:37', '2023-11-03 04:05:37'),
(4, '1', '1', '1', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 04:07:44', '2023-11-03 04:07:44'),
(5, '3', '4', '3', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'IT ENG', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 05:12:32', '2023-11-03 05:12:32'),
(6, '2', '1', '1', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 07:09:49', '2023-11-03 07:09:49'),
(7, '3', '4', '3', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 07:11:12', '2023-11-03 07:11:12'),
(8, '1', '3', '3', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 07:12:03', '2023-11-03 07:12:03'),
(9, '3', '5', '5', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-03', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 07:15:47', '2023-11-03 07:15:47'),
(10, '1', '1', '1', 'N/A', 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', 'on', '2023-11-04', 'Students', 'Bangladesh', '4252 456 123', 'Behar hat, Shibgonj-Bogura', 'Bogura', '5810', 3, 1, '2023-11-03 12:01:04', '2023-11-03 12:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `booking_statuses`
--

CREATE TABLE `booking_statuses` (
  `bs_id` bigint(20) UNSIGNED NOT NULL,
  `bs_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_statuses`
--

INSERT INTO `booking_statuses` (`bs_id`, `bs_name`, `created_at`, `updated_at`) VALUES
(1, 'Pending', NULL, NULL),
(2, 'Aprove', NULL, NULL),
(3, 'Dacline', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `bundle_id` bigint(20) UNSIGNED NOT NULL,
  `bundle_name` varchar(50) DEFAULT NULL,
  `bundle_percentage` varchar(2) DEFAULT NULL,
  `room_type` varchar(255) DEFAULT NULL,
  `bundle_des` varchar(255) DEFAULT NULL,
  `bundle_img` varchar(255) DEFAULT NULL,
  `bundle_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundles`
--

INSERT INTO `bundles` (`bundle_id`, `bundle_name`, `bundle_percentage`, `room_type`, `bundle_des`, `bundle_img`, `bundle_status`, `created_at`, `updated_at`) VALUES
(1, 'Regular Package', '0', 'Deluxe Single Room', 'One person can stay this Package.', '1699196683.jpg', 1, '2023-11-05 09:04:43', '2023-11-05 09:04:43'),
(2, 'Couple Package', '10', 'Deluxe Single Room', 'Two person can stay this Package. 10% discount on this Package', '1699196723.jpg', 1, '2023-11-05 09:05:23', '2023-11-05 09:05:23'),
(3, 'Family Package', '12', 'Deluxe Twin Room', 'Three/Four person stay a room. Price depends on person Quantity. 12% discount on this package', '1699196760.jpg', 1, '2023-11-05 09:06:00', '2023-11-05 09:06:00'),
(4, 'Group Package', '12', 'Deluxe Twin Room', 'Minmum tow, maxmun four person stay a room. Price depends on person Quantity. 12% discount on this package', '1699196818.jpg', 1, '2023-11-05 09:06:58', '2023-11-05 09:06:58'),
(5, 'Business Package', '0', 'Super Deluxe Single Room', 'One person stay one room. Price depends on person Quantity. 10% discount applicable when minimum of 5 people or more.', '1699196856.jpg', 1, '2023-11-05 09:07:36', '2023-11-05 09:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `con_id` bigint(20) UNSIGNED NOT NULL,
  `con_name` varchar(20) DEFAULT NULL,
  `con_email` varchar(50) DEFAULT NULL,
  `con_subject` varchar(50) DEFAULT NULL,
  `con_message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `costtypes`
--

CREATE TABLE `costtypes` (
  `costtype_id` bigint(20) UNSIGNED NOT NULL,
  `costtype_name` varchar(255) DEFAULT NULL,
  `costtype_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costtypes`
--

INSERT INTO `costtypes` (`costtype_id`, `costtype_name`, `costtype_status`, `created_at`, `updated_at`) VALUES
(1, 'Travel Cost', 1, NULL, NULL),
(2, 'Resort Cost', 1, NULL, NULL),
(3, 'Food Cost', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` bigint(20) UNSIGNED NOT NULL,
  `ex_package` varchar(20) DEFAULT NULL,
  `expense_type` varchar(50) DEFAULT NULL,
  `expense_price` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `ex_package`, `expense_type`, `expense_price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '500', '2023-11-01 11:22:46', '2023-11-01 11:22:46'),
(2, '1', '2', '700', '2023-11-01 11:22:46', '2023-11-01 11:22:46'),
(3, '1', '3', '500', '2023-11-01 11:23:07', '2023-11-01 11:23:07'),
(4, '1', '3', '600', '2023-11-01 11:23:07', '2023-11-01 11:23:07'),
(5, '2', '1', '1000', '2023-11-01 11:23:37', '2023-11-01 11:23:37'),
(6, '2', '2', '500', '2023-11-01 11:23:37', '2023-11-01 11:23:37'),
(7, '3', '3', '1000', '2023-11-01 11:24:02', '2023-11-01 11:24:02'),
(8, '3', '1', '500', '2023-11-01 11:24:02', '2023-11-01 11:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_10_11_200421_create_locations_table', 1),
(4, '2023_10_14_032242_create_statuses_table', 2),
(5, '2023_10_17_063905_create_packages_table', 3),
(7, '2023_10_18_150555_create_bundles_table', 5),
(8, '2023_10_25_181520_create_bookings_table', 6),
(9, '2023_10_25_192220_create_booking_statuses_table', 7),
(10, '2023_10_26_044114_create_payment_statuses_table', 8),
(11, '2023_10_27_180301_create_promos_table', 9),
(12, '2023_10_29_045025_create_expenses_table', 10),
(13, '2023_10_29_053133_create_costtypes_table', 10),
(23, '2023_11_05_031831_create_contacts_table', 11),
(26, '2023_11_05_181203_create_roles_table', 12),
(27, '2023_11_05_060005_create_users_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` bigint(20) UNSIGNED NOT NULL,
  `pack_location` varchar(20) DEFAULT NULL,
  `pack_des` varchar(255) DEFAULT NULL,
  `resort` varchar(255) DEFAULT NULL,
  `pack_price` varchar(10) DEFAULT NULL,
  `member` int(10) DEFAULT NULL,
  `from_date` varchar(10) DEFAULT NULL,
  `to_date` varchar(10) DEFAULT NULL,
  `arrival_time` varchar(10) DEFAULT NULL,
  `pack_img` varchar(255) DEFAULT NULL,
  `pack_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pack_id`, `pack_location`, `pack_des`, `resort`, `pack_price`, `member`, `from_date`, `to_date`, `arrival_time`, `pack_img`, `pack_status`, `created_at`, `updated_at`) VALUES
(1, 'New York', 'Description', 'Resort', '1000', 10, '2023-11-05', '2023-11-10', '01:54', '1699128395.jpg', 1, '2023-11-04 13:54:23', '2023-11-04 14:06:35'),
(2, 'Canada', 'Horseshoe Falls', 'Resort', '10000', 10, '2023-11-05', '2023-11-05', '02:03', '1699128301.jpg', 1, '2023-11-04 14:03:42', '2023-11-04 14:05:01'),
(3, 'France', 'Description', 'France Resort', '10000', 10, '2023-11-05', '2023-11-05', '02:04', '1699128261.jpg', 1, '2023-11-04 14:04:21', '2023-11-04 14:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `payment_statuses`
--

CREATE TABLE `payment_statuses` (
  `ps_id` bigint(20) UNSIGNED NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_statuses`
--

INSERT INTO `payment_statuses` (`ps_id`, `ps_name`, `created_at`, `updated_at`) VALUES
(1, 'Credit / Debit card', NULL, NULL),
(2, 'Mobile Banking', NULL, NULL),
(3, 'Cash in Delivery', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `promo_id` bigint(20) UNSIGNED NOT NULL,
  `promo_code` varchar(50) DEFAULT NULL,
  `promo_des` varchar(255) DEFAULT NULL,
  `promo_percentage` varchar(10) DEFAULT NULL,
  `promo_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`promo_id`, `promo_code`, `promo_des`, `promo_percentage`, `promo_status`, `created_at`, `updated_at`) VALUES
(1, 'OFF10', 'Test Promo', '10', 1, '2023-10-28 07:23:37', '2023-10-28 11:38:18'),
(2, 'OFF50', 'New users', '50', 1, '2023-10-28 07:23:56', '2023-10-28 07:23:56'),
(3, 'OFF5', 'Old User', '10', 1, '2023-10-28 07:24:14', '2023-11-02 07:23:58'),
(14, 'N/A', 'Test', '0', 1, '2023-10-28 21:52:42', '2023-10-28 21:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(50) DEFAULT NULL,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, NULL, NULL),
(2, 'Moderator', 1, NULL, NULL),
(3, 'Employee', 1, NULL, NULL),
(4, 'Viewer', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` int(11) NOT NULL DEFAULT 4,
  `user_img` varchar(255) DEFAULT NULL,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `password`, `user_role`, `user_img`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Ali Hasan', 'infoalihasanbd@gmail.com', '01723629080', '$2y$10$QBqos/Q8jAk/1E.tiBFwhupqnBdgDoFDnvLAD8zKaw5UoSYQ4NggK', 1, '1699214387.jpg', 1, '2023-11-05 13:59:47', '2023-11-05 13:59:47'),
(2, 'MimHasan', 'mimhasan@gmail.com', '01718513591', '$2y$10$sdKi3OD3EP3nlTQy4amm.OijqgU1wMa0ty813qMXITX8q.2fzF2RO', 2, '1699214917.jpg', 1, '2023-11-05 14:08:37', '2023-11-05 14:08:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `booking_statuses`
--
ALTER TABLE `booking_statuses`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`bundle_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `costtypes`
--
ALTER TABLE `costtypes`
  ADD PRIMARY KEY (`costtype_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `payment_statuses`
--
ALTER TABLE `payment_statuses`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking_statuses`
--
ALTER TABLE `booking_statuses`
  MODIFY `bs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `bundle_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `con_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `costtypes`
--
ALTER TABLE `costtypes`
  MODIFY `costtype_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pack_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_statuses`
--
ALTER TABLE `payment_statuses`
  MODIFY `ps_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `promo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
