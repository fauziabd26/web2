@extends('homeuser.template')

@section('content')

      </br>
      </br>
      </br>
      <div id="colorlib-main">
        <section class="ftco-section-no-padding bg-light">
          <div class="t-content-brand-wrapper">
            <div class="btn btn-primary" >
              <div class="input-group">
                <li>Selamat Datang {{Session::get('username')}}</li> 
              </div>
            </div>
          </div>
          <div>
            <p><span> tata cara membeli paket</span></p>
            <ul>
              <li>1. register akun</li>
              <li>2. baca dengan teliti <a href="/showpakett">paket</a> yang akan anda pilih</li>
              <li>3. pilih <a href="/showpakett"> paket </a> sesuai keinginan</li>
              <li>4. isi form pemesanan</li>
              <li>5. selesaikan administrasi</li>
              <li>6. tunggu notifikasi dari kami</li>
              <li>7. jika sudah dapat notifikasi maka tunggu pemberitahuan selanjutnya dari kami</li>
       </ul>   </div>
      </section>
    
    @stop