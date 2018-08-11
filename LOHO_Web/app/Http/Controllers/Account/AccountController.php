<?php

namespace App\Http\Controllers\Account;

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
use Validator;
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

    public function ForgetPasswordToModify()
    {
        return view('Account\ForgetPasswordToModify');
    }

    public function PersonalInformation()
    {
        return view('Account\PersonalInformation');
    }

    public function RegisterAccount()
    {
        return view('Account\RegisterAccount');
    }

    public function ModifyPassword(){
        return view('Account\ModifyPassword');
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
        
        session(["admin" => $user->name]);
        

        return redirect('/');

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

    public function EmailVerification(Request $request){
        return response()
        ->json(['email' => 'test@gmail']);
    }

    public function SendModifyPassword(Request $request){

        $input = Input::all();
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

            if($input['origin_password'] == $db_password){
                $user->password = Crypt::encrypt($input['password']);
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
