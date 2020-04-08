<!DOCTYPE html>
<html>
<head>
    <title>Data users</title>
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

    <h2>Data users</h2>
    
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>id users</th>
            <th>Nama users</th>
            <th>Username</th>
            <th>Password</th>
            <th>Asal</th>
            <th>opsi</th>
            </tr>
        @foreach($users as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->asal }}</td>
            <td>
                <a href="/users/editusers/{{ $u->no }}">Edit</a>
                |
                <a href="/users/hapus/{{ $u->no }}">Hapus</a>
            </td>
        </tr>
        @endforeach            
    </table>
<br>
    <a href="/users/tambahusers"> + Tambah users Baru</a>

</body>
</html>