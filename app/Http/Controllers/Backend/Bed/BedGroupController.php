<?php

namespace App\Http\Controllers\Backend\Bed;

use App\Http\Controllers\Controller;
use App\Models\BedGroup;
use App\Models\Floor;
use Illuminate\Http\Request;

class BedGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $floors = Floor::all();
        $bedgroups = BedGroup::orderBy('id','ASC')->get();
        return view('backend.bedgroup.index',compact('bedgroups','floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'floor_id'      =>'required',
        'name'          => 'required|unique:bed_groups',
        'description'   => 'sometimes|max:500',
        'price'         => 'required'
       ]);

       BedGroup::create([
        'floor_id'   => $request->floor_id,
        'name'       => $request->name,
        'description'=> $request->description,
        'price'      => $request->price
       ]);

       notify()->success('Bed Group Created Successfully');
       return redirect()->back();
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
        $bedgroup = BedGroup::with('floor')->findOrfail($id);
        return response()->json($bedgroup);
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
        $request->validate([
            'floor_id'      =>'required',
            'name'          =>'required',
            'description'   =>'sometimes|max:500'
           ]);
    
           BedGroup::findOrfail($request->bedgroup_id)->update([
            'floor_id'   => $request->floor_id,
            'name'       => $request->name,
            'description'=> $request->description,
            'price'      => $request->price
           ]);
    
           notify()->success('Bed Group Updated Successfully');
           return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bedgroup = BedGroup::findOrfail($id);
        $bedgroup->delete();
        return response()->json($bedgroup);
    }
}
