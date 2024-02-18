<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', ['posts'=>$posts]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create', ['users'=>$users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        Post::create($data);
        return redirect()->route('posts.index');
    }
    public function show(string $id)
    {
        $postData = Post::where('id', $id)->first();
        return view('posts.show', ['postData' => $postData]);
    }
    public function edit(string $id)
    {
        $postData = Post::where('id', $id)->first();
        $users = User::all();
        return view('posts.edit', ['postData'=>$postData, 'users'=>$users]);
    }
    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);
        
        $post = Post::find($id);
        $post['slug'] = Str::slug($request->input('title'));
        $post->update($request->all());
        return redirect()->route('posts.index');
    }
    public function delete(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }

}
