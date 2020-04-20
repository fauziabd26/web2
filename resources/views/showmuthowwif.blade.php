@extends('layouts.template')

@section('title', 'Profil Muthowwif')

@section('content')
      <div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Muthowwif</span></p>
	            <h1 class="bread">Data Diri Para Muthowwif</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    		<div class="container" style="margin-top:20px">
			        <h2>Data Muthowwif</h2>
			    	<div class="table-responsive">
                		<table class="table table-bordered table-striped table-hover table-condensed tfix">
                    		<thead align="center">
                       			<tr>
		                           <td><b>Foto</b></td>
		                           <td><b>Nama Muthowwif</b></td>
		                           <td><b>Umur</b></td>
		                           <td><b>Alamat</b></td>
                       			</tr>
                   			</thead>
                   @foreach($muthowwif as $m)
                       			<tr>
		                           <td><img width="150px" src="{{ url('/gambar_muthowwif/'.$m->file) }}"></td>
		                           <td>{{ $m->nama_muthowwif }}</td>
		                           <td>{{ $m->umur }}</td>
		                           <td>{{ $m->alamat }}</td>
                       			</tr>
                   @endforeach
              			</table>
          			</div>
				</div>
			</section>
@stop