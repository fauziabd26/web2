<!DOCTYPE html>
<html>
<head>
	<title>input Manasik</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/manasik">Lihat Manasik Haji</a></h2>
	<h3>Manasik Haji</h3>

	<a href="/manasik"> Kembali</a>
	
	<br/>
	<br/>
	<br>
<form action="/manasik/store" method="POST" class="table table-striped table-hover table-sm table-bordered">
{{ csrf_field() }}
	<lable>Id_Manasik:</lable>
	 	<input type="text" name="id" class="form-group"><br>
	<lable>Nama Manasik</lable>
 		<input type="text" name="nama_manasik" class="form-group"><br>
	<lable>Tanggal: </lable>
		<input type="date" name="tanggal" class="form-group"><br>
	<lable>Tempat:</lable>
 		<input type="text" name="tempat" class="form-group"><br>
	<lable>Waktu:</lable>
 		<input type="time" name="waktu" class="form-group"><br>

<input type="submit"  value="Add" class="btn btn-primary">
</form>
	
</body>
</html>