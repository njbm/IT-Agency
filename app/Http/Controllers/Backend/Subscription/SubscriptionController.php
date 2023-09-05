<?php

namespace App\Http\Controllers\Backend\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    /**** Show All subscription ****/
    public function all_subscription(){

        $subscriptions = Subscription::orderBy('id', 'desc')->get();

        return view('Backend.pages.Subscription.All_Subscription', compact('subscriptions'));

    }

    /**** Store Subscription data ****/

    public function add_subscription(Request $request){

        $request->validate([

            'subs_title'=> 'required',
            'subs_desc'=> 'required',
            'current_price'=> 'required',
            'old_price'=> 'required',
            'subs_type'=> 'required',

        ]);

        /**** Subscriptions ******/

        $subscriptions = new Subscription();

        $subscriptions->subs_title = $request->subs_title;
        $subscriptions->subs_desc = $request->subs_desc;
        $subscriptions->current_price = $request->current_price;
        $subscriptions->old_price = $request->old_price;
        $subscriptions->subs_type = $request->subs_type;

        $subscriptions->save();

        return redirect()->route('admin.all_subscription');

    }

    /**** Edit subscription ****/

    public function edit_subscription($id){

        $subscriptions = Subscription::find($id);
        
        return view('Backend.pages.Subscription.Update_Subscription', compact('subscriptions'));

    }

    /**** Store Subscription data ****/

    public function update_subscription(Request $request, $id){

        $request->validate([

        
            'subs_title'=> 'required',
            'subs_desc'=> 'required',
            'current_price'=> 'required',
            'old_price'=> 'required',
            'subs_type'=> 'required'

        ]);

        /**** Subscription ******/

        $subscriptions = Subscription::find($id);

        $subscriptions->subs_title = $request->subs_title;
        $subscriptions->subs_desc = $request->subs_desc;
        $subscriptions->current_price = $request->current_price;
        $subscriptions->old_price = $request->old_price;
        $subscriptions->subs_type = $request->subs_type;

        $subscriptions->save();


        return redirect()->route('admin.all_subscription');

    }

    /******* subscriptions Delete  **********/

    public function delete_subscriptions(Request $request){

        $subscriptions = Subscription::find($request->subscription_id);

        unlink($path);

        $subscriptions->delete();

        return redirect()->route('admin.all_subscription');
    }



}
