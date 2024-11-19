<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{


    function addStudent(Request $request)
    {
        $request->validate([
            'name' => "required | min:5",
            'email' => "required | email",
            'phone' => "required"
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        if ($student) {
            return redirect("list");
        }
    }


    function list()
    {
        $result = Student::paginate(5);

        return view("students", ['students' => $result]);
    }

    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            return redirect("list");
        }
    }


    function edit($id)
    {
        $student = Student::find($id);
        return view("editStudent", ['student' => $student]);
    }


    function editStudent(Request $request, $id){
        $request->validate([
            'name' => "required | min:5",
            'email' => "required | email",
            'phone' => "required"
        ]);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        if ($student->save()) {
            return redirect("list");
        }else{
            echo "update operation failed";
        }

    }


    function search(Request $request){
        $studentsDate = Student::where("name", 'like', "%$request->search%")->get();
        return view("students", ['students' => $studentsDate,"search"=>$request->search]);
    }

    // function getStudents(){
    //     $students = \App\Models\Student::all();
    //     return view('students',['students'=>$students]);
    // }

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
