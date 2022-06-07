<?php

namespace App\Http\Controllers;

use App\Mail\Event;
use App\Models\Conversation;
use App\Models\Evenement;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class EvenementController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $evenements = Evenement::all();
        return view("/back/evenements/all",compact("evenements" , "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-evenement')){
            abort(403);
        }
        
        $conversations = Conversation::all();
        return view("/back/evenements/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $subscribers = Subscriber::all();
        $evenement = new Evenement;
        $this->authorize('create', \App\Model\Evenement::class);
        $request->validate([
         'lieu'=> 'required',
         'date'=> 'required',
         'start'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
        ]); // store_validated_anchor;
        $evenement->lieu = $request->lieu;
        $evenement->date = $request->date;
        $evenement->start = $request->start;
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        $evenement->image = $request->file("image")->hashName();
        $evenement->save(); // store_anchor
        $request->file('image')->storePublicly('images/', 'public');
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new Event($subscriber->email));
        }
        return redirect()->route("evenement.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        if(! Gate::allows('update-evenement')){
            abort(403);
        }
        $conversations = Conversation::all();
        $evenement = Evenement::find($id);
        return view("/back/evenements/edit",compact("evenement" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $evenement = Evenement::find($id);
        $this->authorize('update', $evenement);
        $request->validate([
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
        $evenement->teacher_id = $request->teacher_id;
        if ($request->file('image') == "") {
            $evenement->image = $evenement->image;
            $evenement->save(); // update_anchor
        }else{
            $evenement->image = $request->file("image")->hashName();
            $evenement->save(); // update_anchor
            $request->file('image')->storePublicly('images/', 'public');
        }
        return redirect()->route("evenement.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $evenement = Evenement::find($id);
        $this->authorize('delete', $evenement);
        $destination = "images" . $evenement->img;
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }
        $evenement->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function allevent(){
        $evenements = Evenement::paginate(9);
        return view('/front/pages/events', compact('evenements'));
    }
}
