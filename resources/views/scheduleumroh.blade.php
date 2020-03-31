<!DOCTYPE html>
<html>
<head>
    <title>Schedule Umroh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/scheduleumroh/createumroh">Tambah New Schedule</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top:20px">
  <h2>Data Schedule Haji</h2>
  <hr>
    
    <table class="table table-striped table-hover table-sm table-bordered">
      <thead class="thead-dark">
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama_Acara</th>
            <th>Tempat</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Actions</th>
        </tr>
    </thead>
        
        @foreach($scheduleumroh as $su)
        <tr>
            <td>{{ $su->id }}</td>
            <td>{{ $su->nama_acara }}</td>
            <td>{{ $su->tempat }}</td>
            <td>{{ $su->tanggal }}</td>
            <td>{{ $su->waktu }}</td>
           
            <td><a class='badge badge-warning' href="/scheduleumroh/editsu/{{ $su->no }}"> Edit</a>
            <a class='badge badge-danger' href="/scheduleumroh/hapus/{{ $su->no }}"> Hapus</td>  
            
        </tr>
        @endforeach
    </table>
    </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>