<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LangingPage;
use Illuminate\Support\Facades\DB;

class LangingPageController extends Controller
{
    /**** Show All Category ****/
    public function all_langing_page(){

        $langing_pages = DB::table('langing_pages')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.LandingPage.All_Laning_page', compact('langing_pages'));
    }

    /***** Start Home Add slider ******/

    public function add_langing_page(Request $request){


    }

    /**** Edit slider ****/
    public function edit_langing_page($id){
        
        $langing_page = LangingPage::find($id);
         //$langing_pages=LangingPage::where('id',1);
        return view('Backend.pages.Home.LandingPage.Update_Laning_page', compact('langing_page'));

    }

    /**** Update slider ****/
    public function update_langing_page(Request $request, $id){
     //dd($request->s2_back_img_new);

        //$slider = LangingPage::find($id);
        $langing_page = LangingPage::find($id);

        //salider part
        $langing_page->slider_top_title = $request->slider_top_title;
        $langing_page->slider_sort_title = $request->slider_sort_title;
        $langing_page->slider_description = $request->slider_description;
        //section 1
         $langing_page->s1_title1 = $request->s1_title1;
         $langing_page->s1_text1 = $request->s1_text1;
        //section 2
         $langing_page->s2_title1 = $request->s2_title1;
         $langing_page->s2_text1 = $request->s2_text1;
        // $langing_page->description = $request->description;    //s2_back_img
        if ($request->s2_back_img_new){

            $path = public_path("backend/home/langingpage/image/".$langing_page->s2_back_img);
            @unlink($path);

            $fileName = time().'1'.'.'.request()->s2_back_img_new->getClientOriginalExtension();
            request()->s2_back_img_new->move(public_path('backend/home/langingpage/image'), $fileName);
            $langing_page->s2_back_img = $fileName;

        }else{
            $langing_page->s2_back_img = $request->s2_back_img;
        }
         //section 3
         $langing_page->s3_title1 = $request->s3_title1;
         $langing_page->s3_text1 = $request->s3_text1;
         $langing_page->s3_text2 = $request->s3_text2;
         $langing_page->s3_description1 = $request->s3_description1;
         //section 4
         $langing_page->s4_title1 = $request->s4_title1;
         $langing_page->s4_text1 = $request->s4_text1;
        // $langing_page->description = $request->description;   //s4_back_img1
           if ($request->s4_back_img1_new){

            $path = public_path("backend/home/langingpage/image/".$langing_page->s4_back_img1);
            @unlink($path);

            $fileName = time().'2'.'.'.request()->s4_back_img1_new->getClientOriginalExtension();
            request()->s4_back_img1_new->move(public_path('backend/home/langingpage/image'), $fileName);
            $langing_page->s4_back_img1 = $fileName;

        }else{
            $langing_page->s4_back_img1 = $request->s4_back_img1;
        }
         //section 5
         $langing_page->s5_title1 = $request->s5_title1;
         $langing_page->s5_title2 = $request->s5_title2;
         $langing_page->s5_title_r = $request->s5_title_r;
         //section 6
         $langing_page->s6_title1 = $request->s6_title1;
         $langing_page->s6_text1 = $request->s6_text1;
        // $langing_page->description = $request->description;  //s6_back_img1
        if ($request->s6_back_img1_new){

            $path = public_path("backend/home/langingpage/image/".$langing_page->s6_back_img1);
            @unlink($path);

            $fileName = time().'3'.'.'.request()->s6_back_img1_new->getClientOriginalExtension();
            request()->s6_back_img1_new->move(public_path('backend/home/langingpage/image'), $fileName);
            $langing_page->s6_back_img1 = $fileName;

        }else{
            $langing_page->s6_back_img1 = $request->s6_back_img1;
        }

         //section 7
         $langing_page->s7_title1 = $request->s7_title1;
         $langing_page->s7_text1 = $request->s7_text1;

         //section 8
         $langing_page->s8_title1 = $request->s8_title1;
         $langing_page->s8_text1 = $request->s8_text1;
         //section 9
         $langing_page->s9_title1 = $request->s9_title1;
         //$langing_page->description = $request->description; //s9_back_img1
          if ($request->s9_back_img1_new){

            $path = public_path("backend/home/langingpage/image/".$langing_page->s9_back_img1);
            @unlink($path);

            $fileName = time().'4'.'.'.request()->s9_back_img1_new->getClientOriginalExtension();
            request()->s9_back_img1_new->move(public_path('backend/home/langingpage/image'), $fileName);
            $langing_page->s9_back_img1 = $fileName;

        }else{
            $langing_page->s9_back_img1 = $request->s9_back_img1;
        }
         //section 10
         $langing_page->s10_title1 = $request->s10_title1;
         $langing_page->s10_text1 = $request->s10_text1;
         $langing_page->s10_r_title1 = $request->s10_r_title1;
        // $langing_page->description = $request->description;  //s10_r_sceen
        if ($request->s10_r_sceen_new){

            $path = public_path("backend/home/langingpage/image/".$langing_page->s10_r_sceen);
            @unlink($path);

            $fileName = time().'5'.'.'.request()->s10_r_sceen_new->getClientOriginalExtension();
            request()->s10_r_sceen_new->move(public_path('backend/home/langingpage/image'), $fileName);
            $langing_page->s10_r_sceen = $fileName;

        }else{
            $langing_page->s10_r_sceen = $request->s10_r_sceen;
        }
         $langing_page->s10_r_text1 = $request->s10_r_text1;
         $langing_page->s10_r_text2 = $request->s10_r_text2;

        $langing_page->update();

        return redirect()->route('admin.all_langing_page');
    }


    /******* Slider Image Delete  **********/

    public function delete_langing_page(Request $request){
        $slider = LangingPage::find($request->slider_id);

        $path = public_path("backend/home/slider/".$slider->slider_image);
        unlink($path);

        $slider->delete();

        return redirect()->route('admin.all_slider');
    }
}
