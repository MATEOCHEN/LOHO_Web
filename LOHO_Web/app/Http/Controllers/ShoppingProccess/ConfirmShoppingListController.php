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
        $coupon_price = $request->session()->get('coupon_price', 0);
        
        $data = ['coupon_price' => $coupon_price];
        return view('ShoppingProcess\ConfirmShoppingList',compact('data'));
    }


}
