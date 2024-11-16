<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});



Route::get("user-home", [UserController::class, "userHome"]);


// Route::get("user-home", [UserController::class, "userHome"]);
// Route::get("user-about/{name}", [UserController::class, "userAbout"]);
// Route::get("admin-about", [UserController::class, "adminLogin"]);

//  Route::view("/about", 'about');
//  Route::view("/home", 'home');
//  Route::view("/admin", 'admin.login');


// Route::get("user",[UserController::class,'getUSer']);

// Route::get("aboutUser",[UserController::class,'AboutUSer']);

// Route::get("getUser/{name}",[UserController::class,'getUserName']);

// Route::get("admin",[UserController::class,'adminLogin']);


// Route::get('/home', function () {
//     return view('home');
// });


// Route::redirect("/home", "/");


// Route::view("/home", 'home');


// Route::get('/about/{anik}', function ($anik) {
//     // echo $anik;
//     return view('about',['user'=>$anik]);
// });
