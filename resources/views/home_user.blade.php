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
      </section>
    
    @stop