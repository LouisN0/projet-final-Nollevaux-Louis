<?php

namespace App\Http\Controllers;

use App\Mail\Demand;
use App\Models\Cour;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    //
    public function index()
    {
        $demandes = Demande::all();
        return view("/back/demandes/all",compact("demandes"));
    }
    public function create()
    {
        return view("/back/demandes/create");
    }
    public function store(Request $request, $id)
    {
        
        $demande = new Demande;
        $demande->from = $request->from;
        $demande->to = $request->to;
        $demande->cours = $request->cours;
        $demande->email = $request->email;
        $demande->user_id = $id;
        $demande->status = false;
        $demande->save(); // store_anchor
        
        return redirect()->route("demande.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $demande = Demande::find($id);
        return view("/back/demandes/read",compact("demande"));
    }
    public function edit($id)
    {
        $demande = Demande::find($id);
        return view("/back/demandes/edit",compact("demande"));
    }
    public function update($id, Request $request)
    {   
        $demande = Demande::find($id);
        $user = User::find($demande->user_id);
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'cours'=> 'required',
         'status'=> 'required',
         'date'=> 'required',
        ]); // update_validated_anchor;
        $demande->from = $request->from;
        $demande->to = $request->to;
        $demande->cours = $request->cours;
        $demande->date = $request->date;
        $demande->status = $request->status;
        $demande->email = $request->email;
        $destinataireCour = Cour::where('id', $demande->cours)->get();
        if($demande->status == true){
            Mail::to($demande->email)->send(new Demand($demande->email));
            
        }
        $user->save();
        $user->cours()->attach($destinataireCour, [
                'user_id' => $user->id
            ]);
        
        
        $demande->save(); // update_anchor
        return redirect()->route("demande.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $demande = Demande::find($id);
        $demande->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
