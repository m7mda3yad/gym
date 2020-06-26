<html lang="en">
<head>
	<title>Admin | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon"      type="image/png" href="{{asset('asset/img/logo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}">
</head>
<body>
    @if(isset($success))
                        <div class="row mr-2 ml-2">
                            <button type="text" class="btn btn-lg btn-block btn-outline-red " id="type-error">{{success}}</button>    </div>
            @endif
        @if(isset($error))
                    <div class="row mr-2 ml-2">
            <button type="text" class="btn btn-lg btn-block btn-outline-red " id="type-error">{{$error}}  </button>    </div>
            @endif
                    
<div class="limiter"><div class="container-login100"><div class="wrap-login100">
              
                    <form method="POST" action="{{route('admin.Login')}}"  class="login100-form validate-form">
                                @csrf       			
                    <span class="login100-form-title p-b-26">	Admin Login    </span>
        <span class="login100-form-title p-b-48">   <a href="home"><img src="{{asset('img/logo.png')}}" style="width: 100px;height:100px" alt=""></a></span>
<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
<span class="focus-input100" data-placeholder="User Name"></span>
<input type="name" class="input100 form-control" data-placeholder="{{ __('User Name') }} @error('email') is-invalid @enderror" name="email" value="{{ old('name') }}" required >
@error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input id="password" type="password" class="input100 form-control  " name="password" required autocomplete="current-password">
@error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div>
<div class="login100-form-bgbtn">
<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}></div>   
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{route('password.request')}}"> Forgot Your Password ? </a>

    @endif

        <div class="container-login100-form-btn"><div class="wrap-login100-form-btn"><div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">Login</button>
</div></div>
</form>
</div></div></div>
        <script src="{{asset('asset/js/jquery-3.2.1.min.js')}}}}"></script>
	<script src="{{asset('asset/js/animsition.min.js')}}}"></script>
	<script src="{{asset('asset/js/popper.js')}}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}}"></script>
	<script src="{{asset('asset/js/select2.min.js')}}"></script>
	<script src="{{asset('asset/js/moment.min.js')}}"></script>
	<script src="{{asset('asset/js/daterangepicker.js')}}"></script>
	<script src="{{asset('asset/js/countdowntime.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>
