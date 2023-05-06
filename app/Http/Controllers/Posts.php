<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Posts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:4|max:10',
            'content' => 'required|min:10|max:30'
        ]);

        $post = Post::create($validated);
        return redirect("/posts/{$post->id}");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.one', [
            'post' => $post
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|min:4|max:10',
            'content' => 'required|min:10|max:30'
        ]);

        $post = Post::find($id);

        if($post) {
            $post['title'] = $validated['title'];
            $post['content'] = $validated['content'];
            $post->save();
        }

        return redirect("/posts/{$post->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $post = Post::find($request['id']);
        $post->delete();
        return redirect('/posts');
    }
}
