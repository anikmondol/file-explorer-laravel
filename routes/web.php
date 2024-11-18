<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});


// Route::view("users", 'users');
// Route::post("add", [UserController::class, 'addUser']);

// Route::view("login", 'login');
// Route::view("profile", 'profile');

// Route::post("login", [UserController::class, 'login']);
// Route::get("logout", [UserController::class, 'logout']);


// Route::post("users", [UserController::class, 'login']);

// Route::view("form", 'users');


// Route::any('users',[UserController::class,'any']);
// Route::match(['post', 'get'],'/users',[UserController::class, 'group1']);
// Route::match(['put', 'delete'],'/users',[UserController::class, 'group2']);


// Route::delete("users", [UserController::class, 'delete']);
// Route::patch("users", [UserController::class, 'patch']);
// Route::put("users", [UserController::class, 'put']);
// Route::post("users", [UserController::class, 'post']);
// Route::get("users", [UserController::class, 'get']);
// Route::view("form", 'users');


// Route::get("user", [UserController::class, 'queries']);


// Route::get("users", [UserController::class, 'queries']);


// Route::get('users',[UserController::class,'getUser']);



// Route::get('getStudents',[StudentController::class,'getStudents']);


// Route::get('users',[UserController::class,'users']);

// Route::view("home", 'home')->middleware(AgeCheck::class,CountryCheck::class);
// Route::view("about", 'about')->middleware(AgeCheck::class);



// Route::view("home", 'home')->middleware('check1');
// Route::view("home", 'home');
// Route::view("about", 'about');

// Route::middleware('check1')->group(function () {
//     Route::view("home", 'home');
//     Route::view("about", 'about');
// });




// Route::controller(StudentController::class)->group(function(){
//     Route::get("show",'show');
//     Route::get("add", 'add');
//     Route::get("delete", 'delete');
//     Route::get('about/{name}', 'about');
// });


// Route::get('about/{name}', [StudentController::class,'about']);

// Route::prefix('student')->group(function(){
//     Route::view("/home", 'home');
//     Route::get("/show", [HomeController::class, 'show']);
//     Route::get("/add", [HomeController::class, 'add']);
// });




// Route::view("home/profile", 'home')->name('hm');
// Route::view("home/profile/{name}", 'home')->name('user');


// Route::get("show", [HomeController::class,'show']);
// Route::get("user", [HomeController::class,'user']);

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
