<?php

namespace App\Http\Controllers\Backend\Technology;

use App\Http\Controllers\Controller;
use App\Models\TechnologyCategory;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
     /**** Show All Category ****/
     public function all_Technology(){
        $technology = TechnologyCategory::all();

        // $technology = DB::table('technology_categories')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Technology.all_technology', compact('technology'));
    }

    /***** Start Home Add Technology ******/

    public function add_technology(Request $request){

        $request->validate([
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** Technology Logo Upload ******/

        $fileName = time().'.'.request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('backend/home/Technology'), $fileName);

        $technology = new TechnologyCategory;

        $technology->link = $request->link;
        $technology->name = $request->name;
        $technology->logo = $fileName;

        $technology->save();

        return redirect()->route('admin.all_technology');

    }

    /**** Edit Technology ****/
    public function edit_technology($id){

        $technology = TechnologyCategory::find($id);

        return view('Backend.pages.Home.Technology.Update_technology', compact('technology'));

    }

    /**** Update Technology ****/
    public function update_technology(Request $request, $id){

        $request->validate([
            'Technology_new_logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $technology = TechnologyCategory::find($id);

        if ($request->Technology_new_logo){

            $path = public_path("backend/home/Technology/".$technology->logo);
            unlink($path);

            $fileName = time().'.'.request()->Technology_new_logo->getClientOriginalExtension();
            request()->Technology_new_logo->move(public_path('backend/home/Technology'), $fileName);
            $technology->logo = $fileName;

        }else{
            $technology->logo = $request->logo;
        }

        $technology->name = $request->name;
        $technology->link = $request->link;
        // $technology->status = $request->status->nullable();
        $technology->update();

        return redirect()->route('admin.all_technology');
    }


    /******* Technology Image Delete  **********/

    public function delete_technology(Request $request){

        $technology = TechnologyCategory::find($request->technology_id);

        $path = public_path("backend/home/Technology/".$technology->logo);
        unlink($path);

        $technology->delete();

        return redirect()->route('admin.all_technology');
    }

}
