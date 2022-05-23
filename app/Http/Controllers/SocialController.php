<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    //
    public function index()
    {
        $socials = Social::all();
        return view("/back/socials/all",compact("socials"));
    }
    public function create()
    {
        return view("/back/socials/create");
    }
    public function store(Request $request)
    {
        $social = new Social;
        $request->validate([
         'facebook'=> 'required',
         'twitter'=> 'required',
         'dribble'=> 'required',
         'insta'=> 'required',
         'skype'=> 'required',
         'linkedink'=> 'required',
        ]); // store_validated_anchor;
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->dribble = $request->dribble;
        $social->insta = $request->insta;
        $social->skype = $request->skype;
        $social->linkedink = $request->linkedink;
        $social->save(); // store_anchor
        return redirect()->route("social.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $social = Social::find($id);
        return view("/back/socials/read",compact("social"));
    }
    public function edit($id)
    {
        $social = Social::find($id);
        return view("/back/socials/edit",compact("social"));
    }
    public function update($id, Request $request)
    {
        $social = Social::find($id);
        $request->validate([
         'facebook'=> 'required',
         'twitter'=> 'required',
         'dribble'=> 'required',
         'insta'=> 'required',
         'skype'=> 'required',
         'linkedink'=> 'required',
        ]); // update_validated_anchor;
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->dribble = $request->dribble;
        $social->insta = $request->insta;
        $social->skype = $request->skype;
        $social->linkedink = $request->linkedink;
        $social->save(); // update_anchor
        return redirect()->route("social.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $social = Social::find($id);
        $social->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
