<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**** Show All Category ****/
    public function all_client(){

        $clients = DB::table('home_clients')->orderBy('id', 'desc')->get();

        return view('Backend.pages.Home.Client.All_Client', compact('clients'));
    }

    /***** Start Home Add Client ******/

    public function add_client(Request $request){

        $request->validate([
            'client_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        /**** Client Logo Upload ******/

        $fileName = time().'.'.request()->client_logo->getClientOriginalExtension();
        request()->client_logo->move(public_path('backend/home/client'), $fileName);

        $client = new HomeClient();

        $client->client_name = $request->client_name;
        $client->client_logo = $fileName;

        $client->save();

        return redirect()->route('admin.all_client');

    }

    /**** Edit Client ****/
    public function edit_client($id){

        $client = HomeClient::find($id);

        return view('Backend.pages.Home.Client.Update_Client', compact('client'));

    }

    /**** Update Client ****/
    public function update_client(Request $request, $id){

        $request->validate([
            'client_new_logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $client = HomeClient::find($id);

        if ($request->client_new_logo){

            $path = public_path("backend/home/client/".$client->client_logo);
            unlink($path);

            $fileName = time().'.'.request()->client_new_logo->getClientOriginalExtension();
            request()->client_new_logo->move(public_path('backend/home/client'), $fileName);
            $client->client_logo = $fileName;

        }else{
            $client->client_logo = $request->client_logo;
        }

        $client->client_name = $request->client_name;
        $client->client_status = $request->client_status;
        $client->update();

        return redirect()->route('admin.all_client');
    }


    /******* Client Image Delete  **********/

    public function delete_client(Request $request){

        $client = HomeClient::find($request->client_id);

        $path = public_path("backend/home/client/".$client->client_logo);
        unlink($path);

        $client->delete();

        return redirect()->route('admin.all_client');
    }





}
