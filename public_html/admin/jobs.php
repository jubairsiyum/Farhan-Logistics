<?php
require_once dirname(__DIR__) . '/config/security.php';

// Check if logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /admin/');
    exit;
}

// Include database connection
require_once dirname(__DIR__) . '/config/db.php';

// Handle job deletion
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $job_id = (int)$_GET['id'];
    try {
        $stmt = $pdo->prepare("DELETE FROM job_postings WHERE id = ?");
        $stmt->execute([$job_id]);
        $_SESSION['success_message'] = 'Job posting deleted successfully';
        header('Location: /admin/jobs');
        exit;
    } catch (PDOException $e) {
        $_SESSION['error_message'] = 'Failed to delete job posting';
    }
}

// Handle job status toggle
if (isset($_GET['action']) && $_GET['action'] === 'toggle' && isset($_GET['id'])) {
    $job_id = (int)$_GET['id'];
    try {
        $stmt = $pdo->prepare("UPDATE job_postings SET status = CASE WHEN status = 'active' THEN 'closed' ELSE 'active' END WHERE id = ?");
        $stmt->execute([$job_id]);
        $_SESSION['success_message'] = 'Job status updated successfully';
        header('Location: /admin/jobs');
        exit;
    } catch (PDOException $e) {
        $_SESSION['error_message'] = 'Failed to update job status';
    }
}

// Handle job creation/editing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_id = isset($_POST['job_id']) ? (int)$_POST['job_id'] : 0;
    $title = trim($_POST['title'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $employment_type = $_POST['employment_type'] ?? 'full_time';
    $description = trim($_POST['description'] ?? '');
    $responsibilities = trim($_POST['responsibilities'] ?? '');
    $requirements = trim($_POST['requirements'] ?? '');
    $salary_range = trim($_POST['salary_range'] ?? '');
    $experience_required = trim($_POST['experience_required'] ?? '');
    $status = $_POST['status'] ?? 'draft';
    
    try {
        if ($job_id > 0) {
            // Update existing job
            $stmt = $pdo->prepare("UPDATE job_postings SET 
                title = ?, department = ?, location = ?, employment_type = ?, 
                description = ?, responsibilities = ?, requirements = ?, 
                salary_range = ?, experience_required = ?, status = ? 
                WHERE id = ?");
            $stmt->execute([
                $title, $department, $location, $employment_type,
                $description, $responsibilities, $requirements,
                $salary_range, $experience_required, $status, $job_id
            ]);
            $_SESSION['success_message'] = 'Job posting updated successfully';
        } else {
            // Create new job
            $stmt = $pdo->prepare("INSERT INTO job_postings 
                (title, department, location, employment_type, description, responsibilities, 
                requirements, salary_range, experience_required, status, posted_by) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                $title, $department, $location, $employment_type,
                $description, $responsibilities, $requirements,
                $salary_range, $experience_required, $status, $_SESSION['admin_id']
            ]);
            $_SESSION['success_message'] = 'Job posting created successfully';
        }
        header('Location: /admin/jobs');
        exit;
    } catch (PDOException $e) {
        $_SESSION['error_message'] = 'Failed to save job posting';
        error_log('Job posting error: ' . $e->getMessage());
    }
}

// Check if editing
$editing_job = null;
if (isset($_GET['edit']) && !empty($_GET['edit'])) {
    $edit_id = (int)$_GET['edit'];
    $stmt = $pdo->prepare("SELECT * FROM job_postings WHERE id = ?");
    $stmt->execute([$edit_id]);
    $editing_job = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Fetch all jobs
$jobs_query = "SELECT * FROM job_postings ORDER BY created_at DESC";
$jobs = $pdo->query($jobs_query)->fetchAll(PDO::FETCH_ASSOC);

// Page title
$page_title = $editing_job ? 'Edit Job Posting' : 'Job Postings';

// Include header
require_once __DIR__ . '/includes/header.php';
?>

<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2><i class="bi bi-briefcase me-2"></i>Job Postings</h2>
                <?php if (!$editing_job): ?>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jobModal">
                    <i class="bi bi-plus-circle me-2"></i>Add New Job
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

    <!-- Job Form (when editing) -->
    <?php if ($editing_job): ?>
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Edit Job: <?= htmlspecialchars($editing_job['title']) ?></h5>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/jobs">
                <input type="hidden" name="job_id" value="<?= $editing_job['id'] ?>">
                <?php include 'includes/job-form.php'; ?>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <!-- Jobs List -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">All Job Postings (<?= count($jobs) ?>)</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Department</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Applications</th>
                            <th>Status</th>
                            <th>Posted</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($jobs)): ?>
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">
                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                No job postings yet. Click "Add New Job" to create one.
                            </td>
                        </tr>
                        <?php else: ?>
                        <?php foreach ($jobs as $job): ?>
                        <tr>
                            <td>
                                <strong><?= htmlspecialchars($job['title']) ?></strong><br>
                                <small class="text-muted"><?= htmlspecialchars(substr($job['description'], 0, 80)) ?>...</small>
                            </td>
                            <td><?= htmlspecialchars($job['department']) ?></td>
                            <td><?= htmlspecialchars($job['location']) ?></td>
                            <td>
                                <span class="badge bg-info">
                                    <?= ucwords(str_replace('_', ' ', $job['employment_type'])) ?>
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-secondary"><?= $job['applications_count'] ?> applications</span>
                            </td>
                            <td>
                                <?php if ($job['status'] === 'active'): ?>
                                    <span class="badge bg-success">Active</span>
                                <?php elseif ($job['status'] === 'closed'): ?>
                                    <span class="badge bg-danger">Closed</span>
                                <?php else: ?>
                                    <span class="badge bg-warning">Draft</span>
                                <?php endif; ?>
                            </td>
                            <td><?= date('M d, Y', strtotime($job['created_at'])) ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="/admin/jobs?edit=<?= $job['id'] ?>" class="btn btn-sm btn-outline-primary" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="/admin/jobs?action=toggle&id=<?= $job['id'] ?>" 
                                       class="btn btn-sm btn-outline-warning" 
                                       title="Toggle Status"
                                       onclick="return confirm('Toggle job status?')">
                                        <i class="bi bi-toggle-on"></i>
                                    </a>
                                    <a href="/admin/jobs?action=delete&id=<?= $job['id'] ?>" 
                                       class="btn btn-sm btn-outline-danger" 
                                       title="Delete"
                                       onclick="return confirm('Are you sure you want to delete this job posting?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Job Modal -->
<div class="modal fade" id="jobModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Job Posting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="/admin/jobs">
                <div class="modal-body">
                    <?php $editing_job = null; // Reset for modal form ?>
                    <?php include 'includes/job-form.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Job Posting</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
