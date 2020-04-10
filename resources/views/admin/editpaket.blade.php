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
		tanggal <input type="date" required="required" name="tanggal" value="{{ $sh->tanggal }}"> <br/>
		nama_muthowwif <input type="text" required="required" name="nama_muthowwif" value="{{ $sh->nama_muthowwif }}"> <br/>
        nama_paket<input type="text" required="required" name="nama_paket" value="{{ $sh->nama_paket }}"> <br/>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>