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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class SendModifyPassword implements AccountControllerPostImp{

    public function handle(Request $request)
    {
        $input = $request->all();
        $rules = [
        'origin_password'=> 'required',
        'password' => 'required| between:4,20|confirmed',
        ];
        $messages = [
        'origin_password.required'=>'請輸入原密碼',
        'password.required'=>'請輸入欲修改密碼',
        'password.between'=>'欲修改密碼必須4-20位數字',
        'password.confirmed'=>'欲修改密碼與確認密碼需一致'
        ];
        $validator = Validator::make($input,$rules,$messages);

        return $this->valid($validator,$request);
    }

    private function valid($validator,Request $request){
        if($validator->passes()){
            if($this->checkOrigin_password($request)){
                return $this->updatePassword($request);
            }else{
                return back()->withErrors("原密碼有誤");
            }
        }
        else{
            return back()->withErrors($validator);
        }
    }

    private function checkOrigin_password(Request $request)
    {   
        $user = User::find(Auth::user()->id);
        
        if(Hash::check($request->origin_password, $user->password)){
           return true;
        }
        else{
            return false;
        }
    }
    
    private function updatePassword(Request $request)
    {
        $user = User::first();
        $user->password = bcrypt($request->password);
        $user->save();
       
        return redirect("Account/AccountInformation");
    }
}