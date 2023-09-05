<?php

namespace App\Http\Controllers\Backend\Setting\Limit;

use App\Http\Controllers\Controller;
use App\Models\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class limitController extends Controller
{
    public function home(){
        $limits=Limit::find(1);
        return view('Backend.pages.Setting.limit',compact('limits'));

    }
    public function limit_add(Request $request){
      //return   $request->all();
        $rules=[
            'row' => 'required|max:255',
            'min_amount' => 'required|max:255',
            'file_size_allow' => 'required|max:255',
            'number_of_product_show' => 'required|max:255'
        ];
        $validator =Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $limit=Limit::find(1);
         $limit->number_of_rows=$request->row;
         $limit->min_amount=$request->min_amount;
         $limit->file_size_allow=$request->file_size_allow;
         $limit->number_of_product_show=$request->number_of_product_show;
         $limit->update();
          return redirect()->route('limit')->with('success','Update Success');
    }
}
