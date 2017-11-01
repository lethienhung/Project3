<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('lecturer.list_student')->with('studentId', DB::table('students')->get());
    }

    public function create($student_id)
    {

    }

    public function storeLecturerMark(Request $request,$student_id)
    {
        
        DB::table('mark')->where('student_id', $student_id)
            ->update([
                'mark_lecturer' => $request->mark,
                'lecturer_id' => Auth::user()->user_id,
                'created_at' => date('Y-m-d H-m-s')
            ]);

        $activity = 'Updated Student\'s results';
        LogsController::logging($activity);

        return redirect('lecturer/intern');
    }
    
    public function storeLecturerEvaluation(Request $rerquest,$student_id)
    {
    
       DB::table('evaluation')->where('student_id', $student_id)
            ->update([
                'content_lecturer' => $request->evaluation,
                'lecturer_id' => Auth::user()->user_id,
                'created_at' => date('Y-m-d H-m-s')
        ]);
    }

    public function storeInstructorMark(Request $request,$student_id)
    {
        
        DB::table('mark')->where('student_id', $student_id)
            ->update([
                'mark_instructor' => $request->mark,
                'instructor_id' => Auth::user()->user_id,
                'created_at' => date('Y-m-d H-m-s')
            ]);

        $activity = 'Updated Student\'s results';
        LogsController::logging($activity);

        return redirect('instructor/intern');
    }
     
    public function storeInstructorEvaluation(Request $request, $student_id)
    {
        DB::table('evaluation')->where('student_id', $student_id)
            ->update([
                'content_instructor' => $request->evaluation,
                'instructor_id' => Auth::user()->user_id,
                'created_at' => date('Y-m-d H-m-s')
            ]);
    }
}
