<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomePartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    /**** Show All Partner ****/
    public function all_partner(){

        $partners = DB::table('home_partners')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Partner.All_Partner', compact('partners'));
    }

    /***** Start Home Add Partner ******/

    public function add_partner(Request $request){

        $request->validate([
            'partner_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** Partner logo Upload ******/

        $fileName = time().'.'.request()->partner_logo->getClientOriginalExtension();
        request()->partner_logo->move(public_path('backend/home/partner'), $fileName);

        $partner = new HomePartner();

        $partner->partner_logo = $fileName;

        $partner->save();

        return redirect()->route('admin.all_partner');

    }

    /**** Edit Partner ****/
    public function edit_partner($id){

        $partner = HomePartner::find($id);

        return view('Backend.pages.Home.Partner.Update_Partner', compact('partner'));

    }

    /**** Update Partner ****/
    public function update_partner(Request $request, $id){

        $request->validate([
            'partner_new_logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $partner = HomePartner::find($id);

        if ($request->partner_new_logo){

            $path = public_path("backend/home/partner/".$partner->partner_logo);
            unlink($path);

            $fileName = time().'.'.request()->partner_new_logo->getClientOriginalExtension();
            request()->partner_new_logo->move(public_path('backend/home/partner'), $fileName);
            $partner->partner_logo = $fileName;

        }else{
            $partner->partner_logo = $request->partner_logo;
        }

        $partner->partner_status = $request->partner_status;

        $partner->update();

        return redirect()->route('admin.all_partner');
    }


    /******* Partner Image Delete  **********/

    public function delete_partner(Request $request){

        $partner = HomePartner::find($request->partner_id);

        $path = public_path("backend/home/partner/".$partner->partner_logo);
        unlink($path);

        $partner->delete();

        return redirect()->route('admin.all_partner');
    }

    /*********************** End Home Partner function  *************************************** */
}
