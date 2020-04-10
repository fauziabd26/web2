<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{Session::get('username')}}| Dashboard </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="src/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="src/asssets/images/favicon.ico" />
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index.html">
          <img class="logo" src="./img/slider-bg-1.png" alt="">
          </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="/home_user" class="btn btn-primary btn-block" >
            <div class="input-group">
             <li>Selamat Datang {{Session::get('username')}}</li> 
            </div>
          </form>
           <!-- Topbar Navbar -->
          <ul class="nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>{{Session::get('username')}}
              </a>
               <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">-->

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/logout')}}">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
              
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="src/assets/images/profile/male/image_7.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name">{{Session::get('username')}}</p>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li class="active">
            <a href="/layouts/gallery">
              <span class="link-title">Gallery</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
            <a href="/showmuthowwif">
              <span class="link-title">Muthowwif</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
            <a href="/showpaket">
              <span class="link-title">Daftar Paket</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
            <a href="/showblog">
              <span class="link-title">Blog</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
            <a href="/manasik" >
              <span class="link-title">Manasik</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            
            <a href="/contact">
              <span class="link-title">Contact</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
        </li>
           </ul>
           <ul class="main-menu">
            <li></li>
            <li></li>
            <li></li>
          </ul> 
            
      <!-- partial -->

        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="src/assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="src/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="src/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="src/assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="src/assets/js/template.js"></script>
    <script src="src/assets/js/dashboard.js"></script>
    <!-- endbuild -->
  </body>
</html>
    <!-- Main Section -->
    <!--<section class="main-section">-->
        <!-- Add Your Content Inside -->
        <!--<div class="content">-->
            <!-- Remove This Before You Start -->
            <!--<h1>Anak IT -  Tutorial Login, Register, Validasi dengan Laravel 5.4</h1>
            <p>Hallo, {{Session::get('username')}}. Apakabar?</p>

            <h2>* Email kamu : {{Session::get('email')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <a href="/logout" class="btn btn-primary btn-lg">Logout</a>-->

        <!--</div>-->
        <!-- /.content -->
    <!--</section>-->
    <!-- /.main-section -->
