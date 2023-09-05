<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRoleController extends Controller
{
    /*** All User Data ***/

    public function AllUser(){
        $users = DB::table('users')->where('type', '=', 0)->orderby('id','desc')->get();
        return view('Backend.pages.UserRole.AllUser', compact('users'));
    }
}
