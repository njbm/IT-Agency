<?php

namespace App\Http\Controllers\Backend\Setting\Contract;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;

class contractController extends Controller
{
    public function home(){
        $contract=Contract::find(1);
        return view('Backend.pages.Setting.contract',compact('contract'));
    }
    public function contract_add(Request $request){
        $request->validate([
            'email1' => 'required|max:255',
            'email2' => 'required|max:255',
            'address1' => 'required|max:255',
            'address2' => 'required|max:255',
            'contract1' => 'required|max:255',
            'contract2' => 'required|max:255',
        ]);

        $contract=Contract::find(1);
        $contract->email1 = $request->input('email1');
        $contract->email2 = $request->input('email2');
        $contract->address1 = $request->input('address1');
        $contract->address2 = $request->input('address2');
        $contract->contract1 = $request->input('contract1');
        $contract->contract2 = $request->input('contract2');
        $contract->update();
        return redirect()->route('contract')->with('success','Update Success');
    }
}
