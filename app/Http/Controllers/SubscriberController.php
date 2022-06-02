<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use App\Models\Conversation;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class SubscriberController extends Controller
{

    public function index() {
        $subscribers = Subscriber::all();
        $conversations = Conversation::all();
        return view("/back/newsletter/all",compact("subscribers" , "conversations")); 
    }

    public function subscribe(Request $request) 
    {
    $validator = Validator::make($request->all(), [
         'email' => 'required|email|unique:subscribers'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->with('message', 'You are already subscribed');
    }  

    $email = $request->all()['email'];
        $subscriber = Subscriber::create([
            'email' => $email
        ]
    ); 

    if ($subscriber) {
        Mail::to($email)->send(new Subscribe($email));
        return redirect()->back();
    }
    
    }
}
