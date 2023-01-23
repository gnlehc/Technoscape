<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginctrl extends Controller
{
    public function login(){
        return view("login");
    }

    // public function authenticate(Request $request){
    //     $creden = $request->validate([
    //         'email' => ['required'],
    //         'password' => ['required']
    //     ]);
    //     dd('berhasil login!');

    //     if(Auth::attempt($creden)){
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard');
    //     }

        // return back()->withErrors([
        //     'Email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('Email');

        // if (Auth::attemptWhen([
        //     'Email' => $email,
        //     'password' => $password,
        // ], function ($user) {
        //     return $user->isNotBanned();
        // }));

// }

            

    public function show(){
        $logins = log::all();
        return view('dashboard', compact('logins'));
    }
}
