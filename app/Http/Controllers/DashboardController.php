<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
    $conversations = Conversation::all();
    return view('back.dashboard', compact('conversations'));
    }
}
