<?php

namespace App\Http\Controllers;

use App\dataPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;
use DB;
use Auth;


class DataPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(){
        $data_plans = dataPlan::pluck('id','network');
        return view('pages.data-plan', compact('data_plans'));
    }

    public function getsubdata($net_id){
    	$dplan = dataPlan::select('name', 'price')->where('id',$net_id)->get();
    	$name = explode(',', $dplan[0]->name);
    	$price = explode(',', $dplan[0]->price);
        $plan = array_combine($name,$price);
    	return response()->json($plan);
    }

    public function send(){
        $data = request()->validate([
            'network' => 'required',
            'subdata' => 'required',
            'recipient_phone' => 'required|digits_between:11,13',
        ]);
        
        $net_name = dataPlan::select('network','active')->where('id',$data['network'])->get();
        
        $net_act = $net_name[0]->active;
        $net_name = $net_name[0]->network;
        $subdata = $data['subdata'];
        $phone = $data['recipient_phone'];
        $myid = Auth::user()->id;

        if ($net_act == 0) {
            return redirect()->back()->with('noteno', 'Network provider is currently not available.');
        } else {
            $current_bal = Auth::user()->wallet;
       
            if ($subdata > $current_bal) {
                return redirect()->back()->with('noteno', 'Insufficient Balance, Please Load Your <a href="/fund-wallet">Wallet</a>');
            } else{

                $realMsg = $phone ." need ".$net_name." data of price ".$subdata.".";
                $forsms = $phone ." need id=".$data['network']." data of price ".$subdata.".";

                $newAmount = $current_bal - $subdata;
                //dd($newAmount);

                //Mail::to('Tayonik@gmail.com')->send(new \App\Mail\DataSend($realMsg));
                $sms = new SmsController();
                $sms->initiateSmsActivation('07034943087',$forsms);

                $affected = DB::table('users')->where('id', $myid)->update(['wallet' => $newAmount]);

                if ($affected == 1) {
                    DB::table('buys')->insertOrIgnore([
                        'user_id' => $myid,
                        'price' => $subdata,
                        'network' => $net_name,
                        'phone' => $phone,
                        'created_at' => date('Y-m-d H:i:s'),
                    ]); 

                    return redirect()->back()->with('success', 'Data Sent Successfully.');
                } else {
                    return redirect()->back()->with('noteno', 'Error! Please try again or contact web Admin.');
                }
            }
        }

    }    

}
