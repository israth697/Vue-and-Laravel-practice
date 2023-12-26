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

    function list(){
        $student=Student::all();
         return response()-> json($student);
        
    }

}
