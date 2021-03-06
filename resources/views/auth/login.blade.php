<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA AKREDITASI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('Admin/dist/img/logo-ipb.png')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Login_v19/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                 <span class="login100-form-title p-b-33">
                        SIMAPROSA FMIPA
                    </span>
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <div class="wrap-input100 validate-input">
                                <input id="email" type="text" class="input100" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100-1"></span>
                                <span class="focus-input100-2"></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                                <input id="password" type="password" class="input100" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100-1"></span>
                                <span class="focus-input100-2"></span>
                            </div>
                        </div>
                        <div class="container-login100-form-btn m-t-20">
                            <button class="login100-form-btn">
                                LOGIN
                            </button>
                        </div>
                        <div class="text-center p-t-45 p-b-4">
                            <span class="txt1">
                            Copyright <?php echo "&copy;" . date("Y"); ?> Fakultas Matematika dan Ilmu Pengetahuan Alam</div>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('Login_v19/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('Login_v19/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('Login_v19/js/main.js')}}"></script>

</body>
</html>
