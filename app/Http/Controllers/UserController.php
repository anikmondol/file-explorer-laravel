<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\View;

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

    function userHome()
    {
        $name = "anik";
        $arr = [11, 22, 6, 4];
        return view("home", ['name'=> $name, 'arr'=>$arr]);
    }

    function userAbout(){
        return view("about");
    }


    // function adminLogin(){
    //     if (view()->exists('admin.login'))
    //     {
    //         echo "admin";
    //         return view("admin.login");
    //     }else{
    //         echo "no";
    //     }
    // }

}
