<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Voucher;
use App\Order_history;
use App\Order_detail;
use App\Item;
use App\Orderer_info;
use App\Recipient_info;
use Illuminate\Support\Facades\Session;

class ClearOrderController extends BaseController
{
    public function ClearOrder()
    {
        return view('ShoppingProcess\ClearOrder');
    }

    public function queryCurrentOrderList(Request $request)
    {   

        return response()->json([
        'ordererName' => $request->session()->get('ordererName', 'default'),
        'ordererEmail' => $request->session()->get('ordererEmail', 'default'),
        'ordererTEL' => $request->session()->get('ordererTEL', 'default'),
        'ordererPhone' => $request->session()->get('ordererPhone', 'default'),
        'ordererPostal_code' =>Session::get('ordererPostal_code', ''),    
        'ordererAddress' => $request->session()->get('ordererAddress_total', 'default'),
        'RecipientName' => $request->session()->get('RecipientName', 'default'),
        'RecipientEmail' => $request->session()->get('RecipientEmail', 'default'),
        'RecipientTEL' => $request->session()->get('RecipientTEL', 'default'),
        'RecipientPhone' => $request->session()->get('RecipientPhone', 'default'),
        'RecipientPostal_code' =>Session::get('RecipientPostal_code', ''),
        'RecipientAddress' => $request->session()->get('RecipientAddress_total', 'default'),
        'payment_type' => $request->session()->get('payment_type', 'default'),
        'payment_info' => $request->session()->get('payment_info', 'default'),
        'goodsTotal' => $request->session()->get('goodsTotal', 'default'),
        'shippingFee' => $request->session()->get('shippingFee', 'default'),
        'coupon_price' => $request->session()->get('coupon_price', 'default'),
        'orderTotal' => $request->session()->get('orderTotal', 'default'),
        'coupon_code' => $request->session()->get('coupon_code', 'default'),
        'coupon_price' => $request->session()->get('coupon_price', 0),
        ]);
    }

    //儲存訂單紀錄, 取消購物狀態
    public function AfterClearOrder(Request $request)
    {   
        $cartItems = Session::get('cart.item', []);
        $current_cartItem;
        
        $order_history = new Order_history;
        $order_history->payment_type = $request->session()->get('payment_type', 'default');
        $order_history->payment_info = $request->session()->get('payment_info', 'default');
        $order_history->goodsTotal = $request->session()->get('goodsTotal', 'default');
        $order_history->shippingFee = $request->session()->get('shippingFee', 'default');
        $order_history->coupon_code = $request->session()->get('coupon_code',null);
        $order_history->orderTotal = $request->session()->get('orderTotal', 'default');
        $order_history->save();
        $tmp_order_id = $order_history->oid;
        
        $orderer_info = new Orderer_info;
        $orderer_info->oid = $tmp_order_id;
        $orderer_info->name = $request->session()->get('ordererName', 'default');
        $orderer_info->email = $request->session()->get('ordererEmail', 'default');
        $orderer_info->telephone_number = $request->session()->get('ordererTEL', 'default');
        $orderer_info->phone_number = $request->session()->get('ordererPhone', 'default');
        $orderer_info->postal_code = $request->session()->get('ordererPostal_code', 'default');
        $orderer_info->address = $request->session()->get('ordererAddress_total', 'default');
        $orderer_info->save();

        $recipient_info = new Recipient_info;
        $recipient_info->oid = $tmp_order_id;
        $recipient_info->name = $request->session()->get('RecipientName', 'default');
        $recipient_info->email = $request->session()->get('RecipientEmail', 'default');
        $recipient_info->telephone_number = $request->session()->get('RecipientTEL', 'default');
        $recipient_info->phone_number = $request->session()->get('RecipientPhone', 'default');
        $recipient_info->postal_code = $request->session()->get('RecipientPostal_code', 'default');
        $recipient_info->address = $request->session()->get('RecipientAddress_total', 'default');
        $recipient_info->save();

        
        foreach ($cartItems as &$cartItem) {
            if($cartItem['name'] != null)
            {
                $tmp = Item::where('name', $cartItem['name'])->first();
                $order_detail = new Order_detail;
                $order_detail->item_id = $tmp->id;
                $order_detail->oid = $tmp_order_id;
                $order_detail->count = $cartItem['count'];
                $order_detail->goodsTotal = $cartItem['count'] * $cartItem['price'];

                $order_detail->save();
            }
        }
        
        $coupon_code = $request->session()->get('coupon_code', null);

        if($coupon_code != null)
        {
            $voucher = Voucher::where('id',$coupon_code)->first();

            $voucher->using_state = 'disabled';
            
            $voucher->save();            
        }

        $request->session()->forget('cart.item');
        $request->session()->forget('ordererName');
        $request->session()->forget('ordererEmail');
        $request->session()->forget('ordererTEL');
        $request->session()->forget('ordererPhone');
        $request->session()->forget('ordererPostal_code');
        $request->session()->forget('ordererCountry');
        $request->session()->forget('ordererArea');
        $request->session()->forget('ordererAddress');
        $request->session()->forget('RecipientName');
        $request->session()->forget('RecipientEmail');
        $request->session()->forget('RecipientTEL');
        $request->session()->forget('RecipientPhone');
        $request->session()->forget('RecipientPostal_code');
        $request->session()->forget('RecipientCountry');
        $request->session()->forget('RecipientArea');
        $request->session()->forget('RecipientAddress');
        $request->session()->forget('payment_type');
        $request->session()->forget('payment_info');
        $request->session()->forget('goodsTotal');
        $request->session()->forget('shippingFee');
        $request->session()->forget('coupon_code');
        $request->session()->forget('coupon_price');
        $request->session()->forget('orderTotal');

        $request->session()->forget('shopping_state');
        $request->session()->forget('defaultCheck');
        $request->session()->forget('is_consistent_account_data');

         return response()->json([]);
    }
}
