<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //
    public function index()
    {
        
        $contacts = Contact::all();
        return view("/back/contacts/all",compact("contacts"));
    }
    public function edit($id)
    {
        if(! Gate::allows('update-contact')){
            abort(403);
        }
        $contact = Contact::find($id);
        return view("/back/contacts/edit",compact("contact"));
    }
    public function update($id, Request $request)
    {
        $contact = Contact::find($id);
        $this->authorize('update', \App\Model\Contact::class);
        $request->validate([
         'adress'=> 'required',
         'email'=> 'required',
         'phone'=> 'required',
        ]); // update_validated_anchor;
        $contact->adress = $request->adress;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save(); // update_anchor
        return redirect()->route("contact.index")->with('message', "Successful update !");
    }
    
    public function contact(Request $request){
        $email = $request->all()['email'];
        $nom = $request->all()['nom'];
        $message = $request->all()['message'];
        Mail::to('lounol.co@gmail.com')->send(new ContactMail($email,$nom,$message));
        
        return redirect()->back()->with('message', "Successful send !");
    }
    public function view(){
        $contact = Contact::first();
        return view('front/pages/contact', compact('contact'));
    }
}
