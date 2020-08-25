<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Career;
use DB;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $careers = DB::table('careers AS t')
        ->join('branches', 't.branch_id', '=', 'branches.id')
        ->select('t.*', 'branches.name', 'branches.address','branches.officer_in_charge')
        ->get();
        return view('careers.index')->with('careers',$careers);
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required',
            'education'   => 'required',
            'status'      => 'required',
            'gender'      => 'required',
            'age'         => 'required',
            'description' => 'required',
        ]);

        // Create Careers
        $career = new Career;
        $career->title = $request->input('title');
        $career->education = $request->input('education');
        $career->status = $request->input('status');
        $career->gender = $request->input('gender');
        $career->age_range = $request->input('age');
        $career->description = $request->input('description');
        $career->branch_id = $request->input('branches');
        $career->created_by = auth()->user()->name;
        $career->save();

        return redirect('/dashboard/careers')->with('success', 'Career Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::find($id);
        return view('careers.edit')->with('career', $career);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'       => 'required',
            'education'   => 'required',
            'status'      => 'required',
            'gender'      => 'required',
            'age'         => 'required',
            'description' => 'required',
        ]);

        // Create Careers
        $career = Career::find($id);
        $career->title = $request->input('title');
        $career->education = $request->input('education');
        $career->status = $request->input('status');
        $career->gender = $request->input('gender');
        $career->age_range = $request->input('age');
        $career->description = $request->input('description');
        $career->branch_id = $request->input('branches');
        $career->created_by = auth()->user()->name;
        $career->save();

        return redirect('/dashboard/careers')->with('success', 'Career Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);

        $career->delete();
        return redirect('/dashboard/careers')->with('danger', 'Career Removed');
    }
}
