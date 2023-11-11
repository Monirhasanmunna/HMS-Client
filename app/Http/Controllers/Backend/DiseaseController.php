<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.disease.index');
        $diseases = Disease::orderBy('id','DESC')->get();
        return view('backend.disease.index',compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.disease.create');
        $diseaseCode = Disease::orderBy('id','DESC')->first()->code;
        return view('backend.disease.create',compact('diseaseCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.disease.create');
        $request->validate([
            'name'  => 'required|unique:diseases',
            'code'  => 'required|unique:diseases'
        ]);

        Disease::create([
            'name'  => $request->name,
            'code'  => $request->code
        ]);

        notify()->success('Disease Create Successfully');
        return redirect()->route('app.disease.index');
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
        Gate::authorize('app.disease.edit');
        $disease = Disease::findOrfail($id);
        return view('backend.disease.create',compact('disease'));
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
        Gate::authorize('app.disease.edit');
        $request->validate([
            'name'  => 'required',
            'code'  => 'required'
        ]);

        Disease::findOrfail($id)->update([
            'name'  => $request->name,
            'code'  => $request->code
        ]);

        notify()->success('Disease Update Successfully');
        return redirect()->route('app.disease.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.disease.destroy');
        $disease = Disease::findOrfail($id);
        $disease->delete();
        return response()->json($disease);
    }
}
