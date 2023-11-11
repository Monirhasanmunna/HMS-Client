<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.blood.index');
        $bloods = Blood::all();
        return view('backend.blood.index',compact('bloods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.blood.create');
        return view('backend.blood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.blood.create');
        $request->validate([
            'name'  => 'required'
        ]);

        Blood::create([
            'name'  => $request->name
        ]);

        notify()->success('Blood Group Created');
        return redirect()->route('app.blood.index');
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
        Gate::authorize('app.blood.edit');
        $blood = Blood::findOrfail($id);
        return view('backend.blood.create',compact('blood'));
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
        Gate::authorize('app.blood.edit');
        $request->validate([
            'name'  => 'required'
        ]);

        Blood::findOrfail($id)->update([
            'name'  => $request->name
        ]);

        notify()->success('Blood Group Updated');
        return redirect()->route('app.blood.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.blood.destroy');
        $blood = Blood::findOrfail($id);
        $blood->delete();
        return response()->json($blood);
    }
}
