<?php
/**
 * Career Application Handler
 * Processes job application form submissions with resume upload
 */

// Include security configuration
require_once dirname(__DIR__) . '/config/security.php';

// CSRF Protection
if (!isset($_POST['csrf_token']) || !validateCSRFToken($_POST['csrf_token'])) {
    logSecurityEvent('csrf_violation', ['form' => 'career']);
    echo json_encode(['success' => false, 'message' => 'Security validation failed']);
    exit;
}

// Rate Limiting (stricter for file uploads)
if (!checkRateLimit('career_form', 2, 600)) {
    logSecurityEvent('rate_limit_exceeded', ['form' => 'career']);
    echo json_encode(['success' => false, 'message' => 'Too many applications. Please try again in 10 minutes.']);
    exit;
}

// Set JSON response header
header('Content-Type: application/json');

// Include database configuration
require_once dirname(__DIR__) . '/config/db.php';

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
        // Use secure file validation from security.php
        $validation = validateFileUpload($_FILES['resume'], ['pdf', 'doc', 'docx'], 5242880);
        
        if (!$validation['valid']) {
            $response['errors'] = array_merge($response['errors'], $validation['errors']);
        } else {
            $upload_dir = dirname(__DIR__) . '/uploads/resumes/';
            
            // Create directory if it doesn't exist
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            // Generate secure filename
            $file_ext = $validation['extension'];
            $new_filename = uniqid('resume_', true) . '_' . time() . '.' . sanitizeFilename($file_ext);
            $upload_path = $upload_dir . $new_filename;
            
            
            // Move uploaded file securely
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $upload_path)) {
                $resume_filename = $new_filename;
                // Set restrictive permissions
                chmod($upload_path, 0644);
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
    
    // Get client information
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    // Prepare SQL statement with PDO
    $stmt = $pdo->prepare("
        INSERT INTO career_applications 
        (first_name, last_name, email, phone, position, experience_years, 
        current_company, education, linkedin_url, cover_letter, resume_filename, resume_path,
        ip_address, user_agent, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'received')
    ");
    
    // Store resume path
    $resume_path = $resume_filename ? 'uploads/resumes/' . $resume_filename : null;
    
    // Execute statement
    if ($stmt->execute([
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
        $resume_path,
        $ip_address,
        $user_agent
    ])) {
        $application_id = $pdo->lastInsertId();
        
        // Update job postings application count
        $update_stmt = $pdo->prepare("UPDATE job_postings SET applications_count = applications_count + 1 WHERE title = ? AND status = 'active'");
        $update_stmt->execute([$position]);
        
        $response['success'] = true;
        $response['message'] = 'Application submitted successfully! Our HR team will review your application and contact you if your profile matches our requirements.';
        $response['data'] = ['application_id' => $application_id];
        
        // Optional: Send confirmation email
        // sendApplicationEmailNotification($first_name, $last_name, $email, $position);
        
        // Log success
        $response['success'] = true;
        $response['message'] = 'Application submitted successfully! Our HR team will review your application and contact you if your profile matches our requirements.';
    } else {
        throw new Exception('Failed to save application');
    }
    
} catch (PDOException $e) {
    $response['success'] = false;
    $response['message'] = 'An error occurred while processing your application. Please try again later.';
    error_log('Career application error: ' . $e->getMessage());
    
} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = $e->getMessage();
}

// Send response
echo json_encode($response);
exit;
