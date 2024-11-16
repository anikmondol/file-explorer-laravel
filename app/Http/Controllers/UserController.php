<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function getUSer(){
    //     return view('user');
    // }

    // function AboutUSer(){
    //     return "my name is anik mondal. my father name is okhail";
    // }


    /*
    function getUserName($name){
        // return "my name is $name";
        return view("getUser", ["name"=>$name]);
    }
    */

    // function adminLogin()
    // {
    //     return view("admin.about");
    // }

    function userHome(){
        echo "22";
        return view("home");
    }

    function userAbout($name){
        return view("about",['user'=> $name]);
    }


    function adminLogin(){
        echo "admin";
        return view("admin.login");
    }

}
