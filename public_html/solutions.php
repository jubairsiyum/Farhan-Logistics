<?php 
$pageTitle = 'Industry Solutions';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 60vh; min-height: 500px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1605745341112-85968b19335b?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block;">INDUSTRY EXPERTISE</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3);">Industry-Specific Solutions</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 850px;">
                        Tailored logistics solutions designed for the unique demands of your industry. Combining deep sector expertise with global capabilities to optimize your supply chain.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
                        <a href="#solutions-overview" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-arrow-down-circle me-2"></i>Explore Solutions
                        </a>
                        <a href="/quote" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-file-text me-2"></i>Get Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solutions Overview -->
<section id="solutions-overview" class="py-100">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Specialized Logistics for Every Industry</h2>
            <p>Deep industry expertise combined with comprehensive global capabilities</p>
        </div>
        
        <div class="row g-4">
            <!-- Automotive -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-custom">
                    <img src="assets/images/industry-automotive.jpg" alt="Automotive Industry" 
                         style="background: linear-gradient(135deg, #0B1C2D 80%, #F7941D 100%);">
                    <div class="card-body">
                        <h5><i class="bi bi-car-front text-orange me-2"></i>Automotive</h5>
                        <p>
                            Specialized handling of vehicles, spare parts, and automotive components with RoRo and 
                            container shipping options. Just-in-time delivery to support production lines.
                        </p>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-chevron-right text-orange"></i> Vehicle Imports & Exports</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Auto Parts Distribution</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> JIT Supply Chain</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Pharmaceuticals -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom">
                    <img src="assets/images/industry-pharma.jpg" alt="Pharmaceutical Industry" 
                         style="background: linear-gradient(135deg, #0B1C2D 80%, #F7941D 100%);">
                    <div class="card-body">
                        <h5><i class="bi bi-capsule text-orange me-2"></i>Pharmaceuticals</h5>
                        <p>
                            Temperature-controlled logistics for medicines, vaccines, and medical devices. GDP-compliant 
                            handling with validated cold chain solutions.
                        </p>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-chevron-right text-orange"></i> Cold Chain Management</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Regulatory Compliance</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Medical Equipment</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Electronics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom">
                    <img src="assets/images/industry-electronics.jpg" alt="Electronics Industry" 
                         style="background: linear-gradient(135deg, #0B1C2D 80%, #F7941D 100%);">
                    <div class="card-body">
                        <h5><i class="bi bi-cpu text-orange me-2"></i>Electronics & Technology</h5>
                        <p>
                            Secure handling of high-value electronics with ESD protection and climate-controlled 
                            storage. Fast delivery for time-sensitive technology products.
                        </p>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-chevron-right text-orange"></i> Consumer Electronics</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> IT Equipment</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> High-Value Cargo</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fashion & Retail -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom">
                    <img src="assets/images/industry-fashion.jpg" alt="Fashion & Retail" 
                         style="background: linear-gradient(135deg, #0B1C2D 80%, #F7941D 100%);">
                    <div class="card-body">
                        <h5><i class="bi bi-bag text-orange me-2"></i>Fashion & Retail</h5>
                        <p>
                            Flexible logistics solutions for fashion brands and retailers including seasonal inventory 
                            management, distribution, and e-commerce fulfillment.
                        </p>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-chevron-right text-orange"></i> Garment Handling</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Retail Distribution</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> E-commerce Logistics</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Oil & Gas -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom">
                    <img src="assets/images/industry-oil-gas.jpg" alt="Oil & Gas" 
                         style="background: linear-gradient(135deg, #0B1C2D 80%, #F7941D 100%);">
                    <div class="card-body">
                        <h5><i class="bi bi-droplet text-orange me-2"></i>Oil & Gas</h5>
                        <p>
                            Project cargo handling for oilfield equipment, machinery, and supplies. Specialized 
                            transport for oversized and hazardous materials.
                        </p>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-chevron-right text-orange"></i> Heavy Equipment</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Dangerous Goods</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Remote Locations</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Food & Beverage -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom">
                    <img src="assets/images/industry-food.jpg" alt="Food & Beverage" 
                         style="background: linear-gradient(135deg, #0B1C2D 80%, #F7941D 100%);">
                    <div class="card-body">
                        <h5><i class="bi bi-cup-hot text-orange me-2"></i>Food & Beverage</h5>
                        <p>
                            Temperature-controlled supply chain for perishable goods. Compliance with food safety 
                            regulations and HACCP standards.
                        </p>
                        <ul class="list-unstyled small">
                            <li><i class="bi bi-chevron-right text-orange"></i> Perishable Cargo</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Reefer Containers</li>
                            <li><i class="bi bi-chevron-right text-orange"></i> Food-Grade Standards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Import/Export Solutions -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="mb-4">Import & Export Solutions</h2>
                <p class="lead text-orange">Comprehensive Trade Facilitation Services</p>
                <p>
                    Whether you're importing raw materials, exporting finished goods, or managing international 
                    trade operations, we provide end-to-end solutions to streamline your global commerce.
                </p>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-download text-orange me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5>Import Services</h5>
                                <p class="small mb-0">Complete import logistics from origin to final destination with customs clearance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-upload text-orange me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5>Export Services</h5>
                                <p class="small mb-0">Export documentation, packaging, and shipping to global markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-arrow-left-right text-orange me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5>Trade Compliance</h5>
                                <p class="small mb-0">Expert guidance on import/export regulations and trade agreements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-file-text text-orange me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5>Documentation</h5>
                                <p class="small mb-0">Complete handling of bills of lading, certificates, and shipping docs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <img src="assets/images/import-export.jpg" alt="Import Export" class="img-fluid rounded shadow-lg"
                     style="background: linear-gradient(135deg, #0B1C2D 70%, #F7941D 100%); height: 500px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Project Cargo -->
