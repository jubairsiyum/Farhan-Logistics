<?php 
$pageTitle = 'Our Services';
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
<section id="air-freight" class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                            AIR CARGO
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Air Freight Services
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Fast, Reliable, and Secure Air Cargo Solutions
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        Our air freight services provide the fastest and most reliable method for shipping time-sensitive 
                        cargo worldwide. We work with major airlines and have established strong partnerships to ensure 
                        competitive rates and priority handling.
                    </p>
                    
                    <h5 class="mt-4 mb-3" style="color: var(--primary-navy); font-weight: 700;">Key Features:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Express and Standard Air Freight</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Door-to-Door and Airport-to-Airport</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Consolidation Services</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Dangerous Goods Handling</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Perishable Cargo Solutions</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Real-Time Tracking</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom btn-lg mt-4">
                        <i class="bi bi-file-text me-2"></i>Request Air Freight Quote
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&q=80" 
                         alt="Air Freight" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 450px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute bottom-0 end-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-airplane-fill mb-2" style="font-size: 2rem; color: var(--primary-red);"></i>
                            <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">24-48hrs</h5>
                            <small style="color: #6c757d; font-weight: 600;">Express Delivery</small>
                        </div>
                    </div>
                </div>
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
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(47, 51, 141, 0.3);">
                            OCEAN FREIGHT
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Sea Freight Services
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Cost-Effective Ocean Freight for All Cargo Types
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        Our sea freight solutions offer the most economical option for shipping large volumes and oversized 
                        cargo internationally. We provide both Full Container Load (FCL) and Less than Container Load (LCL) 
                        services to major ports worldwide.
                    </p>
                    
                    <h5 class="mt-4 mb-3" style="color: var(--primary-navy); font-weight: 700;">Service Options:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> FCL (Full Container Load)</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> LCL (Less than Container Load)</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Break Bulk Cargo</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Reefer Container Services</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Project Cargo Handling</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Port-to-Port and Door-to-Door</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom btn-lg mt-4">
                        <i class="bi bi-file-text me-2"></i>Request Sea Freight Quote
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&q=80" 
                         alt="Sea Freight" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 450px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute bottom-0 start-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-box-seam-fill mb-2" style="font-size: 2rem; color: var(--primary-navy);"></i>
                            <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">FCL & LCL</h5>
                            <small style="color: #6c757d; font-weight: 600;">Both Options</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Road Transport -->
<section id="road-transport" class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                            LAND FREIGHT
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Road Transportation
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Comprehensive Land Freight Solutions
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        Our road transportation network covers the entire GCC region and extends to neighboring countries, 
                        providing reliable and efficient land freight services. We operate a modern fleet of trucks and 
                        trailers to handle various cargo types.
                    </p>
                    
                    <h5 class="mt-4 mb-3" style="color: var(--primary-navy); font-weight: 700;">Capabilities:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> FTL (Full Truck Load)</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> LTL (Less than Truck Load)</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Cross-Border Transportation</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Temperature-Controlled Vehicles</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Oversized Cargo Transport</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> GPS Tracking on All Vehicles</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom btn-lg mt-4">
                        <i class="bi bi-file-text me-2"></i>Request Road Transport Quote
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1519003722824-194d4455a60c?w=800&q=80" 
                         alt="Road Transport" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 450px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute bottom-0 end-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-geo-alt-fill mb-2" style="font-size: 2rem; color: var(--primary-red);"></i>
                            <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">GPS</h5>
                            <small style="color: #6c757d; font-weight: 600;">Live Tracking</small>
                        </div>
                    </div>
                </div>
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
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(47, 51, 141, 0.3);">
                            STORAGE SOLUTIONS
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Warehousing & Distribution
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Modern Storage Solutions with Value-Added Services
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        Our state-of-the-art warehousing facilities provide secure storage and efficient distribution 
                        services. We offer flexible warehousing solutions with advanced inventory management systems 
                        to optimize your supply chain.
                    </p>
                    
                    <h5 class="mt-4 mb-3" style="color: var(--primary-navy); font-weight: 700;">Warehousing Services:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Short & Long-Term Storage</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Climate-Controlled Facilities</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Inventory Management</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Pick & Pack Services</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Cross-Docking</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Order Fulfillment</li>
                    </ul>
                    
                    <a href="/quote" class="btn btn-primary-custom btn-lg mt-4">
                        <i class="bi bi-file-text me-2"></i>Request Warehousing Quote
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&q=80" 
                         alt="Warehousing" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 450px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute bottom-0 start-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-shield-check-fill mb-2" style="font-size: 2rem; color: var(--primary-navy);"></i>
                            <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">24/7</h5>
                            <small style="color: #6c757d; font-weight: 600;">Security</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customs Clearance -->
<section id="customs" class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                            CUSTOMS BROKERAGE
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Customs Clearance
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Expert Customs Brokerage & Documentation
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        Navigate complex customs regulations with ease. Our experienced customs brokerage team ensures 
                        smooth clearance of your shipments, handling all documentation and compliance requirements 
                        efficiently.
                    </p>
                    
                    <h5 class="mt-4 mb-3" style="color: var(--primary-navy); font-weight: 700;">Customs Services:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Import & Export Clearance</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Documentation Preparation</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Duty & Tax Optimization</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Compliance Consulting</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Free Zone Services</li>
                        <li class="mb-2" style="color: #495057; font-size: 1.05rem;"><i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red);"></i> Certificate of Origin</li>
                    </ul>
                    
                    <a href="/contact" class="btn btn-primary-custom btn-lg mt-4">
                        <i class="bi bi-envelope me-2"></i>Contact Customs Team
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=800&q=80" 
                         alt="Customs Clearance" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 450px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute bottom-0 end-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-file-earmark-check-fill mb-2" style="font-size: 2rem; color: var(--primary-red);"></i>
                            <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">Fast</h5>
                            <small style="color: #6c757d; font-weight: 600;">Clearance</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.12), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.03), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 50%; right: 15%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(236, 32, 37, 0.08), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    ADDITIONAL SOLUTIONS
                </span>
            </div>
            <h2 class="text-white mb-3" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                Value-Added Services
            </h2>
            <p class="text-white mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                Comprehensive solutions to enhance your logistics operations and streamline your supply chain
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-shield-check text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Cargo Insurance</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Comprehensive insurance coverage to protect your shipments against all risks during transit with competitive rates
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-box text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Packaging Solutions</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Professional packing and crating services to ensure safe transport of fragile and valuable items worldwide
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-graph-up text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Supply Chain Consulting</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Expert advice to optimize your logistics operations and reduce overall supply chain costs significantly
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-100" style="background: linear-gradient(135deg, var(--primary-navy) 0%, var(--primary-red) 100%); position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255, 255, 255, 0.08), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <h2 class="text-white mb-4" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                    Need a Custom Logistics Solution?
                </h2>
                <p class="text-white mb-5" style="font-size: 1.2rem; line-height: 1.9; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                    Our experts are ready to design a tailored freight solution for your unique requirements. 
                    Contact us today to discuss how we can optimize your supply chain.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/quote" class="btn btn-light btn-lg px-5" 
                       style="font-weight: 600; box-shadow: 0 8px 25px rgba(0,0,0,0.2);" 
                       onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 35px rgba(0,0,0,0.3)';" 
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.2)';">
                        <i class="bi bi-file-text me-2"></i>Get Custom Quote
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg px-5" 
                       style="font-weight: 600; border-width: 2px;" 
                       onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(-3px)';" 
                       onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)';">
                        <i class="bi bi-telephone me-2"></i>Speak with Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
