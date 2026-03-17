
@extends('layouts.frontend')
@section('content')

<body>

    
<!-- Floating Background Elements -->
    <!--div class="floating floating-1"></div>
    <div class="floating floating-2"></div-->
    
    <!-- Hero Section -->
    <section class="hero-below-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content text-white">
                        <h1 class="display-4 fw-bold mb-4">About SympTrack</h1>
                        <p class="lead mb-4">Your trusted partner in health monitoring and symptom tracking</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Our Mission -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="lead">To empower individuals to take an active role in their health journey through intuitive symptom tracking and data-driven insights.</p>
                    <p>We believe that everyone deserves access to tools that help them understand their body better. Our mission is to break down the barriers between patients and their health data, making it easier to communicate with healthcare providers and make informed decisions.</p>
                    <p>By combining cutting-edge technology with a user-centered design, we're creating a future where health tracking is seamless, insightful, and accessible to all.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" 
                         alt="Mission" 
                         class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

   <!-- Our Values -->
    <section class="py-5" style="background-color: #15623aff">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Values</h2>
                <p class="lead">Guiding principles that shape everything we do</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card-1">
                        <div class="feature-icon" style= "background: linear-gradient(135deg, #4e73df, #224abe)";>
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 style="color: black">User-Centered</h4>
                        <p style="color: black;">We put our users first in everything we do, creating intuitive experiences that fit seamlessly into daily life.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card-2" style="background-color: #035c72;">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #a01cc8ff, #600c6fff);">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h4 style="color: black;">Privacy First</h4>
                        <p style="color: black;">Your health data is yours alone. We implement robust security measures to keep your information safe and private.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card-3" style="background-color: #700491;">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #f6c23e, #dda20a);">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4 style="color: black;">Innovation</h4>
                        <p style="color: black;">We're constantly exploring new ways to improve and enhance your health tracking experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter -->
    <!--section class="stats-counter">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="stat-number" data-count="10000">0</div>
                        <div class="stat-label">Active Users</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item">
                        <div class="stat-number" data-count="50">0</div>
                        <div class="stat-label">Countries</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number" data-count="500000">0</div>
                        <div class="stat-label">Symptoms Tracked</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number" data-count="99">0<small>%</small></div>
                        <div class="stat-label">User Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section-->

    <!-- Our Team -->
    <section class="team">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="lead">The passionate people behind SympTrack</p>
            </div>
            
            <div class="row g-4">

                 <div class="col-md-4">
                    <div class="feature-card text-center">
                         <img src="https://randomuser.me/api/portraits/women/43.jpg" class="img-fluid team-img" alt="Team Member">
                        <h4 style="color: #224abe;">Sarah Johnson</h4>
                        <p style="color: #224abe;">CEO & Founder</p>
                        <div class="team-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-envelope"></i></a>
                        </div>
                        <p class="small">Full-stack developer with a passion for creating seamless user experiences.</p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="feature-card text-center">
                         <img src="https://randomuser.me/api/portraits/men/32.jpg" class="img-fluid team-img" alt="Team Member">
                        <h4 style="color: #224abe;">Michael Chen</h4>
                        <p style="color: #224abe;">Lead Developer</p>
                        <div class="team-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-envelope"></i></a>
                        </div>
                        <p class="small">Full-stack developer with a passion for creating seamless user experiences.</p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="feature-card text-center">
                         <img src="https://randomuser.me/api/portraits/women/28.jpg" class="img-fluid team-img" alt="Team Member">
                        <h4 style="color: #224abe;">Emily Davis</h4>
                        <p style="color: #224abe;">UI/UX Designer</p>
                        <div class="team-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-envelope"></i></a>
                        </div>
                        <p class="small">Full-stack developer with a passion for creating seamless user experiences.</p>
                    </div>
                </div>
                 <!--div class="col-md-4">
                    <div class="feature-card text-center">
                         <img src="https://randomuser.me/api/portraits/men/75.jpg" class="img-fluid team-img" alt="Team Member">
                        <h4 style="color: #224abe;">David Kim</h4>
                        <p style="color: #224abe;">Support Lead</p>
                        <div class="team-social">
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-envelope"></i></a>
                        </div>
                        <p class="small">Full-stack developer with a passion for creating seamless user experiences.</p>
                    </div>
                </div-->
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(137, 56, 159, 0.9), rgba(240, 248, 255, 0.9));">
        <div class="container text-center py-4">
            <h2 class="mb-4" style="color: black;">Ready to Take Control of Your Health?</h2>
            <p class="lead mb-4">Join thousands of users who are already tracking their symptoms with SympTrack.</p>
            <a href="register.html" class="btn btn-outline-primary btn-lg me-3">Get Started</a>
            <a href="contact.html" class="btn btn-outline-primary btn-lg">Contact Us</a>
        </div>
    </section>    
    



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Add active class to current nav item
        const currentLocation = location.href;
        const menuItems = document.querySelectorAll('.nav-link');
        const menuLength = menuItems.length;
        
        for (let i = 0; i < menuLength; i++) {
            if (menuItems[i].href === currentLocation) {
                menuItems[i].classList.add('active');
            }
        }
        
        // Animate stats counter
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                obj.textContent = value.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Start counter when stats section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = document.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const target = parseInt(stat.getAttribute('data-count'));
                        animateValue(stat, 0, target, 2000);
                    });
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector('.stats-counter'));
    </script>
</body>
</html>


@endsection