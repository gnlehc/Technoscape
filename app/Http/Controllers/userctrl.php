<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userctrl extends Controller
{
    public function user(){
        return view("user");
    }
    public function edit($id){
        $accs = accs::findOrFail($id);
        return view('editData', compact('accs'));
    }
    public function update(Request $request, $id){
        accs::findOrFail($id)->update([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'password' => $request->password,
            'Pass' => $request->Pass,
        ]);
        return redirect('/user');
    }
}
