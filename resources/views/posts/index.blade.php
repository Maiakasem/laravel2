@extends('layout.main')
@section('title', 'Posts')

<style>
    .pagination-container.mx-auto nav div.hidden div:last-of-type {
        display: none;
    }
    .pagination-container.mx-auto nav div.hidden div:first-of-type {
        margin-top: 10px;
    }
</style>

@section('content')
<table class="table">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Publisher</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
        <tr>
            <th scope="row"><a href="{{ route('posts.show', ['id'=>$post['id']], false) }}">{{ $post['title'] }}</a></th>
            <td>{{ $post['slug'] }}</td>
            <td>{{ $post->user->name }}</td>
            <td>
           
                <a href="{{ route('posts.edit', ['postId'=>$post['id']], false) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('posts.delete', ['post'=>$post['id']], false) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>

<div class="pagination-container mx-auto w-25 mt-3">
    {{ $posts->links() }}
</div>
@endsection
