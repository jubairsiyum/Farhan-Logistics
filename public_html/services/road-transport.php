<?php 
$pageTitle = 'Road Transport Services';
include __DIR__ . '/../includes/header.php'; 
include __DIR__ . '/../includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 60vh; min-height: 500px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block;">GROUND TRANSPORTATION</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3);">Road Transport Services</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 850px;">
                        Reliable inland transportation and last-mile delivery solutions for seamless door-to-door service.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
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
<section class="py-100">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=800&q=85" alt="Road Transport Services" class="img-fluid rounded-3 shadow-lg" style="height: 450px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(236, 32, 37, 0.3);">
                        <i class="bi bi-truck text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; color: var(--primary-navy);">Complete Ground Transportation</h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600;">Inland Transport & Last-Mile Delivery</p>
                    <p style="line-height: 1.8; color: #6c757d; font-size: 1.05rem;">
                        Our road transport services provide reliable inland transportation from ports and airports to final 
                        destinations. Whether you need cross-border trucking, local delivery, or last-mile distribution, 
                        we have the fleet and expertise to handle your cargo safely and efficiently.
                    </p>
                    <p style="line-height: 1.8; color: #6c757d; font-size: 1.05rem;">
                        With GPS tracking, experienced drivers, and a network of partners, we ensure timely delivery 
                        and complete visibility throughout the journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <span class="badge text-white px-4 py-2 mb-3" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                TRANSPORT SOLUTIONS
            </span>
            <h2 style="font-size: 2.5rem; color: var(--primary-navy);">Road Transport Capabilities</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-truck-front-fill" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Full Truckload (FTL)</h5>
                    <p class="mb-0" style="color: #6c757d;">Dedicated trucks for your exclusive cargo with direct point-to-point delivery.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-boxes" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Less Than Truckload (LTL)</h5>
                    <p class="mb-0" style="color: #6c757d;">Cost-effective solution for smaller shipments sharing truck space.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-globe-americas" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Cross-Border Transport</h5>
                    <p class="mb-0" style="color: #6c757d;">International road freight with customs clearance and border coordination.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-house-door-fill" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Last-Mile Delivery</h5>
                    <p class="mb-0" style="color: #6c757d;">Final leg delivery to warehouses, stores, or end customers.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-geo-alt-fill" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">GPS Tracking</h5>
                    <p class="mb-0" style="color: #6c757d;">Real-time location tracking for complete shipment visibility.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-clock-fill" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Time-Definite Delivery</h5>
                    <p class="mb-0" style="color: #6c757d;">Scheduled delivery windows with guaranteed on-time arrival.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=1920&q=90') center/cover fixed;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700;">Need Road Transport Services?</h2>
                <p class="text-white mb-5" style="font-size: 1.2rem; opacity: 0.95;">Reliable ground transportation with complete tracking and visibility.</p>
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
