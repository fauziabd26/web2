<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
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

    <h2>Data Pengguna</h2>
    
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>id Pengguna</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Asal</th>
            <th>Opsi</th>
            </tr>
        @foreach($pengguna as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->alamat }}</td>
            <td>
                <a href="/pengguna/editpengguna/{{ $u->id }}">Edit</a>
                |
                <a href="/pengguna/destroy/{{ $u->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach            
    </table>
<br>
    <a href="/pengguna/tambahpengguna"> + Tambah Pengguna Baru</a>

</body>
</html>