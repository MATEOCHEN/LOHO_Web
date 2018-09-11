<?php
namespace App\Http\Controllers\Account\AccountControllerImp;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Validator;

class AfterRegisterAccount implements AccountControllerPostImp
{
    public function handle(\Illuminate\Http\Request $request)
    {   
        $input = $request->all();
        $rules = [
        'account' => 'required| between:4,20',
        'password' => 'required| between:4,20|confirmed',
        'email' => 'required| email',
        ];

        $messages = [
        'account.required'=>'帳號必填欄位',
        'account.between'=>'帳號必須4-20位數字',
        'password.required'=>'密碼必填欄位',
        'password.between'=>'密碼必須4-20位數字',
        'password.confirmed'=>'欲修改密碼與確認密碼需一致',
        'email.required'=>'email必填欄位',
        'email.email'=>'email格式',
        ];
        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {
            $user = new User;
            //要做驗證
            $user->account = $request->account;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->telephone_number = $request->telephone_number;
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;
            $user->email = $request->email;
            //$user->is_subscribe = $request->is_subscribe;
            $user->save();
            Auth::login($user);
            return redirect('/');
        }
        else
        {
            return back()->withErrors($validator);
        }

    }
}