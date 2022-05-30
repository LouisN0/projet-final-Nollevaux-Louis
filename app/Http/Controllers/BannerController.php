<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Conversation;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {   $conversations = Conversation::all();
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners", "conversations"));   
    }
    public function create()
    {
        $conversations = Conversation::all();
        return view("/back/banners/create",compact("conversations"));
    }
    public function store(Request $request)
    {
        $banner = new Banner;
        $request->validate([
         'image'=> 'required',
         'titre'=> 'required',
         'motsCle'=> 'required',
         'description'=> 'required',
         'btn'=> 'required',
        ]); // store_validated_anchor;
        $banner->image = $request->image;
        $banner->titre = $request->titre;
        $banner->motsCle = $request->motsCle;
        $banner->description = $request->description;
        $banner->btn = $request->btn;
        $banner->save(); // store_anchor
        return redirect()->route("banner.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/read",compact("banner"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
         'image'=> 'required',
         'titre'=> 'required',
         'motsCle'=> 'required',
         'description'=> 'required',
         'btn'=> 'required',
        ]); // update_validated_anchor;
        $banner->image = $request->image;
        $banner->titre = $request->titre;
        $banner->motsCle = $request->motsCle;
        $banner->description = $request->description;
        $banner->btn = $request->btn;
        $banner->save(); // update_anchor
        return redirect()->route("banner.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
