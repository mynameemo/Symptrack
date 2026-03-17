<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('backend/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/skins/_all-skins.min.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    /* gradient backgrounds you already wanted */
.profile-box-bg {
    background: linear-gradient(135deg, #224abe 10%, #a5f6a5ff 35%, #4b9cedff, #1cc88a);
    border-radius: 12px;
    padding: 0.75rem;
}

/* optional matching form box bg */
.form-box-bg {
    background: transparent; /* keep form simpler; or copy gradient if you prefer */
    border-radius: 6px;
}

/* list items */
.profile-list-item-bg {
    background-color: rgba(152, 210, 249, 1);
}

/* make sure images don't overflow */
.profile-user-img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    margin: 0 auto;
}

/* small screens: tighten paddings and font sizes if necessary */
@media (max-width: 576px) {
    .profile-user-img {
        width: 88px;
        height: 88px;
    }

    .box .box-header .box-title {
        font-size: 1rem;
    }
}

/* ensure content area respects AdminLTE sidebar state */
.content-wrapper {
    min-height: calc(100vh - 100px); /* adjust if header/footer sizes vary */
}

.main-sidebar {
    position: fixed;
    overflow-y: auto;
    height: 1000px;
    left: 0;
    width: 230px; /* keep AdminLTE default */
    overflow-y: auto;
    background-color: #121f45ff;
    z-index: 1000;
}

.content-wrapper {
    margin-left: 230px; /* match sidebar width */
    min-height: calc(100vh - 80px);
    padding: 20px;
}

/* Ensure content starts below your fixed header */
.content-wrapper{
    padding-top: 120px !important; /* Adjust depending on header height */
}

/* Custom box styling */
.custom-box {
    width: 80%;
    margin: 0 auto;              /* centers it */
    margin-top: 40px;            /* spacing below header */
}

/* Make textarea responsive */
.textarea {
    width: 100% !important;
    height: 250px !important;
    font-size: 14px;
    line-height: 1.4;
    border: 1px solid #ddd;
    padding: 10px;
}

.missionBox{
  position: absolute;
  margin-top: 140px; 
  margin-left: 750px; 
  width: 390px; 
  background-color: #8a9ed8ff; 
  height: 460px; 
  padding-left: 20px; 
  padding-top: 20px;
}

.valueBox1{
  height: 270px; 
  position: absolute; 
  width: 300px; 
  margin-left: 300px; 
  margin-top: 600px;
  background-color: beige;
}
.valueBox2{
  height: 270px; 
  position: absolute; 
  width: 300px; 
  margin-left: 650px; 
  margin-top: 565px;
  background-color: beige;
}
.valueBox3{
  height: 270px; 
  position: absolute; 
  width: 300px; 
  margin-left: 1000px; 
  margin-top: 530px;
  background-color: beige;
}

.wte1{
  position: absolute; 
  margin-top: 800px; 
  margin-left: 300px; 
  background-color: aquamarine; 
  width: 270px; 
  height: 280px; 
  padding-top: 10px; 
  padding-left: 10px;
}
.wte2{
  position: absolute; 
  margin-top: 768px; 
  margin-left: 630px; 
  background-color: aquamarine; 
  width: 270px; 
  height: 280px; 
  padding-top: 10px; 
  padding-left: 10px;
}
.wte3{
  position: absolute; 
  margin-top: 735px; 
  margin-left: 955px; 
  background-color: aquamarine; 
  width: 270px; 
  height: 280px; 
  padding-top: 10px; 
  padding-left: 10px;
}

.contact1{
  background-color: burlywood; 
  margin-top: 1010px; 
  margin-left: 300px; 
  width: 300px; 
  height: 250px; 
  padding-left: 10px; 
  padding-top: 10px;
}
.contact2{
  background-color: burlywood; 
  margin-top: 975px; 
  margin-left: 650px; 
  width: 300px; 
  height: 250px; 
  padding-left: 10px; 
  padding-top: 10px;
}
.contact3{
  background-color: burlywood; 
  margin-top: 940px; 
  margin-left: 1010px; 
  width: 300px; 
  height: 250px; 
  padding-left: 10px; 
  padding-top: 10px;
}


  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" style=" background-color: #9aae9aff; height: max-content;"></body>
 <header class="main-header">
    <!-- Logo -->
    <a  href="home" class="logo" style="height:80px; background-color: #1f3166ff; position: fixed;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!--span class="logo-mini"><b>A</b>LT</span-->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> <img src="{{ asset('backend/images/logo.jpeg') }}" style="width: 60px; height: 55px; margin-top: 10px;"> <b style="color: white;">Symptrack</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #121f45ff; position: fixed; width: 1300px;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <li style="margin-top: 60px; margin-right: 150px;"><a href="home"><i class="fa fa-home"></i> Home</a></li>
    <li style="margin-top: -350px;" >
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @guest
                <img src="{{asset('backend/profile/my_profile.png')}}" class="user-image" alt="User Image" style="width: 50px; height: 50px;">
                 @else
                  <img src="{{asset('backend/profile/'.Auth::user()->profileImage)}}" class="user-image" alt="User Image" style="width: 50px; height: 50px;"> <br>
                @endguest
                <span style="color: white;" class="hidden-xs">{{ Auth::user()->name ?? 'Guest' }}</span>
               

              </a>
            <ul class="dropdown-menu" style="background-color: black ">
              <!-- User image -->
              <li class="user-header">
                @guest
                <img src="{{asset('backend/profile/my_profile.png')}}" class="img-circle" alt="User Image">
                @else
                <img src="{{asset('backend/profile/'.Auth::user()->profileImage)}}" class="img-circle" alt="User Image">
                @endguest
                <p style="color:white;">
                  {{Auth::user()->name ?? 'Guest'}}- {{Auth::user()->role ?? 'NA'}}          
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer" style="backgroud-color: #0ee00eff">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        Sign Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>   
    </nav>
  </header>

<aside class="main-sidebar" style="margin-top: 69px; background-color: #121f45ff;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <form action="#" method="get" class="sidebar-form" style="margin-top: -30px; ">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- SIDEBAR MENU -->
        
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-o"></i> <span>DASHBOARD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-heartbeat"></i>
            <span>SYMPTOMS</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-chrome"></i>
            <span>FRONTEND NAVIGATION</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('showContents') }}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> About</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Contact</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Footer </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
      </ul>

      
        
    <div class="user-panel" style="margin-top: 300px; background-color: #02161aff; position: fixed; bottom: 0%; padding: 10px; width: 230px;">
        <div class="pull-left image">       
          <a href="{{ route('myProfile') }}">
            <img src="{{ asset('backend/profile/my_profile.png') }}" class="img-circle" alt="User Image" style="width: 55px; height: 50px";>
          </a>
        </div>
        <div class="pull-left info">
          <p style="color: white;"> {{Auth::user()->name ?? 'Guest'}} </p>
          <a href="#" style="color: white;"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
      <!-- search form -->
      
    </section>
</aside>

@include('sweetalert::alert')
 @yield('content')

        
        <!-- jQuery 3 -->
        <script src="{{ asset('backend/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{ asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('backend/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('backend/dist/js/demo.js')}}"></script>
</body>
</html>


<div class="user-panel">
            <div class="pull-left image">       
              <a href="{{ route('myProfile') }}">
                <img style="width: 50px; height: 50px; position: fixed; bottom: 0;" src="{{ asset('backend/profile/my_profile.png') }}" alt="User Image">
              </a>
            </div>
            <div class="pull-left info" style="position: fixed; bottom: 0;">
              <p>{{Auth::user()->name ?? 'Guest'}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>