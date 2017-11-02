<?php

namespace App\Http\Controllers;

use App\RepresentationCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyAssignController extends Controller
{

    public function index($student_id)
    {
        
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
        if ($request->ajax()) {
            $student_id = $request->student_id;
            $topic_id = $request->topic_id;
            DB::table('assignment')->where('student_id', $student_id)->update([
                'topic_id' => $topic_id,
                'company_confirm' => "Approved"
            ]);
        }
    }


    public function show()
    {
        //
        $students = DB::table('students')
            ->join('aspiration', 'students.student_id', '=', 'aspiration.student_id')->paginate(10);
        return view('company.choosestudent')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$student_id)
    {
        if ($request->ajax()) {
            DB::table('assignment')->where('student_id', '=', $student_id)->update(['company_confirm' => "Approved"]);
            /* Declare variables */
            $id = Auth::user()->user_id;
            $instructor = DB::table('instructor_company')->where('company_id',$id)->first();
            DB::table('student_instructor_company')
                ->insert([
                    'instructor_id' => $instructor->instructor_id,
                    'student_id' => $student_id
                ]);
            DB::table('topic')->where('topic_id', '=', $topic_id)->decrement('quantity',1);


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            DB::table('assignment')->where('student_id', $request->student_id)->update(['status' => "Declined"]);
        }
    }

}
