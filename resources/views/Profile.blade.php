@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-md-12">
   <br />
   <h3 align="center">User Profile</h3>
   <br />
   <table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
    </tr>
    @foreach($profiles as $row)
    <tr>
      <td>{{$row['name']}}</td>
      <td>{{$row['surname']}}</td>
      <td>{{$row['email']}}</td>
    </tr>
    @endforeach
   </table> 
   </div>
</div>

                 
                    
             
@endsection
