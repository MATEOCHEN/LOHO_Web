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

    public function AfterClearOrder(Request $request)
    {   
        $cart = Session::get('cart');
        $items = $cart['item'];
        
        $order_history = new Order_history;
        $tmp_order_id = $order_history->oid;
        $order_history->save();
        /*
        foreach ($items as $item) {
            $tmp = Item::where('name', $item['name'])->first();
            $order_detail = new Order_detail;
            $order_detail->item_id = $tmp->id;
            $order_detail->oid = $tmp_order_id;
            $order_detail->save();
        }*/
        
        
        
         return response()->json(['tmp_order_id' =>$tmp_order_id]);
    }
}
