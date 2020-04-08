<!DOCTYPE html>
<html>
<head>
	<title>Tambah Admin</title>
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

	<h2><a href="/admin/adminn">Lihat Data Admin</a></h2>
	<h3>Data Admin</h3>

	<form action="/adminn/store" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		<br/>
		nama Admin <input type="text" name="name" required="required"> <br/>
		<br/>
		username <input type="text" name="username" required="required"> <br/>
		<br/>
		password <input type="password" name="password" required="required"> <br/>
		<br/>
		<input type="submit" value="Tambah Admin">
	</form>
	<a href="/admin/adminn"> Kembali</a>
</body>
</html>