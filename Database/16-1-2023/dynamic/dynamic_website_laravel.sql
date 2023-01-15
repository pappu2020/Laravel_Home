-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 07:36 PM
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
-- Database: `dynamic_website_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me_section_des_models`
--

CREATE TABLE `about_me_section_des_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutSection_description` longtext NOT NULL,
  `aboutImage` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_me_section_models`
--

CREATE TABLE `about_me_section_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_Exam_name` varchar(255) NOT NULL,
  `about_Exam_year` int(11) NOT NULL,
  `about_Exam_result` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_models`
--

CREATE TABLE `contact_form_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contactFormName` varchar(255) NOT NULL,
  `contactFormEmail` varchar(255) NOT NULL,
  `contactFormMsg` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_me_models`
--

CREATE TABLE `contact_me_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_country_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_phone_num` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_quotes_models`
--

CREATE TABLE `customer_quotes_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerTitle` varchar(255) NOT NULL,
  `customerPosition` varchar(255) NOT NULL,
  `customer_description` longtext NOT NULL,
  `customerImage` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `home_section_models`
--

CREATE TABLE `home_section_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_name` varchar(255) NOT NULL,
  `home_description` longtext NOT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_section_models`
--

INSERT INTO `home_section_models` (`id`, `home_name`, `home_description`, `home_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pappu saha', 'To work in the creative department of different level of IT company and freelancing sites as a Full-Stack web developer, It officer, Data Entry Operator in Bangladesh and abroad and grow rapidly with increasing responsibilities.', 'pappu saha-988839.jpg', NULL, '2023-01-02 12:33:45', '2023-01-15 18:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `home_sec_social_models`
--

CREATE TABLE `home_sec_social_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homeSocialIcon` varchar(255) NOT NULL,
  `homeSocialaddress` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(5, '2022_10_19_141801_create_home_section_models_table', 1),
(6, '2022_10_21_191748_create_home_sec_social_models_table', 1),
(7, '2022_10_22_122227_create_about_me_section_models_table', 1),
(8, '2022_10_22_124301_create_about_me_section_des_models_table', 1),
(9, '2022_10_23_115258_create_service_section_models_table', 1),
(10, '2022_10_24_120429_create_recent_work_models_table', 1),
(11, '2022_10_25_083345_create_recent_work_number_models_table', 1),
(12, '2022_10_25_130803_create_customer_quotes_models_table', 1),
(13, '2022_10_26_124408_create_contact_me_models_table', 1),
(14, '2022_10_26_141818_create_contact_form_models_table', 1);

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
-- Table structure for table `recent_work_models`
--

CREATE TABLE `recent_work_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recentTitle` varchar(255) NOT NULL,
  `recentSubTitle` varchar(255) NOT NULL,
  `recentImage` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recent_work_number_models`
--

CREATE TABLE `recent_work_number_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recentNumberIcon` varchar(255) NOT NULL,
  `recentNumber` int(11) NOT NULL,
  `recentNumberTitle` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_section_models`
--

CREATE TABLE `service_section_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_icon` varchar(255) NOT NULL,
  `service_description` longtext NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profileImg` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profileImg`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Papppu saha', 'sahapappu018@gmail.com', 'Papppu saha.jpg', NULL, '$2y$10$7tGwmGzLdAD2UyAkkiE46.rwKgDGeAIzOg8WtOC5Hk4rVRTJaYOyO', NULL, '2023-01-02 12:32:16', '2023-01-02 12:32:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me_section_des_models`
--
ALTER TABLE `about_me_section_des_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_me_section_models`
--
ALTER TABLE `about_me_section_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_models`
--
ALTER TABLE `contact_form_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_me_models`
--
ALTER TABLE `contact_me_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_quotes_models`
--
ALTER TABLE `customer_quotes_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_section_models`
--
ALTER TABLE `home_section_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sec_social_models`
--
ALTER TABLE `home_sec_social_models`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recent_work_models`
--
ALTER TABLE `recent_work_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_work_number_models`
--
ALTER TABLE `recent_work_number_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_section_models`
--
ALTER TABLE `service_section_models`
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
-- AUTO_INCREMENT for table `about_me_section_des_models`
--
ALTER TABLE `about_me_section_des_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_me_section_models`
--
ALTER TABLE `about_me_section_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form_models`
--
ALTER TABLE `contact_form_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_me_models`
--
ALTER TABLE `contact_me_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_quotes_models`
--
ALTER TABLE `customer_quotes_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_section_models`
--
ALTER TABLE `home_section_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sec_social_models`
--
ALTER TABLE `home_sec_social_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_work_models`
--
ALTER TABLE `recent_work_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_work_number_models`
--
ALTER TABLE `recent_work_number_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_section_models`
--
ALTER TABLE `service_section_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
