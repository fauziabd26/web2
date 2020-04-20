@extends('homeuser.template')

@section('content')

    </br>
    </br>
    </br>
    <div id="colorlib-main">
      <section class="ftco-section-no-padding bg-light">        
      <h2>Data Paket Haji dan Umroh</h2>
    
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover table-condensed tfix">
          <thead align="center">
            <tr>
              <td><b>id</b></td>
              <td><b>Nama Manasik</b></td>
              <td><b>Nama Muthowwif</b></td>
              <td><b>Tanggal</b></td>
              <td><b>Tempat</b></td>
              <td><b>Waktu</b></td>
            </tr>
          </thead>
            @foreach($manasik as $m)
            <tr>
              <td>{{ $m->id }}</td>
              <td>{{ $m->nama_manasik }}</td>
              <td>{{ $m->id_muthowwif }}</td>
              <td>{{ $m->tanggal }}</td>
              <td>{{ $m->tempat }}</td>
              <td>{{ $m->waktu }}</td>
            </tr>
              @endforeach
        </table>
      </div>
    </section>
  </br>
  </br>
  </br>
@stop