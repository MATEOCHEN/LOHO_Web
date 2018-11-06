<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Users_own_voucher;
use App\Voucher;
use Illuminate\Support\Facades\Session;
class FillOrderListController extends BaseController
{
    public function FillOrderList()
    {
        return view('ShoppingProcess\FillOrderList');
    }

    //save shopping sum into session 
    public function AfterFillOrderList(Request $request)
    {
        $request->session()->put('ordererName', $request->ordererName);
        $request->session()->put('ordererEmail', $request->ordererEmail);
        $request->session()->put('ordererTEL', $request->ordererTEL);
        $request->session()->put('ordererPhone', $request->ordererPhone);
        $request->session()->put('ordererAddress', $request->ordererAddress);//需處理前面縣市地址
        $request->session()->put('RecipientName', $request->RecipientName);
        $request->session()->put('RecipientEmail', $request->RecipientEmail);
        $request->session()->put('RecipientTEL', $request->RecipientTEL);
        $request->session()->put('RecipientPhone', $request->RecipientPhone);
        $request->session()->put('RecipientAddress', $request->RecipientAddress);//需處理前面縣市地址
        return response()->json([]);
    }
}
