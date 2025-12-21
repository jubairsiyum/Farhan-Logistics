<?php 
$pageTitle = 'Track Shipment';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 60vh; min-height: 500px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block;">REAL-TIME VISIBILITY</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3);">Track Your Shipment</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 850px;">
                        Real-time tracking and complete visibility for your cargo anywhere in the world. Stay informed with instant updates and detailed shipment status information.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
                        <a href="#tracking-form" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-search me-2"></i>Track Now
                        </a>
                        <a href="/contact" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-headset me-2"></i>Get Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tracking Section -->
<section id="tracking-form" class="py-100 form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tracking-container" data-aos="fade-up">
                    <div class="text-center mb-4">
                        <i class="bi bi-geo-alt" style="font-size: 4rem; color: var(--primary-red);"></i>
                        <h2 class="mt-3 mb-3">Shipment Tracking</h2>
                        <p class="text-muted">
                            Enter your tracking number to get real-time updates on your shipment status and location.
                        </p>
                    </div>
                    
                    <form id="trackingForm" class="needs-validation" novalidate>
                        <div class="tracking-input-group">
                            <input 
                                type="text" 
                                class="form-control form-control-lg" 
                                id="trackingNumber" 
                                name="trackingNumber"
                                placeholder="Enter Tracking Number (e.g., FL123456789)" 
                                required
                                pattern="^FL[0-9]{9}$"
                            >
                            <button type="submit" class="btn btn-primary-custom btn-lg">
                                <i class="bi bi-search"></i> Track Shipment
                            </button>
                        </div>
                        <div class="invalid-feedback">
                            Please enter a valid tracking number (Format: FL123456789)
                        </div>
                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="bi bi-info-circle"></i> 
                                Tracking numbers start with "FL" followed by 9 digits
                            </small>
                        </div>
                    </form>
                    
                    <div id="trackingResult" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Track Section -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>How to Track Your Shipment</h2>
            <p>Simple steps to stay updated on your cargo's journey</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="mb-3">
                        <span class="badge rounded-circle bg-primary" style="width: 60px; height: 60px; line-height: 60px; font-size: 1.5rem; background-color: var(--primary-orange) !important;">1</span>
                    </div>
                    <h5>Get Tracking Number</h5>
                    <p class="text-muted">
                        Receive your unique tracking number via email when your shipment is booked with us.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="mb-3">
                        <span class="badge rounded-circle bg-primary" style="width: 60px; height: 60px; line-height: 60px; font-size: 1.5rem; background-color: var(--primary-orange) !important;">2</span>
                    </div>
                    <h5>Enter Number</h5>
                    <p class="text-muted">
                        Input your tracking number in the search box above and click the track button.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="mb-3">
                        <span class="badge rounded-circle bg-primary" style="width: 60px; height: 60px; line-height: 60px; font-size: 1.5rem; background-color: var(--primary-orange) !important;">3</span>
                    </div>
                    <h5>View Status</h5>
                    <p class="text-muted">
                        See real-time updates including current location, status, and estimated delivery date.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="mb-3">
                        <span class="badge rounded-circle bg-primary" style="width: 60px; height: 60px; line-height: 60px; font-size: 1.5rem; background-color: var(--primary-orange) !important;">4</span>
                    </div>
                    <h5>Stay Updated</h5>
                    <p class="text-muted">
                        Receive automatic email notifications for major milestone updates during transit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tracking Features -->
<section class="py-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="mb-4">Advanced Tracking Features</h2>
                <p class="lead text-orange">Complete Visibility Throughout the Journey</p>
                <p>
                    Our state-of-the-art tracking system provides comprehensive visibility of your shipments 
                    from origin to final destination, giving you peace of mind and control.
                </p>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Real-Time Updates</h5>
                        <p>Live tracking with minute-by-minute location updates and status changes.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-bell"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Automatic Notifications</h5>
                        <p>Email and SMS alerts for pickup, transit, customs clearance, and delivery milestones.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Delivery Estimates</h5>
                        <p>Accurate estimated delivery dates updated dynamically based on actual progress.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div class="feature-content">
                        <h5>Document Access</h5>
                        <p>View and download shipping documents, invoices, and proof of delivery online.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=800&q=80" alt="Global Tracking" class="img-fluid rounded shadow-lg" 
                     style="height: 400px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Tracking FAQ</h2>
            <p>Common questions about shipment tracking</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="trackingFAQ" data-aos="fade-up">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How do I get my tracking number?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#trackingFAQ">
                            <div class="accordion-body">
                                Your tracking number is automatically sent to your registered email address once your shipment 
                                is booked and processed. You can also request it from your account manager or customer service team.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                When will tracking information be available?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#trackingFAQ">
                            <div class="accordion-body">
                                Tracking information typically becomes available within 24-48 hours of shipment pickup. Updates 
                                continue throughout the transit until final delivery is confirmed.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                What if my tracking number doesn't work?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#trackingFAQ">
                            <div class="accordion-body">
                                If your tracking number isn't working, please check that you've entered it correctly (format: FL123456789). 
                                If the issue persists, contact our customer service team at +971 4 XXX XXXX or info@farhanlogistics.com.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                How often is tracking information updated?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#trackingFAQ">
                            <div class="accordion-body">
                                Our tracking system updates in real-time. Major status changes (pickup, departure, arrival, customs, 
                                delivery) are reflected immediately. Location updates may vary based on the transportation mode and route.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Support -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <i class="bi bi-headset" style="font-size: 4rem; color: var(--primary-orange);"></i>
                <h2 class="mt-4 mb-3">Need Help Tracking Your Shipment?</h2>
                <p class="lead mb-4">
                    Our customer support team is available 24/7 to assist you with any tracking inquiries.
                </p>
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <div class="p-3 border rounded">
                            <i class="bi bi-telephone-fill text-orange d-block mb-2" style="font-size: 2rem;"></i>
                            <h6>Call Us</h6>
                            <p class="mb-0">+971 4 XXX XXXX</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded">
                            <i class="bi bi-envelope-fill text-orange d-block mb-2" style="font-size: 2rem;"></i>
                            <h6>Email Us</h6>
                            <p class="mb-0">tracking@farhanlogistics.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border rounded">
                            <i class="bi bi-chat-dots-fill text-orange d-block mb-2" style="font-size: 2rem;"></i>
                            <h6>Live Chat</h6>
                            <p class="mb-0">Available 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
