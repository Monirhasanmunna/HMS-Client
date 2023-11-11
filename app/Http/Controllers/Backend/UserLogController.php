<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Userlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fromDate = date('Y-m-d');
        $toDate  = date('Y-m-d');

        $logs = Userlog::query();

       if($request->filled('fromDate') && $request->filled('toDate')){
        $fromDate=date('Y-m-d',strtotime($request->get('fromDate')));
        $toDate=date('Y-m-d',strtotime($request->get('toDate')));
        $logs->whereBetween('log_date',[date('Y-m-d',strtotime($request->get('fromDate'))), date('Y-m-d',strtotime($request->get('toDate')))]);
    }
    
        $logs->orderBy('id', 'desc');
        $userlogs = $logs->get();
        return view('backend.userlog.index',compact('userlogs','fromDate','toDate'));
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $userlog = Userlog::all()->truncate();
        // notify()->success('User Log Deleted');
        // return redirect()->back();

        DB::table('userlogs')->delete();
        notify()->success('User Log Deleted');
        return redirect()->back();
    }
}
