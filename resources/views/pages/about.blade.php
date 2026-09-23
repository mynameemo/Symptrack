
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
    <section class="py-5" style="background: linear-gradient(135deg, var(--teal-dark) 0%, var(--teal) 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="color:#fff;">Our Values</h2>
                <p class="lead" style="color:rgba(255,255,255,.8);">Guiding principles that shape everything we do</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card-1">
                        <div class="feature-icon" style="background: linear-gradient(135deg, var(--ink), #2d3650);">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4>User-Centered</h4>
                        <p>We put our users first in everything we do, creating intuitive experiences that fit seamlessly into daily life.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card-2">
                        <div class="feature-icon" style="background: linear-gradient(135deg, var(--gold), #a87830);">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h4>Privacy First</h4>
                        <p>Your health data is yours alone. We implement robust security measures to keep your information safe and private.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card-3">
                        <div class="feature-icon" style="background: linear-gradient(135deg, var(--teal-light), var(--teal));">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h4>Innovation</h4>
                        <p>We're constantly exploring new ways to improve and enhance your health tracking experience.</p>
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
    <section class="team-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="lead" style="color:var(--muted);">The passionate people behind SympTrack</p>
            </div>

            <style>
                .team-section { background: var(--bg); }

                /* Team card scene */
                .team-card-scene {
                    perspective: 1000px;
                    height: 380px;
                }
                .team-card-flip {
                    width: 100%; height: 100%;
                    position: relative;
                    transform-style: preserve-3d;
                    transition: transform .65s cubic-bezier(.4,0,.2,1);
                    cursor: pointer;
                }
                .team-card-scene:hover .team-card-flip {
                    transform: rotateY(180deg);
                }
                .team-card-front,
                .team-card-back {
                    position: absolute; inset: 0;
                    backface-visibility: hidden;
                    border-radius: 22px;
                    overflow: hidden;
                    box-shadow: 0 8px 32px rgba(13,115,119,.13);
                }

                /* FRONT */
                .team-card-front {
                    background: #fff;
                    display: flex; flex-direction: column; align-items: center;
                }
                .team-card-front .team-img-wrap {
                    width: 100%; height: 200px; overflow: hidden; flex-shrink: 0;
                    position: relative;
                }
                .team-card-front .team-img-wrap img {
                    width: 100%; height: 100%; object-fit: cover;
                    transition: transform .5s ease;
                }
                .team-card-scene:hover .team-card-front .team-img-wrap img {
                    transform: scale(1.05);
                }
                .team-card-front .team-img-wrap::after {
                    content: '';
                    position: absolute; bottom: 0; left: 0; right: 0; height: 60px;
                    background: linear-gradient(to top, #fff, transparent);
                }
                .team-card-front .tc-body {
                    padding: 1.4rem 1.5rem 1rem;
                    text-align: center; flex: 1;
                }
                .team-card-front .tc-name {
                    font-family: 'DM Serif Display', serif;
                    font-size: 1.25rem; color: var(--ink); margin-bottom: .25rem;
                }
                .team-card-front .tc-role {
                    font-size: .82rem; font-weight: 700; letter-spacing: .08em;
                    text-transform: uppercase;
                    padding: .3rem .9rem; border-radius: 50px; display: inline-block;
                    margin-bottom: .9rem;
                }
                .tc-role-teal  { background: var(--mint); color: var(--teal-dark); }
                .tc-role-gold  { background: var(--gold-light); color: #8a6020; }
                .tc-role-ink   { background: #eef0f5; color: var(--ink); }
                .team-card-front .tc-hint {
                    font-size: .78rem; color: var(--muted);
                    display: flex; align-items: center; gap: .4rem; justify-content: center;
                }
                .team-card-front .tc-hint i { font-size: .9rem; }

                /* accent stripe at top of each card */
                .team-card-front::before {
                    content: ''; position: absolute;
                    top: 0; left: 0; right: 0; height: 4px;
                    z-index: 2;
                }
                .accent-teal .team-card-front::before { background: linear-gradient(90deg, var(--teal), var(--teal-light)); }
                .accent-gold .team-card-front::before { background: linear-gradient(90deg, var(--gold), #e8c060); }
                .accent-ink  .team-card-front::before { background: linear-gradient(90deg, var(--ink), #3a4266); }

                /* BACK */
                .team-card-back {
                    transform: rotateY(180deg);
                    display: flex; flex-direction: column; justify-content: center;
                    align-items: center; padding: 2rem;
                    text-align: center; color: #fff;
                }
                .accent-teal .team-card-back { background: linear-gradient(145deg, var(--teal-dark), var(--teal)); }
                .accent-gold .team-card-back { background: linear-gradient(145deg, #7a5018, var(--gold)); }
                .accent-ink  .team-card-back { background: linear-gradient(145deg, #0e1220, var(--ink)); }

                .team-card-back .tc-back-avatar {
                    width: 80px; height: 80px; border-radius: 50%;
                    border: 3px solid rgba(255,255,255,.5);
                    object-fit: cover; margin-bottom: 1.1rem;
                    box-shadow: 0 4px 16px rgba(0,0,0,.25);
                }
                .team-card-back .tc-back-name {
                    font-family: 'DM Serif Display', serif;
                    font-size: 1.2rem; margin-bottom: .3rem;
                }
                .team-card-back .tc-back-bio {
                    font-size: .88rem; line-height: 1.65;
                    color: rgba(255,255,255,.85);
                    margin-bottom: 1.2rem;
                }
                .team-card-back .tc-social {
                    display: flex; gap: .7rem; justify-content: center;
                }
                .team-card-back .tc-social a {
                    width: 38px; height: 38px; border-radius: 50%;
                    background: rgba(255,255,255,.18);
                    display: flex; align-items: center; justify-content: center;
                    color: #fff; font-size: 1rem;
                    transition: background .25s;
                    text-decoration: none;
                }
                .team-card-back .tc-social a:hover {
                    background: rgba(255,255,255,.35);
                }
            </style>

            <div class="row g-4 justify-content-center">

                <!-- Sarah Johnson -->
                <div class="col-md-4">
                    <div class="team-card-scene">
                        <div class="team-card-flip accent-teal">
                            <div class="team-card-front">
                                <div class="team-img-wrap">
                                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson">
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Sarah Johnson</div>
                                    <span class="tc-role tc-role-teal">CEO & Founder</span>
                                    <div class="tc-hint"><i class="bi bi-arrow-repeat"></i> Hover to learn more</div>
                                </div>
                            </div>
                            <div class="team-card-back">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" class="tc-back-avatar" alt="Sarah Johnson">
                                <div class="tc-back-name">Sarah Johnson</div>
                                <p class="tc-back-bio">Visionary leader with 10+ years in health-tech. Sarah founded SympTrack to bridge the gap between patients and better health outcomes.</p>
                                <div class="tc-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Michael Chen -->
                <div class="col-md-4">
                    <div class="team-card-scene">
                        <div class="team-card-flip accent-ink">
                            <div class="team-card-front">
                                <div class="team-img-wrap">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Michael Chen</div>
                                    <span class="tc-role tc-role-ink">Lead Developer</span>
                                    <div class="tc-hint"><i class="bi bi-arrow-repeat"></i> Hover to learn more</div>
                                </div>
                            </div>
                            <div class="team-card-back">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="tc-back-avatar" alt="Michael Chen">
                                <div class="tc-back-name">Michael Chen</div>
                                <p class="tc-back-bio">Full-stack architect passionate about clean code and performance. Michael leads all technical decisions and infrastructure at SympTrack.</p>
                                <div class="tc-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emily Davis -->
                <div class="col-md-4">
                    <div class="team-card-scene">
                        <div class="team-card-flip accent-gold">
                            <div class="team-card-front">
                                <div class="team-img-wrap">
                                    <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Emily Davis">
                                </div>
                                <div class="tc-body">
                                    <div class="tc-name">Emily Davis</div>
                                    <span class="tc-role tc-role-gold">UI/UX Designer</span>
                                    <div class="tc-hint"><i class="bi bi-arrow-repeat"></i> Hover to learn more</div>
                                </div>
                            </div>
                            <div class="team-card-back">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" class="tc-back-avatar" alt="Emily Davis">
                                <div class="tc-back-name">Emily Davis</div>
                                <p class="tc-back-bio">Award-winning designer who believes great health tools start with great design. Emily crafts every pixel of the SympTrack experience.</p>
                                <div class="tc-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-dribbble"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--teal-dark) 0%, var(--ink) 100%);">
        <div class="container text-center py-4">
            <h2 class="mb-4" style="color:#fff;">Ready to Take Control of Your Health?</h2>
            <p class="lead mb-4" style="color:rgba(255,255,255,.8);">Join thousands of users who are already tracking their symptoms with SympTrack.</p>
            <a href="register.html" class="btn btn-lg me-3" style="background:var(--gold);color:#fff;border:none;border-radius:50px;padding:.75rem 2rem;font-weight:700;">Get Started</a>
            <a href="contact.html" class="btn btn-lg" style="background:rgba(255,255,255,.15);color:#fff;border:2px solid rgba(255,255,255,.4);border-radius:50px;padding:.75rem 2rem;font-weight:700;">Contact Us</a>
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