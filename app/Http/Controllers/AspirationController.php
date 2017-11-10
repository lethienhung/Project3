<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class AspirationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = DB::table('students')->join('aspiration', 'students.student_id', '=', 'aspiration.student_id')->get();
    }


    public function create()
    {
        $student = DB::table('students')->where('student_id', Auth::user()->user_id)->first();
        return view('company.studentapply')->with('student', $student);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company_id = DB::table('topic')->where('topic_id', $request->topic_id)->first();
        DB::table('aspiration')->insert([
            'student_id' => Auth::user()->user_id,
            'topic_id' => $request->topic_id,
            'company_id' => $company_id->representation_id
        ]);
        DB::table('assignment')->insert([
            'student_id' => Auth::user()->user_id,
            'intern_management_teacher_id' => '',
            'company_id' => $company_id->representation_id,
            'topic_id' => $request->topic_id,
            'representation_id' => $company_id->representation_id,
            'company_confirm' => 'Pending',
            'status' => 'Pending'
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
