<?php 
$pageTitle = 'Contact Us';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 50vh; min-height: 400px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <h1 data-aos="fade-up">Get in Touch</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        We're here to help with all your logistics needs. Contact our team today.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-100">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Information -->
            <div class="col-lg-4" data-aos="fade-right">
                <h3 class="mb-4">Contact Information</h3>
                <p class="text-muted mb-4">
                    Reach out to us through any of the following channels. We're available 24/7 to serve you.
                </p>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-geo-alt-fill text-orange me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6>Head Office</h6>
                            <p class="text-muted mb-0">
                                Office 123, Business Bay<br>
                                Dubai, United Arab Emirates<br>
                                P.O. Box 12345
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-telephone-fill text-orange me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6>Phone</h6>
                            <p class="text-muted mb-0">
                                Main: +971 4 XXX XXXX<br>
                                Mobile: +971 50 XXX XXXX
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-envelope-fill text-orange me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6>Email</h6>
                            <p class="text-muted mb-0">
                                General: info@farhanlogistics.com<br>
                                Sales: sales@farhanlogistics.com<br>
                                Support: support@farhanlogistics.com
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-clock-fill text-orange me-3" style="font-size: 1.5rem;"></i>
                        <div>
                            <h6>Business Hours</h6>
                            <p class="text-muted mb-0">
                                Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 2:00 PM<br>
                                Sunday: Closed<br>
                                <small class="text-orange">24/7 Emergency Support Available</small>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h6 class="mb-3">Follow Us</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="form-container">
                    <h3 class="mb-4">Send Us a Message</h3>
                    <p class="text-muted mb-4">
                        Fill out the form below and our team will get back to you within 24 hours.
                    </p>
                    
                    <div id="alertContainer"></div>
                    
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="name" 
                                        name="name" 
                                        required
                                        placeholder="John Doe"
                                    >
                                    <div class="invalid-feedback">Please provide your name.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input 
                                        type="email" 
                                        class="form-control" 
                                        id="email" 
                                        name="email" 
                                        required
                                        placeholder="john@example.com"
                                    >
                                    <div class="invalid-feedback">Please provide a valid email.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        id="phone" 
                                        name="phone"
                                        placeholder="+971 50 XXX XXXX"
                                    >
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company" class="form-label">Company Name</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="company" 
                                        name="company"
                                        placeholder="Your Company"
                                    >
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        id="subject" 
                                        name="subject" 
                                        required
                                        placeholder="How can we help you?"
                                    >
                                    <div class="invalid-feedback">Please provide a subject.</div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea 
                                        class="form-control" 
                                        id="message" 
                                        name="message" 
                                        rows="6" 
                                        required
                                        placeholder="Tell us more about your inquiry..."
                                    ></textarea>
                                    <div class="invalid-feedback">Please provide a message.</div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary-custom btn-lg">
                                    <i class="bi bi-send"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-0">
    <div class="container-fluid p-0">
        <div class="map-container" style="height: 450px; background: #e9ecef;" data-aos="fade-up">
            <!-- Google Maps Embed - Replace with your actual location -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14427.490741265333!2d55.26516!3d25.186111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682829c85bf9%3A0x6503191e8e92a634!2sBusiness%20Bay%20-%20Dubai!5e0!3m2!1sen!2sae!4v1234567890" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
</section>

<!-- Office Locations -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Global Offices</h2>
            <p>Find a Farhan Logistics office near you</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-custom h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-building" style="font-size: 3rem; color: var(--primary-orange);"></i>
                        <h5 class="mt-3 mb-3">Dubai, UAE (HQ)</h5>
                        <p class="text-muted">
                            Office 123, Business Bay<br>
                            Dubai, United Arab Emirates<br>
                            Phone: +971 4 XXX XXXX<br>
                            Email: dubai@farhanlogistics.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-building" style="font-size: 3rem; color: var(--primary-orange);"></i>
                        <h5 class="mt-3 mb-3">Shanghai, China</h5>
                        <p class="text-muted">
                            Partner Office<br>
                            Pudong District, Shanghai<br>
                            Phone: +86 21 XXXX XXXX<br>
                            Email: shanghai@farhanlogistics.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-building" style="font-size: 3rem; color: var(--primary-orange);"></i>
                        <h5 class="mt-3 mb-3">London, UK</h5>
                        <p class="text-muted">
                            Partner Office<br>
                            Heathrow Airport Area<br>
                            Phone: +44 20 XXXX XXXX<br>
                            Email: london@farhanlogistics.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <h2>Ready to Start Your Shipment?</h2>
                <p>Get an instant quote and experience world-class logistics service.</p>
                <div class="mt-4">
                    <a href="/quote" class="btn btn-primary-custom btn-lg me-3">Get a Quote</a>
                    <a href="/services" class="btn btn-outline-custom btn-lg">View Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
