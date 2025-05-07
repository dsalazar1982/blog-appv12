<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        // Validacion de formulario de registro.
        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => 'required|min:5|max:30|unique:posts',
            'category' => 'required|min:5|max:50',
            'content' => 'required|min:10',
        ]);

        Post::create($request->all());

        /*Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'content' => $request->content,
        ]);*/

        /*$post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();*/

        /*$posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));*/
        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        //$post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){
        //$post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){

        // Regla de validacion.
        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => "required|min:5|max:30|unique:posts,slug,{$post->id}",
            'category' => 'required|min:5|max:50',
            'content' => 'required|min:10',
        ]);

        $post->update($request->all());

        /*//$post = Post::find($post);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->save();*/

        /*$posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));*/
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post){
        //$post = Post::find($post);
        $post->delete();

        /*$posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));*/
        return redirect()->route('posts.index');
    }
}
