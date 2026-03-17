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

        <!--About Us-->
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

     <!-- Our Values -->
    <section class="py-5" style="background-color: #0c406767">
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

     <!-- Contact Info -->
<section class="py-5" style="background-color: #037239;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Contact Information</h2>
            <p style="color: black;">Feel free to reach out to us through any of these channels</p>
        </div>
    </div>
                    
            <div class="row g-4">
                <!-- class="col-md-4">
                    <div class="contact-card text-center h-100" style="background-color: #0573aa;">
                        <div class="contact-icon location">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <h4 style="color: white;">Our Location</h4>
                        <p style="color: white;">Westlands<br>Nairobi</p>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2" style="color: black; border-color: black;">Get Directions</a>
                    </div>
                </div-->
                

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
                    <div style="background-color: gold;" class="email-icon location">
                        <i  class="bi bi-envelope"></i>
                    </div>
                    <div class="email-text">
                        <h4>Email Us</h4>
                        <p>info@symptrack.com<br>support@symptrack.com</p>
                        <a href="#">Send Email</a>
                    </div>
                </div>

                <div class="call-card">
                    <div style="background-color: gold;" class="call-icon location">
                        <i  class="bi bi-telephone"></i>
                    </div>
                    <div class="call-text">
                        <h4>Call Us</h4>
                        <p>+254 725 039 848<br>Monday - Friday: 9am - 5pm</p>
                        <a href="#">Call Now</a>
                    </div>
                </div>


                <!--div class="col-md-4">
                    <div class="contact-card text-center h-100" style="background-color: #72036b;">
                        <div class="contact-icon email">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h4 style="color: white;">Email Us</h4>
                        <p style="color: white;">info@symptrack.com<br>support@symptrack.com</p>
                        <a href="mailto:hello@symptrack.com" class="btn btn-sm btn-outline-primary mt-2" style="color: black; border-color: black;">Send Email</a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-card text-center h-100" style="background-color: #05aa58;">
                        <div class="contact-icon phone" style="background: linear-gradient(135deg, #9260f0, #6311aa);">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h4 style="color: white;">Call Us</h4>
                        <p style="color: white;">+254 725 039 848<br>Mon-Fri, 9am-5pm PST</p>
                        <a href="tel:+14155550123" class="btn btn-sm btn-outline-primary mt-2" style="color: black; border-color: black;">Call Now</a>
                    </div>
                </div>
            </div>
        </div-->
    
        <!-- Contact Form-->
           <div class="contact-banner-wrapper">
                
                <button class="contact-trigger">
                    <i class="bi bi-send"></i>
                </button>

                <div class="contact-banner">
                    <h3 style="background-color: #4e73ff;">Contact Us</h3>

                    <form class="con-form">
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Email Address">
                        <textarea placeholder="Your Message"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>

            <!-- Contact Form -->
            <!--section class="py-5">
                <div class="container">
                    <div class="row justify-content-center" >
                        <div class="col-lg-8" >
                            <div class="card border-0 shadow-sm" style="background: linear-gradient( #05aa58, #0573aa, #72036b)">
                                <div class="card-body p-4 p-md-5"  >
                                    <div class="text-center mb-5" >
                                        <h2 class="section-title">Send Us a Message</h2>
                                        <p class="text-muted">Fill out the form below and we'll get back to you as soon as possible</p>
                                    </div>
                                    
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name" class="form-label">Your Name</label>
                                                <input type="text" class="form-control" id="name" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input type="text" class="form-control" id="subject" required>
                                        </div>
                                        
                                        <div class="mb-4">
                                            <label for="message" class="form-label">Your Message</label>
                                            <textarea class="form-control" id="message" rows="5" required></textarea>
                                        </div>
                                        
                                        <div class="d-grid" style="border-color: black;">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="bi bi-send me-2"></i> Send Message
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section-->

        <!-- Map Section -->
        <section class="py-5">
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
        </section>
    </section>


    <!-- How It Works -->
    <section class="how-it-works py-5" style="background: linear-gradient(135deg, rgba(233, 238, 255, 0.9), rgba(61, 199, 121, 0.9));">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">How It Works</h2>
                <p class="lead">Get started in just a few simple steps</p>
            </div>

            <div class="row justify-content-center align-items-center text-center g-5">

                <div class="col-md-3">
                    <div class="feature-step-card" style="background-color: #05aa58;">
                        <h4>Create Your Account</h4>
                        <p>Sign up in less than a minute.</p>
                    </div>
                </div>

                <div class="col-md-1" >
                    <p class="step-arrow">&#8702;</p>
                </div>

                <div class="col-md-3">
                    <div class="feature-step-card" style="background-color: #0573aa;">
                        <h4>Log Your Symptoms</h4>
                        <p>Add symptoms easily as they occur.</p>
                    </div>
                </div>

                <div class="col-md-1">
                    <p class="step-arrow">&#8702;</p>
                </div>

                <div class="col-md-3">
                    <div class="feature-step-card" style="background-color: #72036b;">
                        <h4>Gain Insights</h4>
                        <p>Spot patterns & trends.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelector('.contact-trigger').addEventListener('click', () => {
    document.querySelector('.contact-banner').classList.toggle('active');
});

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