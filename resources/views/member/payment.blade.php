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
</head>
<body>
<div class="wrapper">
    <div class="checkout_wrapper">
        <div class="plan_info">
           <h1>TIM GYM</h1>
<div class="content">
         <h3> {{$plan->name}}</h3><br><br>
         <h3>{{$plan->cost}} $</h3>
</div></div>
        <div class="checkout_form">
       <form class="" action="{{route('get.payment')}}" method="post">
@csrf
         <p>Enter Fake Data</p>
         <p>Payment Section</p>
         <h3 class="danger">Plan Name = {{$plan->name}}</h3>
         <h3 class="red">Cost = {{$plan->cost}} $</h3>
         <i class='fab fa-cc-amex' style='font-size:36px'></i>
         <i class='fab fa-cc-visa' style='font-size:36px'></i>
         <i class='fab fa-cc-mastercard' style='font-size:36px'></i>
         <input type="hidden" name="id" value="{{$plan->id}}">
         <input type="hidden" name="trainer_id" value="{{$td}}">
<div class="details"><div class="section">
        <input type="number" placeholder="Card Number" id="cardNum" name="Card_number" required>
</div><div class="section">
    <input type="text" placeholder="Cardholder Name" required name="Cardholder_name">
</div><div class="section last_section"><div class="item">
        <input type="month" placeholder="Expiry Date" required name="Date">
</div><div class="item">
    <input type="number" placeholder="CVV" id="cvvNum" required name="CVV">
</div></div><div class="btn">
             <button type="submit" name="Pay">Pay</button>
</div></div>
     </form>
</div>
    </div></div>
 <br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br>
 </body>
</html>>
