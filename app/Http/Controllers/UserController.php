<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class UserController extends Controller
{


    function queries()
    {

        /** get date **/
        // $response = User::all();
        // $response = User::where('name','a')->get;
        // $response = User::where('name', "anik")->first();
        // $response = User::find(1);
        // $response = User::where('name','LIKE',"%r%")->first();
        // $response = User::where('name','LIKE',"%r%")->get();
        // $response = [$response];


        /** insert date **/
        // $response = User::insert([
        //     'name' => "monjoy",
        //     'email' => "monjoy@gmail.com",
        //     'phone' => "124578",
        // ]);
        // if ($response) {
        //     return "insert data";
        // }else{
        //     return "date not insert";
        // }


        /** update date **/
        // $response = User::where('name', 'anik')->update(['name' => 'ritu']);

        // if ($response) {
        //     return "update data";
        // } else {
        //     return "date not update";
        // }

          /** delete date **/
          $response = User::where('id', 10)->delete();

          if ($response) {
              return "delete data";
          } else {
              return "date not delete";
          }



        // return view('users', ['users' => $response]);
    }

    // function queries()
    // {

    /** get data **/
    // $result = DB::table('users')->get();
    // $result = DB::table('users')->where('name', 'joy')->get();
    // $result =DB::table('users')->find(2);
    // $result = DB::table('users')->first();
    // $result =[$result];


    /** get insert data **/
    // $result = DB::table('users')->insert([
    //     'name' => "anik",
    //     'email' => "ak@gmail.com",
    //     'phone' => '01235477'
    // ]);

    // if ($result) {
    //     return "insert data";
    // }else{
    //     return "date not insert";
    // }


    /** get update data **/
    // $result = DB::table('users')->where('id', 8)->update(['name'=>'ritu']);

    // if ($result) {
    //     return "update data";
    // }else{
    //     return "date not update";
    // }


    /** data delete **/
    //   $result = DB::table('users')->where('id', 7)->delete();

    //   if ($result) {
    //       return "delete data";
    //   }else{
    //       return "date not delete";
    //   }


    // return view('users',['users'=>$result]);
    // }


    // function getUser(){

    //     $response = Http::get('https://jsonplaceholder.typicode.com/users');
    //     return $response;
    //      $response->body();
    //     return $response->status();
    //     return $response->headers();
    //     return view("users", ['users'=> json_decode($response)]);
    // }

    // function users(){
    //     $users = DB::select("select * from users");
    //     return view('users', ['users'=>$users]);
    // }


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
