<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Voucher;
use App\Users_own_voucher;
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
        
        $users_own_vouchers = Users_own_voucher::where(['using_state' => 1, 'user_id' => Auth::user()->id])->get();

        foreach($users_own_vouchers as $users_own_voucher)
        {   
            $vouchers = Voucher::all();
            foreach ($vouchers as $voucher) {
                if($voucher->id == $users_own_voucher->voucher_id)
                {
                    $voucher_tmp = [
                        'coupon_code' => $voucher->id,
                        'discounted_price' => $voucher->discounted_price,
                        'created_at' => $voucher->created_at,
                    ];
                    array_push($vouchers_list,$voucher_tmp);  
                }
            }
        }

         $data = ['vouchers' => $vouchers_list];

         return view('Account/ViewVoucher',compact('data'));
    } 

}
