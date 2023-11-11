<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.advice.index');
        $advices = Advice::all();
        return view('backend.advice.index',compact('advices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.advice.create');
        return view('backend.advice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.advice.create');

        $request->validate([
            'name'  => 'required|unique:advice'
        ]);

        Advice::create([
            'name'  => $request->name
        ]);

        notify()->success('Advice Created SuccessFully');
        return redirect()->route('app.advice.index');
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
        Gate::authorize('app.advice.edit');
        $advice = Advice::findOrfail($id);
        return view('backend.advice.create',compact('advice'));
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
        Gate::authorize('app.advice.edit');
        $request->validate([
            'name'  => 'required'
        ]);

        Advice::findOrfail($id)->update([
            'name'  => $request->name
        ]);

        notify()->success('Advice Updated SuccessFully');
        return redirect()->route('app.advice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.advice.destroy');
        $advice = Advice::findOrfail($id);
        $advice->delete();
        return response()->json($advice);
    }
}
