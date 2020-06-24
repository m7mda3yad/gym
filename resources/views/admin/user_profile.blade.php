@extends('admin.aindex')
 <br><br><br><br>
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container"><div class="row"><div class="col-md-6">
              <h1><i class="fa fa-user"></i> Edit Profile</h1>
    </div></div></div></header><secion id="profile">
<div class="container"><div class="row"><div class="col-md-9"><div class="card"><div class="card-header">
                        <h4>Edit Profile</h4>
            </div><div class="card-body">
                <form method="post" action="{{route('admin.update.member')}}">
@csrf
<div class="form-group">
<label for="name">Full Name</label>
                <input type="text" name="full_name" class="form-control" value="{{$m->full_name}}"></div><div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="{{$m->id}}">
<label for="email">Email</label>
<input type="text" name="email" class="form-control" value="{{$m->email}}"></div><div class="form-group">
<label>phone</label>
                <input name="phone" type="number" class="form-control" value="{{$m->phone}}"></div>
<div class="form-group">
                                        <label for="email">Plan </label>
  <?php
        $s=new App\Plan();
        $s=$s->where('id',$m->plan_id)->get();
       if($s)
       echo "<span>NO Plan</span>";
       else{
        if(($s->name))
        echo "<span>".$s->name."</span>";   
        }
        $p=new App\Plan();
        $p=$p->all();
     ?>
                                        
<div class="form-group"><select name="plan_id" type="text" class="form-control" required name="plan">
<option name="plan_id" value="0">Choose a plan</option>
@foreach($p as $data)
<option name="plan_id" value="{{$data->id}}">{{$data->name}}</option>
@endforeach 
</select></div>
</div>
<div class="form-group">
<?php
echo '<label for="email">Trainer</label>';
$s=new App\Trainer();$p=$s->all();?>
<div class="form-group">
<select type="text" class="form-control" required  name="trainer_id">
@if($m->trainer_id==0)
<option name="trainer_id" value="0"> </option> @endif
@foreach($p as $data)
<option name="trainer_id" value="{{$data->id}}">{{$data->full_name}}</option>
@endforeach
</select></div></div>
<div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Edit</button>
</div></form>

                <form action="delete/member">@csrf
<input type="hidden" name="id" value="{{$m->id}}"
<div class="form-group"><button type="submit" class="btn btn-primary btn-block btn-danger">Delete</button>
</form>
</div>
            </div></div></div></div></div></secion><br>
@if($errors)
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif
