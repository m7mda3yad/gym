@extends('admin.aindex')
<section class="breadcrumb-section set-bg" data-setbg="{{asset('asset/img/breadcrumb/classes-breadcrumb.jpg')}}">
<div class="container">    <div class="row">       <div class="col-lg-12">           <div class="breadcrumb-text">
                           <h2>Profile</h2>
                       <div class="breadcrumb-option">
             <a href="dashboard"><i class="fa fa-home"></i> Home</a>   <!--          Link           -->
             <span>My Profile</span>
      </div></div></div></div></div>
 </section>
<!-- Breadcrumb Section End -->
<header id="main-header" class="py-2 bg-primary text-white">
<div class="container">      <div class="row">       <div class="col-md-6">
                 <h1><i class="fa fa-user"></i> Edit Profile</h1>
</div></div></div>
  </header>
<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
<div class="container"><div class="row"><div class="col-md-3 mr-auto">
          
            <a href="dashboard" class="btn btn-light btn-block">      <!--          link           -->
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
</div><div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#passwordModal">
            <i class="fa fa-lock"></i> Change Password
          </a>
</div></div></div>
  </section>
 <!-- PROFILE EDIT -->
<secion id="profile"><div class="container"><div class="row"><div class="col-md-9"><div class="card"><div class="card-header">
                          <h4>Edit Profile</h4>
</div><div class="card-body">
                          <form action="{{route('admin.update.profile')}}" method="post">
         @csrf          
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name">   <!--  link -->
</div><div class="form-group">
                  <label for="email">Email</label>
                  <input name="email" type="text" class="form-control" value="{{Auth::user()->email}}">
</div>
                  <input type="hidden" name="flag" value="ubdate_data">
                  <button class="btn btn-primary" data-dismiss="modal" value="ubdate_data">Update Data</button>           <!--        link      -->
              </form>
</div></div></div><div class="col-md-3">
          <h3>Your Avatar</h3>
          <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
          <button class="btn btn-primary btn-block">Edit Image</button>
</div></div>    </div>
  </secion>

  <!-- Password Modal -->
<div class="modal fade" id="passwordModal"> 
<div class="modal-dialog modal-lg">      
<div class="modal-content">   
<div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Change Password</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
</div><div class="modal-body">
                <form action="update" method="post">   <!--        link      -->
    @csrf
<div class="form-group">
                <lable for="name">Old Password</lable>
                <input type="password" class="form-control" name="old_password">
</div><div class="form-group">
                <lable for="name">New Password</lable>
                <input type="password" class="form-control"name="new_password">
</div><div class="form-group">
                <lable for="name">Confirm Password</lable>
                <input type="password" class="form-control"name="confirm_new_password">
</div>
                <input type="hidden" name="flag" value="ubdate_password">

<div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Update Password</button>           <!--        link      -->
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
                </form>
</div></div></div></div><br>
