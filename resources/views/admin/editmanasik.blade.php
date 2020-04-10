<!DOCTYPE html>
<html>
<head>
	<title>Edit Agenda Manasik</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
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
<body>

	<h2>Edit Manasik
	<a href="/manasik"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($manasik as $p)
	<form action="/manasik/update" method="post">
		{{ csrf_field() }}
		id <input type="text" required="required" name="id" value="{{ $p->id }}"> <br/>
		Nama Manasik <input type="text" required="required" name="nama_manasik" value="{{ $p->nama_manasik }}"> <br/>
		Tanggal <input type="text" required="required" name="tanggal" value="{{ $p->tanggal }}"> <br/>
		Tempat <input type="text" required="required" name="tempat" value="{{ $p->tempat }}"> <br/>
		<lable>Waktu:</lable>
 		<input type="time" name="waktu" class="form-group"><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>