<?php
/**
 * Database Migration Script
 * Run this to create all required tables
 * Access via: /config/migrate.php
 */

// Include database configuration
require_once __DIR__ . '/db.php';

// Set response type
header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Migration - Farhan Logistics</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2f338d 0%, #ec2025 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #2f338d 0%, #1e2256 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .content {
            padding: 30px;
        }
        .step {
            background: #f8f9fa;
            padding: 20px;
            margin: 15px 0;
            border-radius: 10px;
            border-left: 4px solid #2f338d;
        }
        .success {
            background: #d4edda;
            border-left-color: #28a745;
            color: #155724;
        }
        .error {
            background: #f8d7da;
            border-left-color: #dc3545;
            color: #721c24;
        }
        .warning {
            background: #fff3cd;
            border-left-color: #ffc107;
            color: #856404;
        }
        .info {
            background: #d1ecf1;
            border-left-color: #17a2b8;
            color: #0c5460;
        }
        .icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }
        h2 {
            color: #2f338d;
            margin: 20px 0 15px 0;
            font-size: 1.5rem;
        }
        h3 {
            color: #2f338d;
            margin: 15px 0 10px 0;
        }
        pre {
            background: #1e1e1e;
            color: #00ff00;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            font-size: 0.85rem;
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #ec2025, #c91d22);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin: 10px 5px;
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(236,32,37,0.4);
        }
        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #5a6268);
        }
        ul {
            margin: 10px 0;
            padding-left: 30px;
        }
        li {
            margin: 8px 0;
            line-height: 1.6;
        }
        code {
            background: #f8f9fa;
            padding: 2px 6px;
            border-radius: 4px;
            color: #ec2025;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 Database Migration</h1>
            <p>Farhan Logistics International Ltd.</p>
        </div>
        <div class="content">

<?php

$migration_log = [];
$has_errors = false;

try {
    // Test database connection
    $migration_log[] = ['type' => 'info', 'message' => 'Testing database connection...'];
    
    if (!isset($pdo)) {
        throw new Exception('PDO connection not established. Check config/db.php configuration.');
    }
    
    // Test the connection
    $pdo->query('SELECT 1');
    $migration_log[] = ['type' => 'success', 'message' => '✓ Database connection successful!'];
    
    // Get database name
    $db_name = $pdo->query('SELECT DATABASE()')->fetchColumn();
    $migration_log[] = ['type' => 'info', 'message' => "Connected to database: <code>$db_name</code>"];
    
    // Create tables
    $migration_log[] = ['type' => 'info', 'message' => 'Creating database tables...'];
    
    // 1. Contact Submissions Table
    $sql = "CREATE TABLE IF NOT EXISTS `contact_submissions` (
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>contact_submissions</code> created'];
    
    // 2. Quote Requests Table
    $sql = "CREATE TABLE IF NOT EXISTS `quote_requests` (
        `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `phone` VARCHAR(20) NOT NULL,
        `company` VARCHAR(100) DEFAULT NULL,
        `service_type` VARCHAR(100) NOT NULL,
        `cargo_type` VARCHAR(100) DEFAULT NULL,
        `origin` VARCHAR(100) NOT NULL,
        `destination` VARCHAR(100) NOT NULL,
        `weight` VARCHAR(50) DEFAULT NULL,
        `dimensions` VARCHAR(100) DEFAULT NULL,
        `shipment_date` DATE DEFAULT NULL,
        `additional_details` TEXT DEFAULT NULL,
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>quote_requests</code> created'];
    
    // 3. Career Applications Table
    $sql = "CREATE TABLE IF NOT EXISTS `career_applications` (
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
        `resume_path` VARCHAR(255) DEFAULT NULL,
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>career_applications</code> created'];
    
    // 4. Shipment Tracking Table
    $sql = "CREATE TABLE IF NOT EXISTS `shipment_tracking` (
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>shipment_tracking</code> created'];
    
    // 5. Tracking Events Table
    $sql = "CREATE TABLE IF NOT EXISTS `tracking_events` (
        `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `tracking_number` VARCHAR(50) NOT NULL,
        `event_type` VARCHAR(50) NOT NULL,
        `event_description` TEXT NOT NULL,
        `location` VARCHAR(100) DEFAULT NULL,
        `event_date` DATETIME NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        INDEX `idx_tracking` (`tracking_number`),
        INDEX `idx_date` (`event_date`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>tracking_events</code> created'];
    
    // 6. Newsletter Subscribers Table
    $sql = "CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>newsletter_subscribers</code> created'];
    
    // 7. Admin Users Table
    $sql = "CREATE TABLE IF NOT EXISTS `admin_users` (
        `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(50) UNIQUE NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        `email` VARCHAR(100) UNIQUE NOT NULL,
        `full_name` VARCHAR(100) NOT NULL,
        `role` ENUM('super_admin', 'admin', 'manager') DEFAULT 'admin',
        `status` ENUM('active', 'inactive', 'suspended') DEFAULT 'active',
        `last_login` TIMESTAMP NULL DEFAULT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        UNIQUE KEY `uk_username` (`username`),
        UNIQUE KEY `uk_email` (`email`),
        INDEX `idx_status` (`status`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>admin_users</code> created'];
    
    // 8. Job Postings Table
    $sql = "CREATE TABLE IF NOT EXISTS `job_postings` (
        `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(200) NOT NULL,
        `department` VARCHAR(100) NOT NULL,
        `location` VARCHAR(100) NOT NULL,
        `employment_type` ENUM('full_time', 'part_time', 'contract', 'internship') DEFAULT 'full_time',
        `description` TEXT NOT NULL,
        `responsibilities` TEXT NOT NULL,
        `requirements` TEXT NOT NULL,
        `salary_range` VARCHAR(100) DEFAULT NULL,
        `experience_required` VARCHAR(50) DEFAULT NULL,
        `status` ENUM('active', 'closed', 'draft') DEFAULT 'active',
        `posted_by` INT(11) UNSIGNED DEFAULT NULL,
        `applications_count` INT(11) DEFAULT 0,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        INDEX `idx_status` (`status`),
        INDEX `idx_department` (`department`),
        INDEX `idx_created` (`created_at`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Table <code>job_postings</code> created'];
    
    // Insert sample tracking data
    $migration_log[] = ['type' => 'info', 'message' => 'Inserting sample tracking data...'];
    
    $sql = "INSERT IGNORE INTO `shipment_tracking` (`tracking_number`, `customer_name`, `customer_email`, `origin`, `destination`, `service_type`, `current_status`, `current_location`, `estimated_delivery`) VALUES
    ('FL123456789', 'John Doe', 'john@example.com', 'Dubai, UAE', 'London, UK', 'air', 'in_transit', 'Dubai International Airport', '2025-12-28'),
    ('FL987654321', 'Jane Smith', 'jane@example.com', 'Shanghai, China', 'New York, USA', 'sea', 'customs', 'New York Port', '2026-01-15'),
    ('FL456789123', 'Ahmed Hassan', 'ahmed@example.com', 'Riyadh, Saudi Arabia', 'Dubai, UAE', 'road', 'out_for_delivery', 'Dubai Logistics Hub', '2025-12-25')";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Sample shipment data inserted'];
    
    // Insert sample tracking events
    $sql = "INSERT IGNORE INTO `tracking_events` (`tracking_number`, `event_type`, `event_description`, `location`, `event_date`) VALUES
    ('FL123456789', 'Collected', 'Shipment collected from sender', 'Dubai, UAE', '2025-12-20 09:00:00'),
    ('FL123456789', 'In Transit', 'Departed from Dubai International Airport', 'Dubai International Airport', '2025-12-20 14:30:00'),
    ('FL987654321', 'Collected', 'Container loaded at origin port', 'Shanghai Port', '2025-11-20 10:00:00'),
    ('FL987654321', 'In Transit', 'Vessel departed', 'Shanghai Port', '2025-11-22 08:00:00'),
    ('FL987654321', 'Customs', 'Arrived and under customs clearance', 'New York Port', '2025-12-20 16:00:00')";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Sample tracking events inserted'];
    
    // Insert default admin user with secure password
    $migration_log[] = ['type' => 'info', 'message' => 'Creating default admin user...'];
    $admin_password = password_hash('Farhan@2024!', PASSWORD_BCRYPT, ['cost' => 12]);
    
    $sql = "INSERT IGNORE INTO `admin_users` (`username`, `password`, `email`, `full_name`, `role`, `status`) VALUES
    ('admin', ?, 'admin@farhanlogistics.com', 'System Administrator', 'super_admin', 'active')";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$admin_password]);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Default admin user created (username: <code>admin</code>, password: <code>Farhan@2024!</code>)'];
    
    // Insert sample job postings
    $migration_log[] = ['type' => 'info', 'message' => 'Creating sample job postings...'];
    
    $sql = "INSERT IGNORE INTO `job_postings` (`title`, `department`, `location`, `employment_type`, `description`, `responsibilities`, `requirements`, `salary_range`, `experience_required`, `status`) VALUES
    ('Operations Manager', 'Operations', 'Dubai, UAE', 'full_time', 
     'Lead our operations team to ensure smooth logistics operations and exceptional customer service delivery.',
     '• Oversee daily operations and logistics activities\n• Manage team of operations staff\n• Ensure compliance with regulations\n• Optimize operational processes\n• Monitor KPIs and performance metrics',
     '• 5+ years experience in logistics operations\n• Strong leadership and team management skills\n• Knowledge of customs and shipping regulations\n• Excellent problem-solving abilities\n• Bachelor''s degree in Business or related field',
     'AED 15,000 - 20,000/month', '5+ years', 'active'),
    
    ('Sales Executive', 'Sales', 'Dubai, UAE', 'full_time',
     'Drive business growth by acquiring new clients and maintaining strong relationships with existing customers.',
     '• Develop and execute sales strategies\n• Build and maintain client relationships\n• Prepare quotes and proposals\n• Meet and exceed sales targets\n• Attend industry events and networking',
     '• 3+ years B2B sales experience\n• Excellent communication skills\n• Understanding of logistics industry\n• Proven track record in sales\n• Valid UAE driving license',
     'AED 8,000 - 12,000 + Commission', '3+ years', 'active'),
    
    ('Customs Clearance Specialist', 'Customs', 'Dubai, UAE', 'full_time',
     'Handle customs clearance processes and ensure compliance with international trade regulations.',
     '• Process customs documentation\n• Liaise with customs authorities\n• Ensure regulatory compliance\n• Handle import/export procedures\n• Resolve customs-related issues',
     '• 2+ years customs clearance experience\n• Knowledge of UAE customs regulations\n• Strong attention to detail\n• Excellent documentation skills\n• Proficiency in customs software',
     'AED 6,000 - 9,000/month', '2+ years', 'active'),
    
    ('Customer Service Representative', 'Customer Service', 'Dubai, UAE', 'full_time',
     'Provide exceptional customer support and handle inquiries related to shipments and logistics services.',
     '• Handle customer inquiries via phone and email\n• Track and update shipment information\n• Resolve customer complaints\n• Maintain customer records\n• Provide quotations and information',
     '• 1-2li>✓ admin_users</li>";
    echo "<li>✓ job_postings</li>";
    echo "</ul>";
    
    echo "<div class='step warning' style='margin-top:20px;'>";
    echo "<h3>🔐 Default Admin Credentials</h3>";
    echo "<p><strong>Username:</strong> <code>admin</code></p>";
    echo "<p><strong>Password:</strong> <code>Farhan@2024!</code></p>";
    echo "<p style='color:#ec2025; font-weight:600; margin-top:10px;'>⚠️ IMPORTANT: Change this password immediately after first login!</p>";
    echo "</divars customer service experience\n• Excellent English communication (Arabic is a plus)\n• Strong problem-solving skills\n• Computer proficiency\n• Friendly and professional demeanor',
     'AED 4,000 - 6,000/month', '1-2 years', 'active')";
    
    $pdo->exec($sql);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Sample job postings created'];
    
    // Verify tables
    $migration_log[] = ['type' => 'info', 'message' => 'Verifying tables...'];
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    $migration_log[] = ['type' => 'success', 'message' => '✓ Found ' . count($tables) . ' tables in database'];
    
} catch (PDOException $e) {
    $has_errors = true;
    $migration_log[] = ['type' => 'error', 'message' => '✗ Database Error: ' . $e->getMessage()];
} catch (Exception $e) {
    $has_errors = true;
    $migration_log[] = ['type' => 'error', 'message' => '✗ Error: ' . $e->getMessage()];
}

// Display results
foreach ($migration_log as $log) {
    $type = $log['type'];
    $message = $log['message'];
    $icon = $type === 'success' ? '✓' : ($type === 'error' ? '✗' : ($type === 'warning' ? '⚠' : 'ℹ'));
    
    echo "<div class='step {$type}'>";
    echo "<span class='icon'>{$icon}</span>";
    echo $message;
    echo "</div>";
}

if (!$has_errors) {
    echo "<h2>🎉 Migration Completed Successfully!</h2>";
    echo "<div class='step success'>";
    echo "<h3>All database tables are ready!</h3>";
    echo "<ul>";
    echo "<li>✓ contact_submissions</li>";
    echo "<li>✓ quote_requests</li>";
    echo "<li>✓ career_applications</li>";
    echo "<li>✓ shipment_tracking</li>";
    echo "<li>✓ tracking_events</li>";
    echo "<li>✓ newsletter_subscribers</li>";
    echo "</ul>";
    echo "</div>";
    
    echo "<h2>📋 Next Steps</h2>";
    echo "<div class='step info'>";
    echo "<ol>";
    echo "<li>Test the website forms (Quote, Contact, Careers)</li>";
    echo "<li>Login to admin panel at <a href='/admin/' style='color:#ec2025; font-weight:600;'>/admin/</a></li>";
    echo "<li>Default admin credentials: <code>admin</code> / <code>farhan@2024</code></li>";
    echo "<li><strong style='color:#ec2025;'>IMPORTANT: Delete this file (migrate.php) for security!</strong></li>";
    echo "</ol>";
    echo "</div>";
    
    echo "<div style='text-align:center; margin-top:30px;'>";
    echo "<a href='/admin/' class='btn'>Go to Admin Panel</a>";
    echo "<a href='/' class='btn btn-secondary'>Go to Website</a>";
    echo "</div>";
} else {
    echo "<h2>❌ Migration Failed</h2>";
    echo "<div class='step error'>";
    echo "<h3>Please fix the errors above and try again.</h3>";
    echo "<p><strong>Common issues:</strong></p>";
    echo "<ul>";
    echo "<li>Database credentials are incorrect in <code>config/db.php</code></li>";
    echo "<li>Database does not exist - create it in phpMyAdmin or cPanel</li>";
    echo "<li>User does not have sufficient permissions</li>";
    echo "</ul>";
    echo "</div>";
    
    echo "<div style='text-align:center; margin-top:30px;'>";
    echo "<a href='javascript:location.reload()' class='btn'>Retry Migration</a>";
    echo "</div>";
}

?>

            <div style="text-align:center; margin-top:40px; padding-top:30px; border-top:2px solid #e9ecef; color:#6c757d;">
                <small>Farhan Logistics International Ltd. &copy; 2025</small>
            </div>
        </div>
    </div>
</body>
</html>
