@extends('layouts.template')

@section('title', 'Travel Multazam')

@section('content')
<div id="colorlib-main">
    <section class="ftco-section-no-padding bg-light">
    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body">
              <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-12 mx-auto form-wrapper">
                    <h1>Register</h1>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <form action="{{ url('/registerPost') }}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Id_User:</label>
                                    <input type="id" class="form-control" id="id" name="id">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text"  class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Address:</label>
                                    <input type="alamat" class="form-control" id="alamat" name="alamat">
                                </div> 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                    <a href="{{url('loginuser')}}" class="btn btn-md btn-danger">Cancel</a>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    </section>
</br>
</br>
</br>
@stop