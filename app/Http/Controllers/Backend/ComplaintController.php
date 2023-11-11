<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.complain.index');
        $complaints = Complaint::all();
        return view('backend.complaint.index',compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.complain.create');
        return view('backend.complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.complain.create');
        $request->validate([            
            'name'            => 'required',          
        ]);

        Complaint::create([
            'name'             => $request->name,
        ]);

        notify()->success('complaint Created Successfully');
        return redirect()->route('app.complaint.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalTest  $medicalTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalTest  $medicalTest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.complain.edit');
        $complaint = Complaint::findOrfail($id);                
        return view('backend.complaint.create',compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalTest  $medicalTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('app.complain.update');
        $request->validate([
            'name'            => 'required',
        ]);

        Complaint::findOrfail($id)->update([
            'name'             => $request->name,
        ]);

        notify()->success('Complaint Updated Successfully');
        return redirect()->route('app.complaint.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalTest  $medicalTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.complain.destroy');
        $complaint = Complaint::findOrfail($id);
        $complaint->delete();
        return response()->json($complaint);
    }
}
