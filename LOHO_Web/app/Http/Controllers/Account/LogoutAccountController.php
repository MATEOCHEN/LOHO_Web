<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class LogoutAccountController extends Controller
{
    public function Logout()
    {
        if (Auth::check())
        {
            Auth::logout();
            Session::forget('cart.item');

            Session::forget('ordererName');
            Session::forget('ordererEmail');
            Session::forget('ordererTEL');
            Session::forget('ordererPhone');
            Session::forget('ordererPostal_code');
            Session::forget('ordererCountry');
            Session::forget('ordererArea');
            Session::forget('ordererAddress');

            Session::forget('RecipientName');
            Session::forget('RecipientEmail');
            Session::forget('RecipientTEL');
            Session::forget('RecipientPhone');
            Session::forget('RecipientPostal_code');
            Session::forget('RecipientCountry');
            Session::forget('RecipientArea');
            Session::forget('RecipientAddress');

            Session::forget('payment_type');
            Session::forget('payment_info');
            
            Session::forget('goodsTotal');
            Session::forget('shippingFee');
            Session::forget('coupon_code');
            Session::forget('coupon_price');
            Session::forget('orderTotal');

            Session::forget('shopping_state');
            Session::forget('defaultCheck');
            Session::forget('is_consistent_account_data');

        }
        return redirect("/");
    }

}
