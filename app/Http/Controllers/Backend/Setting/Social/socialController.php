<?php

namespace App\Http\Controllers\Backend\Setting\Social;

use App\Http\Controllers\Controller;
use App\Models\Social_Media;
use Illuminate\Http\Request;

class socialController extends Controller
{
    public function social(){
        $socials=Social_Media::latest()->get();
        return view('Backend.pages.Setting.social',compact('socials'));

    }
    public function social_add(Request $request){
        $request->validate([
            'social_icon' => 'required',
            'social_link' => 'required',
        ]);
        $social=Social_Media::find($request->id);
        $social->social_icon = $request->input('social_icon');
        $social->social_link = $request->input('social_link');
        $social->update();
        return redirect()->route('social')->with('success','Update Success');
    }
}
