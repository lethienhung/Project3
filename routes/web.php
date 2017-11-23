<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/makedb/', function () {
    App\Period::create([
        'name' => 'Thuc tap 2',
        'start_date' => '17/11/2017',
        'end_date' => '19/1/2018'
    ]);
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/home', function () {

    return view('homepage');
});

Route::get('aboutus', function () {

    return view('aboutus');
});
Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});

/** All users */
Route::group(['middleware' => ['auth']], function () {
    //Topic info - Done
    Route::get('/topic/{topic_id}', 'TopicController@index');
    Route::get('/topic', 'ListTopicController@index');
    Route::get('/loadmore', 'ListTopicController@loadMore');

    //Student Profile with marking history - Done
    Route::get('student/profile/{id}', 'StudentsController@index');
    //Student Intern Process - done
    Route::get('/student/intern/{student_id}', 'InternProcessController@show');
    //Student CV - Done
    Route::get('/student/cv/{student_id}', 'StudentCvController@index');


    // search
    //Route::get('/search', 'SearchController@index');
    Route::post('/search/input', 'SearchController@checkInput');
    Route::get('/search', function(){
        return view('search.search');
    });

    //Download report
    Route::get('/download/{filename}','ReportController@getDownload');

});

/** Admin */
Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/admin', 'AdminController@indexDashboard');
    Route::get('/admin/post', 'LogsController@index');
    //Information about user
    Route::get('/admin/users', 'UserController@index');
    Route::post('/admin/users', 'UserController@store');

    //points
    Route::get('points', function () {
        return view('admin.point_manage');
    });

    Route::get('points/student', function(){
        return view('admin.point');
    });

    Route::get('points/student/mark', function(){
        return view('lecturer.mark_period');
    });

    //grade
    Route::get('/admin/grade', 'UserController@grade');

    //Create User - Done
    Route::get('/admin/users/create', 'UserController@create');
    Route::post('/admin/users/create', 'UserController@store');
    
    //
    Route::get('/notice', 'NoticeEmailController@create');
    Route::get('/failed/test', 'FailedController@destroy');

    Route::get('admin/destroy', 'UserController@destroy');

});

/** Representation - Done - Checked!  */
Route::group(['middleware' => ['auth', 'company']], function () {

    //Representation and Company profile  - done
    Route::get('/company/representation/{representation_id}', 'RepresentationCompanyController@index');
    Route::post('/company/representation/{representation_id}', 'RepresentationCompanyController@store');

    //Create Topic- done
    Route::get('/company/intern/', 'CompanyInternController@index');
    Route::post('/company/topic/create', 'TopicController@store');

    // approve/decline student - done
    Route::resource('/get/assignment', 'CompanyAssignController');
    Route::get('/company/assign', 'CompanyAssignController@create');//Fetch data student assigned to company 
    Route::post('/company/assign/approve/{student_id}', 'CompanyAssignController@update');
    Route::post('/company/assign/decline/{student_id}', 'CompanyAssignController@destroy');
    Route::post('/company/assign/pick/{student_id}', 'CompanyAssignController@pickStudent');
    //register account for instructor - done
    Route::get('/company/instructor/create', 'CompanyController@createInstructor');
    Route::post('/company/instructor/create', 'CompanyController@storeInstructor');


});

/** Instructor - Done - CHECKED*/
Route::group(['middleware' => ['auth', 'instructor']], function () {

    //Dashboard
    Route::get('/instructor', 'InstructorController@dashboard');

    //Instructor outline management - Done
    Route::get('/instructor/outline/{topicId}', 'OutlineController@createOutline');
    Route::post('/instructor/outline/store', 'OutlineController@store');
    Route::post('/instructor/outline/work/done', 'OutlineController@workDone');
    Route::post('/instructor/outline/work/fail', 'OutlineController@workFail');
    Route::get('/instructor/manage/{student_id}', 'OutlineController@internManage');

    //Instructor profile - Done
    Route::get('instructor/profile/{instructor_id}', 'InstructorController@index');
    Route::post('instructor/update/profile', 'InstructorController@store');
    //Instructor Timekeeping
    //Route::get('instructor/timekeeping', 'TimeKeepingController@index');
    Route::get('instructor/time-keeping/{student_id}', 'InstructorProgressController@create');
    Route::post('instructor/internship', 'InstructorProgressController@store');

    //intern progress - Done
    Route::get('/instructor/topic/manage','InstructorProgressController@topicManage');
    Route::get('/instructor/intern', 'InstructorProgressController@index');
    Route::post('/instructor/mark/{student_id}', 'MarkingController@storeInstructorMark');
    Route::post('/instructor/evaluate/{student_id}', 'MarkingController@storeInstructorEvaluation');

    //Mark
    Route::get('instructor/mark', function(){
        return view('instructor.mark');
    });
});

