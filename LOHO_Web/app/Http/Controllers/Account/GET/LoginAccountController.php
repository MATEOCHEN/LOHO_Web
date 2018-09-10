<?php

namespace App\Http\Controllers\Account\GET;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\Account\POST\AccountControllerPostImp\AfterAccount_Log_In;
class LoginAccountController extends Controller
{
    
    public function Account_Log_In()
    {   
        return view('Account\Account_Log_In');
    }

    public function AfterAccount_Log_In(Request $request)
    {
        $afterAccount_Log_In = new AfterAccount_Log_In();
        return $afterAccount_Log_In->handle($request);
    }

}
