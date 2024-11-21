<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;


class MailController extends Controller
{
    //
    function sendEmail(Request $request){
       $to = $request->to;
       $msg = $request->message;
       $subjects = $request->subject;

       Mail::to($to)->send(new WelcomeEmail($msg, $subjects));
       return "Email send";
    }


}
