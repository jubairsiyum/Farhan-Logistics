<?php 
$pageTitle = 'Success Stories';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 70vh; min-height: 550px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 40%; right: 10%; width: 250px; height: 250px; background: radial-gradient(circle, rgba(236, 32, 37, 0.1), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite 1s;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <div class="hero-content">
                    <div class="mb-3">
                        <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">CLIENT SUCCESS STORIES</span>
                    </div>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.8rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: #ffffff;">
                        Delivering Results That Matter
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200" class="text-white" style="font-size: 1.3rem; line-height: 1.8; margin-top: 2rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 900px; margin-left: auto; margin-right: auto;">
                        Real stories of how we've transformed logistics challenges into competitive advantages for businesses across diverse industries worldwide.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2.5rem;">
                        <a href="#case-studies" class="btn btn-primary-custom btn-lg me-3 px-5">
                            <i class="bi bi-arrow-down-circle me-2"></i>View Case Studies
                        </a>
                        <a href="/quote" class="btn btn-outline-light btn-lg px-5">
                            <i class="bi bi-chat-dots me-2"></i>Start Your Success Story
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Metrics -->
<section id="case-studies" class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row g-4 mb-60">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.25);">
                        <i class="bi bi-trophy-fill text-white" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mb-2" style="color: var(--primary-navy); font-weight: 700; font-size: 2.5rem;">500+</h3>
                    <p class="text-muted mb-0" style="font-size: 1.05rem; font-weight: 500;">Successful Projects</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 8px 25px rgba(47, 51, 141, 0.25);">
                        <i class="bi bi-heart-fill text-white" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mb-2" style="color: var(--primary-navy); font-weight: 700; font-size: 2.5rem;">98%</h3>
                    <p class="text-muted mb-0" style="font-size: 1.05rem; font-weight: 500;">Client Satisfaction</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.25);">
                        <i class="bi bi-clock-history text-white" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mb-2" style="color: var(--primary-navy); font-weight: 700; font-size: 2.5rem;">35%</h3>
                    <p class="text-muted mb-0" style="font-size: 1.05rem; font-weight: 500;">Avg Time Reduction</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 8px 25px rgba(47, 51, 141, 0.25);">
                        <i class="bi bi-graph-up-arrow text-white" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="mb-2" style="color: var(--primary-navy); font-weight: 700; font-size: 2.5rem;">$15M+</h3>
                    <p class="text-muted mb-0" style="font-size: 1.05rem; font-weight: 500;">Client Cost Savings</p>
                </div>
            </div>
        </div>
        
        <div class="section-title text-center mb-60" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    FEATURED CASE STUDIES
                </span>
            </div>
            <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Client Success Highlights</h2>
            <p style="font-size: 1.15rem; max-width: 850px; margin: 0 auto; color: #6c757d; line-height: 1.8;">
                Discover how we've helped businesses overcome logistics challenges and achieve remarkable results
            </p>
        </div>
        
        <!-- Case Study Cards -->
        <div class="row g-4">
            <!-- Case Study 1: RMG Export Success -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;" 
                     onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.2)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="position-relative" style="height: 280px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1620799140188-3b2a02fd9a77?w=800&q=80" 
                             class="card-img-top" 
                             alt="RMG Export" 
                             style="height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(47,51,141,0.7), transparent);"></div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge" style="background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;">RMG & TEXTILE</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236,32,37,0.4);">
                                <i class="bi bi-scissors text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.4rem;">
                            Leading RMG Exporter Reduces Delivery Time by 40%
                        </h4>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Challenge:</strong> A major garment manufacturer struggled with delayed air shipments, affecting their just-in-time delivery commitments to European retailers.
                        </p>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Solution:</strong> We implemented dedicated GOH routing with optimized consolidation schedules and real-time tracking integration.
                        </p>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div class="px-3 py-2 rounded-3" style="background: rgba(236, 32, 37, 0.08); border-left: 3px solid var(--primary-red);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-red);">40%</div>
                                <div class="small text-muted">Faster Delivery</div>
                            </div>
                            <div class="px-3 py-2 rounded-3" style="background: rgba(47, 51, 141, 0.08); border-left: 3px solid var(--primary-navy);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-navy);">99.8%</div>
                                <div class="small text-muted">On-Time Rate</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                            <i class="bi bi-calendar-check me-2" style="color: var(--primary-red);"></i>
                            <small><strong>Impact:</strong> $2M annual cost savings</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Case Study 2: Electronics Manufacturing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;" 
                     onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.2)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="position-relative" style="height: 280px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800&q=80" 
                             class="card-img-top" 
                             alt="Electronics" 
                             style="height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(47,51,141,0.7), transparent);"></div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge" style="background: linear-gradient(135deg, var(--primary-navy), #1e2256); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;">ELECTRONICS</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47,51,141,0.4);">
                                <i class="bi bi-cpu text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.4rem;">
                            Tech Company Achieves Zero Damage Rate
                        </h4>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Challenge:</strong> An electronics manufacturer experienced 8% damage rate during international shipments of sensitive components.
                        </p>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Solution:</strong> Custom ESD-protected packaging, temperature-controlled transport, and enhanced insurance coverage.
                        </p>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div class="px-3 py-2 rounded-3" style="background: rgba(236, 32, 37, 0.08); border-left: 3px solid var(--primary-red);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-red);">0%</div>
                                <div class="small text-muted">Damage Rate</div>
                            </div>
                            <div class="px-3 py-2 rounded-3" style="background: rgba(47, 51, 141, 0.08); border-left: 3px solid var(--primary-navy);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-navy);">$1.2M</div>
                                <div class="small text-muted">Claims Saved</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                            <i class="bi bi-shield-check me-2" style="color: var(--primary-red);"></i>
                            <small><strong>Impact:</strong> Premium handling certification</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Case Study 3: Agricultural Exports -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;" 
                     onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.2)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="position-relative" style="height: 280px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=800&q=80" 
                             class="card-img-top" 
                             alt="Agriculture" 
                             style="height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(47,51,141,0.7), transparent);"></div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge" style="background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;">AGRICULTURE</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236,32,37,0.4);">
                                <i class="bi bi-tree text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.4rem;">
                            Fresh Produce Exporter Expands to 15 New Markets
                        </h4>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Challenge:</strong> A produce exporter wanted to expand globally but lacked expertise in phytosanitary compliance and reefer logistics.
                        </p>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Solution:</strong> End-to-end cold chain management with regulatory compliance support for each destination market.
                        </p>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div class="px-3 py-2 rounded-3" style="background: rgba(236, 32, 37, 0.08); border-left: 3px solid var(--primary-red);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-red);">15</div>
                                <div class="small text-muted">New Markets</div>
                            </div>
                            <div class="px-3 py-2 rounded-3" style="background: rgba(47, 51, 141, 0.08); border-left: 3px solid var(--primary-navy);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-navy);">300%</div>
                                <div class="small text-muted">Revenue Growth</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                            <i class="bi bi-thermometer-snow me-2" style="color: var(--primary-red);"></i>
                            <small><strong>Impact:</strong> 99.5% freshness retention</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Case Study 4: FMCG Distribution -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;" 
                     onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.2)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="position-relative" style="height: 280px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?w=800&q=80" 
                             class="card-img-top" 
                             alt="FMCG" 
                             style="height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(47,51,141,0.7), transparent);"></div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge" style="background: linear-gradient(135deg, var(--primary-navy), #1e2256); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;">FMCG & RETAIL</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47,51,141,0.4);">
                                <i class="bi bi-cart text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.4rem;">
                            Retail Chain Optimizes Inventory with JIT Logistics
                        </h4>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Challenge:</strong> A regional retail chain struggled with overstocking and stockout issues across 50+ locations.
                        </p>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Solution:</strong> Implemented just-in-time delivery system with real-time inventory tracking and predictive analytics.
                        </p>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div class="px-3 py-2 rounded-3" style="background: rgba(236, 32, 37, 0.08); border-left: 3px solid var(--primary-red);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-red);">50%</div>
                                <div class="small text-muted">Less Inventory</div>
                            </div>
                            <div class="px-3 py-2 rounded-3" style="background: rgba(47, 51, 141, 0.08); border-left: 3px solid var(--primary-navy);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-navy);">$5M</div>
                                <div class="small text-muted">Cost Reduction</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                            <i class="bi bi-graph-down-arrow me-2" style="color: var(--primary-red);"></i>
                            <small><strong>Impact:</strong> 95% stockout reduction</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Case Study 5: Project Cargo -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;" 
                     onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.2)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="position-relative" style="height: 280px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?w=800&q=80" 
                             class="card-img-top" 
                             alt="Project Cargo" 
                             style="height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(47,51,141,0.7), transparent);"></div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge" style="background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;">PROJECT CARGO</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(236,32,37,0.4);">
                                <i class="bi bi-tools text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.4rem;">
                            Power Plant Equipment Delivered 2 Weeks Early
                        </h4>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Challenge:</strong> Multi-modal transport of 180-ton turbines across 3 countries with tight installation deadline.
                        </p>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Solution:</strong> Custom route survey, specialized heavy-lift vessels, and coordinated road transport with permits.
                        </p>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div class="px-3 py-2 rounded-3" style="background: rgba(236, 32, 37, 0.08); border-left: 3px solid var(--primary-red);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-red);">-2wks</div>
                                <div class="small text-muted">Ahead Schedule</div>
                            </div>
                            <div class="px-3 py-2 rounded-3" style="background: rgba(47, 51, 141, 0.08); border-left: 3px solid var(--primary-navy);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-navy);">$3.5M</div>
                                <div class="small text-muted">Project Value</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                            <i class="bi bi-award me-2" style="color: var(--primary-red);"></i>
                            <small><strong>Impact:</strong> Engineering excellence award</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Case Study 6: E-commerce Fulfillment -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;" 
                     onmouseover="this.style.transform='translateY(-15px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.2)';" 
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="position-relative" style="height: 280px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1605745341112-85968b19335b?w=800&q=80" 
                             class="card-img-top" 
                             alt="E-commerce" 
                             style="height: 100%; object-fit: cover; transition: transform 0.4s ease;"
                             onmouseover="this.style.transform='scale(1.1)';"
                             onmouseout="this.style.transform='scale(1)';">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to top, rgba(47,51,141,0.7), transparent);"></div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge" style="background: linear-gradient(135deg, var(--primary-navy), #1e2256); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;">E-COMMERCE</span>
                        </div>
                        <div class="position-absolute bottom-0 start-0 m-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(47,51,141,0.4);">
                                <i class="bi bi-box-seam text-white" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.4rem;">
                            E-commerce Startup Scales to 10,000+ Orders/Day
                        </h4>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Challenge:</strong> Rapidly growing online retailer needed scalable warehousing and fulfillment infrastructure.
                        </p>
                        <p class="text-muted mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                            <strong>Solution:</strong> Dedicated warehousing with automated order processing and same-day dispatch capabilities.
                        </p>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <div class="px-3 py-2 rounded-3" style="background: rgba(236, 32, 37, 0.08); border-left: 3px solid var(--primary-red);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-red);">10K+</div>
                                <div class="small text-muted">Daily Orders</div>
                            </div>
                            <div class="px-3 py-2 rounded-3" style="background: rgba(47, 51, 141, 0.08); border-left: 3px solid var(--primary-navy);">
                                <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-navy);">24hrs</div>
                                <div class="small text-muted">Delivery Time</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center text-muted">
                            <i class="bi bi-lightning-charge me-2" style="color: var(--primary-red);"></i>
                            <small><strong>Impact:</strong> 4.8/5 customer satisfaction</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.12), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.03), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    CLIENT TESTIMONIALS
                </span>
            </div>
            <h2 class="text-white mb-3" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                What Our Clients Say
            </h2>
            <p class="text-white mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">
                Trusted by leading businesses across industries for reliable, efficient logistics solutions
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='none';">
                    <div class="mb-4">
                        <i class="bi bi-quote text-white" style="font-size: 3rem; opacity: 0.3;"></i>
                    </div>
                    <p class="text-white mb-4" style="font-size: 1rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        "Farhan Logistics transformed our supply chain. Their GOH handling expertise reduced our delivery times by 40% and the real-time tracking gave us complete visibility. Outstanding service!"
                    </p>
                    <div class="d-flex align-items-center">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; box-shadow: 0 8px 20px rgba(236,32,37,0.3);">
                            <span class="text-white" style="font-size: 1.5rem; font-weight: 700;">AM</span>
                        </div>
                        <div>
                            <h6 class="text-white mb-1" style="font-weight: 700;">Ahmed Malik</h6>
                            <p class="text-white mb-0" style="font-size: 0.85rem; opacity: 0.8;">Supply Chain Director, GarmentsPlus</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='none';">
                    <div class="mb-4">
                        <i class="bi bi-quote text-white" style="font-size: 3rem; opacity: 0.3;"></i>
                    </div>
                    <p class="text-white mb-4" style="font-size: 1rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        "Their ESD-protected handling for our sensitive electronics shipments achieved zero damage rate. The insurance coverage and temperature control exceeded our expectations. Highly recommended!"
                    </p>
                    <div class="d-flex align-items-center">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; box-shadow: 0 8px 20px rgba(236,32,37,0.3);">
                            <span class="text-white" style="font-size: 1.5rem; font-weight: 700;">SC</span>
                        </div>
                        <div>
                            <h6 class="text-white mb-1" style="font-weight: 700;">Sarah Chen</h6>
                            <p class="text-white mb-0" style="font-size: 0.85rem; opacity: 0.8;">Logistics Manager, TechVision Electronics</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='none';">
                    <div class="mb-4">
                        <i class="bi bi-quote text-white" style="font-size: 3rem; opacity: 0.3;"></i>
                    </div>
                    <p class="text-white mb-4" style="font-size: 1rem; line-height: 1.8; opacity: 0.92; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">
                        "We expanded from 3 to 15 export markets in just 18 months thanks to their cold chain expertise and compliance support. Their phytosanitary knowledge is unmatched. True partners in growth!"
                    </p>
                    <div class="d-flex align-items-center">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; box-shadow: 0 8px 20px rgba(236,32,37,0.3);">
                            <span class="text-white" style="font-size: 1.5rem; font-weight: 700;">RK</span>
                        </div>
                        <div>
                            <h6 class="text-white mb-1" style="font-weight: 700;">Raj Kumar</h6>
                            <p class="text-white mb-0" style="font-size: 0.85rem; opacity: 0.8;">CEO, FreshHarvest Exports</p>
                        </div>
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
            <div class="col-lg-9 text-center" data-aos="zoom-in">
                <div class="mb-4">
                    <i class="bi bi-rocket-takeoff text-white" style="font-size: 4rem; opacity: 0.9;"></i>
                </div>
                <h2 class="text-white mb-4" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                    Ready to Write Your Success Story?
                </h2>
                <p class="text-white mb-5" style="font-size: 1.2rem; line-height: 1.9; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2); max-width: 750px; margin-left: auto; margin-right: auto;">
                    Let us help you overcome your logistics challenges and achieve remarkable results. Join the businesses that trust us to deliver excellence.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/quote" class="btn btn-light btn-lg px-5" 
                       style="font-weight: 600; box-shadow: 0 8px 25px rgba(0,0,0,0.2);" 
                       onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 35px rgba(0,0,0,0.3)';" 
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.2)';">
                        <i class="bi bi-file-text me-2"></i>Request a Quote
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg px-5" 
                       style="font-weight: 600; border-width: 2px;" 
                       onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(-3px)';" 
                       onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)';">
                        <i class="bi bi-chat-dots me-2"></i>Schedule Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
