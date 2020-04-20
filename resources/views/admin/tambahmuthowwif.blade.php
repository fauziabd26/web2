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

	@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
	<form action="/muthowwif/proses" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{!! Form::open(array('url' => '/muthowwif')) !!}
						<div class="form-group">
							{!! Form::label('id', 'Id Muthowwif') !!}
							{!! Form::text('id_muthowwif',null, array('class' => 'form-control','placeholder'=>'Id Muthowwif')) !!}
						</div>
						<div class="form-group">
							<a>Foto Muthowwif</a>
							<input type="file" name="file">
						</div>
                        <div class="form-group">
							{!! Form::label('nama', 'Nama Muthowwif') !!}
							{!! Form::text('nama_muthowwif', null, array('class' => 'form-control','placeholder'=>'Nama Muthowwif')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('umur', 'Umur') !!}
							{!! Form::text('umur', null, array('class' => 'form-control','placeholder'=>'Umur')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('alamat', 'Alamat') !!}
							{!! Form::text('alamat', null, array('class' => 'form-control','placeholder'=>'Alamat')) !!}
						</div>

						{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
						{!! Form::close()!!}
					</div>
	<a href="/muthowwif"> Kembali</a>

</form>
</body>
</html>