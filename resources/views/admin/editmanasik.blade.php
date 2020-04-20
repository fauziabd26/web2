<!DOCTYPE html>
<html>
<head>
	<title>Edit Agenda Manasik</title>
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

	<h2>Edit Manasik
	<a href="/manasik"> Kembali</a>
	
	<br/>
	<br/>

	<div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">
						{!! Form::model($manasik,['method'=>'PATCH','action'=>['ManasikController@update',$manasik->id]]) !!}
						<div class="form-group">
							{!! Form::label('id', 'id') !!}
							{!! Form::text('id',null, array('class' => 'form-control','placeholder'=>'id')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('nama', 'Nama Manasik') !!}
							{!! Form::text('nama_manasik', null, array('class' => 'form-control','placeholder'=>'Nama Manasik')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('Nama', 'Nama Muthowwif') !!}
							{!! Form::select('id_muthowwif', $muthowwif ,null , array('class' => 'form-control')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('tanggal', 'Tanggal') !!}
							{!! Form::text('tanggal', null, array('class' => 'form-control','placeholder'=>'Tanggal')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('tempat', 'Tempat') !!}
							{!! Form::text('tempat', null, array('class' => 'form-control','placeholder'=>'Tempat')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('waktu', 'Waktu') !!}
							{!! Form::text('waktu', null, array('class' => 'form-control','placeholder'=>'Waktu')) !!}
						</div>

						{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
						{!! Form::close()!!}
					</div>
				</div>
			</div>	

</body>
</html>