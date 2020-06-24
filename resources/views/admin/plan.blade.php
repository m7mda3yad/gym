@extends('admin.aindex')
@section('content')
<br><br><br><br><br><br><br><br><br>
  <secion id="psost">
<div class="container"><div class="row"><div class="col"><div class="card">
<div class="card-header">
              <h4>MEMBERSHIP PLANS</h4>
</div>
                <form action="{{route('plan')}}" method="get">                      
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Create at</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($p as $data)
                <tr>
<td><input style="color:white;background-color:#32aaee" 
         type="submit"  name="id" value="{{$data->id}}"></td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->cost}}</td>
                     <td>{{$data->create_at}}</td>
                </tr>
            @endforeach 
              </tbody>
            </table>
</form>

</div></div></div></div>
  </secion>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>

@endsection