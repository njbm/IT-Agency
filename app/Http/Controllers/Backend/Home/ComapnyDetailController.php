<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use Illuminate\Support\Facades\DB;

class ComapnyDetailController extends Controller
{
    /**** Show All comapny_detail ****/
    public function all_company_detail(){

        $company_detailse = DB::table('company_details')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.CompanyDetail.All_Company_Detail', compact('company_detailse'));
    }

    /***** Start Home Add comapny_detail ******/

    public function add_company_detail(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        /**** comapny logo Upload ******/

        $fileName = time().'.'.request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('backend/home/company/logo'), $fileName);

        $company_detailse = new CompanyDetails();

        $company_detailse->logo = $fileName;
        $company_detailse->number = $request->number;
        $company_detailse->title = $request->title;

        $company_detailse->save();

        return redirect()->route('admin.all_company_detail');

    }

    /**** Edit slider ****/
    public function edit_company_detail($id){

        $company_detailse = CompanyDetails::find($id);

        return view('Backend.pages.Home.CompanyDetail.Update_Company_Detail', compact('company_detailse'));

    }

    /**** Update slider ****/
    public function update_company_detail(Request $request,$id){



        $company_details = CompanyDetails::find($id);

        if($request->new_logo){

            $path = public_path("backend/home/company/logo/".$company_details->logo);
            unlink($path);

            $fileName = time().'.'.request()->new_logo->getClientOriginalExtension();
            request()->new_logo->move(public_path('backend/home/company/logo'), $fileName);
            $company_details->logo = $fileName;

        }else{
            $company_details->logo = $request->logo;
        }

        $company_details->title = $request->title;
        $company_details->number = $request->number;

        $company_details->update();

        return redirect()->route('admin.all_company_detail');
    }


    /******* Slider Image Delete  **********/

    public function delete_company_detail(Request $request){

        $company_details = CompanyDetails::find($request->companydetail_id);

        $path = public_path("backend/home/company/logo/".$company_details->logo);
        unlink($path);

        $company_details->delete();

        return redirect()->route('admin.all_company_detail');
    }
}
