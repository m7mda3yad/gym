@extends('admin.aindex')
<div>
<br><br><br><b><br<br><br><br><br>
     <secion id="psost">
<div class="container"><div class="row"><div class="col"><div class="card"><div class="card-header">
      <h4>Trainers</h4>
      </div>
<form action="trainer_profile" method="get">                      
                <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>USer Name</th>
                  <th>E-mail</th>
                  <th>Plan</th>
                  <th>Number of Members</th>
                  <th>Shift</th>
                  <th>Start at</th>
                </tr></thead>
              <tbody>
                    @foreach($t as $data)
                <tr>
                    <td><input type="submit"  name="id" value="{{$data->id}}"></td>
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
 $p=new App\Member();
 $p=$p->where('trainer_id',$data->id);
 echo"<td>".$p->count()."</td>";   
?>

                     @if(  $data->shift==1)<td>  Morning </td>@endif  
                     @if(  $data->shift==2)<td>  Night </td>@endif
                     <td>{{$data->created_at}}</td>
                </tr>
            @endforeach 
              </tbody>
            </table>
                    </form>
                        </div></div></div></div>
</secion></div>
<br><br><br><b><br<br><br><br><br>
