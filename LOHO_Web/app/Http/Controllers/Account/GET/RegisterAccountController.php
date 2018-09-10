<?php

namespace App\Http\Controllers\Account\GET;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterAccountController extends Controller
{
    public function RegisterAccount()
    {
        return view('Account\RegisterAccount');
    }

}
