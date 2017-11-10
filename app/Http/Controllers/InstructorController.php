<?php

namespace App\Http\Controllers;

use App\Company;
use App\InstructorCompany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($instructorId)
    {
        $countStudent = DB::table('student_instructor_company')->where('instructor_id', $instructorId)->count();
        $idCom = DB::table('instructor_company')->where('instructor_id', '=', $instructorId)->first();
        return view('instructor.instructor_profile', compact('countStudent'))->with('instructor', InstructorCompany::where('instructor_id', '=', $instructorId)->first())
            ->with('company', DB::table('company')
                ->join('instructor_company', 'instructor_company.company_id', '=', 'company.company_id')
                ->where('company.company_id', '=', $idCom->company_id)->first())
            ->with('students', DB::table('students')
                ->join('student_instructor_company', 'students.student_id', '=', 'student_instructor_company.student_id')
                ->where('student_instructor_company.instructor_id', '=', $instructorId));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = Auth::user()->user_id;
        if ($request->ajax()) {
            DB::table('instructor_company')->where('instructor_id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'about_me' => $request->about_me,
                'updated_at' => date('Y-m-d H-m-s')

            ]);
        }

        $activity = 'Updated by An Instructor';
        LogsController::logging($activity);
        return redirect()->back();
    }

}
