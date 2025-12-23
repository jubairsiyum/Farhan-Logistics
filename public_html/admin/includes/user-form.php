<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Username *</label>
        <input type="text" class="form-control" name="username" required
               value="<?= $editing_user ? htmlspecialchars($editing_user['username']) : '' ?>"
               placeholder="admin_username">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Email *</label>
        <input type="email" class="form-control" name="email" required
               value="<?= $editing_user ? htmlspecialchars($editing_user['email']) : '' ?>"
               placeholder="admin@farhanlogistics.com">
    </div>
    
    <div class="col-12 mb-3">
        <label class="form-label">Full Name *</label>
        <input type="text" class="form-control" name="full_name" required
               value="<?= $editing_user ? htmlspecialchars($editing_user['full_name']) : '' ?>"
               placeholder="John Doe">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Role *</label>
        <select class="form-select" name="role" required>
            <option value="admin" <?= (!$editing_user || $editing_user['role'] === 'admin') ? 'selected' : '' ?>>Admin</option>
            <option value="manager" <?= ($editing_user && $editing_user['role'] === 'manager') ? 'selected' : '' ?>>Manager</option>
            <option value="super_admin" <?= ($editing_user && $editing_user['role'] === 'super_admin') ? 'selected' : '' ?>>Super Admin</option>
        </select>
        <small class="text-muted">Super Admin has full system access</small>
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Status *</label>
        <select class="form-select" name="status" required>
            <option value="active" <?= (!$editing_user || $editing_user['status'] === 'active') ? 'selected' : '' ?>>Active</option>
            <option value="inactive" <?= ($editing_user && $editing_user['status'] === 'inactive') ? 'selected' : '' ?>>Inactive</option>
            <option value="suspended" <?= ($editing_user && $editing_user['status'] === 'suspended') ? 'selected' : '' ?>>Suspended</option>
        </select>
    </div>
    
    <div class="col-12 mb-3">
        <label class="form-label">Password <?= $editing_user ? '(leave blank to keep current)' : '*' ?></label>
        <input type="password" class="form-control" name="password" <?= $editing_user ? '' : 'required' ?>
               placeholder="<?= $editing_user ? 'Leave blank to keep current password' : 'Strong password required' ?>">
        <small class="text-muted">Minimum 8 characters recommended</small>
    </div>
</div>

<?php if ($editing_user): ?>
<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save me-2"></i>Update User
    </button>
    <a href="/admin/users" class="btn btn-secondary">
        <i class="bi bi-x-circle me-2"></i>Cancel
    </a>
</div>
<?php endif; ?>
