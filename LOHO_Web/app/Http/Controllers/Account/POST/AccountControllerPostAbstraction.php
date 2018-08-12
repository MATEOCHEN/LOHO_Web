<?php

namespace App\Http\Controllers\Account\POST;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\Account_Log_In_Imp;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\SendModifyPassword;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\AfterAccount_Log_In;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\AfterForgetPassword;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\AfterRegisterAccount;

class AccountControllerPostAbstraction extends Controller
{   
    public function AfterAccount_Log_In(Request $request)
    {
        $afterAccount_Log_In = new AfterAccount_Log_In();
        return $afterAccount_Log_In->handle($request);
    }
    
    public function AfterRegisterAccount(Request $request)
    {
        $afterRegisterAccount = new afterRegisterAccount();
        return $afterRegisterAccount->handle($request);
    }
    
    public function AfterForgetPassword(Request $request)
    {   
        $afterForgetPassword = new AfterForgetPassword();
        return $afterForgetPassword->handle($request);
    }

    public function SendModifyPassword(Request $request)
    {
        
        $SendModifyPassword = new SendModifyPassword();
        return $SendModifyPassword->handle($request);

    }
    
}