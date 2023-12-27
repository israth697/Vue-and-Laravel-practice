<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function save(Request $request)
    {

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,

        ]);
    }

    function edit($id)
    {
        $student = Student::find($id);

        if ($student) {
            return response()->json($student);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No student',

            ]);
        }
    }

    function list()
    {
        $student = Student::all();
        return response()->json($student);
    }

    function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Student information delete successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'NO Student Id found!',
            ], 404);
        }
    }
}
