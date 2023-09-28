<?php

namespace App\Http\Controllers;

//use App\dataPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;
use DB;
use Auth;


class TopUpController extends Controller
{
    
    public function send(){
        try{

        }
        catch(\Exception $e){
            dd($e);
        }
    }

}
