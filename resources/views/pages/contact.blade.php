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

    <!-- Contact Section — matches welcome page layout exactly, but form always visible and larger -->
    <style>
        .contact-pg-section { background: linear-gradient(135deg, var(--teal-dark) 0%, var(--teal) 100%); padding: 4rem 0 5rem; }
        .contact-pg-inner   { display: flex; align-items: flex-start; gap: 2.5rem; flex-wrap: wrap; }
        .contact-pg-left    { flex: 1 1 280px; display: flex; flex-direction: column; gap: 1rem; }
        .contact-pg-right   { flex: 1 1 440px; }

        /* Reuse con-card / email-card / call-card styling from welcome page — same classes */

        /* Large always-visible form panel */
        .cpg-form-panel {
            background: rgba(255,255,255,.97);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 24px 64px rgba(0,0,0,.22);
        }
        .cpg-form-header {
            background: linear-gradient(135deg, var(--teal-dark), var(--teal));
            color: #fff;
            padding: 1.4rem 2rem;
            font-size: 1.35rem;
            margin: 0;
            font-family: 'DM Serif Display', serif;
        }
        .cpg-form-body {
            padding: 2rem 2.2rem 2.5rem;
            background: var(--mint);
        }
        .cpg-label {
            display: block; font-weight: 600; color: var(--ink);
            margin-bottom: .4rem; font-size: .9rem;
        }
        .cpg-input {
            width: 100%; padding: .85rem 1.1rem;
            border-radius: 12px; border: 1.5px solid var(--border);
            background: #fff; font-size: .95rem; color: var(--ink);
            outline: none; transition: border-color .25s, box-shadow .25s;
            margin-bottom: 1rem;
        }
        .cpg-input:focus { border-color: var(--teal); box-shadow: 0 0 0 3px rgba(13,115,119,.12); }
        .cpg-textarea { height: 150px; resize: vertical; }
        .cpg-submit {
            width: 100%; padding: 1rem; border: none;
            background: linear-gradient(135deg, var(--teal-dark), var(--teal));
            color: #fff; border-radius: 12px; font-weight: 700;
            font-size: 1rem; cursor: pointer; letter-spacing: .02em;
            transition: opacity .2s, transform .2s;
            box-shadow: 0 6px 20px rgba(13,115,119,.3);
        }
        .cpg-submit:hover { opacity: .9; transform: translateY(-2px); }
    </style>

    <section class="contact-pg-section">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title" style="color:#fff;">Get In Touch</h2>
                <p style="color:rgba(255,255,255,.8);">Reach out through any of these channels or send us a message directly</p>
            </div>

            <div class="contact-pg-inner">

                <!-- LEFT: info cards -->
                <div class="contact-pg-left">

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
                            <p>+254 725 039 848<br>Monday – Friday: 9am – 5pm</p>
                            <a href="#">Call Now</a>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: large form always visible -->
                <div class="contact-pg-right">
                    <div class="cpg-form-panel">
                        <h3 class="cpg-form-header">
                            <i class="bi bi-send me-2"></i>Send Us a Message
                        </h3>
                        <div class="cpg-form-body">
                            <form>
                                <div class="row g-0">
                                    <div class="col-md-6 pe-md-2">
                                        <label class="cpg-label">Your Name</label>
                                        <input type="text" class="cpg-input" placeholder="John Doe">
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                        <label class="cpg-label">Email Address</label>
                                        <input type="email" class="cpg-input" placeholder="john@example.com">
                                    </div>
                                </div>
                                <label class="cpg-label">Phone Number</label>
                                <input type="tel" class="cpg-input" placeholder="+254 700 000 000">
                                <label class="cpg-label">Subject</label>
                                <input type="text" class="cpg-input" placeholder="How can we help?">
                                <label class="cpg-label">Your Message</label>
                                <textarea class="cpg-input cpg-textarea" placeholder="Tell us more..."></textarea>
                                <button type="submit" class="cpg-submit">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--teal-dark) 0%, var(--ink) 100%); margin-bottom: -78px;">
        <div class="container text-center py-4">
            <h2 class="mb-4" style="color:#fff;">Still Have Questions?</h2>
            <p class="lead mb-4" style="color:rgba(255,255,255,.8);">Check out our <a style="color: var(--gold);" href="/FAQs">Frequently Asked Questions</a> or contact our support team for assistance.</p>
            <a href="/FAQs" class="btn btn-lg" style="background:var(--gold);color:#fff;border:none;border-radius:50px;padding:.75rem 2rem;font-weight:700;">Visit FAQ Page</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const currentLocation = location.href;
        document.querySelectorAll('.nav-link').forEach(item => {
            if (item.href === currentLocation) item.classList.add('active');
        });
    </script>
</body>
</html>

@endsection
