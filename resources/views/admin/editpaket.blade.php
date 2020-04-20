<!DOCTYPE html>
<html>
<head>
	<title>Edit paket</title>
</head>
<body>

	<h2>Edit paket Haji</h2>

	<a href="/paket"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($paket as $sh)
	<form action="/paket/update" method="post">
		{{ csrf_field() }}
		id <input type="text" required="required" name="id" value="{{ $sh->id }}"> <br/>
		Nama Paket <input type="text" required="required" name="name" value="{{ $sh->name }}"> <br/>
		Durasi <input type="text" required="required" name="durasi" value="{{ $sh->durasi }}"> <br/>
		tanggal <input type="date" required="required" name="tanggal" value="{{ $sh->tanggal }}"> <br/>
		Pesawat <input type="text" required="required" name="pesawat" value="{{ $sh->pesawat }}"> <br/>
		Hotel Di Mekkah <input type="text" required="required" name="hotelmekka" value="{{ $sh->hotelmekka }}"> <br/>
        Hotel Di Madinah<input type="text" required="required" name="hotelmadina" value="{{ $sh->hotelmadina }}"> <br/>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>