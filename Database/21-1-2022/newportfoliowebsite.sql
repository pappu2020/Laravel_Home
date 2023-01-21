-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 03:47 PM
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
-- Database: `newportfoliowebsite`
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

--
-- Dumping data for table `about_me_section_des_models`
--

INSERT INTO `about_me_section_des_models` (`id`, `aboutSection_description`, `aboutImage`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'My dream is to become a good full-stack web developer. I am very passionate about web development and have 3 years of experience with software development. I have a lot of interest in computer and web technology and I always want to learn about it and Creating something that someone uses and benefits from.', 'aboutMeSection-741126.png', 1, NULL, '2023-01-20 13:39:54', '2023-01-20 13:39:54');

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

--
-- Dumping data for table `about_me_section_models`
--

INSERT INTO `about_me_section_models` (`id`, `about_Exam_name`, `about_Exam_year`, `about_Exam_result`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BACHELOR OF SCIENCE (B.SC) in CSE', 2022, 80, 1, NULL, '2023-01-20 11:10:24', '2023-01-20 13:40:53'),
(2, 'Higher Secondary Certificate Examination (HSC)', 2017, 75, 1, NULL, '2023-01-20 11:10:58', NULL),
(3, 'Secondary Certificate Examination (SSC)', 2015, 100, 1, NULL, '2023-01-20 11:11:26', NULL),
(4, 'Professional Web Development (Creative It Institute)', 2023, 90, 1, NULL, '2023-01-20 13:42:36', '2023-01-21 08:01:17');

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

--
-- Dumping data for table `contact_form_models`
--

INSERT INTO `contact_form_models` (`id`, `contactFormName`, `contactFormEmail`, `contactFormMsg`, `created_at`, `updated_at`) VALUES
(1, 'Pappu', 'sahapappu019@gmail.com', 'Good work', '2023-01-21 14:45:27', NULL);

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

--
-- Dumping data for table `contact_me_models`
--

INSERT INTO `contact_me_models` (`id`, `contact_country_name`, `contact_email`, `contact_address`, `contact_phone_num`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'sahapappu018@gmail.com', 'Nikunjo-2,Khilkhet,Dhaka,Bangladesh', 1851719389, 1, NULL, '2023-01-21 11:42:17', NULL);

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
(1, 'Pappu Saha', 'Independent, reliable and friendly person and work hard to achieve goals. To work in the creative department of different level of IT company as a Full-Stack web developer and grow rapidly with increasing responsibilities', 'pappu saha-771055.png', NULL, '2023-01-20 10:44:09', '2023-01-20 10:57:43');

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

--
-- Dumping data for table `home_sec_social_models`
--

INSERT INTO `home_sec_social_models` (`id`, `homeSocialIcon`, `homeSocialaddress`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fab fa-facebook-f', 'https://www.facebook.com/profile.php?id=100009393546290', '2023-01-20 11:01:55', NULL, NULL),
(2, 'fab fa-linkedin', 'https://www.linkedin.com/in/pappu-saha-3535071ab', '2023-01-20 11:04:14', NULL, NULL),
(3, 'fab fa-instagram', 'https://www.instagram.com/dev.sahapappu/?fbclid=IwAR2iHJ_X0cl0yZrrhq2TEeeOOn5hmtGw1fTGw52_qQr4-_nAoahP3PXlVsY', '2023-01-20 11:08:07', NULL, NULL);

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
(14, '2022_10_26_141818_create_contact_form_models_table', 1),
(15, '2023_01_21_151744_create_recent_image_upload_models_table', 2);

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
-- Table structure for table `recent_image_upload_models`
--

CREATE TABLE `recent_image_upload_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recentWorkId` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_image_upload_models`
--

INSERT INTO `recent_image_upload_models` (`id`, `recentWorkId`, `images`, `created_at`, `updated_at`) VALUES
(10, 1, '1-1889284.png', '2023-01-21 10:04:08', NULL),
(11, 1, '1-1799623.png', '2023-01-21 10:04:08', NULL),
(12, 1, '1-1823060.png', '2023-01-21 10:04:09', NULL),
(13, 1, '1-978191.png', '2023-01-21 10:04:09', NULL),
(14, 1, '1-1336822.png', '2023-01-21 10:04:09', NULL),
(15, 1, '1-1801603.png', '2023-01-21 10:04:09', NULL),
(16, 1, '1-526717.png', '2023-01-21 10:04:10', NULL),
(17, 2, '2-1711023.png', '2023-01-21 10:04:32', NULL),
(18, 2, '2-1234365.png', '2023-01-21 10:04:32', NULL),
(19, 2, '2-1904301.png', '2023-01-21 10:04:33', NULL),
(20, 2, '2-147717.png', '2023-01-21 10:04:33', NULL),
(21, 2, '2-1942461.png', '2023-01-21 10:04:33', NULL),
(22, 3, '3-1561675.png', '2023-01-21 10:07:08', NULL),
(23, 3, '3-1351898.png', '2023-01-21 10:07:08', NULL),
(24, 3, '3-681881.png', '2023-01-21 10:07:09', NULL),
(25, 4, '4-470891.png', '2023-01-21 11:34:29', NULL),
(26, 4, '4-1953536.png', '2023-01-21 11:34:29', NULL),
(27, 4, '4-1726712.png', '2023-01-21 11:34:29', NULL),
(28, 4, '4-504268.png', '2023-01-21 11:34:29', NULL),
(29, 5, '5-564042.png', '2023-01-21 11:34:59', NULL),
(30, 6, '6-128133.png', '2023-01-21 11:40:49', NULL),
(31, 6, '6-184092.png', '2023-01-21 11:40:49', NULL),
(32, 6, '6-493235.png', '2023-01-21 11:40:50', NULL),
(33, 6, '6-948573.png', '2023-01-21 11:40:50', NULL),
(34, 6, '6-1126826.png', '2023-01-21 11:40:51', NULL);

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

--
-- Dumping data for table `recent_work_models`
--

INSERT INTO `recent_work_models` (`id`, `recentTitle`, `recentSubTitle`, `recentImage`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'E-commerce website project', 'Php, Laravel', 'e-commerce-website-project-105667.png', 1, NULL, '2023-01-21 08:21:18', '2023-01-21 08:21:18'),
(2, 'Dynamic Portfolio Website and Admin Dashboard', 'Php, Laravel', 'dynamic-portfolio-website-and-admin-dashboard-119476.png', 1, NULL, '2023-01-21 08:28:19', '2023-01-21 08:28:19'),
(3, 'Portfolio Website', 'Html5,CSS3,Javascript,Jqueary,Bootstrap5', 'portfolio-website-142927.png', 1, NULL, '2023-01-21 10:06:07', '2023-01-21 10:06:08'),
(4, 'Sample website 01', 'Html5,CSS3,Javascript,Jqueary,Bootstrap5', 'sample-website-01-192143.png', 1, NULL, '2023-01-21 10:09:06', '2023-01-21 10:09:07'),
(5, 'Blogger website (Running)', 'Php, Laravel', 'blogger-website-(running)-181775.png', 1, NULL, '2023-01-21 10:17:00', '2023-01-21 10:17:01'),
(6, 'Coaching Management System (Console Application)', 'Java language', 'coaching-management-system-(console-application)-124644.png', 1, NULL, '2023-01-21 10:19:04', '2023-01-21 10:19:05');

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

--
-- Dumping data for table `service_section_models`
--

INSERT INTO `service_section_models` (`id`, `service_title`, `service_icon`, `service_description`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'fab fa-php', 'Form handling, Form validation, Array,Function,For loop,Dynamic website management, Short dynamic project', 1, NULL, '2023-01-20 14:11:05', '2023-01-20 14:14:35'),
(2, 'Laravel', 'fab fa-laravel', 'Routing, Building Layouts & Views, Adding, Deleting, Updating tasks, Form validation, E-commerce site project build, API creation,Dynamic project build,Database management etc', 1, NULL, '2023-01-20 14:15:14', '2023-01-20 14:20:19'),
(3, 'Mysql', 'fa-solid fa-database', 'Create table, Insert data, Delete data, update data, Insert multiple, Group data, sorting,Arrange data, Filter, Search,Get data', 1, NULL, '2023-01-20 14:20:57', '2023-01-20 14:29:23'),
(4, 'HTML5 & CSS3', 'fa-solid fa-code', 'Elements, Attribute,Tags,CSS animation,Css responsive, Color management, Flex, Grid layout etc', 1, NULL, '2023-01-20 14:33:27', NULL),
(5, 'Bootstrap 5', 'fa-brands fa-bootstrap', 'Customization, Layout, Grid,Form,Table,Accordion,Base,Model, Navbar,pagination,popovers etc', 1, NULL, '2023-01-20 14:34:06', '2023-01-20 14:36:51'),
(6, 'Javascript', 'fa-brands fa-js', 'OOP, ES6, JS HTML DOM, JS AJAX, Basics usages, Js function etc', 1, NULL, '2023-01-20 14:39:30', '2023-01-20 14:40:35'),
(7, 'Project Management', 'fal fa-edit', 'Soft Sills', 1, NULL, '2023-01-20 14:42:54', '2023-01-20 14:45:12'),
(8, 'Problem Solving Skills', 'fal fa-lightbulb-on', 'Soft skills', 1, NULL, '2023-01-20 14:46:26', '2023-01-20 14:46:45'),
(9, 'Communication Skills', 'fa-solid fa-smile', 'Soft skill', 1, NULL, '2023-01-20 14:49:19', '2023-01-20 14:51:20');

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
(1, 'Pappu saha', 'sahapappu018@gmail.com', 'Pappu saha.jpeg', NULL, '$2y$10$W1ZM7a5ffJFcEwO2VfC/o.tGT2wR.DGBu2N58LaQpTtHFZ7/zAsQe', NULL, '2023-01-20 10:37:45', '2023-01-20 10:38:14');

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
-- Indexes for table `recent_image_upload_models`
--
ALTER TABLE `recent_image_upload_models`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_me_section_models`
--
ALTER TABLE `about_me_section_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form_models`
--
ALTER TABLE `contact_form_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_me_models`
--
ALTER TABLE `contact_me_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_image_upload_models`
--
ALTER TABLE `recent_image_upload_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `recent_work_models`
--
ALTER TABLE `recent_work_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recent_work_number_models`
--
ALTER TABLE `recent_work_number_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_section_models`
--
ALTER TABLE `service_section_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
