<!DOCTYPE html>
<html>
<head>
	<title>Tambah Agenda</title>
</head>
<body>

	<h2>Data Agenda</h2>

	<a href="/admin/tambah"> + Tambah Agenda Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
		</tr>

		@foreach($admin ?? '' as $admin ?? '')
		<tr>
			<td>{{ $admin ?? ''->id }}</td>
			<td>{{ $admin ?? ''->name }}</td>
			<td>{{ $admin ?? ''->username }}</td>
			<td>{{ $admin ?? ''->password }}</td>
			<td>
				<a href="/admin/edit/{{ $admin ?? ''->admin_id }}">Edit</a>
				|
				<a href="/admin/hapus/{{ $admin ?? ''->admin_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

<!--
</body>
</html>

<!DOCTYPE html>
<html>
 <head>
  <title>Tambah Agenda</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
 
 </head>
 <body>
 	<div id="card">
			<div id="card-content">
		<div id="card-title">
			<h2>Agenda</h2>
			<div class="underline-title"></div>
		</div>
		</div>
		<form method="post" class="form"> 
					<label for="id-admin" style="padding-top:13px">&nbsp;Id-admin</label>
			<input
			id="id-admin"
			class="form-content"
			type="text"
			name="id_admin"
			data-validate="Name is required"
			required />

			<div class="form-border"></div>
			<label for="password" style="padding-top:22px">&nbsp;Password</label>
			<input
			id="password"
			class="form-content"
			type="password"
			name="password"
            data-validate="Password is required"
			required />

			<div class="form-border"></div>
            <label for="waktu" style="padding-top:22px">&nbsp;Waktu</label>
            <select name="" id="waktu" class="form-content" required>
                <option value="" selected disable> Waktu</option>
                @foreach ($waktu as $data)
                    <option value="">{{$data}}</option>
                @endforeach
            </select>

            <div class="form-border"></div>
            <label for="acara" style="padding-top:22px">&nbsp;Acara</label>
            <select name="" id="acara" class="form-content" required>
                <option value="" selected disable> Acara</option>
                @foreach ($acara as $data)
                    <option value="">{{$data}}</option>
                @endforeach
            </select>
            <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
							</button>
						</div>

						<a href="Prosestambah" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Tambah Agenda
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
		</form>
	  </div>
 </body>
</html>