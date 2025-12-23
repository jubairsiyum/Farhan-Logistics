<?php
session_start();
require_once dirname(__DIR__) . '/config/db.php';

// Check authentication
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /admin/');
    exit();
}

// Handle delete action
if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = (int)$_POST['id'];
    try {
        $stmt = $pdo->prepare("DELETE FROM quote_requests WHERE id = ?");
        $stmt->execute([$id]);
        $success = "Quote request deleted successfully.";
    } catch (PDOException $e) {
        $error = "Error deleting record: " . $e->getMessage();
    }
}

// Get single quote if ID provided
$single_quote = null;
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM quote_requests WHERE id = ?");
    $stmt->execute([$id]);
    $single_quote = $stmt->fetch();
}

// Get all quotes with pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 15;
$offset = ($page - 1) * $per_page;

$stmt = $pdo->query("SELECT COUNT(*) FROM quote_requests");
$total_quotes = $stmt->fetchColumn();
$total_pages = ceil($total_quotes / $per_page);

$stmt = $pdo->prepare("SELECT * FROM quote_requests ORDER BY created_at DESC LIMIT ? OFFSET ?");
$stmt->execute([$per_page, $offset]);
$quotes = $stmt->fetchAll();

// Include admin header
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
            <i class="bi bi-file-text me-2" style="color: var(--primary-red);"></i>Quote Requests
        </h2>
        <span class="badge bg-primary" style="font-size: 1rem; padding: 0.5rem 1rem;">
            Total: <?php echo $total_quotes; ?>
        </span>
    </div>
    
    <?php if ($single_quote): ?>
        <!-- Single Quote View -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Quote Request #<?php echo $single_quote['id']; ?></h5>
                <a href="/admin/quotes" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Back to List
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Name:</strong><br>
                        <?php echo htmlspecialchars($single_quote['name']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Email:</strong><br>
                        <a href="mailto:<?php echo htmlspecialchars($single_quote['email']); ?>">
                            <?php echo htmlspecialchars($single_quote['email']); ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Phone:</strong><br>
                        <a href="tel:<?php echo htmlspecialchars($single_quote['phone']); ?>">
                            <?php echo htmlspecialchars($single_quote['phone']); ?>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Company:</strong><br>
                        <?php echo htmlspecialchars($single_quote['company']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Service Type:</strong><br>
                        <span class="badge bg-info"><?php echo htmlspecialchars($single_quote['service_type']); ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Cargo Type:</strong><br>
                        <?php echo htmlspecialchars($single_quote['cargo_type'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Origin:</strong><br>
                        <?php echo htmlspecialchars($single_quote['origin']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Destination:</strong><br>
                        <?php echo htmlspecialchars($single_quote['destination']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Shipment Date:</strong><br>
                        <?php echo htmlspecialchars($single_quote['shipment_date'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Weight (kg):</strong><br>
                        <?php echo htmlspecialchars($single_quote['weight'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Dimensions:</strong><br>
                        <?php echo htmlspecialchars($single_quote['dimensions'] ?? 'N/A'); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Submitted:</strong><br>
                        <?php echo date('F j, Y g:i A', strtotime($single_quote['created_at'])); ?>
                    </div>
                    <div class="col-12 mb-3">
                        <strong>Additional Details:</strong><br>
                        <div class="p-3 bg-light rounded">
                            <?php echo nl2br(htmlspecialchars($single_quote['additional_details'] ?? 'None')); ?>
                        </div>
                    </div>
                </div>
                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this quote request?');">
                    <input type="hidden" name="id" value="<?php echo $single_quote['id']; ?>">
                    <button type="submit" name="delete" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i>Delete Request
                    </button>
                </form>
            </div>
        </div>
    <?php else: ?>
        <!-- Quotes List -->
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Service</th>
                                <th>Route</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($quotes)): ?>
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">No quote requests found</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($quotes as $quote): ?>
                                    <tr>
                                        <td><?php echo $quote['id']; ?></td>
                                        <td><?php echo htmlspecialchars($quote['name']); ?></td>
                                        <td><?php echo htmlspecialchars($quote['company']); ?></td>
                                        <td><a href="mailto:<?php echo htmlspecialchars($quote['email']); ?>"><?php echo htmlspecialchars($quote['email']); ?></a></td>
                                        <td><?php echo htmlspecialchars($quote['phone']); ?></td>
                                        <td><span class="badge bg-info"><?php echo htmlspecialchars($quote['service_type']); ?></span></td>
                                        <td class="small"><?php echo htmlspecialchars($quote['origin']); ?> → <?php echo htmlspecialchars($quote['destination']); ?></td>
                                        <td class="small"><?php echo date('M d, Y', strtotime($quote['created_at'])); ?></td>
                                        <td>
                                            <a href="?id=<?php echo $quote['id']; ?>" class="btn btn-sm btn-outline-primary">
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
