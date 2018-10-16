<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Voucher;
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

    public function PersonalInformation()
    {
        return view('Account\PersonalInformation');
    }

    public function ViewVoucher()
    {
        $vouchers_list = array();
        
        foreach (Voucher::where('user_id', Auth::user()->id)->cursor() as $voucher) {
            $voucher_tmp = [
                'coupon_code' => $voucher->coupon_code,
                'discounted_price' => $voucher->discounted_price,
                'created_at' => $voucher->created_at,
            ];
            array_push($vouchers_list,$voucher_tmp);            
        }

         $data = ['vouchers' => $vouchers_list];

         return view('Account/ViewVoucher',compact('data'));
    } 

}
