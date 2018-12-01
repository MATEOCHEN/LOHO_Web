<?php

namespace App\Http\Controllers\Game;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;
use App\Voucher;
use Validator;
use Illuminate\Support\Facades\Auth;


class StoreVoucherController extends Controller
{
    public function StoreVoucher(){

        return view('Game\StoreVoucher');
    }

    public function AfterStoreVoucher(\Illuminate\Http\Request $request)
    {
        $input = $request->all();
        $rules = ['account' => 'required| between:4,20',
        'password' => 'required| between:4,20' ];

        $messages = ['account.required'=>'帳號必填欄位',
        'account.between'=>'帳號必須4-20位數字',
        'password.required'=>'密碼必填欄位',
        'password.between'=>'密碼必須4-20位數字',
        ];
        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {
            if (Auth::attempt(['account' => $input['account'], 'password' => $input['password']])) 
            {   
                $user = User::where('account', $input['account'])->first();
                $voucher = new Voucher;
                $voucher->discounted_price = 100;
                $voucher->user_id =  $user->id;
                $voucher->save();

                return view('Game/StoreVoucherSuccess');
            }
            else
            {
                return back()->withErrors('帳號或密碼錯誤');
            }
        }
        else
        {
            return back()->withErrors($validator);
        }
    
    }

}
