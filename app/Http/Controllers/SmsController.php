<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    private $SMS_SENDER = 'Tayonik GV';
    private $SMS_TOKEN = 'xCJBsC5XzOaPqa6REDT7bITVszCUGgmArIzTEoMOWSQtGuKuoXduuZRw67HmgH12gW14Jd57j452Pghb0KqpxSsCifiLbi5v0gU6';
    private $BASE_URL = 'https://smartsmssolutions.com/api/json.php?';

    public function getUserNumber(Request $request)
    {
        $phone_number = $request->input('phone');

        //$message = "This is a new messge for you, we are testing though.";
        $message = "08104795302 need MTN SME data of price 990.";

        $this->initiateSmsActivation($phone_number, $message);
//        $this->initiateSmsGuzzle($phone_number, $message);

        return redirect()->back()->with('success', 'SMS has been sent successfully');
    }



    public function initiateSmsActivation($phone,$message){
        $isError = 0;
        $errorMessage = true;

        //Preparing post parameters
        $sms_array = array(
            'sender' => $this->SMS_SENDER,
            'to' => $phone,
            'message' => $message,
            'type' => '0',
            'routing' => 2,
            'token' => $this->SMS_TOKEN,
        );

        $params = http_build_query($sms_array);
		$ch = curl_init();

        //Ignore SSL certificate verification
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		curl_setopt($ch, CURLOPT_URL,$this->BASE_URL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

		$response = curl_exec($ch);

		//echo $response; // response code


        //Print error if any
        if (curl_errno($ch)) {
            $isError = true;
            $errorMessage = curl_error($ch);
        }
        curl_close($ch);


        if($isError){
            return array('error' => 1 , 'noteno' => $errorMessage);
        }else{
            return array('error' => 0 );
        }
    }
}
