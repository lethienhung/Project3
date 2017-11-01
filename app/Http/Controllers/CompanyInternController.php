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
        // $instructor_id = DB::table('company')->where('representation_id',$repId)->pluck('company_id');
        // $student_id = DB::table('student_instructor_company')->where('')
        // $studentInCompany = DB::table('students')->whereIn('student_id',$student_id)->get();
        return view('company.company_intern',compact('topic','level','skills'));
    
    }
}