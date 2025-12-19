<?php
/**
 * Career Application Handler
 * Processes job application form submissions with resume upload
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
    $first_name = isset($_POST['first_name']) ? sanitizeInput($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? sanitizeInput($_POST['last_name']) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
    $position = isset($_POST['position']) ? sanitizeInput($_POST['position']) : '';
    $experience_years = isset($_POST['experience_years']) ? intval($_POST['experience_years']) : 0;
    $current_company = isset($_POST['current_company']) ? sanitizeInput($_POST['current_company']) : '';
    $education = isset($_POST['education']) ? sanitizeInput($_POST['education']) : '';
    $linkedin_url = isset($_POST['linkedin_url']) ? sanitizeInput($_POST['linkedin_url']) : '';
    $cover_letter = isset($_POST['cover_letter']) ? sanitizeInput($_POST['cover_letter']) : '';
    
    // Validation
    if (empty($first_name)) {
        $response['errors'][] = 'First name is required';
    }
    
    if (empty($last_name)) {
        $response['errors'][] = 'Last name is required';
    }
    
    if (empty($email)) {
        $response['errors'][] = 'Email is required';
    } elseif (!validateEmail($email)) {
        $response['errors'][] = 'Please provide a valid email address';
    }
    
    if (empty($phone)) {
        $response['errors'][] = 'Phone number is required';
    }
    
    if (empty($position)) {
        $response['errors'][] = 'Position is required';
    }
    
    // Resume/CV upload validation
    $resume_filename = null;
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../uploads/resumes/';
        
        // Create directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        
        $file_tmp = $_FILES['resume']['tmp_name'];
        $file_name = $_FILES['resume']['name'];
        $file_size = $_FILES['resume']['size'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        // Allowed extensions
        $allowed_ext = ['pdf', 'doc', 'docx'];
        
        // Validate file
        if (!in_array($file_ext, $allowed_ext)) {
            $response['errors'][] = 'Resume must be PDF or DOC format';
        } elseif ($file_size > 5242880) { // 5MB max
            $response['errors'][] = 'Resume file size must not exceed 5MB';
        } else {
            // Generate unique filename
            $new_filename = uniqid('resume_', true) . '_' . time() . '.' . $file_ext;
            $upload_path = $upload_dir . $new_filename;
            
            // Move uploaded file
            if (move_uploaded_file($file_tmp, $upload_path)) {
                $resume_filename = $new_filename;
            } else {
                $response['errors'][] = 'Failed to upload resume';
            }
        }
    } else {
        $response['errors'][] = 'Resume/CV is required';
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
        INSERT INTO career_applications 
        (first_name, last_name, email, phone, position, experience_years, 
        current_company, education, linkedin_url, cover_letter, resume_filename, 
        ip_address, user_agent, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'received')
    ");
    
    if (!$stmt) {
        throw new Exception('Failed to prepare statement: ' . $conn->error);
    }
    
    // Get client information
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    // Bind parameters
    $stmt->bind_param(
        'sssssississss',
        $first_name,
        $last_name,
        $email,
        $phone,
        $position,
        $experience_years,
        $current_company,
        $education,
        $linkedin_url,
        $cover_letter,
        $resume_filename,
        $ip_address,
        $user_agent
    );
    
    // Execute statement
    if ($stmt->execute()) {
        $application_id = $conn->insert_id;
        
        $response['success'] = true;
        $response['message'] = 'Application submitted successfully! Our HR team will review your application and contact you if your profile matches our requirements.';
        $response['data'] = ['application_id' => $application_id];
        
        // Optional: Send confirmation email
        // sendApplicationEmailNotification($first_name, $last_name, $email, $position);
        
        // Log success
        logError("Career application submitted successfully by: $email (ID: $application_id)", 'INFO');
    } else {
        throw new Exception('Failed to save application: ' . $stmt->error);
    }
    
    // Close statement and connection
    $stmt->close();
    closeDatabaseConnection($conn);
    
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = 'An error occurred while processing your application. Please try again later.';
    
    // Log error
    logError('Career application error: ' . $e->getMessage(), 'ERROR');
}

// Send response
echo json_encode($response);
exit;

/**
 * Send email notification for job application (optional)
 */
/*
function sendApplicationEmailNotification($first_name, $last_name, $email, $position) {
    // To candidate
    $to_candidate = $email;
    $subject_candidate = 'Application Received - Farhan Logistics';
    
    $body_candidate = "Dear $first_name $last_name,\n\n";
    $body_candidate .= "Thank you for your interest in the $position position at Farhan Logistics.\n\n";
    $body_candidate .= "We have received your application and our HR team will review it shortly.\n";
    $body_candidate .= "If your profile matches our requirements, we will contact you for the next steps.\n\n";
    $body_candidate .= "Best regards,\n";
    $body_candidate .= "Farhan Logistics HR Team\n";
    
    $headers = "From: hr@farhanlogistics.com\r\n";
    
    mail($to_candidate, $subject_candidate, $body_candidate, $headers);
    
    // To HR team
    $to_hr = 'hr@farhanlogistics.com';
    $subject_hr = 'New Job Application: ' . $position;
    
    $body_hr = "New job application received:\n\n";
    $body_hr .= "Name: $first_name $last_name\n";
    $body_hr .= "Email: $email\n";
    $body_hr .= "Position: $position\n\n";
    $body_hr .= "Please log in to review the full application.\n";
    
    mail($to_hr, $subject_hr, $body_hr, $headers);
}
*/
?>
