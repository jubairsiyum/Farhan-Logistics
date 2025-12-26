<?php
/**
 * Database Configuration File
 * PDO MySQL Connection for Admin Panel & Frontend
 * 
 * INSTRUCTIONS FOR DEPLOYMENT:
 * 1. Create a MySQL database in cPanel
 * 2. Create a MySQL user in cPanel
 * 3. Add the user to the database with ALL PRIVILEGES
 * 4. Update the constants below with your actual credentials
 * 5. Import the database schema (see database_schema.sql)
 */

// Database Configuration Constants
define('DB_HOST', 'localhost');           // Usually 'localhost' on cPanel
define('DB_NAME', 'farhancargobd_farhanlogistics');     // Your database name (e.g., cpanel_user_farhanlogistics)
define('DB_USER', 'farhancargobd_webmaster');                // Your database username
define('DB_PASS', '&@lmd-?R~R#f${T.');                    // Your database password
define('DB_CHARSET', 'utf8mb4');          // Character set

// Error Reporting (Set to false in production)
define('DB_DEBUG', false);

// Global database connection variable
$pdo = null;
$db_connected = false;

/**
 * PDO Database Connection
 * Used by admin panel and form handlers
 */
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    $db_connected = true;
} catch (PDOException $e) {
    $errorMessage = DB_DEBUG 
        ? "Database Connection Failed: " . $e->getMessage()
        : "Database connection error. Please contact support.";
    
    // Log the error but don't die - allow page to render without database
    error_log("PDO Connection Error: " . $e->getMessage());
    $pdo = null;
    $db_connected = false;
}

/**
 * Legacy mysqli Connection (for backward compatibility)
 * 
 * @return mysqli|false Database connection object or false on failure
 */
function getDatabaseConnection() {
    // Suppress warnings if DB_DEBUG is false
    if (!DB_DEBUG) {
        error_reporting(0);
    }
    
    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
        if (DB_DEBUG) {
            error_log("Connection failed: " . $conn->connect_error);
        }
        return false;
    }
    
    // Set charset
    if (!$conn->set_charset(DB_CHARSET)) {
        if (DB_DEBUG) {
            error_log("Error setting charset: " . $conn->error);
        }
        return false;
    }
    
    return $conn;
}

/**
 * Close Database Connection
 * 
 * @param mysqli $conn Database connection object
 */
function closeDatabaseConnection($conn) {
    if ($conn && $conn instanceof mysqli) {
        $conn->close();
    }
}

/**
 * Sanitize Input Data
 * 
 * @param string $data Input data to sanitize
 * @return string Sanitized data
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Validate Email
 * 
 * @param string $email Email address to validate
 * @return bool True if valid, false otherwise
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate Phone Number (Basic)
 * 
 * @param string $phone Phone number to validate
 * @return bool True if valid, false otherwise
 */
function validatePhone($phone) {
    $phone = preg_replace('/[^0-9+\-() ]/', '', $phone);
    return strlen($phone) >= 10;
}

/**
 * Send JSON Response
 * 
 * @param bool $success Success status
 * @param string $message Response message
 * @param array $data Additional data (optional)
 */
function sendJsonResponse($success, $message, $data = []) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data,
        'timestamp' => date('Y-m-d H:i:s')
    ]);
    exit;
}

/**
 * Log Error to File
 * 
 * @param string $message Error message
 * @param string $type Error type
 */
function logError($message, $type = 'ERROR') {
    if (!DB_DEBUG) return;
    
    $logFile = __DIR__ . '/../logs/error.log';
    $logDir = dirname($logFile);
    
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] [$type] $message" . PHP_EOL;
    
    @file_put_contents($logFile, $logMessage, FILE_APPEND);
}

// Test connection on first load (only in debug mode)
if (DB_DEBUG && basename($_SERVER['PHP_SELF']) === 'db.php') {
    $testConn = getDatabaseConnection();
    if ($testConn) {
        echo "Database connection successful!<br>";
        echo "Server: " . $testConn->host_info . "<br>";
        echo "Client: " . $testConn->client_info . "<br>";
        closeDatabaseConnection($testConn);
    } else {
        echo "Database connection failed!";
    }
}
?>
