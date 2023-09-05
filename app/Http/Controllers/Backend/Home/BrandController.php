<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**** Show All Brand ****/

    public function all_brand(){

        $brands = DB::table('home_brands')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Brand.All_Brand', compact('brands'));
    }

   /***** Start Home Add Brand ******/

   public function add_brand(Request $request){

    $request->validate([
        'brand_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    /**** Brand Logo Upload ******/

    $fileName = time().'.'.request()->brand_logo->getClientOriginalExtension();
    request()->brand_logo->move(public_path('backend/home/brand'), $fileName);

    $brand = new HomeBrand();

    $brand->brand_name = $request->brand_name;
    $brand->brand_logo = $fileName;

    $brand->save();

    return redirect()->route('admin.all_brand');

    }

    /**** Edit Brand ****/
    public function edit_brand($id){

        $brand = HomeBrand::find($id);

        return view('Backend.pages.Home.Brand.Update_Brand', compact('brand'));

    }

    /**** Update Brand ****/
    public function update_brand(Request $request, $id){

        $request->validate([
            'brand_new_logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $brand = HomeBrand::find($id);

        if ($request->brand_new_logo){

            $path = public_path("backend/home/brand/".$brand->brand_logo);
            unlink($path);

            $fileName = time().'.'.request()->brand_new_logo->getClientOriginalExtension();
            request()->brand_new_logo->move(public_path('backend/home/brand'), $fileName);
            $brand->brand_logo = $fileName;

        }else{
            $brand->brand_logo = $request->brand_logo;
        }

        $brand->brand_name = $request->brand_name;
        $brand->brand_status = $request->brand_status;
        $brand->update();

        return redirect()->route('admin.all_brand');
    }


    /******* Brand Delete  **********/

    public function delete_brand(Request $request){

        $brand = HomeBrand::find($request->brand_id);

        $path = public_path("backend/home/brand/".$brand->brand_logo);
        unlink($path);

        $brand->delete();

        return redirect()->route('admin.all_brand');
    }


}
