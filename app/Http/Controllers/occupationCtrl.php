<?php

namespace App\Http\Controllers;

use App\Models\occupation;
use Illuminate\Http\Request;

class occupationCtrl extends Controller
{
    public function occupation() {
        return view('occupation');
    }

    public function storeOccupation(Request $request) {
        
        $request->validate([
            'occupationName' => 'required|unique:occupations,occupationName,except,id',
        ]);
        
        occupation::create([
            'occupationName' => $request->occupationName,
        ]);
        return redirect('/occupation');
    }
}