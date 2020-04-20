@extends('admin.template')

@section('content')
 <div id="colorlib-main"> 
  <div class="container" style="margin-top:20px">   
  </br>
  </br>
  </br>
    <h2>Data Muthowwif</h2>
      @if($muthowwif->count())
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
         <thead align="center">
          <tr>
            <td><b>Id Muthowwif</b></td>
            <td><b>Foto</b></td>
            <td><b>Nama Muthowwif</b></td>
            <td><b>Umur</b></td>
            <td><b>Alamat</b></td>
            <td colspan="2"><b>Actions</b></td>
          </tr>
        </thead>
          @foreach($muthowwif as $m)
          <tr>
            <td>{{ $m->id_muthowwif }}</td>
            <td><img width="150px" src="{{ url('/gambar_muthowwif/'.$m->file) }}"></td>
            <td>{{ $m->nama_muthowwif }}</td>
            <td>{{ $m->umur }}</td>
            <td>{{ $m->alamat }}</td>
            <td align="center" width="30px">
              <a href="/muthowwif/editmuthowwif/{{ $m->id_muthowwif }}" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a></td>
            <td align="center" width="30px">
              <a href="/muthowwif/destroy/{{ $m->id_muthowwif }}"class="btn btn-danger btn-sm">Hapus</a></td>
          </tr>
          @endforeach
        </table>
      </div>
      @else
       <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle"></i> Data Muthowwif tidak tersedia
       </div>
      @endif
      <br>
    <a href="/muthowwif/tambahmuthowwif" class="btn btn-primary" role="button"><i class="fa fa-pencil-square"></i> + Tambah muthowwif Baru</a>
</div>
</div>
@stop