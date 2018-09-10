<?php

namespace App\Http\Controllers\Account\GET;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\AfterForgetPassword;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\SendModifyPassword;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\EmailVerification;
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
