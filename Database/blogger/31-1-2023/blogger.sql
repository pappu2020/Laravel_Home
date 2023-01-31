-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_models`
--

CREATE TABLE `category_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryImg` varchar(255) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_models`
--

INSERT INTO `category_models` (`id`, `categoryName`, `categoryImg`, `added_by`, `created_at`, `updated_at`) VALUES
(2, 'Travellling', 'travellling-248126.png', 1, '2023-01-29 13:15:14', '2023-01-29 13:15:14'),
(3, 'Food', 'food-620339.png', 1, '2023-01-29 13:26:23', '2023-01-29 13:26:23'),
(4, 'Place', 'place-511624.png', 1, '2023-01-29 13:27:46', '2023-01-29 13:27:46'),
(5, 'Hobby', 'hobby-988861.png', 1, '2023-01-29 13:28:48', '2023-01-29 13:28:48'),
(6, 'Sports', 'sports-695840.png', 1, '2023-01-29 13:29:35', '2023-01-29 13:29:35'),
(7, 'Branding', 'branding-976616.png', 1, '2023-01-29 13:30:29', '2023-01-29 13:30:29'),
(8, 'Lifestyle', 'lifestyle-642391.png', 1, '2023-01-29 13:32:36', '2023-01-29 13:32:36'),
(9, 'Health', 'health-596542.png', 1, '2023-01-29 13:33:10', '2023-01-29 13:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_29_114403_create_category_models_table', 2),
(6, '2023_01_31_134139_create_tag_models_table', 3),
(7, '2023_01_31_151548_create_permission_tables', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'show_user_list', 'web', '2023-01-31 09:22:39', '2023-01-31 09:22:39'),
(2, 'user_delete', 'web', '2023-01-31 09:23:19', '2023-01-31 09:23:19'),
(3, 'category_add', 'web', '2023-01-31 09:23:34', '2023-01-31 09:23:34'),
(4, 'category_delete', 'web', '2023-01-31 09:23:44', '2023-01-31 09:23:44'),
(5, 'category_update', 'web', '2023-01-31 09:23:56', '2023-01-31 09:23:56'),
(6, 'tag_add', 'web', '2023-01-31 09:24:10', '2023-01-31 09:24:10'),
(7, 'tag_delete', 'web', '2023-01-31 09:24:19', '2023-01-31 09:24:19'),
(8, 'tag_update', 'web', '2023-01-31 09:24:29', '2023-01-31 09:24:29'),
(9, 'show_tag_list', 'web', '2023-01-31 09:24:45', '2023-01-31 09:24:45'),
(10, 'show_category_list', 'web', '2023-01-31 09:25:07', '2023-01-31 09:25:07'),
(11, 'show_role_list', 'web', '2023-01-31 09:25:17', '2023-01-31 09:25:17'),
(12, 'show_permission_list', 'web', '2023-01-31 09:25:35', '2023-01-31 09:25:35');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-01-31 09:34:04', '2023-01-31 09:34:04'),
(2, 'Admin', 'web', '2023-01-31 09:48:50', '2023-01-31 09:48:50'),
(3, 'Moderator', 'web', '2023-01-31 09:50:41', '2023-01-31 09:50:41'),
(4, 'General Officer', 'web', '2023-01-31 09:51:07', '2023-01-31 09:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(11, 2),
(11, 4),
(12, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tag_models`
--

CREATE TABLE `tag_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagName` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_models`
--

INSERT INTO `tag_models` (`id`, `tagName`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 1, '2023-01-31 08:00:11', NULL),
(2, 'Nature', 1, '2023-01-31 08:01:09', NULL),
(3, 'Fashion', 1, '2023-01-31 08:01:23', NULL),
(4, 'Web', 1, '2023-01-31 08:01:34', NULL),
(5, 'Health', 1, '2023-01-31 08:01:40', NULL),
(6, 'Food', 1, '2023-01-31 08:01:49', NULL),
(7, 'Animal', 1, '2023-01-31 08:02:03', NULL),
(8, 'Cricket', 1, '2023-01-31 08:02:11', NULL),
(9, 'Football', 1, '2023-01-31 08:02:17', NULL),
(10, 'Swimming', 1, '2023-01-31 08:02:24', NULL),
(11, 'Technology', 1, '2023-01-31 08:02:36', NULL),
(12, 'Innovation', 1, '2023-01-31 08:02:43', NULL),
(13, 'Science', 1, '2023-01-31 08:02:53', NULL),
(14, 'Human fact', 1, '2023-01-31 08:03:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pappu Saha', 'sahapappu018@gmail.com', '1-2138115708.jpg', NULL, '$2y$10$COvKOnkliItpqqdGB63Fveav73fCxNAwcvI3DDXPSztEdV21D6asm', NULL, NULL, '2023-01-29 00:46:32', '2023-01-29 00:46:32'),
(2, 'Raymundo Satterfield', 'lauriane.deckow@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4ijdV3FgLl', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(3, 'Mr. Casper Balistreri PhD', 'sporer.demond@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ngLTmzKCn2', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(4, 'Elsa Grady', 'katarina.cassin@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HX2JMWAKOU', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(5, 'Prof. Arnold Smith', 'hettinger.margarett@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v5lSYwuDaj', '2023-01-31 13:33:04', '2023-01-28 23:57:54', '2023-01-31 13:33:04'),
(6, 'Hilton Hirthe', 'ortiz.miguel@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eqMZeQ6S8H', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(7, 'Prof. Sigrid Rowe V', 'cassie.kuhn@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iwxk84Z7Wi', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(8, 'Nora Lowe', 'jones.treva@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YE33dqggpZ', '2023-01-31 13:33:13', '2023-01-28 23:57:54', '2023-01-31 13:33:13'),
(9, 'Elouise Hettinger I', 'predovic.alanna@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OZpI6iFL8I', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(10, 'Prof. Jamir Keebler', 'erick.gutkowski@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FXpfNYwLRc', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(11, 'Mustafa Jacobi', 'blick.maegan@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5L6Vh3San5', '2023-01-31 13:33:23', '2023-01-28 23:57:54', '2023-01-31 13:33:23'),
(12, 'Abdullah Bartell', 'chester.legros@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BVhPFnojcX', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(13, 'Mrs. Aryanna Reichel', 'rutherford.autumn@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'huzbbVeZ26', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(14, 'Mrs. Hollie Huel', 'ashtyn.veum@example.com', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mJIDyQ4iHO', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(15, 'Dr. Annetta Jaskolski V', 'abigayle04@example.net', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pX11wUnEwF', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(16, 'Noe Botsford', 'lucinda.legros@example.org', NULL, '2023-01-28 23:57:54', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ldU1fLjjLL', NULL, '2023-01-28 23:57:54', '2023-01-28 23:57:54'),
(17, 'locap', 'suwem@mailinator.com', '17-1749253757.png', NULL, '$2y$10$jXF7yMnQoQ3PR6bd9ZSUh.yqPK.7ouzdyAURxDSiNCOM.71.oPXz2', NULL, NULL, '2023-01-29 00:45:59', '2023-01-29 00:45:59'),
(18, 'Ritu', 'ritu@gmail.com', NULL, NULL, '$2y$10$bWnuusDsQa2aiSgPlCMy7eAwd.4moXWG55akIKpDDXnUBWFgOd2Zy', NULL, NULL, '2023-01-31 10:25:19', '2023-01-31 10:25:19'),
(19, 'Bishal saha', 'bishal@gmail.com', NULL, NULL, '$2y$10$rGA30lLFQnnLbeCfyAOxsuvnI6cABJKQzivFq8uwcVhEJzOE92XQC', NULL, NULL, '2023-01-31 10:25:48', '2023-01-31 10:25:48'),
(20, 'Anup saha', 'anup@gmail.com', NULL, NULL, '$2y$10$R/g.x2sOGDTK5Msn/TaUDOKKZF8LDkjzjSt.abzBkLI0tNOS70aAi', NULL, NULL, '2023-01-31 10:26:17', '2023-01-31 10:26:17'),
(21, 'Akash saha', 'akash@gmail.com', NULL, NULL, '$2y$10$a6MsckEowZweE01DX.hr9.dSSd1swRTmAg65pWuMUhF/rPXpAFEmi', NULL, NULL, '2023-01-31 10:26:41', '2023-01-31 10:26:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_models`
--
ALTER TABLE `category_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tag_models`
--
ALTER TABLE `tag_models`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category_models`
--
ALTER TABLE `category_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag_models`
--
ALTER TABLE `tag_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
