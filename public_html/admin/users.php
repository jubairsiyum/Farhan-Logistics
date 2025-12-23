<?php
require_once dirname(__DIR__) . '/config/security.php';

// Check if logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /admin/');
    exit;
}

// Include database connection
require_once dirname(__DIR__) . '/config/db.php';

$pageTitle = 'Admin Users';

// Handle user creation/editing
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'create' || $_POST['action'] === 'edit') {
        $user_id = $_POST['user_id'] ?? 0;
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $full_name = trim($_POST['full_name']);
        $role = $_POST['role'];
        $status = $_POST['status'];
        $password = $_POST['password'] ?? '';
        
        try {
            if ($user_id > 0) {
                // Update existing user
                if (!empty($password)) {
                    // Update with new password
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
                    $stmt = $pdo->prepare("UPDATE admin_users SET username = ?, email = ?, full_name = ?, role = ?, status = ?, password = ? WHERE id = ?");
                    $stmt->execute([$username, $email, $full_name, $role, $status, $hashed_password, $user_id]);
                } else {
                    // Update without password change
                    $stmt = $pdo->prepare("UPDATE admin_users SET username = ?, email = ?, full_name = ?, role = ?, status = ? WHERE id = ?");
                    $stmt->execute([$username, $email, $full_name, $role, $status, $user_id]);
                }
                $_SESSION['success_message'] = 'Admin user updated successfully';
            } else {
                // Create new user
                if (empty($password)) {
                    $_SESSION['error_message'] = 'Password is required for new users';
                } else {
                    $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
                    $stmt = $pdo->prepare("INSERT INTO admin_users (username, email, full_name, role, status, password) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->execute([$username, $email, $full_name, $role, $status, $hashed_password]);
                    $_SESSION['success_message'] = 'Admin user created successfully';
                }
            }
            header('Location: /admin/users');
            exit;
        } catch (PDOException $e) {
            $_SESSION['error_message'] = 'Error: ' . $e->getMessage();
        }
    }
    
    if ($_POST['action'] === 'delete') {
        $user_id = (int)$_POST['user_id'];
        if ($user_id !== $_SESSION['admin_id']) {
            try {
                $stmt = $pdo->prepare("DELETE FROM admin_users WHERE id = ?");
                $stmt->execute([$user_id]);
                $_SESSION['success_message'] = 'Admin user deleted successfully';
            } catch (PDOException $e) {
                $_SESSION['error_message'] = 'Error deleting user';
            }
        } else {
            $_SESSION['error_message'] = 'You cannot delete your own account';
        }
        header('Location: /admin/users');
        exit;
    }
}

// Fetch all admin users
$users = $pdo->query("SELECT * FROM admin_users ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);

// Check if editing
$editing_user = null;
if (isset($_GET['edit'])) {
    $edit_id = (int)$_GET['edit'];
    $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE id = ?");
    $stmt->execute([$edit_id]);
    $editing_user = $stmt->fetch(PDO::FETCH_ASSOC);
}

require_once __DIR__ . '/includes/header.php';
?>

<div class="container-fluid animate-in">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2><i class="bi bi-people-fill me-2"></i>Admin Users</h2>
                    <p class="text-muted mb-0">Manage administrator accounts and permissions</p>
                </div>
                <?php if (!$editing_user): ?>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">
                    <i class="bi bi-person-plus me-2"></i>Add New Admin
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['success_message'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-2"></i><?= htmlspecialchars($_SESSION['success_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['success_message']); endif; ?>

    <?php if (isset($_SESSION['error_message'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-circle me-2"></i><?= htmlspecialchars($_SESSION['error_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['error_message']); endif; ?>

    <?php if ($editing_user): ?>
    <!-- Edit Form -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Edit Admin User: <?= htmlspecialchars($editing_user['username']) ?></h5>
        </div>
        <div class="card-body">
            <form method="POST">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="user_id" value="<?= $editing_user['id'] ?>">
                <?php include 'includes/user-form.php'; ?>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <!-- Users List -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">All Administrators (<?= count($users) ?>)</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Login</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="user-avatar me-3" style="width: 40px; height: 40px; border-radius: 10px; background: linear-gradient(135deg, #ec2025, #c91d22); display: flex; align-items: center; justify-content: center; color: white; font-weight: 700;">
                                        <?= strtoupper(substr($user['username'], 0, 1)) ?>
                                    </div>
                                    <div>
                                        <strong><?= htmlspecialchars($user['full_name']) ?></strong>
                                        <br><small class="text-muted">@<?= htmlspecialchars($user['username']) ?></small>
                                    </div>
                                </div>
                            </td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <?php if ($user['role'] === 'super_admin'): ?>
                                    <span class="badge bg-danger">Super Admin</span>
                                <?php elseif ($user['role'] === 'admin'): ?>
                                    <span class="badge bg-primary">Admin</span>
                                <?php else: ?>
                                    <span class="badge bg-info">Manager</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($user['status'] === 'active'): ?>
                                    <span class="badge bg-success">Active</span>
                                <?php elseif ($user['status'] === 'inactive'): ?>
                                    <span class="badge bg-secondary">Inactive</span>
                                <?php else: ?>
                                    <span class="badge bg-warning">Suspended</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?= $user['last_login'] ? date('M d, Y', strtotime($user['last_login'])) : 'Never' ?>
                            </td>
                            <td><?= date('M d, Y', strtotime($user['created_at'])) ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/admin/users?edit=<?= $user['id'] ?>" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <?php if ($user['id'] !== $_SESSION['admin_id']): ?>
                                    <form method="POST" class="d-inline" onsubmit="return confirm('Delete this admin user?');">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Admin User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <input type="hidden" name="action" value="create">
                <div class="modal-body">
                    <?php $editing_user = null; ?>
                    <?php include 'includes/user-form.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
