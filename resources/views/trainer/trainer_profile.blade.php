@extends('trainer.tindex')
@section('content')
 <section class="" data-setbg="/breadcrumb/classes-breadcrumb.jpg">
<div class="container"><div class="row"><div class="col-lg-12"><div class="breadcrumb-text">
            </div></div></div></div>
 </section>
  <header id="main-header" class="py-2 bg-primary text-white">
<div class="container"><div class="row"><div class="col-md-6">
<h1><i class="fa fa-user"></i> Edit Profile</h1>
</div>
      <div class="" style="float: right ;margin-right: 90px;margin-top: 20px">
          <a href="take_attendance"> 
        <h3 style="display: inline;margin-right:10px" class=""> Attendance</h3>
          </a>                            <span>Profile</span>
</div></div></div>
  </header>
  <section id="actions" class="py-4 mb-4 bg-light">
<div class="container"><div class="row">
<div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#passwordModal">
            <i class="fa fa-lock"></i> Change Password
          </a>
</div></div></div>
  </section>
  <secion id="profile">
<div class="container"><div class="row"><div class="col-md-9"><div class="card"><div class="card-header">
                <h4>Edit Profile</h4>
</div><div class="card-body">
                                    <form method="post" action="trainer/update">
                                            @csrf          

                                        <div class="form-group">        
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control" value="{{Auth::guard('trainer')->user()->name}}">
</div>
<div class="form-group">
<label for="email">Email</label>
<input  name="email" type="email" class="form-control" value="{{ Auth::guard('trainer')->user()->email}}">
</div>
<div class="form-group">
                                        <label >Full name</label>
                                        <input name="full_name"type="text" class="form-control" value="{{Auth::guard('trainer')->user()->full_name}}">
</div>
<div class="form-group">
                                        <label >phone</label>
                                        <input name="phone" type="number" class="form-control" value="{{Auth::guard('trainer')->user()->phone}}">
</div>
<div class="form-group">
                                        <label >Plan</label><br>
                                        <label>{{Auth::guard('trainer')->user()->plan_id}}</label>
    <input name="plan" value="{{Auth::guard('trainer')->user()->plan_id}}" type="hidden">
</div><div class="form-group">
                                                        <label >Shift</label><br>
                                            @if (Auth::guard('trainer')->user()->shift==1)<label > Morning </label>
                                            <input name="shift" value="1" type="hidden">
                                            @endif
                                            @if  (Auth::guard('trainer')->user()->shift==2)<label> Night </label>
                                            <input name="shift" value="2" type="hidden">
                                                 @endif
</div><div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Edit</button>
</div>
                                  </form>
    



</div></div></div>

            <div class="col-md-3">
                                <h3>My Image</h3><br>
            <img src="img/profile/{{Auth::guard('trainer')->user()->image}}" alt="" class="d-block img-fluid mb-3">
            <section id="actions" class="py-4 mb-4 bg-light">
  <div class=""><div class="col-md-9">
  <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#image"><i class="fa fa-plus"></i> Edit image</a>
</div></div></section></div>

        
    </div></div>
  </secion>

  <div class="modal fade" id="image">
    <div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header bg-primary text-white">                <h5 class="modal-title">Change Image</h5>
<button class="close" data-dismiss="modal"><span>&times;</span></button>
</div><div class="modal-body">
  <form action="trainer/image" method="post"enctype="multipart/form-data">
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
<button class="close" data-dismiss="modal"><span>&times;</span></button>
</div>
            <form method="post" action="trainer/password">
                @csrf          
<div class="modal-body">
<div class="form-group">
            <lable for="name">Old Password</lable>
            <input type="password" class="form-control">
</div>
<div class="form-group">
            <lable for="name">New Password</lable>
            <input type="password" class="form-control">
</div>
<div class="form-group">
            <lable for="name">Confirm Password</lable>
            <input type="password" class="form-control">
</div>
</div>
<div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Update Password</button>
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
</div>
</div>
</div>
<br>
@endsection