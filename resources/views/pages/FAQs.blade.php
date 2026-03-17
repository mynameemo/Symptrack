@extends('layouts.frontend')
@section('content')


<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
           <a class="navbar-brand d-flex align-items-center" href="home.html">
                <img src="assets/images/logo.jpeg" width="50" height="50" class="me-2"> SympTrack
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center flex-wrap gap-2">
                    <li class="nav-item"><a href="/" class="btn btn-primary">Home</a></li>
                    <li class="nav-item"><a href="login" class="btn btn-primary">Login</a></li>
                    <li class="nav-item"><a href="register" class="btn btn-primary">Register</a></li>
                    <li class="nav-item"><a href="about" class="btn btn-primary">About</a></li>
                    <li class="nav-item"><a href="contact" class="btn btn-primary">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="hero-content text-white">
                        <h1 class="display-4 fw-bold mb-4">Frequently Asked Questions</h1>
                        <p class="lead mb-4">Find answers to common questions about SympTrack</p>
                        
                        <!-- Search Box -->
                        <div class="search-container">
                            <div class="search-box mx-auto">
                                <input type="text" id="searchInput" class="form-control" placeholder="Search questions...">
                                <button class="btn btn-light text-primary"><i class="bi bi-search"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-5" style="position: relative; z-index: 1;">
        <div class="container">
            <!-- Floating Background Elements -->
            <div class="floating" style="width: 400px; height: 400px; top: 15%; right: -150px; background: radial-gradient(circle, rgba(78, 115, 223, 0.08) 0%, rgba(78, 115, 223, 0) 70%);"></div>
            <div class="floating" style="width: 300px; height: 300px; bottom: 10%; left: -100px; background: radial-gradient(circle, rgba(28, 200, 138, 0.08) 0%, rgba(28, 200, 138, 0) 70%); animation-delay: 2s;"></div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="noResults" class="no-results mb-5">
                        <i class="bi bi-question-circle"></i>
                        <h4>No results found</h4>
                        <p class="text-muted">We couldn't find any questions matching your search. Try different keywords or contact our support team.</p>
                        <a href="contact.html" class="btn btn-primary mt-3">Contact Support</a>
                    </div>
                    
                    <div id="faqContainer">
                        <!-- Getting Started -->
                        <h3 class="category-title">Getting Started</h3>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>How do I create an account?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>Creating an account is easy! Click on the "Sign Up" button in the top right corner of the page. You'll need to provide your name, email address, and create a password. Once you submit the form, you'll receive a verification email to activate your account.</p>
                            </div>
                        </div>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>Is there a mobile app available?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>Yes! SympTrack is available as a progressive web app (PWA) that works on both iOS and Android devices. You can add it to your home screen for easy access. We're also working on native mobile apps that will be available in the app stores soon.</p>
                            </div>
                        </div>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>How much does SympTrack cost?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>SympTrack offers a free basic plan with essential features. We also offer premium plans with advanced features starting at $9.99/month. You can compare plans and features on our <a href="pricing.html">pricing page</a>.</p>
                            </div>
                        </div>
                        
                        <!-- Account Management -->
                        <h3 class="category-title" style="margin-top: 4rem;">Account Management</h3>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>How do I reset my password?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>If you've forgotten your password, click on the "Forgot Password" link on the login page. Enter your email address, and we'll send you a link to reset your password. Make sure to check your spam folder if you don't see the email in your inbox.</p>
                            </div>
                        </div>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>How do I update my profile information?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>To update your profile information, log in to your account and click on your profile picture in the top right corner. Select "Account Settings" from the dropdown menu. From there, you can update your personal information, change your password, and manage your notification preferences.</p>
                            </div>
                        </div>
                        
                        <!-- Features -->
                        <h3 class="category-title" style="margin-top: 4rem;">Features</h3>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>How do I track my symptoms?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>To track a symptom, log in to your account and click on the "Add Symptom" button. Select the symptom from the list or type to search, rate its severity, add any notes, and save. You can view and manage all your tracked symptoms in the "Symptom History" section.</p>
                            </div>
                        </div>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>Can I export my health data?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>Yes, you can export your health data at any time. Go to the "Settings" page and click on "Export Data." You can choose to export your data as a CSV or PDF file. The export will include all your symptom records, notes, and any other health data you've entered.</p>
                            </div>
                        </div>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>Is there a way to set reminders?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>Yes, you can set up medication reminders, symptom check-ins, and other health-related reminders. Go to the "Reminders" section in the app and click "Add Reminder." You can customize the frequency, time, and type of reminder you'd like to receive.</p>
                            </div>
                        </div>
                        
                        <!-- Privacy & Security -->
                        <h3 class="category-title" style="margin-top: 4rem;">Privacy & Security</h3>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>Is my health data secure?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>Absolutely. We take your privacy and security very seriously. All your health data is encrypted both in transit and at rest using industry-standard encryption protocols. We comply with all relevant healthcare data protection regulations, including HIPAA and GDPR.</p>
                            </div>
                        </div>
                        
                        <div class="faq-card">
                            <div class="faq-header">
                                <h5>Who can see my health information?</h5>
                                <i class="faq-icon bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-body">
                                <p>Your health information is private and only accessible to you by default. You can choose to share specific information with healthcare providers, family members, or caregivers through the "Sharing" settings in your account. We never sell or share your personal health information with third parties without your explicit consent.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Still have questions? -->
                    <div class="text-center mt-5 pt-5">
                        <h3>Still have questions?</h3>
                        <p class="lead mb-4">Can't find the answer you're looking for? Our team is happy to help!</p>
                        <a href="contact.html" class="btn btn-primary btn-lg">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle FAQ items
        document.querySelectorAll('.faq-header').forEach(header => {
            header.addEventListener('click', () => {
                const faqCard = header.parentElement;
                const isActive = faqCard.classList.contains('active');
                
                // Close all other open FAQs
                document.querySelectorAll('.faq-card').forEach(card => {
                    card.classList.remove('active');
                });
                
                // Toggle current FAQ
                if (!isActive) {
                    faqCard.classList.add('active');
                }
            });
        });
        
        // Search functionality
        const faqSearch = document.getElementById('faqSearch');
        const faqContainer = document.getElementById('faqContainer');
        const noResults = document.getElementById('noResults');
        const faqCards = document.querySelectorAll('.faq-card');
        const categoryTitles = document.querySelectorAll('.category-title');
        
        faqSearch.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase().trim();
            let hasResults = false;
            
            if (searchTerm === '') {
                // Show all FAQs and categories if search is empty
                faqCards.forEach(card => card.style.display = '');
                categoryTitles.forEach(title => title.style.display = '');
                noResults.style.display = 'none';
                return;
            }
            
            // First, hide all FAQs and categories
            faqCards.forEach(card => card.style.display = 'none');
            categoryTitles.forEach(title => title.style.display = 'none');
            
            // Show matching FAQs
            faqCards.forEach(card => {
                const question = card.querySelector('h5').textContent.toLowerCase();
                const answer = card.querySelector('.faq-body').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    card.style.display = '';
                    hasResults = true;
                    
                    // Show the category of the matching FAQ
                    let prevSibling = card.previousElementSibling;
                    while (prevSibling) {
                        if (prevSibling.classList.contains('category-title')) {
                            prevSibling.style.display = '';
                            break;
                        }
                        prevSibling = prevSibling.previousElementSibling;
                    }
                }
            });
            
            // Show no results message if no matches found
            noResults.style.display = hasResults ? 'none' : 'block';
        });
        
        // Add active class to current nav item
        const currentLocation = location.href;
        const menuItems = document.querySelectorAll('.nav-link');
        
        menuItems.forEach(item => {
            if (item.href === currentLocation) {
                item.classList.add('active');
            }
        });
    </script>
</body>
</html>

@endsection