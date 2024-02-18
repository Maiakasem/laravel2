@extends('layout.main')
@section('title','Users')
@section('content')
<form action="{{ route('users.update', ['id'=>$user->id], false) }}" method="POST" class="m-5" >

@csrf
@method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">NAME</label>
    <input type="text"
    class="form-control"
    name="name"
    value="{{$user->name}}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"
    class="form-control"
    name="email"
    aria-describedby="emailHelp"
    placeholder="Enter email"
    value="{{$user->email}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" 
    class="form-control" 
    name="password" 
    placeholder="Password"
    value="{{$user->password}}">
  </div>
  <button type="submit" class="btn btn-primary" value="add">Submit</button>
</form>
@endsection