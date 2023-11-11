<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frequency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class FrequencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.frequency.index');
        $frequencies = Frequency::all();
        return view('backend.frequency.index',compact('frequencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.frequency.create');
        return view('backend.frequency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.frequency.create');
        $request->validate([
            'name'  => 'required|unique:frequencies'
        ]);

        Frequency::create([
            'name'  => $request->name
        ]);

        notify()->success('Frequency Created Successfully');
        return redirect()->route('app.frequency.index');
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
        Gate::authorize('app.frequency.edit');
        $frequency = Frequency::findOrfail($id);
        return view('backend.frequency.create',compact('frequency'));

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
        Gate::authorize('app.frequency.edit');
        $request->validate([
            'name'  => 'required'
        ]);

        Frequency::findOrfail($id)->update([
            'name'  => $request->name
        ]);

        notify()->success('Frequency Updated Successfully');
        return redirect()->route('app.frequency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.frequency.destroy');
        $frequency = Frequency::findOrfail($id);
        $frequency->delete();
        return response()->json($frequency);
    }
}
