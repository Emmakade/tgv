<?php

namespace App\Http\Controllers;

use App\cableSub;
use Illuminate\Http\Request;

class AdminCableController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

	public function index(){
        $cable_plans = cableSub::pluck('id','subscriber');
        
        return view('pages.admin.cableoption', compact('cable_plans'));
    }
    
}
