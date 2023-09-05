<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**** Show All Category ****/
    public function all_slider(){

        $sliders = DB::table('home_sliders')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Slider.All_Slider', compact('sliders'));
    }

    /***** Start Home Add slider ******/

    public function add_slider(Request $request){

        $request->validate([
            'slider_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** slider Upload ******/

        $fileName = time().'.'.request()->slider_image->getClientOriginalExtension();
        request()->slider_image->move(public_path('backend/home/slider'), $fileName);

        $client = new HomeSlider();

        $client->slider_image = $fileName;

        $client->save();

        return redirect()->route('admin.all_slider');

    }

    /**** Edit slider ****/
    public function edit_slider($id){

        $slider = HomeSlider::find($id);

        return view('Backend.pages.Home.Slider.Update_Slider', compact('slider'));

    }

    /**** Update slider ****/
    public function update_slider(Request $request, $id){

        $request->validate([
            'slider_new_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $slider = HomeSlider::find($id);

        if ($request->slider_new_image){

            $path = public_path("backend/home/slider/".$slider->slider_image);
            unlink($path);

            $fileName = time().'.'.request()->slider_new_image->getClientOriginalExtension();
            request()->slider_new_image->move(public_path('backend/home/slider'), $fileName);
            $slider->slider_image = $fileName;

        }else{
            $slider->slider_image = $request->slider_image;
        }

        $slider->slider_status = $request->slider_status;

        $slider->update();

        return redirect()->route('admin.all_slider');
    }


    /******* Slider Image Delete  **********/

    public function delete_slider(Request $request){

        $slider = HomeSlider::find($request->slider_id);

        $path = public_path("backend/home/slider/".$slider->slider_image);
        unlink($path);

        $slider->delete();

        return redirect()->route('admin.all_slider');
    }
}
