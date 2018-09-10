<?php

namespace App\Http\Controllers\Account\POST\AccountControllerPostImp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailVerification implements AccountControllerPostImp
{   

    public function handle(Request $request)
    {   
        $data = ['email' => $request->email_text, 'first_name' => 'Kevin', 'from' => 'kevinrow123321@gmail.com', 'from_name' => 'kevinrow123321'];
        
        Mail::raw('測試使用 Laravel 5 的 Gmail 寄信服務', function($message) use ($data)
        {
            $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( 'Welcome!' );
        });

        return response()->json(array(
            
            'msg' => '信件成功寄出',
        ));
    }
    
}