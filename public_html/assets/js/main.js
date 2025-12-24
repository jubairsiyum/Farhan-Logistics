/**
 * FARHAN LOGISTICS - MAIN JAVASCRIPT
 * Modern, Vanilla JavaScript for enhanced user experience
 */

(function() {
    'use strict';

    // Keep body padding in sync with the live header height
    function setHeaderOffset(headerWrapper, forcedHeight) {
        if (!headerWrapper) return;

        const height = typeof forcedHeight === 'number'
            ? forcedHeight
            : Math.round(headerWrapper.getBoundingClientRect().height);

        document.documentElement.style.setProperty('--header-offset', `${height}px`);
    }

    // ========================================================================
    // 1. INITIALIZE AOS (Animate On Scroll)
    // ========================================================================
    function initAOS() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 100
            });
        }
    }

    // ========================================================================
    // 2. SCROLL TO TOP BUTTON
    // ========================================================================
    function initScrollToTop() {
        const scrollBtn = document.getElementById('scrollToTop');
        
        if (!scrollBtn) return;

        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });

        // Scroll to top on click
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ========================================================================
    // 3. NAVBAR SCROLL EFFECT - MODERN STICKY BEHAVIOR
    // ========================================================================
    function initNavbarScroll() {
        const headerWrapper = document.querySelector('.header-wrapper');
        const body = document.body;
        
        if (!headerWrapper) return;

        let lastScroll = 0;
        let lastHeight = 0;
        const scrollThreshold = 80;

        const syncHeaderOffset = () => {
            const headerHeight = Math.round(headerWrapper.getBoundingClientRect().height);
            if (headerHeight !== lastHeight) {
                setHeaderOffset(headerWrapper, headerHeight);
                lastHeight = headerHeight;
            }
        };

        const applyScrollState = () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > scrollThreshold) {
                headerWrapper.classList.add('scrolled');
                body.classList.add('header-scrolled');
            } else {
                headerWrapper.classList.remove('scrolled');
                body.classList.remove('header-scrolled');
            }

            syncHeaderOffset();
            lastScroll = currentScroll;
        };

        // Initial sync
        applyScrollState();

        window.addEventListener('scroll', applyScrollState);
        window.addEventListener('resize', syncHeaderOffset);
        window.addEventListener('load', syncHeaderOffset);
    }

    // ========================================================================
    // 4. MOBILE MENU AUTO-CLOSE
    // ========================================================================
    function initMobileMenu() {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    }

    // ========================================================================
    // 5. COUNTER ANIMATION (for statistics)
    // ========================================================================
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(function() {
            start += increment;
            if (start >= target) {
                element.textContent = target + '+';
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start) + '+';
            }
        }, 16);
    }

    function initCounters() {
        const counters = document.querySelectorAll('.stat-number');
        let triggered = false;

        function checkCounters() {
            if (triggered) return;

            counters.forEach(counter => {
                const rect = counter.getBoundingClientRect();
                const inView = rect.top < window.innerHeight && rect.bottom >= 0;

                if (inView) {
                    const target = parseInt(counter.getAttribute('data-target'));
                    if (target) {
                        animateCounter(counter, target);
                        triggered = true;
                    }
                }
            });
        }

        if (counters.length > 0) {
            window.addEventListener('scroll', checkCounters);
            checkCounters(); // Check on load
        }
    }

    // ========================================================================
    // 6. FORM VALIDATION & SUBMISSION
    // ========================================================================
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');

        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }

    // ========================================================================
    // 7. CONTACT FORM AJAX SUBMISSION
    // ========================================================================
    function initContactForm() {
        const contactForm = document.getElementById('contactForm');
        
        if (!contactForm) return;

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!contactForm.checkValidity()) {
                contactForm.classList.add('was-validated');
                return;
            }

            const formData = new FormData(contactForm);
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Sending...';

            fetch('handlers/contact_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', data.message || 'Thank you! Your message has been sent successfully.');
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                } else {
                    showAlert('danger', data.message || 'Sorry, there was an error. Please try again.');
                }
            })
            .catch(error => {
                showAlert('danger', 'Network error. Please check your connection and try again.');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        });
    }

    // ========================================================================
    // 8. QUOTE FORM AJAX SUBMISSION
    // ========================================================================
    function initQuoteForm() {
        const quoteForm = document.getElementById('quoteForm');
        
        if (!quoteForm) return;

        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!quoteForm.checkValidity()) {
                quoteForm.classList.add('was-validated');
                return;
            }

            const formData = new FormData(quoteForm);
            const submitBtn = quoteForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Processing...';

            fetch('handlers/quote_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', data.message || 'Quote request received! We will contact you shortly.');
                    quoteForm.reset();
                    quoteForm.classList.remove('was-validated');
                } else {
                    showAlert('danger', data.message || 'Error processing your request. Please try again.');
                }
            })
            .catch(error => {
                showAlert('danger', 'Network error. Please check your connection and try again.');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        });
    }

    // ========================================================================
    // 9. CAREER FORM AJAX SUBMISSION
    // ========================================================================
    function initCareerForm() {
        const careerForm = document.getElementById('careerForm');
        
        if (!careerForm) return;

        careerForm.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!careerForm.checkValidity()) {
                careerForm.classList.add('was-validated');
                return;
            }

            const formData = new FormData(careerForm);
            const submitBtn = careerForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split"></i> Submitting...';

            fetch('handlers/career_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('success', data.message || 'Application submitted successfully!');
                    careerForm.reset();
                    careerForm.classList.remove('was-validated');
                } else {
                    showAlert('danger', data.message || 'Error submitting application. Please try again.');
                }
            })
            .catch(error => {
                showAlert('danger', 'Network error. Please check your connection and try again.');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        });
    }

    // ========================================================================
    // 10. TRACKING FORM
    // ========================================================================
    function initTrackingForm() {
        const trackingForm = document.getElementById('trackingForm');
        
        if (!trackingForm) return;

        trackingForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const trackingNumber = document.getElementById('trackingNumber').value.trim();
            const resultDiv = document.getElementById('trackingResult');

            if (!trackingNumber) {
                showAlert('warning', 'Please enter a tracking number.');
                return;
            }

            // Show loading state
            resultDiv.innerHTML = `
                <div class="text-center py-5">
                    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3 text-muted">Searching for shipment...</p>
                </div>
            `;
            resultDiv.style.display = 'block';

            // Fetch tracking data from server
            fetch(`/handlers/tracking_handler.php?tracking_number=${encodeURIComponent(trackingNumber)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        displayTrackingResult(data.data);
                    } else {
                        resultDiv.innerHTML = `
                            <div class="alert alert-warning mt-4">
                                <h5><i class="bi bi-exclamation-triangle"></i> Not Found</h5>
                                <p class="mb-0">${data.message}</p>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Tracking error:', error);
                    resultDiv.innerHTML = `
                        <div class="alert alert-danger mt-4">
                            <h5><i class="bi bi-x-circle"></i> Error</h5>
                            <p class="mb-0">Unable to fetch tracking information. Please try again later.</p>
                        </div>
                    `;
                });
        });
    }

    function displayTrackingResult(data) {
        const { shipment, events, statusBadgeClass } = data;
        const resultDiv = document.getElementById('trackingResult');
        
        // Format status text
        const statusText = shipment.current_status.replace('_', ' ').toUpperCase();
        
        // Build events timeline HTML
        let eventsHTML = '';
        if (events && events.length > 0) {
            eventsHTML = events.map((event, index) => `
                <div class="timeline-item ${index === 0 ? 'active' : ''}">
                    <div class="timeline-marker">
                        <i class="bi ${index === 0 ? 'bi-geo-alt-fill' : 'bi-circle-fill'}"></i>
                    </div>
                    <div class="timeline-content">
                        <h6 class="mb-1" style="color: var(--primary-navy); font-weight: 700;">${event.event_type}</h6>
                        <p class="mb-1 text-muted small"><i class="bi bi-geo-alt"></i> ${event.location || 'N/A'}</p>
                        <p class="mb-1">${event.description || ''}</p>
                        <small class="text-muted"><i class="bi bi-clock"></i> ${event.event_date_formatted}</small>
                    </div>
                </div>
            `).join('');
        } else {
            eventsHTML = '<p class="text-muted text-center py-3">No tracking events yet</p>';
        }

        resultDiv.innerHTML = `
            <div class="tracking-results mt-4">
                <!-- Shipment Header -->
                <div class="alert alert-success" style="background: linear-gradient(135deg, #d4edda, #c3e6cb); border: none; border-radius: 12px;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1" style="color: var(--primary-navy);"><i class="bi bi-check-circle-fill"></i> Shipment Found</h5>
                            <p class="mb-0 text-muted">Tracking Number: <strong>${shipment.tracking_number}</strong></p>
                        </div>
                        <span class="badge ${statusBadgeClass}" style="font-size: 1rem; padding: 0.5rem 1rem;">${statusText}</span>
                    </div>
                </div>

                <!-- Shipment Details Card -->
                <div class="card shadow-sm mb-4" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.08);">
                    <div class="card-body p-4">
                        <h5 class="mb-4" style="color: var(--primary-navy); font-weight: 700;">
                            <i class="bi bi-box-seam"></i> Shipment Details
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="info-item">
                                    <i class="bi bi-person-fill text-primary"></i>
                                    <div>
                                        <small class="text-muted d-block">Customer</small>
                                        <strong>${shipment.customer_name}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <i class="bi bi-envelope-fill text-primary"></i>
                                    <div>
                                        <small class="text-muted d-block">Email</small>
                                        <strong>${shipment.customer_email}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <i class="bi bi-geo-alt-fill text-success"></i>
                                    <div>
                                        <small class="text-muted d-block">Origin</small>
                                        <strong>${shipment.origin}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <i class="bi bi-geo-fill text-danger"></i>
                                    <div>
                                        <small class="text-muted d-block">Destination</small>
                                        <strong>${shipment.destination}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <i class="bi bi-truck text-warning"></i>
                                    <div>
                                        <small class="text-muted d-block">Service Type</small>
                                        <strong>${shipment.service_type.toUpperCase()}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-item">
                                    <i class="bi bi-calendar-event text-info"></i>
                                    <div>
                                        <small class="text-muted d-block">Estimated Delivery</small>
                                        <strong>${shipment.estimated_delivery_formatted}</strong>
                                    </div>
                                </div>
                            </div>
                            ${shipment.actual_delivery_formatted ? `
                            <div class="col-md-12">
                                <div class="alert alert-success mb-0">
                                    <i class="bi bi-check-circle-fill"></i> 
                                    <strong>Delivered on:</strong> ${shipment.actual_delivery_formatted}
                                </div>
                            </div>
                            ` : ''}
                        </div>
                    </div>
                </div>

                <!-- Tracking Timeline -->
                <div class="card shadow-sm" style="border-radius: 16px; border: 1px solid rgba(0,0,0,0.08);">
                    <div class="card-body p-4">
                        <h5 class="mb-4" style="color: var(--primary-navy); font-weight: 700;">
                            <i class="bi bi-clock-history"></i> Tracking History
                        </h5>
                        <div class="tracking-timeline">
                            ${eventsHTML}
                        </div>
                    </div>
                </div>

                <!-- Contact Support -->
                <div class="text-center mt-4">
                    <p class="text-muted">
                        <i class="bi bi-info-circle"></i> Need help? 
                        <a href="/contact" class="text-decoration-none fw-bold" style="color: var(--primary-red);">Contact Support</a>
                    </p>
                </div>
            </div>

            <style>
                .info-item {
                    display: flex;
                    gap: 12px;
                    align-items: start;
                    padding: 12px;
                    background: #f8f9fa;
                    border-radius: 10px;
                }
                .info-item i {
                    font-size: 1.5rem;
                    margin-top: 2px;
                }
                .tracking-timeline {
                    position: relative;
                    padding-left: 30px;
                }
                .timeline-item {
                    position: relative;
                    padding-bottom: 30px;
                    padding-left: 30px;
                    border-left: 3px solid #e9ecef;
                }
                .timeline-item.active {
                    border-left-color: var(--primary-red);
                }
                .timeline-item:last-child {
                    padding-bottom: 0;
                    border-left-color: transparent;
                }
                .timeline-marker {
                    position: absolute;
                    left: -13px;
                    top: 0;
                    width: 24px;
                    height: 24px;
                    background: white;
                    border: 3px solid #e9ecef;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .timeline-item.active .timeline-marker {
                    border-color: var(--primary-red);
                    background: var(--primary-red);
                }
                .timeline-marker i {
                    font-size: 0.7rem;
                    color: #e9ecef;
                }
                .timeline-item.active .timeline-marker i {
                    color: white;
                }
                .timeline-content {
                    background: #f8f9fa;
                    padding: 15px;
                    border-radius: 10px;
                    transition: all 0.3s ease;
                }
                .timeline-content:hover {
                    background: #e9ecef;
                    transform: translateX(5px);
                }
            </style>
        `;
    }

    // ========================================================================
    // 11. ALERT HELPER FUNCTION
    // ========================================================================
    function showAlert(type, message) {
        const alertContainer = document.getElementById('alertContainer') || createAlertContainer();
        
        const alertHTML = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;
        
        alertContainer.innerHTML = alertHTML;
        
        // Auto-dismiss after 5 seconds
        setTimeout(() => {
            const alert = alertContainer.querySelector('.alert');
            if (alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000);
    }

    function createAlertContainer() {
        const container = document.createElement('div');
        container.id = 'alertContainer';
        container.style.position = 'fixed';
        container.style.top = '80px';
        container.style.right = '20px';
        container.style.zIndex = '9999';
        container.style.maxWidth = '400px';
        document.body.appendChild(container);
        return container;
    }

    // ========================================================================
    // 12. SMOOTH SCROLL FOR ANCHOR LINKS
    // ========================================================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#' || href === '#!') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ========================================================================
    // 13. LAZY LOAD IMAGES (Simple Implementation)
    // ========================================================================
    function initLazyLoad() {
        const images = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }

    // ========================================================================
    // INITIALIZATION - Run on DOM Ready
    // ========================================================================
    document.addEventListener('DOMContentLoaded', function() {
        initAOS();
        initScrollToTop();
        initNavbarScroll();
        initMobileMenu();
        initCounters();
        initFormValidation();
        initContactForm();
        initQuoteForm();
        initCareerForm();
        initTrackingForm();
        initSmoothScroll();
        initLazyLoad();

        // console.log('Farhan Logistics - Website initialized successfully');
    });

    // ========================================================================
    // WINDOW LOAD EVENT
    // ========================================================================
    window.addEventListener('load', function() {
        // Additional initialization after full page load
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });

})();
