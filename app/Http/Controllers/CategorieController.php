<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategorieController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $categories = Categorie::all();
        return view("/back/categories/all",compact("categories" , "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-categorie')){
            abort(403);
        }
        $conversations = Conversation::all();
        return view("/back/categories/create", compact("conversations"));
    }
    public function store(Request $request)
    {
        
        $categorie = new Categorie;
        $this->authorize('create', \App\Model\Categorie::class);
        $request->validate([
         'nom'=> 'required',
        ]); // store_validated_anchor;
        $categorie->nom = $request->nom;
        $categorie->save(); // store_anchor
        return redirect()->route("categorie.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        if(! Gate::allows('update-categorie')){
            abort(403);
        }
        $conversations = Conversation::all();
        $categorie = Categorie::find($id);
        return view("/back/categories/edit",compact("categorie" , "conversations"));
    }
    public function update($id, Request $request)
    {
        
        $categorie = Categorie::find($id);
        $this->authorize('update', \App\Model\Categorie::class);
        $request->validate([
         'nom'=> 'required',
        ]); // update_validated_anchor;
        $categorie->nom = $request->nom;
        $categorie->save(); // update_anchor
        return redirect()->route("categorie.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $this->authorize('delete', \App\Model\Categorie::class);
        $categorie->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
