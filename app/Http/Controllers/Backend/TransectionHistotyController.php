<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TransectionHistory;
use Illuminate\Http\Request;

class TransectionHistotyController extends Controller
{
    public function index()
    {
        $histories = TransectionHistory::orderBy('id','DESC')->get();
        return view('backend.transection_history.index',compact('histories'));
    }
}
