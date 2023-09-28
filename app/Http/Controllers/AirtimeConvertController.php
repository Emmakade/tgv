<?php

namespace App\Http\Controllers;

//use App\dataPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;
use DB;
use Auth;


class AirtimeConvertController extends Controller
{
    
    public function convert(){
       $data = request()->validate([
            'network' => 'required',
            'amount' => 'required|numeric',
            'payout' => 'required',
        ]);

		$network = $data['network'];
		$amount = $data['amount'];
		$payout = $data['payout'];

		$phone = Auth::user()->phone;
		$msg = $phone." want to sell airtime of network =".$network.", amount=".$amount.", to be paid =".$payout;

		Mail::to('Tayonik@gmail.com')->send(new \App\Mail\DataSend($msg));
		$sms = new SmsController();
		$sms->initiateSmsActivation('08136172223',$msg);

		return redirect()->back()->with('success', 'Data Sent Successfully.');
    }

}
