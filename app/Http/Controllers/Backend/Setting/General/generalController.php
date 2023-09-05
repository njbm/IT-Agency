<?php

namespace App\Http\Controllers\Backend\Setting\General;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class generalController extends Controller
{
    public function home(){
        $general=General::find(1);
        return view('Backend.pages.Setting.general',compact('general'));

    }
    public function general_add(Request $request){
        $rules=[
            'name' => 'required|max:255',
            'welcome_text' => 'required|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|max:255',
            'country' =>'required|max:255' ,
        ];
        $validator =Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $general=General::find(1);
         $general->name=$request->name;
         $general->welcome_text=$request->welcome_text;
         $general->email=$request->email;
         $general->address=$request->address;
         $general->country=$request->country;
         $general->update();
         return redirect()->route('general')->with('success','Update Success');
    }
}
