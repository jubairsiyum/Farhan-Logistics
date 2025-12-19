<?php
// Get current page name for active menu highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Top Contact Bar -->
<div class="top-contact-bar">
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
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
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
