<?php

namespace App\Http\Controllers\Backend\Bed;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\BedGroup;
use App\Models\BedType;
use Illuminate\Http\Request;

class BedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beds = Bed::all();
        $bedtypes = BedType::all();
        $bedgroups = BedGroup::all();
        return view('backend.bed.index',compact('beds','bedtypes','bedgroups'));
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
        'bedtype'   => 'required',
        'bedgroup'  => 'required',
        'name'      => 'required|unique:beds',
       ]);

    
        $bed = New Bed;
        $bed->bedgroup_id   = $request->bedgroup;
        $bed->bedtype_id    = $request->bedtype;
        $bed->name          = $request->name;
        if($request->status == 1){
            $bed->status = true;
        }else{
            $bed->status = false;
        }
        $bed->save();

       notify()->success('Bed Created Successfully');
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
        $bed = Bed::with('bedtype','bedgroup')->findOrfail($id);
        return response()->json($bed);
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
            'bedtype'   => 'required',
            'bedgroup'  => 'required',
            'name'      => 'required',
           ]);
    
        //    Bed::findOrfail($request->bed_id)->update([
        //     'bedgroup_id'   => $request->bedgroup,
        //     'bedtype_id'    => $request->bedtype,
        //     'name'          => $request->name,
        //     'status'        => $request->input('status')
        //    ]);

        $bed = Bed::findOrfail($request->bed_id);
        $bed->bedgroup_id   = $request->bedgroup;
        $bed->bedtype_id    = $request->bedtype;
        $bed->name          = $request->name;
        if($request->status == 1){
            $bed->status = true;
        }else{
            $bed->status = false;
        }
        $bed->save();

        notify()->success('Bed Updated Successfully');
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
        $bed = Bed::findOrfail($id)->delete();
        return response()->json($bed);
    }
}
