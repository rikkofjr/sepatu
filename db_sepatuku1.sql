-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 03:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sepatuku1`
--

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
(3, '2019_06_14_142655_create_permission_tables', 1),
(4, '2019_06_16_152727_create_order', 2),
(5, '2019_06_16_153634_tb_order', 3),
(6, '2019_06_18_091521_tb_order_status', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$eYx8EbTmpi5rkZlKiwliDesZdXq0kCXeYRz2FVVFW9Q67cBd1bgQK', '2019-06-15 15:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administer roles & permissions', 'web', '2019-06-15 12:16:59', '2019-06-15 12:16:59'),
(2, 'Add data', 'web', '2019-06-25 11:21:32', '2019-06-25 11:21:32'),
(3, 'Edit Data', 'web', '2019-06-25 11:22:23', '2019-06-25 11:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2019-06-15 13:03:29', '2019-06-15 13:03:29'),
(2, 'Manager', 'web', '2019-06-25 11:33:11', '2019-06-25 11:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `atas_nama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paket` int(11) DEFAULT NULL,
  `jumlah_sepatu` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kasir` int(3) NOT NULL,
  `perubah` int(3) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `atas_nama`, `nohp`, `kode`, `paket`, `jumlah_sepatu`, `harga`, `kasir`, `perubah`, `status`, `catatan`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Buyung', '081709870988', 'sRr081709870988', 2, 2, 190, 1, 0, 2, NULL, 'sRrCQ6YNLOUOFvfDT0ZoP0YqCByXqLgBDofAaGNI', '2019-06-17 01:11:33', '2019-06-22 19:37:23', NULL),
