@extends('admin.aindex')
<br><br><br><br>
<section id="actions" class="py-4 mb-4 bg-light"><div class="container"><div class="row">
<div class="col-md-3"><a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addMemberModal"><i class="fa fa-plus"></i> Add Member</a></div>
<div class="col-md-3"><a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addPlanModal"><i class="fa fa-plus"></i> Add Plan</a>    </div>
<div class="col-md-3"><a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addTrainerModal"><i class="fa fa-plus"></i> Add Trainer</a></div>
<div class="col-md-3"><a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#web_data"><i class="fa fa-plus"></i> Web Data</a></div>
</div></div></section>
<!-- Members -->
<secion id="psost">
<div class="container"><div class="row"><div class="col-md-9"><div class="card"><div class="card-header"><h4> Members</h4></div>
            
              <form action="{{route('user.profile')}}" method="get">                      
                <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>User Name</th>
                  <th>E-mail</th>
                  <th>Plan</th>
                  <th>Trainer</th>
                  <th>Start at</th>
                </tr></thead>
              <tbody>
                    @foreach($m as $data)
                <tr>
<td><input style="color:white;background-color:#32aaee" type="submit"  name="id" value="{{$data->id}}"></td>
                    <td>{{$data->full_name}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
 <?php
 $olans=new App\Plan();
if( $olans=$olans->find($data->plan_id))
 echo"<td>$olans->name</td>";   
 else echo"<td>NO Plan</td>";   
 ?>
 <?php
 $olans=new App\Trainer();
if($olans=$olans->find($data->trainer_id))
        echo"<td>".$olans->full_name."</td>";   
else echo"<td>NO Trainer</td>";   
?>
                    <td>{{$data->created_at}}</td>
                </tr>
            @endforeach 
              </tbody>
            </table>
                    </form>
            </div></div>
  
 <div class="col-md-3">
     <div class="card text-center bg-primary text-white mb-3"><div class="card-body">
                       <h3>Members</h3>            
<h1 class="display-4">      <i class="fa fa-users"></i> {{$m->count()}}         </h1>
<a href="mymembers" class="btn btn-outline-light btn-sm">View</a></div></div>
          <div class="card text-center bg-success text-white mb-3"><div class="card-body">
              <h3>Plans</h3>
              <h1 class="display-4"><i class="fa fa-folder-open-o"></i> {{$p->count()}}</h1>
              <a href="myplans" class="btn btn-outline-light btn-sm">View</a></div></div>
          <div class="card text-center bg-warning text-white mb-3">
<div class="card-body">
              <h3>Trainers</h3>
              <h1 class="display-4"><i class="fa fa-user"></i> {{$t->count()}}</h1>
              <a href="mytrainers" class="btn btn-outline-light btn-sm">View</a>
</div></div></div></div></div></secion>
  
  
  <!-- Member MODAL -->
<div class="modal fade" id="addMemberModal">
    <div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Member</h5>
                <h5 class="modal-title">Add Member</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
</div><div class="modal-body">
<form action="add/member" method="post">@csrf          
<div class="form-group"><lable for="name">User Name</lable><input type="text" class="form-control" required name="name"></div>
<div class="form-group"><lable for="email">E-Mail</lable><input type="email" class="form-control" required name="email"></div>
<div class="form-group"><lable for="pass">Password</lable><input type="text" class="form-control" required name="password"></div>
<div class="form-group"><lable for="Plan">Full Name</lable><input type="text" class="form-control" name="full_name"required></div>
<div class="form-group"><lable for="phone">Phone</lable><input type="number"  class="form-control" name="phone"required></div>
<div class="form-group"><lable for="Plan">Gender</lable>male <input type="radio" name="gender" value="male">
female <input type="radio" name="gender" value="female"></div>
<div class="form-group"><lable for="Plan">Birthday</lable><input type="date" class="form-control" name="birthday"required></div> <br>
<div class="modal-footer"><button class="btn btn-primary" type="submit" name="add" value="add_member" >Save Changes</button></div>      
</form>   
<div class="modal-footer"><button class="btn btn-secondary" data-dismiss="modal">Close</button></div>
</div>
</div></div></div>
  <!-- Plan MODAL -->
        <div class="modal fade" id="addPlanModal">
            <div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Plan</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div><div class="modal-body">
  <form action="add/plan" method="post">   <!--        link      -->
         @csrf          
           <div class="form-group">
            <lable for="name">name</lable>
            <input type="text" class="form-control" name="name">
            <lable for="title">title</lable>
            <input type="text" class="form-control" name="title">
            <lable for="cost">cost</lable>
            <input type="number" class="form-control" name="cost">
          </div>
<!--<input type="hidden" name="add" value="add_plan">-->
<div class="modal-footer">
           <button class="btn btn-warning" type="submit">Save Changes</button>
           <button class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</form>
 </div></div></div></div>
          
          <!-- Trainer MODAL -->
          
          <div class="modal fade" id="addTrainerModal"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Add Trainer</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div><div class="modal-body">
          
<form action="add/trainer" method="post">   <!--        link      -->
@csrf
<div class="form-group"><lable for="name">Name</lable><input type="text" class="form-control"  required name="name"></div>
<div class="form-group"><lable for="email">Email</lable><input type="email" class="form-control" required name="email" ></div>
<div class="form-group"><lable for="password">Password</lable><input type="text" class="form-control" required name="password"></div>
<div class="form-group"><lable for="name">Full Name</lable><input type="text" class="form-control"  required name="full_name"></div>
<div class="form-group"><lable for="phone">Phone</lable><input type="number" class="form-control" name="phone"required></div>
<div class="form-group"><lable for="name">Shift</lable><input type="hidden" name="add" value="add_trainer">
<select type="text" class="form-control" required name="shift"><option  value="1">Morning</option><option value="2">Evening</option></select></div>
<div class="form-group"><select type="text" class="form-control" required name="plan">
@foreach($p as $data)
<option value="{{$data->id}}">{{$data->name}}</option>
@endforeach
</select></div>
<div class="form-group"><lable for="Plan">Gender</lable><br>
male <input type="radio" name="gender" value="male">
female <input type="radio" name="gender" value="female"></div>
<div class="form-group"><lable for="birthday">  birthday </lable> <input type="date" class="form-control"  required name="birthday"></div>

<div class="modal-footer">
<button   class="btn btn-secondary" data-dismiss="modal"name="add"value="add_trainer">Close</button>
<button class="btn btn-warning" >Save Changes</button>
          </div>
</form>
        </div></div></div></div>

<div class="modal fade" id="web_data">
<div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Web Data</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div><div class="modal-body">
<form action="{{route('site_data')}}" method="post">   <!--        link      -->
        @csrf 
        <?php $p = new App\Web_data(); $p=$p->where('id',1)->get();foreach ($p as $p){}  ?>
        <div class="form-group"><lable for="facebook">Facebook</lable><input value="{{$p->facebook}}" type="text" class="form-control" value="{{old('facebook')}}" required name="facebook"></div>
        <div class="form-group"><lable for="twitter">Twitter</lable><input  value="{{$p->twitter}}" type="text" class="form-control" value="{{old('twitter')}}" required name="twitter"></div>
        <div class="form-group"><lable for="youtube">Youtube</lable><input  value="{{$p->youtube}}" type="text" class="form-control" value="{{old('youtube')}}" required name="youtube"></div>
        <div class="form-group"><lable for="site_phone">Phone</lable><input  value="{{$p->site_phone}}" type="text" class="form-control" value="{{old('site_phone')}}" required name="site_phone"></div>
        <div class="form-group"><lable for="site_url">Site Url</lable><input  value="{{$p->site_url}}" type="text" class="form-control" value="{{old('site_url')}}" required name="site_url"></div>
        <div class="form-group"><lable for="email">Email</lable><input  value="{{$p->email}}" type="text" class="form-control" value="{{old('email')}}" required name="email"></div>
        <div class="form-group"><lable for="site_name">Site Name</lable><input  value="{{$p->site_name}}" type="text" class="form-control" value="{{old('site_name')}}" required name="site_name"></div>
        <div class="modal-footer"><button  type="submit" class="btn btn-secondary" data-dismiss="modal"name="add"value="add_trainer">Close</button><button class="btn btn-warning" type="submit">Save Changes</button></div>
</form></div></div></div></div>
