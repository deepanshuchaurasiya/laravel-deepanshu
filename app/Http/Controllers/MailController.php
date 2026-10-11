<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\FirstMail;

class MailController extends Controller
{
    public function sendMail(){
        // return"Mail Send";
        $to ="anchaltripathi426@gmail.com";
        $subject = "First Laravel Mail";
        $msg = "Chin Tapak Dam Dam";
        Mail::to($to)->send(new FirstMail($subject,$msg));
    }
}
