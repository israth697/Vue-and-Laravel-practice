<?php


namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teachers_save(Request $request){
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            // 'skill' => $request->skill,
        ]);
    }

    public function teachers_list(){
        $teacher = Teacher::all();
        // dd($teacher);
        return response()->json($teacher);
    }

    public function teacher_edit( $id){
        $teacher=Teacher::find($id);
        if ($teacher) {
            return response()->json($teacher);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found'
            ]);
        }
    }

    public function teacher_update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
        ]);
        $teacher = Teacher::find($id);
        if ($teacher) {
            $teacher->update([
                'name' => $request->name,
                'email' => $request->email,
                'gender' => $request->gender,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Student Found'
            ]);
        }
    }

    public function teacher_delete($id){
        $teacher = Teacher::find($id);
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
