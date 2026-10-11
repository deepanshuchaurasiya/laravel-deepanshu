<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;


class crudcontroller extends Controller
{
    public function crudform(){
        return view('Crud');
    }

    public function crudPost(Request $r){
        $r->validate([
            'name'=>'required',
            'email'=>'required|email|unique:cruds',
            'phone'=>'required|min:9',
            'password'=>'required'
        ]);
        $crud = new Crud;
        $crud->name = $r->name;
        $crud->email= $r->email;
        $crud->phone = $r->phone;
        $crud->password = $r->password;
        $crud->save();
        // return redirect()
        // ->back()
        // ->withSuccess('Data Inserted Succesfully');
        session()->flash('success', 'Data inserted successfully');
        // return redirect()->route('read')->withSuccess("Data Inserted Successfully");
        return redirect()->route('read');

    }
    public function read(){
        $record=Crud::all();
        return $record;
    }
    public function delete($dataid){
        Crud::where('id,$dataid')->delete();
        session()->flash('success','Data Deleted Succesfully');
        return redirect()->back();
    }
    public function update(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phonr'=>'required|min:9',
            'password'=>'requried'
        ]);
        $crud = Crud::find($req->id);
        $crud->name = $req->name;
        $crud->email = $req->email;
        $crud->phone = $req->phone;
        $crud->password = $req->password;
        $crud->save();
        return redirect()->route('read')->with('success','Data Updated Successfully');

    }
}
