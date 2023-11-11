<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advice;
use App\Models\Complaint;
use App\Models\Doctor;
use App\Models\Eatingtime;
use App\Models\Frequency;
use App\Models\Invoice;
use App\Models\MedicalTest;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Prescription;
use App\Models\PrescriptionAdvice;
use App\Models\PrescriptionComplaint;
use App\Models\PrescriptionDetails;
use App\Models\PrescriptionMedicine;
use App\Models\PrescriptionTest;
use App\Models\Quantity;
use App\Models\QuantityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PrescriptionController extends Controller
{

    public function dashboard()
    {
        $totalPatient=Patient::count();
        $newPatient=Patient::orderBy('id', 'desc')->take(5)->get();
        $newPrescription=Prescription::orderBy('id', 'desc')->take(5)->get();
        $totalPrescription=Prescription::count();
        
        // dd($newPatient);
        Gate::authorize('app.prescriptiondashboard.dashboard');
        return view('backend.prescription.dashboard', compact('totalPatient','newPatient','newPrescription','totalPrescription'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.prescription.index');
        if(Auth::user()->role->slug == 'doctor'){

            $user_email = Auth::user()->email;
            $doctor_id = Doctor::where('email',$user_email)->first()->id;
            $prescriptions=Prescription::where('doctor_id',$doctor_id)->orderBy('id','DESC')->get();

        }elseif(Auth::user()->role->slug == 'assistant'){
            //code comming soon
        }else{

            $prescriptions=Prescription::all();
            
        }
        
        return view('backend.prescription.index', compact('prescriptions'));
       
    }

    public function view(Request $request, Prescription $prescription){
        // dd($prescription->patient);
        return view('backend.prescription.view', compact('prescription'));
    }

    public function patient_info($id)
    {
        $patient = Patient::findOrfail($id);
        return response()->json($patient);
    }

    public function medicine_info($id)
    {
        $medicin = Medicine::findOrfail($id);
        $quantities = Quantity::all();
        $qtytypies  = QuantityType::all();
        $eatingTimes = Eatingtime::all();
        $frequencies = Frequency::all();

        return response()->json(['medicine' => $medicin, 'frequencies' => $frequencies, 'quantities' => $quantities, 'qtytypies' => $qtytypies, 'eatingTimes' => $eatingTimes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.prescription.create');
        $doctor_info = '';
        if(Auth::user()->role->slug == 'doctor'){
            //when log in as doctor
            $user_email = Auth::user()->email;
            $doctor_id = Doctor::where('email',$user_email)->first()->id;
            $patients = Patient::where('doctor_id',$doctor_id)->get();
            $doctors = Doctor::where('email',$user_email)->get();
            $doctor_info = Doctor::where('email',$user_email)->first();

        }elseif(Auth::user()->role->slug == 'assistant'){
            //when log in as assistant
            //code coming soon

        }else{
            //when log in as super-admin
            $patients = Patient::all();
            $doctors = Doctor::all();
        }

        $medicines = Medicine::all();
        $medicalTest = MedicalTest::where('status', 1)->get();
        $advice = Advice::all();
        $complaints=Complaint::all();
        $quantities = Quantity::all();
        $qtytypies  = QuantityType::all();
        $eatingTimes = Eatingtime::all();
        $frequencies = Frequency::all();
        return view('backend.prescription.create', compact('patients', 'medicines', 'medicalTest', 'advice', 'doctors',
        'complaints', 'quantities', 'qtytypies','eatingTimes', 'frequencies','doctor_info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.prescription.create');
         //dd($request->all());
        $request->validate([
            'patient_id'    => 'required',
            'medicine'      => 'required',
            'doctor_id'     => 'required',  
            'cc'            => 'required',
            'med'           => 'required',
            'next_meet'     => 'required'   
        ]);


        $prescription =  Prescription::create([
            "mem_type" => $request->mem_type,
            "education" => $request->education,
            "sbp" => $request->sbp,
            "dbp" => $request->dbp,
            "oxygen" => $request->oxygen,
            "pulse" => $request->pulse,
            "temp" => $request->temp,
            "edima" => $request->edima,
            "anemia" => $request->anemia,
            "jaundice" => $request->jaundice,
            "weight" => $request->weight,
            "height" => $request->height,
            "bmi" => $request->bmi,
            "blgr" => $request->blgr,
            "heart" => $request->heart,
            "lungs" => $request->lungs,
            "diabeties" => $request->diabeties,
            "hp" => $request->hp,
            "ihd" => $request->ihd,
            "strk" => $request->strk,
            "copd" => $request->copd,
            "cancer" => $request->cancer,
            "ckd" => $request->ckd,
            "salt" => $request->salt,
            "smoke" => $request->smoke,
            "smoking" => $request->smoking,
            "diagnosis" => $request->diagnosis,
            "sec_diagnosis" => $request->sec_diagnosis,
            "sec_dx2" => $request->sec_dx2,
            "next_meet" => $request->next_meet,
            "meet_day" => $request->meet_day,
            "patient_id" => $request->patient_id,
            "doctor_id" => $request->doctor_id,
            "visit_type"=>$request->visit_type
        ]);


        foreach($request->frequency as $key=>$freq){
            PrescriptionMedicine::create([
               'frequency_id' =>$freq,
                'qty_id'=>$request->qty[$key],
                'qtyType_id'=>$request->qtyType[$key],
                'eatingType_id'=>$request->eatingType[$key],
                'eatDuration'=>$request->eatDuration[$key],
                'medicine_id'=>$request->medicine[$key],
                'prescription_id'=>$prescription->id
            ]);
        }
        
        if($request->advice){
            foreach($request->advice as $key=>$adv){
                PrescriptionAdvice::create([
                   'advice_id' =>$adv,                
                   'prescription_id'=>$prescription->id
                ]);
            }
        }
        
        if($request->suggest_test){
            foreach($request->suggest_test as $key=>$test){
                PrescriptionTest::create([
                   'medical_test_id' =>$test,                
                   'prescription_id'=>$prescription->id
                ]);
            }
        }
        
        if($request->cc){
            foreach($request->cc as $key=>$test){
                PrescriptionComplaint::create([
                    'complaint_id' =>$test,                
                    'prescription_id'=>$prescription->id
                ]);
            }
        }
        

        notify()->success('Prescription Created');
        return redirect()->route('app.prescription.index');
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
        Gate::authorize('app.prescription.edit');
        $patients = Patient::all();
        $medicines = Medicine::all();
        $medicalTest = MedicalTest::where('status', 1)->get();
        $advice = Advice::all();
        $doctors = Doctor::all();
        $complaints=Complaint::all();
        $prescription=Prescription::findOrfail($id);

        $quantities = Quantity::all();
        $qtytypies  = QuantityType::all();
        $eatingTimes = Eatingtime::all();
        $frequencies = Frequency::all();
        return view('backend.prescription.create', compact('patients', 'medicines', 'medicalTest', 'advice', 'doctors','complaints', 
        'prescription', 'quantities', 'qtytypies','eatingTimes', 'frequencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        
        $prescription->mem_type = $request->mem_type;
        $prescription->education = $request->education;
        $prescription->sbp = $request->sbp;
        $prescription->dbp = $request->dbp;
        $prescription->oxygen = $request->oxygen;
        $prescription->pulse = $request->pulse;
        $prescription->temp = $request->temp;
        $prescription->edima = $request->edima;
        $prescription->anemia = $request->anemia;
        $prescription->jaundice = $request->jaundice;
        $prescription->weight = $request->weight;
        $prescription->height = $request->height;
        $prescription->bmi = $request->bmi;
        $prescription->blgr = $request->blgr;
        $prescription->heart = $request->heart;
        $prescription->lungs = $request->lungs;
        $prescription->diabeties = $request->diabeties;
        $prescription->hp = $request->hp;
        $prescription->ihd = $request->ihd;
        $prescription->strk = $request->strk;
        $prescription->copd = $request->copd;
        $prescription->cancer = $request->cancer;
        $prescription->ckd = $request->ckd;
        $prescription->salt = $request->salt;
        $prescription->smoke = $request->smoke;
        $prescription->smoking = $request->smoking;
        $prescription->diagnosis = $request->diagnosis;
        $prescription->sec_diagnosis = $request->sec_diagnosis;
        $prescription->sec_dx2 = $request->sec_dx2;
        $prescription->next_meet = $request->next_meet;
        $prescription->meet_day = $request->meet_day;
        $prescription->patient_id = $request->patient_id;
        $prescription->doctor_id = $request->doctor_id;   
        $prescription->visit_type = $request->visit_type;           
        $prescription->save();



        PrescriptionMedicine::where('prescription_id', $prescription->id)->delete();
        foreach($request->frequency as $key=>$freq){
            PrescriptionMedicine::create([
               'frequency_id' =>$freq,
                'qty_id'=>$request->qty[$key],
                'qtyType_id'=>$request->qtyType[$key],
                'eatingType_id'=>$request->eatingType[$key],
                'eatDuration'=>$request->eatDuration[$key],
                'medicine_id'=>$request->medicine[$key],
                'prescription_id'=>$prescription->id
            ]);
        }
        
        if($request->advice){
            PrescriptionAdvice::where('prescription_id', $prescription->id)->delete();
            foreach($request->advice as $key=>$adv){
                PrescriptionAdvice::create([
                   'advice_id' =>$adv,                
                   'prescription_id'=>$prescription->id
                ]);
            }
        }
        
        if($request->suggest_test){

            PrescriptionTest::where('prescription_id', $prescription->id)->delete();

            foreach($request->suggest_test as $key=>$test){
                PrescriptionTest::create([
                   'medical_test_id' =>$test,                
                   'prescription_id'=>$prescription->id
                ]);
            }
        }
        
        if($request->cc){
            PrescriptionComplaint::where('prescription_id', $prescription->id)->delete();
            foreach($request->cc as $key=>$test){
                PrescriptionComplaint::create([
                    'complaint_id' =>$test,                
                    'prescription_id'=>$prescription->id
                ]);
            }
        }

        notify()->success('Prescription Updated');
        return redirect()->route('app.prescription.index');
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.prescription.destroy');
        $prescription = Prescription::findOrfail($id);
        $prescriptionMedicine=PrescriptionMedicine::where('prescription_id', $id)->get();
        $prescriptionMedicine->each->delete();
        $prescriptionAdvice=PrescriptionAdvice::where('prescription_id', $id)->get();
        $prescriptionAdvice->each->delete();
        $prescriptionTest=PrescriptionTest::where('prescription_id', $id)->get();
        $prescriptionTest->each->delete();
        $prescription->delete();
        return response()->json($prescription);
    }
}
