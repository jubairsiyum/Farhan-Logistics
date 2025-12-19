<?php 
$pageTitle = 'Get a Quote';
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 50vh; min-height: 400px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <h1 data-aos="fade-up">Request a Quote</h1>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Get competitive rates for your shipment. Fast response within 24 hours.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Form Section -->
<section class="py-100 form-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-container" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <i class="bi bi-calculator" style="font-size: 4rem; color: var(--primary-orange);"></i>
                        <h2 class="mt-3 mb-3">Instant Quote Request</h2>
                        <p class="text-muted">
                            Fill out the details below to receive a customized freight quotation. Our team will respond within 24 hours.
                        </p>
                    </div>
                    
                    <div id="alertContainer"></div>
                    
                    <form id="quoteForm" class="needs-validation" novalidate>
                        <!-- Personal Information -->
                        <div class="mb-4">
                            <h4 class="mb-3"><i class="bi bi-person text-orange"></i> Contact Information</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="name" 
                                            name="name" 
                                            required
                                            placeholder="John Doe"
                                        >
                                        <div class="invalid-feedback">Please provide your name.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input 
                                            type="email" 
                                            class="form-control" 
                                            id="email" 
                                            name="email" 
                                            required
                                            placeholder="john@company.com"
                                        >
                                        <div class="invalid-feedback">Please provide a valid email.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input 
                                            type="tel" 
                                            class="form-control" 
                                            id="phone" 
                                            name="phone" 
                                            required
                                            placeholder="+971 50 XXX XXXX"
                                        >
                                        <div class="invalid-feedback">Please provide your phone number.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company Name</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="company" 
                                            name="company"
                                            placeholder="Your Company Ltd."
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Shipment Details -->
                        <div class="mb-4">
                            <h4 class="mb-3"><i class="bi bi-box-seam text-orange"></i> Shipment Details</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="service_type" class="form-label">Service Type *</label>
                                        <select class="form-select" id="service_type" name="service_type" required>
                                            <option value="">Select Service Type</option>
                                            <option value="air_freight">Air Freight</option>
                                            <option value="sea_freight_fcl">Sea Freight - FCL (Full Container)</option>
                                            <option value="sea_freight_lcl">Sea Freight - LCL (Less than Container)</option>
                                            <option value="road_transport">Road Transport</option>
                                            <option value="warehousing">Warehousing & Distribution</option>
                                            <option value="customs_clearance">Customs Clearance</option>
                                            <option value="other">Other / Multiple Services</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a service type.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cargo_type" class="form-label">Cargo Type *</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="cargo_type" 
                                            name="cargo_type" 
                                            required
                                            placeholder="e.g., Electronics, Machinery, Textiles"
                                        >
                                        <div class="invalid-feedback">Please specify cargo type.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="origin" class="form-label">Origin (From) *</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="origin" 
                                            name="origin" 
                                            required
                                            placeholder="City, Country"
                                        >
                                        <div class="invalid-feedback">Please provide origin location.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="destination" class="form-label">Destination (To) *</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="destination" 
                                            name="destination" 
                                            required
                                            placeholder="City, Country"
                                        >
                                        <div class="invalid-feedback">Please provide destination location.</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="weight" class="form-label">Total Weight</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="weight" 
                                            name="weight"
                                            placeholder="e.g., 500 KG, 2 Tons"
                                        >
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dimensions" class="form-label">Dimensions (L×W×H)</label>
                                        <input 
                                            type="text" 
                                            class="form-control" 
                                            id="dimensions" 
                                            name="dimensions"
                                            placeholder="e.g., 120×80×100 cm"
                                        >
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="shipment_date" class="form-label">Expected Shipment Date</label>
                                        <input 
                                            type="date" 
                                            class="form-control" 
                                            id="shipment_date" 
                                            name="shipment_date"
                                            min="<?php echo date('Y-m-d'); ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Additional Information -->
                        <div class="mb-4">
                            <h4 class="mb-3"><i class="bi bi-info-circle text-orange"></i> Additional Information</h4>
                            <div class="form-group">
                                <label for="additional_info" class="form-label">Special Requirements or Comments</label>
                                <textarea 
                                    class="form-control" 
                                    id="additional_info" 
                                    name="additional_info" 
                                    rows="5"
                                    placeholder="Please provide any special handling requirements, customs information, or other details that would help us provide an accurate quote..."
                                ></textarea>
                            </div>
                        </div>
                        
                        <!-- Services Options -->
                        <div class="mb-4">
                            <h4 class="mb-3"><i class="bi bi-list-check text-orange"></i> Additional Services</h4>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="insurance" name="services[]" value="insurance">
                                        <label class="form-check-label" for="insurance">
                                            Cargo Insurance
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="packaging" name="services[]" value="packaging">
                                        <label class="form-check-label" for="packaging">
                                            Professional Packaging
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customs" name="services[]" value="customs">
                                        <label class="form-check-label" for="customs">
                                            Customs Clearance
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="warehousing_option" name="services[]" value="warehousing">
                                        <label class="form-check-label" for="warehousing_option">
                                            Warehousing
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="door_delivery" name="services[]" value="door_delivery">
                                        <label class="form-check-label" for="door_delivery">
                                            Door-to-Door Delivery
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="tracking" name="services[]" value="tracking">
                                        <label class="form-check-label" for="tracking">
                                            Premium Tracking
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-custom btn-lg px-5">
                                <i class="bi bi-send"></i> Request Quote
                            </button>
                            <p class="text-muted mt-3 small">
                                <i class="bi bi-shield-check"></i> Your information is secure and will only be used to process your quote request.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Get Quote Section -->
<section class="py-100 bg-light-custom">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Why Request a Quote from Us?</h2>
            <p>Experience the Farhan Logistics advantage</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <i class="bi bi-lightning-charge" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Quick Response</h5>
                    <p class="text-muted">
                        Receive detailed quotes within 24 hours from our expert team.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <i class="bi bi-cash-coin" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Competitive Rates</h5>
                    <p class="text-muted">
                        Best market rates with transparent pricing and no hidden fees.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <i class="bi bi-person-check" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">Expert Advice</h5>
                    <p class="text-muted">
                        Professional guidance on the best shipping solution for your needs.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <i class="bi bi-shield-check" style="font-size: 3.5rem; color: var(--primary-orange);"></i>
                    <h5 class="mt-3 mb-3">No Obligation</h5>
                    <p class="text-muted">
                        Free quote with absolutely no commitment required.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h3 class="mb-3">Need Immediate Assistance?</h3>
                <p class="lead text-muted mb-0">
                    Our logistics experts are available 24/7 to discuss your shipping requirements and provide instant quotes over the phone.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="tel:+97144XXXXXX" class="btn btn-primary-custom btn-lg">
                    <i class="bi bi-telephone-fill"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
