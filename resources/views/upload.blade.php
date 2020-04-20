<!DOCTYPE html>
<html>
<head>
	<title>Upload Pembayaran</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="btn btn-primary" href="/home_user">Back to Home</a>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top:20px">
     	<h1 class="text-center my-5">Upload Pembayaran Anda</h1>
     	<div class="col-lg-8 mx-auto my-5">	
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				<!-- tambah data-->
				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				<!-- tambah data selesai -->

				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
							<th>Keterangan</th>
                           <td colspan="2"><b>OPSI</b></td>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">Hapus</a>
							<a class="btn btn-warning" href="{{url('/home_user')}}" >Simpan Bukti</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
</body>
</html>