<?php

namespace App\Http\Controllers\Account\POST\AccountControllerPostImp;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;

class AfterAccount_Log_In implements AccountControllerPostImp{
    public function handle(\Illuminate\Http\Request $request)
    {
        $input = Input::all();
        $account = $input['account'];
        $password = $input['password'];
        $user = User::where('name', $account)->first();
        
        $user = User::where('name', $account)->first();
        $decryptAccount = Crypt::decrypt($user->password);

        if($decryptAccount != $password ){
            return back()->with('msg','帳號或密碼錯誤');
        }
        
        session(["admin" => $user->name]);

        return redirect('/');
    }
}