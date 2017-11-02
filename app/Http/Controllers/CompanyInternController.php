<?php

namespace App\Http\Controllers;

use App\RepresentationCompany;
use App\Topic;
use App\Students;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyInternController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(RepresentationCompany $rep)
    {
        $repId = $rep->retrieveRepId();
        $topic = DB::table('topic')->where('representation_id',$repId)->get();
        $level = DB::table('level')->get();
        $skills = DB::table('skills')->get();
        
        //$studentsInCompany = DB::table('students')->where('student_id', $student_id)->first();

        //$topics = DB::table('topic')->where('representation_id', Auth::user()->user_id)
          //      ->where('status','=','Approved')->where('quantity','>',0)->get();
        
        // $instructor_id = DB::table('company')->where('representation_id',$repId)->pluck('company_id');
        // $student_id = DB::table('student_instructor_company')->where('')
        $studentWithTopic = DB::table('assignment')->where('assignment.representation_id',$repId)
        ->join('topic','assignment.representation_id','=','topic.representation_id')
        ->groupBy('assignment.student_id')->get();
        
        // $topicIdAssigned = DB::table('assignment')->where('')
        // $topicForStudent = DB::table('topic')->where('topic_id',$topicIdAssigned)->first();
        return view('company.company_intern',compact('topic','level','skills','studentWithTopic'));
    
    }
}