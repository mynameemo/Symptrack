@extends('layouts.frontend')
@section('content')


       <!-- Hero Section -->
    <section class="hero-below-nav">

        <div class="hero-content">
            <h1 class="display-4 fw-bold mb-4">Track Your Health Journey</h1>
            <p class="lead mb-4">
                Monitor your symptoms, identify patterns, and take control of your well-being with our intuitive health tracking platform.
            </p>      
        </div>

        <div class="custom-carousel">
            <div class="custom-carousel-track">
                <div class="custom-carousel-item">
                    <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=1600" alt="">
                    <div class="carousel-overlay"></div>
                </div>
                <div class="custom-carousel-item">
                       <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=1600" alt="Medical 1">
                    <div class="carousel-overlay"></div>
                </div>
                <div class="custom-carousel-item">
                    <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?w=1600" alt="Medical 2">
                    <div class="carousel-overlay"></div>
                </div>

                <button class="carousel-btn prev">&#10094;</button>
                <button class="carousel-btn next">&#10095;</button>
            </div>


            <!-- Navigation Buttons -->
            <button class="carousel-btn prev">&#10094;</button>
            <button class="carousel-btn next">&#10095;</button>
        </div>

        <div class="d-flex flex-wrap gap-3 mt-4 text-center">
            <a href="register.html" class="btn btn-primary btn-lg">Start Tracking Now</a>
            <a href="about.html" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>

    </section>

        
<!-- About Us -->
 
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">

            <!-- TEXT (LEFT) -->
            <div class="col-lg-6 order-lg-1 order-2">
                <h2 class="section-title">About Us</h2>
                <p class="lead">
                    We are dedicated to transforming healthcare through technology, making it easier for individuals to understand and manage their well-being.
                </p>
                <p>
                    Our platform is designed to simplify symptom tracking, allowing users to monitor their health patterns over time and gain meaningful insights. We focus on creating intuitive tools that bridge the gap between patients and healthcare providers.
                </p>
                <p>
                    By leveraging modern web technologies and user-focused design, we aim to build a system that is not only powerful but also accessible and easy to use for everyone.
                </p>
            </div>

            <!-- IMAGE (RIGHT) -->
            <div class="col-lg-6 mb-4 mb-lg-0 order-lg-2 order-1">
                <img src="https://images.unsplash.com/photo-1580281657527-47f249e8f4df?w=1740" 
                     alt="About Us" 
                     class="img-fluid rounded-3 shadow">
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



