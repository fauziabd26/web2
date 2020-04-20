@extends('homeuser.template')

@section('content')

        <div id="colorlib-main">
        <section class="ftco-section-no-padding bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home_user">Home</a>
          </ul>
        </div>
      </div>
    </nav>
      <div class="container" style="margin-top:20px">
        <h2>Data Paket Haji dan Umroh</h2>   
          <table class="table table-striped table-hover table-sm table-bordered">
            <thead class="thead-dark">
              <table border="1">
                <tr> 
                  <th>Nama Paket</th>
                  <th>Durasi Hari</th>
                  <th>Tanggal Keberangkatan</th>
                  <th>Pesawat</th>
                  <th>Hotel Di Mekkah</th>
                  <th>Hotel Di Madinah</th>
                  <th>Actions</th>
                </tr>      
            </thead> 
              @foreach($paket as $sh)
              <tr>
                  <td>{{ $sh->name }}</td>
                  <td>{{ $sh->durasi }}</td>
                  <td>{{ $sh->tanggal }}</td>
                  <td>{{ $sh->pesawat }}</td>
                  <td>{{ $sh->hotelmekka }}</td>
                  <td>{{ $sh->hotelmadina }}</td>
                 
                  <td><a class='badge badge-danger' href="/paket/editpakett/{{ $sh->id }}"> Pilih Paket</a>   
              </tr>
              @endforeach
          </table>
      </div>
    </section>
  </br>
</br>
	  @stop