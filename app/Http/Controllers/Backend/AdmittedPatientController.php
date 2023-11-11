<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdmittedPatient;
use App\Models\Bed;
use App\Models\BedGroup;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdmittedPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        Gate::authorize('app.admission.index');
        $admitions = AdmittedPatient::all();
        return view('backend.admittedPatient.index',compact('admitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.admission.create');
        $patients  = Patient::all();
        $bedgroups = BedGroup::all();
        $beds      = Bed::all();
        return view('backend.admittedPatient.create',compact('patients','bedgroups','beds'));
    }

    public function bedgroup_info($id)
    {
        $bed = Bed::where('bedgroup_id',$id)->where('status',false)->get();
        $bedgroup = BedGroup::where('id',$id)->first();
        return response()->json(['bed'=>$bed, 'bedgroup'=>$bedgroup]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.admission.create');
        $request->validate([
            'patient_id'    => 'required',
            'bedgroup_id'   => 'required',
            'bed_id'        => 'required',
            'paid'          => 'required',
            'due'           => 'sometimes'
        ]);

       $admission = AdmittedPatient::create([
            'patient_id'    => $request->patient_id,
            'bedgroup_id'   => $request->bedgroup_id,
            'bed_id'        => $request->bed_id,
            'paid'          => $request->paid,
            'due'           => $request->due
        ]);

        $admission->histories()->create([
            'reason' => 'New patient admission ',
            'date'   => date('Y-m-d'),
            'type'   => 'credit',
            'ammount'=> $admission->paid
       ]);


        $bed = Bed::findOrfail($request->bed_id);
        $bed->status = true;
        $bed->save();

        notify()->success('New Admition Created');
        return redirect()->route('app.admition.index');
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
        Gate::authorize('app.admission.edit');
        $admission = AdmittedPatient::findOrfail($id);
        $patients  = Patient::all();
        $bedgroups = BedGroup::all();
        $beds      = Bed::all();
        return view('backend.admittedPatient.create',compact('patients','bedgroups','beds','admission'));
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
        Gate::authorize('app.admission.edit');
        $request->validate([
            'patient_id'    => 'required',
            'bedgroup_id'   => 'required',
            'bed_id'        => 'required',
            'paid'          => 'required',
            'due'           => 'sometimes'
        ]);


        
        $admission = AdmittedPatient::findOrfail($id);
        $bed = Bed::findOrfail($admission->bed_id);
        $bed->status = false;
        $bed->save();

        $admission->patient_id  = $request->patient_id;
        $admission->bedgroup_id = $request->bedgroup_id;
        $admission->bed_id      = $request->bed_id;
        $admission->paid        = $request->paid;
        $admission->due         = $request->due;


        $bed = Bed::findOrfail($request->bed_id);
        $bed->status = true;
        $bed->save();
        $admission->save();


        notify()->success('New Admition Created');
        return redirect()->route('app.admition.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.admission.destroy');
        $admission = AdmittedPatient::findOrfail($id)->delete();
        return response()->json($admission);

    }
}
