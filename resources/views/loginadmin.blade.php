 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="/login/image/png" href="/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/login/css/main.css">
<!--===============================================================================================-->
</head>
  <body>
    <div class="authentication-theme auth-style_1">
      <div class="row">
        <div class="col-12 logo-section">
          <a href="src/index.html" class="logo">
            <img src="src/assets/images/logo.svg" alt="logo" />
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
          <div class="grid">
            <div class="grid-body">
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
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
               <form action="{{ url('/loginadminPost') }}" method="post">
                    @csrf
                    <div class="form-group input-rounded">
                      
                      <input type="username" class="form-control" placeholder="Username" name="username" />
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
					</div>
					<div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Login</button>
                    <a href="{{url('/')}}" class="btn btn-md btn-warning">Kembali Ke Beranda</a>
                </div>
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
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>