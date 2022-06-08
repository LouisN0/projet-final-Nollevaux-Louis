<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Conversation;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        if(! Gate::allows('viewAny-post', $posts)){
            abort(403);
        }
        $conversations = Conversation::all();
        return view("/back/posts/all",compact("posts", "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-post')){
            abort(403);
        }
        $categories = Categorie::all();
        $tags = Tag::all();
        $conversations = Conversation::all();
        return view("/back/posts/create" , compact("conversations", "tags", "categories"));
    }
    public function store(Request $request)
    {
        $post = new Post;
        $this->authorize('create', \App\Model\Post::class);
        $request->validate([
         'titre'=> 'required',
         'texte'=> 'required',
         'date'=> 'required',
        ]); // store_validated_anchor
        $post->titre = $request->titre;
        $post->texte = $request->texte;
        $post->date = $request->date;
        $post->status = 0;
        $post->user_id = Auth::user()->id;
        $post->image = $request->file("image")->hashName();
        $post->save(); // store_anchor
        $request->file('image')->storePublicly('images/', 'public');
        $post->categories()->attach($request->categories, [
            'post_id' => $post->id,
        ]);
        $post->tags()->attach($request->tags, [
            'post_id' => $post->id,
        ]);
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
        if(! Gate::allows('update-post')){
            abort(403);
        }
        $conversations = Conversation::all();
        $post = Post::find($id);
        return view("/back/posts/edit",compact("post" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $this->authorize('update', \App\Model\Post::class);
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
        $this->authorize('delete', \App\Model\Post::class);
        $post->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function singlepost($id){
        $tags = Tag::all();
        $categories = Categorie::all();
        $post = Post::find($id);
        return view('/front/pages/post' , compact('post', "tags", "categories"));
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

        $posts = Post::whereHas('tags',function($q) use ($id){
            $q->where('tags.id', $id);
        }) ->paginate(9);
       

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

        $posts = Post::whereHas('categories',function($q) use ($id){
            $q->where('categories.id', $id);
        })->paginate(9);
        
        return view('/front/pages/news',compact("posts", "categories", "tags"));
        
        }else{
            abort(404);
        }
    }
    public function search(Request $request){

        $tags = Tag::all();
        $categories = Categorie::all();
        $search = $request->input('search');
        $posts = Post::where('titre', 'like', '%'.$search.'%')->paginate(9);
        return view('/front/pages/news',compact("posts", "tags", "categories"));
    }
    public function publish($id)
    {
        $post = Post::find($id);
        $post->status = 1;
        $post->save();
        return redirect()->back()->with("message", "Successful publish !");
    }
    public function unpublish($id)
    {
        $post = Post::find($id);
        $post->status = 0;
        $post->save();
        return redirect()->back()->with("message", "Successful unpublish !");
    }
}
