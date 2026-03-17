@extends('layouts.frontend')
@section('content')



<body>
    

    <!-- Floating Background Elements -->
    <div class="floating floating-1"></div>
    <div class="floating floating-2"></div>
    
     <!-- Hero Section -->
    <section class="hero-below-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content text-white">
                        <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                        <p class="lead mb-0">We'd love to hear from you. Get in touch with our team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="" style="background-color: #288054; margin-top: -48px;">
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
    </section>

    <!-- Map Section -->
    <!--section class="py-5">
        <div class="container">
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
    </section-->

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, rgba(116, 149, 250, 0.9), rgba(240, 248, 255, 0.9)); margin-bottom: -78px; ">
        <div class="container text-center py-4">
            <h2 class="mb-4" style="color: black;">Still Have Questions?</h2>
            <p class="lead mb-4">Check out our <a style="color: #037239;" href="FAQs.html" class="text-primary">Frequently Asked Questions</a> or contact our support team for assistance.</p>
            <a href="FAQs.html" class="btn btn-outline-primary btn-lg">Visit FAQ Page</a>
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
    </script>
</body>
</html>

@endsection