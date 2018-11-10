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
    {   $payment_type;
        $payment_info;
        switch (Session::get('payment_type', 'default')) {
            case 'ATM_Transfer':
                $payment_type = "ATM轉帳";
                $payment_info = "帳號末五碼:".Session::get('payment_info', 'default');
                break;
            
            case 'Bank_Transfer':
                $payment_type = "銀行匯款";
                $payment_info = "帳號末五碼:".Session::get('payment_info', 'default');
                break;

            case 'Cash_on_delivery':
                $payment_type = "貨到付款";
                $payment_info = "寄送地址:".Session::get('RecipientAddress', 'default');
                break;
        
            default:
                break;
        }
        $data = [
            'payment_type' => $payment_type,
            'payment_info' => $payment_info,
        ];
        return view('ShoppingProcess\CheckoutList',compact('data'));
    }

    public function queryAddress(Request $request)
    {   
        return response()->json(['address' => $request->session()->get('RecipientAddress', 'default')]);
    }

    public function AfterCheckoutList(Request $request)
    {   
        $request->session()->put('payment_type', $request->payment_type);
        $request->session()->put('payment_info', $request->payment_info);

        return response()->json([]);
    }

}
