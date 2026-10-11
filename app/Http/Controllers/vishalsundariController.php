<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vishalsundariController extends Controller
{
    public function third(){
        return view('third');
    }
    public function thirdpost(Request $req){
        // return $req->input();
        $req->validate([
            'name'=>'required'
        ]);
    }
}
