<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $teachers = Teacher::all();
        return view("/back/teachers/all",compact("teachers" , "conversations"));
    }
    public function create()
    {
        $conversations = Conversation::all();
        return view("/back/teachers/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $teacher = new Teacher;
        $request->validate([
         'photo'=> 'required',
         'nom'=> 'required',
         'discipline'=> 'required',
         'description'=> 'required',
         'biographie'=> 'required',
         'telephone'=> 'required',
         'mail'=> 'required',
        
        ]); // store_validated_anchor;
        $teacher->photo = $request->photo;
        $teacher->nom = $request->nom;
        $teacher->discipline = $request->discipline;
        $teacher->description = $request->description;
        $teacher->biographie = $request->biographie;
        $teacher->telephone = $request->telephone;
        $teacher->mail = $request->mail;
        
        $teacher->save(); // store_anchor
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
        $conversations = Conversation::all();
        $teacher = Teacher::find($id);
        return view("/back/teachers/edit",compact("teacher" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $teacher = Teacher::find($id);
        $request->validate([
         'photo'=> 'required',
         'nom'=> 'required',
         'discipline'=> 'required',
         'description'=> 'required',
         'biographie'=> 'required',
         'telephone'=> 'required',
         'mail'=> 'required',
         
        ]); // update_validated_anchor;
        $teacher->photo = $request->photo;
        $teacher->nom = $request->nom;
        $teacher->discipline = $request->discipline;
        $teacher->description = $request->description;
        $teacher->biographie = $request->biographie;
        $teacher->telephone = $request->telephone;
        $teacher->mail = $request->mail;
       
        $teacher->save(); // update_anchor
        return redirect()->route("teacher.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
    public function singleTeacher($id)
    {
        $teacher = Teacher::find($id);
        return view("/front/pages/teacher",compact("teacher"));
    }
}
