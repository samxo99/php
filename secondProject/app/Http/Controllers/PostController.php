<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){


       // return Post::all();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
//        Post::create ([
//            'title' => 'geniosi',
//            'author' => 'giorgi',
//            'text' => 'gaicanit didebuli adamiani',
//        ]);
        return view('posts.create');
    }

    public function store(Request $request) {

        Post::create([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'author' => $request->get('author'),


        ]);
        return redirect('/posts');

    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return View ('posts.edit', compact('post'));
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);

        $post->update($request->all());
        return redirect('/posts');

    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }




}
