<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Sessionctrl extends Controller
{
    public function index(){
        return view("login");
    }
    public function registIndex(){
        return view('register');
    }
    function login(Request $request){
        // Session::flash('name', $request->name);
        Session::flash('Email', $request->Email);
        $request->validate([
            'Email' => 'required',
            'password' => 'required',
        ], 
        [
            'Email.required' => 'Email cannot be empty',
            'password.required' => 'Password cannot be empty',
        ]);
        
        $infoLogin = [
            'Email' => $request->Email,
            'password' => $request->password
        ];

        if(Auth::attempt($infoLogin)){
            return redirect('user')->with("Welcome");
        }else{
            return redirect('login')->withErrors('Email or Password does not valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login')->with("See you!");
    }

    public function register(){
        return view('register');
    }
    function create(Request $request){
        Session::flash('Name', $request->Name);
        Session::flash('Email', $request->Email);
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|Email|unique:users',
            'password' => 'required|min:6',
            'Pass' => 'required|min:6',
        ], 
        [
            'Name.required' => 'Name cannot be empty',
            'Email.required' => 'Email cannot be empty',
            'Email.Email' => "Enter Valid Email",
            'Email.unique' => "Email are already been taken",
            'password.required' => 'Password cannot be empty',
            'Pass.required' => 'Confirm cannot be empty',
        ]);
        
        $account = [
            'Name' => $request->Name,
            'Email' => $request->Email,
            'password' => Hash::make($request->password),
            'Pass' => Hash::make($request->Pass),
        ];
        User::create($account);
        $infoLogin = [
            'Email' => $request->Email,
            'password' => $request->password
        ];
        if(Auth::attempt($infoLogin)){
            return redirect('user')->with("Welcome", Auth::user()-> Name);
        }else{
            return redirect('register')->withErrors('Email or Password does not valid');
        }
    }
}