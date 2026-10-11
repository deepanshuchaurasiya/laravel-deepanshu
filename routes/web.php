<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\FormController as formcntr;
use App\Http\Controllers\vishalsundariController;
use Illuminate\Http\Request;
use App\Http\Controllers\messageController;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController; // <-- Yahan spelling theek kar di hai

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/type', function () {
    return view('type');
});

//Redirect Route
Route::redirect('/dummyurl','/admin');
Route::view('/hii','hii',['data'=>[1,2,3,4,5,6]]);

Route::view('/Abaut','Abaut'); 

Route::get('/about/hello',function(){
    return view('about');
})->name('about');

Route::get('/add',[GoodController::class,'Good']);
Route::get('/multi',[PraticController::class,'multi']);
Route::controller(GoodController::class)->group(function(){
    Route::get('/add','add');
    Route::get('/multi','multi'); 
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',function(){
        return"Dashboard";
    })->name('dashboard');
    Route::get('/users',function(){
        return"Users";
    });
    Route::get('/product',function(){
        return"Products";
    });
});

//crud Route
Route::get('/form',[crudcontroller::class,'crudform'])->name('form');
Route::post('/crud-post',[crudcontroller::class,'crudPost'])->name('crud-post');
Route::get('/read',[crudcontroller::class,'read'])->name('read');
Route::get('/delete/{id}',[crudcontroller::class,'delete'])->name('delete-post');
Route::get('/get-edit/{id}',[crudcontroller::class,'getEdit'])->name('update-post');

Route::get('/upload-form',[StudentController::class,'uploadform'])->name('upload-form');
Route::post('/upload',[StudentController::class,'upload'])->name('upload');

// Yeh raha aapka naya /view route jo database ka data table me dikhayega
Route::get('/view', [StudentController::class, 'showStudents']);