<section class="py-5" style="background-color: #0c406767">

 <style>
    .feature-card-1 {
    position: relative;
    height: 100%;
    padding: 2.4rem 2rem;
    border-radius: 22px;

    /* Glass look */
    background: linear-gradient(
        145deg,
        rgba(255, 255, 255, 0.85),
        rgba(255, 255, 255, 0.65)
    );
    backdrop-filter: blur(14px);

    /* Depth */
    box-shadow:
        0 25px 45px rgba(0, 0, 0, 0.08),
        inset 0 1px 1px rgba(255, 255, 255, 0.6);

    border: 1px solid rgba(255, 255, 255, 0.35);

    text-align: center;
    overflow: hidden;

    transition: 
        transform 0.6s cubic-bezier(.175,.885,.32,1.275),
        box-shadow 0.6s ease;
    }

    /*  GLOW RING */
    .feature-card-1::before {
        content: "";
        position: absolute;
        inset: -1px;
        border-radius: inherit;
        background: linear-gradient(
            135deg,
            #4e73df,
            #1cc88a,
            #9d2fec
        );
        opacity: 0.35;
        filter: blur(14px);
        z-index: -1;
    }

    /*  LIGHT SWEEP */
    .feature-card-1::after {
        content: "";
        position: absolute;
        top: -60%;
        left: -60%;
        width: 200%;
        height: 200%;
        background: radial-gradient(
            circle,
            rgba(255,255,255,0.35),
            transparent 60%
        );
        transform: rotate(25deg);
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    /* HOVER INTERACTION */
    .feature-card-1:hover {
        transform: translateY(-52px) scale(1.04);
        box-shadow:
            0 40px 80px rgba(0,0,0,0.18),
            0 0 60px rgba(78,115,223,0.35);
    }

    .feature-card-1:hover::after {
        opacity: 1;
    }

    /*  CONTENT FEEL */
    .feature-card-1 h2 {
        font-weight: 700;
        margin-bottom: 0.8rem;
        color: #000000;
    }

    .feature-card-1 p {
        line-height: 1.6;
        opacity: 0.9;
    }

    .feature-card-1:nth-child(1) { transform: rotate(-4deg); }
    .feature-card-1:nth-child(2) { transform: rotate(1deg); }
    .feature-card-1:nth-child(3) { transform: rotate(-1deg); }

    .feature-card-1:hover {
        transform: translateY(-52px) scale(1.11) rotate(3deg);
    }

    .feature-card-2 {
    position: relative;
    height: 100%;
    padding: 2.4rem 2rem;
    border-radius: 22px;

    /* Glass look */
    background: linear-gradient(
        145deg,
        rgba(255, 255, 255, 0.85),
        rgba(255, 255, 255, 0.65)
    );
    backdrop-filter: blur(14px);

    /* Depth */
    box-shadow:
        0 25px 45px rgba(0, 0, 0, 0.08),
        inset 0 1px 1px rgba(255, 255, 255, 0.6);

    border: 1px solid rgba(255, 255, 255, 0.35);

    text-align: center;
    overflow: hidden;

    transition: 
        transform 0.6s cubic-bezier(.175,.885,.32,1.275),
        box-shadow 0.6s ease;
    }

    /*  GLOW RING */
    .feature-card-2::before {
        content: "";
        position: absolute;
        inset: -1px;
        border-radius: inherit;
        background: linear-gradient(
            135deg,
            #1cc88a,
            #4e73df,
            #9d2fec
        );
        opacity: 0.35;
        filter: blur(14px);
        z-index: -1;
    }

    /* LIGHT SWEEP */
    .feature-card-2::after {
        content: "";
        position: absolute;
        top: -60%;
        left: -60%;
        width: 200%;
        height: 200%;
        background: radial-gradient(
            circle,
            rgba(255,255,255,0.35),
            transparent 60%
        );
        transform: rotate(25deg);
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    /*  HOVER INTERACTION */
    .feature-card-2:hover {
        transform: translateY(-52px) scale(1.04);
        box-shadow:
            0 40px 80px rgba(0,0,0,0.18),
            0 0 60px rgba(78,115,223,0.35);
    }

    .feature-card-2:hover::after {
        opacity: 1;
    }

    /*  CONTENT FEEL */
    .feature-card-2 h4 {
        font-weight: 700;
        margin-bottom: 0.8rem;
    }

    .feature-card-2 p {
        line-height: 1.6;
        opacity: 0.9;
    }

    .feature-card-2:nth-child(1) { transform: rotate(-2deg); }
    .feature-card-2:nth-child(2) { transform: rotate(1deg); }
    .feature-card-2:nth-child(3) { transform: rotate(-1deg); }

    .feature-card-2:hover {
        transform: translateY(-52px) scale(1.11) rotate(3deg);
    }


    .feature-card-3 {
        position: relative;
        height: 100%;
        padding: 2.4rem 2rem;
        border-radius: 22px;
        color: black;

        /* Glass look */
        background: linear-gradient(
            145deg,
            rgba(255, 255, 255, 0.85),
            rgba(255, 255, 255, 0.65)
        );
        backdrop-filter: blur(14px);

        /* Depth */
        box-shadow:
            0 25px 45px rgba(0, 0, 0, 0.08),
            inset 0 1px 1px rgba(255, 255, 255, 0.6);

        border: 1px solid rgba(255, 255, 255, 0.35);

        text-align: center;
        overflow: hidden;

        transition: 
            transform 0.6s cubic-bezier(.175,.885,.32,1.275),
            box-shadow 0.6s ease;
    }

    /*  GLOW RING */
    .feature-card-3::before {
    content: "";
    position: absolute;
    inset: -1px;
    border-radius: inherit;
    background: linear-gradient(
        135deg,
        #9d2fec,
        #4e73df,
        #1cc88a
        
    );
    opacity: 0.35;
    filter: blur(14px);
    z-index: -1;
    }

    /* LIGHT SWEEP */
    .feature-card-3::after {
        content: "";
        position: absolute;
        top: -60%;
        left: -60%;
        width: 200%;
        height: 200%;
        background: radial-gradient(
            circle,
            rgba(255,255,255,0.35),
            transparent 60%
        );
        transform: rotate(25deg);
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    /*  HOVER INTERACTION */
    .feature-card-3:hover {
        transform: translateY(-52px) scale(1.04);
        box-shadow:
            0 40px 80px rgba(0,0,0,0.18),
            0 0 60px rgba(78,115,223,0.35);
    }

    .feature-card-3:hover::after {
        opacity: 1;
    }

    /* CONTENT FEEL */
    .feature-card-3 h4 {
        font-weight: 700;
        margin-bottom: 0.8rem;
    }

    .feature-card-3 p {
        line-height: 1.6;
        opacity: 0.9;
    }

    .feature-card-3:nth-child(1) { transform: rotate(4deg); }
    .feature-card-3:nth-child(2) { transform: rotate(1deg); }
    .feature-card-3:nth-child(3) { transform: rotate(-1deg); }

    .feature-card-3:hover {
        transform: translateY(-52px) scale(1.11) rotate(3deg);
    }

    
    </style>
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

    <!-- What to expect -->
    <section id="features" class="py-5 my-5" style="background-color: #c3f9dd;">
        <style>
    .feature-card {
    /* Base look */
    background: linear-gradient(
        135deg,
        rgba(78, 115, 223, 0.95),
        rgba(28, 200, 138, 0.95),
        rgba(148, 62, 246, 0.95)
    );
    backdrop-filter: blur(12px);
    
    border-radius: 16px 16px 0 0;
    padding: 1.5rem;
    text-align: center;
    color: #ffffff;

    /* Collapsed banner state */
    height: 90px; /* increased so heading is visible */
    overflow: hidden;
    cursor: pointer;

    position: relative;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.18);
    transition:
        height 0.75s cubic-bezier(0.25, 1, 0.5, 1),
        box-shadow 0.6s ease,
        transform 0.6s ease;
}

/* Hide everything EXCEPT the heading */
.feature-card > *:not(h4) {
    opacity: 0;
    transform: translateY(-10px);
    transition: opacity 0.5s ease 0.2s, transform 0.5s ease 0.2s;
}

/* Keep heading always visible */
.feature-card h4 {
    opacity: 1;
    transform: translateY(10px);
    margin: 0;
    margin-top: -100px;
}

/* Top stitched ribbon */
.feature-card::before {
    content: '';
    position: absolute;
    top: 8px;
    left: 12px;
    right: 12px;
    height: 5px;
    background: linear-gradient(90deg, #ffffffaa, #ffffff55);
    border-radius: 3px;
}

/* Wavy banner bottom */
.feature-card::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 50px;
    background: inherit;

    clip-path: polygon(
        0% 40%,
        8% 55%,
        16% 35%,
        24% 55%,
        32% 38%,
        40% 60%,
        48% 40%,
        56% 60%,
        64% 38%,
        72% 55%,
        80% 35%,
        88% 55%,
        100% 40%,
        100% 100%,
        0 100%
    );

    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25);
    transition: transform 0.7s ease;
}

/* Hover: banner drops & reveals content */
.feature-card:hover {
    height: 300px;
    transform: translateY(-6px);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
    animation: clothSway 2.5s ease-in-out infinite alternate;
    h4{
     margin-top: 20px;
    } 
   
}

/* Reveal all content on hover */
.feature-card:hover > * {
    opacity: 1;
    transform: translateY(0);
}

/* Bottom cloth motion */
.feature-card:hover::after {
    animation: clothWave 2s ease-in-out infinite alternate;
}

/* Cloth sway animation */
@keyframes clothSway {
    0% { transform: rotateZ(-1.5deg); }
    50% { transform: rotateZ(1.5deg); }
    100% { transform: rotateZ(-1.5deg); }
}

/* Bottom wave animation */
@keyframes clothWave {
    0% { transform: translateY(0); }
    50% { transform: translateY(6px); }
    100% { transform: translateY(0); }
}

h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
    color: white;
}

