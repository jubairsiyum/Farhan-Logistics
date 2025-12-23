<?php
/**
 * Database Setup Script
 * Run this file ONCE to create all required database tables
 * Access via: /config/setup_database.php
 * 
 * IMPORTANT: Delete this file after running it successfully!
 */

require_once 'db.php';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Database Setup - Farhan Logistics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2f338d;
            border-bottom: 3px solid #ec2025;
            padding-bottom: 10px;
        }
        .success {
            color: #28a745;
            padding: 10px;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin: 10px 0;
        }
        .error {
            color: #dc3545;
            padding: 10px;
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin: 10px 0;
        }
        .warning {
            color: #856404;
            padding: 10px;
            background: #fff3cd;
            border: 1px solid #ffeeba;
            border-radius: 5px;
            margin: 10px 0;
        }
        pre {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>🚀 Database Setup - Farhan Logistics</h1>
        <p><strong>This script will create all required database tables.</strong></p>
";

try {
    // Read SQL file
    $sql_file = __DIR__ . '/database_schema.sql';
    
    if (!file_exists($sql_file)) {
        throw new Exception("database_schema.sql file not found!");
    }
    
    $sql_content = file_get_contents($sql_file);
    
    // Split SQL commands
    $sql_commands = array_filter(
        array_map('trim', explode(';', $sql_content)),
        function($cmd) {
            // Remove comments and empty lines
            $cmd = preg_replace('/^--.*$/m', '', $cmd);
            $cmd = preg_replace('/^\s*$/m', '', $cmd);
            return !empty(trim($cmd));
        }
    );
    
    echo "<h2>📋 Executing SQL Commands...</h2>";
    
    $success_count = 0;
    $error_count = 0;
    
    foreach ($sql_commands as $sql) {
        $sql = trim($sql);
        
        // Skip comments and empty commands
        if (empty($sql) || strpos($sql, '--') === 0 || strpos($sql, '/*') === 0) {
            continue;
        }
        
        try {
            $pdo->exec($sql);
            
            // Extract table name for display
            if (preg_match('/CREATE TABLE.*?`(\w+)`/i', $sql, $matches)) {
                echo "<div class='success'>✓ Created table: <strong>{$matches[1]}</strong></div>";
                $success_count++;
            } elseif (preg_match('/INSERT INTO.*?`(\w+)`/i', $sql, $matches)) {
                echo "<div class='success'>✓ Inserted sample data into: <strong>{$matches[1]}</strong></div>";
                $success_count++;
            }
        } catch (PDOException $e) {
            // If table already exists, it's not a critical error
            if (strpos($e->getMessage(), 'already exists') !== false) {
                if (preg_match('/table\s+[`\'"]?(\w+)[`\'"]?/i', $e->getMessage(), $matches)) {
                    echo "<div class='warning'>⚠ Table already exists: <strong>{$matches[1]}</strong></div>";
                }
            } else {
                echo "<div class='error'>✗ Error: " . htmlspecialchars($e->getMessage()) . "</div>";
                $error_count++;
            }
        }
    }
    
    echo "<hr>";
    echo "<h2>📊 Setup Summary</h2>";
    echo "<div class='success'>";
    echo "<strong>Successful operations:</strong> $success_count<br>";
    echo "<strong>Errors:</strong> $error_count<br>";
    echo "</div>";
    
    if ($error_count === 0) {
        echo "<div class='success'>";
        echo "<h3>✅ Database Setup Complete!</h3>";
        echo "<p>All tables have been created successfully.</p>";
        echo "<ul>";
        echo "<li>✓ contact_submissions</li>";
        echo "<li>✓ quote_requests</li>";
        echo "<li>✓ career_applications</li>";
        echo "<li>✓ shipment_tracking</li>";
        echo "<li>✓ tracking_events</li>";
        echo "<li>✓ newsletter_subscribers</li>";
        echo "</ul>";
        echo "<p><strong>Next Steps:</strong></p>";
        echo "<ol>";
        echo "<li>Test the website forms (Quote, Contact, Careers)</li>";
        echo "<li>Login to admin panel: <a href='/admin/' target='_blank'>/admin/</a></li>";
        echo "<li>Default credentials: <code>admin</code> / <code>farhan@2024</code></li>";
        echo "<li><strong style='color:#ec2025;'>DELETE THIS FILE (setup_database.php) for security!</strong></li>";
        echo "</ol>";
        echo "</div>";
    }
    
} catch (Exception $e) {
    echo "<div class='error'>";
    echo "<h3>❌ Setup Failed</h3>";
    echo "<p><strong>Error:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "</div>";
}

echo "
        <hr>
        <p style='text-align: center; color: #6c757d;'>
            <small>Farhan Logistics International Ltd. &copy; 2024</small>
        </p>
    </div>
</body>
</html>";
?>
