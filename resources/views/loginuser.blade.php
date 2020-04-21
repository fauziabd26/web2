@extends('layouts.template')

@section('title', 'Travel Multazam')

@section('content')
<div id="colorlib-main">
    <section class="ftco-section-no-padding bg-light">
    <div class="authentication-theme auth-style_1">
      </br>
      </br>
      </br>
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body">
              <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-12 mx-auto form-wrapper">
                  @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
               <form action="{{ url('/loginPost') }}" method="post">
                    @csrf
                    <div class="form-group input-rounded">
                      
                      <input type="email" class="form-control" placeholder="Email" name="email" />
                    </div>
                    <div class="form-group input-rounded">
                      <input type="password" class="form-control" placeholder="Password" name="password" />
                    </div>
                    <div class="form-inline">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" class="form-check-input" />Remember me <i class="input-frame"></i>
                        </label>
                      </div>
                      <div style="margin-left:15px; ">
                        Belum punya akun klik &nbsp; <a style="color:blue;" href="{{url('register')}}">daftar</a>
                    </div>
          </div>
          <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Login</button>
                    <a href="{{url('loginadmin')}}" class="btn btn-md btn-primary">Login Sebagai Admin</a>
                    </div>
                    
                  </br>
                  </br>
                  </br>
                
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="auth_footer">
        <p class="text-muted text-center">© MWR Inc 2019</p>
      </div>
    </div>
</section>
@stop