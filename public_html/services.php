<?php 
$pageTitle = 'Our Services';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 60vh; min-height: 500px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block;">FULL-SERVICE LOGISTICS</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3);">Comprehensive Logistics Services</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 850px;">
                        End-to-end freight solutions tailored to your business requirements across all transportation modes. From air freight to sea cargo and road transport, we deliver excellence every step of the way.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
                        <a href="#air-freight" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-arrow-down-circle me-2"></i>Explore Services
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

<!-- Air Freight -->
<section id="air-freight" class="py-100">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="service-icon mb-4">
                        <i class="bi bi-airplane"></i>
                    </div>
                    <h2 class="mb-4">Air Freight Services</h2>
                    <p class="lead text-orange">Fast, Reliable, and Secure Air Cargo Solutions</p>
                    <p>
                        Our air freight services provide the fastest and most reliable method for shipping time-sensitive 
                        cargo worldwide. We work with major airlines and have established strong partnerships to ensure 
                        competitive rates and priority handling.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Express and Standard Air Freight</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Door-to-Door and Airport-to-Airport</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Consolidation Services</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Dangerous Goods Handling</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Perishable Cargo Solutions</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Real-Time Tracking</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom mt-4">Request Air Freight Quote</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&q=80" alt="Air Freight" class="img-fluid rounded shadow-lg" 
                     style="height: 400px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Sea Freight -->
<section id="sea-freight" class="py-100 bg-light-custom">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="service-icon mb-4">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h2 class="mb-4">Sea Freight Services</h2>
                    <p class="lead text-orange">Cost-Effective Ocean Freight for All Cargo Types</p>
                    <p>
                        Our sea freight solutions offer the most economical option for shipping large volumes and oversized 
                        cargo internationally. We provide both Full Container Load (FCL) and Less than Container Load (LCL) 
                        services to major ports worldwide.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Service Options:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> FCL (Full Container Load)</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> LCL (Less than Container Load)</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Break Bulk Cargo</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Reefer Container Services</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Project Cargo Handling</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Port-to-Port and Door-to-Door</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom mt-4">Request Sea Freight Quote</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&q=80" alt="Sea Freight" class="img-fluid rounded shadow-lg" 
                     style="height: 400px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Road Transport -->
<section id="road-transport" class="py-100">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="service-icon mb-4">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h2 class="mb-4">Road Transportation</h2>
                    <p class="lead text-orange">Comprehensive Land Freight Solutions</p>
                    <p>
                        Our road transportation network covers the entire GCC region and extends to neighboring countries, 
                        providing reliable and efficient land freight services. We operate a modern fleet of trucks and 
                        trailers to handle various cargo types.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Capabilities:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> FTL (Full Truck Load)</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> LTL (Less than Truck Load)</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Cross-Border Transportation</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Temperature-Controlled Vehicles</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Oversized Cargo Transport</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> GPS Tracking on All Vehicles</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom mt-4">Request Road Transport Quote</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1519003722824-194d4455a60c?w=800&q=80" alt="Road Transport" class="img-fluid rounded shadow-lg" 
                     style="height: 400px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Warehousing -->
<section id="warehousing" class="py-100 bg-light-custom">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="service-icon mb-4">
                        <i class="bi bi-building"></i>
                    </div>
                    <h2 class="mb-4">Warehousing & Distribution</h2>
                    <p class="lead text-orange">Modern Storage Solutions with Value-Added Services</p>
                    <p>
                        Our state-of-the-art warehousing facilities provide secure storage and efficient distribution 
                        services. We offer flexible warehousing solutions with advanced inventory management systems 
                        to optimize your supply chain.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Warehousing Services:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Short & Long-Term Storage</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Climate-Controlled Facilities</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Inventory Management</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Pick & Pack Services</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Cross-Docking</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Order Fulfillment</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom mt-4">Request Warehousing Quote</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80" alt="Warehousing" class="img-fluid rounded shadow-lg" 
                     style="height: 400px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Customs Clearance -->
<section id="customs" class="py-100">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="service-icon mb-4">
                        <i class="bi bi-file-earmark-check"></i>
                    </div>
                    <h2 class="mb-4">Customs Clearance</h2>
                    <p class="lead text-orange">Expert Customs Brokerage & Documentation</p>
                    <p>
                        Navigate complex customs regulations with ease. Our experienced customs brokerage team ensures 
                        smooth clearance of your shipments, handling all documentation and compliance requirements 
                        efficiently.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Customs Services:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Import & Export Clearance</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Documentation Preparation</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Duty & Tax Optimization</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Compliance Consulting</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Free Zone Services</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Certificate of Origin</li>
                    </ul>
                    
                    <a href="/contact" class="btn btn-primary-custom mt-4">Contact Customs Team</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=800&q=80" alt="Customs Clearance" class="img-fluid rounded shadow-lg" 
                     style="height: 400px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Value-Added Services</h2>
            <p>Comprehensive solutions to enhance your logistics operations</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>Cargo Insurance</h4>
                    <p>Comprehensive insurance coverage to protect your shipments against all risks during transit.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-box"></i>
                    </div>
                    <h4>Packaging Solutions</h4>
                    <p>Professional packing and crating services to ensure safe transport of fragile and valuable items.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-graph-up"></i>
                    </div>
                    <h4>Supply Chain Consulting</h4>
                    <p>Expert advice to optimize your logistics operations and reduce overall supply chain costs.</p>
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
                <h2>Need a Custom Logistics Solution?</h2>
                <p>Our experts are ready to design a tailored freight solution for your unique requirements.</p>
                <div class="mt-4">
                    <a href="/quote" class="btn btn-primary-custom btn-lg me-3">Get Custom Quote</a>
                    <a href="/contact" class="btn btn-outline-custom btn-lg">Speak with Expert</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
