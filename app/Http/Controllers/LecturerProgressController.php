<?php

namespace App\Http\Controllers;

use App\InstructorCompany;
use App\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LecturerProgressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Lecturer $lecturerId, InstructorCompany $instructorId)
    {
        //$students = DB::table('assignment')->join('marking')
        
        return view('lecturer.student_list', compact('lecturer_id', 'studentId', 'studentIds'));

    }

    public function internPeriod($period_id)
    {
        # code...
        $student_id = DB::table('periods_students')->where('period_id',$period_id)->pluck('student_id');
        $studentInThisPeriod = DB::table('students')->whereIn('student_id',$student_id)->get();
        return view('lecturer.student_list',compact('studentInThisPeriod'));
    }

    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Lecturer::create(request()->all());

        return redirect()->back;
    }
}
