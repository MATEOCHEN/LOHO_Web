<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function Account_Log_In()
    {
        return view('Account\Account_Log_In');
    }

    public function AccountInformation()
    {
        return view('Account\AccountInformation');
    }

    public function ForgetPassword()
    {
        return view('Account\ForgetPassword');
    }

    public function LOHO_ForgetPasswordToModify()
    {
        return view('Account\LOHO_ForgetPasswordToModify');
    }

    public function PersonalInformation()
    {
        return view('Account\PersonalInformation');
    }

    public function RegisterAccount()
    {
        return view('Account\RegisterAccount');
    }

    public function AfterAccount_Log_In(Request $request){
        return response()->json([
            'account' => $request->account,
            'password' => $request->password
        ]);
    }

    public function AfterRegisterAccount(Request $request){
        return response()->json([
            'name' => $request->name,
            'nickname' => $request->nickname
        ]);
    }
}