<section class="py-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="ps-lg-5">
                    <h2 class="mb-4">Project Cargo Solutions</h2>
                    <p class="lead text-orange">Specialized Handling for Complex Projects</p>
                    <p>
                        From heavy machinery to complete industrial plants, our project cargo division handles 
                        oversized and complex shipments with precision planning and execution.
                    </p>
                    
                    <h5 class="mt-4 mb-3">Project Cargo Services:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Route Survey & Planning</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Heavy Lift Solutions</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Over-Dimensional Cargo</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Multi-Modal Transport</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> On-Site Installation Support</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-orange me-2"></i> Turnkey Solutions</li>
                    </ul>
                    
                    <a href="/contact" class="btn btn-primary-custom mt-4">Discuss Your Project</a>
                </div>
            </div>
            
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="assets/images/project-cargo.jpg" alt="Project Cargo" class="img-fluid rounded shadow-lg"
                     style="background: linear-gradient(135deg, #0B1C2D 70%, #F7941D 100%); height: 500px; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-100 bg-navy text-white">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2 class="text-white">Industry Expertise Benefits</h2>
            <p class="text-white opacity-75">What you gain from our specialized approach</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <i class="bi bi-people-fill" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Industry Specialists</h5>
                    <p class="opacity-75">Dedicated teams with deep knowledge of your sector's requirements.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <i class="bi bi-tools" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Custom Solutions</h5>
                    <p class="opacity-75">Tailored logistics strategies designed for your specific needs.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <i class="bi bi-clipboard-data" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Compliance Expertise</h5>
                    <p class="opacity-75">Deep understanding of industry-specific regulations and standards.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <i class="bi bi-star-fill" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Best Practices</h5>
                    <p class="opacity-75">Industry-leading processes refined through years of experience.</p>
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
                <h2>Find the Perfect Solution for Your Industry</h2>
                <p>Let our industry specialists design a custom logistics strategy for your business.</p>
                <div class="mt-4">
                    <a href="/quote" class="btn btn-primary-custom btn-lg me-3">Get Industry Quote</a>
                    <a href="/contact" class="btn btn-outline-custom btn-lg">Consult an Expert</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
