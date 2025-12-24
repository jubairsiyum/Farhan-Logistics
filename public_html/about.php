<?php 
$pageTitle = 'About Us';
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
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block;">EST. SEPTEMBER 2016</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: white;">About Farhan Logistics</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 800px; color: white;">
                        Professional 3PL company specializing in air and sea freight services. Connecting businesses worldwide with reliable, efficient, and customer-focused logistics solutions.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
                        <a href="#overview" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-arrow-down-circle me-2"></i>Learn More
                        </a>
                        <a href="/services" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-gear-wide-connected me-2"></i>Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Overview -->
<section id="overview" class="py-100">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?w=800&q=85" 
                         alt="Farhan Logistics International" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 500px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute top-0 end-0 m-3 p-3" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <h4 class="mb-0" style="color: var(--primary-navy); font-weight: 700; font-size: 1.5rem;">9+</h4>
                            <small style="color: #6c757d; font-weight: 600;">Years</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-4">
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                            EST. SEPTEMBER 2016
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Professional 3PL Excellence
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Third Party Logistics Specialists Based in Bangladesh
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        <strong style="color: var(--primary-navy);">Farhan Logistics International Ltd.</strong> is a professional 3PL (Third Party Logistics) company based in Bangladesh, 
                        specializing in both <strong style="color: var(--primary-navy);">air and sea freight services</strong>, including <strong>FCL (Full Container Load)</strong> and <strong>LCL (Less than Container Load)</strong> 
                        shipments.
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        With specialized expertise in <strong style="color: var(--primary-red);">RMG (Ready-Made Garments)</strong>, handicrafts, agro products, and general cargo, 
                        we provide seamless solutions for import and export operations.
                    </p>
                    <div class="mt-4">
                        <a href="/services" class="btn btn-primary-custom btn-lg">
                            <i class="bi bi-arrow-right-circle me-2"></i>Explore Our Services
                        </a>
                        <a href="/contact" class="btn btn-outline-custom btn-lg ms-2">
                            <i class="bi bi-envelope me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Managing Director Section -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title mb-60" data-aos="fade-up">
            <h2>Leadership</h2>
            <p>Meet the visionary leader driving our success</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="leadership-card shadow-lg" data-aos="fade-up" data-aos-delay="100" 
                     style="background: white; border-radius: 20px; overflow: hidden; border: none;">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5">
                            <div class="leader-img" style="position: relative; overflow: hidden; height: 100%; min-height: 450px;">
                                <img src="/assets/images/hanna.png" 
                                     alt="Md. Abdul Hannan - Managing Director" 
                                     style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                <div class="leader-overlay" 
                                     style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; 
                                            background: linear-gradient(135deg, rgba(47, 51, 141, 0.9), rgba(236, 32, 37, 0.85)); 
                                            opacity: 0; transition: all 0.4s ease; display: flex; align-items: center; justify-content: center;">
                                    <div class="social-links text-center">
                                        <a href="mailto:hannan@farhancargobd.com" class="text-white d-inline-block mx-2" 
                                           style="font-size: 1.8rem; transition: transform 0.3s;" 
                                           onmouseover="this.style.transform='scale(1.2)'" 
                                           onmouseout="this.style.transform='scale(1)'">
                                            <i class="bi bi-envelope-fill"></i>
                                        </a>
                                        <a href="#" class="text-white d-inline-block mx-2" 
                                           style="font-size: 1.8rem; transition: transform 0.3s;" 
                                           onmouseover="this.style.transform='scale(1.2)'" 
                                           onmouseout="this.style.transform='scale(1)'">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                        <a href="tel:+880XXXXXXXXX" class="text-white d-inline-block mx-2" 
                                           style="font-size: 1.8rem; transition: transform 0.3s;" 
                                           onmouseover="this.style.transform='scale(1.2)'" 
                                           onmouseout="this.style.transform='scale(1)'">
                                            <i class="bi bi-telephone-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="leader-content" style="padding: 3rem 2.5rem;">
                                <div class="mb-4">
                                    <span class="badge px-3 py-2" 
                                          style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                                 font-size: 0.75rem; letter-spacing: 1px; font-weight: 600;">
                                        MANAGING DIRECTOR
                                    </span>
                                </div>
                                <h3 class="mb-2" style="color: var(--primary-navy); font-size: 2rem; font-weight: 700;">
                                    Md. Abdul Hannan
                                </h3>
                                <p class="position mb-4" style="color: var(--primary-red); font-size: 1.1rem; font-weight: 600;">
                                    Managing Director
                                </p>
                                <p class="bio mb-4" style="line-height: 1.9; color: #495057; font-size: 1.05rem;">
                                    With over <strong style="color: var(--primary-navy);">15 years of expertise</strong> in logistics and international trade, 
                                    Md. Abdul Hannan leads our strategic vision and oversees all operations with a commitment to excellence and innovation. 
                                    His deep understanding of freight forwarding, supply chain management, and international commerce has been 
                                    instrumental in positioning <strong style="color: var(--primary-red);">Farhan Logistics International Ltd.</strong> 
                                    as a trusted and reliable partner for businesses throughout Bangladesh and beyond.
                                </p>
                                <p class="bio mb-4" style="line-height: 1.9; color: #495057; font-size: 1.05rem;">
                                    Under his leadership, the company has grown to serve major international markets including USA, UK, Australia, 
                                    Canada, Europe, Africa, Middle-East, and Asia, specializing in RMG exports, handicrafts, and agro products.
                                </p>
                                
                                <div class="leader-details mt-4 pt-4" style="border-top: 2px solid #f0f0f0;">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="contact-item d-flex align-items-center">
                                                <div class="icon-box me-3" 
                                                     style="width: 45px; height: 45px; background: rgba(236, 32, 37, 0.1); 
                                                            border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-envelope-fill" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                                </div>
                                                <div>
                                                    <small style="color: #6c757d; font-size: 0.85rem; display: block; margin-bottom: 2px;">Email</small>
                                                    <a href="mailto:hannan@farhancargobd.com" 
                                                       style="color: var(--primary-navy); font-weight: 600; text-decoration: none; font-size: 1rem;">
                                                        hannan@farhancargobd.com
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-item d-flex align-items-center">
                                                <div class="icon-box me-3" 
                                                     style="width: 45px; height: 45px; background: rgba(47, 51, 141, 0.1); 
                                                            border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="bi bi-telephone-fill" style="color: var(--primary-navy); font-size: 1.2rem;"></i>
                                                </div>
                                                <div>
                                                    <small style="color: #6c757d; font-size: 0.85rem; display: block; margin-bottom: 2px;">Phone</small>
                                                    <a href="tel:+880XXXXXXXXX" 
                                                       style="color: var(--primary-navy); font-weight: 600; text-decoration: none; font-size: 1rem;">
                                                        +880 1844-167431
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Operations Manager Section -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 order-md-2" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=85" 
                         alt="Operations Manager" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 450px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute bottom-0 start-0 m-3 p-3" 
                         style="background: linear-gradient(135deg, rgba(236, 32, 37, 0.95), rgba(236, 32, 37, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 12px; box-shadow: 0 8px 32px rgba(236,32,37,0.4);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div>
                            <h5 class="mb-0 text-white" style="font-weight: 700; font-size: 1.1rem;">Global Excellence</h5>
                            <small class="text-white" style="font-weight: 600; opacity: 0.95;">Freight Forwarding</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 order-md-1 ps-md-4" data-aos="fade-right">
                <div class="mb-4">
                    <span class="badge text-white px-3 py-2" 
                          style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                 font-size: 0.75rem; letter-spacing: 1px; font-weight: 600;">
                        OPERATIONS MANAGEMENT
                    </span>
                </div>
                <h2 class="mb-4" style="font-size: 2.3rem; font-weight: 700; color: var(--primary-navy);">
                    Operations Manager<br><span style="color: var(--primary-red);">(Export, Import & Sales)</span>
                </h2>
                <p class="lead mb-4" style="color: #495057; font-size: 1.15rem; line-height: 1.9;">
                    Orchestrating seamless supply chain excellence across international borders with strategic vision and operational precision
                </p>
                <p class="mb-4" style="line-height: 1.9; color: #495057; font-size: 1.05rem;">
                    Our Operations Manager drives <strong style="color: var(--primary-navy);">global freight forwarding excellence</strong> through meticulous management 
                    of export and import operations. With comprehensive oversight of sales initiatives and logistics coordination, they ensure 
                    every shipment meets our stringent quality standards while maximizing customer satisfaction and operational efficiency.
                </p>
                <p class="mb-4" style="line-height: 1.9; color: #495057; font-size: 1.05rem;">
                    Specializing in <strong style="color: var(--primary-red);">FCL and LCL consolidation</strong>, documentation excellence, and customs compliance, 
                    this pivotal role ensures that Farhan Logistics delivers reliable, cost-effective solutions across major international markets 
                    including Asia, Europe, Middle East, Americas, and Africa.
                </p>
                <div class="mt-4">
                    <a href="/services" class="btn btn-primary-custom btn-lg">
                        <i class="bi bi-arrow-right-circle me-2"></i>Explore Operations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Employees Section -->
