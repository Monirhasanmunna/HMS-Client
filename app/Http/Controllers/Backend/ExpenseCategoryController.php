<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenseCategories = ExpenseCategory::orderBy('id','desc')->get();
        return view('backend.expensecategory.index',compact('expenseCategories'));
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
        $request->validate([
            'name'  => 'required|unique:expense_categories',
           ]);
    
            ExpenseCategory::create([
                'name'          => $request->name,
                'description'   => $request->description
            ]);
    
            notify()->success('Expense Category Created Successfully');
            return redirect()->route('app.expcategory.index');
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
        $expcategory = ExpenseCategory::findOrfail($id);
        return response()->json($expcategory);
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
       $request->validate([
        'name'  => 'required',
       ]);

        ExpenseCategory::findOrfail($request->expcategory_id)->update([
            'name'          => $request->name,
            'description'   => $request->description
        ]);

        notify()->success('Expense Category Updated Successfully');
        return redirect()->route('app.expcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expcategory = ExpenseCategory::findOrfail($id);
        $expcategory->delete();
        return response()->json($expcategory);
    }
}
