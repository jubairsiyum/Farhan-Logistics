<?php 
$pageTitle = 'Sitemap';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 40vh; min-height: 350px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <h1 data-aos="fade-up" style="font-size: 3rem; font-weight: 700; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: white;">Sitemap</h1>
                    <p data-aos="fade-up" data-aos-delay="100" style="font-size: 1.1rem; margin-top: 1rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); color: white;">
                        Explore all pages and services available on our website.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sitemap Content -->
<section class="py-100">
    <div class="container">
        <div class="row g-5">
            <!-- Main Pages -->
            <div class="col-lg-6">
                <div class="sitemap-section">
                    <h3 style="color: var(--primary-navy); font-weight: 700; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid var(--primary-red);">
                        <i class="bi bi-house-door me-2" style="color: var(--primary-red);"></i>Main Pages
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li class="sitemap-item mb-3">
                            <a href="/" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Home</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/about" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">About Us</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/leadership" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Leadership Team</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/success-stories" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Success Stories</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/careers" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Careers</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/contact" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-6">
                <div class="sitemap-section">
                    <h3 style="color: var(--primary-navy); font-weight: 700; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid var(--primary-red);">
                        <i class="bi bi-box-seam me-2" style="color: var(--primary-red);"></i>Services
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li class="sitemap-item mb-3">
                            <a href="/services#sea-freight" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Sea Freight</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/services#air-freight" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Air Freight</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/services#road-transport" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Road Transport</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/services#warehousing" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Warehousing</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/services#customs-clearance" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Customs Clearance</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/services" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">All Services</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Solutions & Tools -->
            <div class="col-lg-6">
                <div class="sitemap-section">
                    <h3 style="color: var(--primary-navy); font-weight: 700; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid var(--primary-red);">
                        <i class="bi bi-lightbulb me-2" style="color: var(--primary-red);"></i>Solutions & Tools
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li class="sitemap-item mb-3">
                            <a href="/solutions" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Industry Solutions</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/tracking" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Track Shipment</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/quote" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Get Quote</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Legal & Information -->
            <div class="col-lg-6">
                <div class="sitemap-section">
                    <h3 style="color: var(--primary-navy); font-weight: 700; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid var(--primary-red);">
                        <i class="bi bi-shield-check me-2" style="color: var(--primary-red);"></i>Legal & Information
                    </h3>
                    <ul style="list-style: none; padding: 0;">
                        <li class="sitemap-item mb-3">
                            <a href="/privacy" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Privacy Policy</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/terms" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Terms & Conditions</span>
                            </a>
                        </li>
                        <li class="sitemap-item mb-3">
                            <a href="/sitemap" style="color: #333; text-decoration: none; display: flex; align-items: center; transition: all 0.3s ease;">
                                <i class="bi bi-chevron-right me-2" style="color: var(--primary-red); font-weight: bold;"></i>
                                <span class="sitemap-link">Sitemap</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5 pt-5" style="border-top: 2px solid #eee;">
            <div class="col-lg-8 mx-auto">
                <div class="alert alert-info" style="background: #e7f3ff; border: 1px solid #b3d9ff; border-radius: 8px; padding: 20px;">
                    <h5 style="color: #0066cc; margin-bottom: 10px;">
                        <i class="bi bi-info-circle me-2"></i>Additional Information
                    </h5>
                    <p class="mb-3">
                        Looking for something specific? Here's how to navigate our services:
                    </p>
                    <ul>
                        <li><strong>Service Details:</strong> Visit the <a href="/services" style="color: var(--primary-red);">Services page</a> for comprehensive information about each logistics service.</li>
                        <li><strong>Industry-Specific Solutions:</strong> Check our <a href="/solutions" style="color: var(--primary-red);">Solutions page</a> for tailored services for different industries.</li>
                        <li><strong>Get a Quote:</strong> Ready to ship? <a href="/quote" style="color: var(--primary-red);">Request a quote</a> and our team will respond within 24 hours.</li>
                        <li><strong>Track Your Shipment:</strong> Use our <a href="/tracking" style="color: var(--primary-red);">Tracking tool</a> to monitor your freight in real-time.</li>
                        <li><strong>Contact Us:</strong> Have questions? <a href="/contact" style="color: var(--primary-red);">Get in touch</a> with our team.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Card -->
        <div class="row mt-5 pt-5">
            <div class="col-lg-6 mx-auto">
                <div class="card" style="border: none; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.8)); color: white; border-radius: 12px; box-shadow: 0 8px 30px rgba(0,0,0,0.15); overflow: hidden;">
                    <div class="card-body p-5">
                        <h5 class="mb-4" style="font-weight: 700; font-size: 1.3rem;">
                            <i class="bi bi-telephone me-2"></i>Need Help Navigating?
                        </h5>
                        <p class="mb-4">
                            Our customer support team is available 24/7 to assist you with any questions about our services or to help you find what you're looking for on our website.
                        </p>
                        <div class="contact-links" style="display: flex; flex-direction: column; gap: 10px;">
                            <a href="tel:+8801901102523" style="color: #fff; text-decoration: none; display: inline-flex; align-items: center;">
                                <i class="bi bi-telephone-fill me-2" style="font-size: 1.2rem;"></i>
                                <span>+880 1901-102523 (Operations)</span>
                            </a>
                            <a href="tel:+8801844167431" style="color: #fff; text-decoration: none; display: inline-flex; align-items: center;">
                                <i class="bi bi-telephone-fill me-2" style="font-size: 1.2rem;"></i>
                                <span>+880 1844-167431 (Sales)</span>
                            </a>
                            <a href="mailto:amin@farhancargobd.com" style="color: #fff; text-decoration: none; display: inline-flex; align-items: center;">
                                <i class="bi bi-envelope me-2" style="font-size: 1.2rem;"></i>
                                <span>amin@farhancargobd.com</span>
                            </a>
                            <a href="mailto:hannan@farhancargobd.com" style="color: #fff; text-decoration: none; display: inline-flex; align-items: center;">
                                <i class="bi bi-envelope me-2" style="font-size: 1.2rem;"></i>
                                <span>hannan@farhancargobd.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .sitemap-item:hover .sitemap-link {
        color: var(--primary-red) !important;
        padding-left: 5px;
    }

    .sitemap-item:hover i {
        transform: translateX(3px);
    }

    .sitemap-link {
        transition: all 0.3s ease;
    }
</style>

<?php include 'includes/footer.php'; ?>
