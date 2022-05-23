<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Slide;
use Illuminate\Http\Request;

class CourController extends Controller
{
    //
    public function index()
    {
        $cours = Cour::all();
        return view("/back/cours/all",compact("cours"));
    }
    public function create()
    {
        return view("/back/cours/create");
    }
    public function store(Request $request)
    {
        $cour = new Cour;
        $request->validate([
         'image'=> 'required',
         'prof_id'=> 'required',
         'prix'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
         'start'=> 'required',
         'temps'=> 'required',
         'niveau'=> 'required',
         'discipline'=> 'required',
         'date'=> 'required',
        ]); // store_validated_anchor;
        $cour->image = $request->image;
        $cour->prof_id = $request->prof_id;
        $cour->prix = $request->prix;
        $cour->titre = $request->titre;
        $cour->description = $request->description;
        $cour->slide_id = $request->slide_id;
        $cour->start = $request->start;
        $cour->temps = $request->temps;
        $cour->niveau = $request->niveau;
        $cour->discipline = $request->discipline;
        $cour->date = $request->date;
        $cour->save(); // store_anchor
        return redirect()->route("cour.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $cour = Cour::find($id);
        return view("/back/cours/read",compact("cour"));
    }
    public function edit($id)
    {
        $cour = Cour::find($id);
        return view("/back/cours/edit",compact("cour"));
    }
    public function update($id, Request $request)
    {
        $cour = Cour::find($id);
        $request->validate([
         'image'=> 'required',
         'prof_id'=> 'required',
         'prix'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
         'start'=> 'required',
         'temps'=> 'required',
         'niveau'=> 'required',
         'discipline'=> 'required',
         'date'=> 'required',
        ]); // update_validated_anchor;
        $cour->image = $request->image;
        $cour->prof_id = $request->prof_id;
        $cour->prix = $request->prix;
        $cour->titre = $request->titre;
        $cour->description = $request->description;
        $cour->slide_id = $request->slide_id;
        $cour->start = $request->start;
        $cour->temps = $request->temps;
        $cour->niveau = $request->niveau;
        $cour->discipline = $request->discipline;
        $cour->date = $request->date;
        $cour->save(); // update_anchor
        return redirect()->route("cour.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $cour = Cour::find($id);
        $cour->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function singleshow($id)
    {
        $slides = Slide::all();
        $cour = Cour::find($id);
        return view("/front/pages/coursesShow",compact("cour", "slides"));
    }
}
