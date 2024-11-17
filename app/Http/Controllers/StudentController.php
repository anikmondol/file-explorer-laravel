<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    function getStudents(){
        $students = \App\Models\Student::all();
        return view('students',['students'=>$students]);
    }

    // function show(){
    //     return "list of students";
    // }

    // function add(){
    //     return "students add";
    // }

    // function delete(){
    //     return "students delete";
    // }

    // function about($name){
    //     return $name;
    // }

}

