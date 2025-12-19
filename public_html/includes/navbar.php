<?php
// Get current page name for active menu highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Top Contact Bar (Desktop Only) -->
<div class="top-contact-bar d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="top-contact-info">
                    <span class="me-4"><i class="bi bi-telephone-fill"></i> +971 4 XXX XXXX</span>
                    <span><i class="bi bi-envelope-fill"></i> info@farhanlogistics.com</span>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <div class="top-social-links">
                    <a href="#" class="me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark main-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <div class="brand-container">
                <i class="bi bi-box-seam brand-icon"></i>
                <div class="brand-text">
                    <span class="brand-name">FARHAN</span>
                    <span class="brand-tagline">LOGISTICS</span>
                </div>
            </div>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'solutions.php') ? 'active' : ''; ?>" href="solutions.php">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'tracking.php') ? 'active' : ''; ?>" href="tracking.php">Track Shipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'careers.php') ? 'active' : ''; ?>" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary-custom ms-lg-3" href="quote.php">Get Quote</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-end mobile-menu" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <div class="brand-container">
            <i class="bi bi-box-seam brand-icon"></i>
            <div class="brand-text">
                <span class="brand-name">FARHAN</span>
                <span class="brand-tagline">LOGISTICS</span>
            </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="mobile-nav-links">
            <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"><i class="bi bi-house-door me-3"></i>Home</a></li>
            <li><a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"><i class="bi bi-info-circle me-3"></i>About Us</a></li>
            <li><a href="services.php" class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>"><i class="bi bi-grid me-3"></i>Services</a></li>
            <li><a href="solutions.php" class="<?php echo ($current_page == 'solutions.php') ? 'active' : ''; ?>"><i class="bi bi-gear me-3"></i>Solutions</a></li>
            <li><a href="tracking.php" class="<?php echo ($current_page == 'tracking.php') ? 'active' : ''; ?>"><i class="bi bi-geo-alt me-3"></i>Track Shipment</a></li>
            <li><a href="careers.php" class="<?php echo ($current_page == 'careers.php') ? 'active' : ''; ?>"><i class="bi bi-briefcase me-3"></i>Careers</a></li>
            <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><i class="bi bi-envelope me-3"></i>Contact</a></li>
        </ul>
        
        <div class="mobile-cta">
            <a href="quote.php" class="btn btn-primary-custom w-100 mb-3">
                <i class="bi bi-file-text me-2"></i>Get Quote
            </a>
        </div>
        
        <!-- Contact Info in Mobile Menu -->
        <div class="mobile-contact-info">
            <h6>Get in Touch</h6>
            <div class="contact-item">
                <i class="bi bi-telephone-fill"></i>
                <div>
                    <span class="label">Call Us</span>
                    <a href="tel:+97145551234">+971 4 XXX XXXX</a>
                </div>
            </div>
            <div class="contact-item">
                <i class="bi bi-envelope-fill"></i>
                <div>
                    <span class="label">Email Us</span>
                    <a href="mailto:info@farhanlogistics.com">info@farhanlogistics.com</a>
                </div>
            </div>
            <div class="contact-item">
                <i class="bi bi-clock-fill"></i>
                <div>
                    <span class="label">Working Hours</span>
                    <span>Mon - Sat: 8:00 AM - 6:00 PM</span>
                </div>
            </div>
        </div>
        
        <!-- Social Links in Mobile Menu -->
        <div class="mobile-social">
            <h6>Follow Us</h6>
            <div class="social-links">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
    </div>
</div>
