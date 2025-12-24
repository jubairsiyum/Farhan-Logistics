<?php 
$pageTitle = 'Our Services';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 60vh; min-height: 500px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <span class="hero-badge" data-aos="fade-up" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); padding: 0.6rem 1.5rem; border-radius: 50px; font-size: 0.85rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 20px rgba(236, 32, 37, 0.35); display: inline-block;">OUR SERVICES</span>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.5rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: white;">Comprehensive Logistics Services</h1>
                    <p data-aos="fade-up" data-aos-delay="200" style="font-size: 1.25rem; line-height: 1.8; margin-top: 1.5rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 800px; color: white;">
                        End-to-end freight solutions tailored to your business requirements across all transportation modes. Professional, reliable, and efficient logistics services.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2rem;">
                        <a href="/quote" class="btn btn-primary-custom btn-lg me-3">
                            <i class="bi bi-file-text me-2"></i>Request Quote
                        </a>
                        <a href="/contact" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-envelope me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    WHAT WE OFFER
                </span>
            </div>
            <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Services We Offer</h2>
            <p style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; color: #6c757d; margin: 0 auto;">Complete logistics solutions designed for modern businesses with industry-leading expertise and reliability</p>
        </div>
        
        <div class="row g-4">
            <!-- Freight Forwarding -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h4>Freight Forwarding</h4>
                    <p>
                        We handle both sea and air freight with reliable FCL/LCL options and complete 
                        export–import logistics support, ensuring smooth cargo movement from origin 
                        to destination.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Air & Sea Freight Services</li>
                        <li><i class="bi bi-check-circle-fill"></i> FCL & LCL Options</li>
                        <li><i class="bi bi-check-circle-fill"></i> Export-Import Support</li>
                    </ul>
                </div>
            </div>
            
            <!-- Customs & Trade Support -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h4>Customs & Trade Support</h4>
                    <p>
                        All customs-related tasks, including documentation, HS code guidance, clearance 
                        processing, and bank or LC-related trade support, are managed efficiently to avoid 
                        delays.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Customs Documentation</li>
                        <li><i class="bi bi-check-circle-fill"></i> HS Code Guidance</li>
                        <li><i class="bi bi-check-circle-fill"></i> LC Trade Support</li>
                    </ul>
                </div>
            </div>
            
            <!-- Finance & Documentation -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-cash-coin"></i>
                    </div>
                    <h4>Finance & Documentation</h4>
                    <p>
                        From export–import finance facilitation to LC endorsement, processing, 
                        and invoice compliance, all financial and documentation needs are handled with 
                        accuracy and care.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Export-Import Finance</li>
                        <li><i class="bi bi-check-circle-fill"></i> LC Endorsement & Processing</li>
                        <li><i class="bi bi-check-circle-fill"></i> Invoice Compliance</li>
                    </ul>
                </div>
            </div>
            
            <!-- Sales & Marketing Support -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h4>Sales & Marketing Logistics Support</h4>
                    <p>
                        We assist with route planning, global carrier negotiation, and client 
                        acquisition, offering strategic logistics and supply chain consulting to boost 
                        commercial growth.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Route Planning</li>
                        <li><i class="bi bi-check-circle-fill"></i> Carrier Negotiation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Supply Chain Consulting</li>
                    </ul>
                </div>
            </div>
            
            <!-- Advanced Technology -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-cpu"></i>
                    </div>
                    <h4>Advanced Technology Support</h4>
                    <p>
                        Shipments benefit from real-time tracking, digital paperwork, automated 
                        updates, and smart route optimization, making the entire logistics journey 
                        transparent and efficient.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Real-Time Tracking</li>
                        <li><i class="bi bi-check-circle-fill"></i> Digital Paperwork</li>
                        <li><i class="bi bi-check-circle-fill"></i> Smart Route Optimization</li>
                    </ul>
                </div>
            </div>
            
            <!-- Flexible Delivery -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-box-arrow-right"></i>
                    </div>
                    <h4>Flexible Delivery Options</h4>
                    <p>
                        Whether you prefer express or standard delivery, door-to-door or port-to-port service, 
                        we arrange shipments according to your timing, routing, and handling 
                        requirements.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Express & Standard Delivery</li>
                        <li><i class="bi bi-check-circle-fill"></i> Door-to-Door Service</li>
                        <li><i class="bi bi-check-circle-fill"></i> Custom Routing Options</li>
                    </ul>
                </div>
            </div>
            
            <!-- Global Network -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <h4>Global Network Reach</h4>
                    <p>
                        With strong alliances across major airlines, shipping lines, and global agents, 
                        we manage cargo through key ports and trade hubs worldwide for dependable 
                        international coverage.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Worldwide Coverage</li>
                        <li><i class="bi bi-check-circle-fill"></i> Major Port Access</li>
                        <li><i class="bi bi-check-circle-fill"></i> Strategic Partnerships</li>
                    </ul>
                </div>
            </div>
            
            <!-- Overseas -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="350" id="overseas">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-globe-americas"></i>
                    </div>
                    <h4>Overseas</h4>
                    <p>
                        Global logistics network providing seamless international shipping solutions across 
                        continents. Our overseas services ensure your cargo reaches any destination worldwide 
                        with complete visibility, compliance, and expert handling throughout the journey.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Worldwide Shipping Network</li>
                        <li><i class="bi bi-check-circle-fill"></i> International Compliance</li>
                        <li><i class="bi bi-check-circle-fill"></i> Multi-Modal Solutions</li>
                    </ul>
                </div>
            </div>
            
            <!-- Agent & Client -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400" id="agent-client">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-people"></i>
                    </div>
                    <h4>Agent & Client Services</h4>
                    <p>
                        Dedicated agent network and client relationship management providing personalized 
                        support, transparent communication, and tailored logistics solutions. We act as your 
                        trusted partner, coordinating every detail from booking to final delivery.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Dedicated Account Management</li>
                        <li><i class="bi bi-check-circle-fill"></i> 24/7 Client Support</li>
                        <li><i class="bi bi-check-circle-fill"></i> Agent Coordination</li>
                    </ul>
                </div>
            </div>
            
            <!-- Canada Agent Support -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="450">
                <div class="service-detail-card">
                    <div class="service-detail-icon">
                        <i class="bi bi-flag"></i>
                    </div>
                    <h4>Canada Agent & Nomination Buyer Support</h4>
                    <p>
                        Shipments to Canada are supported by a dedicated all-road agent for smooth 
                        handling, and any nomination buyer agreement ensures all shipments go directly through 
                        the assigned agent as per contract.
                    </p>
                    <ul class="service-features">
                        <li><i class="bi bi-check-circle-fill"></i> Dedicated Canada Agent</li>
                        <li><i class="bi bi-check-circle-fill"></i> All-Road Coverage</li>
                        <li><i class="bi bi-check-circle-fill"></i> Nomination Buyer Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries Served -->
