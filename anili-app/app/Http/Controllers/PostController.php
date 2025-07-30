<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        //validimi i te dhenave
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        //save to database

       Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);



        //redirect to posts index with success message
        return redirect('/posts')->with('success', 'Post created successfully!');

    }

     public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        //validimi i te dhenave
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        //update post in database
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        //redirect to posts index with success message
        return redirect('/posts')->with('success', 'Post updated successfully!');
    }







}
