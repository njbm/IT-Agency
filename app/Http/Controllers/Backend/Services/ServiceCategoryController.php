<?php

namespace App\Http\Controllers\Backend\Services;


use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceCategoryController extends Controller
{
   /*************####### Start Service Category Function ########**********/

    /**** Show All Category ****/
    public function all_Service_Category(){
        $category = DB::table('service_categories')->orderBy('id', 'desc')->get();
        return view('Backend.pages.Services.Category.All_Category', compact('category'));
    }

    /**** Add Category ****/
    public function add_Service_category(Request $request){
     
        $request->validate([
            'cat_name' => 'required|string|max:255|unique:service_categories',
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);


        /**** Cattegory Image Upload ******/

        $fileName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('backend/services/images'), $fileName);


        // categor icon image upload---------
        $fileNameIcon = time().'icon'.'.'.request()->icon->getClientOriginalExtension();
        request()->icon->move(public_path('backend/services/images'), $fileNameIcon);



        $cat = new ServiceCategory();
        $cat->cat_name = $request->cat_name;
        $cat->icon = $fileNameIcon;
        $cat->image = $fileName;
        $cat->save();

        return back();
    }

    /**** Edit Category ****/
    public function edit_Service_category($id){
        $category = ServiceCategory::find($id);
        return view('Backend.pages.Services.Category.Update_Category', compact('category'));
    }

    /**** Add Category ****/
    public function update_Service_category(Request $request, $id){
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'icon_new' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image_new' =>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           
        ]);


        $cat = ServiceCategory::find($id);
        
        if ($request->image_new){
         
            $path = public_path("backend/services/images/".$cat->image);
            unlink($path);

            $fileName = time().'.'.request()->image_new->getClientOriginalExtension();
            request()->image_new->move(public_path('backend/services/images'), $fileName);
            $cat->image = $fileName;

        }else{
            $cat->image = $request->image;
        }



        if($request->icon_new){

            $path = public_path("backend/services/images/".$cat->icon);
            unlink($path);
            
            // categor icon image upload---------
        $fileNameIcon = time().'icon'.'.'.request()->icon_new->getClientOriginalExtension();
        request()->icon_new->move(public_path('backend/services/images'), $fileNameIcon);
        $cat->icon =$fileNameIcon;

        }else{
            $cat->icon =$request->icon;
        }

        $cat->cat_name = $request->cat_name;
        
        $cat->status = $request->status;
        $cat->update();

        return redirect()->route('service.all_service_category');
    }

    /******* Delete Category Item *********/

       public function delete_Service_category(Request $request){
        $cat = ServiceCategory::find($request->category_id);
        $path = public_path("backend/services/images/".$cat->image);
        unlink($path);
        $cat->delete();

        return redirect()->route('service.all_service_category');
    }
    /******* Delete Category Item *********/

    /*************####### End  Service Category Function ########**********/


  

}
