<?php

namespace App\Http\Controllers;

use App\cableSub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;
use DB;
use Auth;


class CableSubController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function list(){
        $cable_plans = cableSub::pluck('id','subscriber');
        //dd($cable_plans);
        return view('pages.cable-subscription', compact('cable_plans'));
    }

    public function getsubcable($sub_id){
    	$cplan = cableSub::select('name', 'price')->where('id',$sub_id)->get();
    	$name = explode('-', $cplan[0]->name);
    	$price = explode('-', $cplan[0]->price);
        $plan = array_combine($name,$price);
    	return response()->json($plan);
    }

    public function send(){
        $data = request()->validate([
            'subscriber' => 'required',
            'subcable' => 'required',
            'iuc_number' => 'required|min:10|max:11',
        ]);
        
        $sub_name = cableSub::select('subscriber','active')->where('id',$data['subscriber'])->get();
        
        $sub_active = $sub_name[0]->active;
        $sub_name = $sub_name[0]->subscriber;
        $subcable = $data['subcable'];
        $iuc = $data['iuc_number'];
        $myid = Auth::user()->id;

        if ($sub_active == 0) {
            return redirect()->back()->with('noteno', 'Subscriber provider is currently not available.');
        } else {
            $current_bal = Auth::user()->wallet;
            
            if ($subcable > $current_bal) {
                return redirect()->back()->with('noteno', 'Insufficient Balance, Please Load Your <a href="/fund-wallet">Wallet</a>');
            } else{

                $realMsg = "Send ".$sub_name." cableSub of price ".$subcable." to ".$iuc;

                $newAmount = $current_bal - $subcable;

                //Mail::to('Tayonik@gmail.com')->send(new \App\Mail\DataSend($realMsg));

                $sms = new SmsController();
                $sms->initiateSmsActivation('07034943087',$realMsg);

                $affected = DB::table('users')->where('id', $myid)->update(['wallet' => $newAmount]);
                if ($affected == 1) {
                    DB::table('cable_buys')->insertOrIgnore([
                        'user_id' => $myid,
                        'price' => $subcable,
                        'subscriber' => $sub_name,
                        'iuc' => $iuc,
                        'created_at' => date('Y-m-d H:i:s'),
                    ]);
                    return redirect()->back()->with('success', 'Cable Subscribed Successfully.'); 
                } else {
                    return redirect()->back()->with('noteno', 'Error! Please try again or contact web Admin.');
                }
            }
        }

    }    

}