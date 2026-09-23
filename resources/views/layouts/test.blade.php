<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SympTrack - Track Your Health</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style> 
   /* Main Styles */
/* Main Styles */
:root {
    --primary-color: #4361ee;
    --primary-hover: #3a56d4;
    --secondary-color: #3f37c9;
    --light-bg: #f8f9fa;
    --dark-color: #212529;
    --light-color: #f8f9fa;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Navigation */
.navbar {
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

  .navbar-navbar {
    background-color: blue;
  }

.navbar-brand {
    font-weight: 700;
    font-size: 1.5rem;
    color: var(--primary-color) !important;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    padding: 5rem 0;
    margin-bottom: 3rem;
}
.hero h1 {
    font-weight: 800;
    margin-bottom: 1.5rem;
    --primary-color: #4eccdf;
    --secondary-color: #1cc88a;
    --mint-green: #98ff98;
    --dark-color: #2c3e50;
    --light-color: #f8f9fc;
}

/* Cards */
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    border-radius: 10px;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}

/* Buttons */
.btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    padding: 0.5rem 1.5rem;
    font-weight: 500;
}

.btn-primary:hover {
    background-color: var(--primary-hover);
    border-color: var(--primary-hover);
}

.btn-outline-primary {
    color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-outline-primary:hover {
    --primary-color: #4e73ff;  
    --secondary-color: #1cc88a; 
    --accent-color: #9d2fec;  
    --light-color: #f8f9fc;
    --dark-color: #2c3e50;

     background: linear-gradient(135deg, 
                                    var(--primary-color) 0%, 
                                    var(--secondary-color) 40%, 
                                    var(--accent-color) 80%);
    border-color: var(--primary-color);
}

/* Feature Icons */
.feature-icon i {
    color: black;
}

/* Footer */
footer {
    margin-top: auto;
    background-color: #2c3e50;
}

footer a:hover {
    opacity: 0.8;
}

.foot {
    width: 1532px;
    margin-left:-332px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero {
        padding: 3rem 0;
    }
    
    .hero h1 {
        font-size: 2.2rem;
    }
    
    .feature-icon i {
        font-size: 2.5rem;
    }
}

/* Form styles */
.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.25);
}

/* Alert styles */
.alert {
    border-radius: 8px;
}

/* Dashboard styles */
.dashboard-card {
    border-left: 4px solid var(--primary-color);
}

/* Symptom severity indicator */
.severity-indicator {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin-right: 8px;
}

