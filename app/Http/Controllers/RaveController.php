<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use the Rave Facade
use Rave;

class RaveController extends Controller{
  /**
  * Initialize Rave payment process
  * @return void
  */

  public function initialize(){
    //This initializes payment and redirects to the payment gateway
    //The initialize method takes the parameter of the redirect URL
    try{
      Rave::initialize(route('callback'));
    }catch(\Exception $e) {
        return Redirect::back()->withMessage(['msg'=>'Error encountered. Please try again.', 'type'=>'error']);
    }   
    
  }

  /**
   * Obtain Rave callback information
   * @return void
   */

  public function callback(Request $request){
    
    $resp = $request->resp; 
    $body = json_decode($resp, true); 
    $txRef = $body['data']['data']['txRef']; 
    $paymentData = Rave::verifyTransaction($txRef); 

    //$currentBal; $user_id;
    //dd($paymentData);
    //dd($paymentData->data->meta[1]->metavalue);
    if ($paymentData->status == 'success') {

      if(array_key_exists(0, $paymentData->data->meta) && array_key_exists(1, $paymentData->data->meta)){
          $user_id = $paymentData->data->meta[0]->metavalue;
          $user_id = (int)$user_id;
          $currentBal = $paymentData->data->meta[1]->metavalue;
          $currentBal = (int)$currentBal;
      }
      
      $Amt = $paymentData->data->amount;
      $calculateInt = $Amt * 0.014;
      $Amount = $Amt - $calculateInt;
      $Amount = round($Amount, 0, PHP_ROUND_HALF_UP);
      $newAmount = $Amount + $currentBal;

      //dd($newAmount);
      
      $affected = DB::table('users')->where('id', $user_id)->update(['wallet' => $newAmount]);

      DB::table('payments')->insertOrIgnore([
        'user_id' => $user_id,
        'status' => $paymentData->status, 
        'reference' => $paymentData->data->flwref,
        'amount' => $Amount,
        'payment_type' => 'Flutterwave',
        'paid_at' => $paymentData->data->created,
    ]);

    return redirect('/fund-wallet')->with('success', 'Your Transaction Was Successful.');
    }
    else {
      return redirect('/fund-wallet')->with(['msg', 'Transaction not successful, Error was encountered. Please try again.']);
    } 
  } 
}