<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

use Validator;

class HomeController extends BaseController
{
    public function index(){
         $str =' <script>alert("歡迎光臨");</script>';
         return view('Index\LOHO_Index',compact('str'));
    }
}
