<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Conversation;
use App\Models\Cour;
use App\Models\Slide;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $cours = Cour::all();
        return view("/back/cours/all",compact("cours" , "conversations"));
    }
    public function create()
    {
        $conversations = Conversation::all();
        return view("/back/cours/create" , compact("conversations"));
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
        $conversations = Conversation::all();
        $cour = Cour::find($id);
        return view("/back/cours/read",compact("cour" , "conversations"));
    }
    public function edit($id)
    {
        $conversations = Conversation::all();
        $cour = Cour::find($id);
        return view("/back/cours/edit",compact("cour" , "conversations"));
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
    public function allcour(){
        $categories = Categorie::all();
        $cours = Cour::paginate(9);
        $teachers = Teacher::all();
        return view('/front/pages/courses',compact("cours", "teachers", "categories"));
    }
    public function filterCategorie($id)
    {
        $findCategorie = Categorie::where('id', $id)->first();
        
        if($findCategorie){

        $categories = Categorie::all();

        $cours = Cour::where('id', $findCategorie->id)->paginate(9);   
        return view('/front/pages/courses',compact("cours", "categories"));
        
        }else{
            abort(404);
        }
    }
}
