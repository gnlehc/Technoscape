<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailCtrl extends Controller
{
    public function index(){

        $EmailContainer = [
            'title' => 'Reset Password',
            'body' => 'Click button below to reset password',
        ];
        Mail::to('chelseang40@gmail.com')->send(new sendEmail);
        return 'Email Sent Successfully';
    }
}