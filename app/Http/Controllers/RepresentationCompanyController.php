<?php

namespace App\Http\Controllers;

use App\RepresentationCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class RepresentationCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($repId)
    {
        $company = DB::table('company')->where('company_id', $repId)->first();
        $representation = DB::table('representation_company')->where('representation_id', $repId)->first();
        return view('company.representation_profile', compact('company', 'representation'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->user_id;
        if ($request->ajax()) {
            DB::table('representation_company')->where('representation_id', $id)->update([
                'representation_id' => Auth::user()->user_id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'position' => $request->position,
                'updated_at' => date('Y-m-d H-m-s')

            ]);

            DB::table('company')->where('company_id', $id)->update([
                'company_name' => $request->company_name,
                'information' => $request->information,
                'address' => $request->address
            ]);
        }
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
