<?php

namespace App\Http\Controllers;

use App\RepresentationCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyAssignController extends Controller
{

    public function index()
    {
        $company_id = Auth::user()->user_id;
        return DB::table('assignment')->where('assignment.representation_id',$company_id)
        ->join('topic','assignment.representation_id','=','topic.representation_id')
        ->groupBy('assignment.student_id')->get();
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
    public function pickStudent(Request $request,$student_id)
    {
        if ($request->ajax()) {
            /* Get Company ID */
            $representation = DB::table('representation_company')->where('representation_id', Auth::user()->user_id)->first();
            $company_id = $representation->company_id;
            /* Get Topic ID */
            $topic_id = $request->topic_id;

            DB::table('assignment')->insert([
                'student_id' => $student_id,
                'company_id' => $company_id,
                'topic_id' => $topic_id,
                'representation_id' => Auth::user()->user_id,
                'company_confirm' => "Approved",
                'status' => "Pending"
            ]);
        }
    }


    public function show()
    {
  
      
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
            DB::table('assignment')->where('student_id', $request->student_id)->update(['status' => "Declined"]);
        
    }

}
