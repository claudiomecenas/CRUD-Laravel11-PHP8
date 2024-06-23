<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.posts', compact('posts'));
    }

   
    public function create()
    {
        $user = auth()->user();
        $categories = Category::where('status', 1)->get();
        return view('admin.posts.create', compact('user', 'categories'));
    }

  
    public function store(StorePostRequest $request)
    {
        Post::create($request->validated());
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post criado com sucesso!');
    }


    public function show(string $id)
    {
        return view('admin.posts.show');
    }

  
    public function edit(Post $post)
    {
        $user = auth()->user();
        $categories = Category::where('status', 1)->get();
        return view('admin.posts.edit', compact('post', 'user', 'categories'));
    }

  
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return redirect()
            ->route('posts.index')
            ->with('success', 'Post atualizado com sucesso!');
    }

  
    public function destroy(string $id)
    {
        dd($id);
    }
}
