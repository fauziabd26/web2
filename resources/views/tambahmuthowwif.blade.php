<!DOCTYPE html>
<html>
<head>
	<title>Tambah Muthowwif</title>
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

	<h2><a href="/muthowwif">Lihat Data Muthowwif</a></h2>
	<h3>Data Muthowwif</h3>

	<form action="/muthowwif/store" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		<br/>
		name <input type="text" name="name" required="required"> <br/>
		<br/>
		umur <input type="text" name="umur" required="required"> <br/>
		<br/>
		alamat <input type="text" name="alamat" required="required"> <br/>
		<br/>
		<input type="submit" value="Tambah Muthowwif">
	</form>
	<a href="/muthowwif"> Kembali</a>
</body>
</html>