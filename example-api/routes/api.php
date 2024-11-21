<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MemberController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/test", function () {
    return ['name' => "anik", "age" => 25];
});

Route::get('students', [StudentController::class, 'list']);


Route::post('add-student', [StudentController::class, 'addStudent']);

Route::put('update-student', [StudentController::class, 'updateStudent']);

Route::delete('delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::get('search/{name}', [StudentController::class, 'searchStudent']);

Route::resource('member', MemberController::class);
