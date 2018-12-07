<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

use Validator;

use Illuminate\Support\Facades\Auth;
use App\User;
class HomeController extends BaseController
{
    public function index(){
         $str =' <script>alert("歡迎光臨");</script>';
         return view('Index\LOHO_Index',compact('str'));
    }

    public function GetUserData()
    {   
        if(Auth::check())
        {
            $user = User::where('id', Auth::user()->id)->first();
            return response()->json([
                'name' => $user->name,
            ]);
        }
        else{
            return response()->json([
                'name' => '顧客',
            ]);
        }
        
    }
}
