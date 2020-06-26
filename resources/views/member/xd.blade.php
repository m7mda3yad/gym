@extends('member.uindex')
@sectiion('content')
    <div id="profile1" class="filterDiv profile1"><br>
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container"><div class="row"><div class="col-md-6">
              <h1><i class="fa fa-user"></i> Edit Profile</h1>
</div></div></div></header><br><br><secion id="profile"> <div class="container"><div class="row"><div class="col-md-9"><div class="card"><div class="card-header">
                        <h4>Edit Profile</h4>

</div>
 <section id="actions" class="py-4 mb-4 bg-light"><div class="container"><div class="row"><div class="col-md-3">
<a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#passwordModal"><i class="fa fa-lock"></i> Change Password</a>
</div></div></div></section>

<div class="card-body">
                <form method="post" action="{{route('profile.update')}}"enctype="multipart/form-data">@csrf          
<div class="form-group">
                                                <label for="name">Full Name</label>
<input name="full_name" type="text" class="form-control" value="{{ Auth::guard('member')->user()->full_name}}">
</div><div class="form-group">
                                                <label for="email">Email</label>
    <input name="email" type="email" class="form-control" value="{{Auth::guard('member')->user()->email}}" name="image">
</div><div class="form-group">
                                        <label >phone</label>
<input name="phone" type="number" class="form-control" value="{{Auth::guard('member')->user()->phone}}">
</div><div class="form-group">
                                        <label>birthday  =  {{Auth::guard('member')->user()->birthday}}</label>
<input type="hidden" name="birthday" class="form-control" value=" {{Auth::guard('member')->user()->birthday}}">
<input type="date" name="birthday" class="form-control" value=" {{Auth::guard('member')->user()->birthday}}">
</div><div class="form-group"><button type="submit"  name="edit_data"class="btn btn-primary btn-block">Edit</button></div>
                </form>
</div></div></div>
            <div class="col-md-3">
                                <h3>My Profile</h3>
                                <img src="asset/img/profile/{{Auth::guard('member')->user()->image}}" alt="" class="d-block img-fluid mb-3">
                                <section id="actions" class="py-4 mb-4 bg-light">
  <div class=""><div class="col-md-9">
  <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#image"><i class="fa fa-plus"></i> Edit image</a>
</div></div></section></div>
        
        </div></div></secion><br></div> 
       <div id="feedback"  class="filterDiv Feedback "><br><header id="main-header" class="py-2 bg-primary text-white">
       <div class="container"><div class="row"><div class="col-md-6">
                 <h1><i class="fa fa-user"></i> Feedback</h1>
       </div></div></div></header><div class="feedbackform"><br><br><br><br>
<form method="post" action="profile/feedback">@csrf
                        <div class="form-group">
<?php  if(Auth::guard('member')->user()->plan_id!=0){
if(Auth::guard('member')->user()->trainer_id!=0||Auth::guard('member')->user()->trainer_id!=null){
$t=new App\Trainer();
$t=Auth::guard('member')->user()->find(Auth::guard('member')->user()->trainer_id);

echo '<input type="hidden" name="trainer_id"value="'.$t->id.'">';
echo '<h4 >Your Trainer </h4>';
echo '<h3 style="color : green"> '. $t->full_name.'</h3>';
echo ' massage<input type="text" name="massage">';
}
}
else echo'  <label for="exampleFormControlTextarea1">Your Message To In  Gym</label>
                       <textarea class="form-control"name="massage" id="exampleFormControlTextarea1" 
                       rows="3" required></textarea>
                        <input type="hidden" name="statu" value="0">';?>
</div>
                        <input type="submit" value="Send">
                       </form>
