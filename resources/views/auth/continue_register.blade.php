<html lang="en">
<head>
 	<title>Gutim | register</title>
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
<div class="limiter"><div class="container-login100"><div class="wrap-login100">

<form method="POST" action="continue_register"  class="login100-form validate-form">
                                @csrf       			
<div class="form-group">
                                        <label >Full Name</label><input name="name" type="text" class="form-control" >
@error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div>
<div class="form-group">
                                        <label >phone</label><input  name="phone" type="number" class="form-control" >
@error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div>

<div  >
<label>male</label>  <input type="radio" name="gender" value = "male" id="gender-male"  >
<label>female</label><input type="radio" name="gender" value="female" id="gender-female">
@error('gender')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div><br>
<div>
<label>Birth Day</label><input type="date" name="birthday" required>
    @error('birthday')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
</div>
<button type="submit" class="btn btn-primary login100">{{ __('Register') }}</button>
</form>
</div></div></div>
    <div> 
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/animsition.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/countdowntime.js"></script>
	<script src="js/main.js"></script>
</div>
    </body>
</html>
