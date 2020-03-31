<!DOCTYPE html>
<html>
<head>
	<title>Edit Schedule</title>
	<title>Create Schedule</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/scheduleumroh">Lihat Shedule Umroh</a></h2>
	<h3>Shedule Umroh</h3>

	<a href="/schedulumroh"> Kembali</a>
	
	<br/>
	<br/>
	<br>
	<form action="/scheduleumroh/store" method="POST" class="table table-striped table-hover table-sm table-bordered">
{{ csrf_field() }}
	<lable>Id_Schedule:</lable>
	 	<input type="text" name="id" class="form-group"><br>
	<lable>Nama_Acara</lable>
 		<input type="Password" name="nama_acara" class="form-group"><br>
	<lable>Tempat:</lable>
 		<input type="text" name="tempat" class="form-group"><br>
	<lable>Tanggal: </lable>
		<input type="date" name="tanggal" class="form-group"><br>
	<lable>Waktu:</lable>
 		<input type="text" name="waktu" class="form-group"><br>

<input type="submit"  value="Add" class="btn btn-primary">
		

</body>
</html>