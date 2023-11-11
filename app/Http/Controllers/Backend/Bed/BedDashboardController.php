<?php

namespace App\Http\Controllers\Backend\Bed;

use App\Http\Controllers\Controller;
use App\Models\AdmittedPatient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BedDashboardController extends Controller
{
    public function index()
    { 
        $patients = AdmittedPatient::all()->count();
        $todayAdmit = AdmittedPatient::whereDate('created_at', Carbon::today())->get()->count();
        $totalAdmit = AdmittedPatient::all();
        return view('backend.beddashboard.index',compact('patients','todayAdmit','totalAdmit'));
    }
}
