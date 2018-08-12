<?php
namespace App\Http\Controllers\Account\AccountControllerImp;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SendModifyPassword implements AccountControllerImp{

    public function handle(Request $request)
    {
        $input = $request->all();
        $rules = ['password' => 'required| between:4,20|confirmed'];
        $messages = ['password.required'=>'必填欄位',
        'password.between'=>'必須4-20位數字',
        'password.confirmed'=>'密碼需一致'
        ];
        $validator = Validator::make($input,$rules,$messages);
        

        if($validator->passes()){
            $user = User::first();
            $db_password = $user->password;
            $db_password = Crypt::decrypt($db_password);

            if($request->origin_password == $db_password){
                $user->password = Crypt::encrypt($request->password);
                $user->save();
                echo '密碼修改成功';
            }
            else{
                return back()->withErrors("原密碼有誤");
            }
        }
        else{
            return back()->withErrors($validator);
        }
    }
    
}