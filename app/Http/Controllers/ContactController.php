<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $this->authorize('delete', \App\Model\Contact::class);
        $contact->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
