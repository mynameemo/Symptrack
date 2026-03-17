<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Symptrack Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/dist/css/AdminLTE.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/dist/css/skins/_all-skins.min.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<style>

/* -------------------- GENERAL -------------------- */
body {
    font-family: 'Source Sans Pro', sans-serif;
    background: #f9faff;
}

/* -------------------- HEADER -------------------- */
.main-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1100;
    box-shadow: 0 6px 15px rgba(0,0,0,0.25);
    transition: all 0.3s;
}
.main-header .logo {
    background-color: #92b79eff; 
    color: white;
    font-weight: bold;
    text-align: center;
    height: 80px;
    line-height: 80px;
    transition: all 0.4s;
}
.main-header .logo:hover {
    background: linear-gradient(45deg, #224abe, #1cc88a, #9b59b6); /* multi-color gradient */
    transform: scale(1.05);
}
.main-header .logo img {
    vertical-align: middle;
    transition: transform 0.4s;
}
.main-header .logo img:hover {
    transform: rotate(15deg) scale(1.1);
}
.main-header .navbar {
    background: linear-gradient(90deg, #121f45, #224abe, #1cc88a); /* subtle multi-color gradient */
    border: none;
    box-shadow: inset 0 -1px 0 rgba(255,255,255,0.1);
}
.main-header .navbar .sidebar-toggle:hover {
    transform: rotate(90deg);
    color: #ffcc00;
    text-shadow: 0 0 6px #ffcc00;
    transition: all 0.4s;
}
.main-header .navbar-nav > li > a {
    color: white;
    font-weight: 500;
    transition: all 0.3s;
}
.main-header .navbar-nav > li > a:hover {
    color: #ffcc00;
    text-shadow: 0 0 10px #1cc88a, 0 0 10px #9b59b6;
}

/* -------------------- SIDEBAR -------------------- */
.main-sidebar {
    position: fixed;
    top: 80px;
    left: 0;
    width: 230px;
    height: calc(100% - 80px);
    background-color: #9b59b6; /* solid purple */
    overflow-y: auto;
    padding-top: 10px;
    transition: all 0.3s;
}
.sidebar-menu li a {
    color: white;
    transition: all 0.3s;
    font-weight: 500;
}
.sidebar-menu li a:hover {
    background: linear-gradient(45deg, #1cc88a, #224abe, #9b59b6); /* multi-color gradient */
    color: white;
    padding-left: 25px;
    box-shadow: inset 0 0 10px rgba(255,255,255,0.4);
}
.sidebar-menu li.active > a {
    background: #1cc88a; /* solid green */
    color: #fff;
    font-weight: bold;
}

/* Submenu toggle animation */
.sidebar-menu .treeview-menu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, opacity 0.5s ease;
    opacity: 0;
    
}
.sidebar-menu .treeview.active .treeview-menu {
    max-height: 500px;
    opacity: 1;
}

/* -------------------- SEARCH -------------------- */
.sidebar-form .form-control {
    border-radius: 25px;
    border: none;
    padding-left: 15px;
    transition: all 0.3s;
}
.sidebar-form .form-control:focus {
    box-shadow: 0 0 12px #ffcc00, 0 0 8px #1cc88a;
    border-color: #1cc88a;
}
.sidebar-form button {
    border-radius: 25px;
    background: #1cc88a;
    border: none;
    color: white;
    transition: all 0.3s;
}
.sidebar-form button:hover {
    background: linear-gradient(45deg, #1cc88a, #224abe, #9b59b6);
}

/* -------------------- USER PANEL -------------------- */
.user-panel {
    position: fixed;
    bottom: 0;
    width: 230px;
    padding: 12px;
    background: #1f46a1ff; /* solid green */
    display: flex;
    align-items: center;
    transition: all 0.4s;
    cursor: pointer;
}
.user-panel:hover {
    background: linear-gradient(45deg, #224abe, #9b59b6, #1cc88a); /* hover gradient */
    box-shadow: 0 0 25px rgba(28,200,138,0.7);
    transform: scale(1.02);
}
.user-panel img {
    border-radius: 50%;
    border: 2px solid white;
    transition: all 0.3s;
}
.user-panel img:hover {
    transform: scale(1.15) rotate(10deg);
}
.user-panel .info p {
    margin: 0;
    font-weight: 600;
    color: white;
    text-shadow: 0 0 5px rgba(0,0,0,0.5);
}
.user-panel .info a {
    color: #fff;
    font-size: 12px;
}

/* -------------------- CONTENT -------------------- */
.content-wrapper {
    margin-left: 230px;
    padding-top: 120px;
    transition: all 0.3s;
}
.content-wrapper .box {
    transition: all 0.3s ease, transform 0.3s ease;
    border-radius: 12px;
}
.content-wrapper .box:hover {
    box-shadow: 0 10px 25px rgba(28,200,138,0.6);
    transform: translateY(-5px) scale(1.01);
}

/* -------------------- BADGES & ANIMATIONS -------------------- */
.badge-notify {
    background: #ffcc00; /* bright accent */
    color: #121f45;
    font-size: 10px;
    padding: 3px 6px;
    border-radius: 50%;
    position: absolute;
    top: 5px;
    right: 10px;
    animation: pulse 1.2s infinite;
}
@keyframes pulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.3); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}

/* -------------------- RESPONSIVE -------------------- */
@media (max-width: 992px) {
    .main-sidebar { width: 100%; height: auto; position: relative; }
    .content-wrapper { margin-left: 0; padding-top: 140px; }
    .user-panel { width: 100%; position: relative; bottom: auto; display: flex; justify-content: center; margin-top: 20px; }
}

/* FORMS*/

/* ===========================
   GLOBAL PAGE STYLING
=========================== */
body {
    background: #f3f6fa !important;
    font-family: 'Poppins', sans-serif;
}

/* Make the form containers VERY visible */
.neon-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 20px;
    width: 380px;
    box-shadow: 0 0 18px rgba(0, 193, 255, 0.35);
    border: 1px solid rgba(0, 174, 255, 0.2);
    position: absolute;
    transition: 0.3s ease;
}

/* Hover glow */
.neon-card:hover {
    box-shadow: 0 0 25px rgba(0, 193, 255, 0.55);
    transform: translateY(-2px);
}

/* Titles inside forms */
.form-title {
    font-size: 19px;
    font-weight: 600;
    color: #0c3c59;
    margin-bottom: 15px;
}


/* ===========================
   INPUTS & TEXTAREAS
=========================== */
.neon-input {
    border: 1px solid #d7e3ef;
    border-radius: 6px;
    padding: 8px 10px;
    font-size: 14px;
    background: white;
    transition: 0.25s ease;
}

.neon-input:focus {
    border: 1px solid #00c8ff;
    box-shadow: 0 0 9px rgba(0, 191, 255, 0.6);
    outline: none;
}

textarea.neon-input {
    resize: none;
}


/* ===========================
   FILE INPUT
=========================== */
.neon-file {
    border: 1px dashed #a9c8de;
    border-radius: 6px;
    padding: 7px;
    cursor: pointer;
    background: #f8fcff;
    transition: 0.25s;
}

.neon-file:hover {
    background: #e4f6ff;
    border-color: #00c8ff;
}


/* ===========================
   BUTTON
=========================== */
.neon-btn {
    background: linear-gradient(135deg, #00b3ff, #006eff);
    color: white !important;
    border: none;
    padding: 8px 15px;
    border-radius: 6px;
    transition: 0.25s ease;
}

.neon-btn:hover {
    background: linear-gradient(135deg, #009ee0, #0057cf);
    box-shadow: 0 0 12px rgba(0, 162, 255, 0.7);
}


/* ===========================
   ERROR HANDLING
=========================== */
.is-invalid {
    border-color: #ff4d4d !important;
    box-shadow: 0 0 6px rgba(255, 0, 0, 0.45);
}

.invalid-feedback {
    color: red;
    font-size: 13px;
    margin-top: 3px;
}


/* ===========================
   POSITIONING (MATCHING YOUR OLD LAYOUT)
=========================== */

/* About us box */
.aboutForm {
    left: 300px;
    top: 150px;
}

/* Mission */
.missionBox {
    left: 750px;
    top: 150px;
}

/* Values (3 boxes) */
.valueBox1 { left: 300px; top: 650px; }
.valueBox2 { left: 700px; top: 650px; }
.valueBox3 { left: 1100px; top: 650px; }

/* What To Expect */
.wte1 { left: 300px; top: 1050px; }
.wte2 { left: 650px; top: 1050px; }
.wte3 { left: 1000px; top: 1050px; }

/* Contact Info */
.contact1 { left: 300px; top: 1450px; }
.contact2 { left: 700px; top: 1450px; }
.contact3 { left: 1100px; top: 1450px; }

/* Contact Message */
.contactMessageBox {
    left: 300px;
    top: 1850px;
    width: 380px;
}

/* Footer Grid */
        .footer-grid {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .footer-title-row{
            display: flex;
            flex-wrap: wrap;
            width: 300px;
        }
        .footer-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            
        }

        .footer-row > div {
            flex: 1 1 200px;
        }

        .footer-description-row {
            width: 100%;
        }

        @media(max-width: 768px) {
            .footer-row {
                flex-direction: column;
            }
        }
        @media(max-width: 768px) {
            .footer-top-row, .footer-bottom-row {
                flex-direction: column;
            }
        }

        .display-box{
            height: max-content; 
            width: 400px;  
            position: absolute;
            background-color: white;
            border-radius: 12px;
            height: max-content;
            border: 1px solid rgba(0, 174, 255, 0.2);
            box-shadow: 0 0 18px rgba(0, 193, 255, 0.35);
        }

        .display-box:hover{
            box-shadow: 0 0 25px rgba(0, 193, 255, 0.55);
            transform: translateY(-2px);
        }

        .area{
            height: 150px;
            width: 350px; 
            border-radius: 12px; 
            border: 1px solid rgba(0, 174, 255, 0.2);
        }
</style>
</head>

<body class="hold-transition skin-blue sidebar-mini" style="background-color: #d3e3eeff;">

<header class="main-header">
    <a href="home" class="logo" style="background-color: rgba(72, 189, 109, 1) ;">
      <span class="logo-lg">
        <img src="{{ asset('backend/images/logo.jpeg') }}" style="width: 60px; height: 55px; margin-top: 10px;"> 
        <b>Symptrack</b>
      </span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <ul class="nav navbar-nav navbar-right">
        <li style="margin-top: 10px;">
            <a href="home">
                <i class="fa fa-home"></i> Home
                <!--span class="badge-notify">3</span-->
            </a>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            @guest
              <img src="{{asset('backend/profile/my_profile.png')}}" class="user-image" alt="User Image">
            @else
              <img src="{{asset('backend/profile/'.Auth::user()->profileImage)}}" class="user-image" alt="User Image">
            @endguest
            <span style="color:white;" class="hidden-xs">{{ Auth::user()->name ?? 'Guest' }}</span>
          </a>
          <ul class="dropdown-menu" style="background-color: #121f45;">
            <li class="user-header">
              @guest
              <img src="{{asset('backend/profile/my_profile.png')}}" class="img-circle" alt="User Image">
              @else
              <img src="{{asset('backend/profile/'.Auth::user()->profileImage)}}" class="img-circle" alt="User Image">
              @endguest
              <p style="color:white;">{{Auth::user()->name ?? 'Guest'}} - {{Auth::user()->role ?? 'NA'}}</p>
            </li>
            <li class="user-footer">
              <div class="pull-left"><a href="" class="btn btn-success btn-flat">Profile</a></div>
              <div class="pull-right">
                <a class="btn btn-danger btn-flat" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
</header>

<aside class="main-sidebar" style="background-color: #41eb8bff;">
    <section class="sidebar">
        <form action="#" method="get" class="sidebar-form" style="margin-top: 10px;">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree"> 
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview" style="background-color: #145527ff;">
              <a href="#"><i class="fa fa-folder-o"></i> <span>DASHBOARD</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview" style="background-color: #145527ff;">
              <a href="#"><i class="fa fa-heartbeat"></i> <span>SYMPTOMS</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li class="treeview" style="background-color: #145527ff;">
              <a href="#"><i class="fa fa-chrome"></i> <span>FRONTEND NAVIGATION</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ route('showContents') }}"><i class="fa fa-circle-o"></i> Home</a></li>
                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> About</a></li>
                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Contact</a></li>
                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Footer</a></li>
              </ul>
            </li>
        </ul>

        <div class="user-panel">
            <div class="pull-left image">       
              <a href="{{ route('myProfile') }}">
                <img style="width: 50px; height: 50px;" src="{{ asset('backend/profile/my_profile.png') }}" alt="User Image">
              </a>
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name ?? 'Guest'}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
    </section>
</aside>


@yield('content')

<script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{ asset('backend/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('backend/dist/js/demo.js')}}"></script>

<script>
$(document).ready(function() {
    // Sidebar treeview smooth toggle
    $('.sidebar-menu .treeview > a').click(function(e){
        e.preventDefault();
        var parent = $(this).parent();
        if(parent.hasClass('active')) {
            parent.removeClass('active');
        } else {
            $('.sidebar-menu .treeview').removeClass('active');
            parent.addClass('active');
        }
    });

    // Sidebar toggle animation
    $('.sidebar-toggle').click(function(){
        $('.main-sidebar').toggleClass('collapsed');
    });
});
</script>
</body>
</html>