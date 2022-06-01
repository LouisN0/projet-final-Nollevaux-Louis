<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function index()
    {
        $requests = Request::all();
        return view("/back/requests/all",compact("requests"));
    }
    public function create()
    {
        return view("/back/requests/create");
    }
    public function store(Request $request)
    {
        $request = new Request;
        $request->validate([
         'user_id'=> 'required',
         'teacher_id'=> 'required',
         'cour_id'=> 'required',
        ]); // store_validated_anchor;
        $request->user_id = $request->user_id;
        $request->teacher_id = $request->teacher_id;
        $request->cour_id = $request->cour_id;
        $request->save(); // store_anchor
        return redirect()->route("request.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $request = Request::find($id);
        return view("/back/requests/read",compact("request"));
    }
    public function destroy($id)
    {
        $request = Request::find($id);
        $request->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