<br><br><br><br>     <br><br><br><br></div></div><br><br><br><br><br><br><br><br></div></div>`</div>

<div id="plan" class="filterDiv  plan"> 
 <br><header id="main-header" class=" bg-primary text-white"><div class="container"><div class="row"><div class="col-md-6">
<h1><i class="fa fa-user"></i> Plan</h1></div></div></div></header><br><br>
<section class="membership-section "><div class="container"><div class="row">
@foreach($p as $data)
            <div class="col-lg-4"><div class="membership-item"><div class="mi-title">
                                                <h4>{{$data->name}}</h4></div> 
                    <ul>
                            <li><h4 class="mi-title">{{$data->title}}</h4></li>
                            <li><h2 class="mi-price">{{$data->cost}} $</h2></li>
                        <form action="{{route('payment')}}" method="post">
                    @csrf
             <li><h4>Number of Trainer</h4>
                            <?php 
                            $s=new App\Trainer();
                            $s=$s->where('plan_id',$data->id)->get();
                           echo "<h2 class='mi-price'>".$s->count()."</h2>";?>                              
                     <select name="trainer_id"  required>
                           @if($s->count()>0)
                            @foreach($s as $dat){
                              @if($data->shift==1)
                            <option  value="{{$dat->id}}">{{$dat->full_name}} shift = Morning </option>
                            @else
                            <option  value="{{$dat->id}}">{{$dat->full_name}}  shift = Night </option>
                           @endif
                           @endforeach
                            @endif
                    </select>
             </li>
                  <li>
                                <input type='hidden' name="id" value="{{$data->id}}">
                      @if($data->id==Auth::guard('member')->user()->plan_id)
                                <div class="danger">My Plan</div>
                       @else
                                <div class="mid-gray"><button type="submit" name="Pay">Pay</button></div>
                      @endif     
                  </li>
                        </form>

                        </ul>
    <div id="paypal-button"></div>
                </div></div>

@endforeach
</div></div></section></div>
<div  id="trainer" class="filterDiv  trainer">
    <header id="main-header" class="py-2 bg-primary text-white">
<div class="container"><div class="row"><div class="col-md-6">
                     <h1><i class="fa fa-user"></i> Trainer</h1>
</div></div></div></header>
<span id="Trainers">
<section class="trainer-section spad">
<div class="container">
<div class="row">
   <?php $t=new App\Trainer(); $t=$t->all();?>
@foreach($t as $data)
<div class="col-lg-4 col-md-6">
<div class="single-trainer-item">
    <img src="asset/img/profile/{{$data->image}}" alt="">
<div class="trainer-text">
                            <h5>{{$data->full_name}}</h5>
<?php
                            $s=new App\Plan();
                            $s=$s->where('id',$data->plan_id)->get();foreach($s as $ss){
                            if(($ss->name))echo "<span>".$ss->name."</span>";                             
}
                            ?>      
 <p>there are occasions when the times of the fall of that sort, you should work to seek pleasure and pain, some great.</p>
<div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
</div></div></div></div>
@endforeach
</div></div></section></span>
</div>
   

<!-- Image Modal -->

<div class="modal fade" id="image">
    <div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header bg-primary text-white">                <h5 class="modal-title">Change Image</h5>
<button class="close" data-dismiss="modal"><span>&times;</span></button>
</div><div class="modal-body">
    <form action="profile/image" method="post"enctype="multipart/form-data">
                        @csrf
<div class="form-group">
    <lable> Image </lable>
    <input type="file" class="form-control" required name="image">
</div><div class="modal-footer">    
        <button type="submit" class="btn btn-primary" >Update Image</button>
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
</div></form></div></div></div></div><br>

<div class="modal fade" id="passwordModal"><div class="modal-dialog modal-lg"><div class="modal-content">
<div class="modal-header bg-primary text-white">
<h5 class="modal-title">Change Password</h5>
<button class="close" data-dismiss="modal"><span>&times;</span></button></div>
    <form method="post" action="profile/password">@csrf
  <div class="modal-body">
                     <div class="form-group"><lable for="name">Old Password</lable>
            <input name="password"  required type="text" class="form-control" ></div>
                       <div class="form-group"><lable for="name">New Password</lable>
            <input name="new_password" required type="text" class="form-control"></div>
                       <div class="form-group"><lable for="name">Confirm Password</lable>
            <input name="confirm_new_password" required type="text" class="form-control"></div>    
           <div class="modal-footer"><button class="btn btn-secondary"  data-dismiss="modal">Close</button>
               <button class="btn btn-primary"  type="submit" data-dismiss="modal">Update Password</button></div>
</div> </form></div></div></div>

@endsectiion