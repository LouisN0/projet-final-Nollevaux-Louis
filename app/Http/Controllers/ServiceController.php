<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Service;
use Illuminate\Http\Request;

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
        $conversations = Conversation::all();
        return view("/back/services/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $service = new Service;
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
        return view("/back/services/read",compact("service " , "conversations"));
    }
    public function edit($id)
    {
        $conversations = Conversation::all();
        $service = Service::find($id);
        return view("/back/services/edit",compact("service " , "conversations"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $request->validate([
         'icone'=> 'required',
         'titre'=> 'required',
         'description'=> 'required',
        ]); // update_validated_anchor;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
