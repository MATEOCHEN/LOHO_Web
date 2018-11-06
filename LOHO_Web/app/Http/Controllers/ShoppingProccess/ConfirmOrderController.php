<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Users_own_voucher;
use App\Voucher;
use Illuminate\Support\Facades\Session;
class ConfirmOrderController extends BaseController
{
    public function ConfirmOrder()
    {
        return view('ShoppingProcess\ConfirmOrder');
    }

}
