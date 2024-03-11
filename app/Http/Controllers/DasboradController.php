<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Testimonial;
Use App\Models\User;

class DasboradController extends Controller
{
    public function index(){
        $cars =car::count();
        $packegs= Package::Count();
        $sliders= Slider::Count();
        $testimonials= Testimonial::Count();
        return view ('dashboard',compact('cars','packegs','sliders','testimonials'));
    }
    public function alluser(){
        $users = User::all();
        $title = 'All Users';
        return view ('admin.users.alluser', compact('users','title'));
    }
}
