<?php

namespace App\Http\Controllers\Account\GET;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Account\GET\AccountControllerGetImp\Account_Log_In_Imp;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======

>>>>>>> d724b4f726a98a908a912e43ccb2a1caf649f1c2
class AccountControllerGetAbstraction extends Controller
{
    
    public function Account_Log_In()
    {   
        $Account_Log_In_Imp= new Account_Log_In_Imp();
        return $Account_Log_In_Imp->handle();
    }

    public function AccountInformation()
    {   
        if(Auth::check()){
            return view('Account\AccountInformation');
        }
        else{
            return redirect("Account\Account_Log_In");
        }
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

    public function Logout(){
        if (Auth::check())
        {
            Auth::logout();
<<<<<<< HEAD
=======
            Session::forget('item_name');
            Session::forget('item_price');
            Session::forget('item_count');
>>>>>>> d724b4f726a98a908a912e43ccb2a1caf649f1c2
        }
        return redirect("/");
    }

}
