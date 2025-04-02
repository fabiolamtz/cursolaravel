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

    public function show(Request $request)
    {
        $datos = $request->all();

        // Retornar la vista del reporte con los datos
        return view('posts.show', compact('datos'))
            ->with('posts', $this->posts);


       /* return view('posts.show')
            ->with('posts', $this->posts);

    // Retornar la vista con los datos
    return view('posts.show')
            ->with('posts', $this->posts);*/
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

