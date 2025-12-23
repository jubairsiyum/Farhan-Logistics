<!-- Quick Quote Widget -->
<div class="quick-quote-widget">
    <div class="container">
        <div class="quote-widget-content">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-md-7 text-center text-md-start mb-4 mb-md-0">
                    <div class="quote-widget-info">
                        <h3 class="quote-widget-title">
                            <i class="bi bi-calculator-fill me-2"></i>
                            Need a Shipping Quote?
                        </h3>
                        <p class="quote-widget-subtitle mb-0">
                            Get competitive rates for your cargo shipment. Fast response within 24 hours guaranteed by our experienced team.
                        </p>
                        <div class="quote-widget-features mt-3">
                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <small>24hr Response</small>
                                </div>
                                <div class="col-sm-4">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <small>Free Quotes</small>
                                </div>
                                <div class="col-sm-4">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <small>Expert Support</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 text-center">
                    <div class="quote-widget-cta">
                        <a href="/quote" class="btn btn-quote-widget btn-lg">
                            <i class="bi bi-file-text-fill me-2"></i> Request a Quote
                        </a>
                        <p class="mt-3 mb-0 small text-white-50">
                            Or call us: <a href="tel:+8801844167431" class="text-white fw-bold text-decoration-none">+880 1844-167431</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Quick Quote Widget Styles */
.quick-quote-widget {
    background: linear-gradient(135deg, var(--primary-navy) 0%, #1e2259 100%);
    padding: 40px 0;
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 100;
    overflow: hidden;
}

.quick-quote-widget::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent);
    border-radius: 50%;
}

.quick-quote-widget::after {
    content: '';
    position: absolute;
    bottom: -80px;
    left: -80px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent);
    border-radius: 50%;
}

.quote-widget-content {
    position: relative;
    z-index: 2;
}

.quote-widget-info {
    text-align: left;
}

.quote-widget-title {
    color: var(--primary-red);
    font-size: 2rem;
    margin-bottom: 15px;
    font-weight: 700;
    line-height: 1.3;
}

.quote-widget-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.05rem;
    line-height: 1.6;
}

.quote-widget-features {
    color: rgba(255, 255, 255, 0.85);
    font-size: 0.95rem;
}

.quote-widget-features i {
    color: var(--primary-red);
    font-size: 1.1rem;
}

.quote-widget-cta {
    text-align: center;
}

.btn-quote-widget {
    background: linear-gradient(135deg, var(--primary-red), #c91d22);
    color: white;
    border: none;
    padding: 18px 40px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 8px 25px rgba(236, 32, 37, 0.35);
    display: inline-block;
    text-decoration: none;
}

.btn-quote-widget:hover {
    background: linear-gradient(135deg, #d11a1f, #a01519);
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(236, 32, 37, 0.5);
    color: white;
}

/* Mobile Responsive */
@media (max-width: 767px) {
    .quick-quote-widget {
        padding: 30px 0;
    }
    
    .quote-widget-title {
        font-size: 1.5rem;
        text-align: center;
        margin-bottom: 10px;
    }
    
    .quote-widget-subtitle {
        font-size: 0.95rem;
        text-align: center;
        margin-bottom: 20px !important;
    }
    
    .quote-widget-info {
        text-align: center;
    }
    
    .quote-widget-features {
        margin-top: 20px !important;
    }
    
    .quote-widget-features .col-sm-4 {
        text-align: center;
        margin-bottom: 10px;
    }
    
    .btn-quote-widget {
        padding: 15px 35px;
        font-size: 1rem;
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 575px) {
    .quote-widget-features .row {
        flex-direction: column;
    }
    
    .quote-widget-features .col-sm-4 {
        width: 100%;
    }
}
</style>
