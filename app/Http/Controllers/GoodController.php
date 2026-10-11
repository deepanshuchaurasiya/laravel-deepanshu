<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodController extends Controller
{
    // public function Good(){
    //     $a=50;
    //     $b=30;
    //     return $a+$b;

    // }
    public function Good(){
        $a=50;
        $b=30;
        return $a*$b;

    }
}
