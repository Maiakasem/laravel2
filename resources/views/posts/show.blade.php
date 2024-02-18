@extends('layout.main')
@section('title', $postData->title)

@section('content')
<div class="card text-center">
    <div class="card-header">
        Post
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$postData->title}}</h5>
        <p class="card-text">{{$postData->body}}</p>
        <a href="{{ route('users.show', ['id'=>$postData->user->id], false) }}" class="btn btn-primary">{{$postData->user->name}}</a>
    </div>
    <div class="card-footer text-body-secondary">
        1 hour ago 
    </div>
</div>
@endsection
