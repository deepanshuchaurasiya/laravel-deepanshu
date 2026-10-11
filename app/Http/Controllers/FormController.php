<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getform(){
        return view('form');
    }

    public function formHandle(Request $req){
        // return $req->input();
        $req->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:8|max:15',
        'c_password'=>'required|same:password',

        ]);
        return $req->input();
    }
    public function second(){
        return view('second');
    }

    public function secondpost(Request $req){
        // return $req->input();
        $req->validate([
            'name'=>'required'
        ]);
    }
   
}
