<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\View;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{



    function users(){
        $users = DB::select("select * from users");
        return view('users', ['users'=>$users]);
    }


    // function addUser(Request $request)
    // {

    //     $request->validate([
    //         'name'=>"required | min:5",
    //         'email'=>"required | email",
    //         'city'=>"required | Uppercase"
    //     ],[
    //         'name.required' => "user name can not be empty",
    //         'name.min' => "the user name filed must be at least 5 characters",
    //         'city.Uppercase' => "city field must be anik",
    //     ]);

    //     return $request;

    // }


    // function addUser(Request $request)
    // {
    //      echo "add user";
    //      return $request["name"];
    //    print_r($request->skill);

    // }

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

    // function userHome()
    // {
    //     $name = "anik";
    //     $arr = [11, 22, 6, 4];
    //     return view("home", ['name'=> $name, 'arr'=>$arr]);
    // }

    // function userHome()
    // {
    //     return view("home");
    // }

    // function userAbout(){
    //     return view("about");
    // }



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
