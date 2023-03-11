<?php

namespace App\Http\Controllers;
use App\Models\accs; // include Models
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class registerctrl extends Controller
{
    public function register(){
        return view('register');
    }
    
    // public function storeData(Request $request){
    //     accs::create([
    //         'Name' => $request->Name,
    //         'Email' => $request->Email,
    //         'password' => $request->password,
    //         'Pass' => $request->Pass,
    //     ]);
    //     return redirect('/login');
    // }

    // public function show(){
    //     $accs = accs::all();
    //     return view('user', compact('accs'));
    // }

    // public function edit($id){
    //     $acc = accs::findOrFail($id);
    //     return view('editData', compact('acc'));
    // }
    // public function update(Request $request, $id){
    //     accs::findOrFail($id)->update([
    //         'Name' => $request->Name,
    //         'Email' => $request->Email,
    //         'password' => $request->password,
    //         'Pass' => $request->Pass,
    //     ]);
    //     return redirect('/user');
    // }
    // public function delete($id){
    //     accs::destroy($id);
    //         return redirect('user');
    // }

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
        if(Auth::attempt($account)){
            return redirect('dashboard')->with("Welcome", Auth::user()-> name);
        }else{
            return redirect('register')->withErrors('Email or Password does not valid');
        }
    }
}