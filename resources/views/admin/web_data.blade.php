@extends('admin.aindex')
@section('content')
        <form method="post" action="update_site">
                                            @csrf          
                                <label>Site Name</label><br>
    <input type="text" name="site_name"    value="{{$d->site_name}}"      class="input100"><br>
            <label>Facebook link</label>            <br>
    <input  type="text" name="facebook"     value="{{$d->facebook}}"       class="input100"><br>
            <label>Twitter link</label>            <br>
    <input  type="text" name="twitter"      value="{{$d->twitter}}"        class="input100"><br>
            <label>Youtube link</label>              <br>
    <input  type="text" name="youtube"      value="{{$d->youtube}}"        class="input100"><br>
            <label>Site Phone</label>               <br>
    <input  type="tel" name="site_phone"   value="{{$d->site_phone}}"     class="input100"><br>
            <label>Site url</label>                     <br>
    <input  type="text" name="site_url"     value="{{$d->site_url}}"      class="input100"><br>
            <label>Email</label>                   <br>
    <input  type="text" name="email"        value="{{$d->email}}"       class="input100"><br>
    <input  type="submit" name="site_data"  value="Update"      class="btn-lg"><br>
          </form>
@endsection
