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
        return DB::table('student_cv')->rightJoin('student_cv_skills','student_id','=','student_cv_skills.student_id')->get();
    }

    public function getTopic(Type $var = null)
    {
        return DB::table('topic')->rightJoin('topic_skills','topic_id','=','topic_skills.topic_id')->get();
    }

    
}
