<?php


namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teachers_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'image' => 'required',
            'skill' => 'required',
        ]);

        $teacher = '';
        if ($request->hasFile('image')) {
            $teacher = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads/', $teacher);
        }
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'image' => $teacher,
            'skill' => json_encode($request->skill),
        ]);
    }

    public function teachers_list()
    {
        $teacher = Teacher::all();
        // dd($teacher);
        return response()->json($teacher);
    }

    public function teacher_edit($id)
    {
        $teacher = Teacher::find($id);
        if ($teacher) {
            return response()->json($teacher);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found'
            ]);
        }
    }

    public function teacher_update(Request $request, $id)
    {
        // dd($request->name);
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'gender' => 'required',
        //     // 'skill' => 'required',
        // ]);
        $teacher_image = '';
        if ($request->hasFile('image')) {
            $teacher_image = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads/', $teacher_image);
        }
        // dd($teacher_image);
        $teacher = Teacher::find($id);
        // dd($teacher);
        if ($teacher) {
            $teacher->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $teacher_image,
                'gender' => $request->gender,
                'skill' => $request->skill,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found'
            ]);
        }
    }

    public function teacher_delete($id)
    {
        $teacher = Teacher::find($id);
        // dd($teacher);
        if ($teacher) {
            $teacher->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Teacher information delete successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'NO Teacher Id Found!!!',
            ], 404);
        }
    }
}
