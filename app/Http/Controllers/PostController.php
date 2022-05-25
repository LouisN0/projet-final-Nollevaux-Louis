<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view("/back/posts/all",compact("posts"));
    }
    public function create()
    {
        return view("/back/posts/create");
    }
    public function store(Request $request)
    {
        $post = new Post;
        $request->validate([
         'image'=> 'required',
         'titre'=> 'required',
         'texte'=> 'required',
         'date'=> 'required',
        ]); // store_validated_anchor;
        $post->image = $request->image;
        $post->titre = $request->titre;
        $post->texte = $request->texte;
        $post->date = $request->date;
        $post->save(); // store_anchor
        return redirect()->route("post.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $post = Post::find($id);
        return view("/back/posts/read",compact("post"));
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view("/back/posts/edit",compact("post"));
    }
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $request->validate([
         'image'=> 'required',
         'titre'=> 'required',
         'texte'=> 'required',
         'date'=> 'required',
        ]); // update_validated_anchor;
        $post->image = $request->image;
        $post->titre = $request->titre;
        $post->texte = $request->texte;
        $post->date = $request->date;
        $post->save(); // update_anchor
        return redirect()->route("post.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function singlepost($id){
        $post = Post::find($id);
        return view('')
    }
}
