<?php
namespace App\Http\Controllers\Account\GET\AccountControllerGetImp;
use Illuminate\Http\Request;

class Account_Log_In_Imp implements AccountControllerGetImp{

    public function handle()
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