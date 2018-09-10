<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\Account\AccountControllerImp\AfterRegisterAccount;
class RegisterAccountController extends Controller
{
    public function RegisterAccount()
    {
        return view('Account\RegisterAccount');
    }
    
    public function AfterRegisterAccount(Request $request)
    {
        $afterRegisterAccount = new AfterRegisterAccount();
        return $afterRegisterAccount->handle($request);
    }

}
