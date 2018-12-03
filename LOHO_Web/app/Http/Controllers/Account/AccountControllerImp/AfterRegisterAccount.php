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
        'name' => 'required',
        'telephone_number' => 'required',
        'phone_number' => 'required',
        'email' => 'required',
        'account' => 'required| between:4,20',
        'password' => 'required| between:4,20|confirmed',
        ];

        $messages = [
        'name.required'=>'請填寫姓名欄位',
        'telephone_number.required'=>'請填寫市話欄位',
        'phone_number.required'=>'請填寫行動電話欄位', 
        'email.required'=>'請填寫email欄位',
        'email.email'=>'填寫email請符合格式',        
        'account.required'=>'請填寫帳號欄位',
        'account.between'=>'帳號必須4-20位數字',
        'password.required'=>'請填寫密碼欄位',
        'password.between'=>'密碼必須4-20位數字',
        'password.confirmed'=>'欲修改密碼與確認密碼需一致',
   
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
            //$user->address = $request->address; 需修改成fillorder型式
            $user->email = $request->email;
            //$user->is_subscribe = $request->is_subscribe;
            $user->save();
            Auth::login($user);

            return response()->json(['status' => 'success']);
        }
        else
        {
            return response()->json(['status' => 'fail','errors'=>$validator->errors()->all()]);
        }

    }
}