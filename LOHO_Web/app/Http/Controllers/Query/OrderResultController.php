<?php

namespace App\Http\Controllers\Query;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use App\Orderer_info;
use App\Order_history;

class OrderResultController extends Controller
{
    public function OrderResult(Request $request) {

        $order_historys_list = array();

        $orderer_infos =  Orderer_info::where(['name' => $request->name,'email' => $request->email])->get();
        
        foreach ($orderer_infos as $orderer_info) {

            $order_history =Order_history::where('oid',$orderer_info->oid)->first();

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



        return view('Query\OrderResult',compact('order_historys_list'));
    }
}