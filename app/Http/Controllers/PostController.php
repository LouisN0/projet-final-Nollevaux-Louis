<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Conversation;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $posts = Post::all();
        return view("/back/posts/all",compact("posts ", "conversations"));
    }
    public function create()
    {
        $conversations = Conversation::all();
        return view("/back/posts/create" , compact("conversations"));
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
        $conversations = Conversation::all();
        $post = Post::find($id);
        return view("/back/posts/read",compact("post" , "conversations"));
    }
    public function edit($id)
    {
        $conversations = Conversation::all();
        $post = Post::find($id);
        return view("/back/posts/edit",compact("post" , "conversations"));
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
        $tags = Tag::all();
        $post = Post::find($id);
        return view('/front/pages/post' , compact('post', "tags"));
    }
    public function allpost(){
        
        $tags = Tag::all();
        $categories = Categorie::all();

        $posts = Post::paginate(4);
        return view('/front/pages/news',compact("posts", "tags", "categories"));
    }

    //filter post by tags
    public function filterTag($id)
    {
        $findTag = Tag::where('id', $id)->first();
        
        if($findTag){

        $tags = Tag::all();
        $categories = Categorie::all();

        $posts = Post::where('id', $findTag->id)->paginate(9);

        return view('/front/pages/news',compact("posts", "tags", "categories"));
        
        }else{
            abort(404);
        }
    }
    public function filterCategorie($id)
    {
        $findCategorie = Categorie::where('id', $id)->first();
        
        if($findCategorie){

        $categories = Categorie::all();
        $tags = Tag::all();

        $posts = Post::where('id', $findCategorie->id)->paginate(9);

        return view('/front/pages/news',compact("posts", "categories", "tags"));
        
        }else{
            abort(404);
        }
    }
}