(4, 'Samsu Gondrong', '081808520122', 'Q42081808520122', 2, 2, 50000, 1, 0, 2, NULL, 'Q42TtGnkg83iib8m9hRqb0acsBLBy7piBuKoCXYL', '2019-06-17 18:28:34', '2019-06-22 15:10:03', NULL),
(5, 'Zarmas', '081656569865', 'yMl081656569865', 2, 2, 50000, 1, 1, 3, NULL, 'yMlVTrUTe4Zu5t0QJvO1rQHxIfzj4JPhXDQG768w', '2019-06-23 01:36:20', '2019-06-27 21:01:21', NULL),
(6, 'Zarsa', '1565453123546', 'yMl1565453123546', 1, 1, 20000, 1, 0, 2, NULL, 'yMlVTrUTe4Zu5t0QJvO1rQHxIfzj4JPhXDQG768w', '2019-06-23 01:37:36', '2019-06-23 01:37:36', NULL),
(7, 'Ini Baru', '098988899873', 'yMl098988899873', 1, 2, 40000, 1, 0, 0, NULL, 'yMlVTrUTe4Zu5t0QJvO1rQHxIfzj4JPhXDQG768w', '2019-06-23 03:10:06', '2019-06-27 20:04:18', '2019-06-28 10:04:18'),
(8, 'Samsu Gondrong', '081989898989', 'yMl081989898989', 3, 2, 150000, 1, 1, 2, NULL, 'yMlVTrUTe4Zu5t0QJvO1rQHxIfzj4JPhXDQG768w', '2019-06-23 03:11:14', '2019-06-28 18:08:01', NULL),
(9, 'Nyerot', '098989898', 'eDt098989898', 3, 2, 150000, 1, 0, 0, NULL, 'eDttyDgwSkZLD8iM55h7DWe1di1Xys4Nb8B61vSN', '2019-06-23 18:55:38', '2019-06-23 18:55:38', NULL),
(10, 'ada', '098989898', 'eDtd', 1, 2, 60000, 1, 1, 2, NULL, 'eDttyDgwSkZLD8iM55h7DWe1di1Xys4Nb8B61vSN', '2019-06-23 18:56:26', '2019-07-05 14:28:17', NULL),
(11, 'buyung', '0999', 'eDt0999', 1, 2, 40000, 1, 0, 0, NULL, 'eDttyDgwSkZLD8iM55h7DWe1di1Xys4Nb8B61vSN', '2019-06-23 19:21:30', '2019-06-23 19:21:30', NULL),
(12, 'Coba ini', '098882', 'eDt098882', 1, 1, 20000, 1, 0, 0, NULL, 'eDttyDgwSkZLD8iM55h7DWe1di1Xys4Nb8B61vSN', '2019-06-23 19:23:05', '2019-06-23 19:23:05', NULL),
(13, 'ada', '081989898989', 'eDt081989898989', 2, 2, 50000, 1, 0, 0, NULL, 'eDttyDgwSkZLD8iM55h7DWe1di1Xys4Nb8B61vSN', '2019-06-23 19:26:56', '2019-06-26 23:06:18', '2019-06-27 13:06:18'),
(14, 'lagidah', '321', 'cd4373f72683bfdd9770013bce67cd72a957eb96986e3072dafca84cc0de4e70', 1, 1, 20000, 1, 1, 3, NULL, 's37ZdGQnC8A3u6b5G1ljOHs3PNKt3xgEpDud2BXB', '2019-04-09 20:02:17', '2019-07-05 14:28:26', NULL),
(15, 'Butut', '98788787878787', '95bfee1ebef0954e56f44769d716d4b91b7cdedce413707e811a0cf1d795ba40', 1, 2, 40000, 1, 2, 0, NULL, 's37ZdGQnC8A3u6b5G1ljOHs3PNKt3xgEpDud2BXB', '2019-06-27 20:57:36', '2019-06-27 21:20:07', NULL),
(16, 'Sugeng', '998989898', '1c3b8c0dd54775de912cefa566513e5e861b4a4db8a69bde695253dcfa02a22e', 1, 2, 60000, 1, 1, 0, NULL, '1auyBhy9burOspUFNz8ljwy9H0uI7PkS3CzirsSs', '2019-06-28 15:53:55', '2019-06-28 15:53:55', NULL),
(17, 'Sugeng', '983999983', 'c73e3b062324cb955d19720787a2f0d6134a801764bb7407663023a9f3d5b253', 1, 3, 90000, 1, 1, 0, NULL, '1auyBhy9burOspUFNz8ljwy9H0uI7PkS3CzirsSs', '2019-06-28 16:32:05', '2019-06-28 16:32:05', NULL),
(18, 'Smsudin', '324242343', 'f676d08c93a536c8cbdb7071119f2c4cbfebaead52dd3caea6dc4e5a75c12222', 3, 2, 150000, 1, 1, 2, 'tidak ada', '1auyBhy9burOspUFNz8ljwy9H0uI7PkS3CzirsSs', '2019-06-28 16:32:55', '2019-06-28 17:54:00', NULL),
(19, 'Buyung', '081709870988', '229ebebb316c98f9118f13223971829c90d2d79332c999b25d87b6b5e20c6622', 1, 1, 180000, 1, 1, 0, NULL, '1auyBhy9burOspUFNz8ljwy9H0uI7PkS3CzirsSs', '2019-06-28 17:38:42', '2019-06-28 17:38:42', NULL),
(20, 'coba lagi', '939898', 'd88a19a3ee8718a3e985b8562d37919335741438a87c3e6d1e9e42121d3939cf', 1, 2, 60000, 1, 1, 0, NULL, 'QrdPgQg9noewzUvTva9NgjM887Rb55LDMjymjVIc', '2019-06-29 19:36:56', '2019-06-29 19:36:56', NULL),
(21, 'Sugeng', '22221', '96075f99f9ad141a1877a87c5e4b8d33eee2a97904dd2574dfa872100e6bc61e', 1, 3, 90000, 1, 1, 0, NULL, 'QrdPgQg9noewzUvTva9NgjM887Rb55LDMjymjVIc', '2019-06-30 02:44:04', '2019-06-30 02:44:04', NULL),
(22, 'kaj', '939', '4e874b27bb8f4ec8dd41f00b148134e4d6236ef5a451e0700a5a0dcfdf6cc854', 1, 1, 30000, 1, 1, 0, NULL, 'QrdPgQg9noewzUvTva9NgjM887Rb55LDMjymjVIc', '2019-06-30 02:47:39', '2019-06-30 02:47:39', NULL),
(23, 'dd', '83838', '9e0be9c0595f6f9c7176efd2017f36a69223cea1343c421f2b6167c120cc1879', 2, 2, 90000, 1, 1, 1, NULL, 'trHDRoRZDc36ybXlcXss1sJxhj0wuc7Y34Fd8sFo', '2019-06-30 09:37:09', '2019-06-30 09:40:35', NULL),
(24, 'samsudin jr', '878378787', '8e360ed0c8e0d7cc65b26b02647135de1a20f457dfb647cf94c73934dca3cf16', 1, 2, 60000, 1, 1, 0, NULL, 'qX4F0E3LxAotHpTPMeQBy6hMuSEsbwNn12NEr7wq', '2019-07-05 12:41:32', '2019-07-05 12:41:32', NULL),
(25, '2', '23', '0d346dc7f72e182b148217f9e2c6837595cfc153723c2d4cc1c8419e004c2aa9', 1, 1, 30000, 1, 1, 0, NULL, 'qX4F0E3LxAotHpTPMeQBy6hMuSEsbwNn12NEr7wq', '2019-07-05 14:45:03', '2019-07-05 14:45:03', NULL),
(26, 'Namanya', '081709870988', '972570b04e514f0a2a19abf4bf4e538961819fe711e81c546463e6b2fd977acf', 2, 1, 45000, 1, 1, 0, 'Kirim besok pagi', 'V6mY5zjSCn3RU01q2ud4TZLx9T4kXh9miD4vswwV', '2019-07-08 01:04:38', '2019-07-08 01:06:41', NULL),
(27, 'Namanya', '081709870988', '972570b04e814f0a2a19abf4bf4e538961819fe711e81c546463e6b2fd977acf', 2, 2, 90000, 1, NULL, 0, 'kirim besok', 'V6mY5zjSCn3RU01q2ud4TZLx9T4kXh9miD4vswwV', '2019-07-08 01:05:26', '2019-07-08 01:05:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_status`
--

CREATE TABLE `tb_order_status` (
  `no_status` int(10) UNSIGNED NOT NULL,
  `nama_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodewarna` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_order_status`
--

INSERT INTO `tb_order_status` (`no_status`, `nama_status`, `kodewarna`, `created_at`, `updated_at`) VALUES
(0, 'Siap Dicuci', 'btn btn-sm btn-danger', '2019-07-07 17:00:00', NULL),
(1, 'Sedang Dicuci', 'btn btn btn-sm  btn-success', '2019-06-22 10:00:00', '2019-06-22 10:00:00'),
(2, 'Proses Selesai', 'btn btn btn-sm  btn-info', '2019-06-22 10:00:00', NULL),
(3, 'Sudah Diambil', 'btn btn btn-sm btn-info', '2019-06-22 10:00:00', NULL),
(4, 'Sepatu Diterima', 'btn btn-sm btn-danger', '2019-06-22 10:00:00', '2019-06-22 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(2) NOT NULL,
  `paket_nama` varchar(100) NOT NULL,
  `paket_harga` int(255) NOT NULL,
  `paket_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `paket_nama`, `paket_harga`, `paket_keterangan`) VALUES
(1, 'Bronze - 30K', 30000, 'Cuci Aja'),
(2, 'Silver - 45K', 45000, 'Cuc Keringin'),
(3, 'Gold - 75K', 75000, 'Cuci Keringi & Repaint');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$Lndsl7z96DZhZ8fzsnAizeQmAyz/H3JZU2LSPRaPgZBpabjUCEX3i', 'PJtCsJicDKD8Aga5DiEA5fH6XbsaMf6BM6HQzSvWs3a8Y1DJJwWzyCiRtanM', '2019-06-14 00:44:08', '2019-06-15 14:43:54'),
(2, 'Manager User', 'manager', 'manager@mail.ma', NULL, '$2y$10$iflpGkG.pyfkMSWa8.4u2erU8/8tjj4F.F1Zi5IUCyTvuTEglYDD2', NULL, '2019-06-25 11:15:59', '2019-06-30 09:52:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_order_status`
--
ALTER TABLE `tb_order_status`
  ADD PRIMARY KEY (`no_status`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_order_status`
--
ALTER TABLE `tb_order_status`
  MODIFY `no_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
