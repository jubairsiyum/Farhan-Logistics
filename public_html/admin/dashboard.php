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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Farhan Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-navy: #2f338d;
            --primary-red: #ec2025;
            --sidebar-width: 260px;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f8f9fa;
        }
        
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-navy) 0%, #1e2256 100%);
            color: white;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 1rem 0;
            margin: 0;
        }
        
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding-left: 2rem;
        }
        
        .sidebar-menu li a i {
            margin-right: 0.75rem;
            font-size: 1.2rem;
        }
        
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
        }
        
        .top-bar {
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 2px solid transparent;
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
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
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
        }
        
        .badge-status {
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h5 class="mb-0"><i class="bi bi-shield-lock-fill me-2"></i>Admin Portal</h5>
            <small class="text-white-50">Farhan Logistics</small>
        </div>
        
        <ul class="sidebar-menu">
            <li><a href="/admin/dashboard" class="active"><i class="bi bi-speedometer2"></i>Dashboard</a></li>
            <li><a href="/admin/quotes"><i class="bi bi-file-text"></i>Quote Requests</a></li>
            <li><a href="/admin/contacts"><i class="bi bi-envelope"></i>Contact Submissions</a></li>
            <li><a href="/admin/careers"><i class="bi bi-briefcase"></i>Career Applications</a></li>
            <li><a href="/admin/logout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
        </ul>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <div>
                <h4 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">Dashboard Overview</h4>
                <small class="text-muted">Welcome back, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></small>
            </div>
            <div>
                <span class="badge bg-success me-2"><i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i>Online</span>
                <a href="/admin/logout" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-box-arrow-right me-1"></i>Logout
                </a>
            </div>
        </div>
        
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
