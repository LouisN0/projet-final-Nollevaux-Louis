<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $teachers = Teacher::all();
        if(! Gate::allows('viewAny-teacher', $teachers)){
            abort(403);
        }
        return view("/back/teachers/all",compact("teachers" , "conversations"));
    }
    public function create()
    {
        if(! Gate::allows('create-teacher')){
            abort(403);
        }
        $users = User::all();
        $conversations = Conversation::all();
        return view("/back/teachers/create" , compact("conversations", "users"));
    }
    public function store(Request $request)
    {
        $existingT = Teacher::all();
        $users = User::all();
        $teacher = new Teacher;
        $this->authorize('create', \App\Model\Teacher::class);
        $request->validate([
         'nom'=> 'required',
         'discipline'=> 'required',
         'description'=> 'required',
         'biographie'=> 'required',
         'telephone'=> 'required',
         'mail'=> 'required',
         'user_id'=> 'required',
        
        ]); // store_validated_anchor;
        $teacher->nom = $request->nom;
        $teacher->discipline = $request->discipline;
        $teacher->description = $request->description;
        $teacher->biographie = $request->biographie;
        $teacher->telephone = $request->telephone;
        $teacher->mail = $request->mail;
        $teacher->user_id = $request->user_id;
        $users->where("id", $request->user_id)->role_id = 2;
        
        $teacher->photo = $request->file("photo")->hashName();
        $teacher->save(); // update_anchor
        $request->file('photo')->storePublicly('images/', 'public');
        
        return redirect()->route("teacher.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $conversations = Conversation::all();
        $teacher = Teacher::find($id);
        return view("/back/teachers/read",compact("teacher" , "conversations"));
    }
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        if(! Gate::allows('update-teacher', $teacher)){
            abort(403);
        }
        $conversations = Conversation::all();
        return view("/back/teachers/edit",compact("teacher" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $teacher = Teacher::find($id);
        $request->validate([
         'nom'=> 'required',
         'discipline'=> 'required',
         'description'=> 'required',
         'biographie'=> 'required',
         'telephone'=> 'required',
         'mail'=> 'required',
         
        ]); // update_validated_anchor;
        $teacher->nom = $request->nom;
        $teacher->discipline = $request->discipline;
        $teacher->description = $request->description;
        $teacher->biographie = $request->biographie;
        $teacher->telephone = $request->telephone;
        $teacher->mail = $request->mail;
        if ($request->file('photo') == "") {
            $teacher->photo = $teacher->photo;
            $teacher->save(); // update_anchor
        }else{
            $teacher->photo = $request->file("photo")->hashName();
            $teacher->save(); // update_anchor
            $request->file('photo')->storePublicly('images/', 'public');
        }
        return redirect()->route("teacher.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $this->authorize('delete', \App\Model\Teacher::class);
        $teacher->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function singleTeacher($id)
    {
        $teacher = Teacher::find($id);
        return view("/front/pages/teacher",compact("teacher"));
    }
}
