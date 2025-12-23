<?php
session_start();
require_once dirname(__DIR__) . '/config/db.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /admin/');
    exit();
}

$pageTitle = 'Contact Submissions';

// Handle delete
if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    try {
        $stmt = $pdo->prepare("DELETE FROM contact_submissions WHERE id = ?");
        $stmt->execute([$id]);
        $success = "Contact submission deleted successfully.";
    } catch (PDOException $e) {
        $error = "Error: " . $e->getMessage();
    }
}

// Get single contact if ID provided
$single_contact = null;
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM contact_submissions WHERE id = ?");
    $stmt->execute([$id]);
    $single_contact = $stmt->fetch();
}

// Get all contacts with pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 15;
$offset = ($page - 1) * $per_page;

$stmt = $pdo->query("SELECT COUNT(*) FROM contact_submissions");
$total = $stmt->fetchColumn();
$total_pages = ceil($total / $per_page);

$stmt = $pdo->prepare("SELECT * FROM contact_submissions ORDER BY created_at DESC LIMIT ? OFFSET ?");
$stmt->execute([$per_page, $offset]);
$contacts = $stmt->fetchAll();

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
            <i class="bi bi-envelope me-2" style="color: var(--primary-red);"></i>Contact Submissions
        </h2>
        <span class="badge bg-primary" style="font-size: 1rem; padding: 0.5rem 1rem;">
            Total: <?php echo $total; ?>
        </span>
    </div>
    
    <?php if ($single_contact): ?>
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Contact Message #<?php echo $single_contact['id']; ?></h5>
                <a href="/admin/contacts" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Back to List
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Name:</strong><br>
                        <?php echo htmlspecialchars($single_contact['name']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Email:</strong><br>
                        <a href="mailto:<?php echo htmlspecialchars($single_contact['email']); ?>">
                            <?php echo htmlspecialchars($single_contact['email']); ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Phone:</strong><br>
                        <a href="tel:<?php echo htmlspecialchars($single_contact['phone'] ?? 'N/A'); ?>">
                            <?php echo htmlspecialchars($single_contact['phone'] ?? 'N/A'); ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Subject:</strong><br>
                        <?php echo htmlspecialchars($single_contact['subject'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Submitted:</strong><br>
                        <?php echo date('F j, Y g:i A', strtotime($single_contact['created_at'])); ?>
                    </div>
                    <div class="col-12 mb-3">
                        <strong>Message:</strong><br>
                        <div class="p-3 bg-light rounded">
                            <?php echo nl2br(htmlspecialchars($single_contact['message'])); ?>
                        </div>
                    </div>
                </div>
                <form method="POST" onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="id" value="<?php echo $single_contact['id']; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i>Delete Message
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
                                <th>Subject</th>
                                <th>Message Preview</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($contacts)): ?>
                                <tr>
                                    <td colspan="8" class="text-center text-muted py-4">No contact submissions found</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($contacts as $contact): ?>
                                    <tr>
                                        <td><?php echo $contact['id']; ?></td>
                                        <td><?php echo htmlspecialchars($contact['name']); ?></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($contact['email']); ?>"><?php echo htmlspecialchars($contact['email']); ?></a></td>
                                        <td><?php echo htmlspecialchars($contact['phone'] ?? 'N/A'); ?></td>
                                        <td><?php echo htmlspecialchars($contact['subject'] ?? 'N/A'); ?></td>
                                        <td class="small"><?php echo htmlspecialchars(substr($contact['message'], 0, 50)) . '...'; ?></td>
                                        <td class="small"><?php echo date('M d, Y', strtotime($contact['created_at'])); ?></td>
                                        <td>
                                            <a href="?id=<?php echo $contact['id']; ?>" class="btn btn-sm btn-outline-primary">
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
