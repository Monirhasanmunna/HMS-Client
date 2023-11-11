<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\BedGroup;
use App\Models\Blood;
use App\Models\Disease;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.patient.index');
        if(Auth::user()->role->slug == 'doctor'){
            //when login as doctor
            $user_email = Auth::user()->email;
            $doctor_id = Doctor::where('email',$user_email)->first()->id;
            $patients = Patient::where('doctor_id',$doctor_id)->orderBy('id','DESC')->get();
            
        }elseif(Auth::user()->role->slug == 'assistant'){
            //when login as assistant
            //code comming soon
        }else{
            //when login as admin
            $patients = Patient::orderBy('id','DESC')->get();
        }
        
        return view('backend.patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.patient.create');
        $bedgroups = BedGroup::all();
        $doctors = Doctor::all();
        $disease = Disease::all();
        $bloods = Blood::all();
        return view('backend.patient.create',compact('doctors','disease','bloods','bedgroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.patient.create');
        $request->validate([
            'doctor_id'         => 'required', 
            'name'              => 'required|string',
            'age'               => 'required',
            'address'           => 'required',
            'mobile'            => 'required',
            'sex'               => 'required',
            'maritial_status'   => 'required',
            'weight'            => 'required',
            'ocupation'         => 'required',
            'religion'          => 'required',
        ]);


        Patient::create([
            'doctor_id'         => $request->doctor_id,
            'blood_group'       => $request->blood_group,
            'name'              => $request->name,
            'age'               => $request->age,
            'sex'               => $request->sex,
            'address'           => $request->address,
            'mobile'            => $request->mobile,
            'weight'            => $request->weight,
            'maritial_status'   => $request->maritial_status,
            'ocupation'         => $request->ocupation,
            'religion'          => $request->religion,
        ]);

        
        notify()->success('Patient Created Successfully');
        return redirect()->route('app.patient.index');
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
        Gate::authorize('app.patient.edit');
        $doctors = Doctor::all();
        $bloods  = Blood::all();
        $patient = Patient::findOrfail($id);
        return view('backend.patient.create',compact('patient','doctors','bloods'));
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
        Gate::authorize('app.patient.edit');
        $request->validate([
            'doctor_id'         => 'required',
            'name'              => 'required|string',
            'age'               => 'required',
            'address'           => 'required',
            'mobile'            => 'required',
            'sex'               => 'required'
        ]);


        Patient::findOrfail($id)->update([
            'name'              => $request->name,
            'doctor_group'      => $request->doctor_group,
            'age'               => $request->age,
            'address'           => $request->address,
            'mobile'            => $request->mobile,
            'blood_id'          => $request->blood_id,
            'weight'            => $request->weight,
            'maritial_status'   => $request->maritial_status,
            'ocupation'         => $request->ocupation,
            'religion'          => $request->religion,            
            'sex'               => $request->sex
        ]);

        notify()->success('Patient Updated Successfully');
        return redirect()->route('app.patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.patient.destroy');
        $patient = Patient::findOrfail($id);
        $patient->delete();
        return response()->json($patient);

    }
}
