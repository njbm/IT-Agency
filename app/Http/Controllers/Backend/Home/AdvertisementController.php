<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeAd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvertisementController extends Controller
{
    /**** Show All Ad ****/
    public function all_ad(){

        $ads = DB::table('home_ads')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Advertisement.All_Ad', compact('ads'));
    }

    /***** Start Home Add Client ******/

    public function add_ad(Request $request){

        $request->validate([
            'ad_cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** Client Logo Upload ******/

        $fileName = time().'.'.request()->ad_cover->getClientOriginalExtension();
        request()->ad_cover->move(public_path('backend/home/ad'), $fileName);

        $ad = new HomeAd();

        $ad->ad_name = $request->ad_name;
        $ad->ad_cover = $fileName;

        $ad->save();

        return redirect()->route('admin.all_ad');

    }

    /**** Edit Client ****/
    public function edit_ad($id){

        $ad = HomeAd::find($id);

        return view('Backend.pages.Home.Advertisement.Update_Ad', compact('ad'));

    }

    /**** Update Client ****/
    public function update_ad(Request $request, $id){

        $request->validate([

            'ad_new_cover' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $ad = HomeAd::find($id);

        if ($request->ad_new_cover){

            $path = public_path("backend/home/ad/".$ad->ad_cover);
            unlink($path);

            $fileName = time().'.'.request()->ad_new_cover->getClientOriginalExtension();
            request()->ad_new_cover->move(public_path('backend/home/ad'), $fileName);
            $ad->ad_cover = $fileName;

        }else{
            $ad->ad_cover = $request->ad_cover;
        }

        $ad->ad_name = $request->ad_name;
        $ad->ad_status = $request->ad_status;

        $ad->update();

        return redirect()->route('admin.all_ad');
    }


    /******* Client Image Delete  **********/

    public function delete_ad(Request $request){

        $ad = HomeAd::find($request->ad_id);

        $path = public_path("backend/home/ad/".$ad->ad_cover);
        unlink($path);

        $ad->delete();

        return redirect()->route('admin.all_ad');
    }
}
