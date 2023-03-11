<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userctrl extends Controller
{
    public function user(){
        return view("user");
    }

    public function show(){
        $users = User::all();
        return view('user', compact('users'));
    }

    public function edit($id){
        $users = User::findOrFail($id);
        return view('editData', compact('users'));
    }
    public function update(Request $request, $id){
        User::findOrFail($id)->update([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'password' => $request->password,
            'Pass' => $request->Pass,
        ]);
        return redirect('/user');
    }
    public function delete($id){
        User::destroy($id);
            return redirect('user');
    }
}