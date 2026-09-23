@extends('layouts.frontend')
@section('content')

<body>

    <!-- Hero -->
    <section class="hero-below-nav">
        <div class="container">
            <div class="col-lg-8 mx-auto text-center">
                <div class="hero-badge"><i class="bi bi-question-circle me-1"></i> Help Centre</div>
                <h1 class="display-4 fw-bold mb-3">Frequently Asked Questions</h1>
                <p class="lead mb-4">Find answers to the most common questions about SympTrack</p>
                <div class="faq-search-wrap mx-auto">
                    <i class="bi bi-search faq-search-icon"></i>
                    <input type="text" id="faqSearch" class="faq-search-input" placeholder="Search questions…">
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Search */
        .faq-search-wrap { position: relative; max-width: 480px; }
        .faq-search-icon { position: absolute; left: 1.1rem; top: 50%; transform: translateY(-50%); color: var(--teal); font-size: 1.05rem; }
        .faq-search-input {
            width: 100%; padding: .85rem 1.2rem .85rem 2.8rem;
            border-radius: 50px; border: none;
            background: rgba(255,255,255,.18); backdrop-filter: blur(8px);
            color: #fff; font-size: .95rem;
            outline: none; box-shadow: 0 4px 20px rgba(0,0,0,.15);
            transition: background .25s;
        }
        .faq-search-input::placeholder { color: rgba(255,255,255,.7); }
        .faq-search-input:focus { background: rgba(255,255,255,.28); }

        /* Category pill */
        .faq-category {
            display: inline-flex; align-items: center; gap: .5rem;
            background: linear-gradient(135deg, var(--teal-dark), var(--teal));
            color: #fff; font-size: .78rem; font-weight: 700; letter-spacing: .08em;
            text-transform: uppercase; padding: .35rem 1rem; border-radius: 50px;
            margin: 2.5rem 0 1.2rem; box-shadow: 0 4px 12px rgba(13,115,119,.25);
        }

        /* FAQ card */
        .faq-item {
            background: #fff; border-radius: 16px;
            border: 1px solid var(--border); margin-bottom: .8rem;
            box-shadow: 0 2px 12px rgba(13,115,119,.05);
            overflow: hidden; transition: box-shadow .25s;
        }
        .faq-item:hover { box-shadow: 0 8px 28px rgba(13,115,119,.12); }
        .faq-question {
            display: flex; justify-content: space-between; align-items: center;
            padding: 1.15rem 1.4rem; cursor: pointer; user-select: none;
            gap: 1rem;
        }
        .faq-question h5 { margin: 0; font-size: .97rem; font-weight: 600; color: var(--ink); }
        .faq-chevron {
            flex-shrink: 0; width: 30px; height: 30px; border-radius: 50%;
            background: var(--mint); color: var(--teal);
            display: flex; align-items: center; justify-content: center;
            font-size: .85rem; transition: transform .3s ease, background .25s;
        }
        .faq-item.open .faq-chevron { transform: rotate(180deg); background: var(--teal); color: #fff; }
        .faq-answer {
            max-height: 0; overflow: hidden;
            transition: max-height .4s ease, padding .3s ease;
            padding: 0 1.4rem;
        }
        .faq-answer-inner { padding-bottom: 1.2rem; color: var(--muted); font-size: .92rem; line-height: 1.7; }
        .faq-item.open .faq-answer { max-height: 400px; }

        /* No results */
        .no-results { display: none; text-align: center; padding: 3rem 1rem; color: var(--muted); }
        .no-results i { font-size: 3rem; color: var(--teal-light); margin-bottom: 1rem; display: block; }

        /* CTA strip */
        .faq-cta {
            background: linear-gradient(135deg, var(--teal-dark), var(--ink));
            border-radius: 22px; padding: 3rem 2rem; text-align: center;
            margin-top: 3rem; color: #fff;
        }
        .faq-cta h3 { font-family: 'DM Serif Display', serif; margin-bottom: .6rem; }
        .faq-cta p  { color: rgba(255,255,255,.8); margin-bottom: 1.5rem; }
        .faq-cta .btn-cta {
            background: var(--gold); color: #fff; border: none;
            padding: .75rem 2rem; border-radius: 50px;
            font-weight: 700; font-size: .95rem; text-decoration: none;
            transition: opacity .2s, transform .2s; display: inline-block;
        }
        .faq-cta .btn-cta:hover { opacity: .9; transform: translateY(-2px); }
    </style>

    <!-- FAQ Content -->
    <section class="py-5" style="background: var(--bg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="no-results" id="noResults">
                        <i class="bi bi-search"></i>
                        <h5>No results found</h5>
                        <p>Try different keywords or <a href="/contact">contact our support team</a>.</p>
                    </div>

                    <div id="faqContainer">

                        <!-- Getting Started -->
                        <div class="faq-category" data-category><i class="bi bi-rocket-takeoff"></i> Getting Started</div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>How do I create an account?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Click <strong>Get Started</strong> in the top navigation. You'll need to provide your name, email address and a password. Once submitted you'll receive a verification email to activate your account.</div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>Is there a mobile app available?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">SympTrack is available as a progressive web app (PWA) that works on both iOS and Android — add it to your home screen for easy access. Native mobile apps are coming soon.</div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>How much does SympTrack cost?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">SympTrack offers a free basic plan with all essential features. Premium plans with advanced analytics start at $9.99/month.</div>
                            </div>
                        </div>

                        <!-- Account Management -->
                        <div class="faq-category" data-category><i class="bi bi-person-gear"></i> Account Management</div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>How do I reset my password?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Click <strong>Forgot Password</strong> on the login page. Enter your email and we'll send a reset link. Check your spam folder if the email doesn't arrive within a few minutes.</div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>How do I update my profile information?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Log in, click your profile icon in the top right and select <strong>Account Settings</strong>. From there you can update personal info, change your password and manage notification preferences.</div>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="faq-category" data-category><i class="bi bi-stars"></i> Features</div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>How do I track my symptoms?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Log in and click <strong>Add Symptom</strong>. Select or type the symptom name, rate its severity (1–10), add notes or triggers, and save. All entries appear in your <strong>Symptom History</strong>.</div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>Can I export my health data?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Yes. Go to <strong>Settings → Export Data</strong> and choose CSV or PDF. The export includes all your symptom records, notes, and any other health data you've entered.</div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>Is there a way to set reminders?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Go to the <strong>Reminders</strong> section and click <strong>Add Reminder</strong>. Customise the frequency, time and type. You can set medication reminders, symptom check-ins and more.</div>
                            </div>
                        </div>

                        <!-- Privacy & Security -->
                        <div class="faq-category" data-category><i class="bi bi-shield-lock"></i> Privacy & Security</div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>Is my health data secure?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Absolutely. All data is encrypted in transit and at rest using industry-standard protocols. We comply with HIPAA and GDPR.</div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h5>Who can see my health information?</h5>
                                <span class="faq-chevron"><i class="bi bi-chevron-down"></i></span>
                            </div>
                            <div class="faq-answer">
                                <div class="faq-answer-inner">Your data is private by default. You can optionally share with healthcare providers or caregivers via <strong>Sharing Settings</strong>. We never sell or share your personal health data without your explicit consent.</div>
                            </div>
                        </div>

                    </div><!-- /#faqContainer -->

                    <!-- CTA -->
                    <div class="faq-cta">
                        <h3>Still have questions?</h3>
                        <p>Can't find the answer you're looking for? Our team is happy to help.</p>
                        <a href="/contact" class="btn-cta"><i class="bi bi-chat-dots me-2"></i>Contact Support</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Accordion
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                const isOpen = item.classList.contains('open');
                document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
                if (!isOpen) item.classList.add('open');
            });
        });

        // Search
        const searchInput = document.getElementById('faqSearch');
        searchInput.addEventListener('input', () => {
            const term = searchInput.value.toLowerCase().trim();
            const items = document.querySelectorAll('.faq-item');
            const categories = document.querySelectorAll('[data-category]');
            let any = false;

            if (!term) {
                items.forEach(i => i.style.display = '');
                categories.forEach(c => c.style.display = '');
                document.getElementById('noResults').style.display = 'none';
                return;
            }
            items.forEach(i => i.style.display = 'none');
            categories.forEach(c => c.style.display = 'none');
            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(term)) {
                    item.style.display = '';
                    any = true;
                    let prev = item.previousElementSibling;
                    while (prev) {
                        if (prev.hasAttribute('data-category')) { prev.style.display = ''; break; }
                        prev = prev.previousElementSibling;
                    }
                }
            });
            document.getElementById('noResults').style.display = any ? 'none' : 'block';
        });

        // Active nav
        document.querySelectorAll('.nav-link').forEach(l => {
            if (l.href === location.href) l.classList.add('active');
        });
    </script>
</body>
</html>

@endsection
