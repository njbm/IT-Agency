<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    /*************####### Start Home Category Function ########**********/

    /**** Show All Category ****/
    public function all_Category(){
        $category = DB::table('home_categories')->orderBy('id', 'desc')->get();
        return view('Backend.pages.Home.Category.All_Category', compact('category'));
    }

    /**** Add Category ****/
    public function add_category(Request $request){

        $request->validate([
            'cat_name' => 'required|string|max:255'
        ]);

        $cat = new HomeCategory();
        $cat->cat_name = $request->cat_name;
        $cat->save();

        return back();
    }

    /**** Edit Category ****/
    public function edit_category($id){
        $category = HomeCategory::find($id);
        return view('Backend.pages.Home.Category.Update_Category', compact('category'));
    }

    /**** Add Category ****/
    public function update_category(Request $request, $id){

        $request->validate([
            'cat_name' => 'required|string|max:255'
        ]);

        $cat = HomeCategory::find($id);
        $cat->cat_name = $request->cat_name;
        $cat->status = $request->status;
        $cat->update();

        return redirect()->route('admin.all_category');
    }

    /******* Delete Category Item *********/

       public function delete_category(Request $request){

        $cat = HomeCategory::find($request->category_id);
        $cat->delete();

        return redirect()->route('admin.all_category');
    }
    /******* Delete Category Item *********/

    /*************####### End Home Category Function ########**********/



    /*************####### Start Pharmacy Category Function ########**********/

    public function all_pharmacy_cat(){
        // $category = DB::table('home_categories')->orderBy('id', 'desc')->get();
        return view('Backend.pages.Pharmacy.Category.All_Category');
    }

    /*************####### End Home Pharmacy Function ########**********/



}
