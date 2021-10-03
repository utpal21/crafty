<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

       $input = $request->all();
          
        Log::info($input);
     
        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }
}