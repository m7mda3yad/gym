@extends('uindex')
@section('content')
<div class="wrapper"><div class="checkout_wrapper"><div class="plan_info">
           <h1>TIM GYM</h1>
<div class="content">
         <h3> {{$plan->name}}</h3><br><br>
         <h3>{{$plan->cost}} $</h3>
</div></div><div class="checkout_form">
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
</div></div></div>
 <br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br>
 
@endsection