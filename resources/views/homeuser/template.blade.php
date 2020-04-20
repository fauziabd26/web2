<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{Session::get('username')}}</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">
    <link rel="stylesheet" href="/csss/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/csss/css/animate.css">
    <link rel="stylesheet" href="/csss/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/csss/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/csss/css/magnific-popup.css">
    <link rel="stylesheet" href="/csss/css/aos.css">
    <link rel="stylesheet" href="/csss/css/ionicons.min.css">
    <link rel="stylesheet" href="/csss/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/csss/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/csss/css/flaticon.css">
    <link rel="stylesheet" href="/csss/css/icomoon.css">
    <link rel="stylesheet" href="/csss/css/style.css">
    <link rel="stylesheet" href="src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="src/assets/css/shared/style.css">
    <link rel="stylesheet" href="src/assets/css/demo_1/style.css">
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
    <div id="colorlib-page">
      <a href="/" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><a href="/home_user"><span class="img" style="background-image: url(src/assets/images/profile/male/image_7.png);"></span></a></h1>
      <nav id="colorlib-main-menu" role="navigation">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/showpakett">Daftar Paket</a></li>
          <li><a href="/showmanasik">Manasik</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </aside>
   </div>
   @show
  @yield('content')
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container px-md-5">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Recent Photos</h2>
                <ul class="list-unstyled photo">
                  <li><a href="#" class="img" style="background-image: url(/img/gallery/11.jpeg);"></a></li>
                  <li><a href="#" class="img" style="background-image: url(/img/gallery/12.jpeg);"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">No.1, jl cendrawasih, Bintaro, Tanggerang Selatan
                         indonesi</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62584589235</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Fauzi@gmail.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kelompok 7 <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Rafli Bagus P</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </footer>
        
      
  
    <script src="src/assets/vendors/js/core.js"></script>
    <script src="src/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="src/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="src/assets/js/charts/chartjs.addon.js"></script>
    <script src="src/assets/js/template.js"></script>
    <script src="src/assets/js/dashboard.js"></script>
  </body>
</html>