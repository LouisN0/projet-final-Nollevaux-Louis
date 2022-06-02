<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewslettreController extends Controller
{
    public function storeNewsletter(Request $request) 
    { 
        $request->validate([ 
            'email' => 'required|email', 
        ]); 
        $input = $request->all(); 
        //  Send mail to admin 
        Mail::send('emails.newsLetter', array( 
            'email' => $input['email'],  
        ), function($message) use ($request){ 
            $message->from('lounol.co@gmail.com', 'Admin'); 
            $message->to($request->email); 
        }); 

        // Send mail to admin
        $mail = new Mail([
            "name" => $request->name,
        ]);
        return redirect()->back()->with(['success' => 'News letter registration Successfull']);
    }
}
