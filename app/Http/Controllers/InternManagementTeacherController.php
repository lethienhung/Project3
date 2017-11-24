<?php

namespace App\Http\Controllers;

use App\InternManagementTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InternManagementTeacherController extends Controller
{
    //
    public function index($managerid)
    {
        $manager = DB::table('intern_management_teacher')->where('intern_management_teacher_id', '=', $managerid)->first(); 

        return view('manager.managerinfo', compact('manager'));

    }

    public function create(InternManagementTeacher $manager)
    {
        $id = $manager->retrieveManagerId();
        $managementTeacher = InternManagementTeacher::where('intern_management_teacher_id', '=', $id)->get();

        return view('manager.managementteacher', compact('managementTeacher'));
    }

    public function store(Request $request)
    {
        $id = Auth::user()->user_id;
        $date = explode('/', request('date_of_birth'));
        $year = $date[2];
        $month = $date[1];
        $day =  $date[0];
        $date_of_birth = $year.'-'.$month.'-'.$day;
        DB::table('intern_management_teacher')->where('intern_management_teacher_id', '=', $id)->update([
            'intern_management_teacher_id' => Auth::user()->user_id,
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'gender' => request('gender'),
            'date_of_birth' => $date_of_birth,
            'email' => request('email'),
            'phone_number' => request('phone_number'),
            'updated_at' => date('Y-m-d H-m-s')

        ]);
        return redirect()->back();
    }

    public function changepassword(Request $request){
        $id = Auth::user()->user_id;
        $pw = bcrypt($request->currentpassword);
        $user = DB::table('users')->where('user_id', '=', $id)->first();
        if($pw == $user->password){
            DB::table('users')->where('user_id', '=', $id)->update([
                'user_id' => Auth::user()->user_id,
                'password' => bcrypt($request->newpassword)
            ]);
        }
    }
}
