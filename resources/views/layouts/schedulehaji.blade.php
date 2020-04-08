<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Show Schedule</title>
  <meta charset="UTF-8">
  <meta name="description" content="Photo Gallery HTML Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="/img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="/css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="/css/animate.css"/>

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="/css/style.css"/>


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  </head>
    <body>
    <!-- Page Preloder -->
      <div id="preloder">
        <div class="loader"></div>
      </div>

      <!-- Top right elements 
      <div class="spacial-controls">
        <div class="search-switch"><img src="img/search-icon.png" alt=""></div>
        <div class="nav-switch-warp">
          <div class="nav-switch">
            <div class="ns-bar"></div>
          </div>
        </div>
      </div>
       Top right elements end -->

      <div class="main-warp">
        <!-- header section -->
        <header class="header-section">
          <div class="header-close">
            <i class="fa fa-times"></i>
          </div>
      <div class="header-warp">
        <a href="/" class="site-logo">
          <img src="./img/slider-bg-1.png" alt="">
        </a>
          <img src="img/menu-icon.png" alt="" class="menu-icon">
            <ul class="main-menu">
              <li class="active"><a href="/">About Us</a></li>
              <li><a href="layouts/gallery">Gallery</a></li>
              <li><a href="layouts/schedule">Schedule Haji</a></li>
              <li><a href="./schedule">schedule Umroh</a></li>
              <li><a href="./contact.html">Contact</a></li>
            </ul>
              <div class="social-links-warp">
                <div class="social-links">
                  <a href=""><i class="fa fa-youtube"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                </div>
                <div class="social-text">Find us on</div>
              </div>
      </div>
      <div class="copyright">Kelompok 7 2020  @ All rights reserved</div>
    </header>
    <!-- header section end -->
      <div class="container" style="margin-top:20px">
        <h2>Data Schedule Haji</h2>
      
        <table class="table table-striped table-hover table-sm table-bordered">
           <!--    <thead class="thead-dark">
            
            <table border="1">
                <tr>
                    
                    <th>Id</th>
                    <th>Nama_Acara</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Actions</th>
                </thead> -->
                    
                    <!-- </tr> -->
                <ul>
                    @foreach($schedule as $p)
                    <li>{{ "No : ". $p->no . ' | id : ' . $p->id }}</li>
                    @endforeach
                </ul>
          </table>

              </div>
  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>