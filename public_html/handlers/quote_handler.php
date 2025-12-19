<?php
/**
 * Quote Request Handler
 * Processes quote request form submissions and stores in database
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
    $service_type = isset($_POST['service_type']) ? sanitizeInput($_POST['service_type']) : '';
    $cargo_type = isset($_POST['cargo_type']) ? sanitizeInput($_POST['cargo_type']) : '';
    $origin = isset($_POST['origin']) ? sanitizeInput($_POST['origin']) : '';
    $destination = isset($_POST['destination']) ? sanitizeInput($_POST['destination']) : '';
    $weight = isset($_POST['weight']) ? sanitizeInput($_POST['weight']) : '';
    $dimensions = isset($_POST['dimensions']) ? sanitizeInput($_POST['dimensions']) : '';
    $shipment_date = isset($_POST['shipment_date']) ? sanitizeInput($_POST['shipment_date']) : NULL;
    $additional_info = isset($_POST['additional_info']) ? sanitizeInput($_POST['additional_info']) : '';
    
    // Validation
    if (empty($name)) {
        $response['errors'][] = 'Name is required';
    }
    
    if (empty($email)) {
        $response['errors'][] = 'Email is required';
    } elseif (!validateEmail($email)) {
        $response['errors'][] = 'Please provide a valid email address';
    }
    
    if (empty($phone)) {
        $response['errors'][] = 'Phone number is required';
    }
    
    if (empty($service_type)) {
        $response['errors'][] = 'Service type is required';
    }
    
    if (empty($cargo_type)) {
        $response['errors'][] = 'Cargo type is required';
    }
    
    if (empty($origin)) {
        $response['errors'][] = 'Origin location is required';
    }
    
    if (empty($destination)) {
        $response['errors'][] = 'Destination location is required';
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
        INSERT INTO quote_requests 
        (name, email, phone, company, service_type, cargo_type, origin, destination, 
        weight, dimensions, shipment_date, additional_info, ip_address, user_agent, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')
    ");
    
    if (!$stmt) {
        throw new Exception('Failed to prepare statement: ' . $conn->error);
    }
    
    // Get client information
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    // Bind parameters
    $stmt->bind_param(
        'ssssssssssssss',
        $name,
        $email,
        $phone,
        $company,
        $service_type,
        $cargo_type,
        $origin,
        $destination,
        $weight,
        $dimensions,
        $shipment_date,
        $additional_info,
        $ip_address,
        $user_agent
    );
    
    // Execute statement
    if ($stmt->execute()) {
        $quote_id = $conn->insert_id;
        
        $response['success'] = true;
        $response['message'] = 'Quote request submitted successfully! Our team will contact you within 24 hours with a detailed quotation.';
        $response['data'] = ['quote_id' => $quote_id];
        
        // Optional: Send email notification
        // sendQuoteEmailNotification($name, $email, $service_type, $origin, $destination);
        
        // Log success
        logError("Quote request submitted successfully by: $email (ID: $quote_id)", 'INFO');
    } else {
        throw new Exception('Failed to save quote request: ' . $stmt->error);
    }
    
    // Close statement and connection
    $stmt->close();
    closeDatabaseConnection($conn);
    
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = 'An error occurred while processing your request. Please try again later.';
    
    // Log error
    logError('Quote request error: ' . $e->getMessage(), 'ERROR');
}

// Send response
echo json_encode($response);
exit;

/**
 * Send email notification for quote request (optional)
 */
/*
function sendQuoteEmailNotification($name, $email, $service_type, $origin, $destination) {
    $to = 'sales@farhanlogistics.com';
    $email_subject = 'New Quote Request: ' . $service_type;
    
    $email_body = "New quote request received:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Service: $service_type\n";
    $email_body .= "Route: $origin to $destination\n\n";
    $email_body .= "Please log in to view full details and respond.\n";
    
    $headers = "From: noreply@farhanlogistics.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    mail($to, $email_subject, $email_body, $headers);
}
*/
?>
