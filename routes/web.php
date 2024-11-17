<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::view("home/profile", 'home')->name('hm');
Route::view("home/profile/{name}", 'home')->name('user');


Route::get("show", [HomeController::class,'show']);
Route::get("user", [HomeController::class,'user']);

// Route::view("home", 'home');
// Route::view("about", 'about');
// Route::view("about/{name}", 'about');



// Route::view("user-form", 'user-form');
// Route::post("addUser", [UserController::class, "addUser"]);


// Route::view("/user-form", 'user-form');
// Route::post("addUser", [UserController::class, "addUser"]);


// Route::get("user-home", [UserController::class, "userHome"]);

// Route::get("user-about", [UserController::class, "userAbout"]);


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
