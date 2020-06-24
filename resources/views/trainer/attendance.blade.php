@extends('trainer.tindex')
@section('content')
<br><br><br><br>
 <header id="main-header" class="py-2 bg-primary text-white">
<div class="container"><div class="row"><div class="col-md-6">
                         <h1><i class="fa fa-user"></i>Attendance</h1>
</div></div></div></header>
<br><br><br>
<div class="col-md-12 center" style="margin-left: 100px">
    <form method="post" action="attendance">
      @csrf
        <input type="hidden" name="date" value="{{date("Y/m/d")}}"required>
                            <h2> {{date("Y/m/d")}}</h2>
                <ul><?php $x=0; ?>
                @foreach( $m as $data )
    <li><input type="checkbox" name="member[{{$x++}}]" value="{{$data->id}}" > <label for="item_0"> {{$data->name}} 
        </label><span class="input"></span></li>   
                @endforeach 
                        </ul>
       <button type="submit" class="primary-btn">send</button>
    </form>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection