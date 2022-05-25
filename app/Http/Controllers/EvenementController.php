<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    //
    public function index()
    {
        $evenements = Evenement::all();
        return view("/back/evenements/all",compact("evenements"));
    }
    public function create()
    {
        return view("/back/evenements/create");
    }
    public function store(Request $request)
    {
        $evenement = new Evenement;
        $request->validate([
         'image'=> 'required',
         'lieu'=> 'required',
         'date'=> 'required',
         'start'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
        ]); // store_validated_anchor;
        $evenement->image = $request->image;
        $evenement->lieu = $request->lieu;
        $evenement->date = $request->date;
        $evenement->start = $request->start;
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        $evenement->save(); // store_anchor
        return redirect()->route("evenement.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        return view("/back/evenements/edit",compact("evenement"));
    }
    public function update($id, Request $request)
    {
        $evenement = Evenement::find($id);
        $request->validate([
         'image'=> 'required',
         'lieu'=> 'required',
         'date'=> 'required',
         'start'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
        ]); // update_validated_anchor;
        $evenement->image = $request->image;
        $evenement->lieu = $request->lieu;
        $evenement->date = $request->date;
        $evenement->start = $request->start;
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        $evenement->save(); // update_anchor
        return redirect()->route("evenement.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $evenement = Evenement::find($id);
        $evenement->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function allevent(){
        $evenements = Evenement::paginate(9);
        return view('/front/pages/events', compact('evenements'));
    }
}
