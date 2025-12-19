/**
 * FARHAN LOGISTICS - MAIN JAVASCRIPT
 * Modern, Vanilla JavaScript for enhanced user experience
 */

(function() {
    'use strict';

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
    // 3. NAVBAR SCROLL EFFECT
    // ========================================================================
    function initNavbarScroll() {
        const navbar = document.querySelector('.main-navbar');
        
        if (!navbar) return;

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.style.padding = '8px 0';
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.15)';
            } else {
                navbar.style.padding = '15px 0';
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
            }
        });
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

            const trackingNumber = document.getElementById('trackingNumber').value;
            const resultDiv = document.getElementById('trackingResult');

            if (!trackingNumber) {
                showAlert('warning', 'Please enter a tracking number.');
                return;
            }

            // Show loading state
            resultDiv.innerHTML = `
                <div class="text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3">Searching for shipment...</p>
                </div>
            `;
            resultDiv.style.display = 'block';

            // Simulate API call (replace with actual tracking API)
            setTimeout(() => {
                resultDiv.innerHTML = `
                    <div class="alert alert-info">
                        <h5><i class="bi bi-info-circle"></i> Tracking Number: ${trackingNumber}</h5>
                        <p class="mb-0">This is a demo tracking system. In production, this would connect to your actual tracking database or API.</p>
                    </div>
                `;
            }, 1500);
        });
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

        console.log('Farhan Logistics - Website initialized successfully');
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
