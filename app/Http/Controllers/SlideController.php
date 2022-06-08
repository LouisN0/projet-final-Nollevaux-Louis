<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::all();
        $slides = Slide::all();
        return view("/back/slides/all",compact("slides" , "conversations"));
    }
    public function create()
    {
        $conversations = Conversation::all();
        return view("/back/slides/create" , compact("conversations"));
    }
    public function store(Request $request)
    {
        $slide = new Slide;
        $this->authorize('create', \App\Model\Slide::class);
        $request->validate([
         'image1'=> 'required',
         'image2'=> 'required',
         'image3'=> 'required',
         'image4'=> 'required',
        ]); // store_validated_anchor;
        $slide->image1 = $request->image1;
        $slide->image2 = $request->image2;
        $slide->image3 = $request->image3;
        $slide->image4 = $request->image4;
        $slide->save(); // store_anchor
        return redirect()->route("slide.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $conversations = Conversation::all();
        $slide = Slide::find($id);
        return view("/back/slides/read",compact("slide" , "conversations"));
    }
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view("/back/slides/edit",compact("slide"));
    }
    public function update($id, Request $request)
    {
        $slide = Slide::find($id);
        $this->authorize('update', \App\Model\Slide::class);
        $request->validate([
         'image1'=> 'required',
         'image2'=> 'required',
         'image3'=> 'required',
         'image4'=> 'required',
        ]); // update_validated_anchor;
        $slide->image1 = $request->image1;
        $slide->image2 = $request->image2;
        $slide->image3 = $request->image3;
        $slide->image4 = $request->image4;
        $slide->save(); // update_anchor
        return redirect()->route("slide.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $this->authorize('delete', \App\Model\Slide::class);
        $slide->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
