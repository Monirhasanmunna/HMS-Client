<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdmittedPatient;
use App\Models\Invoice;
use App\Models\Patient;
use App\Models\Setup;
use App\Models\Userlog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.dashboard');
       
        $invoices = Invoice::all();
        $admittedPatient = AdmittedPatient::all();
        $patients = Patient::all();
        $todayspatient = Patient::whereDate('created_at',Carbon::today())->get();
        $userlogs = Userlog::orderBy('id','DESC')->get()->take(5);
            
        return view('backend.dashboard',compact('invoices','admittedPatient','patients','todayspatient','userlogs'));
    }

}
