<?php
// Include security configuration
require_once dirname(__DIR__) . '/config/security.php';

// Check authentication
requireAdmin();

require_once dirname(__DIR__) . '/config/db.php';
require_once dirname(__DIR__) . '/config/mail.php';
require_once dirname(__DIR__) . '/config/email_templates.php';

$pageTitle = 'Email Configuration';

// Handle configuration update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !validateCSRFToken($_POST['csrf_token'])) {
        $_SESSION['error_message'] = 'Security validation failed';
        header('Location: /admin/email-config');
        exit;
    }
    
    if (isset($_POST['action']) && $_POST['action'] === 'test_email') {
        $test_email = filter_var($_POST['test_email'], FILTER_SANITIZE_EMAIL);
        
        if (filter_var($test_email, FILTER_VALIDATE_EMAIL)) {
            $result = testEmailConfiguration($test_email);
            
            if ($result['success']) {
                $_SESSION['success_message'] = 'Test email sent successfully! Check ' . $test_email;
            } else {
                $_SESSION['error_message'] = 'Failed to send test email: ' . $result['message'];
            }
        } else {
            $_SESSION['error_message'] = 'Invalid email address';
        }
        
        header('Location: /admin/email-config');
        exit;
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="container-fluid animate-in">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2><i class="bi bi-envelope-at me-2"></i>Email Configuration</h2>
                    <p class="text-muted mb-0">Manage SMTP settings and test email delivery</p>
                </div>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['success_message'])): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <i class="bi bi-check-circle me-2"></i><?= htmlspecialchars($_SESSION['success_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['success_message']); endif; ?>

    <?php if (isset($_SESSION['error_message'])): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <i class="bi bi-exclamation-circle me-2"></i><?= htmlspecialchars($_SESSION['error_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['error_message']); endif; ?>

    <div class="row">
        <!-- Configuration Status -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Current Configuration</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless mb-0">
                        <tr>
                            <td style="width: 200px;"><strong>PHPMailer Status</strong></td>
                            <td>
                                <?php if (PHPMAILER_AVAILABLE): ?>
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle"></i> Available
                                    </span>
                                <?php else: ?>
                                    <span class="badge bg-warning">
                                        <i class="bi bi-exclamation-triangle"></i> Not Installed (Using PHP mail)
                                    </span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>SMTP Host</strong></td>
                            <td><code><?= htmlspecialchars(SMTP_HOST) ?></code></td>
                        </tr>
                        <tr>
                            <td><strong>SMTP Port</strong></td>
                            <td><code><?= SMTP_PORT ?></code></td>
                        </tr>
                        <tr>
                            <td><strong>Encryption</strong></td>
                            <td><code><?= SMTP_ENCRYPTION ?: 'None' ?></code></td>
                        </tr>
                        <tr>
                            <td><strong>SMTP Username</strong></td>
                            <td><code><?= htmlspecialchars(SMTP_USERNAME) ?></code></td>
                        </tr>
                        <tr>
                            <td><strong>From Email</strong></td>
                            <td><code><?= htmlspecialchars(MAIL_FROM_EMAIL) ?></code></td>
                        </tr>
                        <tr>
                            <td><strong>From Name</strong></td>
                            <td><?= htmlspecialchars(MAIL_FROM_NAME) ?></td>
                        </tr>
                        <tr>
                            <td><strong>Reply-To</strong></td>
                            <td><code><?= htmlspecialchars(MAIL_REPLY_TO) ?></code></td>
                        </tr>
                        <tr>
                            <td><strong>Debug Mode</strong></td>
                            <td>
                                <?php if (MAIL_DEBUG): ?>
                                    <span class="badge bg-warning">Enabled</span>
                                <?php else: ?>
                                    <span class="badge bg-success">Disabled</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                    
                    <hr>
                    
                    <div class="alert alert-info mb-0">
                        <i class="bi bi-info-circle"></i> To update these settings, edit 
                        <code>/config/mail.php</code>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Test Email -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Send Test Email</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">Send a test email to verify your configuration is working correctly.</p>
                    
                    <form method="POST">
                        <?php echo csrfField(); ?>
                        <input type="hidden" name="action" value="test_email">
                        
                        <div class="mb-3">
                            <label class="form-label">Test Email Address</label>
                            <input type="email" name="test_email" class="form-control" placeholder="your-email@example.com" required>
                            <small class="text-muted">Enter your email to receive a test message</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send me-2"></i>Send Test Email
                        </button>
                    </form>
                    
                    <hr>
                    
                    <h6>What will be sent:</h6>
                    <ul class="text-muted small mb-0">
                        <li>Configuration test email</li>
                        <li>Sample shipment tracking email</li>
                        <li>Check your inbox and spam folder</li>
                    </ul>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0">Setup Instructions</h5>
                </div>
                <div class="card-body">
                    <h6>1. Create Email Account in cPanel</h6>
                    <ol class="small">
                        <li>Log in to cPanel</li>
                        <li>Go to <strong>Email Accounts</strong></li>
                        <li>Create: <code>noreply@yourdomain.com</code></li>
                        <li>Set a strong password</li>
                    </ol>
                    
                    <h6 class="mt-3">2. Update Configuration</h6>
                    <p class="small mb-2">Edit <code>/config/mail.php</code> with:</p>
                    <pre class="bg-light p-2 rounded small mb-3">SMTP_HOST: mail.yourdomain.com
SMTP_PORT: 587 (TLS) or 465 (SSL)
SMTP_USERNAME: noreply@yourdomain.com
SMTP_PASSWORD: YourPassword</pre>
                    
                    <h6>3. Install PHPMailer (Optional)</h6>
                    <p class="small mb-2">Run in terminal:</p>
                    <pre class="bg-light p-2 rounded small mb-0">composer install</pre>
                    
                    <a href="/EMAIL_SETUP_GUIDE.md" class="btn btn-sm btn-outline-primary mt-3" target="_blank">
                        <i class="bi bi-book"></i> Full Setup Guide
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Email Templates Preview -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Email Templates</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">The following email templates are available:</p>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6><i class="bi bi-box-seam text-primary"></i> Shipment Tracking</h6>
                                <p class="small text-muted mb-0">Sent when a new shipment is created with tracking number and details.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6><i class="bi bi-arrow-repeat text-warning"></i> Status Update</h6>
                                <p class="small text-muted mb-0">Sent when shipment status changes with current location and event details.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="border rounded p-3 h-100">
                                <h6><i class="bi bi-file-text text-info"></i> Quote Confirmation</h6>
                                <p class="small text-muted mb-0">Sent when customer submits a quote request through the website.</p>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    
                    <p class="mb-0 small text-muted">
                        <i class="bi bi-code-square"></i> Templates are located in <code>/config/email_templates.php</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
