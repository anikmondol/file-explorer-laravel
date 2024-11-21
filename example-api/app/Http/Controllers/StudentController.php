<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //
    function list()
    {
        return Student::all();
    }

    function addStudent(Request $request)
    {

        $rules = array(
            'name' => 'required | min:2 | max:10',
            'email' => 'email | required',
            'phone' => 'required',

        );

        $vallation = Validator::make($request->all(), $rules);

        if ($vallation->fails()) {
            return $vallation->errors();
        } else {
            $student = new Student();

            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;

            if ($student->save()) {
                return ["result" => "student added"];
            } else {
                return ["result" => "operation failed"];
            }
        }
    }


    function updateStudent(Request $request)
    {

        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        if ($student->save()) {
            return ["result" => "student update"];
        } else {
            return ["result" => "student update failed"];
        }
    }

    function deleteStudent($id)
    {
        $student = Student::destroy($id);

        if ($student) {
            return ["result" => "student delete"];
        } else {
            return ["result" => "student delete failed"];
        }
    }

    function searchStudent($name)
    {

        $student = Student::where('name', 'like', "%$name%")->get();

        if ($student) {
            return ["result" => $student];
        } else {
            return ["result" => "No date found"];
        }
    }
}
