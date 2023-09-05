<?php

namespace App\Http\Controllers\Backend\User_Role;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserRoleController extends Controller
{
    /***
    Super Admin Data

    **/

    public function SuperAdmin(){

        $users = DB::table('users')->where('type', '=', 1)->latest()->get();
        return view('Backend.pages.UserRole.SuperAdmin', compact('users'));

    }

    /***
    All Seller Data

     **/

    public function Allteachers(){

        $users = DB::table('users')->where('type', '=', 2)->latest()->get();
        return view('Backend.pages.UserRole.AllTeacher', compact('users'));

    }

    /***
     All Accountant Data

     **/
    public function Allstudents(){

        $users = DB::table('users')->where('type', '=', 0)->latest()->get();
        return view('Backend.pages.Students.StudentList.AllStudents', compact('users'));

    }

    /***
     All Accountant Data

    **/
    public function AllHrManager(){

        $users = DB::table('users')->where('type', '=', 4)->latest()->get();
        return view('Backend.pages.UserRole.AllHr_manager', compact('users'));

    }

    /***
     All User Data

    */

    public function AllUser(){

        $users = DB::table('users')->latest()->get();

        return view('Backend.pages.UserRole.AllUser', compact('users'));

    }

    /***
     Add User Data

    **/

    public function add_user(Request $request){

        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' =>  'required', Rules\Password::defaults(),
            'type' => 'required'
        ]);

    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

        return back();
    }

    /**** Edit User Data ***/

    public function edit_user(Request $request, $id){

        $user = User::find($id);
        return view('Backend.pages.UserRole.Update_User', compact('user'));

    }

    /**** Update User Data ***/

    public function update_user(Request $request, $id){

        $request->validate([

            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'type' => 'required'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->update();

        return back();

        // return redirect()->route('admin.AllUser');
    }

    /**** Delete User Data ***/

    public function delete_user(Request $request){

        $user = User::find($request->user_id);
        $user->delete();

        return back();
    }
}