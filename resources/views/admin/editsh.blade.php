<!DOCTYPE html>
<html>
<head>
	<title>Edit Schedule</title>
</head>
<body>

	<h2>Edit Schedule Haji</h2>

	<a href="/schedulehaji"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($schedulehaji as $sh)
	<form action="/schedulehaji/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="no" value="{{ $sh->no }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $sh->id }}"> <br/>
		nama_acara <input type="text" required="required" name="nama_acara" value="{{ $sh->nama_acara }}"> <br/>
        tempat<input type="text" required="required" name="tempat" value="{{ $sh->tempat }}"> <br/>
		tanggal <input type="date" required="required" name="tanggal" value="{{ $sh->tanggal }}"> <br/>
        waktu <input type="time" required="required" name="waktu" value="{{ $sh->waktu }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>