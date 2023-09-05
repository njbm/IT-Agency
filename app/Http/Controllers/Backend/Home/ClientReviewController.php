<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeClientReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientReviewController extends Controller
{
    /**** Show All Client Review ****/
    public function all_client_review(){

        $client_reviews = DB::table('home_client_reviews')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.ClientReview.All_Client_Review', compact('client_reviews'));
    }

    /***** Start Home Add Client Review ******/

    public function add_client_review(Request $request){

        $request->validate([

            'client_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'client_name' => 'required',
            'client_post' => 'required',
            'client_comment' => 'required',

        ]);

        $client_review = new HomeClientReview();

        /**** Client image Upload ******/
        if (request()->client_image) {

            $fileName = time().'.'.request()->client_image->getClientOriginalExtension();
            request()->client_image->move(public_path('backend/home/client_review'), $fileName);
            $client_review->client_image = $fileName;
        }

        $client_review->client_name = $request->client_name;
        $client_review->client_post = $request->client_post;
        $client_review->client_comment = $request->client_comment;

        $client_review->save();

        return redirect()->route('admin.all_client_review');

    }

    /**** Edit Client Review ****/
    public function edit_client_review($id){

        $client_review = HomeClientReview::find($id);

        return view('Backend.pages.Home.ClientReview.Update_Client_Review', compact('client_review'));

    }

    /**** Update Client  Review ****/
    public function update_client_review(Request $request, $id){

        $request->validate([

            'client_name' => 'required',
            'client_post' => 'required',
            'client_comment' => 'required',
            'client_new_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $client_review = HomeClientReview::find($id);

        if ($request->client_new_image){

            if ($client_review->client_image != null) {

                $path = public_path("backend/home/client_review/".$client_review->client_image);
                unlink($path);
            }

            $fileName = time().'.'.request()->client_new_image->getClientOriginalExtension();
            request()->client_new_image->move(public_path('backend/home/client_review'), $fileName);
            $client_review->client_image = $fileName;

        }else{
            $client_review->client_image = $request->client_image;
        }

        $client_review->client_name = $request->client_name;
        $client_review->client_post = $request->client_post;
        $client_review->client_comment = $request->client_comment;
        $client_review->client_review_status = $request->client_review_status;

        $client_review->update();

        return redirect()->route('admin.all_client_review');
    }


    /******* Client Image Delete  Review**********/

    public function delete_client_review(Request $request){

        $client_review = HomeClientReview::find($request->client_review_id);

        if ($client_review->client_image != null) {
            $path = public_path("backend/home/client_review/".$client_review->client_image);
            unlink($path);
        }

        $client_review->delete();

        return redirect()->route('admin.all_client_review');
    }
}
