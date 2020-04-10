<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Travel Multazam</title>
  <meta charset="UTF-8">
  <meta name="description" content="Photo Gallery HTML Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/animate.css"/>

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css"/>
</head>
  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

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
            <li><a href="/">About Us</a></li>
            <li><a href="/layouts/gallery">Gallery</a></li>
            <li><a href="/showmuthowwif">Muthowwif</a></li>
            <li><a href="/showpaket">Daftar Paket</a></li>
            <li><a href="/showblog">Blog</a></li>
            <li><a href="/testimoni">Testimoni</a></li>
          </ul>
    
          <div class="social-links-warp">
            <div class="social-links">
              <a href=""><i class="fa fa-youtube"></i></a>
              <a href="https://www.instagram.com/multazam_wisata/"><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
            </div>
              <div class="social-text">Find us on</div>
          </div>-->
        </div>
          <div class="copyright">Kelompok 7 2020  @ All rights reserved</div>
    </header>
    <!-- header section end -->
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
    <!-- Page section -->
    <div class="page-section home-page">
      <div class="hero-slider owl-carousel">
        <div class="slider-item d-flex align-items-center set-bg" data-setbg="img/bg-3.jpg" data-hash="slide-1">
          <div class="si-text-box">
            <h2>Travel Multazam</h2>
            <p>perusahaan yang bergerak di bidang penyelenggaraan Ibadah Umroh, Haji Khusus dan wisata halal lainnya, agar lebih mudah di kenal dan di ingat masyarakat maka PT. Multazam Wisata Rohani menggunakan nama brand yaitu MWR Tour.
Pendiri</p>
            <a href="#slide-2" class="site-btn">Read More</a>
          </div>
          <!-- <div class="next-slide-show set-bg" data-setbg="img/bg-1.png">
            <a href="#slide-2" class="ns-btn">Next</a>
          </div> -->
        </div>
        
        <div class="slider-item d-flex align-items-center set-bg" data-setbg="img/bg-3.jpg"  data-hash="slide-2">
          <div class="si-text-box">
            
            <h2>Travel Multazam</h2>
            <p>Di dirikan oleh orang-orang yang berpengalaman yaitu H. Dedy Supriadi, Hj. Dian Kurniawati dan H. Karnilah, Alhamdulillah perusahaan terus maju dan berkembang hingga saat ini. Demi meningkatkan kemudahan, dan kualitas pelayanan , MWR Tour memiliki mitra usaha di berbagai kota di Indonesia, seperti Balikpapan, Palembang, Lampung, JaBoDeTaBek, Bandung, Semarang, Denpasar dan kota-kota lainnya.
Pengembangan Mitra Usaha ini akan terus dilakukan untuk meningkatkan pelayanan kepada umat Islam di seluruh Indonesia.</p>
            <a href="#slide-1" class="siteback-btn">Back</a>
          </div>
          <!-- <div class="next-slide-show set-bg" data-setbg="img/bg-1.png">
            <a href="#slide-1" class="ns-btn">Next</a>
          </div> -->
        
        </div>
      </div>
      <div id="snh-1"></div>
    </div>
    <!-- Page section end-->

  </div>
</body>
  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>

  
</html>