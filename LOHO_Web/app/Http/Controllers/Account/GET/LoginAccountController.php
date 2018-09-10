<?php

namespace App\Http\Controllers\Account\GET;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class LoginAccountController extends Controller
{
    
    public function Account_Log_In()
    {   
        $data = ['account' => "Kevin","password" => "12345"];
        $title = "登入畫面";
        $tel = "07123";
        
        $price = 10;
        $scores = ['chinese' => 100,'english' => 100,'math' => 100];
        
        return view('Account\Account_Log_In',compact('data','title','tel','price','scores'));
    }

}
