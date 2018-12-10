<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Voucher;
use App\Order_history;
use App\Order_detail;
use App\Item;
use App\Orderer_info;
use App\Recipient_info;
use App\User;
use Illuminate\Support\Facades\Auth;
class AccountInfoController extends Controller
{
    
    public function AccountInformation()
    {   
        if(Auth::check()){
            $user_list = array();
            $user = User::where('id', Auth::user()->id)->first();
  
            $user_list = [
                'account' => $user->account,
            ];
    
            return view('Account\AccountInformation',compact('user_list'));
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

    public function ViewAllOrderHistory()
    {   
        $order_historys =Order_history::where('Account',Auth::user()->id)->get();

        $order_historys_list = array();

        foreach($order_historys as $order_history)
        {   
            if($order_history->coupon_code == null){
                $coupon_code = '未使用優惠卷';
                $coupon_price = '0';
            }
            else{
                $voucher = Voucher::where(['id' => $order_history->coupon_code])->first();
                $coupon_code = $voucher->id;
                $coupon_price = $voucher->discounted_price;
            }
            $order_history_tmp = [
                'id' => $order_history->oid,
                'goodsTotal' => $order_history->goodsTotal,
                'shippingFee' => $order_history->shippingFee,                   
                'coupon_price' => $coupon_price,
                'coupon_code' => $coupon_code,
                'orderTotal' => $order_history->orderTotal,
            ];
            array_push($order_historys_list,$order_history_tmp);  
        }



        return view('Account\ViewAllOrderHistory',compact('order_historys_list'));
    }
    
    public function ParticularOrderHistory(Request $request)
    {   
        $order__list = array();

        $order_history =Order_history::where('oid',$request->order_id)->first();
  
            if($order_history->coupon_code == null){
                $coupon_code = '未使用優惠卷';
                $coupon_price = '0';
            }
            else{
                $voucher = Voucher::where(['id' => $order_history->coupon_code])->first();
                $coupon_code = $voucher->id;
                $coupon_price = $voucher->discounted_price;
            }
            $order_historys_list = [
                'id' => $order_history->oid,
                'goodsTotal' => $order_history->goodsTotal,
                'shippingFee' => $order_history->shippingFee,                   
                'coupon_price' => $coupon_price,
                'coupon_code' => $coupon_code,
                'orderTotal' => $order_history->orderTotal,
            ];

            array_push($order__list,$order_historys_list); 

            $orderer_info =  Orderer_info::where('oid',$request->order_id)->first();

            $orderer_info_list = [
                'name' => $orderer_info->name,
                'email' => $orderer_info->email,
                'telephone_number' => $orderer_info->telephone_number,                   
                'phone_number' => $orderer_info->phone_number,
                'address' => $orderer_info->address,
            ];

            array_push($order__list,$orderer_info_list); 

            $recipient_info =  Recipient_info::where('oid',$request->order_id)->first();

            $recipient_info_list = [
                'name' => $recipient_info->name,
                'email' => $recipient_info->email,
                'telephone_number' => $recipient_info->telephone_number,                   
                'phone_number' => $recipient_info->phone_number,
                'address' => $orderer_info->address,
            ];

            array_push($order__list,$orderer_info_list); 

        return view('Account\ParticularOrderHistory',compact('order__list'));
    }

}
