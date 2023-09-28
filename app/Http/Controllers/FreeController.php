<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use Auth;

class FreeController extends Controller
{
    
    public function trans()
    {
        $data = request()->validate([
            'phone' => 'required|numeric',
            'amount' => 'required|numeric',
        ]);
        
        $current_bal = Auth::user()->wallet;
        $amount = $data['amount'];
        $phone = $data['phone'];

        if ($amount > $current_bal) {
            return redirect()->back()->with('noteno', 'Your account is too low, Please Load Your <a href="/fund-wallet">Wallet</a>');
        } else{ 
            $newAmount = $current_bal - $amount;
            $affected = DB::table('users')->where('id', Auth::user()->id)->update(['wallet' => $newAmount]);
            if ($affected == 1) {
                $nDb = DB::update('update users set wallet = wallet +'.$amount.' where phone = ?', [$phone]);
                //echo $nDb; die();
            } else {
                return redirect()->back()->with('noteno', 'Error saving details, contact admin.');
            }
            
            return redirect()->back()->with('success', 'Wallet Transfer Was Successful.');
        }
        //return view('pages.towallet');
    }

    public function contact(){
        try {
            $data = request()->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'subject' => 'required|string|min:8',
            'message' => 'required|min:10',
            ]);

            $guestMail = $data['email'];

            $realMsg = "Name : ". $data['name'] 
            . "Email : ". $data['email']
            . "Subject : ". $data['subject']
            . "Message : ". $data['message'];

            $isMailSent = Mail::to('tayonik@gmail.com')->send(new \App\Mail\GuestContactMail($realMsg,$guestMail));
            
            //dd($isMailSent);

            return redirect()->back()->with('success', 'Your message was sent successfully, we will get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('msg', 'An error occur sending your message, Please contact the site admin.');
        }
    }
}
