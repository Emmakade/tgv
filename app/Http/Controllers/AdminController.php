<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Spatie\Permission\Traits\HasRoles;

class AdminController extends Controller
{
    use HasRoles;

    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index(){
        return view('pages.admin.index');
    }

    public function members(){
    	$members = User::select('id','name','phone','email','wallet','is_active')->get();
        return view('pages.admin.allmembers', compact('members'));
    }

    public function buying_all(){
    	$buys = User::join('buys','users.id','=','buys.user_id')
    	->get(['users.name','buys.price','buys.network','buys.phone','buys.created_at']);
    	
        return view('pages.admin.buying_history', compact('buys'));
    }

    public function cable_buy_all(){
    	$cables = User::join('cable_buys','users.id','=','cable_buys.user_id')
    	->get(['users.name','cable_buys.price','cable_buys.subscriber','cable_buys.iuc','cable_buys.created_at']);
    	
        return view('pages.admin.cable_history', compact('cables'));
    }

    public function payment_all(){
        $pays = User::join('payments','users.id','=','payments.user_id')
        ->get(['users.name','payments.reference','payments.amount','payments.payment_type','payments.paid_at']);
        
        return view('pages.admin.payment_history', compact('pays'));
    }

    public function cable(){
        // Todo Later
    	return view('pages.admin.cableoption');
    }

    public function data(){
        // Todo Later
        return view('pages.admin.dataoption');
    }

    public function ban($id){
        try {
            $affected = DB::table('users')->where('id', $id)->update(['is_active' => 0]);
            
            if ($affected) {
                return redirect()->back()->with('success', 'The User Has being Banned');
            } else {
                return redirect()->back()->with('noteno', 'Error occured while performing action');
            }
        } catch (\Exception $e) {
            //die($e);
            return redirect()->back()->with('noteno', 'Error! Cannot perform this action');
        }
    }

    public function unban($id){
        try {
            $affected = DB::table('users')->where('id', $id)->update(['is_active' => 1]);
            
            if ($affected) {
                return redirect()->back()->with('success', 'The User Has being UnBanned');
            } else {
                return redirect()->back()->with('noteno', 'Error occured while performing action');
            }
        } catch (\Exception $e) {
            //die($e);
            return redirect()->back()->with('noteno', 'Error! Cannot perform this action.');
        }
    }
}
