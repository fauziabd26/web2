@extends('admin.template')

@section('content')
 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">
    <h2>Data Paket Haji dan Umroh</h2>   
      <table class="table table-striped table-hover table-sm table-bordered">
        <thead class="thead-dark">
            <tr> 
              <th>ID</th>
              <th>Nama Paket</th>
              <th>Durasi Hari</th>
              <th>Tanggal Keberangkatan</th>
              <th>Pesawat</th>
              <th>Hotel Di Mekkah</th>
              <th>Hotel Di Madinah</th>
              <th>Actions</th>
            </tr> 
        </thead> 
              @foreach($paket as $p)
            <tr>
              <td>{{ $p->id }}</td>
              <td>{{ $p->name }}</td>
              <td>{{ $p->durasi }}</td>
              <td>{{ $p->tanggal }}</td>
              <td>{{ $p->pesawat }}</td>
              <td>{{ $p->hotelmekka }}</td>
              <td>{{ $p->hotelmadina }}</td>            
              <td><a class='badge badge-warning' href="/paket/editpaket/{{ $p->id }}"> Edit</a>
                  <a class='badge badge-danger' href="/paket/destroy/{{ $p->id }}"> Hapus</a>
              </td>   
            </tr>
              @endforeach
          </table>
        </br>
          <a href="/paket/tambahpaket"class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah Daftar Paket Baru</a>
  </div>
 </div>
@stop    