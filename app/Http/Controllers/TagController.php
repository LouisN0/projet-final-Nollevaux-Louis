<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Tag;
use Illuminate\Http\Request;

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
        $conversations = Conversation::all();
        return view("/back/tags/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $tag = new Tag;
        $request->validate([
         'nom'=> 'required',
        ]); // store_validated_anchor;
        $tag->nom = $request->nom;
        $tag->save(); // store_anchor
        return redirect()->route("tag.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        $conversations = Conversation::all();
        $tag = Tag::find($id);
        return view("/back/tags/edit",compact("tag" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $tag = Tag::find($id);
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
        $tag->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
