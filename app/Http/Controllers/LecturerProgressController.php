<?php

namespace App\Http\Controllers;

use App\InstructorCompany;
use App\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LecturerProgressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        //$students = DB::table('assignment')->join('marking')
        $periods = DB::table('periods')->get();
        return view('lecturer.periods_list', compact('periods'));

    }

    public function internPeriodStudents($period_id)
    {
        # code...
        $student_id = DB::table('periods_students')->where('period_id',$period_id)->pluck('student_id');
        $studentInThisPeriod = DB::table('students')->whereIn('student_id',$student_id)->get();
        return view('lecturer.student_list',compact('studentInThisPeriod','period_id'));
    }

    public function studentMark()
    {
        $periodId = DB::table('periods')->orderBy('id','desc')->first();
        $listStudent = DB::table('periods_students')
                    ->join('students','periods_students.student_id','=','students.student_id')
                    ->where('period_id',$periodId->id)->get();
        return view('lecturer.list_student_mark',compact('listStudent'));

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
