<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SympTrack — Track Your Health</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <style>
    :root {
        --teal:        #0d7377;
        --teal-dark:   #0a5457;
        --teal-light:  #14a0a5;
        --mint:        #e6f7f7;
        --gold:        #c9943a;
        --gold-light:  #fdf3e3;
        --ink:         #1a1f2e;
        --muted:       #6b7280;
        --surface:     #ffffff;
        --bg:          #f4f9f9;
        --border:      #d1e8e8;
        --radius-sm:   8px;
        --radius:      14px;
        --radius-lg:   22px;
        --shadow-sm:   0 1px 4px rgba(13,115,119,.08);
        --shadow:      0 4px 20px rgba(13,115,119,.12);
        --shadow-lg:   0 12px 40px rgba(13,115,119,.18);
        --transition:  all .3s cubic-bezier(.4,0,.2,1);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }

    body {
        font-family: 'DM Sans', sans-serif;
        font-size: 1rem;
        line-height: 1.65;
        color: var(--ink);
        background-color: var(--bg);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        overflow-x: hidden;
    }

    h1, h2, h3, h4, h5 {
        font-family: 'DM Serif Display', serif;
        line-height: 1.25;
        color: var(--ink);
    }
    p { color: var(--muted); }
    a { color: var(--teal); text-decoration: none; transition: var(--transition); }
    a:hover { color: var(--teal-dark); }

    /* TOPBAR */
    .topbar {
        background: var(--ink);
        color: rgba(255,255,255,.7);
        font-size: .77rem;
        padding: .4rem 0;
        position: fixed; top: 0; left: 0; right: 0;
        z-index: 1060;
    }
    .topbar a { color: rgba(255,255,255,.7); }
    .topbar a:hover { color: #fff; }
    .topbar .soc a {
        display: inline-flex; align-items: center; justify-content: center;
        width: 24px; height: 24px; border-radius: 50%;
        background: rgba(255,255,255,.1);
        font-size: .78rem; margin-left: 5px;
        transition: var(--transition);
    }
    .topbar .soc a:hover { background: var(--teal); color: #fff; }

    /* NAVBAR */
    .main-navbar {
        position: fixed;
        top: 34px; left: 0; right: 0;
        z-index: 1050;
        background: rgba(255,255,255,.97);
        backdrop-filter: blur(14px);
        border-bottom: 1px solid var(--border);
        box-shadow: var(--shadow-sm);
        padding: .7rem 0;
    }
    .main-navbar .navbar-brand {
        font-family: 'DM Serif Display', serif;
        font-size: 1.5rem;
        color: var(--teal) !important;
        display: flex; align-items: center; gap: .5rem;
    }
    .main-navbar .navbar-brand img {
        width: 36px; height: 36px; border-radius: 9px; object-fit: cover;
    }
    .main-navbar .nav-link {
        font-size: .875rem; font-weight: 500;
        color: var(--ink) !important;
        padding: .4rem .8rem !important;
        border-radius: var(--radius-sm);
        transition: var(--transition);
    }
    .main-navbar .nav-link:hover,
    .main-navbar .nav-link.active { color: var(--teal) !important; background: var(--mint); }
    .main-navbar .nav-cta {
        background: var(--teal); color: #fff !important;
        padding: .45rem 1.2rem !important; border-radius: 50px;
    }
    .main-navbar .nav-cta:hover { background: var(--teal-dark); color: #fff !important; }
    .main-navbar .dropdown-menu {
        border: 1px solid var(--border); border-radius: var(--radius);
        box-shadow: var(--shadow); padding: .45rem;
        animation: dropIn .2s ease;
    }
    @keyframes dropIn {
        from { opacity: 0; transform: translateY(-6px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .main-navbar .dropdown-item {
        border-radius: var(--radius-sm); font-size: .86rem; font-weight: 500;
        padding: .5rem .9rem; color: var(--ink); transition: var(--transition);
    }
    .main-navbar .dropdown-item:hover { background: var(--mint); color: var(--teal); }

    .navbar-spacer { height: 112px; }

    /* Reveal Home / Dashboard submenus on hover (desktop only —
   mobile keeps the normal tap-to-open behavior via Bootstrap's JS) */
@media (min-width: 992px) {
    .main-navbar .nav-item.dropdown .dropdown-menu {
        display: block;
        margin-top: 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        pointer-events: none;
        transition: opacity .2s ease, transform .2s ease, visibility .2s ease;
    }

    .main-navbar .nav-item.dropdown:hover > .dropdown-menu,
    .main-navbar .nav-item.dropdown:focus-within > .dropdown-menu,
    .main-navbar .nav-item.dropdown .dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        pointer-events: auto;
    }
}

    /* HERO */
    .st-hero {
        background: linear-gradient(135deg, var(--teal-dark) 0%, var(--teal) 55%, var(--teal-light) 100%);
        padding: 7rem 0 5.5rem;
        position: relative; overflow: hidden; color: #fff;
    }
    .st-hero::before {
        content: ''; position: absolute; inset: 0;
        background: radial-gradient(ellipse at 80% 10%, rgba(255,255,255,.09), transparent 60%);
    }
    .st-hero::after {
        content: ''; position: absolute;
        bottom: -2px; left: 0; right: 0; height: 60px;
        background: var(--bg);
        clip-path: ellipse(60% 100% at 50% 100%);
    }
    .st-hero h1 { color: #fff; font-size: clamp(2rem, 5vw, 3.4rem); }
    .st-hero p { color: rgba(255,255,255,.85); font-size: 1.05rem; }
    .hero-badge {
        display: inline-flex; align-items: center; gap: .45rem;
        background: rgba(255,255,255,.14); backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,.28);
        color: #fff; font-size: .75rem; font-weight: 700;
        padding: .3rem .9rem; border-radius: 50px; margin-bottom: 1.2rem;
        letter-spacing: .06em; text-transform: uppercase;
    }

    /* SECTIONS */
    .st-section { padding: 5rem 0; }
    .st-section-alt { background: var(--surface); }
    .section-eyebrow {
        font-size: .75rem; font-weight: 700; letter-spacing: .12em;
        text-transform: uppercase; color: var(--teal);
        display: block; margin-bottom: .4rem;
    }
    .section-heading { font-size: clamp(1.6rem, 3vw, 2.4rem); margin-bottom: .9rem; }
    .section-divider {
        width: 44px; height: 4px;
        background: linear-gradient(90deg, var(--teal), var(--gold));
        border-radius: 2px; margin: .75rem auto 0;
    }

    /* CARDS */
    .st-card {
        background: var(--surface); border: 1px solid var(--border);
        border-radius: var(--radius-lg); padding: 2rem;
        box-shadow: var(--shadow-sm); transition: var(--transition); height: 100%;
    }
    .st-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); border-color: var(--teal-light); }
    .st-card .card-icon {
        width: 54px; height: 54px; border-radius: 15px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.45rem; color: #fff; margin-bottom: 1.2rem;
        background: linear-gradient(135deg, var(--teal), var(--teal-light));
    }
    .st-card h4 { font-size: 1.1rem; margin-bottom: .45rem; color: var(--ink); }
    .st-card p { font-size: .88rem; }

    /* BANNER / CLOTH CARDS */
    .feature-card {
        background: linear-gradient(135deg, var(--teal) 0%, var(--teal-light) 60%, #2cbcbf 100%);
        border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        padding: 1.5rem; text-align: center; color: #fff;
        height: 52px; overflow: hidden; cursor: pointer;
        position: relative; box-shadow: var(--shadow);
        transition: height .75s cubic-bezier(.25,1,.5,1), box-shadow .5s;
    }
    .feature-card > * { opacity: 0; transform: translateY(-8px); transition: opacity .4s ease .15s, transform .4s ease .15s; }
    .feature-card::before {
        content: ''; position: absolute;
        top: 10px; left: 14px; right: 14px; height: 4px;
        background: rgba(255,255,255,.4); border-radius: 2px;
    }
    .feature-card::after {
        content: ''; position: absolute;
        bottom: -1px; left: 0; width: 100%; height: 50px;
        background: inherit;
        clip-path: polygon(0% 40%,8% 55%,16% 35%,24% 55%,32% 38%,40% 60%,48% 40%,56% 60%,64% 38%,72% 55%,80% 35%,88% 55%,100% 40%,100% 100%,0 100%);
    }
    .feature-card:hover { height: 280px; box-shadow: var(--shadow-lg); animation: clothSway 2.5s ease-in-out infinite alternate; }
    .feature-card:hover > * { opacity: 1; transform: translateY(0); }
    .feature-card:hover::after { animation: clothWave 2s ease-in-out infinite alternate; }
    @keyframes clothSway { 0%{transform:rotateZ(-1deg)} 50%{transform:rotateZ(1deg)} 100%{transform:rotateZ(-1deg)} }
    @keyframes clothWave { 0%{transform:translateY(0)} 50%{transform:translateY(6px)} 100%{transform:translateY(0)} }

    /* VALUE CARDS */
    .value-card {
        background: rgba(255,255,255,.88); backdrop-filter: blur(14px);
        border: 1px solid rgba(255,255,255,.45);
        border-radius: var(--radius-lg); padding: 2.25rem 1.75rem;
        text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,.07);
        transition: var(--transition); position: relative; overflow: hidden;
    }
    .value-card::before {
        content: ''; position: absolute; inset: -1px; border-radius: inherit;
        background: linear-gradient(135deg, var(--teal), var(--gold));
        opacity: .2; filter: blur(12px); z-index: -1;
    }
    .value-card:hover { transform: translateY(-8px); box-shadow: 0 30px 60px rgba(0,0,0,.12); }
    .value-card h4 { color: var(--ink); font-size: 1.1rem; margin-bottom: .45rem; }
    .value-card p { font-size: .88rem; }

    /* STEP CARDS */
    .step-number {
        width: 56px; height: 56px; border-radius: 50%;
        background: linear-gradient(135deg, var(--teal), var(--teal-light));
        color: #fff; font-family: 'DM Serif Display', serif; font-size: 1.4rem;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1.2rem;
        box-shadow: 0 6px 20px rgba(13,115,119,.28);
    }

    /* BUTTONS */
    .btn-primary {
        background: linear-gradient(135deg, var(--teal), var(--teal-light));
        border: none; color: #fff;
        padding: .6rem 1.6rem; border-radius: 50px; font-weight: 600;
        transition: var(--transition);
    }
    .btn-primary:hover {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff; transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(13,115,119,.35);
    }
    .btn-outline-primary {
        color: var(--teal); border: 2px solid var(--teal);
        border-radius: 50px; font-weight: 600;
        transition: var(--transition); background: transparent;
    }
    .btn-outline-primary:hover {
        background: var(--teal); color: #fff; border-color: var(--teal);
        transform: translateY(-2px);
    }
    .btn-st-white {
        background: #fff; color: var(--teal);
        border: none; padding: .75rem 2rem;
        border-radius: 50px; font-weight: 700; font-size: .95rem;
        transition: var(--transition);
        display: inline-flex; align-items: center; gap: .4rem;
    }
    .btn-st-white:hover {
        background: var(--gold-light); color: var(--teal-dark);
        transform: translateY(-2px); box-shadow: 0 8px 25px rgba(0,0,0,.15);
    }

    /* FORMS */
    .form-control, .form-select {
        border: 1.5px solid var(--border); border-radius: var(--radius-sm);
        padding: .65rem 1rem; font-size: .9rem;
        background: var(--surface); color: var(--ink);
        transition: var(--transition);
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--teal); box-shadow: 0 0 0 3px rgba(13,115,119,.12);
        outline: none;
    }
    .form-label { font-size: .85rem; font-weight: 600; color: var(--ink); margin-bottom: .4rem; }
    .input-group-text { background: var(--mint); border: 1.5px solid var(--border); color: var(--teal); }

    /* AUTH */
    .auth-card {
        background: var(--surface); border: 1px solid var(--border);
        border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); overflow: hidden;
    }
    .auth-card-header {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        padding: 2.5rem 2rem 2rem; text-align: center; color: #fff;
    }
    .auth-card-header h2 { color: #fff; font-size: 1.8rem; }
    .auth-card-header p { color: rgba(255,255,255,.8); font-size: .88rem; margin: 0; }
    .auth-card-body { padding: 2.5rem; }

    /* DASHBOARD */
    .dash-stat-card {
        background: var(--surface); border: 1px solid var(--border);
        border-radius: var(--radius); padding: 1.5rem;
        display: flex; align-items: center; gap: 1.2rem;
        transition: var(--transition);
    }
    .dash-stat-card:hover { box-shadow: var(--shadow); transform: translateY(-3px); }
    .dash-stat-icon {
        width: 52px; height: 52px; border-radius: 14px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.4rem; color: #fff;
    }
    .dash-stat-card h3 { font-size: 1.75rem; color: var(--ink); margin: 0; }
    .dash-stat-card p { font-size: .78rem; color: var(--muted); margin: 0; }

    /* CONTACT INFO CARDS */
    .contact-info-card {
        background: var(--surface); border: 1px solid var(--border);
        border-radius: var(--radius-lg); padding: 1.6rem;
        display: flex; align-items: center; gap: 1.2rem;
        transition: var(--transition); height: 100%;
    }
    .contact-info-card:hover { border-color: var(--teal-light); box-shadow: var(--shadow); transform: translateY(-4px); }
    .contact-info-icon {
        width: 50px; height: 50px; border-radius: 13px; flex-shrink: 0;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.3rem; color: #fff;
    }
    .contact-info-card h5 { font-size: .9rem; color: var(--ink); margin-bottom: .15rem; }
    .contact-info-card p { font-size: .82rem; margin: 0; }

    /* CONTACT FORM */
    .contact-form-card {
        background: var(--surface); border: 1px solid var(--border);
        border-radius: var(--radius-lg); padding: 2.5rem;
        box-shadow: var(--shadow);
    }

    /* TABLE */
    .st-table { background: var(--surface); border-radius: var(--radius); overflow: hidden; }
    .st-table thead th {
        background: var(--mint); color: var(--teal-dark);
        font-size: .78rem; font-weight: 700; letter-spacing: .05em;
        text-transform: uppercase; border-bottom: 2px solid var(--border);
        padding: .85rem 1rem;
    }
    .st-table tbody td { padding: .8rem 1rem; vertical-align: middle; font-size: .875rem; }
    .st-table tbody tr:hover { background: var(--mint); }
    .st-table tbody tr { border-bottom: 1px solid var(--border); transition: var(--transition); }

    /* SEVERITY */
    .severity-indicator {
        display: inline-block; width: 10px; height: 10px;
        border-radius: 50%; margin-right: 6px;
    }
    .severity-1 { background: #059669; }
    .severity-2 { background: #10b981; }
    .severity-3 { background: #f59e0b; }
    .severity-4 { background: #ef4444; }
    .severity-5 { background: #7c3aed; }

    /* CAROUSEL */
    .custom-carousel {
        position: relative; border-radius: var(--radius-lg);
        overflow: hidden; box-shadow: var(--shadow-lg); height: 480px;
    }
    .custom-carousel-track { display: flex; height: 100%; transition: transform .8s ease-in-out; }
    .custom-carousel-item { min-width: 100%; height: 100%; position: relative; overflow: hidden; }
    .custom-carousel-item img { width: 100%; height: 100%; object-fit: cover; }
    .carousel-overlay { position: absolute; inset: 0; background: rgba(13,115,119,.2); }
    .carousel-btn {
        position: absolute; top: 50%; transform: translateY(-50%);
        background: rgba(255,255,255,.18); backdrop-filter: blur(8px);
        color: #fff; border: 1px solid rgba(255,255,255,.3);
        font-size: 1rem; width: 42px; height: 42px; border-radius: 50%;
        cursor: pointer; z-index: 10;
        display: flex; align-items: center; justify-content: center;
        transition: var(--transition);
    }
    .carousel-btn:hover { background: rgba(255,255,255,.38); }
    .carousel-btn.prev { left: 14px; }
    .carousel-btn.next { right: 14px; }

    /* CTA BAND */
    .cta-band {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff; padding: 5rem 0; position: relative; overflow: hidden;
    }
    .cta-band::before {
        content: ''; position: absolute; inset: 0;
        background: radial-gradient(ellipse at 20% 80%, rgba(255,255,255,.07), transparent 60%);
    }
    .cta-band h2 { color: #fff; font-size: clamp(1.7rem, 3vw, 2.4rem); }
    .cta-band p { color: rgba(255,255,255,.8); font-size: 1.05rem; }

    /* FOOTER */
    .st-footer {
        background: var(--ink); color: rgba(255,255,255,.62);
        padding: 4rem 0 2rem; margin-top: auto;
    }
    .st-footer h5 {
        font-family: 'DM Serif Display', serif; color: #fff;
        font-size: 1rem; margin-bottom: 1.2rem;
    }
    .st-footer a { color: rgba(255,255,255,.58); font-size: .86rem; transition: var(--transition); }
    .st-footer a:hover { color: var(--teal-light); padding-left: 4px; }
    .footer-links { list-style: none; padding: 0; }
    .footer-links li { margin-bottom: .55rem; }
    .footer-social a {
        display: inline-flex; align-items: center; justify-content: center;
        width: 34px; height: 34px; border-radius: 9px;
        background: rgba(255,255,255,.09);
        color: rgba(255,255,255,.7); font-size: .92rem;
        margin-right: .45rem; transition: var(--transition);
    }
    .footer-social a:hover { background: var(--teal); color: #fff; transform: translateY(-3px); }
    .footer-divider { border-color: rgba(255,255,255,.09); margin: 2.5rem 0 1.5rem; }

    /* ALERTS */
    .alert { border: none; border-radius: var(--radius-sm); font-size: .875rem; }

    /* RANGE */
    input[type="range"] { accent-color: var(--teal); }

    /* RESPONSIVE */
    @media (max-width: 767.98px) {
        .navbar-spacer { height: 102px; }
        .st-hero { padding: 5rem 0 4rem; }
        .st-section { padding: 3.5rem 0; }
        .custom-carousel { height: 240px; }
        .auth-card-body { padding: 1.75rem; }
    }

    /* ================================================================
       ENHANCED SECTION STYLES — MIDDLE CONTENT ONLY
    ================================================================ */

    /* --- HERO SECTION (below nav) --- */
    .hero-below-nav {
        position: relative;
        min-height: 85vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 5rem 2rem 3rem;
        overflow: hidden;
        background: linear-gradient(145deg, #061b1c 0%, #0a4042 40%, #0d7377 75%, #14a0a5 100%);
    }
    .hero-below-nav::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse 70% 50% at 80% 20%, rgba(20,160,165,.25), transparent),
            radial-gradient(ellipse 40% 60% at 10% 80%, rgba(201,148,58,.12), transparent);
        pointer-events: none;
    }
    /* animated orb blobs */
    .hero-below-nav::after {
        content: '';
        position: absolute;
        width: 600px; height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(14,160,165,.18) 0%, transparent 70%);
        top: -200px; right: -200px;
        animation: heroOrb 8s ease-in-out infinite alternate;
        pointer-events: none;
    }
    @keyframes heroOrb {
        0%   { transform: translate(0,0) scale(1); }
        100% { transform: translate(-60px, 80px) scale(1.15); }
    }
    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 700px;
        animation: heroFadeUp .8s ease both;
    }
    @keyframes heroFadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .hero-content h1 {
        font-family: 'DM Serif Display', serif;
        font-size: clamp(2.4rem, 6vw, 4rem);
        color: #fff;
        line-height: 1.15;
        margin-bottom: 1.2rem;
        text-shadow: 0 2px 24px rgba(0,0,0,.3);
    }
    .hero-content h1 em {
        font-style: italic;
        color: #7df0f3;
    }
    .hero-content .{
        color: rgba(255,255,255,.82);
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 1.8rem;
    }
    .hero-content .btn-group-hero {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 2rem;
    }
    .hero-content .btn-group-hero .btn {
        padding: .75rem 2rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: .95rem;
        letter-spacing: .02em;
        transition: all .3s cubic-bezier(.4,0,.2,1);
    }
    .hero-content .btn-group-hero .btn-primary {
        background: linear-gradient(135deg, #14a0a5, #0d7377);
        border: none;
        box-shadow: 0 6px 24px rgba(13,115,119,.45);
    }
    .hero-content .btn-group-hero .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 32px rgba(13,115,119,.6);
    }
    .hero-content .btn-group-hero .btn-outline-light {
        border: 2px solid rgba(255,255,255,.55);
        color: #fff;
        background: rgba(255,255,255,.08);
        backdrop-filter: blur(8px);
    }
    .hero-content .btn-group-hero .btn-outline-light:hover {
        background: rgba(255,255,255,.18);
        border-color: #fff;
        transform: translateY(-3px);
    }
    /* hero stats bar */
    .hero-stats {
        position: relative;
        z-index: 2;
        display: flex;
        gap: 2.5rem;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 3.5rem;
        padding: 1.5rem 2.5rem;
        background: rgba(255,255,255,.08);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,.16);
        border-radius: 20px;
        animation: heroFadeUp 1s ease .3s both;
    }
    .hero-stats .stat-item { text-align: center; }
    .hero-stats .stat-num {
        display: block;
        font-family: 'DM Serif Display', serif;
        font-size: 1.9rem;
        color: #fff;
        line-height: 1;
    }
    .hero-stats .stat-label {
        font-size: .75rem;
        color: rgba(255,255,255,.65);
        letter-spacing: .08em;
        text-transform: uppercase;
    }
    .hero-stats .stat-divider {
        width: 1px;
        background: rgba(255,255,255,.2);
        align-self: stretch;
    }

    /* carousel — enhanced version */
    .custom-carousel {
        position: relative;
        z-index: 2;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0,0,0,.4), 0 0 0 1px rgba(255,255,255,.1);
        height: 420px;
        width: 100%;
        max-width: 900px;
        margin-top: 2.5rem;
        animation: heroFadeUp 1s ease .15s both;
    }
    .custom-carousel-track { display: flex; height: 100%; transition: transform .85s cubic-bezier(.77,0,.175,1); }
    .custom-carousel-item { min-width: 100%; height: 100%; position: relative; overflow: hidden; }
    .custom-carousel-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 6s ease; }
    .custom-carousel-item:hover img { transform: scale(1.04); }
    .carousel-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(180deg, rgba(6,27,28,.1) 0%, rgba(13,115,119,.35) 100%);
    }
    .carousel-btn {
        position: absolute; top: 50%; transform: translateY(-50%);
        background: rgba(255,255,255,.15); backdrop-filter: blur(10px);
        color: #fff; border: 1px solid rgba(255,255,255,.3);
        font-size: 1.1rem; width: 46px; height: 46px; border-radius: 50%;
        cursor: pointer; z-index: 10;
        display: flex; align-items: center; justify-content: center;
        transition: all .25s ease;
    }
    .carousel-btn:hover { background: rgba(255,255,255,.3); transform: translateY(-50%) scale(1.1); }
    .carousel-btn.prev { left: 16px; }
    .carousel-btn.next { right: 16px; }
    /* dots */
    .carousel-dots {
        position: absolute; bottom: 14px; left: 50%; transform: translateX(-50%);
        display: flex; gap: 6px; z-index: 10;
    }
    .carousel-dot {
        width: 8px; height: 8px; border-radius: 50%;
        background: rgba(255,255,255,.4); border: none; cursor: pointer;
        transition: all .3s ease; padding: 0;
    }
    .carousel-dot.active { background: #fff; width: 22px; border-radius: 4px; }

    /* --- ABOUT US SECTION --- */
    .about-section {
        padding: 6rem 0;
        background: #fff;
        position: relative;
        overflow: hidden;
    }
    .about-section::before {
        content: '';
        position: absolute;
        top: -120px; right: -120px;
        width: 400px; height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(13,115,119,.07), transparent 70%);
        pointer-events: none;
    }
    .about-section .section-label {
        font-size: .72rem; font-weight: 800; letter-spacing: .18em;
        text-transform: uppercase; color: var(--teal);
        display: flex; align-items: center; gap: .5rem;
        margin-bottom: .6rem;
    }
    .about-section .section-label::before {
        content: '';
        width: 28px; height: 2px;
        background: var(--teal);
        border-radius: 2px;
    }
    .about-section h2.section-title {
        font-family: 'DM Serif Display', serif;
        font-size: clamp(2rem, 4vw, 3rem);
        color: var(--ink);
        margin-bottom: 1.2rem;
        line-height: 1.2;
    }
    .about-section h2.section-title::after { display: none; }
    .about-section .about-text p {
        color: var(--muted);
        line-height: 1.8;
        margin-bottom: 1rem;
        font-size: .97rem;
    }
    .about-img-wrapper {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
    }
    .about-img-wrapper img {
        width: 100%;
        border-radius: 24px;
        box-shadow: 0 24px 60px rgba(13,115,119,.18);
        transition: transform .6s ease;
    }
    .about-img-wrapper:hover img { transform: scale(1.03); }
    .about-img-wrapper .img-badge {
        position: absolute;
        bottom: 20px; left: 20px;
        background: rgba(255,255,255,.95);
        backdrop-filter: blur(12px);
        border-radius: 14px;
        padding: .8rem 1.2rem;
        display: flex; align-items: center; gap: .75rem;
        box-shadow: 0 8px 24px rgba(0,0,0,.12);
    }
    .about-img-wrapper .img-badge .badge-icon {
        width: 40px; height: 40px; border-radius: 10px;
        background: linear-gradient(135deg, var(--teal), var(--teal-light));
        display: flex; align-items: center; justify-content: center;
        color: #fff; font-size: 1.1rem;
    }
    .about-img-wrapper .img-badge .badge-text strong {
        display: block; font-size: .95rem; color: var(--ink);
    }
    .about-img-wrapper .img-badge .badge-text span {
        font-size: .75rem; color: var(--muted);
    }

    /* --- MISSION SECTION --- */
    .mission-section {
        padding: 6rem 0;
        background: linear-gradient(155deg, #f4f9f9 0%, #e6f7f7 100%);
        position: relative; overflow: hidden;
    }
    .mission-section::after {
        content: '';
        position: absolute;
        bottom: -100px; left: -100px;
        width: 350px; height: 350px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(201,148,58,.08), transparent 70%);
        pointer-events: none;
    }
    .mission-section h2.section-title {
        font-family: 'DM Serif Display', serif;
        font-size: clamp(2rem, 4vw, 3rem);
        color: var(--ink); line-height: 1.2;
        margin-bottom: 1.2rem;
    }
    .mission-section h2.section-title::after { display: none; }
    .mission-highlight {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff; border-radius: 20px;
        padding: 1.8rem 2rem; margin-top: 1.5rem;
        position: relative; overflow: hidden;
    }
    .mission-highlight::before {
        content: '"';
        font-family: 'DM Serif Display', serif;
        position: absolute; top: -20px; left: 12px;
        font-size: 8rem; color: rgba(255,255,255,.1); line-height: 1;
    }
    .mission-highlight p {
        color: rgba(255,255,255,.9); font-size: 1rem;
        line-height: 1.75; margin: 0; position: relative; z-index: 1;
    }
    .mission-img-wrapper {
        position: relative;
        border-radius: 24px; overflow: hidden;
    }
    .mission-img-wrapper img {
        width: 100%; border-radius: 24px;
        box-shadow: 0 24px 60px rgba(13,115,119,.14);
        transition: transform .6s ease;
    }
    .mission-img-wrapper:hover img { transform: scale(1.03); }
    .mission-floating-tag {
        position: absolute;
        top: 20px; right: 20px;
        background: var(--gold);
        color: #fff; font-weight: 700; font-size: .78rem;
        padding: .4rem .9rem; border-radius: 50px;
        letter-spacing: .05em; text-transform: uppercase;
        box-shadow: 0 4px 14px rgba(201,148,58,.4);
    }


     <!-- Contact Info -->
    /* Welcome page: contact section hover layout */
    .welcome-contact-section {
        position: relative;
    }
    .welcome-contact-inner {
        display: flex;
        align-items: flex-start;
        gap: 2rem;
        flex-wrap: wrap;
    }
    .welcome-contact-left {
        flex: 1 1 260px;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    /* The "Contact Us" hover button */
    .welcome-contact-btn-wrap {
        position: relative;
        display: inline-block;
    }
    .welcome-contact-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        padding: 0.75rem 1.6rem;
        background: linear-gradient(135deg, var(--teal), var(--teal-dark));
        color: #fff;
        font-weight: 700;
        font-size: 1rem;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0 6px 20px rgba(0,0,0,.25);
        transition: transform .2s, box-shadow .2s;
        white-space: nowrap;
    }
    .welcome-contact-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 28px rgba(0,0,0,.35);
    }
    /* Hover form panel — right side */
    .welcome-contact-right {
        flex: 0 0 360px;
        background: rgba(255,255,255,.97);
        border-radius: 20px;
        overflow: hidden;
        max-height: 0;
        opacity: 0;
        pointer-events: none;
        transform: translateX(20px);
        transition: max-height .6s ease, opacity .4s ease, transform .5s ease;
        box-shadow: 0 20px 60px rgba(0,0,0,.25);
    }
    /* Reveal form when hovering the wrapper */
    .welcome-contact-hover-zone:hover .welcome-contact-right {
        max-height: 600px;
        opacity: 1;
        pointer-events: auto;
        transform: translateX(0);
    }
    .welcome-contact-right h3 {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff;
        padding: 1rem 1.4rem;
        font-size: 1.15rem;
        margin: 0;
    }
    .welcome-contact-right .con-form {
        padding: 1.4rem;
        background: var(--mint);
    }
    .welcome-contact-right .con-form input,
    .welcome-contact-right .con-form textarea {
        width: 100%;
        margin-bottom: 0.9rem;
        padding: .7rem 1rem;
        border-radius: 10px;
        border: 1.5px solid var(--border);
        background: #fff;
        font-size: .9rem;
        outline: none;
        transition: border-color .2s, box-shadow .2s;
    }
    .welcome-contact-right .con-form input:focus,
    .welcome-contact-right .con-form textarea:focus {
        border-color: var(--teal);
        box-shadow: 0 0 0 3px rgba(13,115,119,.12);
    }
    .welcome-contact-right .con-form textarea { height: 90px; resize: none; }
    .welcome-contact-right .con-form button {
        width: 100%;
        padding: .8rem;
        border: none;
        background: linear-gradient(135deg, var(--teal-dark), var(--teal));
        color: #fff;
        border-radius: 10px;
        font-weight: 700;
        font-size: .95rem;
        cursor: pointer;
        transition: opacity .2s;
    }



    
    /* --- CONTACT INFO SECTION --- */
    .contact-info-section {
        padding: 6rem 0;
        background: linear-gradient(145deg, #064a30 0%, #037239 50%, #05904a 100%);
        position: relative; overflow: hidden;
    }
    .contact-info-section::before {
        content: '';
        position: absolute; inset: 0;
        background:
            radial-gradient(ellipse 50% 70% at 0% 50%, rgba(201,148,58,.12), transparent),
            radial-gradient(ellipse 50% 70% at 100% 50%, rgba(5,170,88,.12), transparent);
        pointer-events: none;
    }
    .contact-info-section h2.section-title {
        font-family: 'DM Serif Display', serif;
        font-size: clamp(1.8rem, 3.5vw, 2.6rem);
        color: #fff; line-height: 1.2; margin-bottom: .4rem;
    }
    .contact-info-section h2.section-title::after { display: none; }

    /* enhanced hover-reveal contact cards */
    .con-card, .email-card, .call-card {
        display: flex;
        align-items: center;
        border-radius: 16px !important;
        overflow: hidden !important;
        cursor: pointer;
        transition: all .35s ease !important;
        background: rgba(255,255,255,.08) !important;
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,.15);
        padding: .6rem;
        margin: .5rem auto;
        width: fit-content;
    }
    .con-card:hover, .email-card:hover, .call-card:hover {
        background: rgba(255,255,255,.15) !important;
        transform: translateX(6px) !important;
        border-color: rgba(255,255,255,.35) !important;
        box-shadow: 0 12px 32px rgba(0,0,0,.2);
    }
    .con-icon, .email-icon, .call-icon {
        width: 72px !important; height: 72px !important;
        border-radius: 50% !important;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.8rem !important;
        color: white !important;
        box-shadow: 0 8px 24px rgba(0,0,0,.3) !important;
        transition: all .4s cubic-bezier(.175,.885,.32,1.275) !important;
        position: relative; overflow: hidden;
        margin-left: 0 !important;
        flex-shrink: 0;
    }
    .con-icon { background: linear-gradient(135deg, #1cbfc8, #134185) !important; }
    .email-icon { background: linear-gradient(135deg, #f6c23e, #dda20a) !important; }
    .call-icon { background: linear-gradient(135deg, #9a1cc8, #891b9c) !important; }
    .con-icon:hover, .email-icon:hover, .call-icon:hover {
        transform: scale(1.1) !important;
    }
    .con-text, .email-text, .call-text {
        color: #fff !important;
        font-weight: 600;
        transition: max-width .5s ease, padding .5s ease !important;
        max-width: 0 !important;
        overflow: hidden; white-space: nowrap; padding: 0 !important;
    }
    .con-text h4, .email-text h4, .call-text h4 {
        color: #fff !important; font-size: 1rem; margin-bottom: .25rem;
    }
    .con-text p, .email-text p, .call-text p {
        color: rgba(255,255,255,.8) !important; font-size: .82rem; margin: 0 0 .4rem;
    }
    .con-text a, .email-text a, .call-text a {
        color: #7df0f3 !important; font-size: .8rem; font-weight: 700;
    }
    .con-card:hover .con-text,
    .email-card:hover .email-text,
    .call-card:hover .call-text {
        max-width: 280px !important;
        padding: 12px 20px !important;
    }

    /* contact icons grid wrapper */
    .contact-icons-grid {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
        padding: 1.5rem;
        background: rgba(255,255,255,.06);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(255,255,255,.12);
    }

    /* enhanced contact banner / form */
    .contact-banner-wrapper {
        width: 100% !important;
        max-width: 440px;
        margin: 0 auto !important;
        text-align: center;
    }
    .contact-trigger {
        width: 80px !important; height: 80px !important;
        border-radius: 50% !important;
        background: linear-gradient(135deg, #0573aa, #05aa58) !important;
        color: #fff !important;
        font-size: 1.8rem !important;
        cursor: pointer;
        box-shadow: 0 8px 24px rgba(0,0,0,.3) !important;
        transition: all .25s ease !important;
        border: 3px solid rgba(255,255,255,.3);
        position: relative;
        z-index: 2;
    }
    .contact-trigger:hover { transform: scale(1.1) rotate(15deg) !important; box-shadow: 0 14px 36px rgba(0,0,0,.4) !important; }
    .contact-banner {
        background: rgba(255,255,255,.97) !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        max-height: 0 !important;
        opacity: 0 !important;
        transform: scaleY(0) !important;
        transform-origin: top;
        transition: max-height .7s ease, opacity .4s ease, transform .7s ease !important;
        box-shadow: 0 20px 60px rgba(0,0,0,.3) !important;
        margin-top: 1rem;
    }
    .contact-banner.active { max-height: 700px !important; opacity: 1 !important; transform: scaleY(1) !important; }
    .contact-banner h3 {
        background: linear-gradient(135deg, var(--teal-dark), var(--teal)) !important;
        color: #fff !important; padding: 1.2rem !important;
        font-family: 'DM Serif Display', serif; font-size: 1.3rem !important;
        letter-spacing: .01em;
    }
    .con-form {
        padding: 1.5rem !important;
        background: linear-gradient(145deg, #f0fdfa, #e6f7f7) !important;
    }
    .con-form input, .con-form textarea {
        width: 100%; margin-bottom: 1rem;
        padding: .75rem 1rem;
        border-radius: 10px !important;
        border: 1.5px solid var(--border) !important;
        background: #fff !important;
        font-size: .9rem; color: var(--ink);
        transition: border-color .25s, box-shadow .25s;
        outline: none;
    }
    .con-form input:focus, .con-form textarea:focus {
        border-color: var(--teal) !important;
        box-shadow: 0 0 0 3px rgba(13,115,119,.12) !important;
    }
    .con-form button {
        width: 100% !important; padding: .85rem !important;
        border: none;
        background: linear-gradient(135deg, var(--teal-dark), var(--teal)) !important;
        color: #fff !important; border-radius: 10px !important;
        font-weight: 700; font-size: .95rem; cursor: pointer;
        transition: all .25s ease;
        box-shadow: 0 4px 14px rgba(13,115,119,.35);
    }
    .con-form button:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(13,115,119,.45) !important; }

    /* map container */
    .map-container {
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: 0 16px 48px rgba(0,0,0,.25) !important;
        border: 3px solid rgba(255,255,255,.15);
    }
    .map-container iframe {
        width: 100%; height: 340px !important;
        border: none !important;
        display: block;
    }

    /* --- HOW IT WORKS — NUMBERED TIMELINE PILLS --- */
   .hiw2-section { padding: 6rem 0 5rem; background: var(--bg); }
    .hiw2-head { text-align: center; max-width: 520px; margin: 0 auto 4.5rem; }
    .hiw2-title { font-family: 'DM Serif Display', serif; font-size: clamp(1.9rem, 3.5vw, 2.6rem); color: var(--ink); margin: 0 0 .6rem; }
    .hiw2-sub { color: var(--muted); font-size: .98rem; margin: 0; }

    .hiw2-track { position: relative; height: 340px; }
    .hiw2-pulse { position: absolute; top: 50%; left: 0; width: 100%; height: 90px; transform: translateY(-50%); }
    .hiw2-pulse-path {
        fill: none; stroke: var(--teal); stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
        stroke-dasharray: 1400; stroke-dashoffset: 1400; transition: stroke-dashoffset 1.6s ease;
    }
    .hiw2-pulse-path.hiw2-drawn { stroke-dashoffset: 0; }

    .hiw2-stop { position: absolute; top: 50%; width: 220px; margin-left: -110px; display: flex; flex-direction: column; align-items: center; text-align: center; }
    .hiw2-stop-up { transform: translateY(calc(-50% - 60px)); flex-direction: column-reverse; }
    .hiw2-stop-down { transform: translateY(calc(-50% + 60px)); }

    .hiw2-dot { width: 12px; height: 12px; border-radius: 50%; background: var(--teal); border: 3px solid var(--bg); box-shadow: 0 0 0 2px var(--teal); margin: 10px 0; opacity: 0; transition: opacity .4s ease .8s; }
    .hiw2-dot-gold { background: var(--gold); box-shadow: 0 0 0 2px var(--gold); }
    .hiw2-dot.hiw2-dot-visible { opacity: 1; }

    .hiw2-content { opacity: 0; transform: translateY(10px); transition: opacity .5s ease, transform .5s ease; }
    .hiw2-stop-up .hiw2-content { transition-delay: .95s; }
    .hiw2-stop-down .hiw2-content { transition-delay: .95s; }
    .hiw2-content.hiw2-content-visible { opacity: 1; transform: translateY(0); }

    .hiw2-icon { font-size: 1.5rem; color: var(--teal); margin-bottom: .5rem; display: block; }
    .hiw2-icon-gold { color: var(--gold); }
    .hiw2-content h4 { font-family: 'DM Serif Display', serif; font-size: 1.05rem; color: var(--ink); margin: 0 0 .35rem; }
    .hiw2-content p { font-size: .85rem; color: var(--muted); line-height: 1.55; margin: 0; }

    @media (max-width: 767.98px) {
        .hiw2-track { height: auto; display: flex; flex-direction: column; gap: 2.5rem; padding: 1rem 0; }
        .hiw2-pulse { display: none; }
        .hiw2-stop { position: static; width: 100%; margin: 0; transform: none !important; flex-direction: column !important; }
        .hiw2-dot { opacity: 1; }
        .hiw2-content { opacity: 1; transform: none; }
    }
    

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

.page-header-band {
    background: linear-gradient(135deg, var(--teal-dark) 0%, var(--teal) 100%);
    padding: 3.5rem 2rem;
    text-align: center;
}
.page-header-band h1 {
    color: #fff;
    font-size: clamp(2rem, 4vw, 2.75rem);
    margin-bottom: .6rem;
}
.page-header-band p {
    color: rgba(255,255,255,.85);
    font-size: 1.02rem;
    max-width: 520px;
    margin: 0 auto;
}
 
@media (max-width: 767.98px) {
    .page-header-band { padding: 2.75rem 1.5rem; }
}

    </style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex gap-3 flex-wrap" style="gap:.75rem!important">
            <span><i class="bi bi-geo-alt me-1"></i>Westlands, Nairobi</span>
            <span class="d-none d-sm-inline"><i class="bi bi-envelope me-1"></i>info@symptrack.com</span>
            <span class="d-none d-md-inline"><i class="bi bi-telephone me-1"></i>+254 725 039 848</span>
        </div>
        <div class="soc">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-tiktok"></i></a>
        </div>
    </div>
</div>

<!-- NAVBAR -->
<nav class="main-navbar navbar navbar-expand-lg">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand me-3" href="/">
            <img src="{{ asset('backend/images/logo.jpeg') }}" alt="logo">
            SympTrack
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-4" style="color:var(--teal)"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-center gap-1">

                {{-- HOME dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/"><i class="bi bi-house me-2 text-muted"></i>Home</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/about"><i class="bi bi-info-circle me-2 text-muted"></i>About Us</a></li>
                        <li><a class="dropdown-item" href="/contact"><i class="bi bi-chat-dots me-2 text-muted"></i>Contact</a></li>
                        <li><a class="dropdown-item" href="/FAQs"><i class="bi bi-question-circle me-2 text-muted"></i>FAQs</a></li>
                    </ul>
                </li>

                {{-- DASHBOARD dropdown --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dashboard</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid me-2 text-muted"></i>Overview</a></li>
                        <li><a class="dropdown-item" href="/add_symptom"><i class="bi bi-plus-circle me-2 text-muted"></i>Add Symptom</a></li>
                        <li><a class="dropdown-item" href="/symptom_history"><i class="bi bi-clock-history me-2 text-muted"></i>Symptom History</a></li>
                    </ul>
                </li>

                {{-- LOGIN --}}
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>

                {{-- GET STARTED CTA --}}
                <li class="nav-item ms-1">
                    <a class="nav-link nav-cta" href="/register">Get Started <i class="bi bi-arrow-right ms-1"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="navbar-spacer"></div>

@yield('content')

<!-- FOOTER -->
<footer class="st-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <h5>SympTrack</h5>
                <p style="font-size:.86rem;line-height:1.75;color:rgba(255,255,255,.55)">Your personal health companion for tracking symptoms and understanding your body better.</p>
                <div class="footer-social mt-3">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <h5>Explore</h5>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/FAQs">FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <h5>Account</h5>
                <ul class="footer-links">
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>Contact</h5>
                <ul class="footer-links" style="list-style:none;padding:0">
                    <li style="margin-bottom:.55rem"><i class="bi bi-geo-alt me-2" style="color:var(--teal-light)"></i>Westlands, Nairobi</li>
                    <li style="margin-bottom:.55rem"><a href="mailto:info@symptrack.com" style="padding:0"><i class="bi bi-envelope me-2" style="color:var(--teal-light)"></i>info@symptrack.com</a></li>
                    <li><a href="tel:+254725039848" style="padding:0"><i class="bi bi-telephone me-2" style="color:var(--teal-light)"></i>+254 725 039 848</a></li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="text-center" style="font-size:.78rem;color:rgba(255,255,255,.4)">
            <p class="mb-0">&copy; 2025 SympTrack. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {


    /* ─── 2. WHAT TO EXPECT: banner cloth cards — children revealed on hover via CSS ─── */
    // No JS override needed; CSS handles the hover reveal for .feature-card

    /* ─── 3. HOW IT WORKS: add step classes + step-num bubbles ─── */
        (function () {
    const section = document.querySelector('.hiw2-section');
    if (!section) return;

    const path = section.querySelector('.hiw2-pulse-path');
    const dots = section.querySelectorAll('.hiw2-dot');
    const contents = section.querySelectorAll('.hiw2-content');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                path.classList.add('hiw2-drawn');
                dots.forEach(d => d.classList.add('hiw2-dot-visible'));
                contents.forEach(c => c.classList.add('hiw2-content-visible'));
                observer.unobserve(section);
            }
        });
    }, { threshold: 0.35 });

    observer.observe(section);
})();

    /* ─── 4. Scroll reveal ─── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll(
        '.flip-card-scene, .feature-card, .feature-step-card, .section-title, .st-card, .value-card'
    ).forEach((el, i) => {
        el.classList.add('reveal');
        el.style.transitionDelay = (i % 3) * 0.12 + 's';
        revealObserver.observe(el);
    });
    document.querySelectorAll('.section-title').forEach(el => revealObserver.observe(el));

    /* ─── 5. Carousel dots ─── */
    const carousel = document.querySelector('.custom-carousel');
    if (carousel) {
        const slides = carousel.querySelectorAll('.custom-carousel-item');
        if (!carousel.querySelector('.carousel-dots') && slides.length > 1) {
            const dotsWrap = document.createElement('div');
            dotsWrap.className = 'carousel-dots';
            slides.forEach((_, i) => {
                const dot = document.createElement('button');
                dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
                dotsWrap.appendChild(dot);
            });
            carousel.appendChild(dotsWrap);
            let idx = 0;
            function syncDots(newIdx) {
                idx = (newIdx + slides.length) % slides.length;
                dotsWrap.querySelectorAll('.carousel-dot').forEach((d, i) => d.classList.toggle('active', i === idx));
            }
            const nextBtn = carousel.querySelector('.carousel-btn.next');
            const prevBtn = carousel.querySelector('.carousel-btn.prev');
            if (nextBtn) nextBtn.addEventListener('click', () => syncDots(idx + 1));
            if (prevBtn) prevBtn.addEventListener('click', () => syncDots(idx - 1));
            setInterval(() => syncDots(idx + 1), 4500);
        }
    }

    /* ─── 6. Hero stats bar ─── */
   

    /* ─── 7. About / mission image wrappers ─── */
    const aboutImg = document.querySelector('img[alt="About Us"]');
    if (aboutImg && !aboutImg.closest('.about-img-wrapper')) {
        const wrapper = document.createElement('div');
        wrapper.className = 'about-img-wrapper';
        aboutImg.parentNode.insertBefore(wrapper, aboutImg);
        wrapper.appendChild(aboutImg);
        wrapper.insertAdjacentHTML('beforeend',
            '<div class="img-badge"><div class="badge-icon"><i class="bi bi-heart-pulse"></i></div>' +
            '<div class="badge-text"><strong>Health First</strong><span>Since 2025</span></div></div>');
    }
    const missionImg = document.querySelector('img[alt="Mission"]');
    if (missionImg && !missionImg.closest('.mission-img-wrapper')) {
        const wrapper = document.createElement('div');
        wrapper.className = 'mission-img-wrapper';
        missionImg.parentNode.insertBefore(wrapper, missionImg);
        wrapper.appendChild(missionImg);
        wrapper.insertAdjacentHTML('beforeend', '<div class="mission-floating-tag"></div>');
    }

    /* ─── 8. Contact icons grid ─── */
    const conCard = document.querySelector('.con-card');
    if (conCard) {
        const parent = conCard.parentElement;
        const emailCard = parent.querySelector('.email-card');
        const callCard  = parent.querySelector('.call-card');
        if (emailCard && callCard && !parent.classList.contains('contact-icons-grid')) {
            const grid = document.createElement('div');
            grid.className = 'contact-icons-grid';
            parent.insertBefore(grid, conCard);
            grid.appendChild(conCard);
            grid.appendChild(emailCard);
            grid.appendChild(callCard);
        }
    }
});
</script>
</body>
</html>