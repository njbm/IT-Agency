<?php

namespace App\Http\Controllers\Backend\Setting\Header;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class headerController extends Controller
{
    public function header(){
        $header=Header::find(1);
        return view('Backend.pages.Setting.header',compact('header'));
    }
    public function updateHeader(Request $request)
    {
        $header=Header::find(1);
        $header->header_title=$request->title;
        $header->header_color=$request->color;
        $header->header_description=$request->description;

        if ($request->hasFile('favicon')) {
            $extension=$request->file('favicon')->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $request->file('favicon')->move(public_path('backend/home/header/'),$filename);
            $header->fav_icon =$filename;
        }else{
            $header->fav_icon =$request->file('favicon');
        }
        if ($request->hasFile('logo')) {
            $extension=$request->file('logo')->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $request->file('logo')->move(public_path('backend/home/header/'),$filename);
            $header->site_logo = $filename;
        }else{
            $header->site_logo = $request->file('logo');
        }


         $header->update();
         return redirect()->back()->with('success', 'Successfully Update');

    }
}
