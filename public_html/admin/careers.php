<?php
session_start();
require_once dirname(__DIR__) . '/config/db.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /admin/');
    exit();
}

$pageTitle = 'Career Applications';

// Handle delete
if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    try {
        $stmt = $pdo->prepare("DELETE FROM career_applications WHERE id = ?");
        $stmt->execute([$id]);
        $success = "Application deleted successfully.";
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}

// Get single application if ID provided
$single_app = null;
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM career_applications WHERE id = ?");
    $stmt->execute([$id]);
    $single_app = $stmt->fetch();
}

// Get all applications with pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 15;
$offset = ($page - 1) * $per_page;

$stmt = $pdo->query("SELECT COUNT(*) FROM career_applications");
$total = $stmt->fetchColumn();
$total_pages = ceil($total / $per_page);

$stmt = $pdo->prepare("SELECT * FROM career_applications ORDER BY created_at DESC LIMIT ? OFFSET ?");
$stmt->execute([$per_page, $offset]);
$applications = $stmt->fetchAll();

include __DIR__ . '/includes/header.php';
?>

<div class="container-fluid">
    <?php if (isset($success)): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <i class="bi bi-check-circle me-2"></i><?php echo $success; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    
    <?php if (isset($error)): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="bi bi-exclamation-triangle me-2"></i><?php echo $error; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: var(--primary-navy); font-weight: 700;">
            <i class="bi bi-briefcase me-2" style="color: var(--primary-red);"></i>Career Applications
        </h2>
        <span class="badge bg-primary" style="font-size: 1rem; padding: 0.5rem 1rem;">
            Total: <?php echo $total; ?>
        </span>
    </div>
    
    <?php if ($single_app): ?>
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Application #<?php echo $single_app['id']; ?></h5>
                <a href="/admin/careers" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Back to List
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Name:</strong><br>
                        <?php echo htmlspecialchars($single_app['first_name'] . ' ' . $single_app['last_name']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Email:</strong><br>
                        <a href="mailto:<?php echo htmlspecialchars($single_app['email']); ?>">
                            <?php echo htmlspecialchars($single_app['email']); ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Phone:</strong><br>
                        <a href="tel:<?php echo htmlspecialchars($single_app['phone']); ?>">
                            <?php echo htmlspecialchars($single_app['phone']); ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Position Applied:</strong><br>
                        <span class="badge bg-info"><?php echo htmlspecialchars($single_app['position']); ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Experience:</strong><br>
                        <?php echo htmlspecialchars($single_app['experience_years']); ?> years
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Current/Last Company:</strong><br>
                        <?php echo htmlspecialchars($single_app['current_company'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Education:</strong><br>
                        <?php echo htmlspecialchars($single_app['education'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>LinkedIn:</strong><br>
                        <?php if ($single_app['linkedin_url']): ?>
                            <a href="<?php echo htmlspecialchars($single_app['linkedin_url']); ?>" target="_blank">
                                View Profile <i class="bi bi-box-arrow-up-right"></i>
                            </a>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Resume:</strong><br>
                        <?php if ($single_app['resume_path']): ?>
                            <a href="/<?php echo htmlspecialchars($single_app['resume_path']); ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-file-pdf me-1"></i>Download Resume
                            </a>
                            <br><small class="text-muted"><?php echo htmlspecialchars($single_app['resume_filename'] ?? ''); ?></small>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Applied Date:</strong><br>
                        <?php echo date('F j, Y g:i A', strtotime($single_app['created_at'])); ?>
                    </div>
                    <div class="col-12 mb-3">
                        <strong>Cover Letter:</strong><br>
                        <div class="p-3 bg-light rounded">
                            <?php echo nl2br(htmlspecialchars($single_app['cover_letter'] ?? 'Not provided')); ?>
                        </div>
                    </div>
                </div>
                <form method="POST" onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="id" value="<?php echo $single_app['id']; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i>Delete Application
                    </button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Position</th>
                                <th>Experience</th>
                                <th>Resume</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($applications)): ?>
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">No applications found</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($applications as $app): ?>
                                    <tr>
                                        <td><?php echo $app['id']; ?></td>
                                        <td><?php echo htmlspecialchars($app['first_name'] . ' ' . $app['last_name']); ?></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($app['email']); ?>"><?php echo htmlspecialchars($app['email']); ?></a></td>
                                        <td><?php echo htmlspecialchars($app['phone']); ?></td>
                                        <td><span class="badge bg-info"><?php echo htmlspecialchars($app['position']); ?></span></td>
                                        <td><?php echo htmlspecialchars($app['experience_years']); ?>y</td>
                                        <td>
                                            <?php if ($app['resume_path']): ?>
                                                <a href="<?php echo htmlspecialchars($app['resume_path']); ?>" target="_blank" class="btn btn-sm btn-outline-success">
                                                    <i class="bi bi-file-pdf"></i>
                                                </a>
                                            <?php else: ?>
                                                N/A
                                            <?php endif; ?>
                                        </td>
                                        <td class="small"><?php echo date('M d, Y', strtotime($app['created_at'])); ?></td>
                                        <td>
                                            <a href="?id=<?php echo $app['id']; ?>" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
                <?php if ($total_pages > 1): ?>
                    <nav>
                        <ul class="pagination justify-content-center">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
