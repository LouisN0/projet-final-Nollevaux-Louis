<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        
    $conversations = Conversation::all();
    $user = User::find(Auth::user()->id);
    $usercour = $user->cours;
    
    return view('back.dashboard', compact('conversations', 'usercour'));
    }
}
