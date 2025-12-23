<?php
// Include security configuration
require_once dirname(__DIR__) . '/config/security.php';

// Check authentication
requireAdmin();

require_once dirname(__DIR__) . '/config/db.php';
$pageTitle = 'Shipment Tracking Management';

// Function to generate unique 10-digit tracking number
function generateTrackingNumber($pdo) {
    do {
        // Generate FL + 10 random digits
        $tracking_number = 'FL' . str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
        
        // Check if tracking number already exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM shipment_tracking WHERE tracking_number = ?");
        $stmt->execute([$tracking_number]);
        $exists = $stmt->fetchColumn() > 0;
    } while ($exists);
    
    return $tracking_number;
}

// Function to send tracking email to customer
function sendTrackingEmail($customer_email, $customer_name, $tracking_number, $origin, $destination, $service_type, $estimated_delivery) {
    $subject = "Your Shipment Tracking Number - Farhan Logistics";
    
    // Format service type
    $service_display = ucwords(str_replace('_', ' ', $service_type));
    
    // Format estimated delivery date
    $delivery_date = date('F j, Y', strtotime($estimated_delivery));
    
    // Create email body
    $message = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #0066cc 0%, #004d99 100%); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
            .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 10px 10px; }
            .tracking-box { background: white; padding: 20px; border-left: 4px solid #0066cc; margin: 20px 0; border-radius: 5px; }
            .tracking-number { font-size: 28px; font-weight: bold; color: #0066cc; letter-spacing: 2px; }
            .info-row { padding: 10px 0; border-bottom: 1px solid #e9ecef; }
            .info-label { font-weight: bold; color: #666; }
            .btn { display: inline-block; background: #0066cc; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin: 20px 0; }
            .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Shipment Created Successfully</h1>
            </div>
            <div class='content'>
                <p>Dear " . htmlspecialchars($customer_name) . ",</p>
                <p>Thank you for choosing Farhan Logistics. Your shipment has been successfully created and is now being processed.</p>
                
                <div class='tracking-box'>
                    <div style='text-align: center;'>
                        <p style='margin: 0; font-size: 14px; color: #666;'>Your Tracking Number</p>
                        <div class='tracking-number'>" . $tracking_number . "</div>
                    </div>
                </div>
                
                <h3>Shipment Details:</h3>
                <div class='info-row'>
                    <span class='info-label'>Service Type:</span> " . $service_display . "
                </div>
                <div class='info-row'>
                    <span class='info-label'>Origin:</span> " . htmlspecialchars($origin) . "
                </div>
                <div class='info-row'>
                    <span class='info-label'>Destination:</span> " . htmlspecialchars($destination) . "
                </div>
                <div class='info-row'>
                    <span class='info-label'>Estimated Delivery:</span> " . $delivery_date . "
                </div>
                
                <h3>How to Track Your Shipment:</h3>
                <ol>
                    <li>Visit our tracking page: <a href='https://" . $_SERVER['HTTP_HOST'] . "/tracking'>" . $_SERVER['HTTP_HOST'] . "/tracking</a></li>
                    <li>Enter your tracking number: <strong>" . $tracking_number . "</strong></li>
                    <li>Click 'Track Shipment' to view real-time status updates</li>
                </ol>
                
                <div style='text-align: center;'>
                    <a href='https://" . $_SERVER['HTTP_HOST'] . "/tracking' class='btn'>Track Your Shipment Now</a>
                </div>
                
                <p style='margin-top: 20px;'><strong>Need Help?</strong><br>
                If you have any questions, please contact our support team:<br>
                Email: support@farhanlogistics.com<br>
                Phone: +971 XX XXX XXXX</p>
            </div>
            <div class='footer'>
                <p>&copy; " . date('Y') . " Farhan Logistics. All rights reserved.</p>
                <p>This is an automated message, please do not reply to this email.</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Email headers
    $headers = "From: Farhan Logistics <noreply@farhanlogistics.com>\r\n";
    $headers .= "Reply-To: support@farhanlogistics.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Send email
    return mail($customer_email, $subject, $message, $headers);
}

// Handle actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF Protection
    if (!isset($_POST['csrf_token']) || !validateCSRFToken($_POST['csrf_token'])) {
        logSecurityEvent('csrf_violation', ['form' => 'admin_shipments']);
        $_SESSION['error_message'] = 'Security validation failed';
        header('Location: /admin/shipments');
        exit;
    }
    
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'create_shipment') {
            // Auto-generate tracking number
            $tracking_number = generateTrackingNumber($pdo);
            $customer_name = trim($_POST['customer_name']);
            $customer_email = trim($_POST['customer_email']);
            $origin = trim($_POST['origin']);
            $destination = trim($_POST['destination']);
            $service_type = $_POST['service_type'];
            $current_status = $_POST['current_status'];
            $current_location = trim($_POST['current_location']);
            $estimated_delivery = $_POST['estimated_delivery'];
            
            try {
                $stmt = $pdo->prepare("INSERT INTO shipment_tracking (tracking_number, customer_name, customer_email, origin, destination, service_type, current_status, current_location, estimated_delivery) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$tracking_number, $customer_name, $customer_email, $origin, $destination, $service_type, $current_status, $current_location, $estimated_delivery]);
                
                // Add initial tracking event
                $shipment_id = $pdo->lastInsertId();
                $event_stmt = $pdo->prepare("INSERT INTO tracking_events (tracking_number, event_type, event_description, location, event_date) VALUES (?, ?, ?, ?, NOW())");
                $event_stmt->execute([$tracking_number, 'Created', 'Shipment created in system', $origin]);
                
                // Send tracking email to customer
                $email_sent = sendTrackingEmail($customer_email, $customer_name, $tracking_number, $origin, $destination, $service_type, $estimated_delivery);
                
                if ($email_sent) {
                    $_SESSION['success_message'] = 'Shipment created successfully! Tracking number: ' . $tracking_number . '. Email sent to customer.';
                } else {
                    $_SESSION['success_message'] = 'Shipment created successfully! Tracking number: ' . $tracking_number . '. (Warning: Email notification failed to send.)';
                }
                
                header('Location: /admin/shipments');
                exit;
            } catch (PDOException $e) {
                $_SESSION['error_message'] = 'Error: ' . $e->getMessage();
            }
        }
        
        if ($_POST['action'] === 'update_status') {
            $tracking_number = $_POST['tracking_number'];
            $new_status = $_POST['new_status'];
            $location = trim($_POST['location']);
            $event_description = trim($_POST['event_description']);
            
            try {
                $stmt = $pdo->prepare("UPDATE shipment_tracking SET current_status = ?, current_location = ?, updated_at = NOW() WHERE tracking_number = ?");
                $stmt->execute([$new_status, $location, $tracking_number]);
                
                // Add tracking event
                $event_stmt = $pdo->prepare("INSERT INTO tracking_events (tracking_number, event_type, event_description, location, event_date) VALUES (?, ?, ?, ?, NOW())");
                $event_stmt->execute([$tracking_number, $new_status, $event_description, $location]);
                
                // Mark as delivered if status is delivered
                if ($new_status === 'delivered') {
                    $delivered_stmt = $pdo->prepare("UPDATE shipment_tracking SET actual_delivery = CURDATE() WHERE tracking_number = ?");
                    $delivered_stmt->execute([$tracking_number]);
                }
                
                $_SESSION['success_message'] = 'Shipment status updated successfully';
                header('Location: /admin/shipments?view=' . $tracking_number);
                exit;
            } catch (PDOException $e) {
                $_SESSION['error_message'] = 'Error updating status';
            }
        }
        
        if ($_POST['action'] === 'delete_shipment') {
            $tracking_number = $_POST['tracking_number'];
            try {
                $pdo->prepare("DELETE FROM tracking_events WHERE tracking_number = ?")->execute([$tracking_number]);
                $pdo->prepare("DELETE FROM shipment_tracking WHERE tracking_number = ?")->execute([$tracking_number]);
                $_SESSION['success_message'] = 'Shipment deleted successfully';
                header('Location: /admin/shipments');
                exit;
            } catch (PDOException $e) {
                $_SESSION['error_message'] = 'Error deleting shipment';
            }
        }
    }
}

// Fetch shipments
$search = $_GET['search'] ?? '';
$status_filter = $_GET['status'] ?? '';

$query = "SELECT * FROM shipment_tracking WHERE 1=1";
$params = [];

if ($search) {
    $query .= " AND (tracking_number LIKE ? OR customer_name LIKE ? OR customer_email LIKE ?)";
    $search_term = "%$search%";
    $params = array_merge($params, [$search_term, $search_term, $search_term]);
}

if ($status_filter) {
    $query .= " AND current_status = ?";
    $params[] = $status_filter;
}

$query .= " ORDER BY created_at DESC";

$stmt = $pdo->prepare($query);
$stmt->execute($params);
$shipments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// View single shipment
$viewing_shipment = null;
$tracking_events = [];
if (isset($_GET['view'])) {
    $tracking_number = $_GET['view'];
    $stmt = $pdo->prepare("SELECT * FROM shipment_tracking WHERE tracking_number = ?");
    $stmt->execute([$tracking_number]);
    $viewing_shipment = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($viewing_shipment) {
        $events_stmt = $pdo->prepare("SELECT * FROM tracking_events WHERE tracking_number = ? ORDER BY event_date DESC");
        $events_stmt->execute([$tracking_number]);
        $tracking_events = $events_stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="container-fluid animate-in">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2><i class="bi bi-box-seam me-2"></i>Shipment Tracking</h2>
                    <p class="text-muted mb-0">Manage and track all shipments</p>
                </div>
                <div class="d-flex gap-2">
                    <?php if(!$viewing_shipment): ?>
                    <button class="btn btn-success" onclick="exportToCSV()">
                        <i class="bi bi-file-earmark-spreadsheet me-2"></i>Export CSV
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createShipmentModal">
                        <i class="bi bi-plus-circle me-2"></i>New Shipment
                    </button>
                    <?php endif; ?>
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

    <?php if ($viewing_shipment): ?>
    <!-- Single Shipment View -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Shipment: <?= htmlspecialchars($viewing_shipment['tracking_number']) ?></h5>
            <a href="/admin/shipments" class="btn btn-sm btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>Back to List
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <strong>Customer Name:</strong><br>
                    <?= htmlspecialchars($viewing_shipment['customer_name']) ?>
                </div>
                <div class="col-md-6 mb-3">
                    <strong>Email:</strong><br>
                    <a href="mailto:<?= htmlspecialchars($viewing_shipment['customer_email']) ?>">
                        <?= htmlspecialchars($viewing_shipment['customer_email']) ?>
                    </a>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Origin:</strong><br>
                    <?= htmlspecialchars($viewing_shipment['origin']) ?>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Destination:</strong><br>
                    <?= htmlspecialchars($viewing_shipment['destination']) ?>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Service Type:</strong><br>
                    <span class="badge bg-info"><?= ucfirst($viewing_shipment['service_type']) ?></span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Current Status:</strong><br>
                    <?php
                    $status_colors = [
                        'pending' => 'secondary',
                        'collected' => 'info',
                        'in_transit' => 'primary',
                        'customs' => 'warning',
                        'out_for_delivery' => 'success',
                        'delivered' => 'success'
                    ];
                    $color = $status_colors[$viewing_shipment['current_status']] ?? 'secondary';
                    ?>
                    <span class="badge bg-<?= $color ?>"><?= ucwords(str_replace('_', ' ', $viewing_shipment['current_status'])) ?></span>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Current Location:</strong><br>
                    <?= htmlspecialchars($viewing_shipment['current_location']) ?>
                </div>
                <div class="col-md-4 mb-3">
                    <strong>Estimated Delivery:</strong><br>
                    <?= date('M d, Y', strtotime($viewing_shipment['estimated_delivery'])) ?>
                </div>
            </div>
            
            <button class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#updateStatusModal">
                <i class="bi bi-arrow-repeat me-2"></i>Update Status
            </button>
        </div>
    </div>
    
    <!-- Tracking History -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Tracking History</h5>
        </div>
        <div class="card-body">
            <div class="timeline">
                <?php foreach ($tracking_events as $event): ?>
                <div class="timeline-item mb-4">
                    <div class="d-flex">
                        <div class="timeline-marker me-3">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-red), #c91d22); display: flex; align-items: center; justify-content: center; color: white;">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-1"><?= htmlspecialchars($event['event_type']) ?></h6>
                                <small class="text-muted"><?= date('M d, Y g:i A', strtotime($event['event_date'])) ?></small>
                            </div>
                            <p class="mb-1"><?= htmlspecialchars($event['event_description']) ?></p>
                            <small class="text-muted"><i class="bi bi-geo-alt me-1"></i><?= htmlspecialchars($event['location']) ?></small>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <!-- Update Status Modal -->
    <div class="modal fade" id="updateStatusModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Shipment Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST">
                    <?php echo csrfField(); ?>
                    <input type="hidden" name="action" value="update_status">
                    <input type="hidden" name="tracking_number" value="<?= htmlspecialchars($viewing_shipment['tracking_number']) ?>">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">New Status *</label>
                            <select class="form-select" name="new_status" required>
                                <option value="pending">Pending</option>
                                <option value="collected">Collected</option>
                                <option value="in_transit">In Transit</option>
                                <option value="customs">Customs Clearance</option>
                                <option value="out_for_delivery">Out for Delivery</option>
                                <option value="delivered">Delivered</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Location *</label>
                            <input type="text" class="form-control" name="location" required placeholder="Current location">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Event Description *</label>
                            <textarea class="form-control" name="event_description" rows="3" required placeholder="Describe what happened..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php else: ?>
    <!-- Shipments List -->
    <div class="card mb-4">
        <div class="card-body">
            <form method="GET" class="row g-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="search" placeholder="Search by tracking number, customer name or email" value="<?= htmlspecialchars($search) ?>">
                </div>
                <div class="col-md-4">
                    <select class="form-select" name="status">
                        <option value="">All Statuses</option>
                        <option value="pending" <?= $status_filter === 'pending' ? 'selected' : '' ?>>Pending</option>
                        <option value="collected" <?= $status_filter === 'collected' ? 'selected' : '' ?>>Collected</option>
                        <option value="in_transit" <?= $status_filter === 'in_transit' ? 'selected' : '' ?>>In Transit</option>
                        <option value="customs" <?= $status_filter === 'customs' ? 'selected' : '' ?>>Customs</option>
                        <option value="out_for_delivery" <?= $status_filter === 'out_for_delivery' ? 'selected' : '' ?>>Out for Delivery</option>
                        <option value="delivered" <?= $status_filter === 'delivered' ? 'selected' : '' ?>>Delivered</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Filter</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">All Shipments (<?= count($shipments) ?>)</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle" id="shipmentsTable">
                    <thead>
                        <tr>
                            <th>Tracking Number</th>
                            <th>Customer</th>
                            <th>Route</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Est. Delivery</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($shipments as $shipment): ?>
                        <tr>
                            <td>
                                <strong><?= htmlspecialchars($shipment['tracking_number']) ?></strong>
                            </td>
                            <td>
                                <?= htmlspecialchars($shipment['customer_name']) ?><br>
                                <small class="text-muted"><?= htmlspecialchars($shipment['customer_email']) ?></small>
                            </td>
                            <td>
                                <small><?= htmlspecialchars($shipment['origin']) ?><br>
                                <i class="bi bi-arrow-down"></i><br>
                                <?= htmlspecialchars($shipment['destination']) ?></small>
                            </td>
                            <td>
                                <span class="badge bg-info"><?= ucfirst($shipment['service_type']) ?></span>
                            </td>
                            <td>
                                <?php
                                $status_colors = [
                                    'pending' => 'secondary',
                                    'collected' => 'info',
                                    'in_transit' => 'primary',
                                    'customs' => 'warning',
                                    'out_for_delivery' => 'success',
                                    'delivered' => 'success'
                                ];
                                $color = $status_colors[$shipment['current_status']] ?? 'secondary';
                                ?>
                                <span class="badge bg-<?= $color ?>"><?= ucwords(str_replace('_', ' ', $shipment['current_status'])) ?></span>
                            </td>
                            <td><?= date('M d, Y', strtotime($shipment['estimated_delivery'])) ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="/admin/shipments?view=<?= htmlspecialchars($shipment['tracking_number']) ?>" class="btn btn-sm btn-outline-primary" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form method="POST" class="d-inline" onsubmit="return confirm('Delete this shipment?');">
                                        <input type="hidden" name="action" value="delete_shipment">
                                        <input type="hidden" name="tracking_number" value="<?= htmlspecialchars($shipment['tracking_number']) ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<!-- Create Shipment Modal -->
<div class="modal fade" id="createShipmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Shipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <?php echo csrfField(); ?>
                <input type="hidden" name="action" value="create_shipment">
                <div class="modal-body">
                    <div class="alert alert-info mb-3">
                        <i class="fas fa-info-circle"></i> Tracking number will be generated automatically (10-digit format)
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Service Type *</label>
                            <select class="form-select" name="service_type" required>
                                <option value="air">Air Freight</option>
                                <option value="sea">Sea Freight</option>
                                <option value="road">Road Transport</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Customer Name *</label>
                            <input type="text" class="form-control" name="customer_name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Customer Email *</label>
                            <input type="email" class="form-control" name="customer_email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Origin *</label>
                            <input type="text" class="form-control" name="origin" required placeholder="Dubai, UAE">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Destination *</label>
                            <input type="text" class="form-control" name="destination" required placeholder="London, UK">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Current Status *</label>
                            <select class="form-select" name="current_status" required>
                                <option value="pending">Pending</option>
                                <option value="collected">Collected</option>
                                <option value="in_transit">In Transit</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Current Location *</label>
                            <input type="text" class="form-control" name="current_location" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Estimated Delivery Date *</label>
                            <input type="date" class="form-control" name="estimated_delivery" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Shipment</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function exportToCSV() {
    const table = document.getElementById('shipmentsTable');
    let csv = [];
    
    // Headers
    const headers = [];
    table.querySelectorAll('thead th').forEach(th => {
        if(th.textContent.trim() !== 'Actions') headers.push(th.textContent.trim());
    });
    csv.push(headers.join(','));
    
    // Rows
    table.querySelectorAll('tbody tr').forEach(tr => {
        const row = [];
        const cells = tr.querySelectorAll('td');
        for(let i = 0; i < cells.length - 1; i++) {
            row.push('"' + cells[i].textContent.trim().replace(/"/g, '""').replace(/\n/g, ' ') + '"');
        }
        csv.push(row.join(','));
    });
    
    // Download
    const blob = new Blob([csv.join('\n')], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'shipments_' + new Date().toISOString().slice(0,10) + '.csv';
    a.click();
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
