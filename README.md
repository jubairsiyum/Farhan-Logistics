# Farhan Logistics International Ltd.

**Your Trusted Freight Forwarding & Logistics Partner**

A full-featured logistics and freight forwarding company website built with PHP and MySQL. Includes public-facing service pages, shipment tracking, quote/contact forms, career applications, and a secure admin dashboard with role-based access control.

---

## Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Prerequisites](#prerequisites)
- [Local Development Setup](#local-development-setup)
- [Database Setup](#database-setup)
- [Configuration](#configuration)
- [Email Configuration](#email-configuration)
- [Admin Panel](#admin-panel)
- [Routing System](#routing-system)
- [Security Features](#security-features)
- [Deployment](#deployment)
- [Troubleshooting](#troubleshooting)
- [License](#license)

---

## Features

### Public Website
| Page | Description |
|---|---|
| **Home** (`/`) | Hero carousel, stats, services overview, testimonials, newsletter signup |
| **About** (`/about`) | Company history, mission, vision, values, partner logos |
| **Services** (`/services`) | Air Freight, Sea Freight, Road Transport, Customs Clearance, Warehousing |
| **Solutions** (`/solutions`) | Industry-specific logistics solutions |
| **Quote** (`/quote`) | Quote request form (saves to DB, sends email confirmation) |
| **Tracking** (`/tracking`) | Real-time shipment tracking by tracking number (format: `FL` + 10 digits) |
| **Contact** (`/contact`) | Contact form with DB storage + email notification |
| **Careers** (`/careers`) | Job listings with application form + resume upload |
| **Leadership** (`/leadership`) | Company leadership/team page |
| **Success Stories** (`/success-stories`) | Case studies & client testimonials |
| **Privacy Policy** (`/privacy`) | Privacy policy page |
| **Terms & Conditions** (`/terms`) | Terms of service page |
| **Sitemap** (`/sitemap`) | HTML sitemap for SEO |
| **XML Sitemap** (`/sitemap.xml`) | XML sitemap for search engines |

### Admin Panel (`/admin`)
- **Dashboard** — Overview of quotes, contacts, shipments, and applications
- **Quotes Management** — View, update status, and manage quote requests
- **Contacts Management** — View and manage contact form submissions
- **Shipments Management** — Create/edit shipments, add tracking events, manage statuses
- **Jobs Management** — Post job openings, manage applications
- **Careers Management** — View and process job applications
- **User Management** — Create/edit admin users with RBAC
- **Email Configuration** — Configure SMTP settings

### RBAC Roles
| Role | Permissions |
|---|---|
| **Super Admin** | Full access, can manage Admins & Managers |
| **Admin** | Can manage Managers, dashboard, content |
| **Manager** | Read-only access to dashboard and reports |

---

## Tech Stack

| Component | Technology |
|---|---|
| **Language** | PHP 7.4+ |
| **Database** | MySQL 8.0 |
| **Mailer** | PHPMailer 6.8 (SMTP) |
| **Frontend** | Bootstrap 5, AOS Animations, Bootstrap Icons |
| **Dependencies** | Composer (PHP) |
| **Server** | Apache 2.4+ with mod_rewrite |

---

## Project Structure

```
Farhan-Logistics/
├── public_html/                  # Web root (public directory)
│   ├── .htaccess                 # Apache rewrite rules + security headers
│   ├── router.php                # URL routing handler
│   ├── index.php                 # Homepage
│   ├── about.php                 # About page
│   ├── services.php              # Services listing
│   ├── solutions.php             # Solutions page
│   ├── quote.php                 # Quote request page
│   ├── tracking.php              # Shipment tracking page
│   ├── contact.php               # Contact form page
│   ├── careers.php               # Careers/jobs page
│   ├── leadership.php            # Leadership team page
│   ├── success-stories.php       # Case studies page
│   ├── privacy.php               # Privacy policy
│   ├── terms.php                 # Terms & conditions
│   ├── sitemap.php               # HTML sitemap
│   ├── sitemap.xml.php           # XML sitemap
│   ├── debug.php                 # Diagnostic tool (delete in production)
│   │
│   ├── services/                 # Individual service pages
│   │   ├── air-freight.php
│   │   ├── sea-freight.php
│   │   ├── road-transport.php
│   │   ├── customs-clearance.php
│   │   └── warehousing.php
│   │
│   ├── handlers/                 # Form processing handlers
│   │   ├── contact_handler.php
│   │   ├── quote_handler.php
│   │   ├── tracking_handler.php
│   │   └── career_handler.php
│   │
│   ├── includes/                 # Reusable template parts
│   │   ├── header.php
│   │   ├── footer.php
│   │   ├── navbar.php
│   │   ├── quote-widget.php
│   │   └── route_helpers.php
│   │
│   ├── config/                   # Configuration files
│   │   ├── db.php                # Database connection (PDO + mysqli)
│   │   ├── security.php          # Security helpers (CSRF, XSS, rate limiting, RBAC)
│   │   ├── email_templates.php   # HTML email templates
│   │   ├── database_schema.sql   # Alternative schema file
│   │   ├── rbac_setup.sql        # RBAC setup script
│   │   ├── migrate.php           # Migration script
│   │   └── setup_database.php    # Initial DB setup
│   │
│   ├── admin/                    # Admin dashboard
│   │   ├── index.php             # Admin login page
│   │   ├── dashboard.php         # Admin dashboard
│   │   ├── quotes.php            # Quote management
│   │   ├── contacts.php          # Contact management
│   │   ├── shipments.php         # Shipment management
│   │   ├── jobs.php              # Job posting management
│   │   ├── careers.php           # Career applications
│   │   ├── users.php             # User management (RBAC)
│   │   ├── email-config.php      # SMTP configuration
│   │   ├── test-rbac.php         # RBAC testing tool
│   │   ├── logout.php            # Logout handler
│   │   └── includes/             # Admin template parts
│   │
│   └── assets/                   # Static assets
│       ├── css/
│       │   └── style.css
│       ├── js/
│       │   └── main.js
│       └── images/               # Logo, partner logos, favicons
│
├── composer.json                 # PHP dependencies
├── composer.lock                 # Locked dependency versions
├── farhanlogistics.sql           # Full database dump (schema + sample data)
├── .gitignore
├── PRODUCTION_FIXES.md           # Production troubleshooting guide
└── SECURITY.md                   # Security documentation
```

---

## Prerequisites

### For Local Development

- **PHP 7.4+** with extensions:
  - `pdo`, `pdo_mysql`
  - `mysqli`
  - `openssl`
  - `mbstring`
  - `fileinfo`
  - `json`
  - `curl` (recommended for Google Maps/reCAPTCHA)
- **MySQL 8.0** (or MariaDB 10.3+)
- **Composer** 2.x
- **Apache 2.4+** with `mod_rewrite` enabled (or use PHP built-in server with a router)

### For Production (cPanel / Shared Hosting)

- PHP 7.4+ with the extensions above
- MySQL database (created via cPanel)
- Composer access (SSH or cPanel Terminal)
- Apache with `mod_rewrite` (enabled by default on most hosts)

---

## Local Development Setup

### Option 1: XAMPP / WAMP

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/)

2. **Clone the repository** into the htdocs folder:
   ```powershell
   cd C:\xampp\htdocs
   git clone <your-repo-url> Farhan-Logistics
   ```

3. **Install PHP dependencies** with Composer:
   ```bash
   cd C:\xampp\htdocs\Farhan-Logistics
   composer install
   ```

4. **Configure Apache** — ensure `mod_rewrite` is enabled:
   - Open `C:\xampp\apache\conf\httpd.conf`
   - Uncomment: `LoadModule rewrite_module modules/mod_rewrite.so`
   - Restart Apache

5. **Set up the database** (see [Database Setup](#database-setup))

6. **Update database credentials** in `public_html/config/db.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'farhanlogistics');
   define('DB_USER', 'root');
   define('DB_PASS', '');       // default XAMPP password is empty
   ```

7. **Access the site:**
   ```
   http://localhost/Farhan-Logistics/public_html/
   ```

### Option 2: PHP Built-in Server (Quick Testing)

You can use PHP's built-in server with the custom router:

```bash
cd C:\xampp\htdocs\Farhan-Logistics\public_html
php -S localhost:8000 router.php
```

Then visit: `http://localhost:8000`

**Note:** The PHP built-in server does not support `.htaccess`, so the `router.php` file handles all routing. Static files (CSS, JS, images) are served normally.

### Option 3: Laragon

1. Install [Laragon](https://laragon.org/)
2. Clone to `C:\laragon\www\Farhan-Logistics`
3. Run `composer install` in the project root
4. Access via `http://farhan-logistics.test/public_html/`

---

## Database Setup

### Using the SQL Dump (Recommended)

1. **Create a database** in phpMyAdmin or MySQL CLI:
   ```sql
   CREATE DATABASE farhanlogistics CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

2. **Import the dump file:**
   ```bash
   mysql -u root -p farhanlogistics < farhanlogistics.sql
   ```
   Or use phpMyAdmin: select the database > Import > choose `farhanlogistics.sql`

3. **Default admin accounts** (included in the dump):
   | Username | Password | Role |
   |---|---|---|
   | `admin` | (bcrypt hashed — see dump) | Super Admin |
   | `jsiyum` | (bcrypt hashed — see dump) | Admin |

   To reset the password, generate a new bcrypt hash:
   ```php
   php -r "echo password_hash('your-new-password', PASSWORD_BCRYPT, ['cost' => 12]);"
   ```
   Then update it directly in the `admin_users` table.

### Database Tables

| Table | Purpose |
|---|---|
| `admin_users` | Admin panel users with RBAC roles |
| `career_applications` | Job applications with resume uploads |
| `contact_submissions` | Contact form messages |
| `job_postings` | Published job listings |
| `newsletter_subscribers` | Newsletter email subscriptions |
| `quote_requests` | Freight quote requests |
| `shipment_tracking` | Shipment records with status tracking |
| `tracking_events` | Individual tracking events per shipment |

### Creating a New Admin User (MySQL CLI)

```sql
INSERT INTO admin_users (username, password, email, full_name, role)
VALUES ('yourname', 'bcrypt-hash-here', 'you@example.com', 'Your Name', 'super_admin');
```

---

## Configuration

### 1. Database Connection

Edit `public_html/config/db.php`:

```php
define('DB_HOST', 'localhost');                     // Usually 'localhost'
define('DB_NAME', 'farhanlogistics');               // Your database name
define('DB_USER', 'root');                          // Your database username
define('DB_PASS', '');                              // Your database password
define('DB_CHARSET', 'utf8mb4');
define('DB_DEBUG', false);                          // Set true for development
```

### 2. Environment Variables

For production, set these environment variables (in `.htaccess` or cPanel):

```
SetEnv APP_ENV production
SetEnv APP_DEBUG false
```

### 3. Security Settings

The `public_html/config/security.php` file handles:
- Session configuration (HTTP-only, SameSite, strict mode)
- CSRF token generation and validation
- Rate limiting thresholds
- Security headers (CSP, X-Frame-Options, X-XSS-Protection)
- Brute force protection (5 attempts, 15-minute lockout)
- Password policy (bcrypt, cost factor 12)
- RBAC enforcement

### 4. File Uploads

Resume uploads for career applications:
- Allowed formats: PDF, DOC, DOCX
- Max size: 5MB (configurable in `security.php`)
- Files stored in: `public_html/uploads/resumes/`

Ensure the uploads directory is writable:
```bash
chmod 755 public_html/uploads
chmod 755 public_html/uploads/resumes
```

---

## Email Configuration

Emails are sent via PHPMailer using SMTP. Configuration is managed through the admin panel at `/admin/email-config`.

### Default SMTP Settings

| Setting | Value |
|---|---|
| **Host** | `smtp.example.com` |
| **Port** | `587` |
| **Encryption** | TLS |
| **Auth** | Enabled |
| **Support Email** | `support@farhanlogistics.com` |

### Email Templates

Located in `public_html/config/email_templates.php`:
- **Tracking Email** — Sent when a new shipment is created
- **Status Update Email** — Sent when shipment status changes
- **Quote Confirmation** — Sent after a quote request is submitted

### Fallback Mechanism

If PHPMailer is unavailable (missing vendor directory), the system falls back to PHP's native `mail()` function automatically.

---

## Admin Panel

### Access

```
http://your-domain/admin
```

### Login

1. Navigate to `/admin`
2. Enter your username and password
3. Default session timeout: 30 minutes
4. Account lockout after 5 failed attempts (15-minute cooldown)

### Pages

| Route | Description |
|---|---|
| `/admin` | Login page |
| `/admin/dashboard` | Dashboard with key metrics |
| `/admin/quotes` | Quote request management |
| `/admin/contacts` | Contact form submissions |
| `/admin/shipments` | Shipment tracking management |
| `/admin/jobs` | Job posting management |
| `/admin/careers` | Career applications management |
| `/admin/users` | Admin user management |
| `/admin/email-config` | SMTP/email configuration |

### RBAC Permissions Matrix

| Action | Super Admin | Admin | Manager |
|---|---|---|---|
| View Dashboard | Yes | Yes | Yes |
| Manage Quotes | Yes | Yes | View only |
| Manage Contacts | Yes | Yes | View only |
| Manage Shipments | Yes | Yes | View only |
| Manage Jobs | Yes | Yes | No |
| Manage Users | Yes | No | No |
| Email Config | Yes | No | No |

---

## Routing System

The site uses a custom PHP router with clean URLs (no `.php` extension).

### How It Works

1. Apache `.htaccess` rewrites all non-file, non-directory requests to `router.php`
2. `router.php` resolves the URL path to the corresponding PHP file
3. Static assets (CSS, JS, images) bypass the router

### URL Patterns

| URL | Maps To |
|---|---|
| `/` | `index.php` |
| `/about` | `about.php` |
| `/services/air-freight` | `services/air-freight.php` |
| `/tracking` | `tracking.php` |
| `/admin/dashboard` | `admin/dashboard.php` |
| `/handlers/tracking_handler.php` | `handlers/tracking_handler.php` |
| `/sitemap.xml` | `sitemap.xml.php` |

### Local Development Without Apache

If using PHP's built-in server, all requests are already routed through `router.php`, so clean URLs work without `.htaccess`:

```bash
php -S localhost:8000 router.php
```

---

## Security Features

| Feature | Implementation |
|---|---|
| **SQL Injection Prevention** | PDO prepared statements (all queries) |
| **XSS Protection** | `htmlspecialchars()` on output, Content-Security-Policy header |
| **CSRF Protection** | Token-based (generated per session, validated on POST) |
| **Rate Limiting** | Configurable per-form (3 req/5min for forms, 10 req/min for tracking) |
| **Brute Force Protection** | Account lockout after 5 failed attempts for 15 minutes |
| **Session Security** | HTTP-only cookies, SameSite=Lax, strict mode, regeneration every 30 min |
| **File Upload Validation** | MIME type check, extension whitelist, size limit |
| **Password Hashing** | bcrypt with cost factor 12 |
| **Security Headers** | X-Frame-Options, X-XSS-Protection, X-Content-Type-Options, CSP |
| **RBAC** | Role-based access control with hierarchy (Super Admin > Admin > Manager) |
| **Input Sanitization** | All user inputs validated and sanitized before use |

---

## Deployment

### Production Checklist

- [ ] Run `composer install --no-dev --optimize-autoloader` in the project root
- [ ] Set `APP_ENV=production` and `APP_DEBUG=false`
- [ ] Set `DB_DEBUG=false` in `config/db.php`
- [ ] Update database credentials for production
- [ ] Import the SQL dump to the production database
- [ ] Change default admin passwords
- [ ] Configure SMTP settings via `/admin/email-config`
- [ ] Set correct file permissions (644 for files, 755 for directories)
- [ ] Ensure `uploads/` and `storage/logs/` are writable
- [ ] Enable HTTPS and update `session.cookie_secure` to `1` in `security.php`
- [ ] Remove `debug.php` from production
- [ ] Test all forms, emails, and the admin panel
- [ ] Verify the `.htaccess` is working (clean URLs resolve correctly)

### cPanel Deployment Steps

1. **Upload files** to `public_html/` (the web root)
2. **Upload the project root files** (`composer.json`, `composer.lock`) to the directory above `public_html/`
3. **Run Composer:**
   ```bash
   cd ~/public_html/..
   composer install
   ```
4. **Create database** via cPanel > MySQL Databases
5. **Add user to database** with ALL PRIVILEGES
6. **Import SQL** via phpMyAdmin > Import
7. **Update `config/db.php`** with production credentials
8. **Set environment variables** in cPanel or `.htaccess`

---

## Troubleshooting

### 500 Internal Server Error

1. Check the `.htaccess` file — rename to `.htaccess.minimal` for testing
2. Visit `/debug.php` to diagnose issues
3. Check Apache/PHP error logs
4. Ensure `mod_rewrite` is enabled
5. Run `composer install` to generate the `vendor/` directory
6. Verify database credentials in `config/db.php`

### Database Connection Failed

- Verify MySQL service is running
- Check `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS` in `config/db.php`
- Ensure the database user has ALL PRIVILEGES on the database
- On cPanel: the hostname is usually `localhost`, not the server IP

### Clean URLs Not Working

- Ensure Apache `mod_rewrite` is enabled
- Verify `.htaccess` is in the `public_html/` directory
- Check that `AllowOverride All` is set in the Apache config

### Emails Not Sending

- Configure SMTP via `/admin/email-config`
- Check spam/junk folders
- Verify PHPMailer is installed (`composer install`)
- Test with the fallback: the system uses `mail()` if PHPMailer is unavailable

### Form Submissions Failing

- Check CSRF token is being sent with the form
- Clear browser session/cookies and try again
- Check rate limit settings in `security.php`

---

## License

Proprietary software. All rights reserved by Farhan Logistics International Ltd.
