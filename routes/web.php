<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("user",[UserController::class,'getUSer']);

Route::get("aboutUser",[UserController::class,'AboutUSer']);

Route::get("getUser/{name}",[UserController::class,'getUserName']);

Route::get("admin",[UserController::class,'adminLogin']);




// Route::get('/home', function () {
//     return view('home');
// });


// Route::redirect("/home", "/");


// Route::view("/home", 'home');


// Route::get('/about/{anik}', function ($anik) {
//     // echo $anik;
//     return view('about',['name'=>$anik]);
// });
