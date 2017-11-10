<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\InternManagementTeacher;
use App\Lecturer;
use App\Mark;
use App\Report;
use App\StudentCv;
use App\Students;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
       
        $users = DB::table('users')->get();
        return view('admin.newusers')->with('users', $users);
    }

    public function grade()
    {

        $grades = DB::table('mark')->paginate(8);
        $student_id = DB::table('mark')->pluck('student_id');
        $student = DB::table('students')->whereIn('student_id', $student_id)->get();

        return view('admin.grade', compact('grades', 'student'));

    }

    public function create()
    {
        return view('admin.newuser');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->user_id = $request->number;
        $user->password = bcrypt($request->number);
        $user->role = $request->role;
        $user->name = $request->name;

        $user->save();

        if ($request->role == 'student') {
            $student = new Students();
            $student->first_name = $request->name;
            $student->email = $request->email;
            $student->student_id = $request->number;

            $student->save();

            $studentCv = new StudentCv();
            $studentCv->email = $request->email;
            $studentCv->student_id = $request->number;
            $studentCv->save();

            $report = new Report();
            $report->student_id = $request->number;
            $report->status = "Đang chờ";
            $report->save();

            $mark = new Mark();
            $mark->student_id = $request->number;
            $mark->save();

            $evaluation = new Evaluation();
            $evaluation->student_id = $request->number;
            $evaluation->save();
        }

        if ($request->role == "lecturer") {
            $lecturer = new Lecturer();
            $lecturer->first_name = $request->name;
            $lecturer->email = $request->email;
            $lecturer->lecturer_id = $request->number;
            $lecturer->save();
        }

        if ($request->role == "manager") {
            $manager = new InternManagementTeacher();
            $manager->first_name = $request->name;
            $manager->email = $request->email;
            $manager->intern_management_teacher_id = $request->number;
            $manager->save();
        }


        return redirect('/admin/users');
    }

    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $userid = $request->user_id;
            DB::table('users')->where('user_id', $userid)->delete();
        }
        return redirect()->back();
    }

    public function insertadmin(){

    


    }
}
