<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;


class MailController extends Controller
{
    //
    function sendEmail(){
       $to = "anik558363@gmail.com";
       $msg = "dummy mail anik mondal";
       $subjects = "send my anik!!";

       Mail::to($to)->send(new WelcomeEmail($msg, $subjects));
    }


}
