<?php

namespace App\Http\Controllers\Account\POST;

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
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\Account_Log_In_Imp;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\SendModifyPassword;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\AfterAccount_Log_In;
use Validator;

class AccountControllerPostAbstraction extends Controller
{   
    public function AfterAccount_Log_In(Request $request)
    {
        $afterAccount_Log_In = new AfterAccount_Log_In();
        return $afterAccount_Log_In->handle($request);
    }
    
    public function AfterRegisterAccount(Request $request){

        $user = new User;
        
        $user->name = $request->account;
        $password = Crypt::encrypt($request->password);
        $user->password = $password;
        $user->email = $request->email;
        $user->save();
        
        echo '成功註冊';
    }
    
    public function AfterForgetPassword(Request $request)
    {   
        
        $account = Hash::make($request->account);
        if (Hash::check('admin', $account)) {
            echo '(Hash::check OK';
        }
        else{
            echo '(Hash::check Not OK';
        }

        $request->session()->put('key', 'value');
        if ($request->session()->has('key')) {
            //
            $value = $request->session()->get('key', 'default');
            echo  $value;
        }

        if (Hash::needsRehash( $account)) {
            echo '需再Hash::check加密';
            $hashed = Hash::make('plain-text');
        }
        
        Mail::raw('測試使用 Laravel 5 的 Gmail 寄信服務', function($message)
        {
            $message->to('row123321@gmail.com');
        });
        
    }

    public function SendModifyPassword(Request $request)
    {
        
        $SendModifyPassword = new SendModifyPassword();
        return $SendModifyPassword->handle($request);

    }
    
}