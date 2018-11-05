<?php

namespace App\Http\Controllers\Account\AccountControllerImp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailVerification implements AccountControllerPostImp
{   

    public function handle(Request $request)
    {   
        $data = ['email' => $request->email_text, 'first_name' => 'LOHO公司', 'from' => 'kevinrow123321@gmail.com', 'from_name' => 'kevinrow123321'];
        
        Mail::raw('忘記密碼驗證碼，請在十分鐘內輸入以下驗證碼(系統自動寄出，請勿回覆)', function($message) use ($data)
        {
            $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( '會員密碼變更通知信' );
        });

        return response()->json(array(
            
            'msg' => '信件成功寄出',
        ));
    }
    
}