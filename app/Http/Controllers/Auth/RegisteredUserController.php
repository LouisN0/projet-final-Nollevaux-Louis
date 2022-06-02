<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Validator;
use App\Mail\Subscribe;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('back.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3,
            'image' => 'default.jpg',
            
        ]);

        event(new Registered($user));
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
           
       }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
