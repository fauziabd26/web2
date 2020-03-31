<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Users</title>
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

	<h2>Edit Users</h2>

	<a href="/users"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($users as $p)
	<form action="/users/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="no" value="{{ $p->no }}"> <br/>
		id <input type="text" required="required" name="id" value="{{ $p->id }}"> <br/>
		name <input type="text" required="required" name="name" value="{{ $p->name }}"> <br/>
		username <input type="text" required="required" name="username" value="{{ $p->username }}"> <br/>
		password <input type="password" required="required" name="password" value="{{ $p->password }}"> <br/>
		asal <input type="text" required="required" name="asal" value="{{ $p->asal }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>