<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\FollowUp;
use App\Models\Holiday;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.doctor.index');
        $doctors = Doctor::orderBy('id','DESC')->get();
        return view('backend.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.doctor.create');
        $rooms = Room::where('status',false)->get();
        $holidays = Holiday::all();
        $followups = FollowUp::all();
        return view('backend.doctor.create',compact('rooms','holidays','followups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Gate::authorize('app.doctor.create');
       $request->validate([
        'name'                      => 'required|string',
        'email'                     => 'required|email|unique:doctors',
        'degrees'                   => 'required|string',
        'specialist'                => 'required',
        'designation'               => 'required',
        'consultant_of_college'     => 'sometimes',
        'mobile'                    => 'required|min:11',
        'b_name'                    => 'required|string',
        'b_degrees'                 => 'required|string',
        'b_designation'             => 'required',
        'b_specialist'              => 'required',
        'b_consultant_of_college'   => 'sometimes',
        'room_no'                   => 'required',
        'follow_up'                 => 'required',
        'holiday'                   => 'required'
       ]);


       Doctor::create([
        'name'                      => $request->name,
        'email'                     => $request->email,
        'mobile'                    => $request->mobile,
        'degrees'                   => $request->degrees,
        'specialist'                => $request->specialist,
        'designation'               => $request->designation,
        'consultant_of_college'     => $request->consultant_of_college,
        'firstVisit'                => $request->firstVisit,
        'nextVisit'                 => $request->nextVisit,
        'reportOnly'                => $request->reportOnly,
        'b_name'                    => $request->b_name,
        'b_degrees'                 => $request->b_degrees,
        'b_designation'             => $request->b_designation,
        'b_specialist'              => $request->b_specialist,
        'b_consultant_of_college'   => $request->b_consultant_of_college,
        'room_id'                   => $request->room_no,
        'followup_id'               => $request->follow_up,
        'holiday_id'                => $request->holiday
       ]);


       $room = Room::findOrfail($request->room_no);
       $room->status = true;
       $room->save();

       notify()->success('Doctor Create Successfully');
       return redirect()->route('app.doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::findOrfail($id);
        return response()->json($doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.doctor.edit');
        $rooms = Room::all();
        $holidays = Holiday::all();
        $followups = FollowUp::all();
        $doctor = Doctor::findOrfail($id);
        return view('backend.doctor.create',compact('doctor','rooms','holidays','followups'));
        
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
        Gate::authorize('app.doctor.edit');
        $request->validate([
            'name'                      => 'required|string',
            'email'                     => 'required|email',
            'degrees'                   => 'required|string',
            'specialist'                => 'required',
            'designation'               => 'required',
            'consultant_of_college'     => 'sometimes',
            'mobile'                    => 'required|min:11',
            'b_name'                    => 'required|string',
            'b_degrees'                 => 'required|string',
            'b_designation'             => 'required',
            'b_specialist'              => 'required',
            'b_consultant_of_college'   => 'sometimes',
           ]);

           $doctor = Doctor::findOrfail($id);
           $room = Room::findOrfail($doctor->room_id);
           $room->status = false;
           $room->save();
    
           
           $doctor->name                    = $request->name;
           $doctor->email                   = $request->email;
           $doctor->degrees                 = $request->degrees;
           $doctor->specialist              = $request->specialist;
           $doctor->designation             = $request->designation;
           $doctor->consultant_of_college   = $request->consultant_of_college;
           $doctor->mobile                  = $request->mobile;
           $doctor->firstVisit              = $request->firstVisit;
           $doctor->nextVisit               = $request->nextVisit;
           $doctor->reportOnly              = $request->reportOnly;
           $doctor->b_name                  = $request->b_name;
           $doctor->b_degrees               = $request->b_degrees;
           $doctor->b_designation           = $request->b_designation;
           $doctor->b_specialist            = $request->b_specialist;
           $doctor->b_consultant_of_college = $request->b_consultant_of_college;
           $doctor->room_id                 = $request->room_no;
           $doctor->followup_id             = $request->follow_up;
           $doctor->holiday_id              = $request->holiday;
           
           
           $room = Room::findOrfail($request->room_no);
           $room->status = true;
           $room->save();
           $doctor->save();
    
           notify()->success('Doctor Update Successfully');
           return redirect()->route('app.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.doctor.destroy');
        $doctor = Doctor::findOrfail($id);
        $doctor->delete();

        $room = Room::findOrfail($doctor->room_id);
        $room->status = false;
        $room->save();

        return response()->json($doctor);
    }
}
