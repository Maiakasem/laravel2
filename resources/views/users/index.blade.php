@extends('layout.main')
@section('title','Users')
@section('content')
<table class="table">
     <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
      
    </tr>
</thead>


  @foreach($users as $id)
    <tr>
      
      <td>
       
         {{$id-> id}}
       
      </td>

      <td>
        
           {{$id-> name}}
       
      </td>
      <td>{{$id-> email}}</td>
      <td>
                <button class="btn btn-success"><a href= "{{route('users.show',['id'=>$id['id']]) }}" class="text-light"> Show   </a></button>
                <button class="btn btn-primary"><a href="{{route('users.edit',['id'=>$id['id']]) }}" class="text-light"> update </a></button>
                <form action="{{ route('users.delete',[ 'id'=>$id['id']]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
      </td>
    </tr>
    <tr>

   @endforeach
</table>
@endsection



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1> All Users</h1>
<div class ="container m-5 ">
    <div class="row">
    
</div>
</div>
</div>

    
</body>
</html> -->
