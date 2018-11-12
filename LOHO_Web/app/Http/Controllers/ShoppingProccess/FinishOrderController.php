<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
class FinishOrderController extends BaseController
{
    public function FinishOrder()
    {   
        return view('ShoppingProcess\FinishOrder');
    }

}
