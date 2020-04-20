<!DOCTYPE html>
<html>
<head>
	<title>input Paket</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/paket">Lihat Paket Haji dan Umroh</a></h2>
	<h3>Paket Haji dan Umroh</h3>

	<a href="/paket"> Kembali</a>
	
	<br/>
	<br/>
	<br>
<form action="/paket/store" method="POST" class="table table-striped table-hover table-sm table-bordered">
{{ csrf_field() }}
	<lable>Id_Paket : </lable>
	 	<input type="text" name="id" class="form-group"><br>
	 	<lable>Nama Paket : </lable>
	 	<input type="text" name="name" class="form-group"><br>
	 	<lable>Durasi : </lable>
	 	<input type="text" name="durasi" class="form-group"><br>
		<lable>Tanggal Keberangkatan : </lable>
 		<input type="date" name="tanggal" class="form-group"><br>
		<lable>Pesawat : </lable>
 		<input type="text" name="pesawat" class="form-group"><br>
		<lable>Hotel Di Mekkah : </lable>
		<input type="text" name="hotelmekka" class="form-group"><br>
		<lable>Hotel Di Madinah : </lable>
		<input type="text" name="hotelmadina" class="form-group"><br>
<input type="submit"  value="Add" class="btn btn-primary">
</form>
	
</body>
</html>