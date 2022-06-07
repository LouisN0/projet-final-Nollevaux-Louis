<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Conversation;
use App\Models\Cour;
use App\Models\Slide;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

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
        if(! Gate::allows('create-cour')){
            abort(403);
        }
        $categories = Categorie::all();
        $conversations = Conversation::all();
        $teachers = Teacher::all();
        return view("/back/cours/create" , compact("conversations", "teachers", "categories"));
    }
    public function store(Request $request)
    {   
        $existingS = Slide::all();
        $slide = new Slide;
        $cour = new Cour;
        $this->authorize('create', \App\Model\Cour::class);
        $request->validate([
         'prix'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
         'start'=> 'required',
         'temps'=> 'required',
         'niveau'=> 'required',
         'discipline'=> 'required',
         'image1'=> 'required',
         'image2'=> 'required',
         'image3'=> 'required',
         'image4'=> 'required',
         
        ]); // store_validated_anchor;
        $cour->teacher_id = $request->teacher_id;
        $cour->status = 0;
        $cour->prix = $request->prix;
        $cour->titre = $request->titre;
        $cour->description = $request->description;
        $cour->start = $request->start;
        $cour->temps = $request->temps;
        $cour->niveau = $request->niveau;
        $cour->discipline = $request->discipline;
        $cour->slide_id = $existingS->last()->id + 1;
        $cour->date = Carbon::now()->format('Y-m-d');
        $slide->image1 = $request->file("image1")->hashName();
        $slide->image2 = $request->file("image2")->hashName();
        $slide->image3 = $request->file("image3")->hashName();
        $slide->image4 = $request->file("image4")->hashName();
        $cour->image = $request->file("image")->hashName();
        $slide->save();
        $cour->save(); // store_anchor
        $request->file('image')->storePublicly('images/', 'public');
        $request->file('image1')->storePublicly('images/', 'public');
        $request->file('image2')->storePublicly('images/', 'public');
        $request->file('image3')->storePublicly('images/', 'public');
        $request->file('image4')->storePublicly('images/', 'public');
        $cour->categories()->attach($request->categories, [
            'cour_id' => $cour->id,
        ]);
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
        $categories = Categorie::all();
        if(Auth::user()->id === $cour->teacher->user->id || Auth::user()->role_id === 1){
            
            return view("/back/cours/edit",compact("cour" , "conversations", "categories"));
        }
        abort(403);
    }
    public function update($id, Request $request)
    {
        $slide = Slide::find($id);
        $cour = Cour::find($id);
        $this->authorize('update', $cour);
        $request->validate([
            'prix'=> 'required',
            'titre'=> 'required',
            'description'=> 'required',
            'start'=> 'required',
            'temps'=> 'required',
            'niveau'=> 'required',
            'discipline'=> 'required',
        ]); // update_validated_anchor;
        $cour->status = 0;
        $cour->prix = $request->prix;
        $cour->titre = $request->titre;
        $cour->description = $request->description;
        $cour->start = $request->start;
        $cour->temps = $request->temps;
        $cour->niveau = $request->niveau;
        $cour->discipline = $request->discipline;
        $cour->date = Carbon::now()->format('Y-m-d');
        $slide->image1 = $slide->image1;
        $slide->image2 = $slide->image2;
        $slide->image3 = $slide->image3;
        $slide->image4 = $slide->image4;
        
        if ($request->file('image') == "") {
            $cour->image = $cour->image;
            $cour->save(); // update_anchor
        }else{
            $cour->image = $request->file("image")->hashName();
            $cour->save(); // update_anchor // update_anchor
            $request->file('image')->storePublicly('images/', 'public');
        }
        $cour->categories()->sync($request->categories, [
            'cour_id' => $cour->id,
        ]);
        return redirect()->route("cour.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $cour = Cour::find($id);
        $this->authorize('delete', $cour);
        $destination = "img/portfolio/" . $cour->image;
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }
        $cour->categories()->detach();
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

        $cours = Cour::whereHas('categories',function($q) use ($id){
            $q->where('categories.id', $id);
        })->paginate(9);   
        $categories = Categorie::all();


        
        return view('/front/pages/courses',compact("cours", "categories"));
        
        }else{
            abort(404);
        }
    }
    public function publish($id)
    {
        $cour = cour::find($id);
        $cour->status = 1;
        $cour->save();
        return redirect()->back()->with("message", "Successful publish !");
    }
    public function unpublish($id)
    {
        $cour = cour::find($id);
        $cour->status = 0;
        $cour->save();
        return redirect()->back()->with("message", "Successful unpublish !");
    }
}
