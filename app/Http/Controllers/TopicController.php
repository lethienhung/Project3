<?php

namespace App\Http\Controllers;

use App\RepresentationCompany;
use App\Topic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($topicId)
    {
        $company_id = DB::table('representation_company')->join('topic', 'representation_company.representation_id', '=', 'topic.representation_id')
            ->where('topic.topic_id', '=', $topicId)->pluck('company_id');
        $other_topic = DB::table('topic')->where('representation_id','=',$company_id)->take(6)->get();
        return view('topic.topic_detail',compact('other_topic'))->with('topic_id', Topic::where('topic_id', '=', $topicId)->first())
            ->with('company', DB::table('company')
                ->join('representation_company', 'representation_company.company_id', '=', 'company.company_id')
                ->where('representation_company.company_id', '=', $company_id)->first())
            ->with('topic_skills', DB::table('topic')
                ->join('topic_skills', 'topic.topic_id', '=', 'topic_skills.topic_id')
                ->where('topic.topic_id', '=', $topicId)->get())
            ->with('topic_field', DB::table('field')
                ->join('topic_field', 'topic_field.field_name', '=', 'field.name')
                ->where('topic_field.topic_id', '=', $topicId)->get());


    }

    public function create(RepresentationCompany $rep)
    {
        
    }

    public function store(Request $request)
    {

        $skills = array();
        $level = array();
        array_push($skills,$request->skill1);
        array_push($skills,$request->skill2);
        array_push($skills,$request->skill3);
        array_push($level,$request->level1);
        array_push($level,$request->level2);
        array_push($level,$request->level3);

        $now = Carbon::now();
        $secretKey = $now . $request->email;
        $phone_number = $request->phone_number;
        $hashTopicId = hash_hmac('sha1', $phone_number, $secretKey);
        $topicId = strtoupper(substr($hashTopicId, 0, 6));

        DB::table('topic')->insert([
            'topic_id'=> $topicId,
            'title' => $request->title,
            'email' => $request->email,
            'documentation' =>$request->documentation,
            'quantity' => $request->quantity,
            'phone_number' => $request->phone_number,
            'position' => $request->position,
            'salary' => $request->salary,
            'priority' => $request->priority,
            'content' => $request->content,
            'otherRequire' => $request->other_require,
            'representation_id' => Auth::user()->user_id,
            'status' => "Pending",
            'created_at' => $now
        ]);

    
        foreach($skills as $sk){
            $lv1 = $level[0];
            DB::table('topic_skills')->insert([
                'topic_id' => $topicId,
                'skills_name' => $sk,
                'level_name'=> 'Advanced'
            ]);
            DB::table('topic_skills')->where('topic_id',$topicId)->where('skills_name', $sk)->update([
                'level_name'=> $lv1
                
            ]);
            array_splice($level, 0, 1);
            unset($lv1);
        }

        DB::table('topic_field')->insert([
            'field_name' => $request->field_name,
            'topic_id' => $topicId,
            'created_at' => $now
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {

        return view('showtopic', compact('topic'));
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
        //
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
