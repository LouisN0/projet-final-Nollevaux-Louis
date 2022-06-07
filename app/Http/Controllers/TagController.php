<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TagController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $tags = Tag::all();
        return view("/back/tags/all",compact("tags" , "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-tag')){
            abort(403);
        }
        $conversations = Conversation::all();

        return view("/back/tags/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $tag = new Tag;
        $this->authorize('create', \App\Model\Tag::class);
        $request->validate([
         'nom'=> 'required',
        ]); // store_validated_anchor;
        $tag->nom = $request->nom;
        $tag->save(); // store_anchor
        return redirect()->route("tag.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        if(! Gate::allows('update-tag')){
            abort(403);
        }
        $conversations = Conversation::all();
        $tag = Tag::find($id);
        return view("/back/tags/edit",compact("tag" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $tag = Tag::find($id);
        $this->authorize('update', \App\Model\Tag::class);
        $request->validate([
         'nom'=> 'required',
        ]); // update_validated_anchor;
        $tag->nom = $request->nom;
        $tag->save(); // update_anchor
        return redirect()->route("tag.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $this->authorize('delete', \App\Model\Tag::class);
        $tag->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
