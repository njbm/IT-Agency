<?php

namespace App\Http\Controllers\Backend\Setting\Footer;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class footerController extends Controller
{
    public function footer(){
        $footer=Footer::find(1);
        return view('Backend.pages.Setting.footer',compact('footer'));
    }
    public function updateFooter(Request $request)
    {
        //return $request->all();
        $footer=Footer::find(1);
        $footer->footer_title=$request->title;
        $footer->email_address=$request->email;
        $footer->footer_color=$request->color;
        $footer->footer_description=$request->description;

        if ($request->hasFile('logo')) {
            $extension=$request->file('logo')->getClientOriginalExtension();
            
            $filename=time().'.'.$extension;
            $request->file('logo')->move(public_path('backend/home/footer/'),$filename);
            $footer->site_logo =$filename;
        }else{
            $footer->site_logo =$request->file('logo');
        }


        $footer->update();
        return redirect()->back()->with('success', 'Successfully Update');

    }
}