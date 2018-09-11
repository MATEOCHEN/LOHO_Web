<?php

namespace App\Http\Controllers\Account\AccountControllerImp;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class AfterAccount_Log_In implements AccountControllerPostImp{
    public function handle(\Illuminate\Http\Request $request)
    {
        $input = $request->all();
        $rules = ['account' => 'required| between:4,20',
        'password' => 'required| between:4,20' ];

        $messages = ['account.required'=>'帳號必填欄位',
        'account.between'=>'帳號必須4-20位數字',
        'password.required'=>'密碼必填欄位',
        'password.between'=>'密碼必須4-20位數字',
        ];
        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {
            if (Auth::attempt(['name' => $input['account'], 'password' => $input['password']])) 
            {   
                return redirect('/');
            }
            else
            {
                return back()->withErrors('帳號或密碼錯誤');
            }
        }
        else
        {
            return back()->withErrors($validator);
        }
    
    }

    
}