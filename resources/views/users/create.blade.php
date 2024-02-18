@extends('layout.main')
@section('title','Users')
@section('content')
<form action="{{url ('/users')}}" method="post" class="m-5" >
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">NAME</label>
    <input type="text"
    class="form-control"
    name="name"
    aria-describedby="emailHelp"
    placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"
    class="form-control"
    name="email"
    aria-describedby="emailHelp"
    placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" 
    class="form-control" 
    name="password" 
    placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
