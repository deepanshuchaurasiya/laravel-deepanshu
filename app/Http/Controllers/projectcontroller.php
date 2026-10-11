<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    public function fivepost(Request $req){
        // return $req->input();
        $req->validate([
        'name'=>'required',
        'email'=>'required|email',
        ]);
        return $req->input();
    }
}
