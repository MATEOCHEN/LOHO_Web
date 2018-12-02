<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Voucher;
use App\User;
class AccountInfoController extends Controller
{
    
    public function AccountInformation()
    {   
        if(Auth::check()){
            return view('Account\AccountInformation');
        }
        else{
            return redirect("Account\Account_Log_In");
        }
    }

    public function ViewVoucher()
    {
        $vouchers_list = array();
            
        $vouchers = Voucher::where(['using_state' => 'active', 'user_id' => Auth::user()->id])->get();

        foreach($vouchers as $voucher)
        {   
            $voucher_tmp = [
                'coupon_code' => $voucher->id,
                'discounted_price' => $voucher->discounted_price,                   
                'created_at' => $voucher->created_at,
                'expired_date' => $voucher->expired_date,
            ];
            array_push($vouchers_list,$voucher_tmp);  
        }

         $data = ['vouchers' => $vouchers_list];

         return view('Account/ViewVoucher',compact('data'));
    } 

}
