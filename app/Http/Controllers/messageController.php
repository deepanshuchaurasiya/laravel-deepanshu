<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{
    public function fourth(){
        return view('fourth');
    }
    public function fourthpost(Request $req){
        // return $req->input();
        $req->validate([
            'fathername'=>'required'
        ]);
    }
}
