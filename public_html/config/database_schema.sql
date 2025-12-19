-- ========================================================================
-- FARHAN LOGISTICS - DATABASE SCHEMA
-- MySQL 5.7+ / MariaDB 10.2+
-- ========================================================================

-- ========================================================================
-- 1. CREATE DATABASE (Run this first in cPanel phpMyAdmin)
-- ========================================================================
-- CREATE DATABASE IF NOT EXISTS farhan_logistics CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- USE farhan_logistics;

-- ========================================================================
-- 2. CONTACT FORM SUBMISSIONS TABLE
-- ========================================================================
CREATE TABLE IF NOT EXISTS `contact_submissions` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20) DEFAULT NULL,
    `company` VARCHAR(100) DEFAULT NULL,
    `subject` VARCHAR(200) NOT NULL,
    `message` TEXT NOT NULL,
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `user_agent` VARCHAR(255) DEFAULT NULL,
    `status` ENUM('new', 'read', 'replied', 'archived') DEFAULT 'new',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    INDEX `idx_status` (`status`),
    INDEX `idx_email` (`email`),
    INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================================================
-- 3. QUOTE REQUESTS TABLE
-- ========================================================================
CREATE TABLE IF NOT EXISTS `quote_requests` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `company` VARCHAR(100) DEFAULT NULL,
    `service_type` ENUM('air_freight', 'sea_freight_fcl', 'sea_freight_lcl', 'road_transport', 'warehousing', 'customs_clearance', 'other') NOT NULL,
    `cargo_type` VARCHAR(100) DEFAULT NULL,
    `origin` VARCHAR(100) NOT NULL,
    `destination` VARCHAR(100) NOT NULL,
    `weight` VARCHAR(50) DEFAULT NULL,
    `dimensions` VARCHAR(100) DEFAULT NULL,
    `shipment_date` DATE DEFAULT NULL,
    `additional_info` TEXT DEFAULT NULL,
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `user_agent` VARCHAR(255) DEFAULT NULL,
    `status` ENUM('pending', 'quoted', 'accepted', 'rejected', 'completed') DEFAULT 'pending',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    INDEX `idx_status` (`status`),
    INDEX `idx_service` (`service_type`),
    INDEX `idx_email` (`email`),
    INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================================================
-- 4. CAREER APPLICATIONS TABLE
-- ========================================================================
CREATE TABLE IF NOT EXISTS `career_applications` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `position` VARCHAR(100) NOT NULL,
    `experience_years` INT(2) DEFAULT NULL,
    `current_company` VARCHAR(100) DEFAULT NULL,
    `education` VARCHAR(200) DEFAULT NULL,
    `linkedin_url` VARCHAR(255) DEFAULT NULL,
    `cover_letter` TEXT DEFAULT NULL,
    `resume_filename` VARCHAR(255) DEFAULT NULL,
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `user_agent` VARCHAR(255) DEFAULT NULL,
    `status` ENUM('received', 'reviewing', 'shortlisted', 'interviewed', 'offered', 'rejected') DEFAULT 'received',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    INDEX `idx_status` (`status`),
    INDEX `idx_position` (`position`),
    INDEX `idx_email` (`email`),
    INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================================================
-- 5. SHIPMENT TRACKING TABLE (Optional - for future use)
-- ========================================================================
CREATE TABLE IF NOT EXISTS `shipment_tracking` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `tracking_number` VARCHAR(50) UNIQUE NOT NULL,
    `customer_name` VARCHAR(100) DEFAULT NULL,
    `customer_email` VARCHAR(100) DEFAULT NULL,
    `origin` VARCHAR(100) NOT NULL,
    `destination` VARCHAR(100) NOT NULL,
    `service_type` ENUM('air', 'sea', 'road') NOT NULL,
    `current_status` ENUM('pending', 'collected', 'in_transit', 'customs', 'out_for_delivery', 'delivered') DEFAULT 'pending',
    `current_location` VARCHAR(100) DEFAULT NULL,
    `estimated_delivery` DATE DEFAULT NULL,
    `actual_delivery` DATE DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_tracking` (`tracking_number`),
    INDEX `idx_status` (`current_status`),
    INDEX `idx_email` (`customer_email`),
    INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================================================
-- 6. TRACKING EVENTS TABLE (For detailed tracking history)
-- ========================================================================
CREATE TABLE IF NOT EXISTS `tracking_events` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `tracking_number` VARCHAR(50) NOT NULL,
    `event_type` VARCHAR(50) NOT NULL,
    `event_description` TEXT NOT NULL,
    `location` VARCHAR(100) DEFAULT NULL,
    `event_date` DATETIME NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    INDEX `idx_tracking` (`tracking_number`),
    INDEX `idx_date` (`event_date`),
    FOREIGN KEY (`tracking_number`) REFERENCES `shipment_tracking`(`tracking_number`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================================================
-- 7. NEWSLETTER SUBSCRIBERS TABLE (Optional)
-- ========================================================================
CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(100) UNIQUE NOT NULL,
    `name` VARCHAR(100) DEFAULT NULL,
    `status` ENUM('active', 'unsubscribed') DEFAULT 'active',
    `ip_address` VARCHAR(45) DEFAULT NULL,
    `subscribed_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `unsubscribed_at` TIMESTAMP NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `uk_email` (`email`),
    INDEX `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ========================================================================
-- 8. INSERT SAMPLE TRACKING DATA (For Testing)
-- ========================================================================
INSERT INTO `shipment_tracking` (`tracking_number`, `customer_name`, `customer_email`, `origin`, `destination`, `service_type`, `current_status`, `current_location`, `estimated_delivery`) VALUES
('FL123456789', 'John Doe', 'john@example.com', 'Dubai, UAE', 'London, UK', 'air', 'in_transit', 'Dubai International Airport', '2025-12-25'),
('FL987654321', 'Jane Smith', 'jane@example.com', 'Shanghai, China', 'New York, USA', 'sea', 'customs', 'New York Port', '2026-01-15'),
('FL456789123', 'Ahmed Hassan', 'ahmed@example.com', 'Riyadh, Saudi Arabia', 'Dubai, UAE', 'road', 'out_for_delivery', 'Dubai Logistics Hub', '2025-12-20');

-- Insert sample tracking events
INSERT INTO `tracking_events` (`tracking_number`, `event_type`, `event_description`, `location`, `event_date`) VALUES
('FL123456789', 'Collected', 'Shipment collected from sender', 'Dubai, UAE', '2025-12-15 09:00:00'),
('FL123456789', 'In Transit', 'Departed from Dubai International Airport', 'Dubai International Airport', '2025-12-15 14:30:00'),
('FL123456789', 'In Transit', 'Arrived at transit hub', 'Frankfurt Airport', '2025-12-16 02:00:00'),
('FL987654321', 'Collected', 'Container loaded at origin port', 'Shanghai Port', '2025-11-20 10:00:00'),
('FL987654321', 'In Transit', 'Vessel departed', 'Shanghai Port', '2025-11-22 08:00:00'),
('FL987654321', 'Customs', 'Arrived and under customs clearance', 'New York Port', '2025-12-15 16:00:00');

-- ========================================================================
-- SETUP COMPLETE
-- ========================================================================
-- All tables created successfully!
-- Remember to update config/db.php with your actual database credentials.
-- ========================================================================
