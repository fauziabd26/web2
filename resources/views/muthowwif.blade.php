<!DOCTYPE html>
<html>
<head>
    <title>Data Muthowwif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <a class="nav-link" href="/schedulehaji/tambahschedulehaji">Tambah New Muthowwif</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top:20px">   

</head>
<body>

    <h2>Data Muthowwif</h2>
    
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>id Muthowwif</th>
            <th>Nama Muthowwif</th>
            <th>Umur</th>
            <th>Asal</th>
            <th>opsi</th>
            </tr>
        @foreach($muthowwif as $m)
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->umur }}</td>
            <td>{{ $m->alamat }}</td>
            <td>
                <a href="/muthowwif/editmuthowwif/{{ $m->no }}">Edit</a>
                |
                <a href="/muthowwif/hapus/{{ $m->no }}">Hapus</a>
            </td>
        </tr>
        @endforeach            
    </table>
<br>
    <a href="/muthowwif/tambahmuthowwif"> + Tambah muthowwif Baru</a>

</body>
</html>