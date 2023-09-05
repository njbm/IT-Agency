<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeCategory;
use App\Models\HomeSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{

    /*************####### Start Home Sub Category Function ########**********/

    /**** Show All sub Category ****/
    public function all_subcategory(){

        $category = DB::table('home_categories')->where('status', 1)->orderBy('id', 'desc')->get();
        $sub_cat = DB::table('home_sub_categories')
                    ->join('home_categories', 'home_sub_categories.cat_id', '=', 'home_categories.id',)
                    ->select('home_sub_categories.*', 'home_categories.cat_name')
                    ->orderBy('id', 'desc')
                    ->get();

        return view('Backend.pages.Home.SubCategory.All_Sub_Category', compact('category','sub_cat'));

    }

    /**** Add sub Category ****/
    public function add_subcategory(Request $request){

        $request->validate([
            'sub_cat_name' => 'required|string|max:255'
        ]);

        $cat = new HomeSubCategory();
        $cat->cat_id = $request->cat_id;
        $cat->sub_cat_name = $request->sub_cat_name;
        $cat->save();

        return back();
    }

    /**** Edit sub Category ****/
    public function edit_subcategory($id){

        $category = HomeCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $sub_category = HomeSubCategory::find($id);

        return view('Backend.pages.Home.SubCategory.Update_Sub_Category', compact( 'category','sub_category'));

    }

    /**** Update Sub Category ****/
    public function update_subcategory(Request $request, $id){

        $request->validate([
            'sub_cat_name' => 'required|string|max:255'
        ]);

        $cat = HomeSubCategory::find($id);
        $cat->cat_id = $request->cat_id;
        $cat->sub_cat_name = $request->sub_cat_name;
        $cat->sub_cat_status = $request->sub_cat_status;
        $cat->update();

        return redirect()->route('admin.all_subcategory');
    }
    /******* Delete Sub Category Item *********/
    public function delete_subcategory(Request $request){

        $cat = HomeSubCategory::find($request->subcategory_id);
        $cat->delete();

        return redirect()->route('admin.all_subcategory');
    }
    /*************####### End Home Sub Category Function ########**********/


    /*************####### Start Home Sub Category Function ########**********/

    /**** Show All sub Category ****/
    public function all_pharmacy_subcat(){

        // $category = DB::table('home_categories')->where('status', 1)->orderBy('id', 'desc')->get();
        // $sub_cat = DB::table('home_sub_categories')
        //             ->join('home_categories', 'home_sub_categories.cat_id', '=', 'home_categories.id',)
        //             ->select('home_sub_categories.*', 'home_categories.cat_name')
        //             ->orderBy('id', 'desc')
        //             ->get();

        return view('Backend.pages.Pharmacy.SubCategory.All_Sub_Category');

    }







}