/** Student - DONE - CHECKED */
Route::group(['middleware' => ['auth', 'student']], function () {

    Route::get('/student', function(){
        return view('student.studentdashboard');
    });

    //Student Profile -done
    
    Route::get('student/create/profile', 'StudentsController@create');
    Route::post('student/profile/update', 'StudentsController@store');
    Route::post('/dropzone', 'StudentsController@upload');
    //Student CV - done
    Route::get('student/cv/{studentId}', 'StudentCvController@create');
    Route::post('student/cv/update', 'StudentCvController@store');

    //Student Aspiration- Done
    Route::post('/student/sendCv/{student_id}', 'AspirationController@store');

    //Student Report-done
    Route::post('/upload/report', 'ReportController@uploadReport');
    Route::post('/report/submit', 'ReportController@submitReport');

    //student feedback - done
    Route::get('contact',
        ['as' => 'contact', 'uses' => 'FeedbackController@create']);
    Route::post('contact',
        ['as' => 'feedback', 'uses' => 'FeedbackController@store']);


});

/** Manager */
Route::group(['middleware' => ['auth', 'manager']], function () {

    Route::get('manager', function(){
        return view('manager.managerdashboard');
    });

    /* Matching */
    Route::get('/match', 'MatchingController@matchingFull');
    Route::get('/parser/approve', 'MatchingController@store');
    Route::get('/parser/decline', 'MatchingController@destroy');
    Route::get('/fetchstudentslist','MatchingController@getStudentCv');
    Route::get('/fetchtopicslist', 'MatchingController@getTopics');
    /* Assign Student */
    Route::get('/assign', 'AssignmentController@store');
    

    //Periods - done
    Route::get('/fetch/student/{period_id}', 'PeriodController@fetchStudentNotInPeriods'); //fetch student not in period
    Route::get('/get/student/{period_id}', 'PeriodController@fetchStudentInPeriods'); //fetch student has assign to a period
    Route::get('periods', 'PeriodController@index');
    Route::get('period/{period_id}', 'PeriodController@getPeriod');
    Route::get('periods/create', 'PeriodController@create');
    Route::post('periods/create', 'PeriodController@store');
    Route::post('period/add', 'PeriodController@addStudentToPeriod');

    //Profile
    Route::get('/manager/profile', 'InternManagementTeacherController@index');

    //topic approved/decline - Done
    Route::get('manager/topics', 'TopicCensorController@create');
    Route::get('manager/topics/approve/', 'TopicCensorController@update');
    Route::get('manager/topics/decline/', 'TopicCensorController@destroy');

});

/** Lecturer */
Route::group(['middleware' => ['auth', 'lecturer']], function () {
    //Lecturer Dashboard - done
    Route::get('/lecturer', function(){
        return view('lecturer.lecturerdashboard');
    });
    //Lecturer Profile
    Route::get('/lecturer/profile/{lecturer_id}', 'LecturerController@index');
    Route::post('/lecturer/profile/{lecturer_id}', 'LecturerController@store');

    //Lecturer check mark history - Done
    Route::get('/lecturer/mark','LecturerProgressController@studentMark');
    Route::get('/lecturer/intern', 'LecturerProgressController@index');
    Route::get('/lecturer/intern/{period_id}', 'LecturerProgressController@internPeriodStudents');
    
    //Lecturer Marking
    Route::post('lecturer/intern/', 'MarkingController@store');

});

