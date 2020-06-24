@extends('admin.aindex')
<div>
<br><br><br><b><br<br><br><br><br>
     <secion id="psost">
<div class="container"><div class="row"><div class="col"><div class="card"><div class="card-header">
      <h4>Members</h4>
      </div>
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
 $p=new App\Plan();
if( $p=$p->find($data->plan_id))
 echo"<td>$p->name</td>";   
 else echo"<td>NO Plan</td>";   
 ?>
 <?php
 $p=new App\Trainer();
if($p=$p->find($data->trainer_id))
        echo"<td>".$p->full_name."</td>";   
else echo"<td>NO Trainer</td>";   
?>
                    <td>{{$data->created_at}}</td>
                </tr>
            @endforeach 
              </tbody>
            </table>
                    </form>
        </div></div></div></div>
</secion></div>
<br><br><br><b><br<br><br><br><br>
    