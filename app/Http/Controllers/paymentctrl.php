<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentctrl extends Controller
{
    public function payment(){
        return view("payment");
    }
    public function storePay(Request $request){
        payap::create([
            'Name' => $request->Name,
            'LName' => $request->LName,
            'Email' => $request->Email,
            'cardNum' => $request->cardNum,
        ]);
        return redirect('/payflow');
    }
    public function show(){
        $pay = payap::all();
        return view('payflow', compact('pay'));
    }
}
