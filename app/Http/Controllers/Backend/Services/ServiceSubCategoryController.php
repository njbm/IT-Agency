<?php

namespace App\Http\Controllers\Backend\Services;


use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceSubCategoryController extends Controller
{
    /*************####### Start Service Category Function ########**********/

    /**** Show All Category ****/
    public function all_Service_subcategory(){
        $category = DB::table('service_categories')->where('status', 1)->orderBy('id', 'desc')->get();
        $sub_cat = DB::table('service_sub_categories')
                    ->join('service_categories', 'service_sub_categories.cat_id', '=', 'service_categories.id',)
                    ->select('service_sub_categories.*', 'service_categories.cat_name')
                    ->orderBy('id', 'desc')
                    ->get();
        return view('Backend.pages.Services.SubCategory.All_Sub_Category', compact('category','sub_cat'));
    }

    /**** Add Category ****/
    public function add_Service_subcategory(Request $request){
        $request->validate([
            'cat_id' => 'required|string|max:255',
            'sub_cat_name' => 'required|string|max:255|unique:service_sub_categories',
            'sub_cat_title' => 'required|string|max:255',
            'sub_cat_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);


        /**** Sub Cattegory Image Upload ******/

        $fileName = time().'.'.request()->sub_cat_image->getClientOriginalExtension();
        request()->sub_cat_image->move(public_path('backend/services/images'), $fileName);

        $subcat = new ServiceSubCategory();

        $subcat->cat_id = $request->cat_id;
        $subcat->sub_cat_name = $request->sub_cat_name;
        $subcat->sub_cat_title = $request->sub_cat_title;
        $subcat->sub_cat_image = $fileName;
        $subcat->save();

        return back();
    }


    /**** Edit Sub Category ****/
    public function edit_Service_subcategory($id){
        $category = ServiceCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $sub_category = ServiceSubCategory::find($id);
        return view('Backend.pages.Services.SubCategory.Update_Sub_Category', compact('category','sub_category'));
    }

    /**** Add Category ****/
    public function update_Service_subcategory(Request $request, $id){
        $request->validate([
            'cat_id' => 'required|string|max:255',
            'sub_cat_name' => 'required|string|max:255',
            'sub_cat_title' => 'required|string|max:255',
            'sub_cat_image_new' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           
        ]);



       
        $subcat = ServiceSubCategory::find($id);
        
        if ($request->sub_cat_image_new){
         
            $path = public_path("backend/services/images/".$subcat->sub_cat_image);
            unlink($path);

            $fileName = time().'.'.request()->sub_cat_image_new->getClientOriginalExtension();
            request()->sub_cat_image_new->move(public_path('backend/services/images'), $fileName);

            $subcat->sub_cat_image = $fileName;

        }else{
            $subcat->sub_cat_image = $request->sub_cat_image;
        }

        $subcat->cat_id = $request->cat_id;
        $subcat->sub_cat_name = $request->sub_cat_name;
        $subcat->sub_cat_title = $request->sub_cat_title;
        $subcat->sub_cat_status = $request->sub_cat_status;
        $subcat->update();

        return redirect()->route('service.all_service_subcategory');
    }

    /******* Delete Category Item *********/

       public function delete_Service_subcategory(Request $request){
        $subcat = ServiceSubCategory::find($request->subcategory_id);
        $path = public_path("backend/services/images/".$subcat->sub_cat_image);
        unlink($path);
        $subcat->delete();

        return redirect()->route('service.all_service_subcategory');
    }
    /******* Delete Category Item *********/

    /*************####### End  Service Category Function ########**********/


}
