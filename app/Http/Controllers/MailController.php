<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewFoundationMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function sendmail(Request $request){

        $detail = [
            'name'=> $request->name,
            'email'=> $request->email,
            'message' => $request->message,
        ];
        $email = 'succy2010@gmail.com';
        Mail::to($email)->send(new NewFoundationMail($detail));
        return response('ok',200);
    }
}
