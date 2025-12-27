-- ========================================================================
-- Role-Based Access Control (RBAC) Setup & Verification
-- Farhan Logistics Admin Portal
-- Date: December 27, 2025
-- ========================================================================

-- 1. CHECK CURRENT USERS AND THEIR ROLES
-- ========================================================================
SELECT 
    id,
    username,
    email,
    full_name,
    role,
    status,
    created_at,
    last_login
FROM admin_users
ORDER BY 
    FIELD(role, 'super_admin', 'admin', 'manager'),
    created_at DESC;

-- 2. VERIFY AT LEAST ONE SUPER ADMIN EXISTS
-- ========================================================================
SELECT COUNT(*) as super_admin_count
FROM admin_users
WHERE role = 'super_admin' AND status = 'active';

-- If no Super Admin exists, run this to create one:
-- ========================================================================
-- IMPORTANT: Uncomment and modify the username below
-- UPDATE admin_users 
-- SET role = 'super_admin' 
-- WHERE username = 'your_main_admin_username' 
-- AND status = 'active';

-- 3. EXAMPLE: CREATE A NEW SUPER ADMIN (if needed)
-- ========================================================================
-- IMPORTANT: Uncomment and modify these values
-- INSERT INTO admin_users (
--     username, 
--     email, 
--     full_name, 
--     role, 
--     status, 
--     password,
--     created_at
-- ) VALUES (
--     'superadmin',                                    -- Username
--     'superadmin@farhancargobd.com',                 -- Email
--     'Super Administrator',                           -- Full Name
--     'super_admin',                                   -- Role
--     'active',                                        -- Status
--     '$2y$12$YOUR_HASHED_PASSWORD_HERE',            -- Password (must be bcrypt hashed)
--     NOW()                                            -- Created timestamp
-- );

-- 4. UPDATE EXISTING USER TO SUPER ADMIN
-- ========================================================================
-- IMPORTANT: Uncomment and set the correct username
-- UPDATE admin_users 
-- SET role = 'super_admin'
-- WHERE username = 'existing_admin_username';

-- 5. VERIFY ROLE DISTRIBUTION
-- ========================================================================
SELECT 
    role,
    COUNT(*) as count,
    GROUP_CONCAT(username ORDER BY username) as usernames
FROM admin_users
WHERE status = 'active'
GROUP BY role
ORDER BY FIELD(role, 'super_admin', 'admin', 'manager');

-- 6. CHECK FOR USERS WITH INVALID ROLES
-- ========================================================================
SELECT 
    id,
    username,
    email,
    role,
    status
FROM admin_users
WHERE role NOT IN ('super_admin', 'admin', 'manager');

-- 7. FIX INVALID ROLES (if any found)
-- ========================================================================
-- UPDATE admin_users 
-- SET role = 'manager'  -- or 'admin' depending on requirement
-- WHERE role NOT IN ('super_admin', 'admin', 'manager');

-- 8. AUDIT: CHECK LAST LOGIN TIMES
-- ========================================================================
SELECT 
    username,
    full_name,
    role,
    last_login,
    TIMESTAMPDIFF(DAY, last_login, NOW()) as days_since_login,
    status
FROM admin_users
ORDER BY last_login DESC;

-- 9. SECURITY: FIND INACTIVE USERS
-- ========================================================================
SELECT 
    username,
    email,
    role,
    status,
    last_login,
    created_at
FROM admin_users
WHERE 
    status = 'active' 
    AND (
        last_login IS NULL 
        OR last_login < DATE_SUB(NOW(), INTERVAL 90 DAY)
    )
ORDER BY last_login ASC;

-- ========================================================================
-- ROLE PERMISSIONS REFERENCE
-- ========================================================================
-- 
-- SUPER ADMIN:
--   - Full system access
--   - Can create: Admin, Manager
--   - Can edit: All users
--   - Can access: Email Configuration
--   - Can view: All features
--
-- ADMIN:
--   - Most system features
--   - Can create: Manager only
--   - Can edit: Admin, Manager
--   - Cannot access: Email Configuration
--   - Can view: All features except Email Config
--
-- MANAGER:
--   - Basic system features
--   - Can create: None
--   - Can edit: None
--   - Cannot access: Email Configuration
--   - Can view: User list (read-only)
--
-- ========================================================================

-- 10. EXAMPLE PASSWORD GENERATION (PHP Command)
-- ========================================================================
-- To generate a bcrypt password hash, run this PHP command:
-- 
-- php -r "echo password_hash('YourSecurePassword123', PASSWORD_BCRYPT, ['cost' => 12]);"
--
-- Then use the output in INSERT/UPDATE statements above
-- ========================================================================
