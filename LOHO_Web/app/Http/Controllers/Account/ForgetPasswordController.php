<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\Account\AccountControllerImp\AfterForgetPassword;
use  App\Http\Controllers\Account\AccountControllerImp\SendModifyPassword;
use  App\Http\Controllers\Account\AccountControllerImp\EmailVerification;
class ForgetPasswordController extends Controller
{
    
    public function ForgetPassword()
    {
        return view('Account\ForgetPassword');
    }

    public function AfterForgetPassword(Request $request)
    {
        $afterForgetPassword = new AfterForgetPassword();
        return $afterForgetPassword->handle($request);
    }


    public function ForgetPasswordToModify()
    {
        return view('Account\ForgetPasswordToModify');
    }

    public function ModifyPassword()
    {
        return view('Account\ModifyPassword');
    }

    public function SendModifyPassword(Request $request)
    {
        $sendModifyPassword = new SendModifyPassword();
        return $sendModifyPassword->handle($request);
    }

    public function EmailVerification(Request $request)
    {
        $emailVerification = new EmailVerification();
        return $emailVerification->handle($request);
    }


}
