<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homectrl extends Controller
{
    public function home(){
        return view("home");
    }
}
