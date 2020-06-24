@extends('admin.aindex')
<br><br><br><br><br><br>
<secion id="psost">
<div class="col-md-8"><div class="card">                
<div class="card-header"><h4>Edit Plan</h4></div><div class="card-body">
<form method="post" action="{{route('update.plan')}}">   
    @csrf       
<input type="hidden" name="id" value="{{$p->id}}">
<div class="form-group"><label for="name">  Name</label><input type="text" class="form-control" name="name"  value="{{$p->name}}"> </div>
<div class="form-group"><label for="title">Title</label><input type="text" class="form-control" name="title" value="{{$p->title}}"></div>
<div class="form-group"><label for="cost"> Cost </label><input type="number" class="form-control" name="cost" value="{{$p->cost}}"></div>
<div class="form-group"><button type="submit" class="btn btn-primary btn-block">Edit</button></div>
</form>

</div></div></div>
</secion><br>

