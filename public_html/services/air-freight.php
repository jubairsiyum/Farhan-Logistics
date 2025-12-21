<?php 
$pageTitle = 'Air Freight Services';
include __DIR__ . '/../includes/header.php'; 
include __DIR__ . '/../includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section service-page-hero" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&q=90') center/cover;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up">EXPRESS DELIVERY</span>
                    <h1 data-aos="fade-up" data-aos-delay="100">Air Freight Services</h1>
                    <p data-aos="fade-up" data-aos-delay="200" class="lead">
                        Fast, reliable, and secure air cargo solutions for time-sensitive shipments worldwide. Priority handling with competitive rates.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" class="mt-4">
                        <a href="/quote" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-file-text me-2"></i>Request Quote
                        </a>
                        <a href="/contact" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-headset me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="service-overview-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=800&q=85" alt="Air Freight Services" class="service-overview-img shadow-lg">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="service-icon-box">
                        <i class="bi bi-airplane-fill"></i>
                    </div>
                    <h2 class="mb-4">Fastest Route to Your Destination</h2>
                    <p class="lead text-orange mb-4">Express and Standard Air Freight Solutions</p>
                    <p class="mb-3">
                        Our air freight services provide the fastest and most reliable method for shipping time-sensitive 
                        cargo worldwide. We work with major airlines and have established strong partnerships to ensure 
                        competitive rates and priority handling for your valuable shipments.
                    </p>
                    <p>
                        From express shipments to standard air freight, door-to-door or airport-to-airport delivery, 
                        we customize solutions to meet your specific requirements and timeline.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="text-center mb-60" data-aos="fade-up">
            <span class="section-badge mb-3">OUR CAPABILITIES</span>
            <h2 class="mb-3">Air Freight Features & Benefits</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Comprehensive air cargo solutions with end-to-end service excellence</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-feature-card">
                    <div class="service-feature-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h5>Express & Standard Options</h5>
                    <p>Choose between express air freight for urgent shipments or standard air cargo for cost-effective delivery within 3-7 days.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="service-feature-card">
                    <div class="service-feature-icon">
                        <i class="bi bi-house-door-fill"></i>
                    </div>
                    <h5>Door-to-Door Delivery</h5>
                    <p>Complete end-to-end service from pickup at origin to final delivery at destination, handling all logistics in between.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-feature-card">
                    <div class="service-feature-icon">
                        <i class="bi bi-boxes"></i>
                    </div>
                    <h5>Consolidation Services</h5>
                    <p>Combine multiple smaller shipments into one consolidated air freight shipment for cost optimization.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="service-feature-card">
                    <div class="service-feature-icon">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                    </div>
                    <h5>Dangerous Goods Handling</h5>
                    <p>Certified handling and transportation of hazardous materials with full IATA compliance and safety protocols.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-feature-card">
                    <div class="service-feature-icon">
                        <i class="bi bi-thermometer-snow"></i>
                    </div>
                    <h5>Temperature-Controlled Cargo</h5>
                    <p>Specialized solutions for perishable goods, pharmaceuticals, and temperature-sensitive products.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-feature-card">
                    <div class="service-feature-icon">
                        <i class="bi bi-radar"></i>
                    </div>
                    <h5>Real-Time Tracking</h5>
                    <p>Track your air freight shipments 24/7 with our advanced tracking system and receive instant updates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="service-cta-section" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1920&q=90') center/cover;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="text-white mb-4">Ready to Ship Your Air Freight?</h2>
                <p class="text-white mb-5 lead">Get competitive rates and fast response times for your air cargo needs.</p>
                <div>
                    <a href="/quote" class="btn btn-primary-custom btn-lg me-3">
                        <i class="bi bi-file-text me-2"></i>Request Quote
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-telephone me-2"></i>Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
