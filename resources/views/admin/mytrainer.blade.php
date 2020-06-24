@extends('admin.aindex')
    <br><br><br><br><br><br>
      <secion id="psost">
<div class="col-md-8"><div class="card">                
<div class="card-header"><h4>Edit Profile</h4></div><div class="card-body">
<form method="get" action="mytrainer/update">    @csrf          
<input type="hidden" name="user_id" value="{{$u->id}}">
<div class="form-group"><label for="name"> Name</label><input type="text" class="form-control" name="name" value="{{$u->name}}"></div>
<div class="form-group"><label for="email">Email</label><input type="text" class="form-control" name="email" value="{{$u->email}}"></div>
<div class="form-group"><label for="full_name">Full Name</label><input type="text" class="form-control" name="full_name" value="{{ $t->full_name}}"></div>
<div class="form-group"><label for="phone">phone</label><input type="number"name="phone" class="form-control" value="{{ $t->phone}}"></div>
<label >Plan</label><br>
<?php $x=new App\Plan();
if(isset($t->plan_id)){
$x =$x->where('id',$t->plan_id)->get() ;
foreach($x as $m){};
echo "<label>$m->name </label>";}?>
<div class="form-group"><label>Shift</label><br>@if($t->shift==1)<label>Morning</label>@endif
@if($t->shift==2)<label>Night</label>@endif</div>
<div class="form-group"><button type="submit" class="btn btn-primary btn-block">Edit</button></div>
</form>
<form method="post" action="delete/trainer">     @csrf
<input type="hidden" name="id"value="{{$u->id}}">
<div class="form-group"><button type="submit" class="btn btn-primary btn-block">Delte</button></div>
</form>
</div></div></div>
</secion><br>
