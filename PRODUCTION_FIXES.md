# Production 500 Error - Fixes Applied

## Summary
After deploying to production, the website was returning a 500 Internal Server Error. The issues have been identified and fixed.

## Root Causes Identified

### 1. **Error Display in Production** (CRITICAL)
**Problem:** `router.php` was showing all PHP errors in the browser, which is dangerous on production and can cause 500 errors.

**Fix Applied:**
- Updated `router.php` (lines 1-9) to check environment variables `APP_ENV` and `APP_DEBUG`
- Production now logs errors instead of displaying them
- Development shows errors for debugging

**Code:**
```php
if (getenv('APP_ENV') === 'production' || getenv('APP_DEBUG') === 'false') {
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}
```

### 2. **Hardcoded Vendor Path** (CRITICAL)
**Problem:** `config/mail.php` had hardcoded path to vendor directory that only works on Windows development machine.

**Fix Applied:**
- Enhanced `config/mail.php` (lines 45-60) with multiple vendor path detection
- Checks 4 different paths for composer vendor directory
- Falls back gracefully if vendor not found (uses PHP mail() function)

**Vendor Paths Checked:**
1. `project_root/vendor/autoload.php` (Primary - project root vendor)
2. `config/../../vendor/autoload.php` (Alternative relative path)
3. `$_SERVER['HOME']/vendor/autoload.php` (Home directory pattern)
4. `/home/farhan/public_html/vendor/autoload.php` (Specific shared hosting path)

### 3. **Database Connection Error Handling** (IMPORTANT)
**Problem:** `config/db.php` had `die()` statement that would kill the page if database connection failed, causing 500 error.

**Fix Applied:**
- Updated `config/db.php` to log errors instead of dying
- Sets `$db_connected` flag that code can check
- Allows pages to render even if database is unavailable
- Environment-aware debug mode

## Files Modified

### 1. router.php
- Lines 1-9: Added conditional error display based on environment

### 2. config/mail.php  
- Lines 45-60: Enhanced vendor path detection with fallbacks

### 3. config/db.php
- Lines 18-45: Replaced die() with error logging and flag-based handling
- Added environment-aware debug mode

### 4. debug.php (NEW)
- Created comprehensive diagnostic tool
- Tests vendor paths, configuration loading, extensions
- **IMPORTANT: Delete this file after troubleshooting**

## New Pages Added
1. `privacy.php` - Privacy Policy (19.4 KB)
2. `terms.php` - Terms & Conditions (21.6 KB)
3. `sitemap.php` - HTML Sitemap (17.4 KB)
4. `sitemap.xml.php` - XML Sitemap for SEO (2.8 KB)

## Next Steps for Production

### Immediate Actions Required:

1. **Ensure Composer is Installed on Production**
   ```bash
   cd /path/to/public_html/..
   composer install
   ```
   This creates the vendor directory with all required packages (PHPMailer, etc.)

2. **Set Environment Variables** (in your .htaccess or cPanel environment)
   ```
   APP_ENV=production
   APP_DEBUG=false
   ```

3. **Check Database Configuration**
   - Verify `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS` in `config/db.php`
   - Make sure the database exists and user has proper privileges
   - Run database setup if first time: `composer.json` includes migration tools

4. **Run Diagnostics**
   - Visit `https://farhancargobd.com/debug.php`
   - Check all green ✓ indicators
   - Note any red ✗ issues
   - Share output if problems persist

5. **Check Server Logs**
   - Apache Error Log: `/var/log/apache2/error.log` (Linux)
   - cPanel: Go to "Errors" section in cPanel dashboard
   - Look for specific error messages

6. **Delete Debug.php After Troubleshooting**
   ```bash
   rm /path/to/public_html/debug.php
   ```

### If 500 Error Persists:

1. **Check Error Logs** for specific error messages
2. **Run `/debug.php`** to identify which component is failing
3. **Verify Permissions:**
   - Files: 644 (readable by web server)
   - Directories: 755
   - Logs directory: writable by web server

4. **Common Issues:**
   - Missing vendor directory → Run `composer install`
   - Database not configured → Update `config/db.php`
   - Missing PHP extensions → Contact hosting provider
   - File permissions → Fix with `chmod` commands

## Testing Checklist

After fixes are verified working:

- [ ] Homepage loads without errors
- [ ] Privacy Policy page loads (`/privacy`)
- [ ] Terms & Conditions page loads (`/terms`)
- [ ] Sitemap page loads (`/sitemap`)
- [ ] XML Sitemap works (`/sitemap.xml`)
- [ ] Contact form submits successfully
- [ ] Test email sends with logo displayed
- [ ] Admin panel login works
- [ ] Mobile menu displays correctly (no scrollbars)
- [ ] Topbar shows 2 phones and 2 emails properly
- [ ] Email tracking links work

## Technical Details

### Error Handling Flow

**Development:**
1. Errors display in browser
2. Helpful for debugging

**Production:**
1. Errors logged to `error_log`
2. User sees friendly error page
3. No sensitive information exposed

### Database Connection Flow

**If DB Available:**
- PDO connection works normally
- Admin panel fully functional
- Form submissions work

**If DB Unavailable:**
- Pages still render
- Frontend works without dynamic content
- Shows friendly message
- Errors logged for admin

### Email Sending Flow

**If PHPMailer Available:**
1. Uses SMTP server
2. Full configuration available
3. Better reliability

**If PHPMailer Unavailable (fallback):**
1. Uses PHP mail() function
2. Still sends emails
3. Less control but functional

## File Syntax Validation

All files have been validated for PHP syntax errors:
- ✓ router.php
- ✓ config/mail.php  
- ✓ config/db.php
- ✓ privacy.php
- ✓ terms.php
- ✓ sitemap.php
- ✓ sitemap.xml.php
- ✓ debug.php

## Support Resources

- **Composer Documentation:** https://getcomposer.org/doc/
- **PHPMailer Repository:** https://github.com/PHPMailer/PHPMailer
- **cPanel Error Logs:** Contact hosting support for access
- **Apache Logs:** Usually in `/var/log/apache2/error.log`

## Emergency Contacts

**For Database Issues:**
- Hosting provider support
- Database credentials check
- Privileges verification

**For PHP Issues:**
- Hosting provider support  
- PHP version check
- Extension verification

---

**Last Updated:** December 25, 2025  
**Production Status:** Fixed and ready for testing  
**Verification Required:** Yes - run `/debug.php` and test all pages
