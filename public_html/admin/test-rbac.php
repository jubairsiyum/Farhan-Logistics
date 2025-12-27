<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RBAC Test - Farhan Logistics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-navy: #2f338d;
            --primary-red: #ec2025;
        }
        body { padding: 2rem; background: #f5f6fa; }
        .test-card { margin-bottom: 1rem; }
        .pass { color: #28a745; }
        .fail { color: #dc3545; }
        .pending { color: #ffc107; }
    </style>
</head>
<body>
<?php
require_once dirname(__DIR__) . '/config/security.php';
require_once dirname(__DIR__) . '/config/db.php';

// Check if logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo '<div class="alert alert-warning">Please log in to the admin panel first.</div>';
    echo '<a href="/admin/" class="btn btn-primary">Go to Admin Login</a>';
    exit;
}

$currentRole = $_SESSION['admin_role'] ?? 'none';
$currentUser = $_SESSION['admin_username'] ?? 'unknown';
?>

<div class="container">
    <h1 class="mb-4"><i class="bi bi-shield-check"></i> RBAC Implementation Test</h1>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Current Session Information</h5>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th style="width: 200px;">Username:</th>
                    <td><?= htmlspecialchars($currentUser) ?></td>
                </tr>
                <tr>
                    <th>Role:</th>
                    <td>
                        <span class="badge bg-<?= $currentRole === 'super_admin' ? 'danger' : ($currentRole === 'admin' ? 'primary' : 'info') ?>">
                            <?= ucfirst(str_replace('_', ' ', $currentRole)) ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><?= htmlspecialchars($_SESSION['admin_name'] ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?= htmlspecialchars($_SESSION['admin_email'] ?? 'N/A') ?></td>
                </tr>
            </table>
        </div>
    </div>

    <h3 class="mb-3">Function Tests</h3>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card test-card">
                <div class="card-header">
                    <strong>Role Check Functions</strong>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-<?= isSuperAdmin() ? 'check-circle pass' : 'x-circle fail' ?>"></i> isSuperAdmin(): <strong><?= isSuperAdmin() ? 'TRUE' : 'FALSE' ?></strong></li>
                        <li><i class="bi bi-<?= isAdmin() ? 'check-circle pass' : 'x-circle fail' ?>"></i> isAdmin(): <strong><?= isAdmin() ? 'TRUE' : 'FALSE' ?></strong></li>
                        <li><i class="bi bi-<?= isManager() ? 'check-circle pass' : 'x-circle fail' ?>"></i> isManager(): <strong><?= isManager() ? 'TRUE' : 'FALSE' ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card test-card">
                <div class="card-header">
                    <strong>Permission Checks</strong>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-<?= canCreateRole('super_admin') ? 'check-circle pass' : 'x-circle fail' ?>"></i> Can create Super Admin: <strong><?= canCreateRole('super_admin') ? 'YES' : 'NO' ?></strong></li>
                        <li><i class="bi bi-<?= canCreateRole('admin') ? 'check-circle pass' : 'x-circle fail' ?>"></i> Can create Admin: <strong><?= canCreateRole('admin') ? 'YES' : 'NO' ?></strong></li>
                        <li><i class="bi bi-<?= canCreateRole('manager') ? 'check-circle pass' : 'x-circle fail' ?>"></i> Can create Manager: <strong><?= canCreateRole('manager') ? 'YES' : 'NO' ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card test-card">
                <div class="card-header">
                    <strong>Edit Permissions</strong>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-<?= canEditRole('super_admin') ? 'check-circle pass' : 'x-circle fail' ?>"></i> Can edit Super Admin: <strong><?= canEditRole('super_admin') ? 'YES' : 'NO' ?></strong></li>
                        <li><i class="bi bi-<?= canEditRole('admin') ? 'check-circle pass' : 'x-circle fail' ?>"></i> Can edit Admin: <strong><?= canEditRole('admin') ? 'YES' : 'NO' ?></strong></li>
                        <li><i class="bi bi-<?= canEditRole('manager') ? 'check-circle pass' : 'x-circle fail' ?>"></i> Can edit Manager: <strong><?= canEditRole('manager') ? 'YES' : 'NO' ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card test-card">
                <div class="card-header">
                    <strong>Allowed Roles</strong>
                </div>
                <div class="card-body">
                    <?php 
                    $allowedRoles = getAllowedRoles();
                    if (empty($allowedRoles)): 
                    ?>
                        <p class="text-muted mb-0"><i class="bi bi-info-circle"></i> No roles can be assigned</p>
                    <?php else: ?>
                        <p class="mb-2">Can assign these roles:</p>
                        <div>
                            <?php foreach ($allowedRoles as $role): ?>
                                <span class="badge bg-secondary"><?= ucfirst($role) ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mb-3 mt-4">Page Access Tests</h3>
    
    <div class="card">
        <div class="card-header">
            <strong>Test Access to Protected Pages</strong>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Expected Access</th>
                            <th>Test Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="bi bi-envelope-at"></i> Email Configuration</td>
                            <td>
                                <?php if ($currentRole === 'super_admin'): ?>
                                    <span class="badge bg-success">Should Access</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Should Deny</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="/admin/email-config" class="btn btn-sm btn-outline-primary" target="_blank">
                                    Test Access <i class="bi bi-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-people"></i> Admin Users</td>
                            <td><span class="badge bg-success">Should Access</span></td>
                            <td>
                                <a href="/admin/users" class="btn btn-sm btn-outline-primary" target="_blank">
                                    Test Access <i class="bi bi-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-speedometer2"></i> Dashboard</td>
                            <td><span class="badge bg-success">Should Access</span></td>
                            <td>
                                <a href="/admin/dashboard" class="btn btn-sm btn-outline-primary" target="_blank">
                                    Test Access <i class="bi bi-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h3 class="mb-3 mt-4">Expected Behavior for Your Role</h3>
    
    <div class="card">
        <div class="card-header bg-<?= $currentRole === 'super_admin' ? 'danger' : ($currentRole === 'admin' ? 'primary' : 'info') ?> text-white">
            <h5 class="mb-0">
                <?= ucfirst(str_replace('_', ' ', $currentRole)) ?> Permissions
            </h5>
        </div>
        <div class="card-body">
            <?php if ($currentRole === 'super_admin'): ?>
                <h6 class="text-success"><i class="bi bi-shield-check"></i> Full Access - Super Administrator</h6>
                <ul>
                    <li>✅ Can access Email Configuration</li>
                    <li>✅ Can create Admin users</li>
                    <li>✅ Can create Manager users</li>
                    <li>✅ Can edit all user types</li>
                    <li>✅ Can delete users (except self)</li>
                    <li>✅ Full system access</li>
                </ul>
            <?php elseif ($currentRole === 'admin'): ?>
                <h6 class="text-primary"><i class="bi bi-shield"></i> Limited Access - Administrator</h6>
                <ul>
                    <li>❌ Cannot access Email Configuration</li>
                    <li>❌ Cannot create Super Admin users</li>
                    <li>✅ Can create Manager users</li>
                    <li>✅ Can edit Admin and Manager users</li>
                    <li>✅ Can delete users (except self)</li>
                    <li>✅ Most features accessible</li>
                </ul>
            <?php elseif ($currentRole === 'manager'): ?>
                <h6 class="text-info"><i class="bi bi-eye"></i> View Only - Manager</h6>
                <ul>
                    <li>❌ Cannot access Email Configuration</li>
                    <li>❌ Cannot create any users</li>
                    <li>❌ Cannot edit any users</li>
                    <li>❌ Cannot delete any users</li>
                    <li>👁️ Can view user list</li>
                    <li>✅ Can access other features</li>
                </ul>
            <?php else: ?>
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-triangle"></i> Unknown role: <?= htmlspecialchars($currentRole) ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="mt-4">
        <a href="/admin/dashboard" class="btn btn-primary">
            <i class="bi bi-arrow-left"></i> Back to Dashboard
        </a>
        <a href="/admin/users" class="btn btn-outline-secondary">
            <i class="bi bi-people"></i> Manage Users
        </a>
        <a href="/admin/logout" class="btn btn-outline-danger">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

    <div class="mt-4">
        <div class="alert alert-info">
            <strong><i class="bi bi-info-circle"></i> Testing Tips:</strong>
            <ul class="mb-0 mt-2">
                <li>Test accessing Email Configuration directly to see if access control works</li>
                <li>Try creating users with different roles to verify permissions</li>
                <li>Test with different user accounts (Super Admin, Admin, Manager)</li>
                <li>Check security logs at <code>logs/security.log</code> for unauthorized attempts</li>
            </ul>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
