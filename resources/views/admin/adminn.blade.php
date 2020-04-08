<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
    <link rel="stylesheet" type="/text/css" href="{{ asset('/css/app.css') }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="/src/assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/src/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="/src/assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="/src/asssets/images/favicon.ico" />

</head>
<body>

    <h2>Data Admin</h2>
    
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>id Admin</th>
            <th>Nama Admin</th>
            <th>Username</th>
            <th>Password</th>
            <th>opsi</th>
            </tr>
        @foreach($adminn as $a)
        <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->name }}</td>
            <td>{{ $a->username }}</td>
            <td>{{ $a->password }}</td>
            <td>
                <a href="/adminn/editadminn/{{ $a->id }}">Edit</a>
                |
                <a href="/adminn/hapus/{{ $a->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach            
    </table>
<br>
    <a href="/adminn/tambahadminn"> + Tambah Admin Baru</a>

</body>
</html>