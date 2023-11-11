<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Quantity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.quantity.index');
        $quantities = Quantity::all();
        return view('backend.quantity.index',compact('quantities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.quantity.create');
        return view('backend.quantity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.quantity.create');
        $request->validate([
            'name'  => 'required|unique:quantities'
        ]);

        Quantity::create([
            'name'  => $request->name
        ]);

        notify()->success('Quantity Created Successfully');
        return redirect()->route('app.quantity.index');
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
        Gate::authorize('app.quantity.edit');
        $quantity = Quantity::findOrfail($id);
        return view('backend.quantity.create',compact('quantity'));
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
        Gate::authorize('app.quantity.edit');
        $request->validate([
            'name'  => 'required'
        ]);

        Quantity::findOrfail($id)->update([
            'name'  => $request->name
        ]);

        notify()->success('Quantity Updated Successfully');
        return redirect()->route('app.quantity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.quantity.destroy');
        $quantity = Quantity::findOrfail($id);
        $quantity->delete();
        return response()->json($quantity);
    }
}
