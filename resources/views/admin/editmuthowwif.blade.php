<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Muthowwif</title>
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

	<h2>Edit Muthowwif</h2>

	<a href="/muthowwif"> Kembali</a>
	
	<br/>
	<br/>

	<div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">
                        {!! Form::model($muthowwif,['method'=>'POST','action'=>['MuthowwifController@update',$muthowwif->id_muthowwif]]) !!}
						<div class="form-group">
							{!! Form::label('id', 'Id Muthowwif') !!}
							{!! Form::text('id_muthowwif',null, array('class' => 'form-control','placeholder'=>'Id Muthowwif')) !!}
						</div>
						<div class="row">
					        <div class="col s6">
					            <img width="150px" src="{{ url('/gambar_muthowwif/'.$muthowwif->file) }}">
					        </div>
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
						{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
						{!! Form::close()!!}
					</div>
				</div>
			</div>
		

</body>
</html>