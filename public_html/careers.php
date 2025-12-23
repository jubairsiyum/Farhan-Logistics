<?php 
$pageTitle = 'Careers';

// Include database connection
require_once 'config/db.php';

// Fetch active job postings
try {
    $stmt = $pdo->prepare("SELECT * FROM job_postings WHERE status = 'active' ORDER BY created_at DESC");
    $stmt->execute();
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $jobs = [];
    error_log('Careers page error: ' . $e->getMessage());
}

include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<!-- Page Header -->
<section class="hero-section" style="height: 70vh; min-height: 550px; background: linear-gradient(135deg, rgba(20, 24, 82, 0.97), rgba(47, 51, 141, 0.92)), url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=1920&q=90') center/cover; position: relative; overflow: hidden;">
    <!-- Decorative Elements -->
    <div style="position: absolute; top: -80px; right: -80px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(236, 32, 37, 0.15), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: -120px; left: -120px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 255, 255, 0.05), transparent); border-radius: 50%;"></div>
    <div style="position: absolute; top: 40%; right: 10%; width: 250px; height: 250px; background: radial-gradient(circle, rgba(236, 32, 37, 0.1), transparent); border-radius: 50%; animation: pulse 4s ease-in-out infinite 1s;"></div>
    
    <div class="container h-100" style="position: relative; z-index: 2;">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <div class="hero-content">
                    <div class="mb-3">
                        <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">JOIN OUR TEAM</span>
                    </div>
                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-size: 3.8rem; font-weight: 700; margin-top: 1.5rem; text-shadow: 0 2px 25px rgba(0,0,0,0.3); color: #ffffff;">
                        Build Your Career in Logistics
                    </h1>
                    <p data-aos="fade-up" data-aos-delay="200" class="text-white" style="font-size: 1.3rem; line-height: 1.8; margin-top: 2rem; opacity: 0.95; text-shadow: 0 1px 15px rgba(0,0,0,0.2); max-width: 900px; margin-left: auto; margin-right: auto;">
                        Join a dynamic team that's revolutionizing logistics in South Asia. We offer challenging opportunities, continuous learning, and a culture of excellence.
                    </p>
                    <div data-aos="fade-up" data-aos-delay="300" style="margin-top: 2.5rem;">
                        <a href="#open-positions" class="btn btn-primary-custom btn-lg me-3 px-5">
                            <i class="bi bi-briefcase me-2"></i>View Open Positions
                        </a>
                        <a href="#applyForm" class="btn btn-outline-light btn-lg px-5">
                            <i class="bi bi-file-earmark-person me-2"></i>Submit Resume
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us -->
<section class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title text-center mb-60" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    WHY FARHAN LOGISTICS
                </span>
            </div>
            <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Why Work With Us</h2>
            <p style="font-size: 1.15rem; max-width: 850px; margin: 0 auto; color: #6c757d; line-height: 1.8;">
                We believe our people are our greatest asset. Here's what makes Farhan Logistics a great place to work
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 2px solid rgba(47,51,141,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 4px 15px rgba(0,0,0,0.08);"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='var(--primary-red)'; this.style.boxShadow='0 12px 35px rgba(236,32,37,0.2)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(47,51,141,0.1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)';">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 8px 25px rgba(236,32,37,0.3);">
                        <i class="bi bi-graph-up-arrow text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Career Growth</h4>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Clear career progression paths with regular performance reviews, promotions, and opportunities to lead major projects and teams.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 2px solid rgba(47,51,141,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 4px 15px rgba(0,0,0,0.08);"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='var(--primary-red)'; this.style.boxShadow='0 12px 35px rgba(236,32,37,0.2)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(47,51,141,0.1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)';">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 8px 25px rgba(47,51,141,0.3);">
                        <i class="bi bi-book text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Learning & Development</h4>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Continuous training programs, industry certifications, workshops, and mentorship from experienced logistics professionals.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 2px solid rgba(47,51,141,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 4px 15px rgba(0,0,0,0.08);"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='var(--primary-red)'; this.style.boxShadow='0 12px 35px rgba(236,32,37,0.2)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(47,51,141,0.1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)';">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 8px 25px rgba(236,32,37,0.3);">
                        <i class="bi bi-cash-stack text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Competitive Benefits</h4>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Attractive salary packages, performance bonuses, health insurance, and comprehensive benefits for you and your family.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 2px solid rgba(47,51,141,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 4px 15px rgba(0,0,0,0.08);"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='var(--primary-red)'; this.style.boxShadow='0 12px 35px rgba(236,32,37,0.2)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(47,51,141,0.1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)';">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 8px 25px rgba(47,51,141,0.3);">
                        <i class="bi bi-people text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Collaborative Culture</h4>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Work with diverse, talented teams in a supportive environment that values innovation, collaboration, and work-life balance.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 2px solid rgba(47,51,141,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 4px 15px rgba(0,0,0,0.08);"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='var(--primary-red)'; this.style.boxShadow='0 12px 35px rgba(236,32,37,0.2)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(47,51,141,0.1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)';">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #ec2025 0%, #c91d22 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 8px 25px rgba(236,32,37,0.3);">
                        <i class="bi bi-globe text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Global Exposure</h4>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Work on international projects, interact with global clients, and gain exposure to cutting-edge logistics technologies.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="h-100 p-4 rounded-3" 
                     style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); border: 2px solid rgba(47,51,141,0.1); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 4px 15px rgba(0,0,0,0.08);"
                     onmouseover="this.style.transform='translateY(-12px)'; this.style.borderColor='var(--primary-red)'; this.style.boxShadow='0 12px 35px rgba(236,32,37,0.2)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(47,51,141,0.1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.08)';">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-navy), #1e2256); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 8px 25px rgba(47,51,141,0.3);">
                        <i class="bi bi-award text-white" style="font-size: 2.5rem;"></i>
                    </div>
                    <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700;">Recognition & Rewards</h4>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Regular recognition programs, employee of the month awards, and incentives for outstanding performance and innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions -->
