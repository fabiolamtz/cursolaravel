<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [];
   public function index()
    {
        return view('posts.index')
            ->with('posts', $this->posts);
    }

    public function create()
    {
        return view('posts.create')
            ->with('posts', $this->posts);

    }

    public function show($id)
    {
        return view('posts.show', ['post' => $this->posts[$id]]);
    }

    public function store(Request $request)
    {
        $this->posts[] = $request->input('title');
        return redirect()->route('posts.index');

    }

    //index

    /*public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }*/
}

