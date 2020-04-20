<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{Session::get('username')}}| Dashboard </title>
    <link rel="stylesheet" href="src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="src/assets/css/shared/style.css">
    <link rel="stylesheet" href="src/assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="src/asssets/images/favicon.ico" />
  </head>
  <body class="header-fixed">
    <nav class="t-header">
      <ul class="nav ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>{{Session::get('username')}}
          </a>
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
    <div class="page-body">
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
            </a>
            <a href="/showmuthowwif">
              <span class="link-title">Muthowwif</span>
            </a>
            <a href="/showpakett">
              <span class="link-title">Daftar Paket</span>
            </a>
            <a href="/showblog">
              <span class="link-title">Blog</span>
            </a>
            <a href="/manasik" >
              <span class="link-title">Manasik</span>
            </a>
            <a href="/contact">
              <span class="link-title">Contact</span>
            </a>
          </li>
           </ul>
      </div>
      <nav>
      </br>
      </br>
      </br>
      <div class="t-content-brand-wrapper">
          <div class="btn btn-primary" >
            <div class="input-group">
              <li>Selamat Datang {{Session::get('username')}}</li> 
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <script src="src/assets/vendors/js/core.js"></script>
    <script src="src/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="src/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="src/assets/js/charts/chartjs.addon.js"></script>
    <script src="src/assets/js/template.js"></script>
    <script src="src/assets/js/dashboard.js"></script>
  </body>
</html>