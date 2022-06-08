<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function storeContactForm(Request $request) 
    { 
        $request->validate([ 
            'nom' => 'required', 
            'email' => 'required|email', 
            'messages' => 'required', 
        ]); 
        $input = $request->all(); 
        //  Send mail to admin 
        Mail::send('emails.contactMail', array( 
            'nom' => $input['nom'], 
            'email' => $input['email'], 
            'messages' => $input['messages'], 
        ), function($message) use ($request){ 
            $message->from($request->email); 
            $message->to('lounol.co@gmail.com', 'Admin')->subject('Contact Form');
        }); 
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
