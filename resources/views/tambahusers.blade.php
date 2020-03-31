<!DOCTYPE html>
<html>
<head>
	<title>Tambah Users</title>
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

	<h2><a href="/users">Lihat Data Users</a></h2>
	<h3>Data Users</h3>

	<form action="/users/store" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		<br/>
		name <input type="text" name="name" required="required"> <br/>
		<br/>
		username <input type="text" name="username" required="required"> <br/>
		<br/>
		password <input type="password" name="password" required="required"> <br/>
		<br/>
		asal <input type="text" name="asal" required="required"> <br/>
		<br/>
		<input type="submit" value="Tambah Users">
	</form>
	<a href="/users"> Kembali</a>
</body>
</html>