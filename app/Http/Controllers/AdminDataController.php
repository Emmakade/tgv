<?php

namespace App\Http\Controllers;

use App\dataPlan;
use Illuminate\Http\Request;

class AdminDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $data_plans = dataPlan::pluck('id','network');
        return view('pages.admin.dataoption', compact('data_plans'));
    }
}
