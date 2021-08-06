-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2021 at 10:16 AM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.2.34-8+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `job_application_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `address_1` text,
  `address_2` text,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `relationship_status` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `ssc_board_name` varchar(255) DEFAULT NULL,
  `ssc_passing_year` int(11) DEFAULT NULL,
  `ssc_percentage` int(11) DEFAULT NULL,
  `hsc_board_name` varchar(255) DEFAULT NULL,
  `hsc_passing_year` int(11) DEFAULT NULL,
  `hsc_percentage` int(11) DEFAULT NULL,
  `degree_course_name` varchar(255) DEFAULT NULL,
  `degree_university` varchar(255) DEFAULT NULL,
  `degree_passing_year` int(11) DEFAULT NULL,
  `degree_percentage` int(11) DEFAULT NULL,
  `master_course_name` varchar(255) DEFAULT NULL,
  `master_university` varchar(255) DEFAULT NULL,
  `master_passing_year` int(11) DEFAULT NULL,
  `master_percentage` int(11) DEFAULT NULL,
  `known_hindi_languge` varchar(255) DEFAULT NULL,
  `known_english_languge` varchar(255) DEFAULT NULL,
  `known_gujrati_languge` varchar(255) DEFAULT NULL,
  `technology_php` varchar(255) DEFAULT NULL,
  `technology_mysql` varchar(255) DEFAULT NULL,
  `technology_laravel` varchar(255) DEFAULT NULL,
  `technology_oracle` varchar(255) DEFAULT NULL,
  `prefered_location` varchar(255) DEFAULT NULL,
  `notice_period` varchar(255) DEFAULT NULL,
  `expected_ctc` varchar(255) DEFAULT NULL,
  `current_ctc` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`job_application_id`, `first_name`, `last_name`, `designation`, `email`, `phone_number`, `address_1`, `address_2`, `city`, `state`, `gender`, `zip_code`, `relationship_status`, `date_of_birth`, `ssc_board_name`, `ssc_passing_year`, `ssc_percentage`, `hsc_board_name`, `hsc_passing_year`, `hsc_percentage`, `degree_course_name`, `degree_university`, `degree_passing_year`, `degree_percentage`, `master_course_name`, `master_university`, `master_passing_year`, `master_percentage`, `known_hindi_languge`, `known_english_languge`, `known_gujrati_languge`, `technology_php`, `technology_mysql`, `technology_laravel`, `technology_oracle`, `prefered_location`, `notice_period`, `expected_ctc`, `current_ctc`, `department`, `created_at`, `updated_at`) VALUES
(2, 'efdgr', 'ergdrg', '57567', 'ertgrdfhg@gmail.com', 547657, '6578678', '567657', '57567', 'Surat', 'male', '567567', 'Married', '1970-01-01', '5465', 6757, 5765, 'ghfh', 65765, 57567, 'drgtrf', 'rghfh', 5657, 7567, NULL, 'gfdfg', 5756, 57567, 'Read', 'Write', 'Read,Write,Speak', 'Beginner', 'Beginner', 'Mediator', 'Mediator', '456456', '456546', '45657', '45645', 'Networking', '2021-08-05 11:47:33', '2021-08-05 11:47:33'),
(3, 'efdgr1', 'ergdrg1', '575671', 'ertgrdfhg1@gmail.com', 5476571, '65786781', '5676571', '575671', 'Jamnagar', 'female', '5675671', 'Single', '1970-01-01', '54651', 67571, 57651, 'ghfh1', 657651, 575671, 'drgtrf1', 'rghfh1', 56571, 75671, 'dsggdfg', 'gfdfg1', 57561, 57567, '', 'Speak', 'Speak', 'Mediator', 'Mediator', 'Mediator', 'Mediator', '4564561', '4565461', '456571', '456451', 'Digital Marketing', '2021-08-05 11:47:33', '2021-08-05 14:06:39'),
(6, 'efdgr', 'ergdrg', '57567', 'ertgrdfhg@gmail.com', 547657, '6578678', '567657', '57567', 'Surat', 'male', '567567', 'Married', '1970-01-01', '5465', 6757, 5765, 'ghfh', 65765, 57567, 'drgtrf', 'rghfh', 5657, 7567, NULL, 'gfdfg', 5756, 57567, 'Read', 'Write', 'Read,Write,Speak', 'Beginner', 'Beginner', 'Mediator', 'Mediator', '456456', '456546', '45657', '45645', 'Networking', '2021-08-05 11:47:33', '2021-08-05 11:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_references`
--

CREATE TABLE `job_references` (
  `job_reference_id` int(11) NOT NULL,
  `job_application_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_references`
--

INSERT INTO `job_references` (`job_reference_id`, `job_application_id`, `name`, `contact_number`, `relation`, `created_at`, `updated_at`) VALUES
(1, 1, '35436', '46', '46', '2021-08-05 11:47:20', '2021-08-05 11:47:20'),
(2, 2, '35436', '46', '46', '2021-08-05 11:47:33', '2021-08-05 11:47:33'),
(6, NULL, 'test', '123', 'test23', '2021-08-05 13:13:48', '2021-08-05 13:13:48'),
(7, 3, 'test', '123', 'test123', '2021-08-05 13:14:33', '2021-08-05 13:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_work_experiences`
--

CREATE TABLE `job_work_experiences` (
  `job_work_experience_id` int(11) NOT NULL,
  `job_application_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `category` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
('44,45,46,47', 2),
('1,4,7,16,17', 3),
('2,5,8', 4),
('1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74', 5);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2020-06-24 10:28:45', NULL);

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
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dimpal', 'dimpalpatel@mailinator.com', NULL, '$2y$10$3p9H6gqTZAIzTKXBHbzbGeADEbu.vj6zVX7LvtLQ8u9u3ZMt0wWUG', NULL, '2021-08-05 07:59:45', '2021-08-05 07:59:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`job_application_id`);

--
-- Indexes for table `job_references`
--
ALTER TABLE `job_references`
  ADD PRIMARY KEY (`job_reference_id`);

--
-- Indexes for table `job_work_experiences`
--
ALTER TABLE `job_work_experiences`
  ADD PRIMARY KEY (`job_work_experience_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

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
  ADD KEY `name` (`name`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `job_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `job_references`
--
ALTER TABLE `job_references`
  MODIFY `job_reference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `job_work_experiences`
--
ALTER TABLE `job_work_experiences`
  MODIFY `job_work_experience_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