.severity-1 { background-color: #4CAF50; }
.severity-2 { background-color: #8BC34A; }
.severity-3 { background-color: #FFC107; }
.severity-4 { background-color: #FF9800; }
.severity-5 { background-color: #F44336; }

/* Main Styles */
:root {
    --primary-color: #36b9cc;      /* Teal blue */
    --primary-hover: #2a96a5;      /* Darker teal */
    --secondary-color: #1cc88a;    /* Mint green */
    --light-color: #f8f9fc;        /* Light grayish white */
    --dark-color: #2c3e50;         /* Dark blue-gray */
    --accent-color: #4e73df;       /* Soft blue */
    --light-mint: #d4edda;         /* Light mint for backgrounds */
    --border-color: rgba(54, 185, 204, 0.1);
}

/* Base Styles */
body {
    font-family: 'Poppins', sans-serif;
    color: var(--dark-color);
    line-height: 1.6;
    background-color: #b6eef6;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Typography */
h1, h2, h3, h4, h5, h6 {
    font-weight: 700;
    color: white;
}

/* Navigation */
.navbar {
    background-color: white !important;
    padding: 1rem 0;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
}

.navbar-brand {
    font-weight: 700;
    font-size: 1.75rem;
    color: var(--primary-color) !important;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg, var(--light-color) 0%, #e2f3f5 100%);
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
    margin-bottom: 3rem;
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background: url('https://illustrations.popsy.co/white/health-check.svg') no-repeat right center/contain;
    opacity: 0.1;
    z-index: 0;
}

.hero-content {
    position: relative;
    z-index: 1;
    text-align: center;
    margin-top: -110px;
}

.hero h1 {
    color: var(--primary-color);
    font-weight: 800;
    margin-bottom: 1.5rem;
}

/* Buttons */
.btn-primary {
    background-color: var(--primary-color);
    border: none;
    padding: 0.75rem 2rem;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(54, 185, 204, 0.3);
}

.btn-outline-primary {
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
    background: transparent;
}

.btn-outline-primary:hover {
    background-color: var(--primary-color);
    color: white;
}

/* Cards */
.card, .feature-card {
    background: #228ad0;
    border: 1px solid var(--border-color);
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    padding: 2rem;
    height: 100%;
}

.card:hover, .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

  .arrow {
      font-size: 6rem;
      color: var(--primary-color);
      margin-left: 315px;
      margin-top: -180px;
  }

  .arroww {
      font-size: 6rem;
      color: var(--primary-color);
      margin-left: 900px;
      margin-top: -200px;
  }

  .feature-step-card {
      background: #228ad0;
      border: 3px solid #1e046e00;
      border-radius: 100px;
      padding: 20px;
      height: auto;
      min-height: 170px;
      color: white;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      z-index: 999;
  }

  .step-arrow {
      font-size: 4rem;
      color: #003d99;
      text-align: center;
  }

.text-center {
    color: white;
}

/* Feature Icons */
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

.feature-cardd {
    background: rgb(45, 236, 201);
    border: 1px solid var(--border-color);
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    padding: 2rem;
    height: 150px;
    width: 370px;
    margin-left: -300px;
}

.feature-carddd {
    background: rgb(45, 236, 201);
    border: 1px solid var(--border-color);
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    padding: 2rem;
    height: 152px;
    width: 370px;
    margin-left: 250px;
    margin-top: -165px;
}
.feature-carddd5 {
    background: rgb(45, 236, 201);
    border: 1px solid var(--border-color);
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    padding: 2rem;
    height: 153px;
    width: 370px;
    margin-left: 800px;
    margin-top: -161px;
}

/* Section Titles */
.section-title {
    position: relative;
    display: inline-block;
    margin-bottom: 3rem;
    color: var(--primary-color);
    
}



.section-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 50px;
    height: 4px;
    background: var(--secondary-color);
    border-radius: 2px;
}

/* How It Works Section */
.how-it-works {
  padding: 5rem 0; 
}

.section-title{
  color: black;
}

.lead{
  color: black;
  font-size: 1.25rem;
  font-weight: 600;
}

/*.step-number {
    width: 45px;
    height: 45px;
    border-radius: 12px;
    background: white;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin-left: 100px;
    flex-shrink: 0;
    font-size: 1.25rem;
}*/
.arrow {
    font-size: 6rem;
    color: var(--primary-color);
    margin-left: 315px;
    margin-top: -180px;
}
.arroww {
    font-size: 6rem;
    color: var(--primary-color);
    margin-left: 900px;
    margin-top: -200px;
}
/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
    color: white;
    padding: 5rem 0;
    position: relative;
    overflow: hidden;
}

.cta-section h2 {
    color: white;
}

.cta-btn {
    background-color: white;
    color: var(--primary-color) !important;
    padding: 0.75rem 2.5rem;
    font-weight: 600;
    border-radius: 50px;
    transition: all 0.3s ease;
    display: inline-block;
    border: none;
}

.cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* Footer */
footer {
    background-color: var(--dark-color);
    color: #b7b9cc;
    padding: 3rem 0 1.5rem;
    margin-top: auto;
}

footer h5 {
    color: white;
    margin-bottom: 1.5rem;
    font-weight: 600;
}

footer a {
    color: #b7b9cc;
    text-decoration: none;
    transition: all 0.3s ease;
}

footer a:hover {
    color: white;
    text-decoration: none;
    transform: translateX(5px);
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 0.75rem;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.1);
    margin-right: 0.75rem;
    transition: all 0.3s ease;
    color: white;
    font-size: 1.1rem;
}

.social-links a:hover {
    background-color: var(--primary-color);
    transform: translateY(-3px);
}

/* Responsive adjustments */
@media (max-width: 991.98px) {
    .hero {
        text-align: center;
        padding: 4rem 0;
    }
    
    .hero::before {
        display: none;
    }
    
    .section-title {
        text-align: center;
        
    }
    
    .section-title::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .step {
        margin-bottom: 2rem;
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}

/* Form styles */
.form{
    color: white;
}
.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.2rem rgba(54, 185, 204, 0.25);
}

/* Alert styles */
.alert {
    border-radius: 8px;
    border: none;
}

/* Dashboard styles */
.dashboard-card {
    border-left: 4px solid var(--primary-color);
}

/* Symptom severity indicator */
.severity-indicator {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 4px;
    margin-right: 8px;
}

.severity-1 { background-color: #1cc88a; } /* Mint green */
.severity-2 { background-color: #36b9cc; } /* Teal blue */
.severity-3 { background-color: #f6c23e; } /* Yellow */
.severity-4 { background-color: #e74a3b; } /* Red */
.severity-5 { background-color: #e83e8c; } /* Pink */

/* ====== GLOBAL RESPONSIVE FIXES ====== */

/* Make sure everything scales properly */
html, body {
  width: 100%;
  overflow-x: hidden;
  scroll-behavior: smooth;
}

/* Responsive text and buttons */
h1, h2, h3, h4, h5, p, a, button, label {
  word-wrap: break-word;
  line-height: 1.4;
}

/* Improve navbar responsiveness */
.navbar-nav .nav-item {
  margin-bottom: 8px;
}
@media (min-width: 992px) {
  .navbar-nav .nav-item {
    margin-bottom: 0;
  }
}


/* Make navbar brand text wrap gracefully */
.navbar-brand {
  white-space: normal;
  word-break: break-word;
  text-align: center;
}

/* Adjust navbar on small screens */
@media (max-width: 767px) {
  .navbar .container {
    flex-direction: column;
    align-items: center;
    
  }
}

/* ====== TABLE RESPONSIVENESS ====== */
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
table th, table td {
  white-space: nowrap;
}

/* ====== BUTTONS ====== */
.btn {
  width: 100%;
}
@media (min-width: 576px) {
  .btn {
    width: auto;
  }
}

/* ====== FORM ELEMENTS ====== */
input, select, textarea {
  width: 100%;
}

/* ====== FOOTER ====== */
footer {
  background: #08042b; 
  color: #fff;
  padding: 40px 0;
}
footer h5 {
  font-weight: 600;
  margin-bottom: 15px;
}
footer .footer-links li {
  list-style: none;
}
footer .footer-links a {
  color: #fff;
  text-decoration: none;
}
footer .social-links a {
  color: #fff;
  margin-right: 10px;
  font-size: 18px;
}
@media (max-width: 768px) {
  footer .col-lg-4, footer .col-lg-2 {
    text-align: center;
  }
}

/* ====== DASHBOARD / CARDS / SECTIONS ====== */
.card {
  margin-bottom: 20px;
}
@media (min-width: 992px) {
  .card {
    margin-bottom: 30px;
  }
}

/* ====== LAYOUT GRID ====== */
.container, .container-fluid {
  padding-left: 15px;
  padding-right: 15px;
}
.row > [class*='col-'] {
  margin-bottom: 15px;
}

/* ====== SMALL DEVICE OPTIMIZATIONS ====== */
@media (max-width: 576px) {
  h1, h2 {
    font-size: 1.5rem;
  }
  h3, h4, h5 {
    font-size: 1.2rem;
  }
  .navbar-brand img {
    width: 40px;
    height: 40px;
  }
}

/* ====== LOGIN & REGISTER PAGE ====== */
.auth-form {
  max-width: 400px;
  margin: auto;
  padding: 20px;
  border-radius: 12px;
  background-color: #fff;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
@media (max-width: 576px) {
  .auth-form {
    margin: 10px;
    padding: 15px;
  }
}

/* ====== DASHBOARD LAYOUT ====== */
.dashboard-container {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
@media (min-width: 768px) {
  .dashboard-container {
    flex-direction: row;
  }
}

.text{
  color: white;
}

.text-decoration{
  color: black;
  text-decoration: none;
  font-weight: bold;
}

 /* --- FORM CARD --- */
    .card-form {
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .form-control-lg, .form-select {
      border-radius: 10px;
    }
    .severity-value-container {
      min-width: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* --- FOOTER --- */
    footer {
      background: #1c1c1c;
      color: #fff;
      padding: 3rem 0 1rem;
    }
    footer h5 {
      margin-bottom: 1rem;
    }
    footer a {
      color: #fff;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
    .social-links a {
      font-size: 1.2rem;
      margin-right: 10px;
      color: #fff;
      transition: 0.3s;
    }
    .social-links a:hover {
      color: #0dcaf0;
    }
    .footer-links {
      list-style: none;
      padding: 0;
    }
    .footer-links li {
      margin-bottom: 0.5rem;
    }
    hr {
      border-color: rgba(255,255,255,0.1);
    }

        
        .btn-primary {
             --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;

            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }

        .body {
            background-color: lightblue;
        }

         :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --mint-green: #98ff98;
            --dark-color: #2c3e50;
            --light-color: #f8f9fc;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: lightblue;
            min-height: 100vh;
            color: #333;
            line-height: 1.6;
            margin: 0;
        }

        /* SEPARATION HERO */
        .login-header {
            padding: 120px 0 40px;
            text-align: center;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            margin-bottom: 2.5rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .btn-primary {
            background: var(--mint-green);
            color: #333;
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .navbar .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 0.8rem 0;
        }

        .login-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            box-shadow: 0 12px 25px rgba(0,0,0,0.15);
            transition: 0.3s;
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .login-card .card-body {
            color: white;
        }

        .login-card .form-label,
        .login-card .text-muted {
            color: rgba(255,255,255,0.95) !important;
        }

        .login-card .form-control {
            background: rgba(255,255,255,0.9);
            border: 1px solid rgba(255,255,255,0.3);
        }

        footer {
            margin-top: 4rem;
            background-color: #4e73df;
            color: white;
            padding: 3rem 0;
        }

        :root {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;
        }
    
    .btn-primary {
       background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
      border: none;
      padding: 0.6rem 1.5rem;
      font-weight: 600;
      border-radius: 50px;
      transition: all 0.3s;
      color: white;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
      background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
      color: white;
    }
    
    .navbar {
      background-color: white;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 0.8rem 0;
    }
    
    body {
      padding-top: 76px;
      background-color: lightblue;
    }
    .card-form {
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color), var(--mint-green), var(--primary-color));
  color: white;
  border-radius: 15px;
}

/* Make inner form fields readable (white backgrounds) */
.card-form .form-control,
.card-form .form-select,
.card-form textarea {
  background-color: white !important;
  color: black !important;
}

.card-form label {
  font-weight: 600;
  color: white;
}

.card-form .form-text {
  color: #f1f1f1 !important;
}

.card-form h2 {
  color: white;
}

:root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --mint-green: #98ff98;
            --dark-color: #2c3e50;
            --light-color: #f8f9fc;
        }
        
        /* ---------- IMPORTANT: ensure content starts below the fixed navbar ---------- */
        /* Set a base top padding that is >= navbar height */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: lightblue;
            min-height: 100vh;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding-top: 100px !important; /* reliably pushes page content below fixed navbar */
        }
        /* On small screens the navbar can grow in height when the toggler is visible;
           increase padding to avoid overlap on mobile */
        @media (max-width: 767.98px) {
            body { padding-top: 140px !important; }
        }

        /* Form submit button */
        .btn-primary {
            background: var(--mint-green);
            color: #333;
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        /* Navigation buttons */
        .navbar .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        .register-hero {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 50%, #1cc88a 100%);
            color: white;
            padding: 6rem 0 4rem;
            margin: -1px 0 3rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .register-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .register-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
           
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .register-card .card-body {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
        }
        
        .register-card .form-label,
        .register-card .text-muted,
        .register-card .form-check-label {
            color: rgba(255, 255, 255, 0.9) !important;
        }
        
        .register-card .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .register-card .form-control:focus {
            background-color: white;
            border-color: white;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
        
        .register-card .input-group-text {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .register-card a {
            color: white;
            text-decoration: underline;
        }
        
        .register-card a:hover {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .register-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .form-check-input:checked {
            background-color: white;
            border-color: white;
        }
        
        .form-check-input {
            background-color: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .form-check-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .form-text {
            font-size: 0.8rem;
            color: #6c757d;
        }

         :root {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;
        }
        
        body {
            background-color: lightblue;
            padding-top: 80px;
            min-height: 100vh;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            overflow: hidden;
        }
        
        .card-body {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }
        
        .card-title, .card-text, .text-muted {
            color: white !important;
        }
        
        .table {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        :root {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;
        }

body {
    font-family: 'Poppins', sans-serif;
    background-color: lightblue;
    padding-top: 100px !important;
    min-height: 100vh;
}

.btn-primary {
    background: linear-gradient(135deg, 
                                var(--primary-color) 0%, 
                                var(--secondary-color) 40%, 
                                var(--accent-color) 80%);
    border: none;
    padding: 0.6rem 1.5rem;
    font-weight: 600;
    border-radius: 50px;
    color: white;
    transition: all 0.3s;
}

.btn-primary:hover {
    background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
}

.navbar {
    background-color: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.card-body {
    --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;
    
    background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
    color: white;
    z-index: 2;
    position: relative;
}

.card-title, .card-text, .text-muted {
    color: white !important;
}

.table {
    background-color: white;
    border-radius: 8px;
}

.table-responsive {
    overflow-x: auto;
    
}

.severity-1 { background-color: #4CAF50; }
.severity-2 { background-color: #8BC34A; }
.severity-3 { background-color: #FFC107; }
.severity-4 { background-color: #FF9800; }
.severity-5 { background-color: #F44336; }

.severity-indicator {
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin-right: 5px;
}

/* Footer background to make it visible */
.footer {
    background-color: #112232;
    color: white;
    padding: 40px 0;
}

footer a {
    color: white;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

:root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --accent-color: #f6c23e;
            --mint-green: #98ff98;
            --mint-green-light: #e0f7e0;
            --dark-color: #2c3e50;
            --light-color: #f8f9fc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            background: linear-gradient(135deg, #f0f5ff 0%, #e6f7ff 50%, #e1f7f0 100%);
            background-attachment: fixed;
            min-height: 100vh;
            padding-top: 76px;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Floating elements */
        .floating {
            position: absolute;
            border-radius: 50%;
            background: rgba(78, 115, 223, 0.1);
            backdrop-filter: blur(5px);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }
        
        .floating-1 {
            width: 300px;
            height: 300px;
            top: -100px;
            right: -100px;
            background: radial-gradient(circle, rgba(78, 115, 223, 0.15) 0%, rgba(78, 115, 223, 0) 70%);
        }
        
        .floating-2 {
            width: 200px;
            height: 200px;
            bottom: 50px;
            left: -50px;
            background: radial-gradient(circle, rgba(28, 200, 138, 0.1) 0%, rgba(28, 200, 138, 0) 70%);
            animation-delay: 3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .btn-primary {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;
            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }
        
        .hero {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 50%, #1cc88a 100%);
            color: white;
            padding: 8rem 0 6rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .hero h1 {
            position: relative;
            display: inline-block;
        }
        
        .hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .contact-form {
            background: rgba(236, 6, 6, 0.9);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        
        .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .contact-card {
            background: rgba(155, 252, 189, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            padding: 2rem;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .contact-card .card-content {
            position: relative;
            z-index: 2;
            transform: translateZ(20px);
        }
        
        .contact-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
/* CONTACT INFO ICONS*/

/* Location*/
.con-card {
    display: flex;
    align-items: center;
    width: max-content;
    background: #0573aa;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-out;
    height:max-content;
    background: transparent;
}

/* ICON */
.con-icon{ 
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1cbfc8ff, #134185ff);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    color: white;
    font-size: 2rem;
    box-shadow: 0 10px 25px rgba(28, 200, 138, 0.3);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden; 
    margin-left: 200px;

}

/* ICON HOVER EFFECT */
.con-icon::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transform: translateX(-100%);
    transition: 0.6s;
}

.con-icon:hover::before {
    transform: translateX(100%);
}

.con-icon:hover {
    transform: translateY(-5px) scale(1.1);
}

/* TEXT PANEL */
.con-text {
    max-width: 0;
    overflow: hidden;
    white-space: nowrap;
    
    color: white;
    font-weight: bold;
    transition: 0.5s ease, padding 0.5s ease;
    padding: 0;
}

/* HOVER TO REVEAL TEXT */
.con-card:hover .con-text {
    max-width: 250px; /* width of revealed panel */
    padding: 15px 20px;
}

/* Email*/
.email-card {
    display: flex;
    align-items: center;
    width: max-content;
    background: #0573aa;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-out;
    height:max-content;
    background: transparent;
}

/* ICON */
.email-icon{ 
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #ffff8dff, #fff454ff);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    color: white;
    font-size: 2rem;
    box-shadow: 0 10px 25px rgba(28, 200, 138, 0.3);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden; 
    margin-left: 200px;
    transition: transform 0.2s;

}

/* ICON HOVER EFFECT */
.email-icon::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transform: translateX(-100%);
    transition: 0.6s;
}

.email-icon:hover::before {
    transform: translateX(100%);
}

.email-icon:hover {
    transform: translateY(-5px) scale(1.1);
}

/* TEXT PANEL */
.email-text {
    max-width: 0;
    overflow: hidden;
    white-space: nowrap;
    
    color: white;
    font-weight: bold;
    transition: 0.5s ease, padding 0.5s ease;
    padding: 0;
}

/* HOVER TO REVEAL TEXT */
.email-card:hover .email-text {
    max-width: 250px; /* width of revealed panel */
    padding: 15px 20px;
}

/* Call*/
.call-card {
    display: flex;
    align-items: center;
    width: max-content;
    background: #0573aa;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease-out;
    height:max-content;
    background: transparent;
}

/* ICON */
.call-icon{ 
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #9a1cc8ff, #891b9cff);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    color: white;
    font-size: 2rem;
    box-shadow: 0 10px 25px rgba(28, 200, 138, 0.3);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden; 
    margin-left: 200px;

}

/* ICON HOVER EFFECT */
.call-icon::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transform: translateX(-100%);
    transition: 0.6s;
}

.call-icon:hover::before {
    transform: translateX(100%);
}

.call-icon:hover {
    transform: translateY(-5px) scale(1.1);
}

/* TEXT PANEL */
.call-text {
    max-width: 0;
    overflow: hidden;
    white-space: nowrap;
    
    color: white;
    font-weight: bold;
    transition: 0.5s ease, padding 0.5s ease;
    padding: 0;
}

/* HOVER TO REVEAL TEXT */
.call-card:hover .call-text {
    max-width: 250px; /* width of revealed panel */
    padding: 15px 20px;
}

    /* END OF CONTACT ICONS*/


    /* CONTACT FORM*/

    .contact-banner-wrapper {
        width: 320px;
        margin: 40px auto;
        text-align: center;
        
    }

    /* ICON BUTTON */
    .contact-trigger {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        border: none;
        background: linear-gradient(135deg, #0573aa, #05aa58);
        color: white;
        font-size: 2rem;
        cursor: pointer;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        transition: transform 0.2s;
    }

    .contact-trigger:hover {
        transform: scale(1.1);
    }
    .contact-banner {
    background: white;
    border-radius: 0 0 15px 15px;
    overflow: hidden;
    max-height: 0;     /* key to hide */
    opacity: 0;        /* fade */
    transform: scaleY(0);  /* fold */
    transform-origin: top;

    transition:
        max-height 0.7s ease,
        opacity 0.4s ease,
        transform 0.7s ease;

    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

    /* WHEN ACTIVE */
    .contact-banner.active {
        max-height: 700px;
        opacity: 1;
        transform: scaleY(1); /* unfold */
    }

    /* FORM CONTENT */
    .con-form {
        padding: 20px;
        --primary-color: #4e73ff;  
        --secondary-color: #1cc88a; 
        --accent-color: #9d2fec;  

        background: linear-gradient(135deg, 
                                var(--primary-color) 0%, 
                                var(--secondary-color) 40%, 
                                var(--accent-color) 80%);
    }

    .con-form input,
    .con-form textarea {
        width: 100%;
        margin-bottom: 12px;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .con-form button {
        width: 100%;
        padding: 12px;
        border: none;
        background: linear-gradient(135deg, #0573aa, #05aa58);
        color: white;
        border-radius: 8px;
        cursor: pointer;
    }


/* END OF CONTACT FORM*/

    .contact-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--mint-green), #1cc88a);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        color: white;
        font-size: 2rem;
        box-shadow: 0 10px 25px rgba(28, 200, 138, 0.3);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease-out;
    }

    
    .contact-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transform: translateX(-100%);
        transition: 0.6s;
    }
    
    .contact-icon:hover::before {
        transform: translateX(100%);
    }
    
    .contact-icon:hover {
        transform: translateY(-3px) scale(1.05);
    }
    
    
    .contact-icon.email { background: linear-gradient(135deg, #f6c23e, #dda20a); }
    .contact-icon.phone { background: linear-gradient(135deg, #e74a3b, #be2617); }
    
    .form-control {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 0.75rem 1rem;
        transition: all 0.3s;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        position: relative;
    }
    
    .form-group {
        position: relative;
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        position: absolute;
        top: -10px;
        left: 15px;
        background: rgb(170, 87, 87);
        padding: 0 8px;
        font-size: 0.85rem;
        color: var(--primary-color);
        font-weight: 500;
        border-radius: 10px;
        z-index: 1;
    }
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.15);
        background-color: white;
        outline: none;
    }
    
    .map-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
        .map-container iframe {
            width: 100%;
            height: 100%;
            min-height: 300px;
            border: none;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fc;
            color: var(--primary-color);
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
            margin-top: 5rem;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: #dee2e6;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 3rem;
        }
        
        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-outline-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .btn-outline-primary:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
            border-color: transparent;
        }
        
        .btn-outline-primary:hover::before {
            width: 100%;
        }

        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --accent-color: #f6c23e;
            --mint-green: #98ff98;
            --mint-green-light: #e0f7e0;
            --dark-color: #2c3e50;
            --light-color: #f8f9fc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            background: linear-gradient(135deg, #f8f9fc 0%, #e6f7ff 50%, #e1f7f0 100%);
            background-attachment: fixed;
            min-height: 100vh;
            padding-top: 76px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(78, 115, 223, 0.03) 0%, rgba(28, 200, 138, 0.03) 100%);
            pointer-events: none;
            z-index: -1;
        }
        
        .btn-primary {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;

            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }
        
        .hero {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 50%, #1cc88a 100%);
            color: white;
            padding: 8rem 0 6rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .search-container {
            position: relative;
            max-width: 600px;
            margin: 0 auto 3rem;
            z-index: 2;
        }
        
        .search-box {
            max-width: 600px;
            position: relative;
            margin: 0 auto;
        }
        
        .search-box input {
            padding: 1rem 1.5rem;
            border-radius: 50px;
            border: 2px solid #eee;
            width: 100%;
            padding-right: 130px;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .search-box input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }
        
        .search-box .btn {
            position: absolute;
            right: 5px;
            top: 5px;
            bottom: 5px;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            width: 50px;
            border-radius: 50%;
            background: var(--mint-green);
            color: white;
            border: none;
        }
        
        .search-box .btn:hover {
            background: var(--secondary-color);
            transform: scale(1.05);
        }
        
        .faq-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .faq-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .faq-header {
            padding: 1.25rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.5);
        }
        
        .faq-header:hover {
            background: rgba(28, 200, 138, 0.1);
        }
        
        .faq-header h5 {
            margin: 0;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .faq-body {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-card.active .faq-body {
            padding: 0 1.5rem 1.5rem;
            max-height: 1000px;
        }
        
        .faq-icon {
            transition: transform 0.3s;
        }
        
        .faq-card.active .faq-icon {
            transform: rotate(180deg);
        }
        
        .category-title {
            color: var(--primary-color);
            margin: 3rem 0 1.5rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            display: inline-block;
            background: linear-gradient(90deg, #e0f7e0, #ffffff);
            border-left: 4px solid var(--mint-green);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .contact-card {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
            height: 100%;
            border-top: 4px solid var(--primary-color);
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.75rem;
            color: white;
            background: linear-gradient(135deg, var(--primary-color), #224abe);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.3);
        }
        
        .contact-icon:hover {
            background: var(--secondary-color);
            transform: scale(1.05);
        }
        
        .no-results {
            text-align: center;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .no-results i {
            font-size: 3rem;
            color: #e9ecef;
            margin-bottom: 1rem;
        }
        
        .floating {
            position: absolute;
            border-radius: 50%;
            background: rgba(78, 115, 223, 0.1);
            backdrop-filter: blur(5px);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 8px;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
            color: white;
        }
        
        .footer-links a {
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white !important;
            padding-left: 5px;
        }

         :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --mint-green: #98ff98;
            --dark-color: #2c3e50;
            --light-color: #f8f9fc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            background: linear-gradient(135deg, #f8f9fc 0%, #e6f7ff 50%, #e1f7f0 100%);
            background-attachment: fixed;
            min-height: 100vh;
            padding-top: 76px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(78, 115, 223, 0.03) 0%, rgba(28, 200, 138, 0.03) 100%);
            pointer-events: none;
            z-index: -1;
        }
        
        /* Floating elements */
        .floating {
            position: absolute;
            border-radius: 50%;
            background: rgba(78, 115, 223, 0.1);
            backdrop-filter: blur(5px);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }
        
        .floating-1 {
            width: 400px;
            height: 400px;
            top: -150px;
            right: -150px;
            background: radial-gradient(circle, rgba(78, 115, 223, 0.1) 0%, rgba(78, 115, 223, 0) 70%);
        }
        
        .floating-2 {
            width: 300px;
            height: 300px;
            bottom: 50px;
            left: -100px;
            background: radial-gradient(circle, rgba(28, 200, 138, 0.1) 0%, rgba(28, 200, 138, 0) 70%);
            animation-delay: 3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .btn-primary {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;

            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
        }

        /* OUR VALUES CARDS*/
        
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

/* ✨ GLOW RING */
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

/* 🌊 LIGHT SWEEP */
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

/* 🚀 HOVER INTERACTION */
.feature-card-1:hover {
    transform: translateY(-52px) scale(1.04);
    box-shadow:
        0 40px 80px rgba(0,0,0,0.18),
        0 0 60px rgba(78,115,223,0.35);
}

.feature-card-1:hover::after {
    opacity: 1;
}

/* 🧠 CONTENT FEEL */
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

/* ✨ GLOW RING */
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

/* 🌊 LIGHT SWEEP */
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

/* 🚀 HOVER INTERACTION */
.feature-card-2:hover {
    transform: translateY(-52px) scale(1.04);
    box-shadow:
        0 40px 80px rgba(0,0,0,0.18),
        0 0 60px rgba(78,115,223,0.35);
}

.feature-card-2:hover::after {
    opacity: 1;
}

/* 🧠 CONTENT FEEL */
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

/* ✨ GLOW RING */
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

/* 🌊 LIGHT SWEEP */
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

/* 🚀 HOVER INTERACTION */
.feature-card-3:hover {
    transform: translateY(-52px) scale(1.04);
    box-shadow:
        0 40px 80px rgba(0,0,0,0.18),
        0 0 60px rgba(78,115,223,0.35);
}

.feature-card-3:hover::after {
    opacity: 1;
}

/* 🧠 CONTENT FEEL */
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
   /* END OF OUR VALUES CARDS*/   
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
        }
        
        .hero {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 50%, #1cc88a 100%);
            color: white;
            padding: 8rem 0 6rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .hero h1 {
            position: relative;
            display: inline-block;
        }
        
        .hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        
        .section-title {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }
        
        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .team{
            background-color: #b7f8e0;
        }
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 8px;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
            color: white;
        }
        
        .footer-links a {
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white !important;
            padding-left: 5px;
        }

        :root {
            --primary-color: #4e73df;
            --secondary-color: #1cc88a;
            --mint-green: #98ff98;
            --dark-color: #2c3e50;
            --light-color: #f8f9fc;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            line-height: 1.6;
            background: linear-gradient(135deg, #f8f9fc 0%, #e6f7ff 50%, #e1f7f0 100%);
            background-attachment: fixed;
            min-height: 100vh;
            padding-top: 76px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(78, 115, 223, 0.03) 0%, rgba(28, 200, 138, 0.03) 100%);
            pointer-events: none;
            z-index: -1;
        }
        
        /* Floating elements */
        .floating {
            position: absolute;
            border-radius: 50%;
            background: rgba(78, 115, 223, 0.1);
            backdrop-filter: blur(5px);
            z-index: 0;
            animation: float 15s infinite ease-in-out;
        }
        
        .floating-1 {
            width: 400px;
            height: 400px;
            top: -150px;
            right: -150px;
            background: radial-gradient(circle, rgba(78, 115, 223, 0.1) 0%, rgba(78, 115, 223, 0) 70%);
        }
        
        .floating-2 {
            width: 300px;
            height: 300px;
            bottom: 50px;
            left: -100px;
            background: radial-gradient(circle, rgba(28, 200, 138, 0.1) 0%, rgba(28, 200, 138, 0) 70%);
            animation-delay: 3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .btn-primary {
            --primary-color: #4e73ff;  
            --secondary-color: #1cc88a; 
            --accent-color: #9d2fec;  
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;

            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, var(--accent-color), var(--secondary-color));
        }
        
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

        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }
        
        .hero {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 50%, #1cc88a 100%);
            color: white;
            padding: 8rem 0 6rem;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .hero h1 {
            position: relative;
            display: inline-block;
        }
        
        .hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        
        .section-title {
            font-weight: 700;
            color: rgb(60, 6, 110);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;

        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }
        
        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
            
        }
        
        .team{
            background-color: #b7f8e0;
        }
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 8px;
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
            color: white;
        }
        
        .footer-links a {
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white !important;
            padding-left: 5px;
        }
    
        .below-nav {
            --primary-color: #4e73ff;  /* Bright Blue */
            --secondary-color: #1cc88a; /* Bright Green */
            --accent-color: #9d2fec;   /* Dark Purple */
            --light-color: #f8f9fc;
            --dark-color: #2c3e50;
            background: linear-gradient(135deg, 
                                        var(--primary-color) 0%, 
                                        var(--secondary-color) 40%, 
                                        var(--accent-color) 80%);
            color: var(--light-color);
        }

        
        .socials {
            padding-left: 30px;
            
        }

        .top {
            padding-left: 10px;
        }
    .comms {
    position: fixed;
    top: 0;
    width: 100%;
    height: 40px;
    z-index: 9999;
    background: linear-gradient(
        71deg,                           
        #eef1fa 0%,                      
        #dce2fa 18%,

        #3ed176 18%,  
        #539be8 58%,                  
        #d27ef0 78%,

        #f3ecfa 62%,                     
        #d9e8f7 100%
    );
}

.comms-span {
    display: flex;
    width: 100%;
    padding: 0 20px;
    margin-left: 250px;
}
.main-nav {
    position: fixed !important;
    top: 40px; /* under comms bar */
    left: 0;
    width: 100%;
    height: 75px;
    background: rgb(221, 247, 221);
    z-index: 9998;
    display: flex;
    align-items: center;
}
.Links {
    padding-left: 20px;
    color: linear;
    margin-top: -30px;
    color: black;
}
.Links a:hover {
    color: purple;
}

/* container for positioning */
.nav-container {
    display: flex;
    align-items: center;
}

/* parent list */
.nav-links {
    list-style: none;
    display: flex;
    gap: 25px;
    margin-left: 300px;
    align-items: center;
}

.nav-links li {
    position: relative;
}

/* all links */
.nav-links a {
    text-decoration: none;
    color: black;
    font-weight: 600;
    padding: 8px 12px;
    transition: color 0.3s, transform 0.2s;
}

/* hover effect */
.nav-links a:hover {
    color: #9d2fec; /* your purple */
    transform: translateY(-2px);
}

/* DROPDOWN MENU */
.dropdown-menu {
    position: absolute;
    top: 40px;
    left: 0;
    background: white;
    border-radius: 8px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    padding: 10px 0;
    display: none; /* HIDDEN BY DEFAULT */
    min-width: 160px;
    z-index: 9999;
}

/* items inside dropdown */
.dropdown-menu li {
    width: 100%;
}

.dropdown-menu a {
    display: block;
    padding: 10px 15px;
    color: black;
}

.dropdown-menu a:hover {
    background: #f8f9fc;
    color: #4e73ff; /* your blue */
}

/* SHOW MENU ON HOVER */
.dropdown:hover .dropdown-menu {
    display: block;
}

/* optional: smooth fade */
.dropdown-menu {
    animation: fadeIn 0.25s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(5px); }
    to { opacity: 1; transform: translateY(0); }
} 


/* HERO SECTION */
.hero-below-nav {
    --primary-color: #4e73ff;  /* Bright Blue */
    --secondary-color: #1cc88a; /* Bright Green */
    --accent-color: #9d2fec;   /* Dark Purple */
    --light-color: #f8f9fc;
    --dark-color: #2c3e50;

    background: linear-gradient(135deg, 
                                var(--primary-color) 15%, 
                                var(--secondary-color) 60%, 
                                var(--accent-color) 90%);
    color: var(--light-color);
    padding: 8rem 0 6rem;
    margin-bottom: 3rem;
    position: relative;
    overflow: hidden;
}

/* CAROUSEL */
.custom-carousel {
    position: relative;
    width: 100%;
    max-width: 1300px;
    height: 520px;
    margin: -70px auto 0;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.25);
    background: rgba(255, 255, 255, 0.1);
    
}

@media (max-width: 768px) {
    .custom-carousel {
        height: 300px;
        margin-top: 0;
    }
}

@media (max-width: 480px) {
    .custom-carousel {
        height: 220px;
    }
}

/* TRACK */
.custom-carousel-track {
    display: flex;
    height: 100%;
    transition: transform 0.8s ease-in-out;
}

/* ITEM */
.custom-carousel-item {
    min-width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}

/* IMAGE */
.custom-carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
    image-rendering: auto;
    backface-visibility: hidden;
    transform: translateZ(0);
}

/* HOVER */
.custom-carousel-item:hover img {
    transform: scale(1.05);
    opacity: 0.9;
}

/* OVERLAY */
.carousel-overlay {
    position: absolute;
    inset: 0;
   background: rgba(0,0,0,0.2);
    pointer-events: none;
}

/* BUTTONS */
.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.4);
    color: white;
    border: none;
    font-size: 24px;
    padding: 12px 18px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
}

.prev { left: 15px; }
.next { right: 15px; }

.carousel-btn:hover {
    background: rgba(0,0,0,0.7);
}


    </style>
    </head>

<body>


<div class="comms">
    <div class="comms-inner">
        
        <div class="comms-span">
            <span><i class="bi bi-pin"></i> Westlands Nairobi</span>
            <span style="padding-left: 15px;"><i class="bi bi-envelope"></i> info@symptrack.com</span>
            <span style="padding-left: 15px;"><i class="bi bi-telephone"></i> +254 725 039 848</span> 
        </div>

        <div class="social-links" style="position: fixed; top: 0; right: 350px;">
            <a style="color: #035c72;" href="#"><i class="bi bi-facebook"></i></a>
            <a style="color: #20c0e9;" href="#"><i class="bi bi-twitter"></i></a>
            <a style="color: #720303;" href="#"><i class="bi bi-instagram"></i></a>
            <a style="color: #000000;" href="#"><i class="bi bi-tiktok"></i></a>
        </div>

    </div>
</div>

<nav class="main-nav" style="
 background: linear-gradient(
        71deg,   
        #3ed176 0%,  
        #539be8 8%,                  
        #d27ef0 19.5%,

        #eef1fa 19.5%,                      
        #dce2fa 79%,

        #51cc7e 79%,                     
        #2f85db 100%
    );
    ">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="home.html">
            <img src="{{ asset('backend/images/logo.jpeg') }}" style="margin-top: 15px; margin-left: -90px; width:60px; height:60px; "class="me-2"> SympTrack       
        </a>

        
        <div class="container nav-container">

            <ul class="nav-links">
                
                <!-- DROPDOWN FOR HOME -->
                <li class="dropdown">
                    <a href="/" class="drop-btn"><b> Home</b></a>

                    <ul class="dropdown-menu">
                        <li><a href="about"><b>About</b></a></li>
                        <li><a href="contact"><b>Contact</b></a></li>
                        <li><a href="FAQs"><b>FAQs</b></a></li>
                    </ul>
                </li>

                <li><a href="login"><b>Login</b></a></li>
                <li><a href="register"><b>Register</b></a></li>

                <li class="dropdown">
                    <a href="dashboard" class="drop-btn"><b>Dashboard</b></a>

                    <ul class="dropdown-menu">
                       <li><a href="add_symptom"><b>Add Symptom</b></a></li> 
                       <li><a href="symptom_history"><b>Symptom History</b></a></li> 
                       <li><a href="home"><b>Home</b></a></li> 
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
    @yield('content')
       
    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>SympTrack</h5>
                    <p>Your personal health companion for tracking symptoms and understanding your body better.</p>
                    <div class="social-links mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#how-it-works">How It Works</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5>Account</h5>
                    <ul class="footer-links">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h5>Contact Us</h5>
                    <ul class="footer-links">
                        <li><i class="bi bi-envelope me-2"></i> info@symptrack.com</li>
                        <li><i class="bi bi-telephone me-2"></i> +254 725 039 848</li>
                    </ul>
                </div>

            </div>

            <hr class="mt-4 mb-3" style="border-color: rgba(255, 255, 255, 0.1);">

            <div class="text-center">
                <p class="mb-0">&copy; 2025 SympTrack. All rights reserved.</p>
            </div>

        </div>
    </footer>
 
</body>
</html>