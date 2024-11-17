<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


function show(){
    return "students list";
}


function add(){
    return "add new students";
}




    /*
  function show(){
        // return redirect()->to("home/profile");
        return to_route("hm");
    }

    function user(){
        // return redirect()->to("home/profile");
        return to_route("user",["name"=>"anik"]);
    }
*/
}
