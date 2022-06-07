<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $roles = Role::all();
        return view("/back/roles/all",compact("roles", "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-role')){
            abort(403);
        }
        $conversations = Conversation::all();
        return view("/back/roles/create ",compact("conversations"));
    }
    public function store(Request $request)
    {
        $role = new Role;
        $this->authorize('create', \App\Model\Role::class);
        $request->validate([
         'role'=> 'required',
        ]); // store_validated_anchor;
        $role->role = $request->role;
        $role->save(); // store_anchor
        return redirect()->route("role.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        if(! Gate::allows('update-role')){
            abort(403);
        }
        $conversations = Conversation::all();
        $role = Role::find($id);
        return view("/back/roles/edit",compact("role" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $role = Role::find($id);
        $this->authorize('update', \App\Model\Role::class);
        $request->validate([
         'role'=> 'required',
        ]); // update_validated_anchor;
        $role->role = $request->role;
        $role->save(); // update_anchor
        return redirect()->route("role.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        $this->authorize('delete', \App\Model\Role::class);
        $role->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
