<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
//use Spatie\Permission\Traits\HasRoles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PagesController extends Controller
{
    //use HasRoles;
    protected $guard_name = 'web';
    //give access to only login user to see
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$role = Role::findById(2);
        //$permission1 = Permission::findById(1);
        //$permission2 = Permission::findById(1);
        
        //$role->givePermissionTo($permission2);

        //dd($role); 
        //auth()->user()->assignRole('admin');
        
        return view('pages.home');
    }

    public function airtime()
    {
        return view('pages.airtime');
    }

    public function trans()
    {
        return view('pages.towallet');
    }

    public function mobileTopup()
    {
        return view('pages.mobile-topup');
    }

    /*public function cableSub()
    {
        return view('pages.cable-subscription');
    }*/

    public function sms()
    {
        return view('pages.send-sms');
    }

    public function fundWallet()
    {
        return view('pages.fund-wallet');
    }

    public function cabledata()
    {
        //get all personal data History
        $pays = auth()->user()->buys()->get();
        return view('pages.history', compact('pays'));
    }

    public function ajc()
    {
        //get all personal cable History
        $cable = auth()->user()->cable_buys()->get();
        return response()->json($cable);
    }

    public function hist()
    {
        $pays = auth()->user()->payments()->get();
        return view('pages.payment-history', compact('pays'));
    }

    public function pro()
    {
        $pro = auth()->user();
        return view('pages.profile', compact('pro'));
    }
    public function paystack()
    {
        return view('pages.paystack');
    }
    public function flutterwave()
    {
        return view('pages.flutterwave');
    }
    public function monnify()
    {
        return view('pages.monnify');
    }
}
