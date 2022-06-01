<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

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
        $contact = Contact::find($id);
        return view("/back/contacts/edit",compact("contact"));
    }
    public function update($id, Request $request)
    {
        $contact = Contact::find($id);
        $request->validate([
         'adress'=> 'required',
         'email'=> 'required',
         'phone'=> 'required',
         'map'=> 'required',
        ]); // update_validated_anchor;
        $contact->adress = $request->adress;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->map = $request->map;
        $contact->save(); // update_anchor
        return redirect()->route("contact.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
