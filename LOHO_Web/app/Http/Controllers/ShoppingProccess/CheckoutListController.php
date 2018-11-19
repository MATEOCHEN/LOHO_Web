<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Users_own_voucher;
use App\Voucher;
use Illuminate\Support\Facades\Session;
class CheckoutListController extends BaseController
{
    public function CheckoutList()
    {   
        return view('ShoppingProcess\CheckoutList');
    }

    public function queryAddress(Request $request)
    {   
        return response()->json(['address' => $request->session()->get('RecipientAddress_total', '無輸入')]);
    }

    public function GetPaymentData()
    { 
        return response()->json(['payment_type' => Session::get('payment_type', 'default'),'payment_info' => Session::get('payment_info', 'payment_info')]);
    }

    public function AfterCheckoutList(Request $request)
    {   
        $request->session()->put('payment_type', $request->payment_type);
        $request->session()->put('payment_info', $request->payment_info);

        return response()->json([]);
    }

}
