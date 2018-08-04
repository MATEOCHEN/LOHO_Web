<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Illuminate\Support\Facades\DB;
class AccountController extends Controller
{
    public function Account_Log_In()
    {   
        $data = ['account' => "Kevin","password" => "12345"];
        $title = "登入畫面";
        $tel = "07123";
        $str =' <script>alert("歡迎光臨");</script>';
        $price = 10;
        $scores = ['chinese' => 100,'english' => 100,'math' => 100];
        session(["admin" => '123']);
        return view('Account\Account_Log_In',compact('data','title','tel','str','price','scores'));
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
        $input = Input::all();
        $account = $input['account'];
        $password = $input['password'];
        $user = User::where('name', $account)->first();
        
        $user = User::where('name', $account)->first();
        $decryptAccount = Crypt::decrypt($user->password);

        if($decryptAccount != $password ){
            return back()->with('msg','帳號或密碼錯誤');
        }
        

        return $user;

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

    
}
