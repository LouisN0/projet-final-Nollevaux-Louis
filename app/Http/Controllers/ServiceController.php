<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $services = Service::all();
        return view("/back/services/all",compact("services" , "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-service')){
            abort(403);
        }
        $conversations = Conversation::all();
        return view("/back/services/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $service = new Service;
        $this->authorize('create', \App\Model\Service::class);
        $request->validate([
         'icone'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
        ]); // store_validated_anchor;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;
        
        $service->save(); // store_anchor
        return redirect()->route("service.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $conversations = Conversation::all();
        $service = Service::find($id);
        return view("/back/services/read",compact("service" , "conversations"));
    }
    public function edit($id)
    {
        if(! Gate::allows('update-service')){
            abort(403);
        }
        $conversations = Conversation::all();
        $service = Service::find($id);
        return view("/back/services/edit",compact("service" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $this->authorize('update', \App\Model\Service::class);
        $request->validate([
         
         'titre'=> 'required',
         'description'=> 'required',
        ]); // update_validated_anchor;
        
        $service->titre = $request->titre;
        $service->description = $request->description;
        if ($request->icone == "") {
            $service->icone = $service->icone;
            $service->save(); // update_anchor
        }else{
            $service->icone = $request->icone;
        }
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $this->authorize('delete', \App\Model\Service::class);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
