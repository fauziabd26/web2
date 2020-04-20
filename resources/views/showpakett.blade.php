<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Daftar Paket</title>
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


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home_user">Home</a>
          </ul>
        </div>
      </div>
    </nav>
      <div class="container" style="margin-top:20px">
        <h2>Data Paket Haji dan Umroh</h2>   
          <table class="table table-striped table-hover table-sm table-bordered">
            <thead class="thead-dark">
              <table border="1">
                <tr> 
                  <th>Nama Paket</th>
                  <th>Durasi Hari</th>
                  <th>Tanggal Keberangkatan</th>
                  <th>Pesawat</th>
                  <th>Hotel Di Mekkah</th>
                  <th>Hotel Di Madinah</th>
                  <th>Actions</th>
                </tr>      
            </thead> 
              @foreach($paket as $sh)
              <tr>
                  <td>{{ $sh->name }}</td>
                  <td>{{ $sh->durasi }}</td>
                  <td>{{ $sh->tanggal }}</td>
                  <td>{{ $sh->pesawat }}</td>
                  <td>{{ $sh->hotelmekka }}</td>
                  <td>{{ $sh->hotelmadina }}</td>
                 
                  <td><a class='badge badge-danger' href="/paket/editpakett/{{ $sh->id }}"> Pilih Paket</a>   
              </tr>
              @endforeach
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