<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraticeController extends Controller
{
    public function pratice(){
        $a=50;
        $b=30;
        return $a*$b;

    }
}
