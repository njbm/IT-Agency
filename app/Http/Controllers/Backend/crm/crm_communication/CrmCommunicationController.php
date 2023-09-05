<?php

namespace App\Http\Controllers\Backend\crm\crm_communication;

use App\Http\Controllers\Controller;
use App\Mail\OfferInformationEmail;
use App\Models\Crmmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CrmCommunicationController extends Controller
{
    public $emailData = [];

    public function home()
    {
        return view('Backend.pages.crm.crm_communication.crm_communication');
    }
    public function createOffer(Request $request)
    {
        $mail =new Crmmail();
        $mail->mail_subject = $request->input('mail_subject');
        $mail->mail_description = $request->input('mail_description');
        $mail->save();


        //-------Offer Mail-----------///
        $this->emailData = [
            'mail_subject'    => $request->mail_subject,
            'mail_description'   => $request->mail_description,
        ];
        $send_mail = "niazahmed.net@gmail.com";
        Mail::to($send_mail)->send(new OfferInformationEmail($this->emailData));
        //-------Offer Mail-----------///

        return redirect()->route('admin.crm_communication')->with('success', 'Offer mail send successfully, Thank You.');
    }

    public function manageOffer()
    {
        return view('Backend.pages.crm.crm_mail.crm_manage_mail',['offers' => Crmmail::orderBy('id', 'desc')->get()]);
    }

    public function deleteOffer($id){
        $size = Crmmail::find($id);
        $size->delete();
        return redirect()->route('admin.crm_manage_offer')->with('success', 'Delete successfully');
    }

}
