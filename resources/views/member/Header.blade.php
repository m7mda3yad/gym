<html>
<head>
<meta charset="UTF-8"><link rel="icon" type="image/png" href="asset/img/logo.png"/> <meta name="keywords" content="Gutim, unica, creative, html">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>TIMGYM</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<script src='https://kit.fontawesome.com/a076d05399.js'></script>   
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/material-design-iconic-font.min.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animate.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/hamburgers.min.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/animsition.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/select2.min.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/daterangepicker.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/util.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}">   
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" type="text/css">  
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" type="text/css">  
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}" type="text/css">    
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}" type="text/css">    
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">    
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}"> 
 <style>
    .navbar {
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.feedbackform {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.
</style>
</head>
<body>
<div class="navbar">
<header style="background-color:black" class="header-section ">
<div class="container"><div class="nav-menu">  <nav class="mainmenu mobile-menu">
<div id="tabs">
<div class='log'></div>
    <ul>
        <li><a href="#profile1">{{Auth::guard('member')->user()->name}}</a></li>
        <li><a href="#feedback">Feedback</a></li>
        <li><a href="#plan">Plan</a></li>
        <li><a href="#trainer">Trainer</a></li>
        <li><a href="home">home</a></li>
    </ul>
    </div>
</div></div></header></div>
   