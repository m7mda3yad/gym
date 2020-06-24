<html lang="en"> 
<head>
 	<title>Gutim | register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon"      type="image/png" href="{{asset('img/logo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="limiter"><div class="container-login100"><div class="wrap-login100">
    <form method="POST" action="{{ route('register')}}"  class="login100-form validate-form">
                                @csrf       			
                <span class="login100-form-title p-b-26">	Welcome     </span>
                        <div class="wrap-input100 validate-input">
                            <label class="col-md-12 col-form-label" >User Name</label>
                            <input id="name" type="text" class="form-control  input100  " name="name" required >
                            @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>

                <div class="wrap-input100 validate-input">
                            <label class="col-md-12 col-form-label" >Full Name</label>
<input id="name" type="text" class="form-control  input100" name="full_name" required >
                        @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div>
<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <label for="email" class="col-md-12 col-form-label ">{{ __('E-Mail Address') }}</label>
<input id="email" type="email" class="form-control  input100  " name="email"  required >
                        @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div>


                        <div class="wrap-input100 validate-input">
                            <label class="col-md-122 col-form-label" >Birth Day </label>
                            <input id="name" type="date" class="form-control  input100" name="birthday" required >
                            @error('birthday')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="wrap-input100 validate-input">
                            <label class="col-md-12 col-form-label" >Phone</label>
                            <input id="name" type="number" class="form-control  input100" name="phone" required >
                            @error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                    <br> <div class="wrap validate-input">
                    <lable for="gender">Gender</lable> <br><br>
                    male <input type="radio" name="gender" value="male">
                    female <input type="radio" name="gender" value="female">
                </div><br>
                  
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
    <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>
<input id="password" type="password" class="input100 form-control  " name="password" required autocomplete="password_confirmation">
    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror</div>
<div class="wrap-input100 " data-validate="Enter password">
<label for="password" class="col-md-12 col-form-label">{{ __('Confirm') }}</label>
<input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">
</div> 
                        <button type="submit" class="btn btn-primary login100">{{ __('Register') }}</button>
</div>
</form>
</div></div></div>
<div> 
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/animsition.min.js')}}"></script>
	<script src="{{asset('js/popper.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script src="{{asset('js/moment.min.js')}}"></script>
	<script src="{{asset('js/daterangepicker.js')}}"></script>
	<script src="{{asset('js/countdowntime.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</div>
    </body>
</html>
    