<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Cour;
use App\Models\Post;
use App\Models\Service;
use App\Models\Teacher;
use App\Models\Slide;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    $slides = Slide::all();
    $cours = Cour::orderBy('views', 'desc')->take(8)->get();
    $services = Service::all();
    $banners = Banner::all();
    $teachers = Teacher::all();
    
    $teacher2 = Teacher::find(2) ;
    $teacher3 = Teacher::find(3) ;
    $teacher1 = Teacher::where('id', '!=', 3)->where('id', '!=', 2)->get()->random(1);
    $teacher4 = Teacher::where('id', '!=', $teacher1[0]->id)->where('id', '!=', 3)->where('id', '!=', 2)->get()->random(1);
    $posts = Post::orderBy('created_at', 'DESC')->paginate(2);
    return view('welcome', compact('banners' , 'services', 'cours', 'teachers', 'posts', "slides", "teacher1", "teacher2", "teacher3", "teacher4"));
    }
    
}
