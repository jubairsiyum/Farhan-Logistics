<?php 
$pageTitle = 'Contact Us';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 60vh; min-height: 500px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block; color: white;">24/7 SUPPORT</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: white;">Get in Touch</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 850px; color: white;">
                        We're here to help with all your logistics needs. Contact our dedicated team today for personalized solutions and expert guidance.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
                        <a href="#contact-form" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-envelope me-2"></i>Send Message
                        </a>
                        <a href="/quote" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-file-text me-2"></i>Request Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact-form" class="py-100">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Information -->
            <div class="col-lg-4" data-aos="fade-right">
                <h3 class="mb-4" style="color: var(--primary-navy); font-weight: 700;">Contact Information</h3>
                <p class="text-muted mb-4">
                    Reach out to us through any of the following channels. We're available 24/7 to serve you.
                </p>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-geo-alt-fill me-3" style="font-size: 1.5rem; color: var(--primary-red);"></i>
                        <div>
                            <h6 style="color: var(--primary-navy); font-weight: 700;">Dhaka Office (Head Office)</h6>
                            <p class="text-muted mb-0">
                                House # 19, Road # 6/A<br>
                                Sector-12, Uttara<br>
                                Dhaka-1230, Bangladesh
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-telephone-fill me-3" style="font-size: 1.5rem; color: var(--primary-red);"></i>
                        <div>
                            <h6 style="color: var(--primary-navy); font-weight: 700;">Phone</h6>
                            <p class="text-muted mb-0">
                                <a href="tel:+8801844167431" style="color: var(--primary-red); text-decoration: none;">+880 1844-167431</a><br>
                                <a href="tel:+8801901102523" style="color: var(--primary-red); text-decoration: none;">+880 1901-102523</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-envelope-fill me-3" style="font-size: 1.5rem; color: var(--primary-red);"></i>
                        <div>
                            <h6 style="color: var(--primary-navy); font-weight: 700;">Email</h6>
                            <p class="text-muted mb-0">
                                <a href="mailto:hannan@farhancargobd.com" style="color: var(--primary-red); text-decoration: none;">hannan@farhancargobd.com</a><br>
                                <a href="mailto:amin@farhancargobd.com" style="color: var(--primary-red); text-decoration: none;">amin@farhancargobd.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="bi bi-clock-fill me-3" style="font-size: 1.5rem; color: var(--primary-red);"></i>
                        <div>
                            <h6 style="color: var(--primary-navy); font-weight: 700;">Business Hours</h6>
                            <p class="text-muted mb-0">
                                Saturday - Thursday: 9:00 AM - 6:00 PM<br>
                                Friday: Closed<br>
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
                    <h3 class="mb-4" style="color: var(--primary-navy); font-weight: 700;">Send Us a Message</h3>
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
                                        placeholder="Your Full Name"
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
                                        placeholder="your.email@company.com"
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
                                        placeholder="+880 1XXX-XXXXXX"
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
            <!-- Google Maps Embed - Uttara, Dhaka -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.2817937924285!2d90.38791!3d23.87534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0x4b32213e0c7c16c!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1234567890" 
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
            <h2 style="color: var(--primary-navy); font-weight: 700;">Our Global Offices</h2>
            <p style="color: var(--dark-gray); font-size: 1.1rem;">Find a Farhan Logistics office near you</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-custom h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-building" style="font-size: 3rem; color: var(--primary-red);"></i>
                        <h5 class="mt-3 mb-3" style="color: var(--primary-navy); font-weight: 700;">Dhaka Office (Head Office)</h5>
                        <p class="text-muted">
                            House # 19, Road # 6/A<br>
                            Sector-12, Uttara<br>
                            Dhaka-1230, Bangladesh<br>
                            Phone: +880 1844-167431<br>
                            Email: hannan@farhancargobd.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-building" style="font-size: 3rem; color: var(--primary-red);"></i>
                        <h5 class="mt-3 mb-3" style="color: var(--primary-navy); font-weight: 700;">Airport Office</h5>
                        <p class="text-muted">
                            Biman Cargo Village<br>
                            HSIA, Dhaka-1230<br>
                            Bangladesh<br>
                            Phone: +880 1844-167431<br>
                            Email: farhanlogisticsltd2025@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-building" style="font-size: 3rem; color: var(--primary-red);"></i>
                        <h5 class="mt-3 mb-3" style="color: var(--primary-navy); font-weight: 700;">Chittagong Office</h5>
                        <p class="text-muted">
                            Hasna Towar, Agrabad<br>
                            C/A-Chittagong<br>
                            Bangladesh<br>
                            Phone: +880 1844-167431<br>
                            Email: hannan@farhancargobd.com
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
                <h2 style="color: white; font-weight: 700;">Ready to Start Your Shipment?</h2>
                <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.2rem;">Get an instant quote and experience world-class logistics service.</p>
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
