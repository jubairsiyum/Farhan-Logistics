<?php 
$pageTitle = 'Industry Solutions';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 70vh; min-height: 550px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1605745341112-85968b19335b?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 40%; right: 10%; width: 250px; height: 250px; background: radial-gradient(circle, rgba(236, 32, 37, 0.1), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block; color: white;">INDUSTRY EXPERTISE</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.8rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: white;">
                        Industry-Specific Solutions
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.3rem; line-height: 1.9; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 900px; margin-left: auto; margin-right: auto; color: white;">
                        Tailored logistics solutions designed for the unique demands of your industry. Combining deep sector expertise with global capabilities to optimize your supply chain performance.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2.5rem;">
                        <a href="#industries" class="btn btn-primary-custom btn-lg me-3 px-5">
                            <i class="bi bi-arrow-down-circle me-2"></i>Explore Solutions
                        </a>
                        <a href="/quote" class="btn btn-outline-light btn-lg px-5">
                            <i class="bi bi-file-text me-2"></i>Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Overview -->
<section id="industries" class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title text-center mb-60" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    SPECIALIZED EXPERTISE
                </span>
            </div>
            <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Industries We Serve</h2>
            <p style="font-size: 1.15rem; color: #6c757d; max-width: 850px; margin: 0 auto;">Deep sector knowledge combined with comprehensive global logistics capabilities</p>
        </div>
        
        <div class="row g-4">
            <!-- RMG & Textile -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 bg-white rounded-3 shadow-lg overflow-hidden" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-relative" style="height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1620799140188-3b2a02fd9a77?w=800&q=80" 
                             alt="RMG & Textile" 
                             class="w-100 h-100" 
                             style="object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                                <i class="bi bi-scissors text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">RMG & Textile</h4>
                        <p class="mb-3" style="color: #495057; line-height: 1.8; font-size: 0.95rem;">
                            Specialized solutions for ready-made garments and textile shipments with efficient bulk handling, on-hanger services, and compliance with international trade regulations.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Garment-on-Hanger (GOH)</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Flat Pack Shipping</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Quality Inspection Support</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Leather & Footwear -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 bg-white rounded-3 shadow-lg overflow-hidden" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-relative" style="height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=800&q=80" 
                             alt="Leather & Footwear" 
                             class="w-100 h-100" 
                             style="object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47, 51, 141, 0.4);">
                                <i class="bi bi-handbag text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Leather & Footwear</h4>
                        <p class="mb-3" style="color: #495057; line-height: 1.8; font-size: 0.95rem;">
                            Temperature-controlled shipping and expert handling for premium leather goods, footwear collections, and fashion accessories with quality preservation throughout transit.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Climate Control</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Premium Handling</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Fashion Logistics</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Electronics & Technology -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 bg-white rounded-3 shadow-lg overflow-hidden" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-relative" style="height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80" 
                             alt="Electronics & Technology" 
                             class="w-100 h-100" 
                             style="object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                                <i class="bi bi-cpu text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Electronics & Technology</h4>
                        <p class="mb-3" style="color: #495057; line-height: 1.8; font-size: 0.95rem;">
                            Secure transportation for high-value electronics, sensitive components, and tech products with anti-static packaging, climate control, and comprehensive insurance coverage.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> ESD Protection</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> High-Value Insurance</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Secure Handling</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Agriculture & Food -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="h-100 bg-white rounded-3 shadow-lg overflow-hidden" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-relative" style="height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=800&q=80" 
                             alt="Agriculture & Food" 
                             class="w-100 h-100" 
                             style="object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47, 51, 141, 0.4);">
                                <i class="bi bi-tree text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Agriculture & Food</h4>
                        <p class="mb-3" style="color: #495057; line-height: 1.8; font-size: 0.95rem;">
                            Specialized handling for agricultural products, perishables, and food items with refrigerated containers, rapid transit, and full compliance with phytosanitary regulations.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Reefer Containers</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Rapid Transit</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Phytosanitary Compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- FMCG & Retail -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="h-100 bg-white rounded-3 shadow-lg overflow-hidden" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-relative" style="height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?w=800&q=80" 
                             alt="FMCG & Retail" 
                             class="w-100 h-100" 
                             style="object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                                <i class="bi bi-cart text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">FMCG & Retail</h4>
                        <p class="mb-3" style="color: #495057; line-height: 1.8; font-size: 0.95rem;">
                            Fast-moving consumer goods distribution with time-sensitive delivery, inventory management, and retail supply chain solutions ensuring products reach shelves fresh and on-time.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> JIT Delivery</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Inventory Management</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Retail Distribution</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Raw Commodities -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="h-100 bg-white rounded-3 shadow-lg overflow-hidden" 
                     style="border: 2px solid rgba(47, 51, 141, 0.1); transition: all 0.4s ease;"
                     onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 50px rgba(47, 51, 141, 0.15)'; this.style.borderColor='var(--primary-red)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)'; this.style.borderColor='rgba(47, 51, 141, 0.1)';">
                    <div class="position-relative" style="height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?w=800&q=80" 
                             alt="Raw Commodities" 
                             class="w-100 h-100" 
                             style="object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);"></div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47, 51, 141, 0.4);">
                                <i class="bi bi-box-seam text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Raw Commodities</h4>
                        <p class="mb-3" style="color: #495057; line-height: 1.8; font-size: 0.95rem;">
                            Bulk cargo solutions for raw materials, metals, minerals, and industrial commodities with heavy-lift capabilities, specialized equipment, and efficient loading/unloading operations.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Bulk Cargo</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Heavy Lift</li>
                            <li class="mb-2" style="color: #6c757d; font-size: 0.9rem;"><i class="bi bi-check2-circle me-2" style="color: var(--primary-red);"></i> Industrial Cargo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Import/Export Solutions -->