<section class="py-100">
    <div class="container">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    OUR TEAM
                </span>
            </div>
            <h2 class="mb-3" style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">
                Talented Professionals Driving Excellence
            </h2>
            <p class="mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; color: #495057;">
                Dedicated team members working collaboratively to deliver exceptional logistics solutions worldwide
            </p>
        </div>

        <div class="row g-4 align-items-center">
            <!-- Individual Profile -->
            <div class="col-lg-5 col-md-6" data-aos="fade-right">
                <div class="position-relative overflow-hidden rounded-3" style="box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12); border-radius: 20px !important;">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&q=85" 
                         alt="Team Member" 
                         class="img-fluid" 
                         style="height: 450px; width: 100%; object-fit: cover; transition: transform 0.4s ease;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <!-- Overlay -->
                    <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 0%, rgba(47, 51, 141, 0.8) 100%); display: flex; align-items: flex-end; padding: 30px;">
                        <div>
                            <h4 class="text-white mb-1" style="font-weight: 700; font-size: 1.4rem;">Professional Excellence</h4>
                            <p class="text-white mb-0" style="opacity: 0.95; font-size: 0.95rem;">Dedicated to Freight Forwarding Excellence</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Photo -->
            <div class="col-lg-5 col-md-6 offset-lg-1" data-aos="fade-left">
                <div class="position-relative overflow-hidden rounded-3" style="box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12); border-radius: 20px !important;">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&q=85" 
                         alt="Team Group" 
                         class="img-fluid" 
                         style="height: 450px; width: 100%; object-fit: cover; transition: transform 0.4s ease;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <!-- Overlay -->
                    <div style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 0%, rgba(236, 32, 37, 0.8) 100%); display: flex; align-items: flex-end; padding: 30px;">
                        <div>
                            <h4 class="text-white mb-1" style="font-weight: 700; font-size: 1.4rem;">Collaborative Team</h4>
                            <p class="text-white mb-0" style="opacity: 0.95; font-size: 0.95rem;">Working Together for Global Success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Highlights -->
        <div class="row g-4 mt-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4 rounded-3" style="background: linear-gradient(135deg, rgba(236, 32, 37, 0.05), rgba(47, 51, 141, 0.08)); border-left: 4px solid var(--primary-red);">
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">
                        <i class="bi bi-people-fill me-2" style="color: var(--primary-red);"></i>Expert Team
                    </h5>
                    <p class="mb-0" style="color: #495057; line-height: 1.8;">
                        Professionals with deep expertise in freight forwarding, customs compliance, supply chain management, and international logistics
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-3" style="background: linear-gradient(135deg, rgba(47, 51, 141, 0.08), rgba(236, 32, 37, 0.05)); border-left: 4px solid var(--primary-navy);">
                    <h5 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">
                        <i class="bi bi-globe-americas me-2" style="color: var(--primary-red);"></i>Global Network
                    </h5>
                    <p class="mb-0" style="color: #495057; line-height: 1.8;">
                        Connected with international partners, carriers, and customs agents across all major markets ensuring seamless logistics operations
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Highlights -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.12), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.03), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 50%; right: 15%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(236, 32, 37, 0.08), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    WHY CHOOSE US
                </span>
            </div>
            <h2 class="text-white mb-3" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                Key Highlights That Set Us Apart
            </h2>
            <p class="text-white mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                Delivering exceptional logistics services with proven expertise, global reach, and unwavering commitment to your business success
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Highlight 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-calendar-check text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Since 2016</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            9+ years of proven excellence in logistics and freight forwarding industry with consistent service quality
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Highlight 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-globe-americas text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Global Reach</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Serving USA, UK, Australia, Canada, Europe, Africa, Middle-East, and Asia with comprehensive logistics solutions
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Highlight 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-boxes text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">RMG Specialists</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Expert handling of Ready-Made Garments, handicrafts, and agro products with specialized care and compliance
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Highlight 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-people-fill text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Nominated Buyers</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Trusted by nominated buyers from major international markets worldwide with proven track record
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Speed & Precision Section -->
<section class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="badge bg-danger text-white px-3 py-2 mb-3" style="font-size: 0.85rem; letter-spacing: 1px;">
                        OUR STRENGTH
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Speed & Precision <br>in Every Shipment
                    </h2>
                    <p class="lead mb-4" style="color: #6c757d; line-height: 1.8; font-size: 1.15rem;">
                        At <strong style="color: var(--primary-navy);">Farhan Logistics International Ltd.</strong>, we 
                        prioritize speed and precision to deliver a seamless shipment experience. Our proactive approach 
                        includes priority carrier bookings, expertly prepared customs documentation, and real-time 
                        cargo tracking, supported by a dedicated operations team to ensure your goods move 
                        swiftly from pickup to final delivery without any delays.
                    </p>
                    <p class="mb-4" style="color: #6c757d; line-height: 1.8; font-size: 1.05rem;">
                        Leveraging strong partnerships with leading airlines and global shipping lines, we optimize 
                        scheduling and minimize port congestion, enabling us to handle time-sensitive 
                        consignments with utmost accuracy. Trust us to deliver your shipments exactly when and where 
                        they are needed, <strong style="color: var(--primary-red);">every time</strong>.
                    </p>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3" style="width: 60px; height: 60px; background: var(--primary-red); border-radius: 50%; 
                                     display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-lightning-charge-fill text-white" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">Priority</h5>
                                    <small style="color: #6c757d;">Carrier Bookings</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3" style="width: 60px; height: 60px; background: var(--primary-red); border-radius: 50%; 
                                     display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-radar text-white" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">Real-Time</h5>
                                    <small style="color: #6c757d;">Cargo Tracking</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3" style="width: 60px; height: 60px; background: var(--primary-red); border-radius: 50%; 
                                     display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-file-earmark-check-fill text-white" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">Expert</h5>
                                    <small style="color: #6c757d;">Documentation</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3" style="width: 60px; height: 60px; background: var(--primary-red); border-radius: 50%; 
                                     display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-people-fill text-white" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">Dedicated</h5>
                                    <small style="color: #6c757d;">Operations Team</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&q=90" 
                         alt="Speed and Precision" class="img-fluid rounded shadow-lg" 
                         style="height: 550px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    
                    <!-- Floating stat card -->
                    <div class="position-absolute bottom-0 start-0 m-4 p-4 bg-white rounded shadow-lg" 
                         style="max-width: 250px;" data-aos="zoom-in" data-aos-delay="300">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-clock-history text-danger me-2" style="font-size: 2rem;"></i>
                            <div>
                                <h3 class="mb-0" style="color: var(--primary-navy); font-weight: 700;">99.8%</h3>
                                <small style="color: #6c757d;">On-Time Delivery</small>
                            </div>
                        </div>
                        <p class="mb-0 small" style="color: #6c757d;">
                            Trusted by leading brands worldwide
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comprehensive Services -->
<section class="py-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=85" alt="Our Services" class="img-fluid rounded shadow-lg" 
                     style="height: 450px; width: 100%; object-fit: cover;">
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="pe-lg-4">
                    <h2 class="mb-4">Comprehensive Logistics Solutions</h2>
                    <p class="lead mb-4" style="color: var(--primary-red);">
                        End-to-End Services Backed by Global Network
                    </p>
                    
                    <div class="service-list">
                        <div class="service-list-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Air & Sea Freight</h5>
                                <p>FCL and LCL shipments with competitive rates and reliable scheduling</p>
                            </div>
                        </div>
                        
                        <div class="service-list-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Customs Clearance</h5>
                                <p>Expert customs brokerage and compliance management</p>
                            </div>
                        </div>
                        
                        <div class="service-list-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Commercial Documentation</h5>
                                <p>Complete documentation support for international trade</p>
                            </div>
                        </div>
                        
                        <div class="service-list-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Warehousing & Local Delivery</h5>
                                <p>Secure storage facilities and efficient last-mile delivery</p>
                            </div>
                        </div>
                        
                        <div class="service-list-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div>
                                <h5>Global Agent Network</h5>
                                <p>Reliable partnerships ensuring seamless international operations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Commitment -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="p-5 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); 
                            border: 2px solid rgba(255,255,255,0.2); box-shadow: 0 12px 48px rgba(0,0,0,0.3);">
                    <div class="text-center mb-4">
                        <div class="mb-4 d-inline-flex align-items-center justify-content-center" 
                             style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                    border-radius: 50%; box-shadow: 0 15px 50px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-award-fill text-white" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700; text-shadow: 0 2px 15px rgba(0,0,0,0.2);">
                            Our Commitment to Excellence
                        </h3>
                    </div>
                    <p class="text-white mb-0 text-center" 
                       style="font-size: 1.2rem; line-height: 2; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2); max-width: 900px; margin: 0 auto;">
                        At Farhan Logistics, we are committed to maintaining <strong style="color: var(--primary-red); text-shadow: 0 0 10px rgba(236, 32, 37, 0.5);">high standards of transparency</strong>, 
                        <strong style="color: var(--primary-red); text-shadow: 0 0 10px rgba(236, 32, 37, 0.5);">timely delivery</strong>, and <strong style="color: var(--primary-red); text-shadow: 0 0 10px rgba(236, 32, 37, 0.5);">customer satisfaction</strong>. 
                        Our management strives to build long-term partnerships by offering <strong style="color: var(--primary-red); text-shadow: 0 0 10px rgba(236, 32, 37, 0.5);">tailored logistics solutions</strong> 
                        based on each client's unique needs. We believe in creating value through reliable service, ethical practices, and continuous improvement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title mb-60" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block; color: white;">
                    OUR PURPOSE
                </span>
            </div>
            <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Mission & Vision</h2>
            <p style="font-size: 1.15rem; color: #6c757d;">Guiding principles that drive our organization forward</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-5 bg-white rounded-3 shadow-lg" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease; position: relative; overflow: hidden;"
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-navy)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-absolute top-0 end-0 m-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(47, 51, 141, 0.05), rgba(236, 32, 37, 0.05)); border-radius: 50%;"></div>
                    <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47, 51, 141, 0.3);">
                        <i class="bi bi-bullseye text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h3 class="mb-4" style="color: var(--primary-navy); font-size: 2rem; font-weight: 700;">Our Mission</h3>
                    <p style="line-height: 1.9; color: #495057; font-size: 1.05rem; margin-bottom: 1.25rem;">
                        To provide world-class logistics solutions that empower businesses to thrive in the global 
                        marketplace. We are committed to delivering exceptional service through innovation, reliability, 
                        and sustainable practices while maintaining the highest standards of safety and efficiency.
                    </p>
                    <p class="mb-0" style="line-height: 1.9; color: #495057; font-size: 1.05rem;">
                        Our mission is to be the logistics partner of choice, creating value for our clients through 
                        seamless supply chain management and unwavering dedication to excellence.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-5 bg-white rounded-3 shadow-lg" 
                     style="border: 2px solid rgba(236, 32, 37, 0.1); transition: all 0.4s ease; position: relative; overflow: hidden;"
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 50px rgba(236, 32, 37, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(236, 32, 37, 0.1)';">
                    <div class="position-absolute top-0 end-0 m-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(236, 32, 37, 0.05), rgba(47, 51, 141, 0.05)); border-radius: 50%;"></div>
                    <div class="mb-4" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.3);">
                        <i class="bi bi-eye text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h3 class="mb-4" style="color: var(--primary-navy); font-size: 2rem; font-weight: 700;">Our Vision</h3>
                    <p style="line-height: 1.9; color: #495057; font-size: 1.05rem; margin-bottom: 1.25rem;">
                        To be recognized as the leading logistics provider in Bangladesh and beyond, setting industry 
                        standards for innovation, sustainability, and customer satisfaction. We envision a future where 
                        international trade flows seamlessly, enabled by cutting-edge technology and human expertise.
                    </p>
                    <p class="mb-0" style="line-height: 1.9; color: #495057; font-size: 1.05rem;">
                        We strive to build lasting partnerships, contribute to economic growth, and create sustainable 
                        logistics solutions that benefit businesses, communities, and the environment.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.12), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.03), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 50%; right: 15%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(236, 32, 37, 0.08), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    OUR FOUNDATION
                </span>
            </div>
            <h2 class="text-white mb-3" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                Core Values That Guide Us
            </h2>
            <p class="text-white mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                Principles that guide every decision and action we take to ensure excellence and integrity in all our operations
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-award text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Excellence</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            We pursue excellence in every shipment, striving for perfection in service delivery and customer satisfaction with continuous improvement
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-shield-check text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Integrity</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Honesty, transparency, and ethical business practices are the foundation of our relationships with clients and partners worldwide
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-clock-history text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Reliability</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Timely delivery and consistent service quality that our clients can depend on, every single time, without compromise
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-4" style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 24px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4); position: relative; overflow: hidden;">
                            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, transparent 0%, rgba(255,255,255,0.1) 100%);"></div>
                            <i class="bi bi-people text-white" style="font-size: 3rem; position: relative; z-index: 1;"></i>
                        </div>
                        <h4 class="mb-3 text-white" style="font-weight: 700; font-size: 1.35rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Partnership</h4>
                        <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                            Building long-term relationships through collaboration, trust, and mutual success with every client and partner
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-100 cta-section" style="background: linear-gradient(135deg, var(--primary-navy) 0%, var(--primary-red) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <h2 class="text-white mb-4">Ready to Optimize Your Supply Chain?</h2>
                <p class="text-white mb-5" style="font-size: 1.2rem;">
                    Join numerous satisfied clients who trust Farhan Logistics for their international freight needs. 
                    Let's discuss how we can support your business growth.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/quote" class="btn btn-light btn-lg px-5">
                        <i class="bi bi-file-text me-2"></i>Request a Quote
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg px-5">
                        <i class="bi bi-telephone me-2"></i>Contact Us Today
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
