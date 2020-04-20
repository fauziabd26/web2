<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{Session::get('username')}}|Admin MWR</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="/src/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="/src/asssets/images/favicon.ico" />
</head>
<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="/homeadmin">
          {{Session::get('username')}}|
        </a>
      </div>
          <div class="t-header-content-wrapper">
            <div class="t-header-content">
              <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                <i class="mdi mdi-menu"></i>
              </button>
                <form action="#" class="t-header-search-box">
                  <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                  </div>
                </form>
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
                            <a class="dropdown-item" href="{{ url('/logoutadmin')}}">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
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
          <a href="/homeadmin"></a>
          <img src="./img/slider-bg-1.png" alt="">
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
            <li>
              <a href="/homeadmin">
                <span class="link-title">Dashboard</span>
                <i class="mdi mdi-gauge link-icon"></i>
              </a>
            </li>
            <li>
              <a href="/muthowwif">
                <span class="link-title">Muthowwif</span>
                <i class="mdi mdi-clipboard-outline link-icon"></i>
              </a>
            </li>
            <li>
              <a href="/paket">
                <span class="link-title">Daftar Paket</span>
                <i class="mdi mdi-flask link-icon"></i>
              </a>
            </li>
            <li>
              <a href="/manasik">
                <span class="link-title">Manasik</span>
                <i class="mdi mdi-chart-donut link-icon"></i>
              </a>
            </li>
        </ul>
      </div>
      <!-- partial -->
      @show
      @yield('content')
              
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2020 Multazam Wisata Rohani. All rights reserved</small>
              <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="/src/assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="/src/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/src/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/src/assets/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="/src/assets/js/template.js"></script>
    <script src="/src/assets/js/dashboard.js"></script>
    <!-- endbuild -->
</body>
</html>