<section class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.95)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1920&q=90') center/cover fixed; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.12), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.03), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 50%; right: 15%; width: 200px; height: 200px; background: radial-gradient(circle, rgba(236, 32, 37, 0.08), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-title mb-60 text-center" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    INDUSTRY EXPERTISE
                </span>
            </div>
            <h2 class="text-white mb-3" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Industries We Serve</h2>
            <p class="text-white mx-auto" style="font-size: 1.15rem; max-width: 850px; line-height: 1.8; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">Specialized logistics solutions across diverse sectors</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-handbag text-white" style="font-size: 2rem;"></i>
                        </div>
                        <h6 class="mb-0 text-white" style="font-weight: 600; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Leather & Footwear</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="150">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-scissors text-white" style="font-size: 2rem;"></i>
                        </div>
                        <h6 class="mb-0 text-white" style="font-weight: 600; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">RMG & Textile</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-cart text-white" style="font-size: 2rem;"></i>
                        </div>
                        <h6 class="mb-0 text-white" style="font-weight: 600; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">FMCG & Retail</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="250">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-cpu text-white" style="font-size: 2rem;"></i>
                        </div>
                        <h6 class="mb-0 text-white" style="font-weight: 600; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Electronics & Parts</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-tree text-white" style="font-size: 2rem;"></i>
                        </div>
                        <h6 class="mb-0 text-white" style="font-weight: 600; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Agriculture</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6" data-aos="fade-up" data-aos-delay="350">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.12); backdrop-filter: blur(15px); border: 2px solid rgba(255,255,255,0.15); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 32px rgba(0,0,0,0.2); cursor: pointer;"
                     onmouseover="this.style.transform='translateY(-12px) scale(1.02)'; this.style.background='rgba(255,255,255,0.18)'; this.style.borderColor='rgba(236,32,37,0.5)'; this.style.boxShadow='0 15px 45px rgba(236,32,37,0.25)';"
                     onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.boxShadow='0 8px 32px rgba(0,0,0,0.2)';">
                    <div class="text-center">
                        <div class="mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(236, 32, 37, 0.4);">
                            <i class="bi bi-box-seam text-white" style="font-size: 2rem;"></i>
                        </div>
                        <h6 class="mb-0 text-white" style="font-weight: 600; text-shadow: 0 1px 5px rgba(0,0,0,0.2);">Raw Commodities</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-banner section-gradient" style="padding: 80px 0; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -60px; right: -60px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(255, 255, 255, 0.1), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -80px; left: -80px; width: 350px; height: 350px; background: radial-gradient(circle, rgba(255, 255, 255, 0.08), transparent); border-radius: 50%;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="zoom-in">
                <div class="mb-3">
                    <span class="badge text-white px-4 py-2" style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; border: 1px solid rgba(255,255,255,0.3);">
                        GET STARTED TODAY
                    </span>
                </div>
                <h2 class="text-white mb-4" style="font-size: 2.5rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">Need a Custom Logistics Solution?</h2>
                <p class="text-white mb-5" style="font-size: 1.15rem; line-height: 1.8; opacity: 0.95; max-width: 700px; margin: 0 auto; text-shadow: 0 1px 10px rgba(0,0,0,0.2);">Our team of experts is ready to design a tailored solution for your unique shipping requirements. Get in touch for competitive rates and professional service.</p>
                <div class="mt-4">
                    <a href="quote.php" class="btn btn-primary-custom btn-lg me-3" style="box-shadow: 0 8px 25px rgba(0,0,0,0.2);">
                        <i class="bi bi-file-text me-2"></i>Request Quote
                    </a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg" style="border: 2px solid white; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
                        <i class="bi bi-envelope me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/quote-widget.php'; ?>

<?php include 'includes/footer.php'; ?>
