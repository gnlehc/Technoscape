<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailCtrl extends Controller
{
    public function sendMail(Request $request){

        // $EmailContainer = [
        //     'title' => 'Reset Password',
        //     'body' => 'Click button below to reset password',
        // ];
        Mail::to($request->Email)->send(new sendEmail());
        return 'Email Sent Successfully';
    }
}