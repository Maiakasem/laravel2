@extends('layout.main')
@section('title','Users')
@section('content')
<table class="table">
     <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      
    </tr>
</thead>
 <tr>
      
      <td>{{$user-> id}}</td>
      <td>{{$user-> name}}</td>
      <td>{{$user-> email}}</td>
      
    </tr>
    <tr>
</table>
@endsection
