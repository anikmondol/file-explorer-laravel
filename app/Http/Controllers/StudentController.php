<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "list of students";
    }

    function add(){
        return "students add";
    }

    function delete(){
        return "students delete";
    }

    function about($name){
        return $name;
    }

}

