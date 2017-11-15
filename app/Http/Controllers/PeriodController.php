<?php

namespace App\Http\Controllers;

use App\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PeriodController extends Controller
{
    //
    public function index()
    {
        $periods = DB::table('periods')->get();

        return view('period.periods')->with('periods', $periods);
    }

    public function create()
    {
        return view('period.create');
    }

    public function store(Request $request)
    {
        $maxId = DB::table('periods')->max('id');
        $periodsId = $maxId + 1;
        Period::create([
            'name' => $request->name,
            'id' => $periodsId,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $activity = 'Created An Internship Period';
        LogsController::logging($activity);

        return redirect('periods');
    }

    public function fetchStudentNotInPeriods($period_id)
    {
        $student_in_period = DB::table('periods_students')->where('period_id',$period_id)->pluck('student_id');
       return DB::table('students')->whereNotIn('student_id',$student_in_period)->get();
            
    }

    public function fetchStudentInPeriods($period_id)
    {
        $student_in_period = DB::table('periods_students')->where('period_id',$period_id)->pluck('student_id');
        return DB::table('students')->whereIn('student_id',$student_in_period)->get();
        
    }

    public function getPeriod($period_id)
    {

        $studentsInPeriod = DB::table('students')
            ->join('periods_students', 'students.student_id', '=', 'periods_students.student_id')
            ->where('periods_students.period_id', $period_id)
            ->select('students.*')
            ->get();

        $students = DB::table('students')
            ->leftJoin('periods_students', 'students.student_id', '=', 'periods_students.student_id')
            ->where('periods_students.student_id', null)
            ->select('students.*')
            ->get();

        return view('period.period')
            ->with('studentsInPeriod', $studentsInPeriod)
            ->with('period_id', $period_id)
            ->with('students', $students);
    }

    public function addStudentToPeriod(Request $request)
    {   
        
            DB::table('periods_students')->insert([
                'period_id' => $request->period_id,
                'student_id' => $request->student_id,
                'instructor_mark'=> '',
                'instructor_id' => '',
                'lecturer_mark' => '',
                'lecturer_id' => '',
            ]);
            
        
    }
}
