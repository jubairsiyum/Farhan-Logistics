<?php
/**
 * Security Configuration & Helper Functions
 * Industry-standard security measures for Farhan Logistics
 * Protects against: XSS, CSRF, SQL Injection, Session Hijacking, etc.
 */

// ========================================================================
// 1. SESSION SECURITY
// ========================================================================

if (session_status() === PHP_SESSION_NONE) {
    // Secure session configuration
    ini_set('session.cookie_httponly', '1');      // Prevent JavaScript access to session cookie
    ini_set('session.use_only_cookies', '1');     // Only use cookies for session ID
    ini_set('session.cookie_secure', '0');        // Set to 1 when using HTTPS
    
    // SameSite cookie setting (PHP 7.3+)
    if (PHP_VERSION_ID >= 70300) {
        ini_set('session.cookie_samesite', 'Lax'); // Changed from Strict to Lax for better compatibility
    }
    
    ini_set('session.use_strict_mode', '1');      // Reject uninitialized session IDs
    
    session_name('FARHAN_LOGISTICS_SESSION');
    session_start();
}

// Regenerate session ID periodically to prevent session fixation (only if logged in)
if (session_status() === PHP_SESSION_ACTIVE) {
    if (!isset($_SESSION['created_at'])) {
        $_SESSION['created_at'] = time();
    } else if (time() - $_SESSION['created_at'] > 1800) { // 30 minutes
        session_regenerate_id(true);
        $_SESSION['created_at'] = time();
    }
}

// ========================================================================
// 2. CSRF PROTECTION
// ========================================================================

/**
 * Generate CSRF token
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF token
 */
function validateCSRFToken($token) {
    if (!isset($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
        return false;
    }
    return true;
}

/**
 * Get CSRF token input field
 */
function csrfField() {
    $token = generateCSRFToken();
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
}

// ========================================================================
// 3. XSS PROTECTION
// ========================================================================

/**
 * Sanitize output to prevent XSS
 */
function escapeHTML($string) {
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * Sanitize for use in HTML attributes
 */
function escapeAttr($string) {
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * Sanitize for JavaScript context
 */
function escapeJS($string) {
    return json_encode($string, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}

// ========================================================================
// 4. INPUT VALIDATION & SANITIZATION
// ========================================================================

/**
 * Sanitize string input
 */
function sanitizeString($input) {
    return trim(strip_tags($input));
}

/**
 * Validate and sanitize email
 */
function sanitizeEmail($email) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : false;
}

/**
 * Validate and sanitize phone number
 */
function sanitizePhone($phone) {
    return preg_replace('/[^0-9+\-\(\)\s]/', '', $phone);
}

/**
 * Sanitize filename for upload
 */
function sanitizeFilename($filename) {
    $filename = preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $filename);
    $filename = preg_replace('/\.+/', '.', $filename); // Prevent multiple dots
    return $filename;
}

/**
 * Validate file upload
 */
function validateFileUpload($file, $allowedExtensions = ['pdf', 'doc', 'docx'], $maxSize = 5242880) {
    $errors = [];
    
    // Check if file was uploaded
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'File upload failed. Error code: ' . $file['error'];
        return ['valid' => false, 'errors' => $errors];
    }
    
    // Check file size
    if ($file['size'] > $maxSize) {
        $errors[] = 'File size exceeds maximum allowed (' . ($maxSize / 1024 / 1024) . 'MB)';
    }
    
    // Get file extension
    $filename = $file['name'];
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    // Check extension
    if (!in_array($extension, $allowedExtensions)) {
        $errors[] = 'Invalid file type. Allowed: ' . implode(', ', $allowedExtensions);
    }
    
    // Check MIME type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);
    
    $allowedMimes = [
        'pdf' => 'application/pdf',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    ];
    
    $validMime = false;
    foreach ($allowedExtensions as $ext) {
        if (isset($allowedMimes[$ext]) && $mimeType === $allowedMimes[$ext]) {
            $validMime = true;
            break;
        }
    }
    
    if (!$validMime) {
        $errors[] = 'Invalid file content type';
    }
    
    return [
        'valid' => empty($errors),
        'errors' => $errors,
        'extension' => $extension
    ];
}

// ========================================================================
// 5. RATE LIMITING
// ========================================================================

/**
 * Check rate limit for form submissions
 */
function checkRateLimit($identifier, $maxAttempts = 5, $timeWindow = 300) {
    if (!isset($_SESSION['rate_limit'])) {
        $_SESSION['rate_limit'] = [];
    }
    
    $now = time();
    $key = 'rl_' . $identifier;
    
    // Clean old entries
    if (isset($_SESSION['rate_limit'][$key])) {
        $_SESSION['rate_limit'][$key] = array_filter(
            $_SESSION['rate_limit'][$key],
            function($timestamp) use ($now, $timeWindow) {
                return ($now - $timestamp) < $timeWindow;
            }
        );
    } else {
        $_SESSION['rate_limit'][$key] = [];
    }
    
    // Check if limit exceeded
    if (count($_SESSION['rate_limit'][$key]) >= $maxAttempts) {
        return false;
    }
    
    // Record attempt
    $_SESSION['rate_limit'][$key][] = $now;
    return true;
}

// ========================================================================
// 6. SECURITY HEADERS
// ========================================================================

function setSecurityHeaders() {
    // Prevent clickjacking
    header('X-Frame-Options: SAMEORIGIN');
    
    // XSS Protection
    header('X-XSS-Protection: 1; mode=block');
    
    // Prevent MIME type sniffing
    header('X-Content-Type-Options: nosniff');
    
    // Referrer Policy
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Content Security Policy (adjust as needed)
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com https://cdn.jsdelivr.net; img-src 'self' data: https:; connect-src 'self';");
    
    // Permissions Policy
    header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
}

// ========================================================================
// 7. PASSWORD SECURITY
// ========================================================================

/**
 * Hash password securely
 */
function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
}

