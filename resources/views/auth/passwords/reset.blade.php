<html lang="en">
<head>
	<title>Gutim | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('asset//img/logo.png')}}"/>
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
                    <button type="text" class="btn btn-lg btn-block btn-outline-red " id="type-error">{{$error}}        </button>    </div>
                    @endif
<div class="container"><div class="row justify-content-center"><div class="col-md-8"><div class="card"><div class="card-header">{{ __('Reset Password') }}</div>
                <div class="card-body">
  
<span class="txt1">Don’t have an account?</span>
<a class="txt2" href="register">Sign Up</a>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                 <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div></div>
                 <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div></div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                      <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div></div>
                        <div class="form-group row mb-0"><div class="col-md-6 offset-md-4">
        <select name="type" required>
        <option value="2">Member</option>
        <option  value="1">Trainer</option>
        </select>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
 </div></div></form></div></div></div></div></div>

        <script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('asset/js/animsition.min.js')}}"></script>
	<script src="{{asset('asset/js/popper.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('asset/js/select2.min.js')}}"></script>
	<script src="{{asset('asset/js/moment.min.js')}}"></script>
	<script src="{{asset('asset/js/daterangepicker.js')}}"></script>
	<script src="{{asset('asset/js/countdowntime.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>

