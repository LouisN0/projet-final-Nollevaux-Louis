<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $users = User::all();
        return view("/back/users/all",compact("users" , "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-user')){
            abort(403);
        }
        $conversations = Conversation::all();
        $roles = Role::all();
        return view("/back/users/create", compact("roles" , "conversations"));
    }
    public function store(Request $request)
    {
        $user = new User;
        $this->authorize('create', \App\Model\User::class);
        $request->validate([
         'nom'=> 'required',
         'email'=> 'required',
         'password'=> 'required',
        ]); // store_validated_anchor;
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = 3;
        $user->image = $request->default('default.jpg');

        $user->save(); // store_anchor
        $request->file("image")->storePublicly("images", "public");
        return redirect()->route("user.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $conversations = Conversation::all();
        $user = User::find($id);
        return view("/back/users/read",compact("user " , "conversations"));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $conversations = Conversation::all();
        $roles = Role::all();
        if(Auth::user()->id === $user->id || Auth::user()->role_id === 1){
            $this->authorize('update', \App\Model\User::class);
            return view("/back/users/edit",compact("user", "roles" , "conversations"));
        }else{
            abort(403);
        }
    }
    public function update($id, Request $request)
    {
        
        $user = User::find($id);
        
        $this->authorize('update', $user);
        $request->validate([
         'nom'=> 'required',
         'email'=> 'required',
         'password'=> 'required',
        ]); // update_validated_anchor;
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
        if($request->role_id == ""){
            $user->role_id = $user->role_id;
        }else{
            $user->role_id = $request->role_id;
        }
        if ($request->file('image') == "") {
            $user->image = $user->image;
            $user->save(); // update_anchor
        }else{
            $user->image = $request->file("image")->hashName();
            $user->save(); // update_anchor
            $request->file('image')->storePublicly('images/', 'public');
        }
        return redirect()->route("user.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $this->authorize('delete', $user);
        $destination = "images/". $user->image;
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $user->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
