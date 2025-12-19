<!-- Quick Quote Widget -->
<div class="quick-quote-widget">
    <div class="container">
        <div class="quote-widget-content">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12 text-center text-lg-start mb-3 mb-lg-0">
                    <h3 class="quote-widget-title">
                        <i class="bi bi-calculator-fill me-2"></i>
                        Get Instant Quote
                    </h3>
                    <p class="quote-widget-subtitle mb-0">Fast, accurate shipping rates</p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <form class="quote-widget-form" id="quickQuoteForm">
                        <div class="row g-2">
                            <div class="col-md-3 col-6">
                                <select class="form-control form-control-sm" name="service_type" required>
                                    <option value="">Select Service</option>
                                    <option value="air">Air Freight</option>
                                    <option value="sea">Sea Freight</option>
                                    <option value="road">Road Transport</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-6">
                                <input type="text" class="form-control form-control-sm" name="origin" placeholder="From" required>
                            </div>
                            <div class="col-md-2 col-6">
                                <input type="text" class="form-control form-control-sm" name="destination" placeholder="To" required>
                            </div>
                            <div class="col-md-2 col-6">
                                <input type="number" class="form-control form-control-sm" name="weight" placeholder="Weight (kg)" required>
                            </div>
                            <div class="col-md-3 col-12">
                                <button type="button" class="btn btn-quote-widget w-100" onclick="window.location.href='quote.php'">
                                    <i class="bi bi-send-fill me-1"></i> Get Full Quote
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Quick Quote Widget Styles */
.quick-quote-widget {
    background: linear-gradient(135deg, var(--primary-navy) 0%, #1e2259 100%);
    padding: 25px 0;
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 100;
}

.quote-widget-content {
    position: relative;
}

.quote-widget-title {
    color: var(--primary-red);
    font-size: 1.5rem;
    margin-bottom: 5px;
    font-weight: 700;
}

.quote-widget-subtitle {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.9rem;
}

.quote-widget-form .form-control {
    border: 2px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.95);
    border-radius: 6px;
    padding: 10px 12px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.quote-widget-form .form-control:focus {
    border-color: var(--primary-red);
    background: white;
    box-shadow: 0 0 0 3px rgba(236, 32, 37, 0.1);
    outline: none;
}

.quote-widget-form .form-control::placeholder {
    color: #999;
    font-size: 13px;
}

.btn-quote-widget {
    background: var(--primary-red);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-quote-widget:hover {
    background: #d11a1f;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(236, 32, 37, 0.4);
    color: white;
}

/* Mobile Responsive */
@media (max-width: 767px) {
    .quick-quote-widget {
        padding: 20px 0;
    }
    
    .quote-widget-title {
        font-size: 1.25rem;
        margin-bottom: 10px;
    }
    
    .quote-widget-subtitle {
        font-size: 0.85rem;
        margin-bottom: 15px !important;
    }
    
    .quote-widget-form .form-control {
        padding: 12px;
        font-size: 15px;
        margin-bottom: 5px;
    }
    
    .btn-quote-widget {
        padding: 12px 20px;
        font-size: 15px;
        margin-top: 5px;
    }
}

@media (max-width: 575px) {
    .quick-quote-widget {
        padding: 15px 0;
    }
    
    .quote-widget-form .row {
        margin: 0;
    }
    
    .quote-widget-form .col-6,
    .quote-widget-form .col-12 {
        padding-left: 5px;
        padding-right: 5px;
    }
}
</style>
