<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

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

        if($password != '12345'){
            return back()->with('msg','密碼錯誤');
        }
        return response()->json([
            'account' => $account,
            'password' => $password
        ]);
    }

    public function AfterRegisterAccount(Request $request){
        return response()->json([
            'name' => $request->name,
            'nickname' => $request->nickname
        ]);
    }

    
}
