-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2025 at 09:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farhanlogistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('super_admin','admin','manager') COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `status` enum('active','inactive','suspended') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `email`, `full_name`, `role`, `status`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$EBjjg2yiterYkBEkfK6TqOcgtZ1hdj5urTy25.cSfdkcolyc.5ZH2', 'admin@farhanlogistics.com', 'System Administrator', 'super_admin', 'active', '2025-12-24 19:21:39', '2025-12-23 18:31:59', '2025-12-24 19:21:39'),
(2, 'jsiyum', '$2y$12$rllYPUBcOOUAPKMGo7wsZuzoLjLgIz7CB91KA7YKapuDg5aLunfI2', 'jubairsiyum@gmail.com', 'Jubair Amin Siyum', 'admin', 'active', '2025-12-23 20:05:31', '2025-12-23 20:05:09', '2025-12-23 20:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `career_applications`
--

CREATE TABLE `career_applications` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_years` int DEFAULT NULL,
  `current_company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_letter` text COLLATE utf8mb4_unicode_ci,
  `resume_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('received','reviewing','shortlisted','interviewed','offered','rejected') COLLATE utf8mb4_unicode_ci DEFAULT 'received',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('new','read','replied','archived') COLLATE utf8mb4_unicode_ci DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `phone`, `company`, `subject`, `message`, `ip_address`, `user_agent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eagan Kim', 'cusagebazo@mailinator.com', '+1 (674) 872-3847', 'Lambert and Bates Inc', 'Rerum culpa corpori', 'Aut ut et consectetu', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'new', '2025-12-23 19:22:13', '2025-12-23 19:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_type` enum('full_time','part_time','contract','internship') COLLATE utf8mb4_unicode_ci DEFAULT 'full_time',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibilities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_range` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_required` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','closed','draft') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `posted_by` int UNSIGNED DEFAULT NULL,
  `applications_count` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','unsubscribed') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `unsubscribed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote_requests`
--

CREATE TABLE `quote_requests` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipment_date` date DEFAULT NULL,
  `additional_details` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','quoted','accepted','rejected','completed') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quote_requests`
--

INSERT INTO `quote_requests` (`id`, `name`, `email`, `phone`, `company`, `service_type`, `cargo_type`, `origin`, `destination`, `weight`, `dimensions`, `shipment_date`, `additional_details`, `ip_address`, `user_agent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jessamine Reilly', 'mypa@mailinator.com', '+1 (221) 718-8152', 'Mejia Finch Co', 'air_freight', 'Dicta occaecat volup', 'Quod pariatur Dolor', 'Est aliqua Eu dolor', 'Esse quia aut velit', 'Pariatur Eum et ut', '2025-12-23', 'Ut quis ut non maxim', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'pending', '2025-12-23 19:05:19', '2025-12-23 19:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_tracking`
--

CREATE TABLE `shipment_tracking` (
  `id` int UNSIGNED NOT NULL,
  `tracking_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` enum('air','sea','road') COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_status` enum('pending','collected','in_transit','customs','out_for_delivery','delivered') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `current_location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_delivery` date DEFAULT NULL,
  `actual_delivery` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment_tracking`
--

INSERT INTO `shipment_tracking` (`id`, `tracking_number`, `customer_name`, `customer_email`, `origin`, `destination`, `service_type`, `current_status`, `current_location`, `estimated_delivery`, `actual_delivery`, `created_at`, `updated_at`) VALUES
(7, 'FL1222121', 'Jubair Amin Siyum', 'jubairsiyum@gmail.com', 'Dhaka, BD', 'London, UK', 'sea', 'collected', 'Dhaka,BD', '2026-01-24', NULL, '2025-12-23 19:24:43', '2025-12-23 19:24:43'),
(8, 'FL8173004622', 'Kasper Fuller', 'gegi@mailinator.com', 'Voluptate sint est d', 'Officia corporis ven', 'sea', 'customs', 'Velit fugiat nisi di', '1982-12-09', NULL, '2025-12-23 19:36:39', '2025-12-23 19:38:33'),
(9, 'FL6042663490', 'Nichole Benton', 'vedekobose@mailinator.com', 'Aliquam mollitia est', 'Ut ad aliquip evenie', 'road', 'pending', 'Quis dolorum minus a', '2026-06-12', NULL, '2025-12-23 19:46:36', '2025-12-23 19:46:36'),
(10, 'FL1234567890', 'John Doe', 'john@example.com', 'Dubai, UAE', 'London, UK', 'air', 'in_transit', 'Dubai International Airport', '2025-12-25', NULL, '2025-12-23 19:48:59', '2025-12-23 19:48:59'),
(11, 'FL9876543210', 'Jane Smith', 'jane@example.com', 'Shanghai, China', 'New York, USA', 'sea', 'customs', 'New York Port', '2026-01-15', NULL, '2025-12-23 19:48:59', '2025-12-23 19:48:59'),
(12, 'FL4567891234', 'Ahmed Hassan', 'ahmed@example.com', 'Riyadh, Saudi Arabia', 'Dubai, UAE', 'road', 'out_for_delivery', 'Dubai Logistics Hub', '2025-12-20', NULL, '2025-12-23 19:48:59', '2025-12-23 19:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_events`
--

CREATE TABLE `tracking_events` (
  `id` int UNSIGNED NOT NULL,
  `tracking_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracking_events`
--

INSERT INTO `tracking_events` (`id`, `tracking_number`, `event_type`, `event_description`, `location`, `event_date`, `created_at`) VALUES
(11, 'FL1222121', 'Created', 'Shipment created in system', 'Dhaka, BD', '2025-12-24 01:24:43', '2025-12-23 19:24:43'),
(12, 'FL8173004622', 'Created', 'Shipment created in system', 'Voluptate sint est d', '2025-12-24 01:36:39', '2025-12-23 19:36:39'),
(13, 'FL8173004622', 'customs', 'Dolor omnis sed Nam', 'Velit fugiat nisi di', '2025-12-24 01:38:33', '2025-12-23 19:38:33'),
(14, 'FL6042663490', 'Created', 'Shipment created in system', 'Aliquam mollitia est', '2025-12-24 01:46:36', '2025-12-23 19:46:36'),
(15, 'FL1234567890', 'Created', 'Shipment created in system', 'Dubai, UAE', '2025-12-15 08:00:00', '2025-12-23 19:48:59'),
(16, 'FL1234567890', 'Collected', 'Shipment collected from sender', 'Dubai, UAE', '2025-12-15 09:00:00', '2025-12-23 19:48:59'),
(17, 'FL1234567890', 'In Transit', 'Departed from Dubai International Airport', 'Dubai International Airport', '2025-12-15 14:30:00', '2025-12-23 19:48:59'),
(18, 'FL1234567890', 'In Transit', 'Arrived at transit hub', 'Frankfurt Airport', '2025-12-16 02:00:00', '2025-12-23 19:48:59'),
(19, 'FL1234567890', 'In Transit', 'Departed from Frankfurt', 'Frankfurt Airport', '2025-12-16 12:00:00', '2025-12-23 19:48:59'),
(20, 'FL9876543210', 'Created', 'Shipment created in system', 'Shanghai, China', '2025-11-20 09:00:00', '2025-12-23 19:48:59'),
(21, 'FL9876543210', 'Collected', 'Container loaded at origin port', 'Shanghai Port', '2025-11-20 10:00:00', '2025-12-23 19:48:59'),
(22, 'FL9876543210', 'In Transit', 'Vessel departed from Shanghai', 'Shanghai Port', '2025-11-22 08:00:00', '2025-12-23 19:48:59'),
(23, 'FL9876543210', 'In Transit', 'Vessel in transit', 'Pacific Ocean', '2025-12-01 00:00:00', '2025-12-23 19:48:59'),
(24, 'FL9876543210', 'Arrived', 'Vessel arrived at destination port', 'New York Port', '2025-12-15 10:00:00', '2025-12-23 19:48:59'),
(25, 'FL9876543210', 'Customs', 'Container under customs clearance', 'New York Port', '2025-12-15 16:00:00', '2025-12-23 19:48:59'),
(26, 'FL4567891234', 'Created', 'Shipment created in system', 'Riyadh, Saudi Arabia', '2025-12-18 07:00:00', '2025-12-23 19:48:59'),
(27, 'FL4567891234', 'Collected', 'Picked up from sender location', 'Riyadh, Saudi Arabia', '2025-12-18 10:00:00', '2025-12-23 19:48:59'),
(28, 'FL4567891234', 'In Transit', 'Truck departed from Riyadh', 'Riyadh Border Checkpoint', '2025-12-18 15:00:00', '2025-12-23 19:48:59'),
(29, 'FL4567891234', 'In Transit', 'Crossed Saudi-UAE border', 'Abu Dhabi Border', '2025-12-19 08:00:00', '2025-12-23 19:48:59'),
(30, 'FL4567891234', 'Arrived', 'Arrived at Dubai Logistics Hub', 'Dubai Logistics Hub', '2025-12-19 14:00:00', '2025-12-23 19:48:59'),
(31, 'FL4567891234', 'Out For Delivery', 'Package out for final delivery', 'Dubai Logistics Hub', '2025-12-20 08:00:00', '2025-12-23 19:48:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uk_username` (`username`),
  ADD UNIQUE KEY `uk_email` (`email`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `career_applications`
--
ALTER TABLE `career_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_position` (`position`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_department` (`department`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uk_email` (`email`),
  ADD KEY `idx_status` (`status`);

--
-- Indexes for table `quote_requests`
--
ALTER TABLE `quote_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_service` (`service_type`),
  ADD KEY `idx_email` (`email`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `shipment_tracking`
--
ALTER TABLE `shipment_tracking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracking_number` (`tracking_number`),
  ADD UNIQUE KEY `uk_tracking` (`tracking_number`),
  ADD KEY `idx_status` (`current_status`),
  ADD KEY `idx_email` (`customer_email`),
  ADD KEY `idx_created` (`created_at`);

--
-- Indexes for table `tracking_events`
--
ALTER TABLE `tracking_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_tracking` (`tracking_number`),
  ADD KEY `idx_date` (`event_date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career_applications`
--
ALTER TABLE `career_applications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_postings`
--
ALTER TABLE `job_postings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quote_requests`
--
ALTER TABLE `quote_requests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipment_tracking`
--
ALTER TABLE `shipment_tracking`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tracking_events`
--
ALTER TABLE `tracking_events`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
