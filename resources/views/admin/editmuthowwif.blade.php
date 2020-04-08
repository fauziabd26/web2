<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Muthowwif</title>
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

	<h2>Edit Muthowwif</h2>

	<a href="/muthowwif"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($muthowwif as $p)
	<form action="/muthowwif/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="no" value="{{ $p->no }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $p->id }}"> <br/>
		name <input type="text" required="required" name="name" value="{{ $p->name }}"> <br/>
		umur <input type="text" required="required" name="umur" value="{{ $p->umur }}"> <br/>
		alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>