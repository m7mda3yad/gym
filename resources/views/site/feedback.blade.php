@extends('site.uindex')
@section('content')
<div class="content" id="content">
<header id="main-header" class="py-2 bg-primary text-white">
<div class="container">
<div class="row">
<div class="col-md-6">
<h1><i class="fa fa-user"></i> Feedback</h1>
</div>
</div>
</div>
</header>
<div class="feedbackform">
                <form>
<div class="form-group">
                <label for="Feedback">Trainer</label>
<select class="form-control" id="exampleFormControlSelect1">
                <option value="0" selected>select...</option>
                <option value="1">Patrick Cortez</option>
                <option value="1">Gregory Powers</option>
                <option value="1">Walter Wagner</option>
</select>
</div>
<div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
                 <input type="submit" value="Send">
                </form>
 </div>
 </div>

@endsection

