<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Admin Dashboard'; ?> - Farhan Logistics Admin</title>
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
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
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
            <li><a href="/admin/dashboard" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>"><i class="bi bi-speedometer2"></i>Dashboard</a></li>
            <li><a href="/admin/quotes" class="<?php echo basename($_SERVER['PHP_SELF']) == 'quotes.php' ? 'active' : ''; ?>"><i class="bi bi-file-text"></i>Quote Requests</a></li>
            <li><a href="/admin/contacts" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : ''; ?>"><i class="bi bi-envelope"></i>Contact Submissions</a></li>
            <li><a href="/admin/careers" class="<?php echo basename($_SERVER['PHP_SELF']) == 'careers.php' ? 'active' : ''; ?>"><i class="bi bi-person-badge"></i>Applications</a></li>
            <li><a href="/admin/jobs" class="<?php echo basename($_SERVER['PHP_SELF']) == 'jobs.php' ? 'active' : ''; ?>"><i class="bi bi-briefcase"></i>Job Postings</a></li>
            <li><a href="/admin/logout"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
        </ul>
        
        <div class="px-3 py-4 border-top border-white-10 mt-auto">
            <small class="text-white-50">Logged in as</small><br>
            <strong><?php echo htmlspecialchars($_SESSION['admin_username'] ?? 'Admin'); ?></strong>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar">
            <div>
                <h4 class="mb-0" style="color: var(--primary-navy); font-weight: 700;"><?php echo $pageTitle ?? 'Admin Dashboard'; ?></h4>
                <small class="text-muted"><?php echo date('l, F j, Y'); ?></small>
            </div>
            <div>
                <a href="/" class="btn btn-outline-primary btn-sm me-2" target="_blank">
                    <i class="bi bi-box-arrow-up-right me-1"></i>View Website
                </a>
                <a href="/admin/logout" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-box-arrow-right me-1"></i>Logout
                </a>
            </div>
        </div>
