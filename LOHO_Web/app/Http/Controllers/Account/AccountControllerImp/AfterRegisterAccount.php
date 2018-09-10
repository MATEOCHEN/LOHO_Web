<?php
namespace App\Http\Controllers\Account\AccountControllerImp;
use App\User;
use Illuminate\Support\Facades\Crypt;

class AfterRegisterAccount implements AccountControllerPostImp
{
    public function handle(\Illuminate\Http\Request $request)
    {
        $user = new User;
        
        $user->name = $request->account;
        $password = bcrypt($request->password);
        $user->password = $password;
        $user->email = $request->email;
        $user->save();
        
        echo '成功註冊';
    }
}