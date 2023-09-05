<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeChildCategory;
use App\Models\HomeSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildCategoryController extends Controller
{
    /**** ######### Show All Child Category ########### ****/
    public function all_child_category(){

        $sub_category = DB::table('home_sub_categories')->where('sub_cat_status', 1)->orderBy('id', 'desc')->get();

        $child_category = DB::table('home_child_categories')
                    ->join('home_sub_categories', 'home_child_categories.sub_cat_id', '=', 'home_sub_categories.id',)
                    ->select('home_child_categories.*', 'home_sub_categories.sub_cat_name')
                    ->orderBy('id', 'desc')
                    ->get();

        return view('Backend.pages.Home.ChildCategory.All_Child_Category', compact('sub_category','child_category'));
    }

    /****########## Add child Category ##########****/

    public function add_child_category(Request $request){

        $request->validate([
            'child_cat_name' => 'required|string|max:255'
        ]);

        $child_cat = new HomeChildCategory();
        $child_cat->sub_cat_id = $request->sub_cat_id;
        $child_cat->child_cat_name = $request->child_cat_name;
        $child_cat->save();

        return back();
    }

    /****########## Edit  child Category ###########****/

    public function edit_child_category($id){

        $sub_category = HomeSubCategory::where('sub_cat_status', 1)->orderBy('id', 'desc')->get();
        $child_category = HomeChildCategory::find($id);

        return view('Backend.pages.Home.ChildCategory.Update_Child_Category', compact('sub_category','child_category'));

    }

    /****########## update child Category ##########****/

    public function update_child_category(Request $request, $id){

        $request->validate([
            'child_cat_name' => 'required|string|max:255'
        ]);

        $child_cat = HomeChildCategory::find($id);
        $child_cat->sub_cat_id = $request->sub_cat_id;
        $child_cat->child_cat_name = $request->child_cat_name;
        $child_cat->child_cat_status = $request->child_cat_status;
        $child_cat->update();

        return redirect()->route('admin.all_child_category');
    }

    /******######### Delete child  Category Item #########*********/

        public function delete_child_category(Request $request){

        $child_cat = HomeChildCategory::find($request->child_category_id);
        $child_cat->delete();

        return redirect()->route('admin.all_child_category');
    }

    /*******######### Delete child Category Item #########*********/

    /*************####### End Home Category Function ########**********/
    /*************####### End Home Category Function ########**********/



}
