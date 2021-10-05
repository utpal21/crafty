<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\InqueryEmail;
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
}