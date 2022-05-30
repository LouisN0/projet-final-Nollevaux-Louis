<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $roles = Role::all();
        return view("/back/roles/all",compact("roles ", "conversations"));
    }
    public function create()
    {
        $conversations = Conversation::all();
        return view("/back/roles/create ",compact("conversations"));
    }
    public function store(Request $request)
    {
        $role = new Role;
        $request->validate([
         'role'=> 'required',
        ]); // store_validated_anchor;
        $role->role = $request->role;
        $role->save(); // store_anchor
        return redirect()->route("role.index")->with('message', "Successful storage !");
    }
    public function edit($id)
    {
        $conversations = Conversation::all();
        $role = Role::find($id);
        return view("/back/roles/edit",compact("role " , "conversations"));
    }
    public function update($id, Request $request)
    {
        $role = Role::find($id);
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
        $role->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
