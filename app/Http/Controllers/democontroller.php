<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    public function test(){
        return "hello this is  first controller";
    }
    public function hello(){
        return"To kaise ha aap saab";
    }
    public function showUi(){
        return view('about');
    }
}

