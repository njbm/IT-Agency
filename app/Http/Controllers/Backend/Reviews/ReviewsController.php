<?php

namespace App\Http\Controllers\Backend\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ReviewsController extends Controller
{
    /***
    Course Review

    **/

    public function home(){

        return view('Backend.pages.Reviews.All_Reviews');

    }
}