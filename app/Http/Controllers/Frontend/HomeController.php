<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TechnologyCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $technology= TechnologyCategory::all();
        return view('frontend.index', compact('technology'));
    }
    public function about(){
        return view('Frontend.about');
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function project(){
        return view('Frontend.project');
    }
    public function service(){
        return view('Frontend.services');
    }
    public function technology(){
        $technology= TechnologyCategory::all();
        return view('Frontend.technology', compact('technology'));
    }
    public function blog(){
        return view('Frontend.blog');
    }

    public function service_view(){
        return view('Frontend.servicesView');
    }


    public function login(){
        return view('Frontend.login');
    }
    public function register(){
        return view('Frontend.register');
    }
}
