<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function admin(){
        return view('Backend.pages.index');
    }

    public function editor(){
        return view('Editor.pages.index');
    }

    public function author(){
        return 'This is author Page';
    }

    public function contributor(){
        return 'This is contributor Page';
    }
}
