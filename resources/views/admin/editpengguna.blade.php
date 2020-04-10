<!DOCTYPE html>
<html>
<head>
	<title>Edit pengguna</title>
</head>
<body>

	<h2>Edit Pengguna</h2>

	<a href="/pengguna"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pengguna as $sh)
	<form action="/pengguna/update" method="post">
		{{ csrf_field() }}
		id <input type="text" required="required" name="id" value="{{ $sh->id }}"> <br/>
		email <input type="text" required="required" name="email" value="{{ $sh->email }}"> <br/>
		username <input type="text" required="required" name="username" value="{{ $sh->username }}"> <br/>
        password<input type="password" required="required" name="password" value="{{ $sh->password }}"> <br/>
        alamat<input type="text" required="required" name="alamat" value="{{ $sh->alamat }}"> <br/>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>