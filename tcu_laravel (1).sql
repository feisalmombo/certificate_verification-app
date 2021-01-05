-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2018 at 11:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcu_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_code` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `university_id`, `created_at`, `updated_at`) VALUES
(16, 'LG 103', 'COMMUNICATION SKILLS FOR SCIENTISTS', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(17, 'CS 110', 'INTRODUCTION TO HIGH LEVEL PROGRAMMING', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(18, 'TN 111', 'LINEAR ALGEBRA', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(19, 'DS 103', 'DEVELOPMENT PERSPECTIVES', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(20, 'BT 112', 'INTRODUCTION TO INFORMATION TECHNOLOGY', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(21, 'TN 112', 'FUNDAMENTALS OF ELECTRICAL ENGINEERING', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(22, 'TN 120', 'PROBABILITY AND STATISTICS', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(23, 'CS 124', 'OBJECT ORIENTED PROGRAMMING IN C++', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(24, 'CS 125', 'INTRODUCTION TO DATABASE MANAGEMENT SYSTEMS', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(25, 'TN 122', 'INTRODUCTION TO NETWORKING', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(26, 'CS 122', 'DATA STRUCTURES AND ALGORITHMS', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(27, 'CS 120', 'COMPUTATIONAL THEORY', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(28, 'CS 126', 'INTRODUCTION TO IT SECURITY', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(29, 'CS 123', 'INTRODUCTION TO SOFTWARE ENGINEERING', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39'),
(30, 'CS 130', 'INDUSTRIAL TRAINING I', 1, '2018-08-22 08:02:39', '2018-08-22 08:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `course_results`
--

CREATE TABLE `course_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `university_student_id` int(10) UNSIGNED DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `grade` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_studied` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_results`
--

