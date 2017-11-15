<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Matching;

class MatchingController extends Controller
{

    //so khop sinh vien voi cong ty
    public function getStudentCv()
    {
        $period_id = DB::table('periods')->orderBy('id','desc')->first();
        $student_id = DB::table('periods_students')->where('period_id',$period_id->id)->pluck('student_id');
        return DB::table('student_cv')->whereIn('student_cv.student_id',$student_id)->get();
    }

    public function getTopics()
    {
        //$topics = DB::table('topic')->join('topic_skills','topic.topic_id','=','topic_skills.topic_id')->where('topic.quantity','>',0)->where('topic.status','=','Approved')->pluck('topic_id');
        // $topic_id = DB::table('topic_skills')
        // ->join('student_cv_skills','topic_skills.skills_name','=','student_cv_skills.skills_name')
        // ->groupBy('topic_skills.topic_id')->join('topic','topic_skills.topic_id','=','topic.topic_id')
        // ->get();
        return DB::table('topic_skills')
        ->join('student_cv_skills','topic_skills.skills_name','=','student_cv_skills.skills_name')
        ->groupBy('topic_skills.topic_id')->join('topic','topic_skills.topic_id','=','topic.topic_id')
        ->get();
    
    }


    public function matchingFull()
    {
        return view('manager.match');
    }

    public function store(Request $request){
        $company_id = DB::table('topic')->where('topic_id',$request->topic_id)->pluck('representation_id');
        DB::table('assignment')->insert([
            'student_id'=> $request->student_id,
            'topic_id' => $request->topic_id,
            'company_id' => $company_id,
            'representation_id' => $company_id,
            'company_confirm' => 'Pending',
            'status' => 'Approved',
            'intern_management_teacher' => Auth::user()->user_id
        ]);  
    }

}
