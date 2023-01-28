<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class paymentctrl extends Controller
{
    public function payment(){
        return view("payment");
    }
    public function storePay(Request $request){

        $validated = $request->validate([
            // 'Name' => 'required|unique',
            'image' => 'required|mimes:jpg,png'
        ]);

        $extension = $request->file('image')->getClientOriginalExtension();
        // $filename = $request->file('image')->getClientOriginalName();
        $filename = $request->judul . '_' . $request->LName . '.' . $extension;
        $request->file('image')->storeAs('/public/paymentImage/', $filename);
        image::create([
            'Name' => $request->Name,
            'LName' => $request->LName,
            'Email' => $request->Email,
            'cardNum' => $request->cardNum,
            'image' => $filename
        ]);
        return redirect('/payflow');
    }
    public function show(){
        $images = image::all();
        return view('payflow', compact('images'));
    }
    public function editPay($id){
        $img = image::findOrFail($id);
        return view('editPay', compact('img'));
    }
    public function updatePay(Request $request, $id){
        image::findOrFail($id)->update([
            'Name' => $request->Name,
            'LName' => $request->LName,
            'Email' => $request->Email,
            'cardNum' => $request->cardNum,
            'image' => $request->image,
        ]);
        return redirect('/payflow');
    }
    public function deletePay($id){
        image::destroy($id);
            return redirect('payflow');
    }
}
