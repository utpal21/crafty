<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Mail\InqueryEmail;
use App\Mail\ContactAdmin;
use Log;

class EmailController extends Controller
{
    public function sendEmail() {

        $to_email = "utpal.egen@gmail.com";

        Mail::to($to_email)->send(new InqueryEmail);

        return "<p> Success! Your E-mail has been sent.</p>";

    }
    public function ajaxSendEmail(Request $request) {

      $emailTo = env('MAIL_FROM_ADDRESS'); 
      $details = $request->all();
      
      if(!empty($details)) {
         Mail::to($emailTo)->send(new InqueryEmail($details));
         return response()->json(['success'=> true]);
      } else {
          return response()->json(['success'=> false]);
      }
      
    }
    /**
     * will come comment from client to admin
     */
    public function contact_to_admin(Request $request){
        $data = $request->all();
        $emailTo = env('MAIL_FROM_ADDRESS');
         $vr = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ])->validate();
          Mail::to($emailTo)->send(new ContactAdmin($data));
          return Redirect::back()->withSuccess('Success! admin will contact with you very soon.');

    }
}