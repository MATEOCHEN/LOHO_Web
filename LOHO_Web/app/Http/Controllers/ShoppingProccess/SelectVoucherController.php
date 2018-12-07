<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Voucher;
use Illuminate\Support\Facades\Session;
class SelectVoucherController extends BaseController
{

    public function SelectVoucher()
    {   
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
    
             return view('ShoppingProcess\SelectVoucher',compact('data'));
        } 
    }

    //放入coupon_code coupon_price 進session
    public function UseVoucher(Request $request)
    {   
        $request->session()->put('coupon_code',$request->coupon_code);
        $coupon_code = $request->session()->get('coupon_code', 'default');
        $coupon_price = $request->session()->get('coupon_price', 0);

        $vouchers = Voucher::all();
            foreach ($vouchers as $voucher) {
                if($voucher->id == $coupon_code)
                {
                    $coupon_price =  $voucher->discounted_price;
                    $request->session()->put('coupon_price',$coupon_price);
                    break;  
                }
            }

        return response()->json(['coupon_code' => $coupon_code,'coupon_price' => $coupon_price]);
    }

}
