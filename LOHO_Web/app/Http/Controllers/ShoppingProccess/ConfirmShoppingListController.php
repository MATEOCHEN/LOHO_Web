<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Users_own_voucher;
use App\Voucher;
use Illuminate\Support\Facades\Session;
class ConfirmShoppingListController extends BaseController
{

    public function ConfirmShoppingList(Request $request)
    {
        return view('ShoppingProcess\ConfirmShoppingList');
    }

    public function GetVoucherState(Request $request)
    {
        $coupon_code = $request->session()->get('coupon_code', null);
        $coupon_price = $request->session()->get('coupon_price', 0);

            return response()->json([
                'coupon_code' => $coupon_code,
                'coupon_price' => $coupon_price]
            );
    }

    public function CancelVoucherState(Request $request)
    {
        $request->session()->put('coupon_code', null);
        $request->session()->put('coupon_price', 0);

        return response()->json([]);
    }

    //save shopping sum into session 
    public function AfterConfirmShoppingList(Request $request)
    {
        $request->session()->put('goodsTotal', $request->goodsTotal);
        $request->session()->put('shippingFee', $request->shippingFee);
        $request->session()->put('coupon_price', $request->coupon_price);
        $request->session()->put('orderTotal', $request->orderTotal);
        $request->session()->put('shopping_state', true);
        return response()->json(['msg' => '']);
    }

}
