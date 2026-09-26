
@extends('layouts.frontend')
@section('content')

<body>

    
<!-- Floating Background Elements -->
    <!--div class="floating floating-1"></div>
    <div class="floating floating-2"></div-->
    
    <!-- Hero Section -->
      
 
  
<!-- Page Header -->
<section class="page-header-band">
    <div class="container">
        <span class="hero-badge"><i class="bi bi-heart-pulse me-1"></i> About Us</span>
        <h1>About SympTrack</h1>
        <p>Your trusted partner in health monitoring and symptom tracking</p>
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
            .team-section { background: var(--bg); padding: 6rem 0; }
 
            /* ---------- Card scene / flip mechanics (unchanged) ---------- */
            .team-card-scene { perspective: 1400px; height: 420px; }
            .team-card-flip {
                width: 100%; height: 100%;
                position: relative;
                transform-style: preserve-3d;
                transition: transform .7s cubic-bezier(.4,0,.2,1);
                cursor: pointer;
            }
            .team-card-scene:hover .team-card-flip { transform: rotateY(180deg); }
            .team-card-front, .team-card-back {
                position: absolute; inset: 0;
                backface-visibility: hidden;
                border-radius: 24px;
                overflow: hidden;
            }
 
            /* ---------- FRONT ---------- */
            .team-card-front {
                background: #fff;
                box-shadow: 0 10px 34px rgba(13,115,119,.10);
                display: flex; flex-direction: column;
                transition: box-shadow .35s ease;
            }
            .team-card-scene:hover .team-card-front { box-shadow: 0 22px 50px rgba(13,115,119,.18); }
 
            /* colored spotlight band behind the avatar */
            .tc-spotlight {
                position: relative;
                height: 130px;
                flex-shrink: 0;
                overflow: hidden;
            }
            .tc-spotlight::before, .tc-spotlight::after {
                content: '';
                position: absolute;
                border-radius: 50%;
                filter: blur(2px);
            }
            .tc-spotlight::before { width: 220px; height: 220px; top: -90px; left: -50px; opacity: .55; }
            .tc-spotlight::after  { width: 160px; height: 160px; top: -40px; right: -40px; opacity: .4; }
 
            .accent-teal .tc-spotlight { background: linear-gradient(135deg, var(--teal-dark), var(--teal)); }
            .accent-teal .tc-spotlight::before, .accent-teal .tc-spotlight::after { background: var(--teal-light); }
 
            .accent-gold .tc-spotlight { background: linear-gradient(135deg, #8a6020, var(--gold)); }
            .accent-gold .tc-spotlight::before, .accent-gold .tc-spotlight::after { background: #f3d489; }
 
            .accent-ink .tc-spotlight { background: linear-gradient(135deg, #0e1220, var(--ink)); }
            .accent-ink .tc-spotlight::before, .accent-ink .tc-spotlight::after { background: var(--teal-light); }
 
            /* avatar overlaps the spotlight/body seam */
            .tc-avatar-wrap {
                position: relative;
                width: 128px; height: 128px;
                margin: -64px auto 0;
                border-radius: 50%;
                padding: 5px;
                background: #fff;
                box-shadow: 0 8px 24px rgba(0,0,0,.18);
                z-index: 2;
            }
            .tc-avatar-wrap img {
                width: 100%; height: 100%;
                border-radius: 50%;
                object-fit: cover;
                display: block;
            }
            .tc-avatar-ring {
                position: absolute; inset: -5px;
                border-radius: 50%;
                border: 2px solid transparent;
                background: linear-gradient(135deg, var(--ring-a), var(--ring-b)) border-box;
                -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
            }
            .accent-teal .tc-avatar-ring { --ring-a: var(--teal); --ring-b: var(--teal-light); }
            .accent-gold .tc-avatar-ring { --ring-a: var(--gold); --ring-b: #f3d489; }
            .accent-ink  .tc-avatar-ring { --ring-a: var(--ink); --ring-b: var(--teal-light); }
 
            .tc-body {
                padding: 1.1rem 1.5rem 1.6rem;
                text-align: center;
                flex: 1;
                display: flex;
                flex-direction: column;
            }
            .tc-name {
                font-family: 'DM Serif Display', serif;
                font-size: 1.3rem; color: var(--ink); margin-bottom: .4rem;
            }
            .tc-role {
                font-size: .76rem; font-weight: 700; letter-spacing: .08em;
                text-transform: uppercase;
                padding: .32rem 1rem; border-radius: 50px;
                display: inline-block; margin: 0 auto .8rem;
            }
            .tc-role-teal { background: var(--mint); color: var(--teal-dark); }
            .tc-role-gold { background: var(--gold-light); color: #8a6020; }
            .tc-role-ink  { background: #eef0f5; color: var(--ink); }
 
            .tc-teaser {
                font-size: .85rem; color: var(--muted);
                line-height: 1.6; margin: 0 auto;
                max-width: 240px;
            }
 
            /* small floating flip badge instead of a plain text hint */
            .tc-flip-badge {
                position: absolute;
                bottom: 18px; right: 18px;
                width: 40px; height: 40px;
                border-radius: 50%;
                display: flex; align-items: center; justify-content: center;
                font-size: 1rem; color: #fff;
                box-shadow: 0 6px 16px rgba(0,0,0,.2);
                animation: tcFloat 2.6s ease-in-out infinite;
                z-index: 3;
            }
            .accent-teal .tc-flip-badge { background: linear-gradient(135deg, var(--teal), var(--teal-light)); }
            .accent-gold .tc-flip-badge { background: linear-gradient(135deg, var(--gold), #f3d489); }
            .accent-ink  .tc-flip-badge { background: linear-gradient(135deg, var(--ink), #3a4266); }
            @keyframes tcFloat {
                0%, 100% { transform: translateY(0); }
                50%      { transform: translateY(-5px); }
            }
 
            /* ---------- BACK ---------- */
            .team-card-back {
                transform: rotateY(180deg);
                display: flex; flex-direction: column; justify-content: center;
                align-items: center; padding: 2.2rem;
                text-align: center; color: #fff;
                position: relative;
            }
            .accent-teal .team-card-back { background: linear-gradient(160deg, var(--teal-dark), var(--teal)); }
            .accent-gold .team-card-back { background: linear-gradient(160deg, #7a5018, var(--gold)); }
            .accent-ink  .team-card-back { background: linear-gradient(160deg, #0e1220, var(--ink)); }
 
            .team-card-back::before {
                content: '\201C';
                font-family: 'DM Serif Display', serif;
                position: absolute; top: -6px; left: 18px;
                font-size: 7rem; color: rgba(255,255,255,.10); line-height: 1;
            }
            .tc-back-avatar {
                width: 84px; height: 84px; border-radius: 50%;
                border: 3px solid rgba(255,255,255,.55);
                object-fit: cover; margin-bottom: 1.1rem;
                box-shadow: 0 6px 20px rgba(0,0,0,.3);
                position: relative; z-index: 1;
            }
            .tc-back-name {
                font-family: 'DM Serif Display', serif;
                font-size: 1.25rem; margin-bottom: .3rem;
                position: relative; z-index: 1;
            }
            .tc-back-role {
                font-size: .74rem; font-weight: 700; letter-spacing: .1em;
                text-transform: uppercase; color: rgba(255,255,255,.65);
                margin-bottom: 1rem; position: relative; z-index: 1;
            }
            .tc-back-bio {
                font-size: .88rem; line-height: 1.7;
                color: rgba(255,255,255,.88);
                margin-bottom: 1.4rem;
                position: relative; z-index: 1;
            }
            .tc-social { display: flex; gap: .7rem; justify-content: center; position: relative; z-index: 1; }
            .tc-social a {
                width: 38px; height: 38px; border-radius: 50%;
                background: rgba(255,255,255,.16);
                display: flex; align-items: center; justify-content: center;
                color: #fff; font-size: 1rem;
                transition: background .25s, transform .25s;
                text-decoration: none;
            }
            .tc-social a:hover { background: rgba(255,255,255,.32); transform: translateY(-3px); }
 
            @media (max-width: 767.98px) {
                .team-card-scene { height: 400px; }
            }
        </style>
 
        <div class="row g-4 justify-content-center">
 
            <!-- Sarah Johnson -->
            <div class="col-md-4">
                <div class="team-card-scene">
                    <div class="team-card-flip accent-teal">
                        <div class="team-card-front">
                            <div class="tc-spotlight"></div>
                            <div class="tc-avatar-wrap">
                                <div class="tc-avatar-ring"></div>
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=faces&q=80" alt="Sarah Johnson">
                            </div>
                            <div class="tc-body">
                                <div class="tc-name">Sarah Johnson</div>
                                <span class="tc-role tc-role-teal">CEO &amp; Founder</span>
                                <p class="tc-teaser">10+ years in health-tech, building tools that put patients first.</p>
                            </div>
                            <div class="tc-flip-badge"><i class="bi bi-arrow-repeat"></i></div>
                        </div>
                        <div class="team-card-back">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&crop=faces&q=80" class="tc-back-avatar" alt="Sarah Johnson">
                            <div class="tc-back-name">Sarah Johnson</div>
                            <div class="tc-back-role">CEO &amp; Founder</div>
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
                            <div class="tc-spotlight"></div>
                            <div class="tc-avatar-wrap">
                                <div class="tc-avatar-ring"></div>
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=300&fit=crop&crop=faces&q=80" alt="Michael Chen">
                            </div>
                            <div class="tc-body">
                                <div class="tc-name">Michael Chen</div>
                                <span class="tc-role tc-role-ink">Lead Developer</span>
                                <p class="tc-teaser">Full-stack architect focused on clean code and rock-solid infrastructure.</p>
                            </div>
                            <div class="tc-flip-badge"><i class="bi bi-arrow-repeat"></i></div>
                        </div>
                        <div class="team-card-back">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=faces&q=80" class="tc-back-avatar" alt="Michael Chen">
                            <div class="tc-back-name">Michael Chen</div>
                            <div class="tc-back-role">Lead Developer</div>
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
                            <div class="tc-spotlight"></div>
                            <div class="tc-avatar-wrap">
                                <div class="tc-avatar-ring"></div>
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop&crop=faces&q=80" alt="Emily Davis">
                            </div>
                            <div class="tc-body">
                                <div class="tc-name">Emily Davis</div>
                                <span class="tc-role tc-role-gold">UI/UX Designer</span>
                                <p class="tc-teaser">Award-winning designer who believes great health tools start with great design.</p>
                            </div>
                            <div class="tc-flip-badge"><i class="bi bi-arrow-repeat"></i></div>
                        </div>
                        <div class="team-card-back">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=faces&q=80" class="tc-back-avatar" alt="Emily Davis">
                            <div class="tc-back-name">Emily Davis</div>
                            <div class="tc-back-role">UI/UX Designer</div>
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
        
       
    </script>
</body>
</html>


@endsection