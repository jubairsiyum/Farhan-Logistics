<?php 
$pageTitle = 'Sea Freight Services';
include __DIR__ . '/../includes/header.php'; 
include __DIR__ . '/../includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section service-page-hero" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1605745341112-85968b19335b?w=1920&q=90') center/cover;">
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up">OCEAN FREIGHT</span>
                    <h1 data-aos="fade-up" data-aos-delay="100">Sea Freight Services</h1>
                    <p data-aos="fade-up" data-aos-delay="200" class="lead">
                        Cost-effective ocean freight for all cargo types. FCL and LCL services to major ports worldwide.
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
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="ps-lg-5">
                    <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(236, 32, 37, 0.3);">
                        <i class="bi bi-box-seam text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; color: var(--primary-navy);">Global Ocean Freight Solutions</h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600;">FCL & LCL Container Services Worldwide</p>
                    <p style="line-height: 1.8; color: #6c757d; font-size: 1.05rem;">
                        Our sea freight solutions offer the most economical option for shipping large volumes and oversized 
                        cargo internationally. We provide both Full Container Load (FCL) and Less than Container Load (LCL) 
                        services to major ports worldwide.
                    </p>
                    <p style="line-height: 1.8; color: #6c757d; font-size: 1.05rem;">
                        With strong partnerships with leading shipping lines, we ensure competitive rates, reliable scheduling, 
                        and complete cargo visibility throughout the journey.
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&q=85" alt="Sea Freight Services" class="img-fluid rounded-3 shadow-lg" style="height: 450px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <span class="badge text-white px-4 py-2 mb-3" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                OUR SERVICES
            </span>
            <h2 style="font-size: 2.5rem; color: var(--primary-navy);">Sea Freight Options</h2>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-box-fill" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">FCL (Full Container Load)</h5>
                    <p class="mb-0" style="color: #6c757d;">Exclusive container for your cargo with 20ft, 40ft, and 40ft HC options.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-boxes" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">LCL (Less than Container Load)</h5>
                    <p class="mb-0" style="color: #6c757d;">Cost-effective consolidation for smaller shipments sharing container space.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-thermometer-snow" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Reefer Containers</h5>
                    <p class="mb-0" style="color: #6c757d;">Temperature-controlled containers for perishable goods and pharmaceuticals.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-building" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Break Bulk Cargo</h5>
                    <p class="mb-0" style="color: #6c757d;">Specialized handling for oversized or non-containerizable cargo.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-gear-wide-connected" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Project Cargo</h5>
                    <p class="mb-0" style="color: #6c757d;">Complex logistics for industrial equipment and large-scale projects.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100" style="border-left: 4px solid var(--primary-red);">
                    <div class="mb-3" style="width: 60px; height: 60px; background: rgba(236, 32, 37, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-house-door-fill" style="font-size: 1.8rem; color: var(--primary-red);"></i>
                    </div>
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Door-to-Door Service</h5>
                    <p class="mb-0" style="color: #6c757d;">Complete logistics from origin pickup to final destination delivery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1605745341112-85968b19335b?w=1920&q=90') center/cover fixed;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8" data-aos="fade-up">
                <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700;">Need Sea Freight Services?</h2>
                <p class="text-white mb-5" style="font-size: 1.2rem; opacity: 0.95;">Get competitive ocean freight rates with reliable scheduling.</p>
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