INSERT INTO `course_results` (`id`, `course_id`, `university_student_id`, `semester`, `grade`, `year_studied`, `created_at`, `updated_at`) VALUES
(1, 17, 1, 1, 'B', 2014, '2018-08-22 08:02:55', '2018-08-22 08:02:55'),
(2, 20, 1, 1, 'B', 2014, '2018-08-22 08:02:55', '2018-08-22 08:02:55'),
(3, 16, 1, 1, 'B', 2014, '2018-08-22 08:02:55', '2018-08-22 08:02:55'),
(4, 18, 1, 1, 'B', 2014, '2018-08-22 08:02:55', '2018-08-22 08:02:55'),
(5, 21, 1, 1, 'B', 2014, '2018-08-22 08:02:55', '2018-08-22 08:02:55'),
(6, 19, 1, 1, 'C', 2014, '2018-08-22 08:02:55', '2018-08-22 08:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_code` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `faculty_code`, `faculty_name`, `university_id`, `created_at`, `updated_at`) VALUES
(1, 'SE', 'SOFTWARE ENGINEERING', 1, '2018-08-22 08:03:15', '2018-08-22 08:03:15'),
(2, 'TE', 'TELECOMMUNICATION ENGINEERING', 1, '2018-08-22 08:03:15', '2018-08-22 08:03:15'),
(3, 'CE', 'COMPUTER ENGINEERING', 1, '2018-08-22 08:03:15', '2018-08-22 08:03:15'),
(4, 'CS', 'COMPUTER SCIENCE', 1, '2018-08-22 08:03:15', '2018-08-22 08:03:15'),
(5, 'HIS', 'HEALTH INFORMATION SYSTEM', 1, '2018-08-22 08:03:15', '2018-08-22 08:03:15');

-- --------------------------------------------------------

--
-- Stand-in structure for view `faculty_views`
-- (See below for the actual view)
--
CREATE TABLE `faculty_views` (
`id` int(10) unsigned
,`faculty_code` varchar(190)
,`faculty_name` varchar(190)
,`name` varchar(190)
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_08_08_091200_create_occupations_table', 1),
(3, '2018_08_08_091359_create_universities_table', 1),
(4, '2018_08_08_091360_create_users_table', 1),
(5, '2018_08_08_091415_create_courses_table', 1),
(6, '2018_08_08_091430_create_faculties_table', 1),
(7, '2018_08_08_091449_create_university_students_table', 1),
(8, '2018_08_08_091510_create_course_results_table', 1),
(9, '2018_08_08_091527_create_payments_table', 1),
(10, '2018_08_22_112854_create_faculty_views_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE `occupations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation_code` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `occupations`
--

INSERT INTO `occupations` (`id`, `name`, `occupation_code`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', '5', '2018-08-22 08:03:32', '2018-08-22 08:03:32'),
(2, 'uadmin', '4', '2018-08-22 08:03:32', '2018-08-22 08:03:32'),
(3, 'user', '1', '2018-08-22 08:03:32', '2018-08-22 08:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference_number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'University Of Dodoma', '2018-08-22 08:03:50', '2018-08-22 08:03:50'),
(2, 'University Of Daresalaam', '2018-08-22 08:03:50', '2018-08-22 08:03:50'),
(3, 'Sokoine University Of Agriculture', '2018-08-22 08:03:50', '2018-08-22 08:03:50'),
(4, 'Saint Augustine University', '2018-08-22 08:03:50', '2018-08-22 08:03:50'),
(5, 'Saint Joseph University', '2018-08-22 08:03:50', '2018-08-22 08:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `university_students`
--

CREATE TABLE `university_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `citizenship` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_admitted` year(4) NOT NULL,
  `year_completed` year(4) NOT NULL,
  `index_number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_4_index_number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_6_index_number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diploma_index_number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree_programme` int(10) UNSIGNED DEFAULT NULL,
  `score` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` double(8,2) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `university_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university_students`
--

INSERT INTO `university_students` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `birth_date`, `citizenship`, `year_admitted`, `year_completed`, `index_number`, `form_4_index_number`, `form_6_index_number`, `diploma_index_number`, `degree_programme`, `score`, `gpa`, `user_id`, `university_id`, `created_at`, `updated_at`) VALUES
(1, 'michael', '', 'peter', 'M', '1980-11-21', 'Tanzanian', 2014, 2018, 'T/UDOM/2014/03012', 'S1010.0055', 'S0936.0665', '', 1, '', 3.20, 2, 1, '2018-08-22 08:04:03', '2018-08-22 08:04:03'),
(2, 'Clement', '', 'Mminje', 'M', '0000-00-00', 'Tanzanian', 2014, 2018, 'T/UDOM/2014/02981', 'S.1223.122', 'S.1902.1231', '', 1, '', 3.00, 2, 1, '2018-08-22 08:04:03', '2018-08-22 08:04:03'),
(3, 'AL-AMIN', 'H', 'MSANGI', 'M', '0000-00-00', 'Tanzanian', 2014, 2018, 'T/UDOM/2014/02990', 'S.1223.123', 'S.1902.1232', '', 1, '', 2.80, 2, 1, '2018-08-22 08:04:03', '2018-08-22 08:04:03'),
(4, 'DOUGLAS', '', 'GASPER', 'M', '0000-00-00', 'Tanzanian', 2014, 2018, 'T/UDOM/2014/02996', 'S.1223.124', 'S.1902.1233', '', 1, '', 3.00, 2, 1, '2018-08-22 08:04:03', '2018-08-22 08:04:03'),
(5, 'HATIBU', '', 'MUNGIA', 'M', '0000-00-00', 'Tanzanian', 2014, 2018, 'T/UDOM/2014/03000', 'S.1223.125', 'S.1902.1234', '', 1, '', 3.00, 2, 1, '2018-08-22 08:04:03', '2018-08-22 08:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` int(10) UNSIGNED DEFAULT NULL,
  `university_id` int(10) UNSIGNED DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `occupation`, `university_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@tcu.com', 1, NULL, '$2y$10$s6RJT5.7H2CVS2tvQhC9KujUk74l8c.SFC1md0/j7pkD9KB2YtDcG', 'gU16uFUtcA1fshavVYIZaEAOyrRvdYqEnO3YOE5DsBSbTvttd8lqh0q3UEiI', '2018-08-22 08:04:17', '2018-08-22 08:04:17'),
(2, 'nascent', 'nascent@gmail.com', 2, 1, '$2y$10$Ht7NrlUasuEsBg/13T.8bO4IVtDmAYhLLQp9LNRGtGSQ8Y5cG47TS', '2MZuDWJUICBKfAKrazjmHIL9mq037OWqoXrBCXlUuDWy7jFtRaIV6wBp8xPy', '2018-08-22 08:04:17', '2018-08-22 08:04:17'),
(3, 'mick', 'mick@gmail.com', 3, NULL, '$2y$10$STc.SQJ0x/fLTa5dNpJKw.LGYAAjCXvB4mcyFxKF5O6JgZgVIJ7jm', 'F4I1RxAjjJsPrFs4n4qoqIhe8wMWEhE1naYz557ssUiBHyhXUUhvT7zYm7AR', '2018-08-22 08:04:17', '2018-08-22 08:04:17');

-- --------------------------------------------------------

--
-- Structure for view `faculty_views`
--
DROP TABLE IF EXISTS `faculty_views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `faculty_views`  AS  select `faculties`.`id` AS `id`,`faculties`.`faculty_code` AS `faculty_code`,`faculties`.`faculty_name` AS `faculty_name`,`universities`.`name` AS `name` from (`faculties` join `universities`) where (`faculties`.`university_id` = `universities`.`id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_code_unique` (`course_code`),
  ADD KEY `courses_university_id_index` (`university_id`);

--
-- Indexes for table `course_results`
--
ALTER TABLE `course_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_results_course_id_index` (`course_id`),
  ADD KEY `course_results_university_student_id_index` (`university_student_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculties_university_id_index` (`university_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupations`
--
ALTER TABLE `occupations`
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
  ADD KEY `payments_user_id_index` (`user_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_students`
--
ALTER TABLE `university_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_students_degree_programme_index` (`degree_programme`),
  ADD KEY `university_students_user_id_index` (`user_id`),
  ADD KEY `university_students_university_id_index` (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_occupation_index` (`occupation`),
  ADD KEY `users_university_id_index` (`university_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `course_results`
--
ALTER TABLE `course_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `occupations`
--
ALTER TABLE `occupations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `university_students`
--
ALTER TABLE `university_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_results`
--
ALTER TABLE `course_results`
  ADD CONSTRAINT `course_results_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_results_university_student_id_foreign` FOREIGN KEY (`university_student_id`) REFERENCES `university_students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `university_students`
--
ALTER TABLE `university_students`
  ADD CONSTRAINT `university_students_degree_programme_foreign` FOREIGN KEY (`degree_programme`) REFERENCES `faculties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `university_students_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `university_students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_occupation_foreign` FOREIGN KEY (`occupation`) REFERENCES `occupations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
