<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**** Show All Banner ****/
    public function all_banner(){

        $banners = DB::table('home_banners')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Banner.All_Banner', compact('banners'));
    }

    /***** Start Home Add Banner ******/

    public function add_banner(Request $request){

        $request->validate([
            'banner_cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** Blog logo Upload ******/

        $fileName = time().'.'.request()->banner_cover->getClientOriginalExtension();
        request()->banner_cover->move(public_path('backend/home/banner'), $fileName);

        $banner = new HomeBanner();

        $banner->banner_title = $request->banner_title;
        $banner->banner_desc = $request->banner_desc;
        $banner->banner_cover = $fileName;

        $banner->save();

        return redirect()->route('admin.all_banner');

    }

    /**** Edit Banner ****/
    public function edit_banner($id){

        $banner = HomeBanner::find($id);

        return view('Backend.pages.Home.Banner.Update_Banner', compact('banner'));

    }

    /**** Update Banner ****/
    public function update_banner(Request $request, $id){

        $request->validate([
            'banner_new_cover' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $banner = HomeBanner::find($id);

        if ($request->banner_new_cover){

            $path = public_path("backend/home/banner/".$banner->banner_cover);
            unlink($path);

            $fileName = time().'.'.request()->banner_new_cover->getClientOriginalExtension();
            request()->banner_new_cover->move(public_path('backend/home/banner'), $fileName);
            $banner->banner_cover = $fileName;

        }else{
            $banner->banner_cover = $request->banner_cover;
        }

        $banner->banner_title = $request->banner_title;
        $banner->banner_desc = $request->banner_desc;
        $banner->banner_status = $request->banner_status;

        $banner->update();

        return redirect()->route('admin.all_banner');
    }


    /******* Banner Image Delete  **********/

    public function delete_banner(Request $request){

        $banner = HomeBanner::find($request->banner_id);

        $path = public_path("backend/home/banner/".$banner->banner_cover);
        unlink($path);

        $banner->delete();

        return redirect()->route('admin.all_banner');
    }

    /*********************** End Home Banner function  *************************************** */
}
