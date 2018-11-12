<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Users_own_voucher;
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
        'ordererAddress' => $request->session()->get('ordererAddress', 'default'),
        'RecipientName' => $request->session()->get('RecipientName', 'default'),
        'RecipientEmail' => $request->session()->get('RecipientEmail', 'default'),
        'RecipientTEL' => $request->session()->get('RecipientTEL', 'default'),
        'RecipientPhone' => $request->session()->get('RecipientPhone', 'default'),
        'RecipientAddress' => $request->session()->get('RecipientAddress', 'default'),
        'payment_type' => $request->session()->get('payment_type', 'default'),
        'payment_info' => $request->session()->get('payment_info', 'default'),
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
        $order_history->save();
        $tmp_order_id = $order_history->oid;
        
        $orderer_info = new Orderer_info;
        $orderer_info->oid = $tmp_order_id;
        $orderer_info->name = $request->session()->get('ordererName', 'default');
        $orderer_info->email = $request->session()->get('ordererEmail', 'default');
        $orderer_info->telephone_number = $request->session()->get('ordererTEL', 'default');
        $orderer_info->phone_number = $request->session()->get('ordererPhone', 'default');
        $orderer_info->address = $request->session()->get('ordererAddress', 'default');
        $orderer_info->save();

        $recipient_info = new Recipient_info;
        $recipient_info->oid = $tmp_order_id;
        $recipient_info->name = $request->session()->get('RecipientName', 'default');
        $recipient_info->email = $request->session()->get('RecipientEmail', 'default');
        $recipient_info->telephone_number = $request->session()->get('RecipientTEL', 'default');
        $recipient_info->phone_number = $request->session()->get('RecipientPhone', 'default');
        $recipient_info->address = $request->session()->get('RecipientAddress', 'default');
        $recipient_info->save();

        foreach ($cartItems as &$cartItem) {
            $tmp = Item::where('name', $cartItem['name'])->first();
            $order_detail = new Order_detail;
            $order_detail->item_id = $tmp->id;
            $order_detail->oid = $tmp_order_id;
            $order_detail->save();
        }

        $request->session()->forget('cart.item');
        $request->session()->forget('ordererName');
        $request->session()->forget('ordererEmail');
        $request->session()->forget('ordererTEL');
        $request->session()->forget('ordererPhone');
        $request->session()->forget('ordererAddress');
        $request->session()->forget('RecipientName');
        $request->session()->forget('RecipientEmail');
        $request->session()->forget('RecipientTEL');
        $request->session()->forget('RecipientPhone');
        $request->session()->forget('RecipientAddress');
        $request->session()->forget('payment_type');
        $request->session()->forget('payment_info');
        $request->session()->forget('shopping_state');
         return response()->json([]);
    }
}
