<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\NetIncome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       // return $request->all();

        $expenseCategories = ExpenseCategory::orderBy('id','desc')->get();
        $expenses = Expense::orderBy('id','desc')->get();

        return view('backend.expense.index',compact('expenses','expenseCategories'));
    }


    public function expenseShow(Request $request)
    {
        $expenseCategories = ExpenseCategory::orderBy('id','desc')->get();
        $expense        = Expense::query();
        $from_date      = $request->fromDate;
        $to_date        = $request->toDate;
        $invoice_type   = $request->invoice_type;

        $expenses =  $expense->whereDate('created_at','>=', $from_date)
                        ->whereDate('created_at','<=', $to_date)
                        ->where('expense_category_id',$invoice_type)
                        ->get();
        return view('backend.expense.index',compact('expenses','expenseCategories'));
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
            'name'                  => 'required',
            'expenseCategory_id'    => 'required',
            'amount'                => 'required',
        ]);

      $exp = Expense::create([
        'name'                  => $request->name,
        'expense_category_id'   => $request->expenseCategory_id,
        'amount'                => $request->amount,
        'description'           => $request->description
       ]);

       $exp->histories()->create([
            'reason' => 'Paid for '.$request->name,
            'date'   => date('Y-m-d'),
            'type'   => 'debit',
            'ammount'=> $exp->amount
       ]);

        $inc = NetIncome::findOrfail(1);
        $inc->debit = $inc->debit + $exp->amount;
        $inc->net   = $inc->credit - $inc->debit;
        $inc->save();

       notify()->success('Expense added successfully');
       return redirect()->route('app.expense.index');
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
        $expense = Expense::with('expenseCategory')->findOrfail($id);
        return response()->json($expense);
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
            'name'                  => 'required',
            'expenseCategory_id'    => 'required',
            'amount'                => 'required',
        ]);


        $exp = Expense::findOrfail($request->expense_id);

        $inc = NetIncome::findOrfail(1);
        $inc->debit = $inc->debit-$exp->amount;
        $inc->net   = $inc->net - $inc->amount;
        $inc->save();


        $exp->name                  = $request->name;
        $exp->expense_category_id   = $request->expenseCategory_id;
        $exp->amount                = $request->amount;
        $exp->description           = $request->description;
        $exp->save();


        $inc->debit = $inc->debit + $request->amount;
        $inc->net = $inc->credit - $inc->debit;
        $inc->save(); 

       notify()->success('Expense updated successfully');
       return redirect()->route('app.expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = Expense::findOrfail($id);
        $expense->delete();
        return response()->json($expense);
    }
}
