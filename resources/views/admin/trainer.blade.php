@extends('admin.aindex')
@section('content')
<header id="main-header" class="py-2 bg-primary text-white">
<div class="container"><div class="row"><div class="col-md-6">
<h1><i class="fa fa-user"></i> Edit Profile</h1>
</div></div></div></header>

  <secion id="profile">
<div class="container"><div class="row"><div class="col-md-9"><div class="card"><div class="card-header">
                <h4>Edit Profile</h4>
</div><div class="card-body">
                                    <form method="post" action="update/trainer">@csrf          
                                        <div class="form-group">        
                                        <label for="name">Name</label>
                                        <input name="full_name" type="text" class="form-control" value="{{ $t->full_name}}">
<input name="id" type="hidden"  value="{{ $t->id}}">
</div>
<div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="text" class="form-control" value="{{ $t->email}}">
</div>
<div class="form-group">
                                        <label for="">phone</label>
                                        <input  name="phone"type="number" class="form-control" value="{{ $t->phone}}">
</div>
<div class="form-group">
                                        <label >Plan</label><br>
                     <?php 
       $s=new App\Plan();
       $s=$s->find($t->id);
       if(isset($s->name))
       echo '<label>'.$s->name.'</label>';
else       echo '<label>No plan</label>';
?>
<input name="plan" value="{{$t->plan_id}}" type="hidden">
</div><div class="form-group">
                                             <label >Shift</label><br>
            @if($t->shift==1)<label > Morning </label><input name="shift" value="1" type="hidden">@endif
             @if($t->shift==2)<label> Night </label><input name="shift" value="2" type="hidden">@endif
</div><div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Edit</button></div>
</form>
<form action="delete/trainer">@csrf
<input type="hidden" name="id" value="{{$t->id}}"
<div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-danger">Delete</button>
</form>
</div></div></div>
</div></div>
@endsection