/**
 * Verify password
 */
function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

/**
 * Validate password strength
 */
function validatePasswordStrength($password) {
    $errors = [];
    
    if (strlen($password) < 8) {
        $errors[] = 'Password must be at least 8 characters long';
    }
    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = 'Password must contain at least one uppercase letter';
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = 'Password must contain at least one lowercase letter';
    }
    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = 'Password must contain at least one number';
    }
    
    return [
        'valid' => empty($errors),
        'errors' => $errors
    ];
}

// ========================================================================
// 8. ADMIN AUTHENTICATION
// ========================================================================

/**
 * Check if user is admin
 */
function requireAdmin() {
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header('Location: /admin/');
        exit;
    }
}

/**
 * Check admin role permission
 */
function hasPermission($requiredRole) {
    if (!isset($_SESSION['admin_role'])) {
        return false;
    }
    
    $roleHierarchy = [
        'super_admin' => 3,
        'admin' => 2,
        'manager' => 1
    ];
    
    $userRoleLevel = $roleHierarchy[$_SESSION['admin_role']] ?? 0;
    $requiredRoleLevel = $roleHierarchy[$requiredRole] ?? 0;
    
    return $userRoleLevel >= $requiredRoleLevel;
}

// ========================================================================
// 9. LOG SUSPICIOUS ACTIVITY
// ========================================================================

/**
 * Log security events
 */
function logSecurityEvent($event, $details = []) {
    $logDir = __DIR__ . '/../storage/logs';
    if (!is_dir($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    $logFile = $logDir . '/security_' . date('Y-m-d') . '.log';
    $timestamp = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
    
    $logEntry = sprintf(
        "[%s] IP: %s | Event: %s | Details: %s | User-Agent: %s\n",
        $timestamp,
        $ip,
        $event,
        json_encode($details),
        $userAgent
    );
    
    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

// ========================================================================
// 10. BRUTE FORCE PROTECTION
// ========================================================================

/**
 * Track failed login attempts
 */
function trackFailedLogin($identifier) {
    if (!isset($_SESSION['failed_logins'])) {
        $_SESSION['failed_logins'] = [];
    }
    
    if (!isset($_SESSION['failed_logins'][$identifier])) {
        $_SESSION['failed_logins'][$identifier] = ['count' => 0, 'last_attempt' => 0];
    }
    
    $_SESSION['failed_logins'][$identifier]['count']++;
    $_SESSION['failed_logins'][$identifier]['last_attempt'] = time();
    
    logSecurityEvent('failed_login', ['identifier' => $identifier]);
}

/**
 * Check if account is locked
 */
function isAccountLocked($identifier, $maxAttempts = 5, $lockDuration = 900) {
    if (!isset($_SESSION['failed_logins'][$identifier])) {
        return false;
    }
    
    $failedAttempts = $_SESSION['failed_logins'][$identifier];
    
    if ($failedAttempts['count'] >= $maxAttempts) {
        $timeSinceLastAttempt = time() - $failedAttempts['last_attempt'];
        
        if ($timeSinceLastAttempt < $lockDuration) {
            return true;
        } else {
            // Reset after lock duration
            unset($_SESSION['failed_logins'][$identifier]);
            return false;
        }
    }
    
    return false;
}

/**
 * Reset failed login attempts
 */
function resetFailedLogins($identifier) {
    if (isset($_SESSION['failed_logins'][$identifier])) {
        unset($_SESSION['failed_logins'][$identifier]);
    }
}

// ========================================================================
// 11. SQL INJECTION PREVENTION (Already using prepared statements)
// ========================================================================
// All database queries MUST use prepared statements with parameterized queries
// NEVER concatenate user input directly into SQL queries

// ========================================================================
// 12. INITIALIZE SECURITY
// ========================================================================

// Set security headers on every page load
setSecurityHeaders();

// Generate CSRF token for use in forms
generateCSRFToken();
