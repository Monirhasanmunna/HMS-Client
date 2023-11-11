<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Eatingtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EatingTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.eatingtime.index');
        $eatingtimes = Eatingtime::all();
        return view('backend.eatingtime.index',compact('eatingtimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.eatingtime.create');
        return view('backend.eatingtime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.eatingtime.create');
        $request->validate([
            'name'  => 'required|unique:eatingtimes'
        ]);

        Eatingtime::create([
            'name'  => $request->name
        ]);

        notify()->success('Eating Time Created SuccessFully');
        return redirect()->route('app.eatingtime.index');
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
        Gate::authorize('app.eatingtime.edit');
        $eatingtime = Eatingtime::findOrfail($id);
        return view('backend.eatingtime.create',compact('eatingtime'));
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
        Gate::authorize('app.eatingtime.edit');
        $request->validate([
            'name'  => 'required'
        ]);

        Eatingtime::findOrfail($id)->update([
            'name'  => $request->name
        ]);

        notify()->success('Eating Time Updated SuccessFully');
        return redirect()->route('app.eatingtime.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.eatingtime.destroy');
        $eatingtime = Eatingtime::findOrfail($id);
        $eatingtime->delete();
        return response()->json($eatingtime);
    }
}
