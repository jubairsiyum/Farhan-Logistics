<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Job Title *</label>
        <input type="text" class="form-control" name="title" required
               value="<?= $editing_job ? htmlspecialchars($editing_job['title']) : '' ?>"
               placeholder="e.g., Operations Manager">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Department *</label>
        <input type="text" class="form-control" name="department" required
               value="<?= $editing_job ? htmlspecialchars($editing_job['department']) : '' ?>"
               placeholder="e.g., Operations">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Location *</label>
        <input type="text" class="form-control" name="location" required
               value="<?= $editing_job ? htmlspecialchars($editing_job['location']) : '' ?>"
               placeholder="e.g., Dubai, UAE">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Employment Type *</label>
        <select class="form-select" name="employment_type" required>
            <option value="full_time" <?= ($editing_job && $editing_job['employment_type'] === 'full_time') ? 'selected' : '' ?>>Full Time</option>
            <option value="part_time" <?= ($editing_job && $editing_job['employment_type'] === 'part_time') ? 'selected' : '' ?>>Part Time</option>
            <option value="contract" <?= ($editing_job && $editing_job['employment_type'] === 'contract') ? 'selected' : '' ?>>Contract</option>
            <option value="internship" <?= ($editing_job && $editing_job['employment_type'] === 'internship') ? 'selected' : '' ?>>Internship</option>
        </select>
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Salary Range</label>
        <input type="text" class="form-control" name="salary_range"
               value="<?= $editing_job ? htmlspecialchars($editing_job['salary_range']) : '' ?>"
               placeholder="e.g., AED 10,000 - 15,000">
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Experience Required</label>
        <input type="text" class="form-control" name="experience_required"
               value="<?= $editing_job ? htmlspecialchars($editing_job['experience_required']) : '' ?>"
               placeholder="e.g., 3-5 years">
    </div>
    
    <div class="col-12 mb-3">
        <label class="form-label">Job Description *</label>
        <textarea class="form-control" name="description" rows="3" required
                  placeholder="Brief overview of the role and responsibilities..."><?= $editing_job ? htmlspecialchars($editing_job['description']) : '' ?></textarea>
    </div>
    
    <div class="col-12 mb-3">
        <label class="form-label">Key Responsibilities * <small class="text-muted">(one per line with bullet points)</small></label>
        <textarea class="form-control" name="responsibilities" rows="6" required
                  placeholder="• Manage daily operations&#10;• Lead team of professionals&#10;• Ensure quality standards"><?= $editing_job ? htmlspecialchars($editing_job['responsibilities']) : '' ?></textarea>
    </div>
    
    <div class="col-12 mb-3">
        <label class="form-label">Requirements * <small class="text-muted">(one per line with bullet points)</small></label>
        <textarea class="form-control" name="requirements" rows="6" required
                  placeholder="• Bachelor's degree in relevant field&#10;• 5+ years of experience&#10;• Strong leadership skills"><?= $editing_job ? htmlspecialchars($editing_job['requirements']) : '' ?></textarea>
    </div>
    
    <div class="col-md-6 mb-3">
        <label class="form-label">Status *</label>
        <select class="form-select" name="status" required>
            <option value="draft" <?= ($editing_job && $editing_job['status'] === 'draft') ? 'selected' : '' ?>>Draft (Not visible)</option>
            <option value="active" <?= (!$editing_job || $editing_job['status'] === 'active') ? 'selected' : '' ?>>Active (Published)</option>
            <option value="closed" <?= ($editing_job && $editing_job['status'] === 'closed') ? 'selected' : '' ?>>Closed</option>
        </select>
    </div>
</div>

<?php if ($editing_job): ?>
<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save me-2"></i>Update Job Posting
    </button>
    <a href="/admin/jobs" class="btn btn-secondary">
        <i class="bi bi-x-circle me-2"></i>Cancel
    </a>
</div>
<?php endif; ?>
