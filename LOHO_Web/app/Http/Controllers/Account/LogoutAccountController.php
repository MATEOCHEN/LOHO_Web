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
            Session::forget('item_name');
            Session::forget('item_price');
            Session::forget('item_count');
        }
        return redirect("/");
    }

}
