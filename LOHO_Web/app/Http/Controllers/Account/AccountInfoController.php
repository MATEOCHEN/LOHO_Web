<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class AccountInfoController extends Controller
{
    
    public function AccountInformation()
    {   
        if(Auth::check()){
            return view('Account\AccountInformation');
        }
        else{
            return redirect("Account\Account_Log_In");
        }
    }

    public function PersonalInformation()
    {
        return view('Account\PersonalInformation');
    }

}
