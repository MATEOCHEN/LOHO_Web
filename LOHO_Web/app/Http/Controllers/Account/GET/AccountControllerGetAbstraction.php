<?php

namespace App\Http\Controllers\Account\GET;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse ;
use Hash;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Http\Controllers\Account\GET\AccountControllerGetImp\Account_Log_In_Imp;


class AccountControllerGetAbstraction extends Controller
{
    
    public function Account_Log_In()
    {   
        $Account_Log_In_Imp= new Account_Log_In_Imp();
        return $Account_Log_In_Imp->handle();
    }

    public function AccountInformation()
    {
        return view('Account\AccountInformation');
    }

    public function ForgetPassword()
    {
        return view('Account\ForgetPassword');
    }

    public function ForgetPasswordToModify()
    {
        return view('Account\ForgetPasswordToModify');
    }

    public function PersonalInformation()
    {
        return view('Account\PersonalInformation');
    }

    public function RegisterAccount()
    {
        return view('Account\RegisterAccount');
    }

    public function ModifyPassword(){
        return view('Account\ModifyPassword');
    }

    public function EmailVerification(Request $request){
        return response()
        ->json(['email' => 'test@gmail']);
    }



    
}
