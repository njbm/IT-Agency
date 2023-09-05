<?php

namespace App\Http\Controllers\Backend\Specialized;

use App\Http\Controllers\Controller;
use App\Models\Specialized;
use Illuminate\Http\Request;

class SpecializedController extends Controller
{
     /**** Show All Category ****/
     public function all_Specialized(){
        $specialized = Specialized::all();

        // $specialized = DB::table('specialized_categories')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Specialized.all_specialized', compact('specialized'));
    }

    /***** Start Home Add Specialized ******/

    public function add_specialized(Request $request){

        $request->validate([
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** Specialized Logo Upload ******/

        $fileName = time().'.'.request()->icon->getClientOriginalExtension();
        request()->icon->move(public_path('backend/home/Specialized'), $fileName);

        $specialized = new Specialized;

        $specialized->link = $request->link;
        $specialized->title = $request->title;
        $specialized->icon = $fileName;

        $specialized->save();

        return redirect()->route('admin.all_specialized');

    }

    /**** Edit Specialized ****/
    public function edit_specialized($id){

        $specialized = Specialized::find($id);

        return view('Backend.pages.Home.Specialized.Update_specialized', compact('specialized'));

    }

    /**** Update Specialized ****/
    public function update_specialized(Request $request, $id){

        $request->validate([
            'Specialized_new_icon' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $specialized = Specialized::find($id);

        if ($request->Specialized_new_icon){

            $path = public_path("backend/home/Specialized/".$specialized->icon);
            unlink($path);

            $fileName = time().'.'.request()->Specialized_new_icon->getClientOriginalExtension();
            request()->Specialized_new_icon->move(public_path('backend/home/Specialized'), $fileName);
            $specialized->icon = $fileName;

        }else{
            $specialized->icon = $request->icon;
        }

        $specialized->title = $request->title;
        $specialized->link = $request->link;
        // $specialized->status = $request->status->nullable();
        $specialized->update();

        return redirect()->route('admin.all_specialized');
    }


    /******* Specialized Image Delete  **********/

    public function delete_specialized(Request $request){

        $specialized = Specialized::find($request->specialized_id);

        $path = public_path("backend/home/Specialized/".$specialized->icon);
        unlink($path);

        $specialized->delete();

        return redirect()->route('admin.all_specialized');
    }
}