.feature-icon {
    width: 70px;
    height: 70px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.75rem;
    color: white;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
}

.text-center {
    color: white;
}
        </style>
        <div class="container">
            <div class="text-center mb-5" >
                <h2 class="section-title">What to expect from SympTrack</h2>
                <p class="lead" style="color: #2c3e50;">Everything you need to track your health in one place</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card" style="background-color: #05aa58;">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #a564e5, #0fafa2);">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                        <h4 class="text-center mb-3">Easy Logging</h4>
                        <p class="text-center">Quickly add symptoms with just a few taps. Rate severity and add notes in seconds.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card" style="background-color: #0573aa;">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #f0b160, #6311aa);">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h4 class="text-center mb-3">Track Progress</h4>
                        <p class="text-center">Visualize your health data with beautiful, easy-to-understand charts and graphs.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card" style="background-color: #72036b;">
                        <div class="feature-icon" style="background: linear-gradient(135deg, #f6c23e, #dda20a);">
                            <i class="bi bi-bell"></i>
                        </div>
                        <h4 class="text-center mb-3">Smart Reminders</h4>
                        <p class="text-center">Never forget to track with customizable reminders that work for your schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="py-5 welcome-contact-section" style="background: linear-gradient(135deg, var(--teal-dark) 0%, var(--teal) 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="color:#fff;">Contact Information</h2>
            <p style="color:rgba(255,255,255,.8);">Feel free to reach out to us through any of these channels</p>
        </div>

        <!-- Hover zone wraps both left cards and right form -->
        <div class="welcome-contact-hover-zone welcome-contact-inner">

            <!-- Left: contact info cards + hover button -->
            <div class="welcome-contact-left">

                <div class="con-card">
                    <div class="con-icon location">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="con-text">
                        <h4>Our Location</h4>
                        <p>Westlands<br>Nairobi</p>
                        <a href="#">Get Directions</a>
                    </div>
                </div>

                <div class="email-card">
                    <div style="background: linear-gradient(135deg, var(--gold), #a87830);" class="email-icon location">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="email-text">
                        <h4>Email Us</h4>
                        <p>info@symptrack.com<br>support@symptrack.com</p>
                        <a href="#">Send Email</a>
                    </div>
                </div>

                <div class="call-card">
                    <div style="background: linear-gradient(135deg, var(--ink), #2d3650);" class="call-icon location">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="call-text">
                        <h4>Call Us</h4>
                        <p>+254 725 039 848<br>Monday - Friday: 9am - 5pm</p>
                        <a href="#">Call Now</a>
                    </div>
                </div>

                <!-- Hover trigger button -->
                <div class="welcome-contact-btn-wrap mt-2">
                    <button class="welcome-contact-btn">
                        <i class="bi bi-send"></i> Contact Us
                    </button>
                    <small style="display:block; color:rgba(255,255,255,.7); margin-top:.4rem; font-size:.78rem;">Hover to send us a message</small>
                </div>
            </div>

            <!-- Right: form panel (revealed on hover) -->
            <div class="welcome-contact-right">
                <h3>Send Us a Message</h3>
                <form class="con-form">
                    <input type="text" placeholder="Your Name">
                    <input type="email" placeholder="Email Address">
                    <textarea placeholder="Your Message"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>

        </div><!-- /.welcome-contact-hover-zone -->

        <!-- Map Section -->
        <div class="py-5">
            <div class="container">
                <h3 style="color: white; margin-bottom: 60px; text-align: center;">Find our location using this map guide</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.158072141783!2d-122.40158368468245!3d37.78688297975799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807f8f4b9f1d%3A0xe8d8f6d6b1b6b4b5!2s123%20Health%20St%2C%20San%20Francisco%2C%20CA%2094107%2C%20USA!5e0!3m2!1sen!2suk!4v1648123456789" 
                                    allowfullscreen="" 
                                    loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</section>


    <!-- How It Works -->
   <section class="hiw2-section">
    <div class="container">
        <div class="hiw2-head">
            <h2 class="hiw2-title">How it works</h2>
            <p class="hiw2-sub">Three steps between you and understanding your health patterns.</p>
        </div>

        <div class="hiw2-track">
            <svg class="hiw2-pulse" viewBox="0 0 1000 200" preserveAspectRatio="none" aria-hidden="true">
                <path class="hiw2-pulse-path" d="M0,100 L220,100 L250,40 L280,160 L310,70 L340,100 L620,100 L650,40 L680,160 L710,70 L740,100 L1000,100" />
            </svg>

            <div class="hiw2-stop hiw2-stop-up" style="left:14%">
                <div class="hiw2-dot"></div>
                <div class="hiw2-content">
                    <i class="bi bi-person-plus-fill hiw2-icon"></i>
                    <h4>Create your account</h4>
                    <p>Sign up in under a minute with just your email and a password.</p>
                </div>
            </div>

            <div class="hiw2-stop hiw2-stop-down" style="left:50%">
                <div class="hiw2-dot hiw2-dot-gold"></div>
                <div class="hiw2-content">
                    <i class="bi bi-clipboard2-pulse-fill hiw2-icon hiw2-icon-gold"></i>
                    <h4>Log your symptoms</h4>
                    <p>Record what you're feeling as it happens — severity, triggers, notes.</p>
                </div>
            </div>

            <div class="hiw2-stop hiw2-stop-up" style="left:86%">
                <div class="hiw2-dot"></div>
                <div class="hiw2-content">
                    <i class="bi bi-bar-chart-line-fill hiw2-icon"></i>
                    <h4>See the patterns</h4>
                    <p>Watch trends surface across your history so you can act on them.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Contact form is revealed on hover via CSS — no JS click handler needed

// INTERACTIVE AUTOMATIC SLIDING
function initCarousel() {
    const track = document.querySelector('.custom-carousel-track');
    const slides = document.querySelectorAll('.custom-carousel-item');
    const nextBtn = document.querySelector('.next');
    const prevBtn = document.querySelector('.prev');

    let index = 0;

    function updateSlide() {
        const width = slides[0].offsetWidth;
        track.style.transform = `translateX(-${index * width}px)`;
    }

    nextBtn.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        updateSlide();
    });

    prevBtn.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        updateSlide();
    });

    setInterval(() => {
        index = (index + 1) % slides.length;
        updateSlide();
    }, 4000);

if (nextBtn && prevBtn) {
    nextBtn.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        updateSlide();
    });

    prevBtn.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        updateSlide();
    });
}
    window.addEventListener('resize', updateSlide);
}

document.addEventListener('DOMContentLoaded', initCarousel);

</script>
 
@endsection