<section id="open-positions" class="py-100" style="background: linear-gradient(135deg, rgba(20, 24, 82, 0.03), rgba(47, 51, 141, 0.05));">
    <div class="container">
        <div class="section-title text-center mb-60" data-aos="fade-up">
            <div class="mb-3">
                <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                    CURRENT OPENINGS
                </span>
            </div>
            <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Open Positions</h2>
            <p style="font-size: 1.15rem; max-width: 850px; margin: 0 auto; color: #6c757d; line-height: 1.8;">
                Explore exciting career opportunities across various departments and locations
            </p>
        </div>

        <?php if (empty($jobs)): ?>
        <div class="text-center py-5" data-aos="fade-up">
            <i class="bi bi-briefcase" style="font-size: 4rem; color: #dee2e6;"></i>
            <h4 class="mt-3 text-muted">No Open Positions Currently</h4>
            <p class="text-muted">Check back soon for new opportunities or submit your resume below!</p>
        </div>
        <?php else: ?>
        <div class="row g-4">
            <?php 
            $delay = 100;
            foreach ($jobs as $job): 
                // Get icon based on department
                $icon_map = [
                    'Operations' => 'diagram-3',
                    'Sales' => 'graph-up',
                    'Customs' => 'shield-check',
                    'Customer Service' => 'headset',
                    'IT' => 'laptop',
                    'Finance' => 'calculator',
                    'HR' => 'people'
                ];
                $icon = $icon_map[$job['department']] ?? 'briefcase';
                
                // Get employment type badge
                $emp_type = ucwords(str_replace('_', ' ', $job['employment_type']));
                
                // Parse responsibilities and requirements
                $responsibilities = array_filter(explode("\n", $job['responsibilities']));
                $requirements = array_filter(explode("\n", $job['requirements']));
            ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                <div class="card h-100 border-0 shadow-lg" style="overflow: hidden; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); border-radius: 20px;"
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 45px rgba(0,0,0,0.15)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.12)';">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, <?= $delay % 200 === 0 ? '#ec2025 0%, #c91d22' : 'var(--primary-navy), #1e2256' ?> 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 20px rgba(<?= $delay % 200 === 0 ? '236,32,37' : '47,51,141' ?>,0.3);">
                                <i class="bi bi-<?= $icon ?> text-white" style="font-size: 2rem;"></i>
                            </div>
                            <span class="badge" style="background: linear-gradient(135deg, <?= $delay % 200 === 0 ? 'var(--primary-navy), #1e2256' : '#ec2025 0%, #c91d22' ?> 100%); font-size: 0.75rem; padding: 0.5rem 1rem; font-weight: 600;"><?= strtoupper($emp_type) ?></span>
                        </div>
                        <h4 class="mb-3" style="color: var(--primary-navy); font-weight: 700; font-size: 1.5rem;">
                            <?= htmlspecialchars($job['title']) ?>
                        </h4>
                        <div class="mb-3 d-flex flex-wrap gap-3">
                            <span class="text-muted"><i class="bi bi-geo-alt me-2" style="color: var(--primary-red);"></i><?= htmlspecialchars($job['location']) ?></span>
                            <?php if ($job['experience_required']): ?>
                            <span class="text-muted"><i class="bi bi-briefcase me-2" style="color: var(--primary-red);"></i><?= htmlspecialchars($job['experience_required']) ?></span>
                            <?php endif; ?>
                            <?php if ($job['salary_range']): ?>
                            <span class="text-muted"><i class="bi bi-cash me-2" style="color: var(--primary-red);"></i><?= htmlspecialchars($job['salary_range']) ?></span>
                            <?php endif; ?>
                        </div>
                        <p class="text-muted mb-3" style="line-height: 1.8;">
                            <?= htmlspecialchars($job['description']) ?>
                        </p>
                        <?php if (!empty($requirements)): ?>
                        <div class="mb-4">
                            <h6 class="mb-2" style="color: var(--primary-navy); font-weight: 600;">Key Requirements:</h6>
                            <ul class="list-unstyled small mb-0">
                                <?php foreach (array_slice($requirements, 0, 4) as $requirement): ?>
                                <li class="mb-1"><i class="bi bi-check-circle me-2" style="color: var(--primary-red);"></i><?= htmlspecialchars(trim($requirement, '• -')) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <a href="#applyForm" class="btn btn-primary-custom w-100" onclick="document.getElementById('position').value='<?= htmlspecialchars($job['title']) ?>'">
                            <i class="bi bi-file-earmark-person me-2"></i>Apply Now
                        </a>
                    </div>
                </div>
            </div>
            <?php 
            $delay += 100;
            endforeach; 
            ?>
        </div>
        <?php endif; ?>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <div class="p-5 rounded-3" style="background: rgba(236, 32, 37, 0.05); border: 2px dashed var(--primary-red);">
                <i class="bi bi-envelope-paper" style="font-size: 3rem; color: var(--primary-red);"></i>
                <h4 class="mt-3 mb-2" style="color: var(--primary-navy); font-weight: 700;">Don't See Your Perfect Role?</h4>
                <p class="text-muted mb-3" style="font-size: 1.05rem;">
                    We're always looking for talented individuals. Submit your resume for future opportunities.
                </p>
                <a href="#applyForm" class="btn btn-primary-custom btn-lg px-5">
                    <i class="bi bi-file-earmark-arrow-up me-2"></i>Submit Resume for Future Opportunities
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section id="applyForm" class="py-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50" data-aos="fade-up">
                    <div class="mb-3">
                        <span class="badge text-white px-4 py-2" style="background: linear-gradient(135deg, var(--primary-red), #c91d22); font-size: 0.8rem; letter-spacing: 1.5px; font-weight: 600; box-shadow: 0 4px 15px rgba(236, 32, 37, 0.3); display: inline-block;">
                            APPLICATION FORM
                        </span>
                    </div>
                    <h2 style="font-size: 2.75rem; font-weight: 700; color: var(--primary-navy);">Submit Your Application</h2>
                    <p style="font-size: 1.15rem; max-width: 750px; margin: 0 auto; color: #6c757d; line-height: 1.8;">
                        Fill out the form below and attach your resume. We'll review your application and get back to you soon.
                    </p>
                </div>

                <div class="card border-0 shadow-lg" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body p-5">
                        <div id="alertContainer"></div>
                        
                        <form id="careerForm" class="needs-validation" novalidate enctype="multipart/form-data">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label" style="font-weight: 600; color: var(--primary-navy);">First Name *</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="John">
                                    <div class="invalid-feedback">Please provide your first name.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Last Name *</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Doe">
                                    <div class="invalid-feedback">Please provide your last name.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="john.doe@email.com">
                                    <div class="invalid-feedback">Please provide a valid email.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="phone" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="+971 50 XXX XXXX">
                                    <div class="invalid-feedback">Please provide your phone number.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="position" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Position Applied For *</label>
                                    <select class="form-select" id="position" name="position" required>
                                        <option value="">Select Position</option>
                                        <option value="Logistics Operations Manager">Logistics Operations Manager</option>
                                        <option value="Sales Executive - Freight Services">Sales Executive - Freight Services</option>
                                        <option value="Customs Clearance Specialist">Customs Clearance Specialist</option>
                                        <option value="Customer Service Representative">Customer Service Representative</option>
                                        <option value="Other">Other Position</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a position.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="experience_years" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Years of Experience *</label>
                                    <select class="form-select" id="experience_years" name="experience_years" required>
                                        <option value="">Select Experience</option>
                                        <option value="0">Fresh Graduate</option>
                                        <option value="1">1-2 years</option>
                                        <option value="2">2-3 years</option>
                                        <option value="3">3-5 years</option>
                                        <option value="5">5-10 years</option>
                                        <option value="10">10+ years</option>
                                    </select>
                                    <div class="invalid-feedback">Please select your experience level.</div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="current_company" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Current/Last Company</label>
                                    <input type="text" class="form-control" id="current_company" name="current_company" placeholder="Company Name">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="education" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Highest Education</label>
                                    <input type="text" class="form-control" id="education" name="education" placeholder="e.g., Bachelor's in Business">
                                </div>
                                
                                <div class="col-12">
                                    <label for="linkedin_url" class="form-label" style="font-weight: 600; color: var(--primary-navy);">LinkedIn Profile URL</label>
                                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="https://linkedin.com/in/yourprofile">
                                </div>
                                
                                <div class="col-12">
                                    <label for="cover_letter" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Cover Letter / Why You Want to Join Us</label>
                                    <textarea class="form-control" id="cover_letter" name="cover_letter" rows="6" placeholder="Tell us about yourself, your experience, and why you'd be a great fit for this role..."></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <label for="resume" class="form-label" style="font-weight: 600; color: var(--primary-navy);">Upload Resume/CV * <small class="text-muted">(PDF or DOC, Max 5MB)</small></label>
                                    <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                    <div class="invalid-feedback">Please upload your resume.</div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="agreement" name="agreement" required>
                                        <label class="form-check-label" for="agreement">
                                            I agree to the processing of my personal data for recruitment purposes *
                                        </label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary-custom btn-lg px-5">
                                        <i class="bi bi-send me-2"></i>Submit Application
                                    </button>
                                    <p class="text-muted mt-3 mb-0 small">
                                        <i class="bi bi-shield-check me-1"></i>Your information will be kept confidential and used only for recruitment purposes.
                                    </p>
                                </div>
                            </div>
                        </form>
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
                    <i class="bi bi-people-fill text-white" style="font-size: 4rem; opacity: 0.9;"></i>
                </div>
                <h2 class="text-white mb-4" style="font-size: 2.75rem; font-weight: 700; text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                    Questions About Working With Us?
                </h2>
                <p class="text-white mb-5" style="font-size: 1.2rem; line-height: 1.9; opacity: 0.95; text-shadow: 0 1px 10px rgba(0,0,0,0.2); max-width: 750px; margin-left: auto; margin-right: auto;">
                    Get in touch with our HR team to learn more about career opportunities, company culture, and the application process.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" class="btn btn-light btn-lg px-5" 
                       style="font-weight: 600; box-shadow: 0 8px 25px rgba(0,0,0,0.2);" 
                       onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 35px rgba(0,0,0,0.3)';" 
                       onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.2)';">
                        <i class="bi bi-envelope me-2"></i>Contact HR Team
                    </a>
                    <a href="#applyForm" class="btn btn-outline-light btn-lg px-5" 
                       style="font-weight: 600; border-width: 2px;" 
                       onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.transform='translateY(-3px)';" 
                       onmouseout="this.style.background='transparent'; this.style.transform='translateY(0)';">
                        <i class="bi bi-arrow-up-circle me-2"></i>Back to Application
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const careerForm = document.getElementById('careerForm');
    
    careerForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        if (!careerForm.checkValidity()) {
            e.stopPropagation();
            careerForm.classList.add('was-validated');
            return;
        }
        
        const formData = new FormData(careerForm);
        const submitBtn = careerForm.querySelector('button[type="submit"]');
        const alertContainer = document.getElementById('alertContainer');
        
        // Disable submit button
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Submitting...';
        
        try {
            const response = await fetch('/handlers/career_handler.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                alertContainer.innerHTML = `
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-2"></i>
                        <strong>Success!</strong> ${result.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;
                careerForm.reset();
                careerForm.classList.remove('was-validated');
                
                // Scroll to alert
                alertContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            } else {
                alertContainer.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <strong>Error!</strong> ${result.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `;
            }
        } catch (error) {
            alertContainer.innerHTML = `
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <strong>Error!</strong> Something went wrong. Please try again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="bi bi-send me-2"></i>Submit Application';
        }
    });
});
</script>

<?php include 'includes/quote-widget.php'; ?>
<?php include 'includes/footer.php'; ?>
