<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // <-- Correct Model import

class StudentController extends Controller
{
    // 1. Yeh naya function add kar diya jo database ka data view par bhechega
    public function showStudents() {
        $students = Student::all(); // Database ki 'student' table se data aayega
        return view('view', compact('students'));
    }

    // Aapke purane upload functions safe hain
    public function uploadForm(){
        return view('upload');
    }

    public function upload(Request $req){
        $req->validate([
            'file*'=>'required|max:2048|mimes:jpg,png,jpeg,webg,gif,pdf',
        ]);
        
        foreach($req->file as $item){
            $name[] = $item->store('image','public');
        }
        return view('image-show',['image'=>$name]);
    }
}