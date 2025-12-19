<?php 
$pageTitle = 'Home';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Hero Carousel Section -->
<div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1920&q=80');">
                <div class="hero-overlay"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <span class="hero-badge">Global Logistics Partner</span>
                                <h1 class="display-3 fw-bold mb-4">Seamless International Freight Solutions</h1>
                                <p class="lead mb-5">Connecting businesses worldwide with reliable air, sea, and land cargo services. Your trusted partner in global logistics.</p>
                                <div class="hero-buttons">
                                    <a href="quote.php" class="btn btn-primary-custom btn-lg me-3">
                                        <i class="bi bi-file-text me-2"></i>Request Quote
                                    </a>
                                    <a href="services.php" class="btn btn-outline-light btn-lg">
                                        <i class="bi bi-arrow-right-circle me-2"></i>Explore Services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=1920&q=80');">
                <div class="hero-overlay"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <span class="hero-badge">Fast & Reliable</span>
                                <h1 class="display-3 fw-bold mb-4">Express Air Freight Services</h1>
                                <p class="lead mb-5">Time-sensitive shipments delivered on schedule. Premium air cargo solutions with global coverage and competitive rates.</p>
                                <div class="hero-buttons">
                                    <a href="services.php#air-freight" class="btn btn-primary-custom btn-lg me-3">
                                        <i class="bi bi-airplane me-2"></i>Air Freight
                                    </a>
                                    <a href="tracking.php" class="btn btn-outline-light btn-lg">
                                        <i class="bi bi-geo-alt me-2"></i>Track Shipment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=1920&q=80');">
                <div class="hero-overlay"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="hero-content">
                                <span class="hero-badge">Industry Expertise</span>
                                <h1 class="display-3 fw-bold mb-4">End-to-End Supply Chain Management</h1>
                                <p class="lead mb-5">Comprehensive logistics solutions including warehousing, customs clearance, and last-mile delivery. Trusted by 500+ global clients.</p>
                                <div class="hero-buttons">
                                    <a href="solutions.php" class="btn btn-primary-custom btn-lg me-3">
                                        <i class="bi bi-gear-wide-connected me-2"></i>Our Solutions
                                    </a>
                                    <a href="about.php" class="btn btn-outline-light btn-lg">
                                        <i class="bi bi-info-circle me-2"></i>About Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Services Overview -->
<section class="py-100 section-pattern">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Core Services</h2>
            <p>Comprehensive logistics solutions tailored to your business needs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-airplane"></i>
                    </div>
                    <h4>Air Freight</h4>
                    <p>Fast and reliable air cargo services for time-sensitive shipments worldwide.</p>
                    <a href="services.php#air-freight" class="learn-more">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4>Sea Freight</h4>
                    <p>Cost-effective ocean freight solutions with FCL and LCL options.</p>
                    <a href="services.php#sea-freight" class="learn-more">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h4>Road Transport</h4>
                    <p>Comprehensive land transportation across GCC and international routes.</p>
                    <a href="services.php#road-transport" class="learn-more">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h4>Warehousing</h4>
                    <p>Modern storage facilities with inventory management and distribution.</p>
                    <a href="services.php#warehousing" class="learn-more">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-100 section-navy">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-title text-start">
                    <h2>Why Choose Farhan Logistics</h2>
                    <p>Industry-leading expertise with unwavering commitment to excellence</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-globe"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Global Network</h5>
                        <p>Strategic partnerships across 150+ countries ensuring seamless worldwide coverage.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Reliability & Trust</h5>
                        <p>ISO certified operations with 99.8% on-time delivery rate and cargo insurance.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="feature-content">
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock customer service with real-time tracking and updates.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Competitive Pricing</h5>
                        <p>Best market rates without compromising quality or service standards.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?w=800&q=80" alt="Why Choose Us" class="img-fluid rounded shadow-lg" 
                     style="height: 600px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="stats-section section-image-overlay" style="background-image: url('https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=1920&q=80');">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-item">
                    <div class="stat-number" data-target="25">25+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-number" data-target="5000">5000+</div>
                    <div class="stat-label">Active Clients</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-item">
                    <div class="stat-number" data-target="150">150+</div>
                    <div class="stat-label">Countries Served</div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-item">
                    <div class="stat-number" data-target="50000">50K+</div>
                    <div class="stat-label">Shipments Annually</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Presence -->
<section class="py-100 section-gradient">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Global Presence</h2>
            <p>Strategic locations across major trade routes and business hubs</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-custom">
                    <img src="https://images.unsplash.com/photo-1512632578888-169bbbc64f33?w=600&q=80" alt="Middle East" 
                         class="img-fluid rounded mb-3" style="height: 250px; width: 100%; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5>Middle East Hub</h5>
                        <p>Dubai, UAE - Central logistics hub serving GCC, Middle East, and North Africa markets.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom">
                    <img src="https://images.unsplash.com/photo-1555217851-a1b8e327e65a?w=600&q=80" alt="Asia" 
                         class="img-fluid rounded mb-3" style="height: 250px; width: 100%; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5>Asia Pacific</h5>
                        <p>Strategic partnerships in China, India, Singapore, and major Asian ports.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom">
                    <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?w=600&q=80" alt="Europe" 
                         class="img-fluid rounded mb-3" style="height: 250px; width: 100%; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5>European Network</h5>
                        <p>Comprehensive coverage across EU with partners in major European cities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner section-navy">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <h2 style="color: var(--white);">Ready to Ship with Confidence?</h2>
                <p style="color: rgba(255,255,255,0.9);">Get an instant quote for your next shipment or speak with our logistics experts today.</p>
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary-custom btn-lg me-3">Request Quote</a>
                    <a href="contact.php" class="btn btn-outline-custom btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
