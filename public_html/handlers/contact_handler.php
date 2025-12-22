<?php
/**
 * Contact Form Handler
 * Processes contact form submissions and stores in database
 */

// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 403 Forbidden');
    exit('Direct access not allowed');
}

// Set JSON response header
header('Content-Type: application/json');

// Include database configuration
require_once '../config/db.php';

// Initialize response
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

try {
    // Validate and sanitize input
    $name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
    $company = isset($_POST['company']) ? sanitizeInput($_POST['company']) : '';
    $subject = isset($_POST['subject']) ? sanitizeInput($_POST['subject']) : '';
    $message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';
    
    // Validation
    if (empty($name)) {
        $response['errors'][] = 'Name is required';
    }
    
    if (empty($email)) {
        $response['errors'][] = 'Email is required';
    } elseif (!validateEmail($email)) {
        $response['errors'][] = 'Please provide a valid email address';
    }
    
    if (empty($subject)) {
        $response['errors'][] = 'Subject is required';
    }
    
    if (empty($message)) {
        $response['errors'][] = 'Message is required';
    }
    
    // If validation errors exist
    if (!empty($response['errors'])) {
        $response['message'] = 'Please correct the errors and try again';
        echo json_encode($response);
        exit;
    }
    
    // Get database connection
    $conn = getDatabaseConnection();
    
    if (!$conn) {
        throw new Exception('Database connection failed');
    }
    
    // Prepare SQL statement
    $stmt = $conn->prepare("
        INSERT INTO contact_submissions 
        (name, email, phone, company, subject, message, ip_address, user_agent, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'new')
    ");
    
    if (!$stmt) {
        throw new Exception('Failed to prepare statement: ' . $conn->error);
    }
    
    // Get client information
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    // Bind parameters
    $stmt->bind_param(
        'ssssssss',
        $name,
        $email,
        $phone,
        $company,
        $subject,
        $message,
        $ip_address,
        $user_agent
    );
    
    // Execute statement
    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = 'Thank you for contacting us! We will get back to you within 24 hours.';
        
        // Optional: Send email notification to admin
        // sendEmailNotification($name, $email, $subject, $message);
        
        // Log success
        logError("Contact form submitted successfully by: $email", 'INFO');
    } else {
        throw new Exception('Failed to save contact form: ' . $stmt->error);
    }
    
    // Close statement and connection
    $stmt->close();
    closeDatabaseConnection($conn);
    
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = 'An error occurred while processing your request. Please try again later.';
    
    // Log error
    logError('Contact form error: ' . $e->getMessage(), 'ERROR');
}

// Send response
echo json_encode($response);
exit;

/**
 * Send email notification (optional)
 * Uncomment and configure if you want email notifications
 */
/*
function sendEmailNotification($name, $email, $subject, $message) {
    $to = 'hannan@farhancargobd.com';
    $email_subject = 'New Contact Form Submission: ' . $subject;
    
    $email_body = "New contact form submission:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";
    
    $headers = "From: noreply@farhanlogistics.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    mail($to, $email_subject, $email_body, $headers);
}
*/
?>
