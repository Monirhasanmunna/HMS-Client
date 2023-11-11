<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\QuantityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class QuantityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.quantitytype.index');
        $quantityTypes = QuantityType::all();
        return view('backend.quantityType.index',compact('quantityTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.quantitytype.create');
        return view('backend.quantityType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.quantitytype.create');
        $request->validate([
            'name'  => 'required|unique:quantity_types'
        ]);

        QuantityType::create([
            'name'  => $request->name
        ]);

        notify()->success('Quantity Type Created Successfully');
        return redirect()->route('app.quantity.type.index');
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
        Gate::authorize('app.quantitytype.edit');
        $quantityType = QuantityType::findOrfail($id);
        return view('backend.quantityType.create',compact('quantityType'));
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
        Gate::authorize('app.quantitytype.edit');
        $request->validate([
            'name'  => 'required'
        ]);

        QuantityType::findOrfail($id)->update([
            'name'  => $request->name
        ]);

        notify()->success('Quantity Type Updated Successfully');
        return redirect()->route('app.quantity.type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.quantitytype.destroy');
        $quantityType = QuantityType::findOrfail($id);
        $quantityType->delete();
        return response()->json($quantityType);
    }
}
