<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);

        if (array_key_exists('data', $paymentDetails) && array_key_exists('status', $paymentDetails['data']) && ($paymentDetails['data']['status'] === 'success')) {

            $currentBal = $paymentDetails['data']['metadata']['current_bal'];
            $user_id = $paymentDetails['data']['metadata']['user_id'];
            
            $Amt = $paymentDetails['data']['amount'];
            $Amt = $Amt / 100;
            $calculateInt = $Amt * 0.015;
            $Amount = $Amt - $calculateInt;
            $Amount = round($Amount, 0, PHP_ROUND_HALF_UP);
            $newAmount = $Amount + $currentBal;

            $affected = DB::table('users')->where('id', $user_id)->update(['wallet' => $newAmount]);

            DB::table('payments')->insertOrIgnore([
                'user_id' => $paymentDetails['data']['metadata']['user_id'],
                'status' => $paymentDetails['data']['status'], 
                'reference' => $paymentDetails['data']['reference'],
                'amount' => $Amount,
                'payment_type' => 'Paystack',
                'paid_at' => $paymentDetails['data']['paid_at'],
            ]);

            return redirect()->back()->with('success', 'Your Transaction Was Successful.');
        }else{
            return Redirect::back()->with(['msg', 'Transaction not successful, error was encountered. Please try again.']);
        }
    }
}