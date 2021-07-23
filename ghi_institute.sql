-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 06:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghi_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `photo`, `name`, `text`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '5d7520bc90624_blog-img_03.jpg', 'Blog 1', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 1, '2019-09-08 08:49:59', '2019-09-08 09:09:40'),
(3, '5d7776a1eb3e5_8.jpg', 'Blog 2', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 2, '2019-09-10 00:22:09', '2019-09-10 03:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `photo`, `start_date`, `duration`, `fee`, `description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Academic Course', '5d775c7dc7b24_8.jpg', '2019-09-25', '1 year', '100000', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 'academic', '2019-09-10 00:49:33', '2019-09-10 01:49:09'),
(2, 'Diploma Course', '5d775c9869f38_7.jpg', '2019-09-18', '3 month', '150000', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 'diploma', '2019-09-10 00:50:25', '2019-09-10 01:49:36'),
(3, 'Online Course', '5d775c90a488c_2.jpg', '2019-09-28', '1 week', '50000', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', 'online course', '2019-09-10 00:51:09', '2019-09-10 01:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'academic', NULL, NULL),
(2, 'diploma', NULL, NULL),
(3, 'online course', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `photo`, `title`, `fee`, `date`, `timing`, `location`, `event_category`, `detail`, `created_at`, `updated_at`) VALUES
(1, '5d7787b0db761_sg1.jpg', 'Event 1', 'free', '2019-09-19', '1pm to 5pm', 'Yangon', 'academy', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-10 04:53:28', '2019-09-10 04:56:14'),
(2, '5d7788bae7903_5.jpg', 'Event 2', '5000', '2019-09-16', '10am to 12pm', 'Mandalay', 'other', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-10 04:57:54', '2019-09-10 04:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `photo`, `name`, `position`, `university`, `degree`, `fb_link`, `description`, `created_at`, `updated_at`) VALUES
(1, '5d74fb5ce0bec_our-teachers_03.jpg', 'Mg Mg', 'Web developer', 'Dagon', 'BA', 'https://www.facebook.com', '<p style=\"text-align: center;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-08 05:54:08', '2019-09-08 06:30:12'),
(2, '5d775f9e47bbd_4.jpg', 'Kyaw Kyaw', 'Web Designer', 'Dagon', 'BA', 'https://www.facebook.com', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, aliquam reiciendis beatae saepe perspiciatis provident iusto aperiam, consectetur iste, maiores tempore atque. Quis minima, quasi error molestias facere quaerat perspiciatis!<br></p>', '2019-09-10 02:02:10', '2019-09-10 02:02:30');

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
(3, '2019_09_08_095934_create_course_categories_table', 2),
(4, '2019_09_08_100219_create_courses_table', 3),
(5, '2019_09_08_100840_create_members_table', 4),
(6, '2019_09_08_101359_create_events_table', 5),
(7, '2019_09_08_101905_create_blogs_table', 6);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$s0wCyWVFjl4GEd6cDe0V4.EpKIP47BhDulqErsQADMK6GfQ2/VXCi', 'admin', NULL, '2019-09-08 00:28:44', '2019-09-08 00:28:44'),
(2, 'teacher', 'teacher@gmail.com', NULL, '$2y$10$9lVsACELlWM3Upm7S/ugEetd3hJiJLjGlAIGVZKoqxWyF.Btvfkni', 'teacher', NULL, '2019-09-08 00:31:16', '2019-09-08 00:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