<section class="py-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-5">
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-red), #c91d22); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3);">
                            TRADE FACILITATION
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Import & Export Solutions
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Comprehensive Trade Facilitation Services
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        Whether you're importing raw materials, exporting finished goods, or managing international 
                        trade operations, we provide end-to-end solutions to streamline your global commerce.
                    </p>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start p-3 rounded-3" 
                                 style="background: rgba(47, 51, 141, 0.05); border-left: 4px solid var(--primary-navy);">
                                <div class="me-3" style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="bi bi-download text-white" style="font-size: 1.5rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2" style="color: var(--primary-navy); font-weight: 700;">Import Services</h5>
                                    <p class="mb-0" style="color: #6c757d; font-size: 0.95rem;">Complete import logistics from origin to final destination with customs clearance and documentation support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start p-3 rounded-3" 
                                 style="background: rgba(236, 32, 37, 0.05); border-left: 4px solid var(--primary-red);">
                                <div class="me-3" style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary-red), #c91d22); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="bi bi-upload text-white" style="font-size: 1.5rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2" style="color: var(--primary-navy); font-weight: 700;">Export Services</h5>
                                    <p class="mb-0" style="color: #6c757d; font-size: 0.95rem;">Export documentation, packaging, and shipping to global markets with compliance expertise</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start p-3 rounded-3" 
                                 style="background: rgba(47, 51, 141, 0.05); border-left: 4px solid var(--primary-navy);">
                                <div class="me-3" style="width: 50px; height: 50px; background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="bi bi-arrow-left-right text-white" style="font-size: 1.5rem;"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2" style="color: var(--primary-navy); font-weight: 700;">Trade Compliance</h5>
                                    <p class="mb-0" style="color: #6c757d; font-size: 0.95rem;">Expert guidance on import/export regulations and international trade agreements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?w=800&q=90" 
                         alt="Import Export" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 550px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating stat card -->
                    <div class="position-absolute bottom-0 end-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.15); max-width: 200px;"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-globe-americas mb-2" style="font-size: 2.5rem; color: var(--primary-red);"></i>
                            <h4 class="mb-1" style="color: var(--primary-navy); font-weight: 700;">100+</h4>
                            <small style="color: #6c757d; font-weight: 600; display: block;">Countries Served</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Cargo -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="mb-3">
                        <span class="badge text-white px-3 py-2" 
                              style="background: linear-gradient(135deg, var(--primary-navy), rgba(47, 51, 141, 0.9)); 
                                     font-size: 0.85rem; letter-spacing: 1px; font-weight: 600; 
                                     box-shadow: 0 4px 15px rgba(47, 51, 141, 0.3);">
                            SPECIALIZED HANDLING
                        </span>
                    </div>
                    <h2 class="mb-4" style="font-size: 2.5rem; font-weight: 700; color: var(--primary-navy);">
                        Project Cargo Solutions
                    </h2>
                    <p class="lead mb-4" style="color: var(--primary-red); font-weight: 600; font-size: 1.2rem;">
                        Specialized Handling for Complex Projects
                    </p>
                    <p class="mb-4" style="line-height: 1.8; color: #495057; font-size: 1.05rem;">
                        From heavy machinery to complete industrial plants, our project cargo division handles 
                        oversized and complex shipments with precision planning and execution.
                    </p>
                    
                    <h5 class="mt-4 mb-3" style="color: var(--primary-navy); font-weight: 700;">Project Cargo Services:</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center p-2 rounded" style="background: rgba(47, 51, 141, 0.05);">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                <span style="color: #495057; font-size: 0.95rem; font-weight: 500;">Route Survey</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center p-2 rounded" style="background: rgba(47, 51, 141, 0.05);">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                <span style="color: #495057; font-size: 0.95rem; font-weight: 500;">Heavy Lift</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center p-2 rounded" style="background: rgba(47, 51, 141, 0.05);">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                <span style="color: #495057; font-size: 0.95rem; font-weight: 500;">Over-Dimensional</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center p-2 rounded" style="background: rgba(47, 51, 141, 0.05);">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                <span style="color: #495057; font-size: 0.95rem; font-weight: 500;">Multi-Modal</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center p-2 rounded" style="background: rgba(47, 51, 141, 0.05);">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                <span style="color: #495057; font-size: 0.95rem; font-weight: 500;">Installation Support</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center p-2 rounded" style="background: rgba(47, 51, 141, 0.05);">
                                <i class="bi bi-check-circle-fill me-2" style="color: var(--primary-red); font-size: 1.2rem;"></i>
                                <span style="color: #495057; font-size: 0.95rem; font-weight: 500;">Turnkey Solutions</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="/contact" class="btn btn-primary-custom btn-lg mt-4">
                        <i class="bi bi-chat-dots me-2"></i>Discuss Your Project
                    </a>
                </div>
            </div>
            
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=90" 
                         alt="Project Cargo" 
                         class="img-fluid rounded shadow-lg" 
                         style="height: 550px; width: 100%; object-fit: cover; border-radius: 15px !important;">
                    <!-- Floating badge -->
                    <div class="position-absolute top-0 end-0 m-4 p-4" 
                         style="background: linear-gradient(135deg, rgba(236, 32, 37, 0.95), rgba(201, 29, 34, 0.95)); 
                                backdrop-filter: blur(10px); border-radius: 15px; box-shadow: 0 8px 32px rgba(0,0,0,0.3);"
                         data-aos="zoom-in" data-aos-delay="300">
                        <div class="text-center">
                            <i class="bi bi-tools text-white mb-2" style="font-size: 2.5rem;"></i>
                            <h5 class="mb-0 text-white" style="font-weight: 700;">Custom</h5>
                            <small class="text-white" style="font-weight: 600;">Engineering</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.12), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.03), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 50%; right: 15%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(236, 32, 37, 0.08), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    OUR ADVANTAGE
                </span>
            </div>
            <h2 class="text-white mb-3" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                Industry Expertise Benefits
            </h2>
            <p class="text-white mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                What you gain from our specialized approach and industry-specific solutions
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3 text-center" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="mb-4" style="width: 90px; height: 90px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4);">
                        <i class="bi bi-people-fill text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h5 class="mb-3 text-white" style="font-weight: 700; font-size: 1.25rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Industry Specialists</h5>
                    <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        Dedicated teams with deep knowledge of your sector's unique requirements and challenges
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3 text-center" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="mb-4" style="width: 90px; height: 90px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4);">
                        <i class="bi bi-tools text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h5 class="mb-3 text-white" style="font-weight: 700; font-size: 1.25rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Custom Solutions</h5>
                    <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        Tailored logistics strategies designed specifically for your unique business needs
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3 text-center" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="mb-4" style="width: 90px; height: 90px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4);">
                        <i class="bi bi-clipboard-data text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h5 class="mb-3 text-white" style="font-weight: 700; font-size: 1.25rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Compliance Expertise</h5>
                    <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        Deep understanding of industry-specific regulations, standards, and compliance requirements
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="h-100 p-4 rounded-3 text-center" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="mb-4" style="width: 90px; height: 90px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 12px 35px rgba(236, 32, 37, 0.4);">
                        <i class="bi bi-star-fill text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h5 class="mb-3 text-white" style="font-weight: 700; font-size: 1.25rem; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">Best Practices</h5>
                    <p class="mb-0 text-white" style="font-size: 0.95rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        Industry-leading processes refined through years of hands-on experience and expertise
                    </p>
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
            <div class="col-lg-9 text-center" data-aos="zoom-in">
                <div class="mb-4">
                    <i class="bi bi-briefcase-fill text-white" style="font-size: 4rem; opacity: 0.9;"></i>
                </div>
                <h2 class="text-white mb-4" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                    Find the Perfect Solution for Your Industry
                </h2>
                <p class="text-white mb-5" style="font-size: 1.2rem; line-height: 1.9; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2); max-width: 750px; margin-left: auto; margin-right: auto;">
                    Let our industry specialists design a custom logistics strategy tailored to your business requirements. 
                    Partner with us for seamless, efficient, and reliable supply chain solutions.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/quote" class="btn btn-light btn-lg px-5" 
                       style="font-weight: 600; box-shadow: 0 8px 25px rgba(0,0,0,0.2);" 
                       onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 35px rgba(0,0,0,0.3)';" 
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.2)';">
                        <i class="bi bi-file-text me-2"></i>Get Industry Quote
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg px-5" 
                       style="font-weight: 600; border-width: 2px;" 
                       onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(-3px)';" 
                       onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)';">
                        <i class="bi bi-chat-dots me-2"></i>Consult an Expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
