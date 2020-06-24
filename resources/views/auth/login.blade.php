<html lang="en">
<head>
	<title>Gutim | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/logo.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    @if(isset($success))
                        <div class="row mr-2 ml-2">
                            <button type="text" class="btn btn-lg btn-block btn-outline-red " id="type-error">{{success}}</button>    </div>
            @endif
                   @if(isset($error))
                        <div class="row mr-2 ml-2">
                    <button type="text" class="btn btn-lg btn-block btn-outline-red " id="type-error">{{$error}}        </button>    </div>
                    @endif
            
<div class="limiter"><div class="container-login100"><div class="wrap-login100">
              
                    <form method="POST" action="{{ route('Login')}}"  class="login100-form validate-form">
                                @csrf       			
                    <span class="login100-form-title p-b-26">	Welcome     </span>
        <span class="login100-form-title p-b-48">   <a href="home"><img src="img/logo.png" style="width: 100px;height:100px" alt=""></a></span>
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
<select name="type" required>
<option value="2">Member</option>
<option  value="1">Trainer</option>
</select>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{route('password.request')}}"> Forgot Your Password ? </a>

    @endif

        <div class="container-login100-form-btn"><div class="wrap-login100-form-btn"><div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">Login</button>
</div></div>
<div class="text-center p-t-115">
                                                <span class="txt1">Don’t have an account?</span>
						<a class="txt2" href="register">Sign Up</a>
</div>
    </form>
</div></div></div>
        <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/animsition.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
