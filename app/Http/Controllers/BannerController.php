<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class BannerController extends Controller
{
    //
    public function index()
    {   
        
        $conversations = Conversation::all();
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners", "conversations"));   
    }
    public function create()
    {
        if(! Gate::allows('create-banner')){
            abort(403);
        }
        $conversations = Conversation::all();
        return view("/back/banners/create",compact("conversations"));
    }
    public function store(Request $request)
    {
        $banner = new Banner;
        $this->authorize('create', \App\Model\Banner::class);
        $request->validate([
         'titre'=> 'required',
         'motsCle'=> 'required',
         'description'=> 'required',
         'btn'=> 'required',
         'first'=> 'required',
         
        ]); // store_validated_anchor;
        $banner->titre = $request->titre;
        $banner->motsCle = $request->motsCle;
        $banner->description = $request->description;
        $banner->btn = $request->btn;
        $banner->first = $request->first;
        
        $banner->image = $request->file("image")->hashName();
        $banner->save(); // update_anchor
        $request->file('image')->storePublicly('images/', 'public');
        
        return redirect()->route("banner.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $conversations = Conversation::all();
        $banner = Banner::find($id);
        return view("/back/banners/read",compact("banner" , "conversations"));
    }
    public function edit($id)
    {
        if(! Gate::allows('update-banner')){
            abort(403);
        }
        $conversations = Conversation::all();
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner" , "conversations"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $this->authorize('update', \App\Model\Banner::class);
        $request->validate([
         'titre'=> 'required',
         'motsCle'=> 'required',
         'description'=> 'required',
         'btn'=> 'required',
        ]); // update_validated_anchor;
        // $banner->image = $request->file('image')->hashName();
        $banner->titre = $request->titre;
        $banner->motsCle = $request->motsCle;
        $banner->description = $request->description;
        $banner->btn = $request->btn;
        $banner->first = $request->first;
        // $banner->save(); // update_anchor
        // $request->file("image")->storePublicly("images", "public");

        if ($request->file('image') == "") {
            $banner->image = $banner->image;
            $banner->save(); // update_anchor
        }else{
            $banner->image = $request->file("image")->hashName();
            $banner->save(); // update_anchor
            $request->file('image')->storePublicly('images/', 'public');
        }

        return redirect()->route("banner.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $this->authorize('delete', \App\Model\Banner::class);
        $destination = "images" . $banner->img;
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $banner->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
