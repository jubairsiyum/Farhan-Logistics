<?php
// Start session with the same configuration as security.php
ini_set('session.cookie_httponly', '1');
ini_set('session.use_only_cookies', '1');
ini_set('session.cookie_secure', '0');
if (PHP_VERSION_ID >= 70300) {
    ini_set('session.cookie_samesite', 'Lax');
}
session_name('FARHAN_LOGISTICS_SESSION');
session_start();

// Log the logout event
if (isset($_SESSION['admin_username'])) {
    $logDir = __DIR__ . '/../storage/logs';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    $logFile = $logDir . '/security_' . date('Y-m-d') . '.log';
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = sprintf(
        "[%s] IP: %s | Event: admin_logout | Details: {\"username\":\"%s\"}\n",
        $timestamp,
        $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        $_SESSION['admin_username']
    );
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

// Unset all session variables
$_SESSION = array();

// Delete the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Destroy the session
session_destroy();

// Start a new session for the login page
session_name('FARHAN_LOGISTICS_SESSION');
session_start();

// Redirect to login page
header('Location: /admin/');
exit();


