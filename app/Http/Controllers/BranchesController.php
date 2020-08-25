<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Region;

class BranchesController extends Controller
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
    
    public function index()
    {
        $branches = Branch::all();
        return view('branches.index')->with('branches1',$branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('branches.create')->with('regions', $regions);
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
            'name'        => 'required',
            'company'     => 'required',
            'oic'         => 'required',
            'address'     => 'required',
        ]);

        //Create Branches 
        $branch = New Branch;
        $branch->name = $request->input('name');
        $branch->officer_in_charge = $request->input('oic');
        $branch->company = $request->input('company');
        $branch->region = $request->input('region');
        $branch->address = $request->input('address');
        $branch->telephone_no = $request->input('telephone_no');
        $branch->fax_no = $request->input('fax_no');
        $branch->cellphone_no = $request->input('contact_no');
        $branch->created_by = auth()->user()->name;
        $branch->save();

        return redirect('/dashboard/branches')->with('success', 'Branches Created');
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
        $branch = Branch::find($id);
        $regions = Region::all();
        return view('branches.edit')->with(['branch' => $branch, 'regions' => $regions]);
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
            'name'        => 'required',
            'oic'         => 'required',
            'address'     => 'required',
        ]);

        //Create Branches
        $branch = Branch::find($id);
        $branch->name = $request->input('name');
        $branch->officer_in_charge = $request->input('oic');
        $branch->company = $request->input('company');
        $branch->region_id = $request->input('region');
        $branch->address = $request->input('address');
        $branch->telephone_no = $request->input('telephone_no');
        $branch->fax_no = $request->input('fax_no');
        $branch->cellphone_no = $request->input('contact_no');
        $branch->save();

        return redirect('/dashboard/branches')->with('success', 'Branches Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);

        $branch->delete();    
        return redirect('/dashboard/branches')->with('danger','Branches Removed');
    }    
}
