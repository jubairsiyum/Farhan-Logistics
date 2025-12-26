<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Admin Dashboard'; ?> - Farhan Logistics Admin</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/fav.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/fav.png">
    <link rel="apple-touch-icon" href="/assets/images/fav.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-navy: #2f338d;
            --primary-red: #ec2025;
            --sidebar-width: 280px;
            --sidebar-bg: #1a1d2e;
            --sidebar-hover: #252939;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f6fa;
            overflow-x: hidden;
        }
        
        /* Modern Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            color: white;
            overflow-y: auto;
            overflow-x: hidden;
            z-index: 1000;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
        }
        
        .sidebar-brand {
            padding: 1.75rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            background: linear-gradient(135deg, var(--primary-navy), #1e2256);
        }
        
        .sidebar-brand h4 {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            color: white;
        }
        
        .sidebar-brand h4 i {
            font-size: 1.5rem;
            margin-right: 0.75rem;
            color: var(--primary-red);
        }
        
        .sidebar-brand small {
            display: block;
            margin-top: 0.25rem;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.8rem;
        }
        
        .sidebar-section {
            padding: 1.5rem 0 0.5rem 1.5rem;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: rgba(255, 255, 255, 0.4);
            font-weight: 600;
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0.5rem 0;
            margin: 0;
        }
        
        .sidebar-menu li {
            margin: 0.25rem 0.75rem;
        }
        
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            padding: 0.875rem 1rem;
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            transition: all 0.3s ease;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 500;
            position: relative;
        }
        
        .sidebar-menu li a:hover {
            background: var(--sidebar-hover);
            color: white;
            transform: translateX(4px);
        }
        
        .sidebar-menu li a.active {
            background: linear-gradient(135deg, var(--primary-red), #c91d22);
            color: white;
            box-shadow: 0 4px 12px rgba(236, 32, 37, 0.3);
        }
        
        .sidebar-menu li a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 70%;
            background: white;
            border-radius: 0 4px 4px 0;
        }
        
        .sidebar-menu li a i {
            margin-right: 1rem;
            font-size: 1.25rem;
            width: 24px;
            text-align: center;
        }
        
        .sidebar-menu li a .badge {
            margin-left: auto;
            font-size: 0.7rem;
            padding: 0.25rem 0.5rem;
        }
        
        .sidebar-footer {
            padding: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            margin-top: auto;
            background: rgba(0, 0, 0, 0.2);
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            margin-bottom: 1rem;
        }
        
        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-red), #c91d22);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            font-weight: 700;
            margin-right: 0.875rem;
            flex-shrink: 0;
        }
        
        .user-info strong {
            display: block;
            font-size: 0.95rem;
            color: white;
        }
        
        .user-info small {
            display: block;
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 0.125rem;
        }
        
        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        
        .top-bar {
            background: white;
            padding: 1.25rem 1.75rem;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .top-bar h4 {
            font-size: 1.5rem;
            margin: 0;
        }
        
        .page-subtitle {
            color: #6c757d;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            border-bottom: 2px solid rgba(0, 0, 0, 0.05);
            padding: 1.25rem 1.5rem;
            border-radius: 16px 16px 0 0 !important;
        }
        
        .btn {
            border-radius: 10px;
            padding: 0.5rem 1.25rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-red), #c91d22);
            border: none;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(236, 32, 37, 0.4);
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .top-bar {
                flex-direction: column;
                gap: 1rem;
            }
        }
        
        /* Table Styles */
        .table {
            margin: 0;
        }
        
        .table-responsive {
            border-radius: 12px;
            overflow-x: auto;
            overflow-y: visible;
        }
        
        .table-responsive::-webkit-scrollbar {
            height: 8px;
        }
        
        .table-responsive::-webkit-scrollbar-track {
            background: #f1f3f5;
            border-radius: 4px;
        }
        
        .table-responsive::-webkit-scrollbar-thumb {
            background: #adb5bd;
            border-radius: 4px;
            transition: background 0.3s ease;
        }
        
        .table-responsive::-webkit-scrollbar-thumb:hover {
            background: #868e96;
        }
        
        .table thead th {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            color: #495057;
            padding: 1rem;
            white-space: nowrap;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .table tbody tr {
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
            border-bottom: 1px solid #f1f3f5;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            color: #495057;
        }
        
        /* Badge Styles */
        .badge {
            padding: 0.5rem 0.875rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.75rem;
            letter-spacing: 0.3px;
        }
        
        .badge.bg-success {
            background: linear-gradient(135deg, #28a745, #20c997) !important;
        }
        
        .badge.bg-danger {
            background: linear-gradient(135deg, #dc3545, #c82333) !important;
        }
        
        .badge.bg-warning {
            background: linear-gradient(135deg, #ffc107, #e0a800) !important;
            color: #000;
        }
        
        .badge.bg-info {
            background: linear-gradient(135deg, #17a2b8, #138496) !important;
        }
        
        .badge.bg-primary {
            background: linear-gradient(135deg, var(--primary-navy), #1e2256) !important;
        }
        
        /* Action Buttons in Tables */
        .table .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.8rem;
            border-radius: 6px;
        }
        
        .table .btn-group {
            display: flex;
            gap: 0.375rem;
        }
        
        /* Search and Filter Controls */
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #dee2e6;
            padding: 0.625rem 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-red);
            box-shadow: 0 0 0 3px rgba(236, 32, 37, 0.1);
        }
        
        /* Modal Enhancements */
        .modal-content {
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--primary-navy), #1e2256);
            color: white;
            border-radius: 16px 16px 0 0;
            padding: 1.25rem 1.5rem;
            border-bottom: none;
        }
        
        .modal-header .btn-close {
            filter: invert(1);
        }
        
        .modal-footer {
            border-top: 1px solid #e9ecef;
            padding: 1rem 1.5rem;
        }
        
        /* Pagination Styling */
        .pagination {
            margin: 1.5rem 0 0;
        }
        
        .page-link {
            border-radius: 8px;
            margin: 0 0.25rem;
            border: 1px solid #dee2e6;
            color: var(--primary-navy);
            padding: 0.5rem 0.875rem;
            transition: all 0.3s ease;
        }
        
        .page-link:hover {
            background: var(--primary-red);
            border-color: var(--primary-red);
            color: white;
            transform: translateY(-2px);
        }
        
        .page-item.active .page-link {
            background: linear-gradient(135deg, var(--primary-red), #c91d22);
            border-color: var(--primary-red);
        }
        
        .page-item.disabled .page-link {
            background: #f8f9fa;
            border-color: #dee2e6;
        }
        
        /* Animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-in {
            animation: slideIn 0.4s ease;
        }
    </style>
</head>
<body>
    <!-- Modern Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="bi bi-truck"></i>Farhan Logistics</h4>
            <small>Administration Portal</small>
        </div>
        
        <div class="sidebar-section">Main Navigation</div>
        <ul class="sidebar-menu">
            <li>
                <a href="/admin/dashboard" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                    <i class="bi bi-speedometer2"></i>Dashboard
                </a>
            </li>
            <li>
                <a href="/admin/shipments" class="<?php echo basename($_SERVER['PHP_SELF']) == 'shipments.php' ? 'active' : ''; ?>">
                    <i class="bi bi-box-seam"></i>Shipment Tracking
                </a>
            </li>
        </ul>
        
        <div class="sidebar-section">Customer Management</div>
        <ul class="sidebar-menu">
            <li>
                <a href="/admin/quotes" class="<?php echo basename($_SERVER['PHP_SELF']) == 'quotes.php' ? 'active' : ''; ?>">
                    <i class="bi bi-file-text"></i>Quote Requests
                </a>
            </li>
            <li>
                <a href="/admin/contacts" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : ''; ?>">
                    <i class="bi bi-envelope"></i>Contact Messages
                </a>
            </li>
        </ul>
        
        <div class="sidebar-section">Human Resources</div>
        <ul class="sidebar-menu">
            <li>
                <a href="/admin/jobs" class="<?php echo basename($_SERVER['PHP_SELF']) == 'jobs.php' ? 'active' : ''; ?>">
                    <i class="bi bi-briefcase"></i>Job Postings
                </a>
            </li>
            <li>
                <a href="/admin/careers" class="<?php echo basename($_SERVER['PHP_SELF']) == 'careers.php' ? 'active' : ''; ?>">
                    <i class="bi bi-person-badge"></i>Applications
                </a>
            </li>
        </ul>
        
        <div class="sidebar-section">System</div>
        <ul class="sidebar-menu">
            <li>
                <a href="/admin/users" class="<?php echo basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : ''; ?>">
                    <i class="bi bi-people"></i>Admin Users
                </a>
            </li>
            <li>
                <a href="/admin/email-config" class="<?php echo basename($_SERVER['PHP_SELF']) == 'email-config.php' ? 'active' : ''; ?>">
                    <i class="bi bi-envelope-at"></i>Email Configuration
                </a>
            </li>
        </ul>
        
        <div style="flex-grow: 1;"></div>
        
        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-avatar">
                    <?php echo strtoupper(substr($_SESSION['admin_username'] ?? 'A', 0, 1)); ?>
                </div>
                <div class="user-info">
                    <strong><?php echo htmlspecialchars($_SESSION['admin_name'] ?? $_SESSION['admin_username'] ?? 'Admin'); ?></strong>
                    <small><?php echo ucfirst($_SESSION['admin_role'] ?? 'Administrator'); ?></small>
                </div>
            </div>
            <a href="/admin/logout" class="btn btn-outline-light btn-sm w-100">
                <i class="bi bi-box-arrow-right me-2"></i>Logout
            </a>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <div class="top-bar animate-in">
            <div>
                <h4 style="color: var(--primary-navy); font-weight: 700;"><?php echo $pageTitle ?? 'Admin Dashboard'; ?></h4>
                <div class="page-subtitle">
                    <i class="bi bi-calendar3 me-2"></i><?php echo date('l, F j, Y'); ?>
                </div>
            </div>
            <div>
                <a href="/" class="btn btn-outline-secondary btn-sm me-2" target="_blank">
                    <i class="bi bi-globe me-1"></i>View Website
                </a>
            </div>
        </div>
