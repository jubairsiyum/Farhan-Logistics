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
               placeholder="Your Full Name">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Role *</label>
        <select class="form-select" name="role" required <?= hasRole('manager') ? 'disabled' : '' ?>>
            <?php
            $allowedRoles = getAllowedRoles();
            $currentUserRole = $editing_user ? $editing_user['role'] : '';
            
            // If editing and current user can't edit this role, show it as disabled
            if ($editing_user && !canEditRole($currentUserRole)) {
                echo '<option value="' . htmlspecialchars($currentUserRole) . '" selected disabled>' . ucfirst(str_replace('_', ' ', $currentUserRole)) . ' (View Only)</option>';
            } else {
                // Show allowed roles based on permissions
                if (in_array('admin', $allowedRoles)) {
                    $selected = (!$editing_user || $currentUserRole === 'admin') ? 'selected' : '';
                    echo '<option value="admin" ' . $selected . '>Admin</option>';
                }
                if (in_array('manager', $allowedRoles)) {
                    $selected = ($editing_user && $currentUserRole === 'manager') ? 'selected' : '';
                    echo '<option value="manager" ' . $selected . '>Manager</option>';
                }
                
                // If editing a super_admin and current user is super_admin, show it (but super admin can't be created, only viewed)
                if ($editing_user && $currentUserRole === 'super_admin' && isSuperAdmin()) {
                    echo '<option value="super_admin" selected disabled>Super Admin (Cannot be modified)</option>';
                }
            }
            ?>
        </select>
        <?php if (hasRole('manager')): ?>
            <input type="hidden" name="role" value="<?= $editing_user ? htmlspecialchars($editing_user['role']) : 'manager' ?>">
        <?php endif; ?>
        <small class="text-muted">
            <?php if (isSuperAdmin()): ?>
                Super Admin can create Admin and Manager roles
            <?php elseif (isAdmin()): ?>
                Admin can create Manager roles only
            <?php else: ?>
                You cannot modify user roles
            <?php endif; ?>
        </small>
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
