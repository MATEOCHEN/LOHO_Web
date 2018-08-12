<?php
namespace App\Http\Controllers\Account\AccountControllerImp;
use Illuminate\Http\Request;

class Account_Log_In_Imp implements AccountControllerImp{

    public function handle(Request $request)
    {
        $data = ['account' => "Kevin","password" => "12345"];
        $title = "登入畫面";
        $tel = "07123";
        $str =' <script>alert("歡迎光臨");</script>';
        $price = 10;
        $scores = ['chinese' => 100,'english' => 100,'math' => 100];
        
        return view('Account\Account_Log_In',compact('data','title','tel','str','price','scores'));
    }
}