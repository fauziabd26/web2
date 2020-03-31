<!DOCTYPE html>
<html>
<head>
	<title>Edit Schedule</title>
</head>
<body>

	<h2>Edit Schedule Umroh</h2>

	<a href="/scheduleumroh"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($scheduleumroh as $us)
	<form action="/scheduleumroh/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="no" value="{{ $us->no }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $us->id }}"> <br/>
		nama_acara <input type="text" required="required" name="nama_acara" value="{{ $us->nama_acara}}"> <br/>
        tempat<input type="text" required="required" name="tempat" value="{{ $us->tempat }}"> <br/>
		tanggal <input type="date" required="required" name="tanggal" value="{{ $us->tanggal}}"> <br/>
        waktu <input type="text" required="required" name="waktu" value="{{ $us->waktu }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>