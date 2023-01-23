<?php

namespace App\Http\Controllers;
use App\Models\accs; // include Models
use Illuminate\Http\Request;

class registerctrl extends Controller
{
    public function register(){
        return view('register');
    }
    
    public function storeData(Request $request){
        accs::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'password' => $request->password,
            'Pass' => $request->Pass,
        ]);
        return redirect('/user');
    }

    public function show(){
        $accs = accs::all();
        return view('user', compact('accs'));
    }

    public function edit($id){
        $acc = accs::findOrFail($id);
        return view('editData', compact('acc'));
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
    public function delete($id){
        accs::destroy($id);
            return redirect('user');
    }
}
