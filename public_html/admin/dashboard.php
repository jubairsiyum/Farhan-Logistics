<?php
session_start();
require_once dirname(__DIR__) . '/config/db.php';

// Check authentication
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /admin/');
    exit();
}

// Get statistics
$stats = [
    'quotes' => 0,
    'contacts' => 0,
    'careers' => 0,
    'today_quotes' => 0,
    'today_contacts' => 0,
    'today_careers' => 0,
];

try {
    // Total quotes
    $stmt = $pdo->query("SELECT COUNT(*) FROM quote_requests");
    $stats['quotes'] = $stmt->fetchColumn();
    
    // Total contacts
    $stmt = $pdo->query("SELECT COUNT(*) FROM contact_submissions");
    $stats['contacts'] = $stmt->fetchColumn();
    
    // Total careers
    $stmt = $pdo->query("SELECT COUNT(*) FROM career_applications");
    $stats['careers'] = $stmt->fetchColumn();
    
    // Today's quotes
    $stmt = $pdo->query("SELECT COUNT(*) FROM quote_requests WHERE DATE(created_at) = CURDATE()");
    $stats['today_quotes'] = $stmt->fetchColumn();
    
    // Today's contacts
    $stmt = $pdo->query("SELECT COUNT(*) FROM contact_submissions WHERE DATE(created_at) = CURDATE()");
    $stats['today_contacts'] = $stmt->fetchColumn();
    
    // Today's careers
    $stmt = $pdo->query("SELECT COUNT(*) FROM career_applications WHERE DATE(created_at) = CURDATE()");
    $stats['today_careers'] = $stmt->fetchColumn();
    
    // Recent activities
    $recent_quotes = $pdo->query("SELECT id, name, email, created_at FROM quote_requests ORDER BY created_at DESC LIMIT 5")->fetchAll();
    $recent_contacts = $pdo->query("SELECT id, name, email, created_at FROM contact_submissions ORDER BY created_at DESC LIMIT 5")->fetchAll();
    $recent_careers = $pdo->query("SELECT id, first_name, last_name, email, position, created_at FROM career_applications ORDER BY created_at DESC LIMIT 5")->fetchAll();
    
} catch (PDOException $e) {
    $error = "Database error: " . $e->getMessage();
}

$page_title = 'Dashboard';
require_once __DIR__ . '/includes/header.php';
?>

<style>
    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        height: 100%;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    
    .stat-card.red {
        border-left: 4px solid var(--primary-red);
    }
    
    .stat-card.navy {
        border-left: 4px solid var(--primary-navy);
    }
    
    .stat-card.success {
        border-left: 4px solid #28a745;
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: white;
    }
    
    .activity-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 1.5rem;
        height: 100%;
    }
    
    .activity-item {
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
        transition: background 0.2s ease;
    }
    
    .activity-item:last-child {
        border-bottom: none;
    }
    
    .activity-item:hover {
        background: #f8f9fa;
        border-radius: 8px;
    }
</style>

<!-- Dashboard Content -->
<!-- Dashboard Content -->

<!-- Statistics Cards -->
<div class="row g-4 mb-4">
            <div class="col-lg-4 col-md-6">
                <div class="stat-card red">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Quote Requests</p>
                            <h2 class="mb-0" style="color: var(--primary-navy); font-weight: 700;"><?php echo $stats['quotes']; ?></h2>
                            <small class="text-success"><i class="bi bi-arrow-up"></i> <?php echo $stats['today_quotes']; ?> today</small>
                        </div>
                        <div class="stat-icon" style="background: linear-gradient(135deg, var(--primary-red), #c91d22);">
                            <i class="bi bi-file-text"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="stat-card navy">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Contact Messages</p>
                            <h2 class="mb-0" style="color: var(--primary-navy); font-weight: 700;"><?php echo $stats['contacts']; ?></h2>
                            <small class="text-success"><i class="bi bi-arrow-up"></i> <?php echo $stats['today_contacts']; ?> today</small>
                        </div>
                        <div class="stat-icon" style="background: linear-gradient(135deg, var(--primary-navy), #1e2256);">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="stat-card success">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="text-muted mb-1">Job Applications</p>
                            <h2 class="mb-0" style="color: var(--primary-navy); font-weight: 700;"><?php echo $stats['careers']; ?></h2>
                            <small class="text-success"><i class="bi bi-arrow-up"></i> <?php echo $stats['today_careers']; ?> today</small>
                        </div>
                        <div class="stat-icon" style="background: linear-gradient(135deg, #28a745, #1e7e34);">
                            <i class="bi bi-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Activities -->
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="activity-card">
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">
                        <i class="bi bi-file-text me-2" style="color: var(--primary-red);"></i>Recent Quotes
                    </h5>
                    <?php if (!empty($recent_quotes)): ?>
                        <?php foreach ($recent_quotes as $quote): ?>
                            <div class="activity-item">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <strong style="color: var(--primary-navy);"><?php echo htmlspecialchars($quote['name']); ?></strong>
                                        <p class="mb-0 small text-muted"><?php echo htmlspecialchars($quote['email']); ?></p>
                                        <small class="text-muted"><i class="bi bi-clock me-1"></i><?php echo date('M d, Y H:i', strtotime($quote['created_at'])); ?></small>
                                    </div>
                                    <a href="/admin/quotes?id=<?php echo $quote['id']; ?>" class="btn btn-sm btn-outline-primary">View</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted text-center py-3">No recent quotes</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="activity-card">
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">
                        <i class="bi bi-envelope me-2" style="color: var(--primary-red);"></i>Recent Contacts
                    </h5>
                    <?php if (!empty($recent_contacts)): ?>
                        <?php foreach ($recent_contacts as $contact): ?>
                            <div class="activity-item">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <strong style="color: var(--primary-navy);"><?php echo htmlspecialchars($contact['name']); ?></strong>
                                        <p class="mb-0 small text-muted"><?php echo htmlspecialchars($contact['email']); ?></p>
                                        <small class="text-muted"><i class="bi bi-clock me-1"></i><?php echo date('M d, Y H:i', strtotime($contact['created_at'])); ?></small>
                                    </div>
                                    <a href="/admin/contacts?id=<?php echo $contact['id']; ?>" class="btn btn-sm btn-outline-primary">View</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted text-center py-3">No recent contacts</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="activity-card">
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">
                        <i class="bi bi-briefcase me-2" style="color: var(--primary-red);"></i>Recent Applications
                    </h5>
                    <?php if (!empty($recent_careers)): ?>
                        <?php foreach ($recent_careers as $career): ?>
                            <div class="activity-item">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <strong style="color: var(--primary-navy);"><?php echo htmlspecialchars($career['first_name'] . ' ' . $career['last_name']); ?></strong>
                                        <p class="mb-0 small text-muted"><?php echo htmlspecialchars($career['position']); ?></p>
                                        <small class="text-muted"><i class="bi bi-clock me-1"></i><?php echo date('M d, Y H:i', strtotime($career['created_at'])); ?></small>
                                    </div>
                                    <a href="/admin/careers?id=<?php echo $career['id']; ?>" class="btn btn-sm btn-outline-primary">View</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted text-center py-3">No recent applications</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
